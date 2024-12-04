<?php
function crear_calendario ($mes, $año) {
    $diasDeSemana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
    $primerDia = mktime(0, 0, 0, $mes, 1, $año);
    $numeroDias = date('t', $primerDia);
    $infoFecha = getdate($primerDia);
    if ($mes == "1") {
        $nombreMes = "Enero";
    } elseif ($mes == "2") {
        $nombreMes = "Febrero";
    } elseif ($mes == "3") {
        $nombreMes = "Marzo";
    } elseif ($mes == "4") {
        $nombreMes = "Abril";
    } elseif ($mes == "5") {
        $nombreMes = "Mayo";
    } elseif ($mes == "6") {
        $nombreMes = "Junio";
    } elseif ($mes == "7") {
        $nombreMes = "Julio";
    } elseif ($mes == "8") {
        $nombreMes = "Agosto";
    } elseif ($mes == "9") {
        $nombreMes = "Septiembre";
    } elseif ($mes == "10") {
        $nombreMes = "Octubre";
    } elseif ($mes == "11") {
        $nombreMes = "Noviembre";
    } elseif ($mes == "12") {
        $nombreMes = "Diciembre";
    }
    $diaSemana = ($infoFecha['wday'] + 6) % 7; 
    $diaHoy = date('Y-m-d');
    
    $calendario = "<div style='text-align: center;'><table border='1' style='margin: 0 auto;'>";
    $calendario .= "<center><h2>$nombreMes $año</h2>";
    $calendario .= "<a href='?mes=" . ($mes == 1 ? 12 : $mes - 1) . "&año=" . ($mes == 1 ? $año - 1 : $año) . "'><button>-Anterior mes</button></a>";
    $calendario .= "<a href='?mes=" . ($mes == 12 ? 1 : $mes + 1) . "&año=" . ($mes == 12 ? $año + 1 : $año) . "'><button>-Siguiente mes</button></a></center>";
    $calendario .= "<tr>";

    foreach ($diasDeSemana as $dia) {
        $calendario .= "<th class='header'>$dia</th>";
    }
    $calendario .= "</tr><tr>"; 

    if ($diaSemana > 0) { 
        for ($i = 0; $i < $diaSemana; $i++) {
            $calendario .= "<td></td>";
        }
    }

    $diaActual = 1;
    $mes = str_pad($mes, 2, "0", STR_PAD_LEFT);

    while ($diaActual <= $numeroDias) {

        if ($diaSemana == 7) { 
            $diaSemana = 0; 
            $calendario .= "</tr><tr>";
        }

        $diaActualRel = str_pad($diaActual, 2, "0", STR_PAD_LEFT);
        $fecha = "$año-$mes-$diaActual";
        $calendario .= "<td><h4>$diaActual</h4>";
        $calendario .= "</td>";
        $diaActual++;
        $diaSemana++;
    }
    if($diaSemana != 7) {
        $diasRestantes = 7 - $diaSemana;
        for ($i = 0; $i < $diasRestantes; $i++) {
            $calendario .= "<td></td>";
        }
    }
    $calendario .= "</tr>";
    $calendario .= "</table></div>";
    echo $calendario;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        table {
            table-layout: fixed;
        }
        td {
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class = "col-md-12">
                <?php
                    $mes = isset($_GET['mes']) ? $_GET['mes'] : date('n');
                    $año = isset($_GET['año']) ? $_GET['año'] : date('Y');
                    echo crear_calendario($mes, $año);
                ?>
            </div>
        </div>
    </div>
</body>
</html>