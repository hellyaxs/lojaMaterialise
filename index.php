<?php
require_once "heard.php";
?>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
 <!--produtos-->
  <div class="row">
  <?php
  for ($i=0; $i < 3; $i++) { 
    ?>
     <div class="col s4">
      <div class="card hoverable">
        <div class="card-image">
          <img src="pexels-godisable-jacob-953266.jpg">
          <span class="card-title">Addidas</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red btn-large" href="paginas/favoritos.php"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p>R$ 50,00</p>
          <a href="paginas/produto.php?id=">Comprar</a>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
    </div>


    <!--categorias-->
    <div class="row pink lighten-5">
    <div class="container">
    <h2 class="center-align grey-text">Cartegorias</h2>
    <?php
    for ($i=0; $i < 6; $i++) { 
      switch ($i) {
        case '0':
          $categoria="blusa";
        break;
        case '1':
            $categoria="sapato";
        break;
        case '2':
              $categoria="calça";
        break;
        case '3':
                $categoria="aneis";
        break;
        case '4':
                $categoria="oculos";
        break;
        case '5':
          $categoria="pulseira";
        break;
        
      }
       ?>
        <div class="col s4 m2 l2">
        <a href="paginas/categorias.php?category=<?php echo$categoria;?>">
      <div class="card hoverable">
          <div class="card-image">
              <img src="pexels-godisable-jacob-949670.jpg">
            <span class="card-title"><?php echo$categoria;?></span>
          </div>
        </div>
     </a>
      </div>
       <?php
    }
    ?>
    </div>
    </div>
  
    <!--botao fixo-->
  
 <div class="fixed-action-btn">
    <a id="menu" href="#modal2" class="waves-effect waves-light btn btn-floating btn-large modal-trigger pulse" ><i class="material-icons">menu</i></a>
</div>

<div class="container" style="position: absolute;top: 500px;right: 100px;">
<div id="modal2" class="modal" style="width: 300px; height:350px; right: 45px;">
  <div class="modal-content " >
    <h4 class="red-text">insira seus dados para entramos em contato</h4>
    
    <form action="">
      <input type="text" placeholder="Nome">
      <input type="tel" placeholder="whatsapp">
      <button class="btn waves-effect"><i class="material-icons right">send</i> enviar</button>
    </form>
  </div>
  </div>
</div>


  <!--slide de mais vendidos-->
   <div class="row">
     <div class="col s12 "> 
         <h5 class="center-align grey-text">OS MAIS VENDIDOS DO MOMENTO</h5>
     </div>
   </div>
   <div class="slider container">
<ul class="slides white">
          <li> 
            <div class="row">
                  <?php
                  for ($i=0; $i < 4; $i++) { 
                  ?>
                    <div class="col s5 m3 l3">
                      <div class="card hoverable">
                        <div class="card-image">
                        <a href="paginas/produto.php?id=">
                            <img src="pexels-godisable-jacob-949670.jpg">
                            <span class="card-title">Card Title</span>
                            </a>  
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
            </div>
              
          </li>

        <li>
            <div class="row">
              <?php
              for ($i=0; $i < 4; $i++) { 
                  ?>
                    <div class="col s5 m3 l3">
                      <div class="card hoverable">
                        <div class="card-image">
                        <a href="paginas/produto.php?id=">
                          <img src="pexels-ylanite-koppens-934063.jpg">
                          <span class="card-title">Card Title</span>
                          </a>
                        </div>
                      </div>
                    </div>

                  <?php
              }
              ?>
            </div> 
        </li>
   </ul>
</div>

   <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container valign-wrapper">
        <br><br>
        <div class="row center">
          <br><br>
          <h5 class="col s12 grey-text" style="padding-top: 25%;">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div><br><br>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="row">
            <div class="col s12">
              <h2 class="grey-text center">LOCK COMPLETOS</h2>
            </div>
          <div class="col s12 m6 l6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="pexels-freestocksorg-291762.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">feminino<i class="material-icons right">more_vert</i>
                    </span>
                    <p><a href="paginas/produto.php?id=">saiba mais</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Feminino<i class="material-icons right">close</i></span>
                    <p class="flow-text" >descriçao do produto vai estar aqui</p>
                  </div>
                </div>
          </div>
        <div class="col s12 m6 l6">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="pexels-ylanite-koppens-934063.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">masculino<i class="material-icons right">more_vert</i>
                </span>
                  <p><a href="paginas/produto.php?id=">saiba mais</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">masculino<i class="material-icons right">close</i>
                </span>
                <p class="flow-text" >descriçao do produto vai estar aqui</p>
                </div>
              </div>
        </div>
  </div>



  <div class="row">
    <div class="col s12 m12">
      <div class="card horizontal">
        <div class="card-image">
          <img src="pexels-godisable-jacob-949670.jpg">
        </div>
        <div class="card-stacked">
          <div class="card-content container">
            <p class="flow-text">Em nosso site você encontra diversos produtos para o público feminino, como os vestidos, que deixam as mulheres ainda mais na moda em qualquer ocasião. E para completar ainda mais o look, você encontra sapatos femininos, como as botas ou tênis, que deixam qualquer visual mais sofisticado.</p><br>
           
          </div>
        </div>
      </div>
    </div>
              
  </div>

<?php 
require_once "footer.php"
?>