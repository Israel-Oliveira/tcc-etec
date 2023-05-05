<?php 
session_start();


if(isset($_SESSION['login'])){
  header('location: index.php');
}else{
  if((isset($_POST['email'])) && (isset($_POST['senha']))){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(($email == "teste@teste") && ($senha == "123")){
      $_SESSION['login'] = "logado";
      header('location: index.php');
    }
  }
}

include './App/View/header.php';
?>



 <main>
 <form style="width: 100%;" method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Digite seu e-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">ENTRAR</button>
</form>
 </main>


<?php
  include './App/View/footer.php'
?>