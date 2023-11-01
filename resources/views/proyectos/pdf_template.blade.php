<!DOCTYPE html>
<html>
<head>
    <title>Informe de Proyecto - Gobierno de El Salvador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }
        .header h1 {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
            font-size: 24px;
            font-weight: bold;
        }
        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .institution {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .date {
            font-size: 16px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logo-gobierno.png') }}" alt="Logo del Gobierno">
    </div>
    <h1>INFORME DE PROYECTO</h1>
    <div class="title">GOBIERNO DE EL SALVADOR</div>
    <div class="institution">Universidad Católica de El Salvador.</div>
    <div class="header">
        <img src="{{ asset('images/logounicaesHD.png') }}" alt="Logo de UNICAES">
    </div>
    <div class="date">Fecha: {{ date('Y-m-d') }}</div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Proyecto</th>
            <th>Fuente de Fondos</th>
            <th>Monto Planificado</th>
            <th>Monto Patrocinado</th>
            <th>Monto de Fondos Propios</th>
        </tr>
        <tr>
            <td>{{ $proyecto->id }}</td>
            <td>{{ $proyecto->NombreProyecto }}</td>
            <td>{{ $proyecto->fuenteFondos }}</td>
            <td>${{ number_format($proyecto->MontoPlanificado, 2) }}</td>
            <td>${{ number_format($proyecto->MontoPatrocinado, 2) }}</td>
            <td>${{ number_format($proyecto->MontoFondosPropios, 2) }}</td>
        </tr>
    </table>
</body>
</html>
