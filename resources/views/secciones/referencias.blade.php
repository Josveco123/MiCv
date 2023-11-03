@extends('components.cuerpo')
@section('title', 'Home')

@section('titulo', 'REFERENCIAS')

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
                        <span class='univ'> L A B O R A L E S</span>
                    </button>
                </h2>

                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table>
                            <thead class='encabezado_menu'>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Argos</td>
                                    <td>Raul Espinosa Oliver</td>
                                    <td>Director Administrativo</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>
                                <tr>
                                    <td>Amidones de Sucre</td>
                                    <td>Jaime Gomes</td>
                                    <td>Gerente</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>
                                <tr>
                                    <td>Transportadores Urbanos de Sincelejo</td>
                                    <td>Julio Montes</td>
                                    <td>Presidente Junta directiva</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <img src="{{ asset('storage/Imagenes/circulo_azul.png') }}" alt="">
                        <span class='univ'> P E R S O N A L E S</span>
                    </button>
                </h2>

                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table>
                            <thead class='encabezado_menu'>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Ocupacion</th>
                                    <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Oscar Cardona</td>
                                    <td>Empresario</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>
                                <tr>

                                    <td>Pedro Padilla</td>
                                    <td>Instructor</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>
                                <tr>

                                    <td>Julio Montes</td>
                                    <td>Trabajador</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThre"
                        aria-expanded="true" aria-controls="collapseThre">
                        <img src="{{ asset('storage/Imagenes/circulo_rojo.png') }}" alt="">
                        <span class='univ'> F A M I L I A R E S </span>
                    </button>
                </h2>

                <div id="collapseThre" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table>
                            <thead class='encabezado_menu'>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Ocupacion</th>
                                    <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Oscar Cardona</td>
                                    <td>Empresario</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>
                                <tr>

                                    <td>Pedro Padilla</td>
                                    <td>Instructor</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>
                                <tr>

                                    <td>Julio Montes</td>
                                    <td>Trabajador</td>
                                    <td>cel. xxxxxxxxxxxx</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
