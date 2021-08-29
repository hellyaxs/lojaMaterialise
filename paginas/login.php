<?php
require_once "../heard.php";
?>
<div class="row container">


<form action="" class="col s12 container">
     <h1 class="grey-text">LOGIN</h1>

      <div class="row">
        <div class="input-field col s8">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s8">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
    </div>
       
    <div class="col s8 center">
    <button class="btn waves-effect waves-light btn-large" type="submit">enviar</button>
    </div>
</form>
</div>

<?php
require_once "../footer.php";
?>