<?php
require('fpdf/fpdf.php');

// Configuración de la conexión a la base de datos
$servername = "db5015283001.hosting-data.io";
$username = "dbu4149991";
$password = "Embrace2024!";
$database = "dbs12584072";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8mb4");

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Inicializar variables de búsqueda
$nombre = ucwords($_GET['nombre']);
$apellido = ucwords($_GET['apellido']);
$document_number = $_GET['document_number']; // No necesitas capitalizar un número de documento

// Consulta SQL para obtener los valores filtrados de la tabla pax
$sql = "SELECT first_name, last_name, date_of_birth, age, document_number, plan, issuing_date, effective_date, term_date, preexistence FROM pax WHERE first_name = ? AND last_name = ? AND document_number = ?";

// Preparar la consulta
$stmt = $conn->prepare($sql);

// Vincular parámetros
$stmt->bind_param("sss", $nombre, $apellido, $document_number);

// Ejecutar la consulta
$stmt->execute();

// Obtener resultado
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $date_of_birth = $row['date_of_birth'];
    $age = $row['age'];
    $document_number = $row['document_number'];
    $plan = $row['plan'];
    $issuing_date = $row['issuing_date'];
    $effective_date = $row['effective_date'];
    $term_date = $row['term_date'];
    $preexistence = $row['preexistence'];
    // Crear el objeto FPDF
    $fpdf = new FPDF();
    $fpdf->AddPage();
  
    if ($plan == 'Uniplan' && file_exists('templates/template.php')) {
        include('templates/template.php');
    } elseif ($plan == 'Plan2' && file_exists('templates/template2.php')) {
        include('templates/template2.php');
    } else {
        echo "Plan no reconocido o archivo de plantilla no encontrado";
    }

    // Enviar el PDF al navegador
    $fpdf->Output('D', 'Plan de previsión exequial - ' . $nombre . ' ' . $apellido . '.pdf', true);
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión y liberar recursos
$stmt->close();
$conn->close();
?>