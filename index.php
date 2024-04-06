<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <title>ESCOLAR</title>
  </head>
  <body>
    <header>
    <?php
include './templates/navbar.php';
?>
      <div class="align-banner">
        <section class="banner">
          <h3>Sistema de Gerenciamento de Escola</h3>
          <h1>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, sit
            nemo. Odio ipsa laudantium dolorem possimus. Voluptatum iste facere
            inventore
          </h1>
          <button><a href="#servicos"> Comece Hoje -></a></button>
        </section>
      </div>
    </header>
    <main>
      <section class="servicos" id="servicos">
        <div class="card-servico">
          <div class="header-card">
            <span></span>
            <p>CLASSES</p>
          </div>
          <div class="img-card">
            <img src="./img/sala.jpg" alt="" />
          </div>
          <div class="texto-card">
            <h2>Multimedia Classes</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              asperiores voluptatum veritatis illo! Quisquam odit id ipsam
              voluptatem quia! Laudantium.
            </p>
            <a href="#">VER MAIS ></a>
          </div>
        </div>

        <div class="card-servico">
          <div class="header-card">
            <span></span>
            <p>LIBRARY</p>
          </div>
          <div class="img-card">
            <img src="./img/livraria.jpg" alt="" />
          </div>
          <div class="texto-card">
            <h2>Excelent Library</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              asperiores voluptatum veritatis illo! Quisquam odit id ipsam
              voluptatem quia! Laudantium.
            </p>
            <a href="#">VER MAIS ></a>
          </div>
        </div>

        <div class="card-servico">
          <div class="header-card">
            <span></span>
            <p>TRANSPORT</p>
          </div>
          <div class="img-card">
            <img src="./img/transporte.jpg" alt="" />
          </div>
          <div class="texto-card">
            <h2>Transport Facilities</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              asperiores voluptatum veritatis illo! Quisquam odit id ipsam
              voluptatem quia! Laudantium.
            </p>
            <a href="#">VER MAIS ></a>
          </div>
        </div>
      </section>

      <!--<div class="img-fundo">!-->
      <section class="equipe">
        <div class="card-equipe">
          <div class="img-equipe">
            <img src="img/equipe1.jpg" alt="" />
          </div>
          <p>Francis David</p>
          <p class="funcao">Front-End</p>
          <div class="redes-sociais">
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>

        <div class="card-equipe">
          <div class="img-equipe">
            <img src="img/equipe2.jpg" alt="" />
          </div>
          <p>Jake Ross</p>
          <p class="funcao">Designer</p>
          <div class="redes-sociais">
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>

        <div class="card-equipe">
          <div class="img-equipe">
            <img src="img/equipe3.jpg" alt="" />
          </div>
          <p>Sin-Jin</p>
          <p class="funcao">Back-End</p>
          <div class="redes-sociais">
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>

        <div class="card-equipe">
          <div class="img-equipe">
            <img src="img/equipe4.jpg" alt="" />
          </div>
          <p>Ana Liz</p>
          <p class="funcao">Manager</p>
          <div class="redes-sociais">
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
      </section>
      <!--</div>!-->

     <?php
include './templates/footer.php';
?>
    </main>
    <script
      src="https://kit.fontawesome.com/1c065add65.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
