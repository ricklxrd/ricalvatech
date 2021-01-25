<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>"><span>ALVATECH</span></a>
        </div>
        <div class="navbar-collapse collapse">                            
            <div class="menu">
                                <!--/* AQUÍ SE DIRIGE A LOS MÉTODOS DE NOSOTROS Y CONTACTO -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"  class="active"><a href="<?php echo base_url();?>">Home</a></li>
                    <li role="presentation">
                        <a href="<?php echo base_url();?>inicio/nosotros">Nosotros</a>
                    </li>
                    <li role="presentation">
                        <a href="<?php echo base_url();?>inicio/contacto">Contacto</a>
                    </li>     
                    <!-- AQUÍ CREAMOS UN ITEM EN EL MENÚ -->
                    <li role="presentation">
                        <a href="<?php echo base_url();?>inicio/datos">Datos BD</a>
                    </li>                   
                </ul>
            </div>
        </div>            
    </div>
</nav>