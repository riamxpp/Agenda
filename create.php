<?php 
  include_once('templates/header.php');
?>
  <div class="container">
    <?php include_once('templates/backbtn.html'); ?>
    <h1 id="main-title">Criando contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" name="name" required class="form-control" placeholder="Insira o Nome" id="name">
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" name="phone" required class="form-control" placeholder="Insira o Número" id="phone">
      </div>
      <div class="form-group">
        <label for="observations">Observações:</label>
        <textarea type="text" name="observations" required class="form-control" placeholder="Insira as observações" id="observations" rows="3"></textarea>
      </div><br>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

<?php 
  include_once('templates/footer.php');
?>