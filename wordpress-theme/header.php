<!-- HEADER  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AKAI TORI</title>
    <link
      rel="shortcut icon"
      href="./images/favicon.png"
      type="image/png"
    />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.0.0/modern-normalize.min.css"
      integrity="sha512-ISS7cAi1PEhQ8jnbJpJZMd29NlhNj4AWYyLOSp2CE/CsHxTCu+r+t0D2yoJudVrd0/8fTVPUVDzY5Tvli75u/g=="
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="./sass/fonts/Optima/stylesheet.css" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /> -->
    <link rel="stylesheet" href="./sass/slick.css" />
    <link rel="stylesheet" href="./sass/slick-theme.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <?php wp_head(); ?>
  </head>
  <body class="page home-page">
    <header>
      <div class="container">
          <ul class="header-list">
            <li><img src="./images/logo.svg" alt="AKAI TORI logo" class="desktop-header-logo"></li>
            <li class="header-site-name">
              <h1>AKAI TORI</h1>
              <h2>Japanese restaurant</h2>
            </li>
            <li>
              <nav>
                <a href="./" class="nav-link">HOME</a>
                <a href="#" class="nav-link">MENU</a>
                <a href="#about-us" class="nav-link">ABOUT US</a>
              </nav>
            </li>
          </ul>
      </div>
      
      <ul class="mobile-header">
          <li>
            <img src="./images/logo.svg" alt="AKAI TORI logo" class="mobile-header-logo">
          </li>
          <li class="header-site-name">
            <h1>AKAI TORI</h1>
            <h2>Japanese restaurant</h2>
          </li>
          <li>
            <img
            loading="lazy"
            src="./images/burger-icon.svg"
            alt="menu"
            class="burger"
          />
        </li>
      </ul>
      <div class="mobile-menu animate__animated animate__fadeInDownBig">
        <div class="img-wrapper">
          <img
            loading="lazy"
            src="./images/close-button.svg"
            alt="icon close"
            class="close-btn"
            width="18"
          />
        </div>
        <ul class="mobile-nav-list">
          <a href="./" class="mobile-nav-link">HOME</a>
          <a href="#" class="mobile-nav-link">MENU</a>
          <a href="#about-us" class="mobile-nav-link">ABOUT US</a>
        </ul>
      </div>
    </header>

    <!-- HEADER  -->