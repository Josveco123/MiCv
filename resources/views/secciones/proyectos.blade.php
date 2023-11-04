@extends('components.cuerpo')
@section('title', 'Home')

@section('titulo', 'PROYECTOS DESARROLLADOS')

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
                                    <th class='p30'>Proyecto Cumplidos</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sistematizacion Nomina de la Universidad de la Guajira</td>
                                    <td>
                                        Captura de informacion de Empleados, Novedades Mensuales, liquidaciones de planilla
                                        de pago, Generacion de pagos electronicos, estimacion de prestaciones y parafiscales,
                                        contabilizacion de pagos, generador de informes, manejo de acumulados, etc.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sistematizacion de Tolcemento --Argos--</td>
                                    <td>-Analisis, diseño e implementacion del proceso de Gestion de stock: Almacen, compras, recepcion y manejo de recuperados.
                                        -Sistematizacion del Proceso financiero: contabilidad, tesoreria, presupuesto, activos fijos y nomina.
                                        -Sistematizacion del proceso de Bascula: Pesaje automatico
                                    </td>
                                </tr>
                                <tr>
                                    <td>Transportadores Urbanos de Sincelejo</td>
                                    <td>Julio Montes</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
