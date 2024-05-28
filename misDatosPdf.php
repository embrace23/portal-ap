<?php
session_start();

// Recuperamos los valores de la URL
// Obtener los parametros desde la URL
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$date_of_birth = $_GET['date_of_birth'];
$age = $_GET['age'];
$cod_cliente = $_GET['cod_cliente'];
$nationality = $_GET['nationality'];
$issuing_date = $_GET['issuing_date'];
$effective_date = $_GET['effective_date'];
$term_date = $_GET['term_date'];
$preexistence = $_GET['preexistence'];

$imagen_url = 'https://gfassistance.com/portal/src/images/LOGO_AP.png';

$html = '
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            width: 100%;
        }
        .content {
            flex: 1;
        }
        .logo {
            flex: 0 0 100px; /* Ajusta el tamaño según sea necesario */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <table style="border-collapse: collapse; width: 100%;" border="1">
                <tbody>
                    <tr style="height: 20px;">
                        <td style="width: 33.333%; height: 20px; font-weight: bold;">'.$first_name.' '.$last_name.'</td>
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">N&deg; de voucher</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(voucher number)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">V-'.$cod_cliente.'</p>
                        </td>
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Codigo de cliente</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Client code)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$cod_cliente.'</p>
                        </td>
                    </tr>
                    <tr style="height: 26px;">
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Edad</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Age)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$age.'</p>
                        </td>
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Nacionalidad</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Nationality)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$nationality.'</p>
                        </td>
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Preexistencia</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Preexistence)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$preexistence.'</p>
                        </td>
                    </tr>
                    <tr style="height: 26px;">
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Fecha de emision</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Issuing date)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$issuing_date.'</p>
                        </td>
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Inicio de vigencia</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Effective date)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$effective_date.'</p>
                        </td>
                        <td style="width: 33.333%; height: 30px; padding: 5px;">
                            <p style="font-weight: bold; font-size: 18px; margin: 0;">Fin de vigencia</p>
                            <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Term date)</p>
                            <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$term_date.'</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="logo">
            <img src="'.$imagen_url.'" alt="Logo" style="width:100px; height:100px;" type="image/png">
        </div>
    </div>
    <div style="background: #deddd9;">
    <p style="font-weight: bold; font-size: 24px;"><em>Contacto de emergencia</em></p>
    </div>
    <p style="font-size: 18px;">Tener en cuenta el prefijo del n&uacute;mero de tel&eacute;fono al momento de realizar la llamada.</p>
    <table style="border-collapse: collapse; width: 96.648%; height: 40px;" border="1">
    <tbody>
    <tr style="height: 40px;">
    <td style="width: 33.333%; height: 40px; padding: 5px; text-align: center">
    <p style="font-weight: bold; font-size: 18px; margin: 0;"><strong>Tel&eacute;fono de contacto</strong></p>
    <p style="color: #b8b7b6; font-size: 12px; margin: 0;"><strong>(contact number)</strong></p>
    <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;"><strong>1 (786) 2091821</strong></p>
    </td>
    <td style="width: 33.333%; height: 40px; padding: 5px; text-align: center">
    <p style="font-weight: bold; font-size: 18px; margin: 0;"><strong>Email de contacto</strong></p>
    <p style="color: #b8b7b6; font-size: 12px; margin: 0;"><strong>(email)</strong></p>
    <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;"><strong>amigopaisano@gfassistance.com</strong></p>
    </td>
    <td style="width: 33.333%; height: 40px; padding: 5px; text-align: center">
    <p style="font-weight: bold; font-size: 18px; margin: 0;"><strong>Whatsapp</strong></p>
    <p style="color: #b8b7b6; font-size: 12px; margin: 0;"><strong>(Whatsapp)</strong></p>
    <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;"><strong>1 (786) 2091821</strong></p>
    </td>
    </tr>
    </tbody>
    </table>
    <div style="background: #deddd9;">
    <p style="font-weight: bold; font-size: 24px;"><em>Cobertura</em></p>
    </div>
    <div>
    <ul>
    <li style="font-size: 18px; font-family: Arial;">Atenci&oacute;n directa de reclamaciones</li>
    <li style="font-size: 18px; font-family: Arial;">Verificaci&oacute;n de coberturas</li>
    <li style="font-size: 18px; font-family: Arial;">Asignaci&oacute;n de funeraria local</li>
    <li style="font-size: 18px; font-family: Arial;">Retiro de cuerpo desde el lugar de fallecimiento</li>
    <li style="font-size: 18px; font-family: Arial;">Traslado a funeraria local</li>
    <li style="font-size: 18px; font-family: Arial;">Embalsamiento (en caso de ser escogido el servicio de traslado de cuerpo)</li>
    <li style="font-size: 18px; font-family: Arial;">Cofre para traslado internacional</li>
    <li style="font-size: 18px; font-family: Arial;">Tanatoestetica</li>
    <li style="font-size: 18px; font-family: Arial;">Cremaci&oacute;n (si es permitido por ley y si es el servicio escogido por la familia)</li>
    <li style="font-size: 18px; font-family: Arial;">Certificado de defunci&oacute;n (1)</li>
    <li style="font-size: 18px; font-family: Arial;">Apostillaje certificado de defunci&oacute;n (1)</li>
    <li style="font-size: 18px; font-family: Arial;">Certificado de no enfermedades infecto-contagiosas</li>
    <li style="font-size: 18px; font-family: Arial;">Permiso de inhumaci&oacute;n/cremaci&oacute;n</li>
    <li style="font-size: 18px; font-family: Arial;">Carta de embalsamiento</li>
    <li style="font-size: 18px; font-family: Arial;">Registro consular (en caso de ser exigido para el traslado internacional)</li>
    <li style="font-size: 18px; font-family: Arial;">Tr&aacute;mites aduaneros</li>
    <li style="font-size: 18px; font-family: Arial;">Traslado a aeropuerto</li>
    <li style="font-size: 18px; font-family: Arial;">Flete a&eacute;reo</li>
    </ul>
    </div>
<div style="background: #deddd9;">
   <p style="font-weight: bold; font-size: 24px;"><em>Requisito contractual</em></p>
</div>
<p>IMPORTANTE, SEÑOR(A) BENEFICIARIO, LEA Y CONSERVE ESTE DOCUMENTO: En virtud de este acuerdo PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC se obliga a estar disponible 24 horas al dia, 365 dias al año, para entregar o coordinar por si o por intermedio de sus aliados, el Servicio Funerario con las caracteristicas descritas adelante, una vez reportado el fallecimiento del BENEFICIARIO y/o de los inscritos; y usted, señor (a) BENEFICIARIO, tendra cobertura siempre y cuando AMIGO PAISANO tenga activo los beneficios como cliente VIP, ademas se obliga a suministrar informacion veraz y oportuna cuando se reporte el servicio. El hecho de incurrir en falsedad o mora exonera a PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC del cumplimiento del presente contrato y de cualquier otra obligacion que pudiera resultar, desde el momento en que se incurra en dicha falsedad, sin necesidad de dar aviso al BENEFICIARIO.</p>
<p>Se entiende, en todos los casos, que la prestacion del servicio se inicia una vez la autoridad competente nos permita la custodia del Cuerpo y tengamos autonomia plena para proceder. Queda entendido que los tramites y los costos generados con anterioridad a recibir la custodia del Cuerpo no estan cubiertos por este Servicio Funerario.</p>
<p>Los siguientes Servicios Funerarios podran variar de acuerdo con la cultura y/o costumbres de la region en donde se prestan. En tal caso, se prestaran dentro de un rango economico equivalente.</p>
<p>La terminologia utilizada en este contrato esta definida en el anexo contractual glosario.</p>

<p><strong>Cuando el fallecimiento se presente en Estados Unidos de America con Repatriacion del Cuerpo, cremacion y/o Repatriacion de cenizas:</strong></p>

<ul>
   <li>1)	Disponibilidad de acompañamiento de nuestro personal capacitado para guiar y acompañar al BENEFICIARIO o, en su defecto, al PARIENTE MaS PROXIMO, o a la persona que estos designen, durante todo el Servicio Funerario.</li>
</ul>

<ul>
   <li>2)	Disponibilidad de una compañia funeraria en los Estados Unidos de America autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC la cual se encargara de la Cremacion del Cuerpo y Repatriacion de cenizas (si es requerido y siempre y cuando la ley lo permita) o de la Repatriacion del Cuerpo, hacia los diferentes paises de Latinoamerica.</li>
</ul>

<ul>
   <li>3)	Tramites necesarios para la Cremacion y posterior Repatriacion de las cenizas (si es requerido y siempre y cuando la ley lo permita) o Repatriacion del Cuerpo hacia Los diferentes paises de Latinoamerica, gestionados por el personal autorizado por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>

<ul>
   <li>4)	Proceso de Embalsamamiento necesario para la Repatriacion del Cuerpo o la Cremacion del Cuerpo, realizado por la compañia funeraria autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>

<ul>
   <li>5)	Cofre y embalaje especificos para las cenizas y Repatriacion de las cenizas (si es requerido y siempre y cuando la ley lo permita) o para la Repatriacion del Cuerpo hacia los Diferentes paises de Latinoamerica.</li>
</ul>

<ul>
   <li>6)	Traslados necesarios para la llevar a cabo la cremacion del cuerpo (si es el servicio escogido por la familia)</li>
</ul>
<ul>
   <li>7)	 Repatriacion de las cenizas (si es requerido y siempre y cuando la ley lo permita) o repatriacion de cuerpo, desde el lugar del fallecimiento en los Estados Unidos de America unicamente hasta los diferentes paises de Latinoamerica. El traslado internacional se prestara de acuerdo con las condiciones de las aerolineas y demas medios de transporte requeridos, contratados directamente o a traves de la compañia funeraria autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>
<p>** El traslado se hace hasta el aeropuerto internacional mas proximo de la localidad indicada por el PARIENTE MaS PROXIMO, los costos de aduanas y traslados internos en los diferentes paises Latinoamerica no esta incluidos. </p>
<p><strong>Servicios en los diferentes paises de Latinoamerica para los BENEFICIARIOS que fallecen en dichos paises</strong></p>

<ul>
   <li>1)	Disponibilidad de acompañamiento de nuestro personal capacitado para guiar y acompañar al BENEFICIARIO o, en su defecto, al PARIENTE MaS PROXIMO, o a la persona que estos designen, durante todo el Servicio Funerario.</li>
</ul>

<ul>
   <li>2)	Disponibilidad de una compañia funeraria en los diferentes paises de Latinoamerica autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC la cual se encargara de la del servicio funerario de traslado nacional o local dentro de los diferentes paises de Latinoamerica</li>
</ul>

<ul>
   <li>3)	Tramites necesarios para la Cremacion (si es requerido y siempre y cuando la ley lo permita) o inhumacion del Cuerpo, gestionados por el personal autorizado por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC </li>
</ul>

<ul>
   <li>4)	Proceso de Embalsamamiento necesario para la Velacion hasta por 12 horas, realizado por la compañia funeraria autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>
<ul>
   <li>5)	Certificado de defuncion (4)</li>
</ul>
<ul>
   <li>6)	Cofre especifico para las cenizas (si es requerido y siempre y cuando la ley lo permita) o para la Inhumacion del Cuerpo.</li>
</ul>
<ul>
   <li>7)	Cremacion</li>
</ul>
<ul>
   <li>8)	Lote o boveda en cementerio no incluida</li>
</ul>
<ul>
   <li>9)	Traslado de restos des de funeraria hasta cementerio </li>
</ul>
<p>PARaGRAFO 1: Los Servicios Funerarios aqui descritos podran ser mejorados por la familia pagando el valor que corresponde a precios del mercado.</p>
<p>PARaGRAFO 2: Este documento es privado y por ende es responsabilidad del BENEFICIARIO notificar o proporcionar una copia a alguien cercano.</p>
<p>Recomendaciones</p>
<ul>
   <li>1)	Su contrato de prevision funeraria no puede ser modificado durante la Vigencia. </li>
   <li>2)	Vigencias, carencias, servicios o aclaraciones, favor comunicarse a nuestra linea desde Estados Unidos de America XXXXXXX y desde los diferentes paises de Latinoamerica a la linea XXXXXXXXXX, o al correo electronico XXXX@XXXXX.</li>
   <li>3)	En el momento en que el BENEFICIARIO o cualquiera de los inscritos cumplan 60 años de edad, se modifica automaticamente la prestacion del servicio para estas personas, aplicando las condiciones descritas en el numeral 4 de los aspectos legales.</li>
</ul>

<p>Aspectos legales</p>
<ul>
   <li>1.	El contrato de prevision funeraria tiene una duracion de doce (12) meses, contados a partir de la fecha de inicio de Vigencia del contrato.</li>
   <li>2.	Si usted no solicita el Servicio Funerario a nuestra compañia, no tendra derecho a ninguna compensacion economica.</li>
   <li>3.	Los beneficios que se generan en virtud de este contrato (escrito o verbal), en ningun momento se convierten en ahorro, por lo tanto, no son reembolsables y solo dan derecho a tomar o no los servicios acordados, a su eleccion.</li>
   <li>4.	El BENEFICIARIO y los inscritos tendran plena cobertura mientras sus edades sean inferiores a 59 años + 364 dias. A partir de los 60 años, la cobertura del presente acuerdo, sera del 50% del servicio pactado, a precios comerciales.</li>
   <li>5.	La no utilizacion de uno o varios servicios no obliga a nuestra compañia a reconocimiento economico alguno, bajo el entendido que PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC. esta disponible para prestar los Servicios Funerarios cada que el cliente los requiera, siempre y cuando este vinculado como cliente VIP de AMIGO PAISANO .</li>
   <li>6.	En caso de presentarse el fallecimiento de uno de los inscritos, comuniquese inmediatamente con nuestra area de servicios, sin importar el dia y la hora. Desde los Estados Unidos de America a la linea XXXXXXXXX y desde los diferentes paises de Latinoamerica a la linea XXXXXXX, indicando el nombre completo y codigo de programa. Se debe tramitar ante el medico tratante o la institucion responsable, la oportuna expedicion del certificado medico de defuncion, junto con los demas documentos requeridos por la ley, previa a la toma en custodia del fallecido, para tener derecho a la prestacion del servicio.</li>
   <li>7.	Si una persona se encuentra inscrita en dos o mas contratos de prevision exequial, sera responsabilidad exclusiva del BENEFICIARIO o BENEFICIARIOS de cada contrato, sin que esta circunstancia genere el pago de alguna compensacion economica.</li>
   <li>8.	Las personas inscritas en este contrato, son unicamente aquellas cuya inscripcion se encuentre soportada en la emision del contrato</li>
   <li>9.	En caso de ocurrencia de catastrofes naturales, antropicas o tecnologicas, guerra interna o externa, por muerte colectiva, o por aumento repentino de la mortalidad PREVISION FUNERARIA HISPANA S.A.S Y  SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC prestara hasta un maximo de (10) servicios exequiales adicionales a la media de mortalidad anual definida en 1.4 por cada mil beneficiarios, los que corresponderan a los primeros que sean solicitados; si la catastrofe afecta la infraestructura de PREVISION FUNERARIA HISPANA S.A.S Y  SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC esta quedara exenta de cumplir con las obligaciones contenidas en el presente contrato, sin que por este hecho pueda exigirsele devolucion alguna de las cuotas canceladas o por cualquier otro concepto derivado de este acuerdo.</li>
   <li>10.	Una vez iniciada la Vigencia de este contrato, tanto el BENEFICIARIO como los inscritos, tendran las siguientes coberturas: Por muerte accidental o violenta, 24 horas despues. Por muerte natural, a los seis meses y un dia. Por suicidio, sera a los 24 meses.</li>
   <li>11.	El BENEFICIARIO y los inscritos tendran plena cobertura mientras sus edades sean inferiores a 59 años + 364 dias. A partir de los 60 años, la cobertura del presente acuerdo, sera del 50% del servicio pactado, a precios comerciales.</li>
   <li>12.	La desvinculacion como BENEFICIARIO por parte de AMIGO PAISANO como cliente VIP ocasiona la perdida de los beneficios expresados en este contrato. </li>
</ul>

</body>
</html>';
echo $html;
?>
