<?php
session_start();

// Recuperamos los valores de la URL
// Obtener los parámetros desde la URL
$first_name = $_GET['first_name'] ?? '';
$last_name = $_GET['last_name'] ?? '';
$date_of_birth = $_GET['date_of_birth'] ?? '';
$age = $_GET['age'] ?? '';
$cod_cliente = $_GET['cod_cliente'] ?? '';
$nationality = $_GET['nationality'] ?? '';
$issuing_date = $_GET['issuing_date'] ?? '';
$effective_date = $_GET['effective_date'] ?? '';
$term_date = $_GET['term_date'] ?? '';
$preexistence = $_GET['preexistence'] ?? '';

$imagen_url = 'https://gfassistance.com/portal/src/images/LOGO_AP.png';

$html = '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; width: 100%;">
    <img src='.$imagen_url.' alt="Logo" style="width:100px; height:100px;">
    <table style="border-collapse: collapse; max-width:100%;" border="1">
    <tbody>
        <tr style="height: 20px;">
            <td style="width: 33.333%; height: 20px; font-weight: bold;">'.$first_name.' '.$last_name.'</td>
            <td style="width: 33.333%; height: 30px; padding: 5px;">
                <p style="font-weight: bold; font-size: 18px; margin: 0;">N&deg; de voucher</p>
                <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(voucher number)</p>
                <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">V-'.$cod_cliente.'</p>
            </td>
            <td style="width: 33.333%; height: 30px; padding: 5px;">
                <p style="font-weight: bold; font-size: 18px; margin: 0;">Código de cliente</p>
                <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Client code)</p>
                <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$cod_cliente.'</p>
            </td>
        </tr>
        <tr style="height: 26px;">
            <td style="width: 33.333%; height: 30px; padding: 5px;">
                <p style="font-weight: bold; font-size: 18px; margin: 0;">Fecha de nacimiento</p>
                <p style="color: #b8b7b6; font-size: 12px; margin: 0;">(Date of birth)</p>
                <p style="color: #2e248f; font-weight: bold; font-size: 15px; margin: 0;">'.$date_of_birth.'</p>
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
<p>IMPORTANTE, SEÑOR(A) BENEFICIARIO, LEA Y CONSERVE ESTE DOCUMENTO: En virtud de este acuerdo PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC se obliga a estar disponible 24 horas al día, 365 días al año, para entregar o coordinar por sí o por intermedio de sus aliados, el Servicio Funerario con las características descritas adelante, una vez reportado el fallecimiento del BENEFICIARIO y/o de los inscritos; y usted, señor (a) BENEFICIARIO, tendrá cobertura siempre y cuando AMIGO PAISANO tenga activo los beneficios como cliente VIP, además se obliga a suministrar información veraz y oportuna cuando se reporte el servicio. El hecho de incurrir en falsedad o mora exonera a PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC del cumplimiento del presente contrato y de cualquier otra obligación que pudiera resultar, desde el momento en que se incurra en dicha falsedad, sin necesidad de dar aviso al BENEFICIARIO.</p>
<p>Se entiende, en todos los casos, que la prestación del servicio se inicia una vez la autoridad competente nos permita la custodia del Cuerpo y tengamos autonomía plena para proceder. Queda entendido que los trámites y los costos generados con anterioridad a recibir la custodia del Cuerpo no están cubiertos por este Servicio Funerario.</p>
<p>Los siguientes Servicios Funerarios podrán variar de acuerdo con la cultura y/o costumbres de la región en donde se prestan. En tal caso, se prestarán dentro de un rango económico equivalente.</p>
<p>La terminología utilizada en este contrato está definida en el anexo contractual glosario.</p>

<p><strong>Cuando el fallecimiento se presente en Estados Unidos de América con Repatriación del Cuerpo, cremación y/o Repatriación de cenizas:</strong></p>

<ul>
   <li>1)	Disponibilidad de acompañamiento de nuestro personal capacitado para guiar y acompañar al BENEFICIARIO o, en su defecto, al PARIENTE MÁS PROXIMO, o a la persona que estos designen, durante todo el Servicio Funerario.</li>
</ul>

<ul>
   <li>2)	Disponibilidad de una compañía funeraria en los Estados Unidos de América autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC la cual se encargará de la Cremación del Cuerpo y Repatriación de cenizas (si es requerido y siempre y cuando la ley lo permita) o de la Repatriación del Cuerpo, hacia los diferentes países de Latinoamérica.</li>
</ul>

<ul>
   <li>3)	Trámites necesarios para la Cremación y posterior Repatriación de las cenizas (si es requerido y siempre y cuando la ley lo permita) o Repatriación del Cuerpo hacia Los diferentes países de Latinoamérica, gestionados por el personal autorizado por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>

<ul>
   <li>4)	Proceso de Embalsamamiento necesario para la Repatriación del Cuerpo o la Cremación del Cuerpo, realizado por la compañía funeraria autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>

<ul>
   <li>5)	Cofre y embalaje específicos para las cenizas y Repatriación de las cenizas (si es requerido y siempre y cuando la ley lo permita) o para la Repatriación del Cuerpo hacia los Diferentes países de Latinoamérica.</li>
</ul>

<ul>
   <li>6)	Traslados necesarios para la llevar a cabo la cremación del cuerpo (si es el servicio escogido por la familia)</li>
</ul>
<ul>
   <li>7)	 Repatriación de las cenizas (si es requerido y siempre y cuando la ley lo permita) o repatriación de cuerpo, desde el lugar del fallecimiento en los Estados Unidos de América únicamente hasta los diferentes países de Latinoamérica. El traslado internacional se prestará de acuerdo con las condiciones de las aerolíneas y demás medios de transporte requeridos, contratados directamente o a través de la compañía funeraria autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>
<p>** El traslado se hace hasta el aeropuerto internacional más próximo de la localidad indicada por el PARIENTE MÁS PROXIMO, los costos de aduanas y traslados internos en los diferentes países Latinoamérica no está incluidos. </p>
<p><strong>Servicios en los diferentes países de Latinoamérica para los BENEFICIARIOS que fallecen en dichos países</strong></p>

<ul>
   <li>1)	Disponibilidad de acompañamiento de nuestro personal capacitado para guiar y acompañar al BENEFICIARIO o, en su defecto, al PARIENTE MÁS PROXIMO, o a la persona que estos designen, durante todo el Servicio Funerario.</li>
</ul>

<ul>
   <li>2)	Disponibilidad de una compañía funeraria en los diferentes países de Latinoamérica autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC la cual se encargará de la del servicio funerario de traslado nacional o local dentro de los diferentes países de Latinoamérica</li>
</ul>

<ul>
   <li>3)	Trámites necesarios para la Cremación (si es requerido y siempre y cuando la ley lo permita) o inhumación del Cuerpo, gestionados por el personal autorizado por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC </li>
</ul>

<ul>
   <li>4)	Proceso de Embalsamamiento necesario para la Velación hasta por 12 horas, realizado por la compañía funeraria autorizada por PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC.</li>
</ul>
<ul>
   <li>5)	Certificado de defunción (4)</li>
</ul>
<ul>
   <li>6)	Cofre específico para las cenizas (si es requerido y siempre y cuando la ley lo permita) o para la Inhumación del Cuerpo.</li>
</ul>
<ul>
   <li>7)	Cremación</li>
</ul>
<ul>
   <li>8)	Lote o bóveda en cementerio no incluida</li>
</ul>
<ul>
   <li>9)	Traslado de restos des de funeraria hasta cementerio </li>
</ul>
<p>PARÁGRAFO 1: Los Servicios Funerarios aquí descritos podrán ser mejorados por la familia pagando el valor que corresponde a precios del mercado.</p>
<p>PARÁGRAFO 2: Este documento es privado y por ende es responsabilidad del BENEFICIARIO notificar o proporcionar una copia a alguien cercano.</p>
<p>Recomendaciones</p>
<ul>
   <li>1)	Su contrato de previsión funeraria no puede ser modificado durante la Vigencia. </li>
   <li>2)	Vigencias, carencias, servicios o aclaraciones, favor comunicarse a nuestra línea desde Estados Unidos de América XXXXXXX y desde los diferentes países de Latinoamérica a la línea XXXXXXXXXX, o al correo electrónico XXXX@XXXXX.</li>
   <li>3)	En el momento en que el BENEFICIARIO o cualquiera de los inscritos cumplan 60 años de edad, se modifica automáticamente la prestación del servicio para estas personas, aplicando las condiciones descritas en el numeral 4 de los aspectos legales.</li>
</ul>

<p>Aspectos legales</p>
<ul>
   <li>1.	El contrato de previsión funeraria tiene una duración de doce (12) meses, contados a partir de la fecha de inicio de Vigencia del contrato.</li>
   <li>2.	Si usted no solícita el Servicio Funerario a nuestra compañía, no tendrá derecho a ninguna compensación económica.</li>
   <li>3.	Los beneficios que se generan en virtud de este contrato (escrito o verbal), en ningún momento se convierten en ahorro, por lo tanto, no son reembolsables y solo dan derecho a tomar o no los servicios acordados, a su elección.</li>
   <li>4.	El BENEFICIARIO y los inscritos tendrán plena cobertura mientras sus edades sean inferiores a 59 años + 364 días. A partir de los 60 años, la cobertura del presente acuerdo, será del 50% del servicio pactado, a precios comerciales.</li>
   <li>5.	La no utilización de uno o varios servicios no obliga a nuestra compañía a reconocimiento económico alguno, bajo el entendido que PREVISION FUNERARIA HISPANA S.A.S Y SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC. está disponible para prestar los Servicios Funerarios cada que el cliente los requiera, siempre y cuando esté vinculado como cliente VIP de AMIGO PAISANO .</li>
   <li>6.	En caso de presentarse el fallecimiento de uno de los inscritos, comuníquese inmediatamente con nuestra área de servicios, sin importar el día y la hora. Desde los Estados Unidos de América a la línea XXXXXXXXX y desde los diferentes países de Latinoamérica a la línea XXXXXXX, indicando el nombre completo y código de programa. Se debe tramitar ante el médico tratante o la institución responsable, la oportuna expedición del certificado médico de defunción, junto con los demás documentos requeridos por la ley, previa a la toma en custodia del fallecido, para tener derecho a la prestación del servicio.</li>
   <li>7.	Si una persona se encuentra inscrita en dos o más contratos de previsión exequial, será responsabilidad exclusiva del BENEFICIARIO o BENEFICIARIOS de cada contrato, sin que esta circunstancia genere el pago de alguna compensación económica.</li>
   <li>8.	Las personas inscritas en este contrato, son únicamente aquellas cuya inscripción se encuentre soportada en la emisión del contrato</li>
   <li>9.	En caso de ocurrencia de catástrofes naturales, antrópicas o tecnológicas, guerra interna o externa, por muerte colectiva, o por aumento repentino de la mortalidad PREVISION FUNERARIA HISPANA S.A.S Y  SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC prestará hasta un máximo de (10) servicios exequiales adicionales a la media de mortalidad anual definida en 1.4 por cada mil beneficiarios, los que corresponderán a los primeros que sean solicitados; si la catástrofe afecta la infraestructura de PREVISION FUNERARIA HISPANA S.A.S Y  SU OPERADOR LOGISTICO GLOBAL FUNERAL ASSISTANCE LLC esta quedará exenta de cumplir con las obligaciones contenidas en el presente contrato, sin que por este hecho pueda exigírsele devolución alguna de las cuotas canceladas o por cualquier otro concepto derivado de este acuerdo.</li>
   <li>10.	Una vez iniciada la Vigencia de este contrato, tanto el BENEFICIARIO como los inscritos, tendrán las siguientes coberturas: Por muerte accidental o violenta, 24 horas después. Por muerte natural, a los seis meses y un día. Por suicidio, será a los 24 meses.</li>
   <li>11.	El BENEFICIARIO y los inscritos tendrán plena cobertura mientras sus edades sean inferiores a 59 años + 364 días. A partir de los 60 años, la cobertura del presente acuerdo, será del 50% del servicio pactado, a precios comerciales.</li>
   <li>12.	La desvinculación como BENEFICIARIO por parte de AMIGO PAISANO como cliente VIP ocasiona la pérdida de los beneficios expresados en este contrato. </li>
</ul>

</body>
</html>';
echo $html;
?>
