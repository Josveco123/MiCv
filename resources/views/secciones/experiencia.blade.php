@extends('components.cuerpo')
@section('title', 'Home')

@section('titulo', 'EXPERIENCIA')

@section('content')
    <div class="content align-items-center">

        <div class="accordion" id="accordionExample">
            <!--

                                             aqui comeinesa eXPERIENCIA

                                            -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <img src="{{ asset('storage/Imagenes/circulo_amarillo.png') }}" alt="">
                        <span class='univ'> L A B O R A L </span>
                    </button>
                </h2>

                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table>
                            <thead class='encabezado_menu'>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Cargo</th>
                                    <th>periodo</th>
                                    <th>Logros</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Universidad de la Guajira</td>
                                    <td>Profesor de Sistemas </td>
                                    <td>1987-1988</td>
                                    <td>Desrrollar a Satisfaccion el Programa y sus requerimientos</td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                            target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tolcemento (ARGOS)</td>
                                    <td>Director de Información Tecnológica</td>
                                    <td>1989-2004</td>
                                    <td>-Desarrollar el plan extrategico de IT de la CIA <br>
                                        -Direccionar las funciones del Dpto. de Sistemas<br>
                                        - Liderar el Proceso de sitematizacion de la fabrica <br>
                                        - Participar en el comite de IT del Grupo ARGOS <br>
                                        - Logros: Sistematizar Practicamente todos los <br>
                                        procesos del area Adtiva.
                                    </td>
                                    <td class='link_certificados'>
                                        <a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank">
                                            <img src="{{ asset('storage/Imagenes/search.svg') }}" alt="Ver">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fundación Desarrollo y <br>
                                        Paz Montes de Maria
                                    </td>
                                    <td>Asesor de la implementacion extrategica de IT
                                    </td>
                                    <td>2008-2016</td>
                                    <td>- Desrrollar a Satisfaccion los Programa establecidos <br>
                                        - Desarrollar montajes en sistemas de simulaciones financieras
                                    </td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                            target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Universidad de Sucre</td>
                                    <td>Profesor Proyectos y Simulacion Financier </td>
                                    <td>2008-2016</td>
                                    <td>- Desrrollar a Satisfaccion los Programa establecidos <br>
                                        - Desarrollar montajes en sistemas de simulaciones financieras
                                    </td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                            target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Almidones de Sucre</td>
                                    <td>Dirección Administrativa </td>
                                    <td>2009-2014</td>
                                    <td>- Diseño e implementación sistemas de comunicacion de voz y datos <br>
                                        - Diseño e implementacion sistemas de comunicacion de voz <br>
                                        - Liderar Proceso certificacion ISO. 9001 ver 2015, <br>
                                        - Encargado de toda la parte administrativa.
                                    </td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                            target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Transportes Urbanos<br>de Sincelejo</td>
                                    <td>Direccion Administrativa </td>
                                    <td>2014-2017</td>
                                    <td>- Gerente <br>
                                        - Dirigir, Coordinar y organizar la empresa<br>
                                        - Repre3sentar a la empresa ante los entes necesarios <br>
                                        - Velar por el buen funcionamiento de la empresa tanto en <br>
                                        aspecto interno como ante los diferentes entes legales.
                                    </td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                            target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                alt="Ver"></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
