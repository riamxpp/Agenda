<?php

  include_once('config/url.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
    <div class="container-fluid d-flex justify-content-start">
      <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
        <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
      </a>
      <div>
        <div class="navbar-nav">
          <a class="nav-link active" href="<?= $BASE_URL ?>index.php">Agenda</a>
          <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
        </div>
      </div>
    </div>
  </nav>
  </header>  