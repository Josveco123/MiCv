<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('stylos.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <a id='logo_a' class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
                <img id='logo_jvc' class="d-inline img-fluid" src="{{ asset('storage/Imagenes/logo.png') }}"
                    alt="">
                <span class="d-inline nombre_jvc">Jose Vergara Cordero</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('estudios.index') }}">Estudios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('experiencia.index') }}">Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('referencias.index') }}">Referencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('proyectos.index') }}">Proyectos</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div id='tablero'>
        <div id='inf_personal'>

            <div class='linea_w'>
                <a>
                    <img id='img_foto' src="{{ asset('storage/Imagenes/foto.jpg') }}" alt="">
                </a>
                <div id='linea_w_span'>
                    <span class='fs-4'>
                        SOMBRE MI
                    </span>

                    <p class='linea_w_p mt-2'>
                        Ingeniero full stack con más de 5 años de experiencia en el desarrollo de aplicaciones web
                        dinámicas y
                        escalables usando Laravel HTTP, CSS, PHP, Node.js, React y MySQL. He participado en proyectos de
                        diversos sectores,
                        como educación, salud y comercio electrónico, aportando soluciones innovadoras y eficientes.
                        Tengo mas de 30 años de experiencia laboral como director de contros de IT, dispongo de
                        conocimientos avanzados de las mejores prácticas de programación y optimización de rendimiento.
                        Me apasiona aprender nuevas tecnologías y enfrentar nuevos retos. Mi objetivo es seguir
                        creciendo como
                        profesional y aportar valor a la empresa que me contrate.
                        <br>
                        Me considero una persona creativa, con una creciente capacidad de solucion de
                        problemas con gran habilidad para la planificacion y creacion de proyectos, ademas con una gran
                        experiencia
                        profesional en diferentes sectores que constribuyen en mirar toda alternativa de una manera
                        interal.
                    </p>
                    <div class='linea'></div>
                    <span class='fs-6 mt-2 text-secondary'>
                        ME PUEDES CONTACTAR REDES SOCIALES
                    </span>
                    <p class='linea_w_p mt-2'>
                        <span class="fs-4">Facebook</span>
                        <br>
                       <span class="fs-4">Tik-Tok</span>
                     </p>
                </div>
            </div>

        </div>
        <div id='inf_adicional'>
            <div>
               @include('components.desarrollo')
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
