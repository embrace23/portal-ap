<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
//use Dompdf\Options;
session_start();

// Incluir el archivo de configuración
require_once 'config.php';

// Verificar si se han enviado los datos del formulario
if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cod_cliente'])) {
    // Obtener los valores de las variables
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cod_cliente = $_GET['cod_cliente'];
    
    // Consulta para verificar si existe un registro con los datos proporcionados
    $query = "SELECT first_name, last_name, date_of_birth, age, cod_cliente, nationality, issuing_date, effective_date, term_date, preexistence FROM pax WHERE first_name='$nombre' AND last_name='$apellido' AND cod_cliente='$cod_cliente'";
    $result = mysqli_query($con, $query);

    // Verificar si se encontró un registro
    if(mysqli_num_rows($result) > 0) {
        // Obtener los datos del primer registro encontrado
        $row = mysqli_fetch_assoc($result);

        // Guardar los datos en variables
        // Construir el URL con los parámetros del formulario
        $url = "http://gfassistance.com/portal/misDatosPdf.php?";
        $url .= "first_name=" . urlencode($row['first_name']) . "&";
        $url .= "last_name=" . urlencode($row['last_name']) . "&";
        $url .= "date_of_birth=" . urlencode($row['date_of_birth']) . "&";
        $url .= "age=" . urlencode($row['age']) . "&";
        $url .= "cod_cliente=" . urlencode($row['cod_cliente']) . "&";
        $url .= "nationality=" . urlencode($row['nationality']) . "&";
        $url .= "issuing_date=" . urlencode($row['issuing_date']) . "&";
        $url .= "effective_date=" . urlencode($row['effective_date']) . "&";
        $url .= "term_date=" . urlencode($row['term_date']) . "&";
        $url .= "preexistence=" . urlencode($row['preexistence']);

        // Obtener el HTML desde la URL
        $html = file_get_contents_curl($url);


        // Crear un nuevo objeto Dompdf
        //$options = new Options();
        //$options->set('isRemoteEnabled', true);
        //$pdf = new Dompdf($options);
		$pdf = new Dompdf();
        // Configurar el tamaño y orientación del papel
        $pdf->set_paper("A4", "portrait");

        // Cargar el HTML en el objeto Dompdf
        $pdf->load_html(utf8_decode($html));

        // Renderizar el PDF
        $pdf->render();

        // Mostrar el PDF en el navegador
        $pdf->stream('Voucher.pdf');
    } else {
        // Si no se encontró ningún registro, mostrar un mensaje de error o redirigir a otra página
        echo "Error: No se encontró ningún registro con los datos proporcionados.";
    }
} else {
    // Si no se enviaron los datos del formulario, mostrar un mensaje de error o redirigir a otra página
    echo "Error: Todos los campos son requeridos.";
}

function file_get_contents_curl($url){
    $crl = curl_init();
    $timeout = 5;
    curl_setopt($crl, CURLOPT_URL, $url);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);

    $ret = curl_exec($crl);
    curl_close($crl);
    return $ret;
}
?>
