<div id='pagina1'>
    <div id='primera_linea' class='d-flex align-items-baseline pe-5'
        style='display: flex; justify-content: space-between;'>
        <div id="jmvc" class='mt-4'>
            <h2>JOSE M. VERGARA</h2>
            <span class='desarrollo_h1 fs-5 mt-3'>Full Stack en Aplicaciones WEB</span>
        </div>
        <div class='datos_contacto'>
            <div>
                <img class='img_25' src="{{ asset('storage/Imagenes/phone.svg') }}" alt="">
                <span class='me-1'>Cel. (+57 5) 3218374037</span>
            </div>
            <div>
                <img class='img_25' src="{{ asset('storage/Imagenes/email.svg') }}" alt="">
                <span class='me-1'>josever1@hotmail.com</span>
            </div>

        </div>
    </div>
    <div class='linea'></div>
    <div>
        <p class='desarrollo_color'>
           <strong>@yield('titulo')</strong>
        </p>
        <p>
            @yield('content')
        </p>
    </div>
</div>
