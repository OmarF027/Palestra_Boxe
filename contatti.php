<!-- Font e Icone -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&family=Lato:wght@400&family=Raleway:wght@300&display=swap" rel="stylesheet">

<!-- Specifico solo per la homepage -->
<link rel="stylesheet" href="css/contatti.css" />

<style>
  .contact-section h1 {
    text-align: left;
    color: #000 !important;
  }

  .contact-text {
    max-width: 800px;
    margin: 0 auto;
    font-size: 1.5em;
    line-height: 1.6;
    color: #000;
    padding-bottom: 20px;
    opacity: 0;
    animation: fadeInUp 1s 0.5s forwards;
    text-align: left;
  }

  .contact-header .contact-text:last-of-type {
    margin-bottom: 20px; 
  }

  .info-card {
    margin-bottom: 5px !important;
    flex: 1 1 300px;
  }

  .contact-grid {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .contact-logo {
    flex: 0 0 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20px !important;
    opacity: 0;
    animation: fadeInUp 1s 0.8s forwards;
  }

  .contact-logo img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .contact-logo img:hover {
    transform: scale(1.1);
}

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Mobile responsiveness */
  @media (max-width: 600px) {
    .contact-text {
      font-size: 1.2em;
      padding: 0 20px !important;
    }

    .contact-section h1 {
      font-size: 1.6em !important;
      padding: 0 20px !important;
      text-align: left !important;
    }

    .contact-grid {
      flex-direction: column;
      padding: 0 10px;
    }

    .contact-logo {
      flex: none;
      margin: 20px auto 0;
      width: 325px;
      display: block;
    }
  }
</style>

<body class="contact-page">
  <!-- Contact Section -->
  <section id="contatti" class="contact-section">
    <div class="contact-header">
<h1 style="opacity: 1 !important; font-size: 2.5rem !important; transform: translateY(0) !important; color: #1a5276 !important; margin-bottom: 0.5rem !important;">
  Contatti
</h1>

<p style="font-size: 1.5rem; margin-top: 0.2rem;" class="contact-text">
  Per qualsiasi informazione, richiesta di prenotazioni o servizi, non esitare a contattarci! 
  Il nostro staff è sempre a disposizione per offrirvi tutte le informazioni necessarie e assistervi nella scelta della sistemazione più adatta alle vostre esigenze.
</p>

<p style="font-size: 1.5rem; margin-top: 0.2rem;" class="contact-text">
  Offriamo tariffe flessibili per soddisfare ogni tipo di soggiorno: giornaliere, settimanali e stagionali.
</p>

<p style="font-size: 1.5rem; margin-top: 0.2rem;" class="contact-text">
  <strong>Prenota subito il tuo posto in spiaggia!</strong>
</p>

    </div>

    <div class="contact-grid">
      <!-- Info -->
      <div class="info-card">
        <h3 class="section-title">
          <i class="fas fa-info-circle"></i>
          Informazioni
        </h3>
        <div class="contact-info">
          <div class="info-item">
            <i class="fas fa-map-pin"></i>
            <p>58043 Punta Ala (GR)<br />Toscana, Italia</p>
          </div>
          <div class="info-item">
            <i class="fas fa-clock"></i>
            <p><strong>Orari di apertura:</strong><br />Tutti i giorni: 6:30 – 00:30<br>
          </div>
          <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <p><a href="tel:+390564234567">+39 0564 234567</a></p>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p><a href="mailto:info@torretta21.com">info@torretta21.com</a></p>
          </div>
          <div class="info-item">
            <i class="fas fa-file-alt" aria-hidden="true"></i>
            <p>
              <a href="privacy.php" target="_blank" rel="noopener noreferrer" aria-label="Privacy Policy" class="privacy-link">
                Privacy Policy
              </a>
            </p>
          </div>
          <div class="info-item">
            <i class="fas fa-file-alt" aria-hidden="true"></i>
            <p>
              <a href="cookie_policy.php" target="_blank" rel="noopener noreferrer" aria-label="Cookie Policy" class="cookie-link">
                Cookie Policy
              </a>
            </p>
          </div>
        </div>
      </div>

      <!-- Logo a destra della card -->
      <div class="contact-logo">
        <img src="img/logo.jpg" alt="Fight Gym Grosseto Logo" />
      </div>
    </div>

  </section>

