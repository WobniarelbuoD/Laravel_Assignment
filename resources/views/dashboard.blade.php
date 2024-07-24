<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- Bootstrap CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="extensions/editable/bootstrap-table-editable.js"></script>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            body {
            font-family: "Montserrat", sans-serif;
        }
        .table-header {
            background-color: rgba(47, 14, 105, 1);
            color: white;
        }
        .table-row:nth-child(even) {
            background-color: #FDF2F8;
        }
        .table-row:hover {
            background-color: #FF74C7;
        }
        .table {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .table th, .table td {
            padding: 12px 15px;
        }
        .table th {
            font-weight: bold;
        }
        .table td {
            vertical-align: middle;
        }
        .container {
            max-width: 1200px;
        }
        </style>
    </head>
    <body>
        <div>
        @component('components.dashboard-table', ['feedback' => $feedback])
        @endcomponent
        </div>
    </body>
</html>
