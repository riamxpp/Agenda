<?php

  session_start();

  include_once('connection.php');
  include_once('url.php');


  $data = $_POST;

  if (!empty($data)){
    // CRIAR CONTATO
    if($data['type'] == 'create'){
      $name = $data['name'];
      $observations = $data['observations'];
      $phone = $data['phone'];
      
      $query = 'INSERT INTO contacts (name, observations, phone) VALUES (:name, :observations, :phone)';
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':observations', $observations);
      $stmt->bindParam(':phone', $phone);

      try {
        $stmt->execute();
        $_SESSION['msg'] = "Contato criado com sucesso!";
      }catch(Exception $e) {
        echo 'ERRO: ' . $e->getMessage() . '<br>';
      }
    }
    // REDIRET HOME
    header('Location: ' . $BASE_URL . '../index.php');
  }else {
    // RETORNA UM CONTATO
    if(!empty($_GET)){
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
      $query = 'SELECT * FROM contacts';

      $stmt = $conn->prepare($query);

      $stmt->execute(); 
      $contacts = $stmt->fetchAll();
    }
  }

  #FECHANDO CONEXÃO
  $conn = null;