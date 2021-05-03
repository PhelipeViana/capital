<style>
    #opcoes_menu li a{
        height: 50px;
    }
</style>
<!-- TODO PROJETO -->
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header" id="corpo_menu">
    <!-- SOMBRE -->
    <div class="app-header header-shadow">
        <!-- icone menu desktop -->
        <div class="app-header__logo">
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- icone menu desktop -->

        <!-- icone menu mobile -->

        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <!-- icone menu mobile -->
    </div>        

    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div> 

            <!-- MENU -->  
            <div class="scrollbar-sidebar nav flex-column nav-pills"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="app-sidebar__inner">
                    <ul class="nav nav-tabs flex-column nav-pills" id="opcoes_menu" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tela_seja_bem_vindo" role="tab" aria-controls="home" aria-selected="true">
                            RETORNO 
                           
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#'>Sair</a>
                    </li>
                    <!-- 
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CONTATO</a>
                    </li>
                -->
            </ul>

        </div>
    </div>
    <!-- LISTA -->
</div>
<script>
    $(".nav-item").click(function(event) {
        $(".mobile-toggle-nav").trigger('click')
        $("#corpo_menu").removeClass('sidebar-mobile-open');
    });

</script>



