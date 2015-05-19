<?php  include('modules/sec-header.php'); ?>
<!-- BEGIN PARALLAX -->
<div class="container-fluid parallax-container bg-producto3 heading">
   <div class="parallax"><img src="img/parallax/producto3.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row padding">
           <h2>Implant Tecnológico</h2>
       </div>
   </div>
</div>
<!-- END PARALLAX -->
<!-- BEGIN CONTRIBUCIÓN -->
    <div class="jumbotron bg-white">
        <div class="container nosotros">
            <div class="row">
                <h2>¿En que contribuye?</h2>
                <p>
                    Con tu ayuda se podrá continuar impulsando el Programa ADN (Ampliando el Desarrollo de los Niños) que ofrece a<br /> niños y adolescentes la posibilidad de una formación integral que <span class="orange">incluye su crecimiento físico, emocional,<br /> intelectual y cívico.</span>
                </p>
                <p>
                    Con tu colaboración y la de tus empleados, un porcentaje de la adquisición de seguros será donado para apoyar a más niños e incluir a más escuelas en ADN.
                    
                </p>
            </div>
        </div>
    </div>
<!-- END CONTRIBUCIÓN -->
<!-- BEGIN BENEFICIOS -->
    <div class="jumbotron bg-orange">
        <div class="container coberturas">
            <div class="row">
                <h2>Beneficios</h2>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/1.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>con tu contribución ayudas a<br />mejorar el futuro de los niños<br /> chihuahuenses.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/4.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Protección integral, que te da beneficios en vida.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/2.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Sumas aseguradas de $500,000,<br />$1,000,000 y $2,000,000.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p3-beneficios/3.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Edades de contratación: 18 a<br /> 70 años.</small></p>
                </div>
            </div>
        </div>
    </div>
<!-- END BENEFICIOS -->
<!-- BEGIN IMPLANT -->
    <div class="jumbotron bg-white">
        <div class="container nosotros">
            <div class="row">
                <h2>¿Qué es el Implant Tecnológico?</h2>
                <p>
                    Es un micrositio en el cual el empleado puede tener acceso a través de su computadora a seguro de autos, seguro de vida, seguro de accidentes y al servicio funerario integral, los cuales el empleado podrá proteger su patrimonio, sin gastar más ya que ofrecemos facilidades de pago mensuales, quincenales y hasta semanales.
                </p>
                <p>
                    El empleado podrá adquirir cualquiera de estos seguros y pagar con su tarjeta de nómina en el portal, además podrán consultar sus dudas con nuestros asesores de forma inmediata a través del chat en línea.     
                </p>
                <p>
                    En conjunto con la empresa los guiamos paso a paso para la implementación y difusión del Implant, además cada vez que algún empleado o familiar del mismo adquiera alguna póliza un porcentaje se destinara a la causa Modelo ADN, con el objetivo de prevenir el crimen y la violencia a través de la educación, para generar ciudadanos comprometidos con su comunidad.
                </p>
            </div>
        </div>
    </div>
<!-- END IMPLANT -->
<!-- BEGIN INFORMACIÓN -->
<div class="container-fluid parallax-container bg-contacto informacion">
   <div class="parallax"><img src="img/parallax/contacto.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row padding">
           <h2>¿Necesitas más información?</h2>
           <div class="col-sm-12">
                    <form action="#" id="ajax-contact" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-4">
                                   <input type="text" class="form-control form-textfield form-black" id="contacto_nombre" name="nombreContacto" placeholder="Nombre">
                               </div>
                               <div class="col-sm-4">
                                   <input type="text" class="form-control form-textfield form-black" id="contacto_telefono" name="telContacto" placeholder="Teléfono">
                               </div>
                               <div class="col-sm-4">
                                   <input type="email" class="form-control form-textfield form-black" id="contacto_email" name="emailContacto" placeholder="Correo electrónico">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12 margin-top">
                                   <button type="submit" id="sendBttn" class="center-block btn btn-limegreen no-radius">Descargar información</button>
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
<!-- END INFORMACIÓN -->
<!-- BEGIN COTIZACIÓN -->
    <div id="contacto" class="jumbotron bg-white">
        <div class="container contacto">
            <div class="row">
                <h2>Solicita asesoría para implementación</h2>
                <div class="col-sm-12">
                    <form action="mailer.php" id="ajax-contact" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <input type="text" class="form-control form-textfield" id="contacto_nombre" name="nombreContacto" placeholder="Nombre del títular">
                               </div>
                               <div class="col-sm-6">
                                   <input type="text" class="form-control form-textfield" id="contacto_edad" name="edadContacto" placeholder="Edad">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <select id="contacto_sexo" name="sexoContacto" class="form-control form-selectfield">
                                       <option value="" class="form-selectfield">Sexo</option>
                                       <option value="m" class="form-selectfield">Masculino</option>
                                       <option value="f" class="form-selectfield">Femenino</option>
                                   </select>
                               </div>
                               <div class="col-sm-6">
                                   <select id="contacto_fuma" name="fumaContacto" class="form-control form-selectfield">
                                       <option value="" class="form-selectfield">Fuma</option>
                                       <option value="si" class="form-selectfield">Sí</option>
                                       <option value="no" class="form-selectfield">No</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <select id="contacto_suma" name="sumaContacto" class="form-control form-selectfield">
                                       <option value="" class="form-selectfield">Suma Asegurada</option>
                                       <option value="500000" class="form-selectfield">$500,000</option>
                                       <option value="1000000" class="form-selectfield">$1,000,000</option>
                                       <option value="2000000" class="form-selectfield">$2,000,000</option>
                                   </select>
                               </div>
                               <div class="col-sm-6">
                                   <select id="contacto_frecuencia" name="frecuenciaContacto" class="form-control form-selectfield">
                                       <option value="" class="form-selectfield">Frecuencia del pago anual</option>
                                       <option value="1" class="form-selectfield">Algo</option>
                                       <option value="2" class="form-selectfield">Otro</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                                <div class="col-sm-6">
                                   <input type="text" class="form-control form-textfield" id="contacto_telefono" name="telContacto" placeholder="Teléfono">
                               </div>
                               <div class="col-sm-6">
                                   <input type="email" class="form-control form-textfield" id="contacto_email" name="emailContacto" placeholder="Correo electrónico">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12">
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