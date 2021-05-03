<ul class="nav nav-tabs noprint my-5"  role="tablist">
  <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#tela_nova_solicitacao" role="tab" aria-controls="home" aria-selected="true">NOVA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link   active" data-toggle="tab" href="#tela_chamadas_por_dia" role="tab" aria-controls="contact" aria-selected="false">CHAMADA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#tela_relatorio_solicitacao" role="tab" aria-controls="profile" aria-selected="false">RELATÓRIO</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade" id="tela_nova_solicitacao" role="tabpanel" aria-labelledby="home-tab">
    <?php include "index/views/solicitacoes/nova_solicitacao.php"; ?>

  </div>
  <div class="tab-pane fade   show active" id="tela_chamadas_por_dia" role="tabpanel" aria-labelledby="contact-tab">
  <?php include "index/views/solicitacoes/chamadas_por_dia.php"; ?>

  </div>
  <div class="tab-pane fade" id="tela_relatorio_solicitacao" role="tabpanel" aria-labelledby="profile-tab">
    <?php include "index/views/solicitacoes/relatorio_solicitacao.php"; ?>

  </div>


</div>

