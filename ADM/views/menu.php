 <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #5235FF;">

  <a class="navbar-brand" href="#"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

    <ul class="nav navbar-nav" id="myTab" role="tablist">

      <li class="nav-item">
        <a class="nav-link    active"  data-toggle="tab" href="#tela1" role="tab">
         <i class="fa fa-home fa-fw"></i>
         TESTE<span class="badge badge-pill badge-success">8</span>
       </a>
     </li>

  
<!-- 
    <li class="nav-item">
      <a class="nav-link"  data-toggle="tab" href="#tela_agencia" role="tab" >
        tela
      </a>
    </li> -->

    <li class="nav-item">
      <a class="nav-link" href="index.php">

        <span>SAIR</span>
      </a>
    </li>

  </ul>

</div>
</nav>
<script>
  jQuery(document).ready(function($) {
    $('.navbar-nav li a').click(function() {
      if ( !$(this).parent().hasClass('dropdown')) {
        $('.navbar-collapse').collapse('hide'); 
      }
    });
  });
</script>
