<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="INDEX/css/font-awesome.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="INDEX/owl-carousel/assets/owl.carousel.min.css" type="text/css">
 <link rel="stylesheet" href="INDEX/css/bootstrap.min.css">
 <link rel="stylesheet" href="INDEX/css/style.css">
 <script src="INDEX/js/jquery-3.3.1.slim.min.js"></script>
 <title>CAPITAL RETORN - Investimento em ações</title>
 <style>
  #arealogin input {
    background-color: white;
    box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.08);
    border-radius: 50px;
    max-width: 450px;
    width: 100%;
    height: 60px;
    border: none;
    margin-bottom: 30px;
    padding-left: 30px;
    color: #000;
  }


</style>
</head>
<body>
 <?php include "index/VIEW/MENU.PHP" ?>
 <?php include "index/VIEW/EMPRESA.PHP" ?>
 <?php include "index/VIEW/DEPOIMENTO.PHP" ?>
 <?php include "index/VIEW/FALECONOSCO.PHP" ?>


 <!-- Modal -->
 <div class="modal fade" id="modalogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
    <div class="modal-header text-center">
     <h5 class="modal-title">LOGIN</h5>

     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body" id='arealogin'>

    <div class="text-center mb-3">
      <a href="#" class='pull-rigth naotenho'>Não Tenho cadastro</a>
    </div>
    
    <input type="text" class="form-control" placeholder="Login">
    <input type="password" class="form-control" placeholder="Senha">
    <div class="text-center">
      <button  class="btn btn-info">ENTRAR</button>
    </div>


  </div>
  <div class="modal-footer">
   <a href="#">ESQUECI A SENHA</a>

 </div>
</div>
</div>
</div>

<div class="modal fade" id="modalcadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
    <div class="modal-header text-center">
     <h5 class="modal-title">CADASTRO</h5>

     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body" id='arealogin'>

    <div class="text-center mb-3">
      <a href="#" class='pull-rigth jatenho'>Já Tenho cadastro</a>
    </div>
    
    <input type="text" class="form-control" placeholder="Nome Completo">
    <input type="text" class="form-control" placeholder="Cpf">

    <div class="text-center">
      <button  class="btn btn-info">CADASTRAR</button>
    </div>


  </div>

</div>
</div>
</div>


<script>
  $(".cadastro").on('click',function(e){
    $("#modalcadastro").modal('show');
  })

  $(".jatenho").on('click',function(e){
    $("#modalcadastro").modal('hide')
    $("#modalogin").modal('show');

  })
  $(".naotenho").on('click',function(e){
    $("#modalogin").modal('hide');
    $("#modalcadastro").modal('show')
    
    
  })
  
</script>

<script src="INDEX/js/popper.min.js"></script>
<script src="INDEX/js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="INDEX/owl-carousel/owl.carousel.min.js"></script>
<script src="INDEX/js/main.js"></script>
</body>
</html>
