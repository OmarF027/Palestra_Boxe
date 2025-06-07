document.addEventListener("DOMContentLoaded", function () {
  const ombrelloniGrid = document.querySelector('.spiaggia-grid');
  const inputOmbrellone = document.getElementById('ombrellone');
  const submitBtn = document.querySelector('.btn-submit');
  const selectedInfo = document.getElementById('selected-info');
  const selectedNumber = document.getElementById('selected-number');
  const dataArrivoInput = document.getElementById('data_arrivo');
  const dataPartenzaInput = document.getElementById('data_partenza');

  let selectedOmbrellone = null;

  // FUNZIONE RENDER OMBRELLONI
  function renderOmbrelloni(occupati = []) {
    ombrelloniGrid.innerHTML = '';
    const totalOmbrelloni = 36;

    for (let i = 1; i <= totalOmbrelloni; i++) {
      const isOccupato = occupati.includes(i);
      const a = document.createElement('a');
      a.href = '#';
      a.classList.add('ombrellone');
      if (isOccupato) {
        a.classList.add('prenotato');
        a.title = `Ombrellone ${i} - Occupato`;
        a.style.pointerEvents = 'none';
      } else {
        a.title = `Ombrellone ${i} - Disponibile`;
      }
      if (selectedOmbrellone == i) {
        a.classList.add('selected');
      }
      a.dataset.numero = i;
      a.innerHTML = `<i class="fas fa-umbrella-beach ombrellone-icon"></i><span>${i}</span>`;
      ombrelloniGrid.appendChild(a);

      if (!isOccupato) {
        a.addEventListener('click', function(e) {
          e.preventDefault();
          selectedOmbrellone = i;

          // Deseleziona tutti
          document.querySelectorAll('.ombrellone.selected').forEach(el => el.classList.remove('selected'));
          // Seleziona questo
          a.classList.add('selected');

          inputOmbrellone.value = i;
          selectedNumber.textContent = i;
          selectedInfo.style.display = 'flex';
          submitBtn.disabled = false;
          submitBtn.textContent = `Prenota ombrellone n° ${i}`;
        });
      }
    }
  }

  // CARICA DISPONIBILITA VIA AJAX
  async function caricaDisponibilita() {
    const dataArrivo = dataArrivoInput.value;
    const dataPartenza = dataPartenzaInput.value;

    if (!dataArrivo || !dataPartenza) {
      renderOmbrelloni([]);
      selectedOmbrellone = null;
      inputOmbrellone.value = '';
      selectedInfo.style.display = 'none';
      submitBtn.disabled = true;
      submitBtn.textContent = "Conferma Prenotazione";
      return;
    }

    if (dataArrivo > dataPartenza) {
      alert("La data di arrivo deve essere precedente a quella di partenza.");
      return;
    }

    try {
      const response = await fetch(`prenota.php?action=check&data_arrivo=${dataArrivo}&data_partenza=${dataPartenza}`);
      if (!response.ok) throw new Error("Errore nel caricamento disponibilità");

      const occupati = await response.json();

      selectedOmbrellone = null;
      inputOmbrellone.value = '';
      selectedInfo.style.display = 'none';
      submitBtn.disabled = true;
      submitBtn.textContent = "Conferma Prenotazione";

      renderOmbrelloni(occupati);

      updateCalendarSelection(dataArrivo, dataPartenza);

    } catch (error) {
      alert("Impossibile caricare la disponibilità: " + error.message);
    }
  }

  dataArrivoInput.addEventListener('change', caricaDisponibilita);
  dataPartenzaInput.addEventListener('change', caricaDisponibilita);

  renderOmbrelloni([]);

  // ------------- CALENDARIO ---------------
  const calendarEl = document.querySelector('.calendar');
  const monthYearEl = document.getElementById('calendar-month-year');
  const prevMonthBtn = document.getElementById('prev-month');
  const nextMonthBtn = document.getElementById('next-month');

  let currentYear, currentMonth; // 0-based month
  let calendarStart = null;
  let calendarEnd = null;

  function formatDateYMD(date) {
    let m = (date.getMonth() + 1).toString().padStart(2, '0');
    let d = date.getDate().toString().padStart(2, '0');
    return `${date.getFullYear()}-${m}-${d}`;
  }

  function updateInputsFromCalendar() {
    if (calendarStart && calendarEnd) {
      dataArrivoInput.value = formatDateYMD(calendarStart);
      dataPartenzaInput.value = formatDateYMD(calendarEnd);
      caricaDisponibilita();
    }
  }

  function renderCalendar(year, month) {
    currentYear = year;
    currentMonth = month;

    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);

    const monthNames = ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'];
    monthYearEl.textContent = `${monthNames[month]} ${year}`;

    [...calendarEl.querySelectorAll('.day')].forEach(dayEl => {
      if (!dayEl.classList.contains('day-name')) dayEl.remove();
    });

    const startWeekDay = (firstDay.getDay() + 6) % 7; // lun=0..dom=6

    for (let i = 0; i < startWeekDay; i++) {
      const emptyCell = document.createElement('div');
      emptyCell.classList.add('day', 'disabled');
      calendarEl.appendChild(emptyCell);
    }

    const now = new Date();
    now.setHours(0,0,0,0);

    for (let d = 1; d <= lastDay.getDate(); d++) {
      const dayEl = document.createElement('div');
      dayEl.classList.add('day');
      dayEl.textContent = d;
      const thisDate = new Date(year, month, d);

      if (thisDate < now) {
        dayEl.classList.add('disabled');
      }

      if (calendarStart && calendarEnd) {
        if (thisDate.getTime() === calendarStart.getTime() || thisDate.getTime() === calendarEnd.getTime()) {
          dayEl.classList.add('selected');
        } else if (thisDate >= calendarStart && thisDate <= calendarEnd) {
          dayEl.classList.add('in-range');
        }
      }

      dayEl.addEventListener('click', () => {
        if (dayEl.classList.contains('disabled')) return;

        if (!calendarStart || (calendarStart && calendarEnd)) {
          calendarStart = thisDate;
          calendarEnd = null;
        } else {
          if (thisDate < calendarStart) {
            calendarEnd = calendarStart;
            calendarStart = thisDate;
          } else {
            calendarEnd = thisDate;
          }
          updateInputsFromCalendar();
        }
        renderCalendar(currentYear, currentMonth);
      });

      calendarEl.appendChild(dayEl);
    }
  }

  prevMonthBtn.addEventListener('click', () => {
    let newMonth = currentMonth - 1;
    let newYear = currentYear;
    if (newMonth < 0) {
      newMonth = 11;
      newYear--;
    }
    renderCalendar(newYear, newMonth);
  });

  nextMonthBtn.addEventListener('click', () => {
    let newMonth = currentMonth + 1;
    let newYear = currentYear;
    if (newMonth > 11) {
      newMonth = 0;
      newYear++;
    }
    renderCalendar(newYear, newMonth);
  });

  function updateCalendarSelection(arrivo, partenza) {
    if (arrivo && partenza) {
      calendarStart = new Date(arrivo);
      calendarEnd = new Date(partenza);
      if (calendarEnd < calendarStart) calendarEnd = calendarStart;
      renderCalendar(calendarStart.getFullYear(), calendarStart.getMonth());
    }
  }

  const today = new Date();
  renderCalendar(today.getFullYear(), today.getMonth());

  dataArrivoInput.addEventListener('input', () => {
    if (dataArrivoInput.value && dataPartenzaInput.value) {
      updateCalendarSelection(dataArrivoInput.value, dataPartenzaInput.value);
    }
  });

  dataPartenzaInput.addEventListener('input', () => {
    if (dataArrivoInput.value && dataPartenzaInput.value) {
      updateCalendarSelection(dataArrivoInput.value, dataPartenzaInput.value);
    }
  });
});
