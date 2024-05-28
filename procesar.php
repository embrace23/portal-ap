<?php
// Conexión a la base de datos
require('config.php');

try {
    // Verificar si se ha subido un archivo
    if (!isset($_FILES['archivo']) || $_FILES['archivo']['error'] != UPLOAD_ERR_OK) {
        throw new Exception('Error al subir el archivo.');
    }

    // Lectura de archivo (tipo, tamaño, tipo de archivo)
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $archivotmp = $_FILES['archivo']['tmp_name'];
    $lineas = file($archivotmp);

    if ($lineas === false) {
        throw new Exception('Error al leer el archivo.');
    }

    // Obtener la fecha actual para upload_date
    $fecha_actual = date('Y-m-d');

    // Obtener el mes actual para la validación de upload_date
    $mes_actual = date('m');

    // Inicialización de variable para ser usada con los registros
    $i = 0;

    // Recorro las líneas del archivo
    foreach ($lineas as $linea) {
        // Saltar la primera línea (encabezado)
        if ($i == 0) {
            $i++;
            continue;
        }

        // Reconocer separación por ;
        $datos = explode(";", $linea);

        // Validar número de columnas
        if (count($datos) < 10) {
            throw new Exception("Error en la línea $i del archivo: número insuficiente de columnas.");
        }

        // Variables de cada columna
        $first_name = !empty($datos[0]) ? trim($datos[0]) : '';
        $last_name = !empty($datos[1]) ? trim($datos[1]) : '';
        $date_of_birth = !empty($datos[2]) ? trim($datos[2]) : '';
        $age = !empty($datos[3]) ? trim($datos[3]) : '';
        $cod_cliente = !empty($datos[4]) ? trim($datos[4]) : '';
        $nationality = !empty($datos[5]) ? trim($datos[5]) : '';
        $issuance_country = !empty($datos[6]) ? trim($datos[6]) : '';
        $issuing_date = !empty($datos[7]) ? date('Y-m-d', strtotime($datos[7])) : '';
        $effective_date = !empty($datos[8]) ? date('Y-m-d', strtotime($datos[8])) : '';
        $term_date = !empty($datos[9]) ? date('Y-m-d', strtotime($datos[9])) : '';

        // Chequeo de duplicados
        $checkemail_duplicidad = "SELECT cod_cliente FROM pax WHERE cod_cliente='$cod_cliente'";
        $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
        if (!$ca_dupli) {
            throw new Exception('Error al verificar duplicados: ' . mysqli_error($con));
        }
        $cant_duplicidad = mysqli_num_rows($ca_dupli);

        // Insertar o actualizar datos en la base de datos
        if ($cant_duplicidad == 0) {
            // Insertar datos en tabla general 'pax'
            $insertarData = "INSERT INTO pax(
                first_name,
                last_name,
                date_of_birth,
                age,
                cod_cliente,
                nationality,
                issuance_country,
                issuing_date,
                effective_date,
                term_date,
                upload_date,
                continuity_subs,
                preexistence
            ) VALUES(
                '$first_name',
                '$last_name',
                '$date_of_birth',
                '$age',
                '$cod_cliente',
                '$nationality',
                '$issuance_country',
                '$issuing_date',
                '$effective_date',
                '$term_date',
                '$fecha_actual',
                '1',
                'Yes'
            )";
            if (!mysqli_query($con, $insertarData)) {
                throw new Exception('Error al insertar en pax: ' . mysqli_error($con));
            }

            // Insertar datos en tabla por cliente
            $tabla_destino = ($nationality == 'Protege Tu Viaje (PTV)') ? 'cliente1' : 'cliente2';
            $insertarTablaIndividual = "INSERT INTO $tabla_destino(
                first_name,
                last_name,
                date_of_birth,
                age,
                cod_cliente,
                nationality,
                issuance_country,
                issuing_date,
                effective_date,
                term_date,
                upload_date,
                continuity_subs,
                preexistence
            ) VALUES(
                '$first_name',
                '$last_name',
                '$date_of_birth',
                '$age',
                '$cod_cliente',
                '$nationality',
                '$issuance_country',
                '$issuing_date',
                '$effective_date',
                '$term_date',
                '$fecha_actual',
                '1',
                'Yes'
            )";
            if (!mysqli_query($con, $insertarTablaIndividual)) {
                throw new Exception('Error al insertar en tabla individual: ' . mysqli_error($con));
            }
        } else {
            // Si ya existe, actualizar datos en tabla general 'pax'
            $updateData = "UPDATE pax SET 
                first_name='$first_name',
                last_name='$last_name',
                date_of_birth='$date_of_birth',
                age='$age',
                nationality='$nationality',
                issuance_country='$issuance_country',
                issuing_date='$issuing_date',
                effective_date='$effective_date',
                term_date='$term_date',
                upload_date='$fecha_actual',
                continuity_subs=continuity_subs + 1,
                preexistence=IF(continuity_subs + 1 >= 6, 'No', 'Yes')
                WHERE cod_cliente='$cod_cliente'";
            if (!mysqli_query($con, $updateData)) {
                throw new Exception('Error al actualizar en pax: ' . mysqli_error($con));
            }

            // Actualizar datos en tabla por cliente
            $tabla_destino = ($nationality == 'Protege Tu Viaje (PTV)') ? 'cliente1' : 'cliente2';
            $updateTablaIndividual = "UPDATE $tabla_destino SET 
                first_name='$first_name',
                last_name='$last_name',
                date_of_birth='$date_of_birth',
                age='$age',
                nationality='$nationality',
                issuance_country='$issuance_country',
                issuing_date='$issuing_date',
                effective_date='$effective_date',
                term_date='$term_date',
                upload_date='$fecha_actual',
                continuity_subs=continuity_subs + 1,
                preexistence=IF(continuity_subs + 1 >= 6, 'No', 'Yes')
                WHERE cod_cliente='$cod_cliente'";
            if (!mysqli_query($con, $updateTablaIndividual)) {
                throw new Exception('Error al actualizar en tabla individual: ' . mysqli_error($con));
            }
        }

        $i++;
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>


<!-- Un HTML cuando se cargue correctamente el CSV -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de datos</title>
    <style>
        /* styles.css */

        /* Estilos generales */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        /* Estilo del párrafo */
        p {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        /* Estilo del enlace */
        a {
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            background-color: #33a0a6;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #1c7d84;
        }
    </style>
</head>
<body>
    <p>Se cargó el archivo correctamente.</p>
    <a href="portal_clientes.html">Volver</a>
</body>
</html>
