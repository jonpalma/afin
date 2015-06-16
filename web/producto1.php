<?php  include('modules/sec-header.php'); ?>
<!-- BEGIN PARALLAX -->
<div class="container-fluid parallax-container bg-producto1 heading">
   <div class="parallax"><img src="img/parallax/producto1.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row padding">
           <h2>Seguro de vida</h2>
           <p>"Por un futuro más seguro, con tu ayuda<br />lo lograremos"</p>
       </div>
   </div>
</div>
<!-- END PARALLAX -->
<!-- BEGIN CONTRIBUCIÓN -->
    <div class="jumbotron bg-white">
        <div class="container nosotros">
            <div class="row margin-top">
               <h2>Tú puedes ayudarlos</h2>
                <p>Al adquirir este seguro de vida un porcentaje será <span class="orange">donado para apoyar a los niños del Programa ADN</span></p>
            </div>
            <div class="row coberturas">
                <h2>¿Qué cubre este seguro?</h2>
                <div class="col-sm-4">
                    <table class="green">
                        <th colspan="2">Opción 1</th>
                        <tbody>
                            <tr>
                                <td>Fallecimiento</td>
                                <td class="text-center">$500,000</td>
                            </tr>
                            <tr>
                                <td>Extención de pago de<br />primas por invalidez</td>
                                <td class="text-center">Cubierto</td>
                            </tr>
                            <tr>
                                <td>Pago anticipado por<br />invalidez</td>
                                <td class="text-center">$500,000</td>
                            </tr>
                            <tr>
                                <td>Indemnización por<br /> muerte accidental</td>
                                <td class="text-center">$500,000</td>
                            </tr>
                            <tr>
                                <td>Graves Enfermedades</td>
                                <td class="text-center">$500,000</td>
                            </tr>
                            <tr>
                                <td>Gastos Funerarios</td>
                                <td class="text-center">$100,000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-4">
                    <table class="yellow">
                        <th colspan="2">Opción 2</th>
                        <tbody>
                            <tr>
                                <td>Fallecimiento</td>
                                <td class="text-center">$1,000,000</td>
                            </tr>
                            <tr>
                                <td>Extención de pago de<br />primas por invalidez</td>
                                <td class="text-center">Cubierto</td>
                            </tr>
                            <tr>
                                <td>Pago anticipado por<br />invalidez</td>
                                <td class="text-center">$1,000,000</td>
                            </tr>
                            <tr>
                                <td>Indemnización por<br /> muerte accidental</td>
                                <td class="text-center">$1,000,000</td>
                            </tr>
                            <tr>
                                <td>Graves Enfermedades</td>
                                <td class="text-center">$1,000,000</td>
                            </tr>
                            <tr>
                                <td>Gastos Funerarios</td>
                                <td class="text-center">$100,000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-4">
                    <table class="green">
                        <th colspan="2">Opción 3</th>
                        <tbody>
                            <tr>
                                <td>Fallecimiento</td>
                                <td class="text-center">$2,000,000</td>
                            </tr>
                            <tr>
                                <td>Extención de pago de<br />primas por invalidez</td>
                                <td class="text-center">Cubierto</td>
                            </tr>
                            <tr>
                                <td>Pago anticipado por<br />invalidez</td>
                                <td class="text-center">$2,000,000</td>
                            </tr>
                            <tr>
                                <td>Indemnización por<br /> muerte accidental</td>
                                <td class="text-center">$2,000,000</td>
                            </tr>
                            <tr>
                                <td>Graves Enfermedades</td>
                                <td class="text-center">$2,000,000</td>
                            </tr>
                            <tr>
                                <td>Gastos Funerarios</td>
                                <td class="text-center">$100,000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
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
        <div class="container nosotros beneficios">
            <div class="row">
                <h2>¿Qué obtienes con este seguro?</h2>
                <div class="col-sm-3">
                    <img src="img/png/p1-beneficios/4.png" alt="" class="img-responsive center-block">
                    <p><small>Protección integral, que te da beneficios en vida.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p1-beneficios/2.png" alt="" class="img-responsive center-block">
                    <p><small>Sumas aseguradas de $500,000,<br />$1,000,000 y $2,000,000.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p1-beneficios/3.png" alt="" class="img-responsive center-block">
                    <p><small>Edades de contratación: 18 a<br /> 70 años.</small></p>
                </div>
                <div class="col-sm-3">
                    <img src="img/png/p1-beneficios/1.png" alt="" class="img-responsive center-block">
                    <p><small>Con tu contribución ayudas a<br />mejorar el futuro de los niños<br /> chihuahuenses.</small></p>
                </div>
            </div>
        </div>
    </div>
<!-- END BENEFICIOS -->
<!-- BEGIN ORANGEPART -->
<div class="bg-orange">
    <div class="container">
        <div class="row padding orangepart">
            <h3>¿En qué contribuye el programa ADN</h3>
            <h4> a la sociedad Chihuahuense?</h4>
            <p>El programa ADN está contribuyendo en mejorar las oportunidades de desarrollo de niñas y niños de nivel básico, a través de extender la jornada escolar con actividades artísticas, deportivas, recreativas y de asistencia académica, prestando especial atención a la alimentación saludable.</p>
        </div>
    </div>
</div>
<!-- END ORANGEPART -->
<!-- BEGIN COTIZACIÓN -->
    <div id="contacto" class="jumbotron bg-white">
        <div class="container contacto">
            <div class="row">
                <h2>Solicita una cotización y apoya el<br /> Programa ADN</h2>
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