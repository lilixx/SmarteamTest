<!doctype html>
<html>
<head>
    <!-- Scripts  -->
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
   
</head>
<body>
    
   
    <div class="container py-4 mt-3">        
        <div class="row pb-4">
            <div class="col-md-3 col-12 text-center">
                <a href="https://smarteamcr.com/"><img src="{{ asset('img/smarteam.svg') }}" alt="Smarteam"></a>
            </div>               
        </div>       
    </div>

 
 
    
   <!-- Questions -->
    <div class="container my-4 py-4 questions">
        <div class="row no-gutter py-4 mb-4">
            <div class="col-md-10 col-12 mb-4 py-4">
                <div class="porcent"></div>  
                <div class="progress w-100">
                    <div class="progress__inner"></div>
                </div>
            </div>    
            <div class="col-12">       
           
                <div class="quiz__inner">
                  
                   @foreach($recomendacion as $rc)
                      {{ $rc }}  <br>                     
                    @endforeach
                    
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
                    <p class="text-white">© 2021 Smarteam, todos los derechos reservados. </p>
                </div>   
            </div>      
        </div>  
    </div>  
</footer>    
</html>