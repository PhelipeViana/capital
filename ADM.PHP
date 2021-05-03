<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HOME</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">  

  <link href="ADM/index/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="ADM/index/boostrap43/css/bootstrap.min.css">
  <link href="ADM/index/css/font-awesome.min.css" rel="stylesheet">
  <link href="ADM/index/css/templatemo-style.css" rel="stylesheet">
  <script src="ADM/index/js/jquery-1.11.2.min.js"></script>

  <script src="ADM/index/js/index.js"></script>
  <style>
    .print_oculto{
      display: none;
    }
    @media print {
      .noprint{
        display: none;
      }
      .print_oculto{
       display: block; 
     }

   }
   /*quando passa o mouse sobre o menu*/
   .nav-link:hover{
    font-weight: bold;
  }
  /*quando selecionado menu*/
  
  .nav-link.active{
    border-bottom: 2px solid #fff;
    
  }
  

</style>
</head>
<body>
  <?php include "ADM/views/menu.php"; ?>

  <div class="container">
   <div class="tab-content" >
    <div class="tab-pane fade   show active" id="tela1" role="tabpanel" aria-labelledby="home-tab">
      <?php include "ADM/views/home.php"; ?>
   </div>
<!--    <div class="tab-pane fade" id="tela_solicitacoes" role="tabpanel" aria-labelledby="home-tab">
    xxx
  </div>
 -->  
</div>
</div>

<script src="ADM/index/boostrap43/js/bootstrap.min.js"></script>

<script type="text/javascript" src="ADM/index/js/jquery-migrate-1.2.1.min.js"></script> 




</body>
</html>