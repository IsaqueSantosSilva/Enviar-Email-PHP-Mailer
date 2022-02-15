<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Enviador de Email</title>
</head>

<body>
  <div class="bluered-bg"> </div>

  <main class="container">
    <form class="form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
      <h1 class="mb-5">Enviar E-mail</h1>
      <div class="ui form">
        <div class="field">
          <label>Seu Nome:</label>
          <input type="text" placeholder="*Seu Nome" name="name">
        </div>
        <div class="field">
          <label>Email do Destinatário:</label>
          <input type="email" placeholder="*Email do Destinatário" name="email">
        </div>
        <div class="field">
          <label>Sua Mensagem</label>
          <textarea type="text" name="message"></textarea>
        </div>
        <button type="submit" name="submit" class="ui primary button" id="loadingbtn">Enviar</button>
      </div>
    </form>
  </main>

  <!-- Modal Start -->
  <div id="register-modal" class="ui modal">
    <i class="close icon"></i>
    <div class="header">
      Obrigado!
    </div>
    <div class="image content">
      <div class="description">
        <div class="description">
          <h5>Sua mensagem foi enviada com sucesso!</h5>
        </div>
      </div>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Fechar
      </div>
    </div>
  </div>
  <!-- Modal End -->

  <!-- Error Message Box -->
  <div class="error" id="errorBox">
    <p id="errorMessage"></p>
  </div>

  <script src="assets/script/script.js"></script>

  <!-- jQuery :) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

  <script src="assets/semantic/semantic.min.js"></script>

</body>

</html>

<?php

include_once('send.php');
if (isset($_POST["submit"])) {
  (new SendMessage())->sendEmail();
}

?>