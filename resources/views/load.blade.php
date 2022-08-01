<!doctype html>
<html>
<head>
@vite(['resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<meta http-equiv="Refresh" content="2;url=/resultado">
</head>

    <body class="bg-white">
        <div class="container-fluid load p-0">
            <div class="container py-4">
                <div class="row">
                    <div class="col-12 mt-4 pt-4">
                        <h2 class="darkblue text-center pb-4">Tus resultados estarán <br> en un momento...</h2>
                        <img class="img_load" src="{{ asset('img/loading-smarteam-test.gif') }}">
                    </div> 
                </div>
            </div>            
        </div>
        <div class="bg-white d-flex align-items-end">
            <img class="l_left" src="{{ asset('img/l_left.png') }}"> 
        </div>                  
    </body>

    <footer>
        <div class="container-fluid dark_blue py-4 mt-4 footer_q">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <a href="https://smarteamcr.com/"><img src="{{ asset('img/smarteam_white.svg') }}" alt="Smarteam"></a>
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="text-white p_footer">© 2021 Smarteam, todos los derechos reservados. </p>
                    </div>   
                </div>      
            </div>  
        </div>  
    </footer>  

</html>