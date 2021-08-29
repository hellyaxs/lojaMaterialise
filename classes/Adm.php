<?php
require_once "../heard.php";
?>

<div class="row" id="navside">
<div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#painel">painel de controle</a></li>
        <li class="tab col s3"><a  href="#pedidos">pedidos</a></li>
        <li class="tab col s3"><a href="#produtos" class="active">produtos</a></li>
        <li class="tab col s3"><a href="#estoque">estoque</a></li>
      </ul>
    </div>
    
    <div id="pedidos" class="col s12">
      
    </div>
<div id="painel" class="col s12">

        
    <div class="row">
      
        <div class="collection col s2 m2 l2">
        <ul>
                <li>desempenho</li>
                <li>indice de vendas</li>
                <li>produtos mais procurados</li>
                <li>gerenciamento de vendas</li>
                <li>E-mails promocionais</li>
                <li>dados da empresa</li>
           
         <li></li> <a href="#!" class="collection-item"><span class="badge">1</span>desempenho</a>
         <li></li><a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
          <a href="#!" class="collection-item">Alan</a>
          <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a> 
          </ul>
       </div>


          
        <div class="col s10 m10 l10 blue">
        
        </div>
    </div>

    </div>
    <div id="estoque" class="col s12"> 
        
      <table class="highlight container">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Categoria</th>
              <th>quantidade</th>
              <th>valor</th>
              <th>cores</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>7</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>


<div id="produtos" class="col s12 container">

    <h1 class="center">novo produto</h1>
        <div class="row">
          <div class="col s6">
            <form method="POST">
              <div class="file-field input-field">
                    <div>
                      <span><label for="fileimg"><img src="../image-file-add--v2.png" alt=""></label></span>
                      <input type="file" id="fileimg"
                      multiple name="imgProduto">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>
            </form>         
          </div>
      <form class="col s6" method="POST" action="Adm.php">
            <div class="row">
                <div class="input-field col s6">
                      <input  id="produto" type="text" name="produtoN" required>
                      <label for="produto">Nome do Produto</label>
                </div>
                <div class="input-field col s6">
                      <input  id="marca" name="marca" type="text">
                      <label for="marca">Marca</label>
                </div>
                <div class="input-field col s12" >
                    <select required name="categoria">
                      <option value="" disabled selected>Categoria</option>
                      <option value="1">sapato</option>
                      <option value="2">blusa</option>
                      <option value="3">Aneu</option>
                      <option value="4">calça</option>
                      <option value="5">oculos</option>
                      <option value="6">pulseiras</option>
                    </select>
                     <label>Select</label>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                  <h5>tamanho</h5>
                  <label>
                  <input name="tamanho" type="radio" />
                  <span>G</span>
                  </label>
                  <label>
                  <input name="tamanho" type="radio" />
                  <span>M</span>
                  </label>
                  <label>
                  <input name="tamanho" type="radio" />
                  <span>P</span>
                  </label>
                </div>
                <div class="col s6">
                  <h5>cores</h5>
                  <label>
                  <input name="cor" type="radio" />
                  <span>verde</span>
                  </label>
                  <label>
                  <input name="cor" type="radio" />
                  <span>vermelho</span>
                  </label>
                  <label>
                  <input name="cor" type="radio" />
                  <span>Preto</span>
                  </label>
                </div>
                <div class="input-field col s12">
                    <input  id="preço" type="text" name="preço" value="R$00,00" placeholder="R$00,00" required>
                    <label for="preço">valor</label>
                </div>
          </div>
              <div class="row">
                    <div class="input-field col s12">
                      <textarea id="textarea2" class="materialize-textarea" name="descricao" data-length="500" required></textarea>
                      <label for="textarea2">Descriçao</label>
                    </div>
                  </div>
                  <button class="btn center" type="submit"><i class="material-icons right">cloud_upload</i> inserir</button>
          </form>
          </div>
         
</div>

<?php
require_once "../footer.php";
require_once "bd.php";
$adm=new adm;

if (isset($_POST['produtoN'])){


$adm->conexao();
$adm->NovoProduto($_POST['categoria'],$_POST['marca'],$_POST['produtoN'],$_POST['preço'],$_POST['tamanho'],$_POST['cor'],$_POST['descricao']);

  
}
?>