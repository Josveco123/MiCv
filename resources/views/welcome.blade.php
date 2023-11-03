@extends('components.cuerpo')
@section('title', 'Home')

@section('titulo', 'QUE OFRECE UN FULL STACK')

@section('content')
    <div class="content align-items-center">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <strong class='me-3'>1. ASESORIA</strong>
                    </button>
                </h2>

                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon-welcome">
                        <img src="{{ asset('storage/Imagenes/asesoria.png') }}" alt="">
                        <strong>Beneficios de la Asesoria.</strong> Acceder a un profesional que domina tanto el diseño de
                        la
                        experiencia del usuario (front-end) como la programación y el mantenimiento de la arquitectura
                        interna
                        del sitio
                        (back-end).
                        Contar con un experto en tecnologías web más actuales, como HTML, CSS, JavaScript, PHP, SQL,
                        Bootstrap,
                        jQuery, Node.js Laravel, React, MySQL, MongoDB.
                        Obtener un producto de software fiable y escalable, que funcione perfectamente en cualquier tipo de
                        dispositivo
                        y que se adapte a las necesidades del cliente.
                        Aumentar el valor, los beneficios y las ventajas competitivas del negocio, al ofrecer soluciones
                        innovadoras y
                        creativas para el mercado.
                        Ahorrar tiempo y recursos, al contratar a un solo desarrollador que puede encargarse de todo el
                        proceso
                        de
                        desarrollo web, desde el diseño hasta la implementación.
                        Recibir una atención personalizada y una comunicación efectiva, al trabajar con un desarrollador que
                        posee
                        habilidades blandas como la cooperación, la resolución de problemas y la adaptación al cambio.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong class='me-3'>2. APLICACIONES PERSONALIZADAS</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon-welcome">
                        <img src="{{ asset('storage/Imagenes/app.png') }}" alt="">
                        <strong>Produciendo mejoras.</strong> Las mejoras en la realizacion de los procesos permite a los
                        usuarios crear, organizar y gestionar sus tareas diarias. Es útil para mejorar la productividad, el
                        orden y el tiempo de trabajo. Puede ser una solución para empresas que quieran optimizar sus
                        procesos
                        internos o para clientes que busquen una herramienta personalizada.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong class='me-3'>3. NEGOCIOS EN LINEA</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon-welcome">
                        <img src="{{ asset('storage/Imagenes/online.png') }}" alt="">
                        <strong>Ganando Clientes.</strong> Esta aplicación
                        permite a los usuarios navegar por productos, agregar artículos al carrito y realizar pagos. Es una
                        forma de
                        vender productos o servicios en internet, ampliar el mercado y aumentar las ventas. Puede ser una
                        solución para
                        empresas que quieran tener una presencia online o para clientes que quieran comprar de forma fácil y
                        segura.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong class='me-3'>4. RED SOCIAL</strong>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon-welcome">
                        <img src="{{ asset('storage/Imagenes/redesocial.png') }}" alt="">
                        <strong>Aumentar el consumo de publicidad en la nube</strong> Permite a los usuarios crear perfiles,
                        publicar contenido, seguir a otros usuarios, comentar y dar me gusta. Es una forma de generar
                        comunidad, interacción y engagement. Puede ser una oportunidad para empresas que
                        quieran crear una plataforma propia para conectar con su público objetivo o para clientes que
                        quieran tener una red social diferente.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <strong class='me-3'>5. PAGINA WEB</strong>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon-welcome">
                        <img src="{{asset('storage/Imagenes/web.png')}}" alt="">
                        <strong>Presencia en el mundo </strong> Te permite tener una
                        presencia online y mostrar tu marca, tus productos o servicios a millones de personas en todo el
                        mundo.
                        Montar una página web te ayuda a aumentar tus ventas y tus ingresos, al ofrecer una plataforma de
                        comercio
                        electrónico que funciona las 24 horas del día y que acepta diferentes formas de pago.
                        Montar una página web te da la oportunidad de interactuar con tus clientes y conocer sus
                        necesidades,
                        preferencias y opiniones, lo que te permite mejorar tu oferta y fidelizarlos.
                        Montar una página web te facilita el acceso a nuevos mercados y nichos, al poder adaptar tu
                        contenido y
                        tu
                        diseño a diferentes idiomas, culturas y públicos.
                        Montar una página web te ahorra costes y recursos, al reducir los gastos de infraestructura,
                        personal,
                        publicidad y logística que implica tener un negocio físico.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <strong class='me-3'>6. OTROS</strong>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body acordeon-welcome">
                        <img src="{{asset('storage/Imagenes/otros.png')}}" alt="">
                        <strong>Mas beneficios </strong> Asi como los anteriores existen muchos mas beneficios de la utilizacion
                        de los procesos sistematizados, como son: Mejorar la calida, aumentar la productividad, facilitar la
                        comunicación
                        con el uso de correos corporativos, Innovar y adaptarse, Tener un dominio en la nube que constitulle
                        un
                        activo, etc.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
