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
                    <button id='universitario_punto' class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <img src="{{ asset('storage/Imagenes/circulo.png') }}" alt=""> UNIVERSITARIOS:
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon_estudio">

                        <div class='univ_t'>
                            <img src="{{ asset('storage/Imagenes/uniguajira.png') }}" alt="">
                            <div class="certificados">
                                <label>UNIVERSIDAD DE LA GUAJIRA</label>
                                <span class='certificado_p1'>Ingeniero Industrial</span>
                                <p> Duración: 5 años </p>
                                <p> Títulado en Dic-1989</p>
                            </div>
                        </div>

                        <div class='univ_t'>
                            <img src="{{ asset('storage/Imagenes/uis.png') }}" alt="">
                            <div class="certificados">
                                <label>UNIVERSIDA IND. DE SANTANDER</label>
                                <span class='certificado_p1'>Ingeniero de Sistemas</span>
                                <p> Duración: 5 años (Semi P.) </p>
                                <p> Títulado en Dic-2002</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--

                                      aqui comeinesa estudios POST GRADOS

                        -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button id='universitario_punto' class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <img src="{{ asset('storage/Imagenes/circulo_azul.png') }}" alt=""> POST-GRADOS:
                    </button>
                </h2>

                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon_estudio_postgrado">

                        <div class='univ_t_posgrado'>
                            <img src="{{ asset('storage/Imagenes/Especializacion.png') }}" alt="">
                            <div class="certificados_postgrado">
                                <label>CORPORACION UNIVERSITARIA</label>
                                <label>DEL CARIBE -CECAR- </label>
                                <span class='certificado_p1_postgrado'>Especialista en Administración</span>
                                <span class='certificado_p1_postgrado'>Financiera</span>
                                <p> Duración: 1 año, Nov de 2004</p>
                            </div>
                        </div>

                        <div class='univ_t_posgrado'>
                            <img src="{{ asset('storage/Imagenes/docencia.png') }}" alt="">
                            <div class="certificados_postgrado">
                                <label>UNIVERSIDAD DE SUCRE</label>
                                <span class='certificado_p1_postgrado'>Docencia Universitaria</span>
                                <p> Duración: 6 meses, Nov 2001 </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--

                                      aqui comienzan OTROS CERTIFICADOS

                    -->

            <div class="accordion-item">

                <h2 class="accordion-header">
                    <button id='universitario_punto' class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTree" aria-expanded="false"
                        aria-controls="collapseTree">
                        <img src="{{ asset('storage/Imagenes/circulo_verde.png') }}" alt="">OTROS ESTUDIOS:
                    </button>
                </h2>

                <div id="collapseTree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon_estudio_otros">

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>FREECODECAM</label>
                                <span class='certificado_p1_otros'>JavaScript Algorithms</span>
                                 <span class='certificado_p1_otros'>and Data Structures</span>
                                <p> Duración: 300 Horas. Año 2022</p>
                                <span class='www'>https://www.freecodecamp.org/certification/Josveco123/</span>
                                <span class='www'>javaScript-algorithms-and-data-structures</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>FREECODECAM</label>
                                <span class='certificado_p1_otros'>Back End Development</span>
                                <span class='certificado_p1_otros'>end API's</span>
                                <p> Duración: 300 Horas. Año 2022</p>
                                <span class='www'>https://www.freecodecamp.org/certification/Josveco123/</span>
                                <span class='www'>back-end-development-and-apis</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>FREECODECAM</label>
                                <span class='certificado_p1_otros'>Responsive Web Design</span>
                                <p> Duración: 300 Horas. Año 2022</p>
                                <span class='www'>https://www.freecodecamp.org/certification/Josveco123/</span>
                                <span class='www'>responsive-web-design</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>FREECODECAM</label>
                                <span class='certificado_p1_otros'>Responsive Web Design</span>
                                <p> Duración: 300 Horas. Año 2022</p>
                                <span class='www'>https://www.freecodecamp.org/certification/Josveco123/</span>
                                <span class='www'>responsive-web-design</span>
                            </div>
                        </div>
                        <!--
                            segundo
                        -->
                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>FREECODECAM</label>
                                <span class='certificado_p1_otros'>Relational Database</span>
                                <p> Duración: 300 Horas. Año 2023</p>
                                <span class='www'>https://www.freecodecamp.org/certification/Josveco123/</span>
                                <span class='www'>relational-database</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>FREECODECAM</label>
                                <span class='certificado_p1_otros'>Front And Development</span>
                                <span class='certificado_p1_otros'>Libraries</span>
                                <p> Duración: 300 Horas. Año 2022</p>
                                <span class='www'>https://www.freecodecamp.org/certification/Josveco123/</span>
                                <span class='www'>front-and-development-libraries</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>EDteam</label>
                                <span class='certificado_p1_otros'>Laravel 9 Desde Cero</span>
                                <p> Duración: 100 Horas. Sept/2022</p>
                                <span class='www'>https://www.EDteam.com/certification</span>

                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>UNINORTE</label>
                                <span class='certificado_p1_otros'>Diseño de Controles Para </span>
                                <span class='certificado_p1_otros'>Sistemas de Información</span>
                                <p> Duración: 60 Horas. Año 2012</p>
                                <span class='www'>Certificado: Fisico</span>
                            </div>
                        </div>
                        <!--
                            tercer
                        -->

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>IBM DE COLOMBIA</label>
                                <span class='certificado_p1_otros'>Redes de Area Local</span>
                                <p> Duración: 48 Horas. Año 2002</p>
                                <span class='www'>Certificado: Fisico</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>CertiProf</label>
                                <span class='certificado_p1_otros'>Profesional Certificado SCRUM</span>
                                <p>Julio 2022</p>
                                <span class='www'>Certificado ID: 77438578</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>ICONTEC</label>
                                <span class='certificado_p1_otros'>Certificado Como Auditor en</span>
                                <span class='certificado_p1_otros'>Gestion de Calidad ISO Ver 2015</span>
                                <p> Duración: 40 Horas. Año 2014</p>
                                <span class='www'>Certificado Fisico</span>
                            </div>
                        </div>

                        <div class='univ_t_otros'>
                            <div class="certificados_otros">
                                <label>ICONTEC</label>
                                <span class='certificado_p1_otros'>Gestion Estrategica</span>
                                <span class='certificado_p1_otros'>del Talento Humano</span>
                                <p> Diplomado. Año 2014</p>
                                <span class='www'>Certificado Fisico</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
