<div class="templatemo-flex-row my-5">

  <div class="templatemo-content col-12 light-gray-bg">

    <div class="templatemo-content-container">
      <div class="templatemo-flex-row flex-content-row">
        <div class="col-md-6">
          <div class="panel panel-default margin-10">
            <div class="panel-body">
              <form action="#" class="templatemo-login-form my-4">
                <div class="form-group">
                  <label for="">UNIDADE</label>
                  <select name="nome_regional" id="" class="form-control">
                    <option value="">SELECIONE</option>
                    <option value="">UNIDADE 1</option>
                    <option value="">UNIDADE 2</option>
                  </select>

                </div>
                <div class="form-group">
                  <label for="">MOTORISTAS</label>
                  <select name="num_motoristas" id="" class="form-control">
                    <option value="0">SELECIONE</option>
                    <?php 
                    for($k=1;$k<500;$k++){
                     ?>
                     <option value="<?=$k;?>"><?=$k;?></option>
                     <?php 
                   }
                   ?>
                 </select>
               </div>
               
               <div class="form-group">
                <label for="">DATA <i class="fa fa-info-circle" data-toggle='modal' data-target='#example_info'></i></label>
                <input type="datetime-local" class="form-control">

              </div>
              <div class="form-group">
                <button type="submit" class="templatemo-blue-button">Submit</button>
              </div>
            </form>
          </div>                
        </div>              
      </div>
      <div class="col-md-6">              


        <div class="templatemo-search-form" role="search">
          <div class="input-group">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Filtrar" name="srch-term" id="srch-term"> 
            <i class="fa fa-info-circle" data-toggle='modal' data-target='#example_info'></i>          
          </div>
        </div>
        <div class='templatemo-content-widget green-bg'>
          <h2 class='text-uppercase margin-bottom-10'>15/10/2019</h2>
          <p class='margin-bottom-0'>
            UNIDADE: Unidade 1
          </p>
          <p class='margin-bottom-0'>
            MOTORISTAS: 2
          </p>

          <p class='margin-bottom-0'>
            DATA: 16/04/2019 18:00
          </p>
          <button class="btn btn-warning btn-block my-3"  data-toggle="modal" data-target="#exampleModal">EM ANDAMENTO</button>                
        </div>
        <div class='templatemo-content-widget white-bg'>
          <h2 class='text-uppercase margin-bottom-10'>15/10/2019</h2>
          <p class='margin-bottom-0'>
            UNIDADE: Unidade 1
          </p>
          <p class='margin-bottom-0'>
            MOTORISTAS: 2
          </p>

          <p class='margin-bottom-0'>
            DATA: 16/04/2019 18:00
          </p>
          <button class="btn btn-dark btn-block my-3"  data-toggle="modal" data-target="#exampleModal">EM ABERTO</button>                
        </div>
        <div class='templatemo-content-widget pink-bg'>
          <h2 class='text-uppercase margin-bottom-10'>15/10/2019</h2>
          <p class='margin-bottom-0'>
            UNIDADE: Unidade 2
          </p>
          <p class='margin-bottom-0'>
            MOTORISTAS: 20
          </p>

          <p class='margin-bottom-0'>
            DATA: 17/04/2019 18:00
          </p>
          <button class='btn btn-block btn-secondary my-3'  data-toggle='modal' data-target='#exampleModal'>CANCELADA</button>                
        </div>
        <div class='templatemo-content-widget blue-bg'>
          <h2 class='text-uppercase margin-bottom-10'>15/10/2019</h2>
          <p class='margin-bottom-0'>
            UNIDADE: Unidade 1
          </p>
          <p class='margin-bottom-0'>
            MOTORISTAS: 17
          </p>

          <p class='margin-bottom-0'>
            DATA: 17/04/2019 18:00
          </p>
          <button class='btn btn-success btn-block my-3'  data-toggle='modal' data-target='#exampleModal'>COMPLETA</button>                
        </div>


      </div>                       

    </div> <!-- Second row ends -->
  </div>
</div>
</div>
<!-- modais dados da chamada-->
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>

      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--informação do campo -->
<div class='modal fade' id='example_info' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>INFORMACAO</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        explicar o que há naquele input
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>

