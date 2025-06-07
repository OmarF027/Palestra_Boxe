document.addEventListener("DOMContentLoaded", function () {
  const apiKey = '4e5b4da3c4ebb09f5cffe432d8d00ebb';
  const lat = 42.8085;
  const lon = 10.7433;
  const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric&lang=it`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      const weatherDiv = document.getElementById("weather-info");
      const temp = data.main.temp.toFixed(1);
      const desc = data.weather[0].description;
      const icon = data.weather[0].icon;
      const iconUrl = `https://openweathermap.org/img/wn/${icon}@2x.png`;

      weatherDiv.innerHTML = `
        <img src="${iconUrl}" alt="${desc}" style="vertical-align: middle;" />
        <div><strong>${temp}°C</strong> - ${desc}</div>
      `;
    })
    .catch(error => {
      document.getElementById("weather-info").textContent = "Errore nel caricamento dei dati meteo.";
      console.error("Errore meteo:", error);
    });
});
