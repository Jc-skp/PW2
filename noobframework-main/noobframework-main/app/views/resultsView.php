<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noobframework</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <style>
      * {
        padding: 0;
        margin: 0;
        outline: 0;
        box-sizing: border-box;
      }

      html,
      body {
        font-family: 'Roboto', Arial, Helvetica, sans-serif;
      }

      .App {
        display: flex;
        width: 100%;
        height: 100vh;

        align-items: center;
        justify-content: center;
        color: #333;
        flex-direction: column;
      }

      h1 {
        overflow: hidden;
        border-right: 0.1em solid #333;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: 0.15em;
        animation: typing 3.5s steps(40, end),
          blink-caret 0.75s step-end infinite;
        font-size: 50px;
        transition: all 0.3s;
        text-align: center;
      }

      h1 span {
        font-family: 'Dancing script', 'Roboto', Arial, Helvetica, sans-serif;
      }

      .content {
        width: 40%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 5%;
        overflow: hidden;
        height: 0;
        animation: contentAnimation 1.5s 4.5s forwards;
        transition: all 0.3s;
        max-height: 150px;
      }

      .content .card {
        background-color: #fff;
        width: calc(100% / 2 - 10px);
        margin-bottom: 20px;
        padding: 30px;
        border-radius: 8px;
        border: 1px solid rgba(51, 51, 51, 0.192);
        transition: all 0.3s;
        cursor: pointer;
        font-size: 1.3em;
        text-decoration: none;
      }

      .card:visited {
        color: #333;
      }

      .content .card:hover {
        color: #3f8bfd;
        border-color: #3f8bfd;
      }
      .content .card:hover .title i {
        fill: #3f8bfd;
      }

      .content .card .title {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }
      .content .card .title i {
        margin-right: 10px;
        transition: fill 0.1s;
      }

      .content .card p {
        font-size: 0.8em;
      }

      @keyframes contentAnimation {
        from {
          height: 0%;
          opacity: 0;
        }
        to {
          height: 100%;
          opacity: 1;
          overflow: visible;
        }
      }

      @keyframes typing {
        from {
          width: 0;
        }
        to {
          width: 100%;
        }
      }

      @keyframes blink-caret {
        from,
        to {
          border-color: transparent;
        }
        50% {
          border-color: #333;
        }
      }

      @media (max-width: 1350px) {
        .content {
          width: 50%;
        }

        h1 {
          font-size: 40px;
        }
      }

      @media (max-width: 1245px) {
        .content {
          width: 60%;
        }

        h1 {
          font-size: 40px;
        }
      }

      @media (max-width: 990px) {
        .content {
          width: 65%;
        }

        h1 {
          font-size: 40px;
        }
      }

      @media (max-width: 885px) {
        .content {
          width: 70%;
        }

        h1 {
          font-size: 40px;
        }
      }

      @media (max-width: 700px) {
        .content {
          width: 80%;
        }

        .content .card .title svg {
          display: none;
        }

        h1 {
          font-size: 35px;
        }
      }

      @media (max-width: 580px) {
        .content {
          width: calc(100% - 30px);
        }

        .content .card .title svg {
          display: none;
        }

        h1 {
          font-size: 25px;
        }
      }
    </style>
  </head>
  <body>
  <?php
    require_once './app/Controllers/getController.php';
    
    $get = new Get();
    $age = $_GET['age'];
    
    $merc = 4.2;
    $ven = 1.6 ;
    $mar = 0.53;
    $jup = 11.86;
    $sat = 29.46;
    $ura = 84.01;
    $net = 164.79;

    $ageMerc= $merc * $age;
    $ageVen=  $ven * $age;
    $ageMar=  $mar * $age;
    $ageJup= $jup / $age;
    $ageSat= $sat / $age;
    $ageUra= $ura / $age;
    $ageNet= $net / $age;

    if ($age == '') {
      echo "<h1>Preencha sua idade! </h1>";
      echo "<a href='../views/index.html'>Voltar</a>";
  } else {
      
?>
<section>
<h1>Essas são as idades que você teria em cada planeta do Sistema Solar</h1>
<p>Mercúrio: <?= $age['age'] ?> </p>
<p>Vênus: <?= $age['age'] ?> </p>
<p>Terra: <?= $age['age'] ?> </p>
<p>Marte: <?= $age['age'] ?> </p>
<p>Júpiter: <?= $age['age'] ?> </p>
<p>Saturno: <?= $age['age'] ?> </p>
<p>Urano: <?= $age['age'] ?> </p>
<p>Netuno: <?= $age['age'] ?> </p>

<hr>


<?php 

  break;
}    
 ?>
    <div class="root">
      <div class="App">
        <div class="typewritter">
          <h1>Descubra sua idade em outros planetas!<span></span></h1>
        </div>
        <div class="content">
          
          <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Mercúrio: </h4>
              <p>Mercúrio: <?= $$ageMerc ?> </p>
            </div>
            <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Vênus: </h4>
              <p>Vênus: <?= $$ageVen ?> </p>
            </div>
            <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Marte: </h4>
              <p>Marte: <?= $$ageMar ?> </p>
            </div>
            <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Jupiter: </h4>
              <p>Jupiter: <?= $$ageJup ?> </p>
            </div>
            <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Saturno: </h4>
              <p>Saturno: <?= $$ageSat ?> </p>
            </div>
            <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Urano: </h4>
              <p>Urano: <?= $$ageUra ?> </p>
            </div>
            <div class="card">
            <div class="title">
              <i class="fas fa-rocket"></i>
              <h4>Sua idade em Netuno: </h4>
              <p>Netuno: <?= $$ageNet ?> </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
