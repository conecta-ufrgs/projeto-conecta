<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- ************************************ meio ************************************************ -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
                    <!-- Container do Menu do NavBar -->
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
              <li><a href="<?= base_url()?>Desafios">VOLTAR</a></li>
              <li><a href="<?= base_url()?>Desafios/login">FAZER LOGIN</a></li>
              <li><a href="<?= base_url()?>Home">HOME</a></li>
            </ul>
          </div>
      </div>
    </nav>

          <!-- Container do Formulario -->
   
      <div class="container-fluid bg-grey">



        <div class="row"> 

          <div class="col-md-8">
                <h2>CADASTRO DE DESAFIANTE</h2>
              
                                                          
            <form action="<?php echo base_url('Desafios/salvar') ?>" name="form_add" method="post">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">

                      <label for="nome">Nome </label>

                      <input type="text" class="form-control" id="nome" name="nome" placeholder="digite o seu Nome" required>
                                                                  
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">

                      <label for="cpf">CPF</label>

                      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="digite o seu CPF - apenas os números" required>
                                                                  
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">

                    <label for="fone"> Fone </label>
                    <input type="text" class="form-control" id="fone" name="fone" placeholder="digite seu fone de contato" required>
                                                             
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">

                    <label for="email"> Email </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="digite seu email" required>
                                                             
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">

                    <label for="senha"> Senha </label>
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="digite uma senha" required>
                                                             
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">

                    <label for="fone"> Empresa </label>
                    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="digite o nome da Empresa" >
                                                             
                    </div>
                  </div>

                </div>
              
              
                <div class="col-md-4">
                  <br>
                  <div style="text-aling: right">

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-default">Cancelar</button>

                  </div>
                </div>    

        </form>
      </div> 
    </div>        	    
  </div>
</body>

