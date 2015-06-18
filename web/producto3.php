<?php  include('modules/sec-header.php'); ?>
<!-- BEGIN PARALLAX -->
<div class="container-fluid parallax-container bg-producto3 heading">
   <div class="parallax"><img src="img/parallax/producto3.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row padding">
           <h2>Implant Tecnológico</h2>
           <p>"¡Contigo un futuro más seguro para <br>Chihuahua!"</p>
       </div>
   </div>
</div>
<!-- END PARALLAX -->
<!-- BEGIN CONTRIBUCIÓN -->
    <div class="jumbotron bg-white">
        <div class="container nosotros">
            <div class="row">
                <h2>Tú puedes ayudarlos</h2>
                <p>Al implementar y difundir el IMPLANT en tu empresa,<span class="orange"> un porcentaje de lo que adquieran tus empleados será donado</span> para apoyar a más niños e incluir a más escuelas en el Programa ADN.
                </p>
                <br class="margin-top">
                <h2>¿Qué es el Implant Tecnológico?</h2>
                <p class="small-p">
                    Es un micrositio en el cual el empleado podrá tener acceso a seguro de autos, seguro de vida, seguro de accidentes y al servicio funerario integral, con facilidades de pago
                </p>
                <p class="small-p">El empleado podrá adquirir cualquiera de estos seguros y pagar con su tarjeta de nómina en el portal, además podrán consultar sus dudas con nuestros asesores de forma inmediata a través del chat en línea.                  
                </p>
            </div>
        </div>
    </div>
<!-- END CONTRIBUCIÓN -->
<!-- BEGIN INFORMACIÓN -->
<div class="container-fluid parallax-container bg-contacto informacion">
   <div class="parallax"><img src="img/parallax/contacto.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row padding">
           <h2>¿Necesitas más información?</h2>
           <div class="col-sm-12">
                    <form action="mailer2.php" id="ajax-download" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-4">
                                   <input type="text" class="form-control form-textfield form-black" id="download_nombre" name="nombreDownload" placeholder="Nombre">
                               </div>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control form-textfield form-black" id="download_telefono" name="telDownload" placeholder="Teléfono">
                               </div>
                               <div class="col-sm-4">
                                   <input type="email" class="form-control form-textfield form-black" id="download_email" name="emailDownload" placeholder="Correo electrónico">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12 margin-top">
                                   <button type="submit" id="sendBttnD" class="center-block btn btn-limegreen no-radius">Enviar</button>
                               </div>
                           </div>
                    </form>
                    <div class="col-sm-12">
                        <div id="download-messages" role="alert"></div>
                    </div>
                </div>
       </div>
   </div>
</div>
<!-- END INFORMACIÓN -->
<!-- BEGIN BENEFICIOS -->
    <div class="jumbotron bg-white">
        <div class="container coberturas texto-naranja">
            <div class="row margin-top">
                <h2>Beneficios</h2>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/1.png" alt="" class="img-responsive center-block">
                    <p><small>El micrositio no tiene costo para las empresas que deseen implementarlo.</small></p>
                </div>
                
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/2.png" alt="" class="img-responsive center-block">
                    <p><small>Te acompañamos paso a paso en su implementación y difusión.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/3.png" alt="" class="img-responsive center-block">
                    <p><small>Cualquier material publicitario va por nuestra cuenta.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/4.png" alt="" class="img-responsive center-block">
                    <p><small>Con tu contribución ayudas a mejorar el futuro de los niños chihuahuenses.</small></p>
                </div>
            </div>
        </div>
        <br class="margin-top">
    </div>
<!-- END BENEFICIOS -->
<!-- BEGIN ORANGEPART -->
<div class="bg-orange">
    <div class="container">
        <div class="row padding orangepart">
            <h3>¿En qué contribuye el programa ADN</h3>
            <h4> a la sociedad Chihuahuense?</h4>
            <p>Con tu ayuda se podrá continuar impulsando el Programa ADN (Ampliando el Desarrollo de los Niños) que ofrece a niños y adolescentes la posibilidad de una formación integral que incluye su crecimiento físico, emocional, intelectual y cívico.</p>
            <br>
            <p>Con tu colaboración y la de tus empleados, un porcentaje de la adquisición de seguros será donado para apoyar a más niños e incluir a más escuelas en ADN.</p>
        </div>
    </div>
</div>
<!-- END ORANGEPART -->
<!-- BEGIN COTIZACIÓN -->
    <div id="contacto" class="jumbotron bg-white">
        <div class="container contacto">
            <div class="row">
                <h2>Solicitar asesoria para implementación</h2>
                <br>
                <br>
                <br>
                <div class="col-sm-12">
                    <form action="mailer3.php" id="ajax-insurace" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <input type="text" class="form-control form-textfield" id="contacto_nombre" name="nombreContacto" placeholder="Nombre del títular">
                               </div>
                               <div class="col-sm-6">
                                   <input type="email" class="form-control form-textfield" id="contacto_email" name="emailContacto" placeholder="Correo electrónico">
                               </div> 
                           </div>                           
                           <div class="form-group">
                                <div class="col-sm-6">
                                   <input type="text" class="form-control form-textfield" id="contacto_telefono" name="telContacto" placeholder="Teléfono">
                               </div>
                               <div class="col-sm-6">
                                   <button type="submit" id="sendBttn" class="pull-right btn btn-limegreen no-radius">Enviar</button>
                               </div>                               
                           </div>
                    </form>
                    <div class="col-sm-12">
                        <div id="form-messages" role="alert"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END COTIZACIÓN -->
<?php  include('modules/footer.php'); ?>