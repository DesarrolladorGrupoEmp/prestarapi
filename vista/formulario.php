<?php
include "../controlador/controllerregistro.php";
//Recibe las variables
$monto = isset($_POST["monto_solicitado"]) ? $_POST["monto_solicitado"] : null;

//Verifica que lleguen valores del credito
if ($monto == '') {
    ?>
<script type="text/javascript">
    alert('El valor del monto debe ser mayor a 0');
    window.location="../";
</script>
<?php
}

$monto_mask      = isset($_POST["monto_solicitado_mask"]) ? $_POST["monto_solicitado_mask"] : null;
$dias_plazo      = isset($_POST["dias_plazo"]) ? $_POST["dias_plazo"] : null;
$tasa            = isset($_POST["tasa"]) ? $_POST["tasa"] : null;
$tasa_mask       = isset($_POST["tasa_mask"]) ? $_POST["tasa_mask"] : null;
$plataforma      = isset($_POST["plataforma"]) ? $_POST["plataforma"] : null;
$plataforma_mask = isset($_POST["plataforma_mask"]) ? $_POST["plataforma_mask"] : null;
$seguro          = isset($_POST["seguro"]) ? $_POST["seguro"] : null;
$seguro_mask     = isset($_POST["seguro_mask"]) ? $_POST["seguro_mask"] : null;
$subtotal        = isset($_POST["subtotal"]) ? $_POST["subtotal"] : null;
$subtotal_mask   = isset($_POST["subtotal_mask"]) ? $_POST["subtotal_mask"] : null;
$iva             = isset($_POST["iva"]) ? $_POST["iva"] : null;
$iva_mask        = isset($_POST["iva_mask"]) ? $_POST["iva_mask"] : null;
$total           = isset($_POST["total"]) ? $_POST["total"] : null;
$total_mask      = isset($_POST["total_mask"]) ? $_POST["total_mask"] : null;
?>
<div classs="container-fluid" id="fondo_registro">
    <div class="container">
        <div class="row">
            <div class="p-4 mb-2 mt-2 col-md-12 col-xs-12 col-lg-12">
                <div id="cajas">
                    <div class="justify-content-center pt-4 pb-3 pl-3 pr-3" id="bordes">
                        <form class="form" method="POST" id="form_cliente">
                            <div class="form-row">
                                <div class="col">
                                    <h3 class="text-center font-italic font-weight-bolder titulo_verde">
                                        Solicitud de credito
                                    </h3>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">
                                <div class="col-lg">
                                    <label for="nombres">
                                        Nombres:
                                    </label>
                                </div>
                                <div class="col">
                                    <input id="nombres" name="nombres" placeholder="Nombres" type="text" required="true" />
                                </div>
                                <div class="col ">
                                    <label for="apellidos">
                                        Apellidos:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="apellidos" name="apellidos" placeholder="Apellidos" type="text"/>
                                </div>
                                <div class="col ">
                                    <label for="cedula">
                                        Cedula:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="cedula" name="cedula" placeholder="Cedula" type="text"/>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">
                                <div class="col ">
                                    <label for="fechaNacimiento">
                                        Nacimiento:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input class="fecha" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de nacimiento" type="date"/>
                                </div>
                                <div class="col ">
                                    <label for="fechaExpedicion">
                                        Expedicion:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input class="fecha" id="fechaExpedicion" name="fechaExpedicion" placeholder="Fecha de expedicion" type="date"/>
                                </div>
                                <div class="col ">
                                    <label for="celular">
                                        Celular:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="celular" name="celular" placeholder="Celular" type="tel"/>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">
                                <div class="col">
                                    <label for="correo">
                                        Correo:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="correo" name="correo" placeholder="ejemplo@email.com"/>
                                </div>
                                <div class="col">
                                    <label for="direccion">
                                        Direccion:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="direccion" name="direccion" placeholder="Direccion"/>
                                </div>

                                <div class="col">
                                    <label for="FKciudad">
                                        Ciudad:
                                    </label>
                                </div>
                                <div class="col">
                                    <select class="lista" id="FKciudad" name="FKciudad">
                                        <option selected="" value="0">
                                            Seleccione...
                                        </option>
                                        <option value="1">
                                            Bogota
                                        </option>
                                        <option value="2">
                                            Medellin
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">
                                <div class="col">
                                    <label for="FKtipoVivienda">
                                        Vivienda:
                                    </label>
                                </div>
                                <div class="col">
                                    <select class="lista" id="FKtipoVivienda" name="FKtipoVivienda">
                                        <option selected="" value="0">
                                            Seleccione...
                                        </option>
                                        <option value="1">
                                            Propia
                                        </option>
                                        <option value="2">
                                            Familiar
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="contacto">
                                        Contacto:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="contacto" name="contacto" placeholder="Contacto" type="text"/>
                                </div>
                                <div class="col">
                                    <label for="celularContacto">
                                        Celular:
                                    </label>
                                </div>
                                <div class="col ">
                                    <input id="celularContacto" name="celularContacto" placeholder="Celular Contacto" type="text"/>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">
                                <div class="col">
                                    <label for="nombres">
                                        Pregunta seguridad 1:
                                    </label>
                                </div>
                                <div class="col">
                                    <select class="lista" id="FKpregunta1" name="FKpregunta1">
                                        <option selected="" value="0">
                                            Seleccione...
                                        </option>
                                        <option value="1">
                                            Opcion A
                                        </option>
                                        <option value="2">
                                            Opcion B
                                        </option>
                                        <option value="3">
                                            Opcion C
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="nombres">
                                        Pregunta seguridad 2:
                                    </label>
                                </div>
                                <div class="col">
                                    <select class="lista" id="FKpregunta2" name="FKpregunta2">
                                        <option selected="" value="0">
                                            Seleccione...
                                        </option>
                                        <option value="1">
                                            Opcion A
                                        </option>
                                        <option value="2">
                                            Opcion B
                                        </option>
                                        <option value="3">
                                            Opcion C
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="nombres">
                                        Pregunta seguridad 3:
                                    </label>
                                </div>
                                <div class="col">
                                    <select class="lista" id="FKpregunta3" name="FKpregunta3">
                                        <option selected="" value="0">
                                            Seleccione...
                                        </option>
                                        <option value="1">
                                            Opcion A
                                        </option>
                                        <option value="2">
                                            Opcion B
                                        </option>
                                        <option value="3">
                                            Opcion C
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <br/>
                             <div class="form-row">
                                <div class="col">
                                    <label for="FKtipocontrato">
                                        Tipo contrato:
                                    </label>
                                </div>
                                <div class="col">
                                    <select class="lista" id="FKtipocontrato" name="FKtipocontrato">
                                        <option selected="">
                                            Seleccione...
                                        </option>
                                        <option value="1">
                                            Fijo
                                        </option>
                                        <option value="2">
                                            Indefinidio
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="empleador">
                                        Empleador:
                                    </label>
                                </div>
                                <div class="col">
                                    <input id="empleador" name="empleador" placeholder="Empleador" type="text"/>
                                </div>
                                <div class="col">
                                    <label for="telEmpleador">
                                        Tel Empleador:
                                    </label>
                                </div>
                                <div class="col">
                                    <input id="telefonoEmpleador" name="telefonoEmpleador" placeholder="Telefono Empleador" type="tel"/>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">
                                <div class="col">
                                    <label for="cuentaBancaria">
                                        Cuenta:
                                    </label>
                                </div>
                                <div class="col">
                                    <input id="cuentaBancaria" name="cuentaBancaria" placeholder="Cuenta Bancaria" type="text"/>
                                </div>
                                <div class="col">
                                    <label for="antiguedad">
                                        Antiguedad:
                                    </label>
                                </div>
                                <div class="col">
                                    <input id="antiguedad" name="antiguedad" placeholder="Antiguedad laboral" type="text"/>
                                </div>
                                <div class="col">
                                    <label for="ingresos">
                                        Ingresos:
                                    </label>
                                </div>
                                <div class="col">
                                    <input id="ingresos" name="ingresos" placeholder="Ingresos mensuales" type="text"/>
                                </div>
                            </div>
                            <br/>
                        </form>
                        <br/>
                        <form class="form" method="POST" id="form_solicitud">
                            <div class="form-row">
                                <div class="col">
                                    <h3 class="text-center font-italic font-weight-bolder titulo_verde">
                                        Valores del credito
                                    </h3>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="dias">
                                        Dias plazo:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php if ($dias_plazo) {echo $dias_plazo;}?>
                                    </h5>
                                    <input type="hidden" name="dias" id="dias" value="<?php echo $dias_plazo; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="nombres">
                                        Monto:
                                    </label>
                                </div>
                                <div class="col-lg-3 text-right">
                                    <h5 class="font-weight-bold">
                                        <?php echo $monto_mask; ?>
                                    </h5>
                                    <input type="hidden" name="monto" id="monto" value="<?php echo $monto; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="apellidos">
                                        Intereses:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php echo $tasa_mask; ?>
                                    </h5>
                                    <input type="hidden" name="interes" id="interes" value="<?php echo $tasa; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="cedula">
                                        Plataforma:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php echo $plataforma_mask; ?>
                                    </h5>
                                    <input type="hidden" name="plataforma" id="plataforma" value="<?php echo $plataforma; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="nombres">
                                        Seguro:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php echo $seguro_mask; ?>
                                    </h5>
                                    <input type="hidden" name="seguro" id="seguro" value="<?php echo $seguro; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="apellidos">
                                        Subtotal:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php echo $subtotal_mask; ?>
                                    </h5>
                                    <input type="hidden" name="subtotal" id="subtotal" value="<?php echo $subtotal; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="cedula">
                                        Iva:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php echo $iva_mask; ?>
                                    </h5>
                                    <input type="hidden" name="iva" id="iva" value="<?php echo $iva; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                    <label for="apellidos">
                                        Total a pagar:
                                    </label>
                                </div>
                                <div class="col-lg-3">
                                    <h5 class="text-right font-weight-bold">
                                        <?php echo $total_mask; ?>
                                    </h5>
                                    <input type="hidden" name="total" id="total" value="<?php echo $total; ?>">
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-6">
                                    <button class="btn-solicitar botonimagen" id="solicitar">
                                        <i class="material-icons">
                                            touch_app
                                        </i>
                                        Solicitar prestamo ahora
                                    </button>
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-3">
                    <div class="p-4 mb-2 mt-2">
                        <img alt="" class="img-fluid rounded mx-auto d-block" height="400px" src="../images/logo2.svg" width="300px"/>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-lg-3">
                    <div class="d-flex justify-content-center p-4 mb-2 mt-2">
                        <ul class=" text-white list-unstyled">
                            <p class="h4">
                                Contáctenos
                            </p>
                            <li>
                                <ul>
                                    <li class="ml-4">
                                        <a class="alert-link" href="#">
                                            an example link
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        Purus sodales ultricies
                                    </li>
                                    <li class="ml-4">
                                        Vestibulum laoreet
                                    </li>
                                    <li class="ml-4">
                                        Ac tristique libero
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-lg-3">
                    <div class="d-flex justify-content-center p-4 mb-2 mt-2">
                        <ul class=" text-white list-unstyled">
                            <p class="h4">
                                Contáctenos
                            </p>
                            <li>
                                <ul>
                                    <li class="ml-4">
                                        <a class="alert-link" href="#">
                                            an example link
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        Purus sodales ultricies
                                    </li>
                                    <li class="ml-4">
                                        Vestibulum laoreet
                                    </li>
                                    <li class="ml-4">
                                        Ac tristique libero
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 col-lg-3">
                    <div class="d-flex justify-content-center p-4 mb-2 mt-2">
                        <ul class=" text-white list-unstyled">
                            <p class="h4">
                                Contáctenos
                            </p>
                            <li>
                                <ul>
                                    <li class="ml-4">
                                        <a class="alert-link" href="#">
                                            an example link
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        Purus sodales ultricies
                                    </li>
                                    <li class="ml-4">
                                        Vestibulum laoreet
                                    </li>
                                    <li class="ml-4">
                                        Ac tristique libero
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=" p-3 container-fluid" id="fondofinal">
        <div class="text-center text-white">
            Copyright © 2019 Presta Rapid-Todos los derechos reservados.
        </div>
    </div>
</div>