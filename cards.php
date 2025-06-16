<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fight Gym Grosseto</title>

  <!-- Font e Icone -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&family=Lato:wght@400&family=Raleway:wght@300&display=swap" rel="stylesheet" />

  <style>
    body {
      background-color: #eaeaea !important;
      font-family: 'Lato', sans-serif;
    }

    .section-inner {
      padding: 2rem;
    }

    .table-wrapper {
      overflow-x: auto;
      width: 100%;
      margin-top: 2rem;
    }

    table.schedule {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      font-size: 1rem;
      text-align: center;
    }

    .schedule thead {
      background-color: #333;
      color: white;
    }

    .schedule th, .schedule td {
      border: 1px solid #ccc;
      padding: 12px;
      vertical-align: middle;
    }

    .schedule td.active {
      background-color: #f5f5f5;
      font-weight: bold;
      color: #222;
    }

    .schedule td.inactive {
      background-color: #fafafa;
      color: #aaa;
    }

    .affiliazioni img {
      max-height: 80px;
      width: auto;
      margin-right: 1.5rem;
    }

    #servizi.affiliazioni {
      margin-top: -20px !important;
    }

    /* Miglioramenti tablet */
    @media (max-width: 768px) {
      table.schedule {
        font-size: 1.1rem;
        width: 100%;
      }

      .schedule th, .schedule td {
        padding: 16px 12px;
      }

      .section-inner {
        padding: 1.5rem;
      }

      .affiliazioni img {
        max-height: 70px;
        margin-bottom: 1rem;
      }
    }

    /* Miglioramenti mobile: stack verticale */
    @media (max-width: 480px) {
      table.schedule,
      table.schedule thead,
      table.schedule tbody,
      table.schedule th,
      table.schedule td,
      table.schedule tr {
        display: block;
      }

      table.schedule thead {
        display: none;
      }

      table.schedule tr {
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
      }

      table.schedule td {
        text-align: left;
        padding: 10px 16px;
        position: relative;
      }

      table.schedule td::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        margin-bottom: 4px;
        color: #b20000;
      }
    }
  </style>
</head>

<body>
  <!-- Intro -->
  <section id="servizi" class="sezione">
    <div class="section-inner">
      <h2 style="font-size: 2.5rem; margin-bottom: 0.8rem; line-height: 1.1;">FIGHT GYM GROSSETO</h2>
      <p style="font-size: 1.5rem;" class="intro-text">
        <strong>Fight Gym Grosseto</strong>: da oltre 30 anni punto di riferimento negli sport da combattimento in Toscana.  
        Offriamo corsi di <strong>pugilato</strong>, kickboxing, muay thai, lotta, ju jitsu e difesa personale, rivolti sia a principianti che ad agonisti,  
        con istruttori qualificati e una struttura all’avanguardia.  
        Nel corso degli anni abbiamo formato atleti di altissimo livello, che hanno portato i nostri colori sui <strong>podi nazionali e internazionali</strong>.
      </p>

      <!-- Tabella Orari -->
      <h2 style="font-size: 2.5rem; margin-top: 2rem; color: #b20000;">ORARI CORSI</h2>
      <div class="table-wrapper">
        <table class="schedule">
          <thead>
            <tr>
              <th>Corso</th>
              <th>Lunedì</th>
              <th>Martedì</th>
              <th>Mercoledì</th>
              <th>Giovedì</th>
              <th>Venerdì</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Corso">Pugilato</td>
              <td class="active" data-label="Lunedì">9:00 - 10:15<br>13:15 - 14:30<br>20:45 - 22:00
              <td class="inactive" data-label="Martedì"></td>
              <td class="active" data-label="Mercoledì">9:00 - 10:15<br>16:00 - 17:15<br>20:45 - 22:00</td>
              <td class="active" data-label="Giovedì">13:15 - 14:30</td>
              <td class="active" data-label="Venerdì">9:00 - 10:15<br>16:00 - 17:15<br>20:45 - 22:00</td>
            </tr>
            <tr>
              <td data-label="Corso">Kickboxing</td>
              <td class="active" data-label="Lunedì">19:30 - 21:00</td>
              <td class="inactive" data-label="Martedì"></td>
              <td class="active" data-label="Mercoledì">19:30 - 21:00</td>
              <td class="inactive" data-label="Giovedì"></td>
              <td class="active" data-label="Venerdì">19:30 - 21:00</td>
            </tr>
            <tr>
              <td data-label="Corso">Muay Thai</td>
              <td class="active" data-label="Lunedì">18:30 - 20:00</td>
              <td class="inactive" data-label="Martedì"></td>
              <td class="active" data-label="Mercoledì">18:30 - 20:00</td>
              <td class="inactive" data-label="Giovedì"></td>
              <td class="active" data-label="Venerdì">18:30 - 20:00</td>
            </tr>
            <tr>
              <td data-label="Corso">Ju Jitsu</td>
              <td class="inactive" data-label="Lunedì"></td>
              <td class="active" data-label="Martedì">18:00 - 19:30</td>
              <td class="inactive" data-label="Mercoledì"></td>
              <td class="active" data-label="Giovedì">18:00 - 19:30</td>
              <td class="inactive" data-label="Venerdì"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Affiliazioni -->
  <section id="servizi" class="sezione affiliazioni">
    <div class="section-inner">
      <h2 style="font-size: 2.5rem; margin-bottom: 0.8rem; line-height: 1.1;">AFFILIAZIONI</h2>
      <a href="https://www.fpi.it" target="_blank" rel="noopener" style="text-decoration:none;">
        <img src="img/fpi_logo.jpg" alt="Federazione Italia Pugilato" />
      </a>
      <a href="https://www.pgsitalia.org" target="_blank" rel="noopener" style="text-decoration:none;">
        <img src="img/psg_logo.jpg" alt="PGS" />
      </a>
    </div>
  </section>
</body>
</html>
