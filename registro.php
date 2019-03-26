<?php
//Recibe las variables
if (isset($_REQUEST["dias_plazo"])) {
    $dias_plazo = $_REQUEST["dias_plazo"];
} else {
    $dias_plazo = "";
}
if (isset($_REQUEST["monto_solicitado_mask"])) {
    $monto_solicitado = $_REQUEST["monto_solicitado_mask"];
} else {
    $monto_solicitado = "";
}
if (isset($_REQUEST["tasa_mask"])) {
    $tasa = $_REQUEST["tasa_mask"];
} else {
    $tasa = "";
}
if (isset($_REQUEST["plataforma_mask"])) {
    $plataforma = $_REQUEST["plataforma_mask"];
} else {
    $plataforma = "";
}
if (isset($_REQUEST["subtotal_mask"])) {
    $subtotal = $_REQUEST["subtotal_mask"];
} else {
    $subtotal = "";
}
if (isset($_REQUEST["iva_mask"])) {
    $iva = $_REQUEST["iva_mask"];
} else {
    $iva = "";
}
if (isset($_REQUEST["total_mask"])) {
    $total = $_REQUEST["total_mask"];
} else {
    $total = "";
}
if (isset($_REQUEST["seguro_mask"])) {
    $seguro = $_REQUEST["seguro_mask"];
} else {
    $seguro = "";
}
?>
<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <!-- Bootstrap CSS -->
                <link href="slidertestimonios/css/sss.css" rel="stylesheet">
                    <link href="slidertestimonios/css/estilos.css" rel="stylesheet">
                        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
                            <link href="css/jmenu.min.css" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
                                    </script>
                                    <script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
                                    </script>
                                    <script src="slidertestimonios/css/sss.js">
                                    </script>
                                    <!-- JQuery-->
                                    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
                                        <script src="https://code.jquery.com/jquery-1.12.4.js">
                                        </script>
                                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
                                        </script>
                                        <script src="slidertestimonios/css/sss.js">
                                        </script>
                                        <script src="js/funciones.js">
                                        </script>
                                        <link href="css/estilos.css" rel="stylesheet">
                                            <link href="images/favicon.png" rel="shortcut icon" type="image/png"/>
                                            <title>
                                                Presta Rapi - Solicitud
                                            </title>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <!-- header -->
        <div class="container-fluid" id="colordefondo">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-4 mb-2 mt-3">
                        <a href="https://web.whatsapp.com/send?phone=+573134785277&text=Hola! me gustaría saber mas sobre sus servicios." onclick="gtag('event', 'WhatsApp', {'event_action': 'whatsapp_chat', 'event_category': 'Chat', 'event_label': 'Chat_WhatsApp'});" target="_blank">
                            <img alt="..." class="mr-1" src="images/iconwhatsapp.png">
                            </img>
                        </a>
                        <a class="text-white ml-3">
                            (+57) 3134785277
                        </a>
                    </div>
                    <div class="col-md-12 col-xs-12 col-lg-8 mb-2 mt-2">
                        <form action="plataforma.html" class="form-inline" method="POST">
                            <img alt="..." class="rounded float-left" src="images/iconreg.png">
                                <div class="form-group">
                                </div>
                                <div class="form-group mr-1 mx-sm-3 ">
                                    <label class="sr-only" for="inputPassword2">
                                        Usuario
                                    </label>
                                    <input class="form-control mr-1" id="inputPassword2" placeholder="Usuario">
                                        <label class="sr-only" for="inputPassword2">
                                            Clave
                                        </label>
                                        <input class="form-control" id="inputPassword2" placeholder="Clave" type="password">
                                        </input>
                                    </input>
                                </div>
                                <button class="btn btn-success" type="submit">
                                    Entrar
                                </button>
                                <a class="text-white ml-3 font-italic card-link" href="#">
                                    Olvidé la contraseña
                                </a>
                            </img>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="colordefondo2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-4 mb-2 mt-2">
                        <a href="index.html">
                            <img alt="" class="img-fluid" height="100%" src="images/logo.png" width="150px">
                            </img>
                        </a>
                    </div>
                    <div class="col-md-12 col-xs-12 col-lg-8 pt-3">
                        <nav class="jmenu menusobre">
                            <ul>
                                <li>
                                    <a href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li class="jm-dropdown mb-2 mt-2">
                                    <a href="javascript:void(0)">
                                        ¿Quíenes somos?
                                        <span class="jm-icon-dropdown">
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <div class="col-md-12 col-xs-12 col-lg-12 caja">
                                                <img alt="" class="img-fluid" height="100%" src="images/logo.png" width="150px"/>
                                                <br>
                                                    <hr>
                                                        <p>
                                                            PRESTA RAPI es una compañía dinámica de alta tecnología y es una de las empresas Fintech de más rápido crecimiento. Como líder en el mercado de créditos en línea en Europa, nuestra compañía constantemente impone nuevas soluciones para brindar a nuestros clientes oportunidades de financiamiento a corto plazo. Como compañía de alta tecnología, nos esforzamos constantemente para desarrollar e implementar servicios innovadores, que sean adecuados para el mundo digital de rápida evolución.
                                                        </p>
                                                    </hr>
                                                </br>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="jm-dropdown">
                                    <a href="javascript:void(0)">
                                        ¿Cómo funciona?
                                        <span class="jm-icon-dropdown">
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="caja2" frameborder="0" src="https://www.youtube.com/embed/AdkK-AaP1Ik">
                                            </iframe>
                                        </li>
                                        <!--<li><a href="javascript:void(0)">Bananas and Pears</a></li>-->
                                        <!--<li><a href="javascript:void(0)">Oranges</a></li>-->
                                    </ul>
                                </li>
                                <li class="jm-dropdown mb-2 mt-2">
                                    <a href="javascript:void(0)">
                                        Beneficios
                                        <span class="jm-icon-dropdown">
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <div class="col-md-12 col-xs-12 col-lg-12 caja">
                                                <img alt="" class="img-fluid" height="100%" src="images/logo.png" width="150px"/>
                                                <br>
                                                    <hr>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Financiación flexible y rápida
                                                        </p>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Condiciones claras y transparentes
                                                        </p>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Créditos a corto plazo
                                                        </p>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Completamente en línea
                                                        </p>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Confianza
                                                        </p>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Créditos rápidos
                                                        </p>
                                                        <p>
                                                            <img alt="" height="30" src="images/favicon.png" width="30px"/>
                                                            Contácto directo vía Whatsaap
                                                        </p>
                                                    </hr>
                                                </br>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Contáctenos
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="colordefondo3">
            <div class="container">
                <div class="row">
                    <div class="mt-2 mb-2 col-12 text-center">
                        <h3 class="text-white mt-3">
                            Préstamos online desde $100.000 hasta $500.000. Donde estés a cualquier hora
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="colordefondoreq">
            <div class="container">
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-md-12 col-xs-12 col-lg-3 mb-2 mt-2">
                        <h3 class="font-weight-bolder text-white font-italic titulo_verde">
                            Requisitos
                        </h3>
                        <h5 class="font-italic text-white">
                            Para aplicar al prestamo
                        </h5>
                    </div>
                    <div class="col-md-12 col-xs-12 col-lg-7 mb-2 mt-2">
                        <img alt="" class="img-fluid rounded mx-auto d-block" height="100%" src="images/reqi.png" width="600px">
                        </img>
                    </div>
                    <div class="col-1">
                    </div>
                </div>
            </div>
        </div>
        <div classs="container-fluid" id="fondo_registro">
            <div class="container">
                <div class="row">
                    <div class="p-4 mb-2 mt-2 col-md-12 col-xs-12 col-lg-12">
                        <div id="cajas">
                            <div class="justify-content-center pt-4 pb-3 pl-3 pr-3" id="bordes">
                                <form>
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
                                            <input id="nombre" name="nombre" placeholder="Nombres" required="true" type="text"/>
                                        </div>
                                        <div class="col ">
                                            <label for="apellidos">
                                                Apellidos:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input id="apellido" name="apellido" placeholder="Apellidos" required="true" type="text"/>
                                        </div>
                                        <div class="col ">
                                            <label for="cedula">
                                                Cedula:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input id="cedula" name="cedula" placeholder="Cedula" required="true" type="text"/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-row">
                                        <div class="col ">
                                            <label for="nombres">
                                                Nacimiento:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input class="fecha" id="nombre" name="nombre" placeholder="Fecha de nacimiento" required="true" type="date"/>
                                        </div>
                                        <div class="col ">
                                            <label for="apellidos">
                                                Expedicion:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input class="fecha" id="apellido" name="apellido" placeholder="Fecha de expedicion" required="true" type="date"/>
                                        </div>
                                        <div class="col ">
                                            <label for="cedula">
                                                Celular:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input id="cedula" name="cedula" placeholder="Celular" required="true" type="tel"/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nombres">
                                                Correo:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input id="correo" name="correo" placeholder="ejemplo@email.com" required="true"/>
                                        </div>
                                        <div class="col ">
                                            <label for="apellidos">
                                                Contraseña:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input id="apellido" name="apellido" placeholder="contraseña" required="true" type="password"/>
                                        </div>
                                        <div class="col">
                                            <label for="cedula">
                                                Direccion:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="cedula" name="cedula" placeholder="Direccion" required="true" type="text"/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nombres">
                                                Ciudad:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <select class="lista">
                                                <option selected="">
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
                                        <div class="col">
                                            <label for="apellidos">
                                                Vivienda:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <select class="lista">
                                                <option selected="">
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
                                            <label for="cedula">
                                                Cuenta:
                                            </label>
                                        </div>
                                        <div class="col ">
                                            <input id="cedula" name="cedula" placeholder="Cuenta bancaria" required="true" type="text"/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nombres">
                                                Tipo contrato:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <select class="lista">
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
                                            <label for="cedula">
                                                Empleador:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="cedula" name="cedula" placeholder="Empleador" required="true" type="text"/>
                                        </div>
                                        <div class="col">
                                            <label for="cedula">
                                                Tel Empleador:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="cedula" name="cedula" placeholder="Telefono Empleador" required="true" type="tel"/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nombres">
                                                Antiguedad:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="nombre" name="nombre" placeholder="Antiguedad laboral" required="true" type="text"/>
                                        </div>
                                        <div class="col">
                                            <label for="apellidos">
                                                Ingresos:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="apellido" name="apellido" placeholder="Ingresos mensuales" required="true" type="text"/>
                                        </div>
                                        <div class="col">
                                            <label for="cedula">
                                                Contacto:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="cedula" name="cedula" placeholder="Nombre contacto" required="true" type="text"/>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nombres">
                                                Celular:
                                            </label>
                                        </div>
                                        <div class="col">
                                            <input id="nombre" name="nombre" placeholder="Celular contacto" required="true" type="text"/>
                                        </div>
                                        <div class="col-md-8">
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
                                            <select class="lista">
                                                <option selected="">
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
                                            <select class="lista">
                                                <option selected="">
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
                                            <select class="lista">
                                                <option selected="">
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
                                            <h3 class="text-center font-italic font-weight-bolder titulo_verde">
                                                Valores del credito
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-3">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="nombres">
                                                Dias plazo:
                                            </label>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5 class="text-right font-weight-bold">
                                                <?php if ($dias_plazo) {echo $dias_plazo;}?>
                                            </h5>
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
                                                <?php echo $monto_solicitado; ?>
                                            </h5>
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
                                                <?php echo $tasa; ?>
                                            </h5>
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
                                                <?php echo $plataforma; ?>
                                            </h5>
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
                                                <?php echo $seguro; ?>
                                            </h5>
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
                                                <?php echo $subtotal; ?>
                                            </h5>
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
                                                <?php echo $iva; ?>
                                            </h5>
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
                                                <?php echo $total; ?>
                                            </h5>
                                        </div>
                                        <div class="col-lg-3">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-3">
                                        </div>
                                        <div class="col-6">
                                            <a href="registro.html">
                                                <button class="btn-solicitar botonimagen" type="submit">
                                                    <i class="material-icons">
                                                        touch_app
                                                    </i>
                                                    Solicitar prestamo ahora
                                                </button>
                                            </a>
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
                                <img alt="" class="img-fluid rounded mx-auto d-block" height="400px" src="images/logo2.svg" width="300px"/>
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
    </body>
</html>
