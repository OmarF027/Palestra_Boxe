<!-- Font e Icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&family=Lato:wght@400&family=Raleway:wght@300&display=swap" rel="stylesheet">

<!-- Specifico solo per la homepage -->
    <link rel="stylesheet" href="css/home.css" />
    <div id="home" class="section">

  <!-- Overlay scuro -->
  <div class="overlay"></div>

  <h1 class="section-title">
    <span class="highlight">FIGHT GYM</span>
  </h1>

  <p class="section-subtitle">
    <strong>GROSSETO</strong>
  </p>
</div>

<style>
#home {
    background-color: #000;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('img/home.jpg') no-repeat center center;
    background-size: cover;
    color: #fff;
    text-align: center;
    padding: 0 20px;
    font-family: 'Kumbh Sans', sans-serif;
}

#menù h2,
#home .section-title,
#home .section-subtitle {
    font-family: 'Kumbh Sans', sans-serif;
}

#home .overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.1);
    z-index: 1;
}

#home .section-title {
    position: relative;
    z-index: 2;
    margin: 0;
    font-size: 4.2em; /* desktop */
    font-weight: 700;
    letter-spacing: 1px;
}

#home .section-subtitle {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 20px auto 0;
    font-size: 2em; /* desktop */
    line-height: 1.5;
    opacity: 0;
    animation: fadeInUp 0.8s ease-out forwards;
    animation-delay: 0.4s;
    white-space: nowrap;
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
</style>