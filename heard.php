
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>loja site</title>
</head>
<body>
    <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper container hide-on-med-and-down">
      <a href="../index.php" class="brand-logo">logo</a>
      
      <ul class="right">
        <li>
          <a href="paginas/carrinho.php">
            <i class="material-icons">
               <span class="material-icons-outlined">add_shopping_cart</span>
            </i>
          </a>
        </li>
         <li>
          <a href="paginas/favoritos.php">
            <i class="material-icons">
               <span class="material-icons-outlined">favorite_border</span>
            </i>
          </a>
        </li>
        <li>
          <a href="#modal1"class="modal-trigger">
            <i class="material-icons">
               <span class="material-icons-outlined">account_circle</span>
            </i>
          </a>
        </li>
       
      </ul>
   <div class="valign-wrapper">
      <div id="modal1" class="modal" style="width: 300px; height:350px;">
        <div class="modal-content center-align" >
          <h4 class="red-text">bem vindo </h4>
          
          <a href=""class="btn-flat waves-effect waves-red">Entrar com Google</a><br>
          <a href=""class="btn-flat waves-effect waves-red">Entrar com Facebook</a>
          <a href="login.php"class="btn-flat waves-effect waves-red">Entrar com E-mail e senha</a>
        </div>
      </div>
    </div>

      <form class="container" method="GET">
        <div class="input-field">
        <input id="search" type="search" name="search" style="width: 550px;">
        <label for="search" class="label-icon"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
        </div>
      </form>
    </div>
    
 
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </nav>
</div>

<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="background3.jpg">
      </div>
      <a href="#user"><img class="circle" src="pexels-ylanite-koppens-934063.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

<?php

require_once "classes/bd.php";


?>
