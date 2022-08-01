<!doctype html>
<html>
<head>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
     
</head>
<body>
    
   
    <div class="container py-4 mt-3">        
        <div class="row">
            <div class="col-md-3 col-12 text-center">
                <a href="https://smarteamcr.com/"><img src="{{ asset('img/smarteam.svg') }}" alt="Smarteam"></a>
            </div>               
        </div>       
    </div>

 
 
    
   <!-- Questions -->
    <div class="container-fluid question_sm p-0">
        <div class="container mt-2">
            <div class="row no-gutter py-4 mt-3">
                
                <div class="col-lg-6"> 
                    <h1 class="blue mt-4 mb-4 tl_index">Test de Desempeño Comercial</h1>
                    <h3 class="darkblue c_index mb-4">A través de las siguientes preguntas podrás descubrir y definir el estado actual de tu equipo comercial.</h3>
                    <a class="btn sky" href="/test">Comenzar ahora</a>    
                </div>
                <div class="col-lg-6"> 
                    <img src="{{ asset('img/setup.gif') }}">
                </div>             
            </div>            
        </div>
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