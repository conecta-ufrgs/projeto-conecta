<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- meio da pagina abaixo -->
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
        <li><a href="<?= base_url()?>Desafios">AREA DE DESAFIOS</a></li>
        <li><a href="<?= base_url()?>Aluno/login">AREA DO ALUNO</a></li>
		    <li><a href="<?= base_url()?>Home/sobre">SOBRE</a></li>
        <li><a href="<?= base_url()?>Admin/login">ADMIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  
   <img class="img-responsive" src="<?= base_url(); ?>assets/images/logo_completo-new.png"><br>
    <p>DESAFIOS DO MUNDO EMPRESARIAL DURANTE A GRADUAÇÃO</p> 
  
</div>

<!-- Container (About Section) -->
 
</div>

<!-- Carousel  -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?= base_url(); ?>assets/images/eng8.jpg" alt="Controle">
    </div>

    <div class="item">
      <img src="<?= base_url(); ?>assets/images/eng5.jpg" alt="Laboratorios">
    </div>

    <div class="item">
      <img src="<?= base_url(); ?>assets/images/eng6.jpg" alt="Fabrica 4.0">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<!-- fim carousel -->  
  
  
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-2">
      <!-- <span class="glyphicon glyphicon-globe logo slideanim"></span> -->
    </div>
    <div class="col-sm-10">
      <h2>O Projeto Conecta</h2><br>
      <h4>Conecta UFRGS é uma plataforma que auxilia os estudantes de Engenharia da Universidade a encontrar desafios reais do mercado!<br> Através dela, se pretende levar a Universidade para dentro da realidade das Empresas, entendendo suas necessidades e desenvolvendo, a partir disso, soluções de problemas reais.
	     Através do Conecta, projetos de disciplinas curriculares e de trabalhos de conclusão de curso (o temido TCC) podem ser realizados em parcerias com Desafiantes que disponibilizaram demandas reais vivenciados em suas organizações.<br> Em parceria com o Desafiante, o aluno tem toda a estrutura e a experiência repassadas por estes para desenvolver um trabalho real e necessário.<br>
      Acreditamos, assim, levar a Universidade para dentro da realidade do Mercado, entendendo suas necessidades e desenvolvendo, a partir disso, soluções de problemas reais.</h4><br>
      <h4><strong>Como participo do Conecta?</strong><br><br>É simples!<br><strong> És aluno?</strong><br> Acesse a plataforma na “Área do Aluno” com o seu Cartão da UFRGS.<br> Em seguida, será possível conferir uma lista de dasafios oferecidos e que podem ser escolhidos para ser trabalhado no seu projeto de TCC ou disciplina.
	  Nesse trabalho, entrarás em contato com o Desafiante  e começarão a trabalhar em conjunto.<br><br>
      <strong>Deseja cadastrar um Desafio Tecnológico?</strong><br> Então, cadastre-se na plataforma na “Área de Desafios”!<br> A partir disso, poderás te aproximar da Universidade, propondo desafios e recebendo estudantes para trabalharem em parceria.</h4>
    </div>
  </div>
</div>

