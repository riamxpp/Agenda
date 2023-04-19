<?php

  session_start();

  include_once('connection.php');
  include_once('url.php');

  // RETORNA UM CONTATO
  // $contact
  if(isset($_GET)){
    $id = $_GET['id'];
  }
  if (!empty($id)){ 
    $query_contact = 'SELECT * FROM contacts WHERE id = :id';
    $stmt = $conn->prepare($query_contact);
    $stmt->bindParam('id', $id);
    $stmt->execute();

    $contact = $stmt->fetch();

  }else {
    // RETORNA TODOS OS CONTATOS
    $contacts = [];
    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute(); 
    $contacts = $stmt->fetchAll();
  }

