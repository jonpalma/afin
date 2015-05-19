<?php  include('modules/sec-header.php'); ?>
<!-- BEGIN PARALLAX -->
<div class="container-fluid parallax-container bg-producto2 heading">
   <div class="parallax"><img src="img/parallax/producto2.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row padding">
           <h2>Seguros Empresariales</h2>
           <p>"Porque somos parte de su ADN,<br />asegura su futuro"</p>
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
                    El programa ADN está contribuyendo en <span class="orange">mejorar las oportunidades de desarrollo de niñas y niños de nivel básico</span>, a través de extender la jornada escolar con actividades artísticas, deportivas, recreativas y de asistencia académica, prestando especial atención a la alimentación saludable. 
                </p>
            </div>
            <div class="row margin-top">
               <h2>Tú puedes ayudarlos</h2>
                <p>
                    Al adquirir este seguro de vida un porcentaje será donado para apoyar a los niños beneficiarios del programa.
                    
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
                    <img src="img/png/p2-beneficios/1.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Más de ___________ niños<br /> beneficiados y con tu ayuda vamos<br /> por más</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p2-beneficios/2.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Si alguno de tus seguros<br /> empresariales esta por vencer,<br /> nosotros te ayudamos</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p2-beneficios/3.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Sin compromiso de compra, tú<br /> decides y además ayudas</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p2-beneficios/4.png" alt="" class="img-responsive center-block">
                    <p class="no-margin"><small>Tenemos atractivos planes de<br /> prestaciones para tus colaboradores.</small></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<!-- END BENEFICIOS -->
<!-- BEGIN SEGUROS -->
    <div class="jumbotron bg-white">
        <div class="container nosotros">
            <div class="row">
                <h2>¿Qué son los seguros empresariales?</h2>
                <p>
                    Son todas aquellas pólizas que tenga o requiera contratar la empresa como un beneficio para sus empleados o para proteger el patrimonio de la misma.
                </p>
                <p>
                    Los seguros que pones a su disposición son:
                    
                </p>
            </div>
        </div>
    </div>
<!-- END SEGUROS -->
<!-- BEGIN SEGUROS LISTA -->
    <div class="jumbotron bg-limegreen">
        <div class="container coberturas">
            <div class="row">
                <h2>Beneficios</h2>
                <div class="row margin-bottom">
                    <div class="col-sm-4">
                        <img src="img/png/p2-beneficios/seguro1.png" alt="" class="img-responsive center-block">
                        <p class="no-margin"><small>Póliza de bienes empresariales</small></p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/png/p2-beneficios/seguro2.png" alt="" class="img-responsive center-block">
                        <p class="no-margin"><small>Flotillas de vehículos o equipo<br /> 
de transporte</small></p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/png/p2-beneficios/seguro3.png" alt="" class="img-responsive center-block">
                        <p class="no-margin"><small>Servicio Funerario</small></p>
                    </div>
                </div>
                <div class="row margin-bottom">
                    <div class="col-sm-4">
                        <img src="img/png/p2-beneficios/seguro4.png" alt="" class="img-responsive center-block">
                        <p class="no-margin"><small>Planes dentales</small></p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/png/p2-beneficios/seguro6.png" alt="" class="img-responsive center-block">
                        <p class="no-margin"><small>Seguro de vida para grupos</small></p>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/png/p2-beneficios/seguro5.png" alt="" class="img-responsive center-block">
                        <p class="no-margin"><small>Seguro de gastos médicos mayores<br /> 
para grupos.</small></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<!-- END SEGUROS LISTA -->
<!-- BEGIN COTIZACIÓN -->
    <div id="contacto" class="jumbotron bg-white">
        <div class="container contacto">
            <div class="row">
                <h2>Contáctanos para una propuesta</h2>
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
<!-- BEGIN INFORMACIÓN -->
<div class="container-fluid parallax-container bg-contacto informacion margin-bottom-plus">
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
<?php  include('modules/footer.php'); ?>