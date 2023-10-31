<div id='pagina1'>
    <div id='primera_linea' class='d-flex align-items-baseline pe-5'
        style='display: flex; justify-content: space-between;'>
        <div class='mt-4'>
            <h1>JOSE M. <br> VERGARA</h1>
            <span class='desarrollo_h1 fs-4 mt-3 text-primary'>FULL STACK EN APLICACIONES WEB</span>
        </div>
        <div class='desarrollo_color'>
            <div>
                <img class='img_25' src="{{ asset('storage/Imagenes/localizacion.svg') }}" alt="">
                <span class='fs-4 me-4'>Cll 27 # 16A-74 Sincelejo-Col.</span>
            </div>
            <div>
                <img class='img_25' src="{{ asset('storage/Imagenes/phone.svg') }}" alt="">
                <span class='fs-4 me-4'>Cel. (+57 5) 3218374037</span>
            </div>
            <div>
                <img class='img_25' src="{{ asset('storage/Imagenes/email.svg') }}" alt="">
                <span class='fs-4 me-4'>josever1@hotmail.com</span>
            </div>
            <div>
                <img class='img_25' src="{{ asset('storage/Imagenes/twitter.svg') }}" alt="">
                <span class='fs-4 me-4'>@josmaveco</span>
            </div>
        </div>
    </div>
    <div class='linea'></div>
    <div>
        <p class='mt-4 desarrollo_color'>
           <strong>@yield('titulo')</strong>
        </p>
        <p>
            @yield('content')
        </p>
    </div>
</div>
