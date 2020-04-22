

<form method="POST" action="<?php echo URL_BASE  . "Login/login" ?>" class="form-signin" enctype="multipart/form-data" onsubmit="this.Cadastrar.value='Enviando...'; this.Cadastrar.disabled=true;">

  <img src=" <?php echo URL_BASE . "auxiliar/img/uninassau.png" ?> " width="180" height="120"/>

  <h1> <font face="Monotype Corsiva"> 5º Período de ADS</font> </h1>
      
  <input type="text" name="login_" class="form-control" style="-webkit-border-radius: 10px; text-transform: uppercase;" placeholder="Login" required autofocus>

  </br>

  <input type="password" name="senha_" class="form-control" placeholder="Password" required>

  </br>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="Cadastrar">Logar</button>

  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>

</form>