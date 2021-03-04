<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

    <style>
        .label {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out,
                background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .label-info {
            color: #212529;
            background-color: #5bc0de;
        }

    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Historia Clínica</h1>
                {!! Form::open(['route' => 'report.pdf']) !!}
                @include('medical_history.partials.datos_paciente')
                <br>
                @include('medical_history.partials.indicadores_clinicos')
                <br>
                @include('medical_history.partials.antecedentes')
                <br>
                @include('medical_history.partials.estilo_vida')
                <br>
                @include('medical_history.partials.diario_actividades')
                <br>
                @include('medical_history.partials.indicadores_dieteticos')
                <br>
                {!! Form::submit('Enviar', ['class' => 'btn btn-link']) !!}
                <br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
        integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g=="
        crossorigin="anonymous"></script>
</body>

</html>
