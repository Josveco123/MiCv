@extends('components.cuerpo')
@section('title', 'Home')

@section('titulo', 'FORMACION ACADEMICA')

@section('content')
    <div class="content align-items-center">

        <div class="accordion" id="accordionExample">
            <!--

                                     aqui comeinesa estudios UNIVERSITARIOS

                                    -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <img src="{{ asset('storage/Imagenes/circulo_amarillo.png') }}" alt="">
                        <span class='univ'> U N I V E R S I T A R I A </span>
                    </button>
                </h2>

                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table>
                            <thead class='encabezado_menu'>
                                <tr>
                                    <th>Entidad</th>
                                    <th>Titulo Obtenido</th>
                                    <th>Duracion y fecha</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Universidad de la Guajira</td>
                                    <td>Ingeniero Industrial </td>
                                    <td>5 años. Dic-1989</td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                src="{{ asset('storage/Imagenes/search.svg') }}" alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Universidad Industrial De Santander</td>
                                    <td>Ingeniero de Sistemas</td>
                                    <td>5 años. Dic-2002</td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                src="{{ asset('storage/Imagenes/search.svg') }}" alt="Ver"></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <!--

                                                                          aqui comeinesa estudios POST GRADOS

                                                            -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="{{ asset('storage/Imagenes/circulo_azul.png') }}" alt="">
                        <span class='univ'> P O S T - G R A D O S </span>
                    </button>
                </h2>

                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table>
                            <thead class='encabezado_menu'>
                                <tr>
                                    <th>Entidad</th>
                                    <th>Titulo Obtenido</th>
                                    <th>Duracion y fecha</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Corporacion Universitaria del Caribe</td>
                                    <td>Especialista en Administración Financiera </td>
                                    <td>1 año, Nov de 2004</td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                src="{{ asset('storage/Imagenes/search.svg') }}" alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Universidad de Sucre</td>
                                    <td>Docencia Universitaria</td>
                                    <td>6 meses, Nov 2001</td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                src="{{ asset('storage/Imagenes/search.svg') }}" alt="Ver"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ICONTEC</td>
                                    <td>Gestion Extrategica del Talento Humano</td>
                                    <td> Duracion 6 mese. Dic 2014</td>
                                    <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                src="{{ asset('storage/Imagenes/search.svg') }}" alt="Ver"></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>




            <!--               PRUBE PILOTO -->


            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <img src="{{ asset('storage/Imagenes/circulo_rojo.png') }}" alt="">
                        <span class='univ'> O T R O S &nbsp E S T U D I O S </span>
                    </button>
                </h2>

                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <div>
                                <table>
                                    <thead class='encabezado_menu'>
                                        <tr>
                                            <th>Entidad</th>
                                            <th>Titulo Obtenido</th>
                                            <th>Duracion y fecha</th>
                                            <th>Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>FreeCodeCampp</td>
                                            <td>JavaScript Algorithms and Data Structures </td>
                                            <td>300 Horas. Año 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                        src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CertyPro</td>
                                            <td>Gestión de proyectos con metodologías ágiles </td>
                                            <td>Febrero 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                        src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CertyPro</td>
                                            <td>Ccertificado_p1'>Profesional Certificado SCRUM</td>
                                            <td>Julio 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                        src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>IBM de Colombia</td>
                                            <td>Redes de Area Local</td>
                                            <td>48 Horas. Año 2002</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                        src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>IBM de Colombia</td>
                                            <td>Diseño de Controles Para Sistemas de Información </td>
                                            <td>60 Horas. Año 2012</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                        src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EDteam</td>
                                            <td>Laravel 9 Desde Cero</td>
                                            <td>100 Horas. Sept/2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank">
                                                    <img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>FreeCodeCamp</td>
                                            <td>Front And DevelopmentLibraries62</td>
                                            <td>300 Horas. Año 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}" target="_blank"><img
                                                        src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>FreeCodeCamp</td>
                                            <td>Relational Database</td>
                                            <td>300 Horas. Año 2023</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                                    target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>FreeCodeCamp</td>
                                            <td>Responsive Web Design</td>
                                            <td>300 Horas. Año 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                                    target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>FreeCodeCamp</td>
                                            <td>Back End Development end API's</td>
                                            <td>300 Horas. Año 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                                    target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>FreeCodeCamp</td>
                                            <td>Back End Development end API's</td>
                                            <td>300 Horas. Año 2022</td>
                                            <td class='link_certificados'><a href="{{ asset('storage/Imagenes/docencia.png') }}"
                                                    target="_blank"><img src="{{ asset('storage/Imagenes/search.svg') }}"
                                                        alt="Ver"></a>
                                            </td>
                                        </tr>

                                        <!-- Agregue más filas según sea necesario -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
