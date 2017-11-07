<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- ************************************ meio ************************************************ -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
      <img alt="Brand" src="<?= base_url()?>assets/images/icon1.png">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= base_url()?>Home">VOLTAR</a></li>
	       </ul>
    </div>
  </div>
</nav>

<!-- Container (About Section) -->
   
<div class="container-fluid bg-grey">

  <div class="row">

      <div class="col-sm-4">

      </div>

      <div class="col-sm-2">

        
          <form class="form-signin">
            <h2 class="form-signin-heading">FAZER LOGIN</h2>
            <label for="inputNome" class="sr-only">Usuario</label><br>
            <input type="text" id="inputNome" class="form-control" placeholder="nome user" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <br>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          </form>
        
   
      </div>
    
  </div>

</div>
