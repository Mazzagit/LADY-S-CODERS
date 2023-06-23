<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <style>
    :root {
  --background-color: white;
}

body {
  background-color: var(--background-color);
}

    .images-container {
      position: relative;
      margin-left: auto;
      margin-right: 0;
    }

    .image1 {
      position: absolute;
      top: 0;
      right: 0;
      height: 600px;
      z-index: 2;
      margin-top: 50px;
    }

    .image2 {
      position: absolute;
      top: 0;
      right: 0;
      height: 600px;
      z-index: 1;
    }

    .image-text {
      margin-top: 150px;
      margin-left: -250px;
    }

    .navbar {
      top: 0;
      display: flex;
      justify-content: space-around;
      width: 100%;
      height: 100px;
      background-color: var(--navbar-color);
      z-index: 100;
    }

    /* CSS pour le navbar en mode sombre */
    .dark-mode .navbar {
      background-color: #000;
      /* Couleur en mode sombre */
      color: #fff;
      /* Couleur du texte en mode sombre */
    }

    #colorButton {
      background-color: #fff;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    #colorButton:hover {
      background-color: #f2f2f2;
    }

    #colorButton i {
      font-size: 20px;
    }

    .dark-mode #colorButton {

      color: #fff;
    }

    .dark-mode #colorButton:hover {
      top: 0;
    }

    #search {
      border-radius: 50px;
      border: 2px solid black;
    }

    #button {
      background-color: #000, transparent;
      border: 0px solid black;
      height: 30px;
      border-radius: 30px;
      cursor: pointer;
    }
/* CSS DE ACTUALITé*/
    .j{
    border-radius: 0%;  
    background-color: #f8f9fa;
width: 100%;
height: auto;

}
.h1{text-align: center;
    border-radius: 50%;
    background-color: rgb(62, 175, 62); 

}
.card-body{
    border-radius: 0%; 
    background-color:  #f8f9fa;   
}

  
.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .background{background-color: #f8f9fa;

  }
  .h{ border-radius: 50%;
    background-color: rgb(62, 175, 62);
  }
  </style>
  <title>YOUTHCONNEKT_BURKINA-FASO</title>
</head>


<body>
  <header>
    <section class="navbar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images\logo.jpg" alt="" srcset=""
                    style="height: 110px;margin-top: -50px;width: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="bienvenu.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-3 text-primary" aria-current="page" href="#index.php">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-3 text-primary" aria-current="page" href="#YouthTV">YouthTV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-3 text-primary" aria-current="page" href="#HangOut">HangOut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-3 text-primary" aria-current="page" href="#YouthDays">YouthDays</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-3 text-primary" aria-current="page" href="#Connexion">Connexion</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active ms-3 text-primary" aria-current="page" href="youthForum.php">Forum</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Partenariat
                        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.mdenp.gov.bf/accueil#:~:text=Le%20Minist%C3%A8re%20de%20la%20Transition%20Digitale%2C%20des%20Postes,num%C3%A9rique%2C%20des%20postes%20et%20de%20la%20transformation%20digitale">Ministere en charge de la transition digital</a></li>
                            <li><a class="dropdown-item" href="https://www.undp.org/fr/burkina-faso">PNUD</a></li>
                            <li><a class="dropdown-item" href="https://www.giz.de/en/worldwide/329.html">GIZ</a></li>
                            <li><a class="dropdown-item" href="https://spong.bf/#">SPONG</a></li>
                            <li><a class="dropdown-item" href="https://bf.jobbooster-network.com/">JOB BOOSTER SEC</a></li>
                            <li><a class="dropdown-item" href="https://web.facebook.com/saeiburkina/?_rdc=1&_rdr">SAEI Burkina</a></li>
                            <li><a class="dropdown-item" href="https://burkina-ntic.net/spip.php?article339#:~:text=Burkina%20Faso%20Societ%C3%A9%20civile%20SOCI%C3%89T%C3%89%20CIVILE%20La%20soci%C3%A9t%C3%A9,droits%20de%20l%E2%80%99homme%2C%20les%20associations%20et%20les%20groupements">La Société Civil</a></li>
                        </ul>
                    </li>
                    <button id="colorButton" class="btn btn-light" style="animation: blink 1s infinite;"><i class="bi bi-moon"></i></button>

                    <button id="colorButton" class="btn btn-light" style="animation: blink 1s infinite;"><i class="bi bi-moon"></i></button>

<script>
  const colorButton = document.getElementById("colorButton");
  const navbar = document.querySelector(".navbar");

  let isBlack = true;

  colorButton.addEventListener("click", function () {
    if (isBlack) {
      document.documentElement.style.setProperty("--background-color", "white");
      navbar.style.setProperty("background-color", "white");
      isBlack = false;
    } else {
      document.documentElement.style.setProperty("--background-color", "black");
      navbar.style.setProperty("background-color", "black");
      isBlack = true;
    }
  });
</script>

                  </ul>
            </div>
        </div>
    </nav>
  
    </section>
    <section class="list-actualite">
      <div class="images-container">
        <div class="image-overlay">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/image1.png" alt="Image 1" class="image1">
            </div>
            <div class="col-md-8">
              <div class="image-text">
                <input type="search" id="search" value="" onchange="ouvrirPage()">
                <input type="button" id="button" onclick="ouvrirPage()" value="rechercher">
                <script>
                  function ouvrirPage() {
                    var a = document.getElementById("search").value;

                    if (a === "PNUD") {
                      window.open("https://www.giz.de/en/worldwide/329.html");
                    }

                    if (a === "") {
                      window.open("Youtdays.php");
                    }
                    if (a === "") {
                      window.open("Youtdays.php");
                    }
                    if (a === "facebook") {
                      window.open("https://www.facebook.com/profile.php?id=100064865527149&locale=sw_KE");

                    }
                    if (a === "youtube") {
                      window.open("https://www.youtube.com/");
                    }
                    if (a === "") {
                      window.open("Youtdays.html");
                    }
                    if (a === "Actualité") {
                      window.open("Youtdays.html");
                    }

                  }
                </script>

                <h5 style="font-size: 55px;">YouthConnekt</h5>
                <h5 style="font-size: 35px;">BURKINA-FASO</h5>
                <p> <em>La plateforme faite par les jeunes <br>
                    et pour les jeunes.</em></p>
              </div>
              <button class="btn btn-success" type="button" style="margin-left: -250px; width: 120px ;">
                <em>VISITER</em> </button>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/image2.png" alt="Image 2" class="image2">
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <br><br><br><br><br><br><br><br><br>

<div id="YouthTV">
<div class="background">
        <div class="j">
            <div class="h" style="text-align: center">
                <h1>Youth TV <a href="index.php"></a> </h1>
            </div> <br> <br>
            <div class="card-group" style="text-align: center">
                <div class="card">
                    <div class="card-body">
                        <img src="images\imagrrr.jpg" alt="image" width="100%">
                        <h5 class="card-title">Webinaire</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                            <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                        </svg>

                        <p><button type="submit" class="btn btn-success"><a href="#" class="link-info">voir</a></button></p>
                    </div>
                </div>

                <div class="card" style="text-align: center">

                    <div class="card-body">
                        <img src="image.group2.jpg" alt="image" width="100%">
                        <h5 class="card-title">Emissions TV</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
                            <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z" />
                        </svg>
                        <p><button type="submit" class="btn btn-success"><a href="voirtv.php" class="link-info">voir</a></button></p>

                    </div>
                </div>
                <div class="card" style="text-align: center">
                    <div class="card-body">
                        <img src="image.group3.jpg" alt="image" width="100%">
                        <h5 class="card-title">Emissions Radio</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boombox" viewBox="0 0 16 16">
                            <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm7.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm-7-1a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm5.5 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                            <path d="M11.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm0-1a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                            <path d="M7 10.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-1 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                            <path d="M14 0a.5.5 0 0 1 .5.5V2h.5a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12.5V.5A.5.5 0 0 1 14 0ZM1 3v3h14V3H1Zm14 4H1v7h14V7Z" />
                        </svg>

                        <p><button type="submit" class="btn btn-success"><a href="#" class="link-info">voir</a></button></p>

                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    </div>

    
<div id="Actualités">
  <div class="bg-light" style=" min-height: 100%;margin-bottom: -100px;">
<div class="container-fluid ">
    <div class="container-fluid my-5 ">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <img src="image/activité.png" alt="" class="img-fluid rounded bg-success">
        </div>
        <div class="col-md-5 ms-5">
          <div>
          <h1 class="fw-bold fst-italic my-3"> <a href="index.php">Activités</a></h1>
          </div>
          <div class="fst-italic fs-5 my-5 fw-light">
            Etes-vous jeunes, dynamiques, motive(é)s <br> désirant de participer au développement <br>de sa communauté?
            <br>
            Cliquez ici et voir la liste de nos activités
          </div>
          <div>
          <a href="activités.php" class="btn btn-success rounded-0 btn-lg text-light d-grid gap-2 col-4 mx-auto ms-5">
    Voir
</a>

          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
    <br><br>

<div id="HangOut"></div>
    <div class="container-fluid my-5 ">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <div>
            <img src="image/bras.png" alt="" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-md-1"> </div>

        <div class="col-md-4">
          <h2 class="fw-bold fst-italic my-4"><a href="index.php">Hangout </a></h2>

          <div class="fst-italic fs-6 my-3 fw-light">
            <h4 class="fw-bold fst-italic my-3">Mentor</h4>
            Voulez-vous partager votre<br> expereience ? Former la relève ?
            <br>
            Postulez-et devenez mentor ?
          </div>
          <div>
            <button type="button" class="btn btn-success  rounded-0 btn-sm text-light d-grid gap-2 col-4 mx-auto ms-1">
              Voir</button>
          </div>

          <div class="fst-italic fs-6 my-3 fw-light">
            <h4 class="fw-bold fst-italic my-3">Mentoré</h4>
            Besoin d'un mentor, d'un pair,<br> d'un parrainage ? Avez-vous <br> soif d'apprendre ?
            <br>
            Postulez pour un mentor ?
          </div>
          <div>
            <button type="button" class="btn btn-success rounded-0 btn-ms text-light d-grid gap-2 col-4 mx-auto ms-1">
              Voir</button>
          </div>

        </div>
      </div>
    </div>

    <div id="YouthDays"></div>
    <div class="container-fluid my-5 bg-dark ">
      <div class="row">
        <div class="col-md-6">
          <img src="imagegr.jpg" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6 ">
          <div class="fst-italic fs-6 my-5 text-light fw-light ms-5">
            <h1 class="fw-bold fst-italic mb-5"><a href="index.php">YouthDays</a></h1>
            <p class="fs-3 fst-italic fw-medium"> Participer à YouthDays, rencontrer des jeunes;<br>et créé-toi un
              réseau.
              <br>
            </p>
            <p class="fs-5 fst-italic my-5"> YouthDays offre aux jeunes un cadre de <br> rencontre et de brassage de
              jeunes de <br> différentes communautés et localités</p>
          </div>
          <div>
            <button type="button" class="btn btn-success rounded-0 btn-lg text-light d-grid gap-2 col-4 mx-auto ms-5">
              Voir</button>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container my-5">
      <div class="row">

      <div id="Connexion"></div>
        <div class="col-md-6">
          <h1 class="fw-bold fst-italic mb-5"><a href="index.php">Inscription à la Newsletter </a></h1>
          <div class="custom-shadow bg-body-success rounded" style="box-shadow: 0 0 9px green;">
            <div> <input class="form-control fst-italic border-start-0 border-end-0 border-top-0 rounded-0  mb-3"
                type="text" placeholder="Nom" aria-label="default">
              <input class="form-control fst-italic border-start-0 border-end-0 border-top-0 mb-3" type="text"
                placeholder="Prénom(s)" aria-label="default">
              <div class="d-flex">
                <input class="form-control fst-italic  border-start-0 border-end-0 border-top-0 mb-3" type="text"
                  placeholder="Genre" aria-label="default">
                <div class="btn-group" data-toggle="buttons ">
                  <input type="radio" name="options" id="option1"> Homme

                  <input type="radio" name="options" id="option2"> Femme

                </div>
              </div>
              <input class="form-control fst-italic border-start-0 border-end-0 border-top-0 mb-3" type="text"
                placeholder="Adresse-email" aria-label="default">
            </div>
          </div>
          <div class=" my-3">
            <button class=" btn btn-success rounded-0  " type="button">Envoyer</button>
          </div>
        </div>
        <div class="col-md-1 ">  </div>
      
        <div class="col-md-5 ">
          <h1 class="fw-bold mb-5 text-center">Localisez-nous</h1>
         
            
               <div class="col-md-1"></div>
          <div>
          <div>
    <?php
        $latitude = 12.343734128284343;
        $longitude = -1.5271597903754124;
    ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.584424507556!2d-1.5271597903754124!3d12.343734128284343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e95a4065c6cf9%3A0xb149204f4a4f80a2!2sSecr%C3%A9tariat%20Permanent%20de%20YouthConnekt%20Burkina!5e0!3m2!1sfr!2sbf!4v1687365916280!5m2!1sfr!2sbf"
        width="500" height="200" style="border:0; border-radius: 1%;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>


<br><br>
<div id="Contact">
    <footer class=" footer bg-dark text-light mb-0  mt-5" style=" height: 100%; width: 100%; padding: 40px; ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-2">
            <p class="fs-4 mt-4"> <a class="nav-link" href="youthopportunity.php"> Opportunités </a></p>
            <p class="fs-4"> <a class="nav-link" href="#"> Activités </a></p>
          </div>
          <div class="col-md-2">
            <p class="fs-4 mt-4"> <a class="nav-link" href="activité.php"> Actualités </a></p>
            <p class="fs-4"> <a class="nav-link" href="youthforum"> Forum </a></p>
            <p class="fs-4"> <a class="nav-link" href="#"> Contacts </a></p>
          </div>
          <div class="col-md-2">
            <p class="fs-4 mt-4"> <a class="nav-link" href="#"> Hangout </a></p>
            <p> <a class="nav-link" href="#"> Mentor </a></p>
            <p> <a class="nav-link" href="#"> Mentoré </a></p>
          </div>
          <div class="col-md-2">
            <p class="fs-4 mt-4"> <a class="nav-link" href="#"> Youth Tv </a></p>
            <p> <a class="nav-link" href="#"> Webinaire </a></p>
            <p> <a class="nav-link" href="#"> Emission Radio </a></p>
            <p> <a class="nav-link" href="youthtv.php"> Emission Tv </a></p>
          </div>

          <!--lien page facebook de youthconnekt Burkina-->
          <div class="col-md-1">
            <button class="border-0 bg-dark mt-4 mb-4">
              <a href="https://www.facebook.com/profile.php?id=100064865527149&locale=sw_KE">
                <svg xmlns="" width="30" height="30" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </button>
            </button>
            <button class="border-0 bg-dark  mb-4 my-1">
              <a href="https://wa.me/+226 70 94 84 08"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                  fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg></a>
            </button>
            <button class="border-0 bg-dark mb-4">
              <a
                href=" https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj92M7qstL_AhUbRUEAHdF3AbcQFnoECA8QAQ&url=https%3A%2F%2Fwww.instagram.com%2Fyouthconnektafrica%2F%3Fhl%3Dfr&usg=AOvVaw1YoGvEMbZ_pI7EjprvgZKh&opi=89978449">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a>
            </button>
            <button class="border-0 bg-dark mb-4">
              <a
                href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjEj_7cs9L_AhXDTkEAHU9jAbcQFnoECA4QAQ&url=https%3A%2F%2Ftwitter.com%2Fyouthconnektb%3Flang%3Dfr&usg=AOvVaw2ha6--Zu5-gOrRnOZI50Bk&opi=89978449">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-twitter"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg> </a>
            </button>
            <button class="border-0 bg-dark mb-4">
              <a href="info.youthconnektburkina@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                  height="30" fill="white" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg></a>
            </button>
          </div>
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
</body>

</html>