
<?php 
include_once "../heard.php";
?>
 <nav>
    <div class="nav-wrapper">
      <div class="col s12 container">
        <a href="../index.php" class="breadcrumb">home</a>
        <a href="categorias.php" class="breadcrumb">categoria</a>
        <a href="#!" class="breadcrumb">nome do produto</a>
      </div>
    </div>
  </nav>

<div class="row">
    <div class="col s12 m6 l6">
        <div class="row">
         <div class="col s12 m12">
              <div class="card">
               <div class="card-image">
                 <img src="../background3.jpg" class="materialboxed">
             <span class="card-title">Card Title</span>
            
        </div>
      </div>
      
      <?php
      for ($i=0; $i < 4; $i++) { 
       ?>
       <div class="col s3">
          <div class="container">
          <div class="card hoverable">
          <div class="card-image">
             <img src="../pexels-godisable-jacob-949670.jpg" class="materialboxed">
          </div>
         </div>
        </div>
      </div>
       <?php
      }
      ?>
      
     

    </div>
  </div>
</div>
    <div class="col s12 m6 l6"> 
        <h3>nome do produto</h3>
        <div class="card-content">
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">description</i>Descriçao</div>
                    <div class="collapsible-body"><span>PRODUTO FEITO PARA VOCE </span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">color_lens</i>Cores disponiveis</div>
                    <div class="collapsible-body">
                        <span>
                                        <form action="#">
                                            <label>
                                                <input name="group1" type="radio" checked />
                                                <span>Red</span>
                                            </label>
                                            <label>
                                                <input name="group1" type="radio" />
                                                <span>Yellow</span>
                                            </label>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio"  />
                                                <span>Green</span>
                                            </label>
                                            <label>
                                                <input name="group1" type="radio" />
                                                <span>Brown</span>
                                            </label>
                                        </form>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">star_outline</i>Avaliaçao</div>
                    <div class="collapsible-body"><span>
                         <form action="#">
                             
                           
                                           
                                </form></span></div>
                </li>
            </ul>
        <a class="btn halfway-fab waves-effect waves-light red">Adicionar ao carrinho</a>
        <a class="btn-floating  waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
    </div>
</div>
</div>

<div class="row grey">
    <h3 class="white-text center">VOCE PODE SE INTERESSAR POR</h3>
  
    <div class="row container"> 
        <?php
        for ($i=0; $i < 4; $i++) { 
         ?>
          <div class="col s6 m3 l3">
          <div class="card hoverable">
        <div class="card-image">
          <img src="pexels-godisable-jacob-949670.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red btn-mediun"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p>R$100,00</p>
          
          <a href="produto.php?id=1" class="btn waves-effect waves-red">ver<i class="material-icons right">send</i></a>
        </div>
      </div>
         
         </div>
         <?php
        }
        ?>
       
        
    </div>
 
   
</div>
    
<div class="row container">
   <h3 class="grey-text center">COMENTARIOS</h3>
</div>

<?php 
require_once "../footer.php"
?>