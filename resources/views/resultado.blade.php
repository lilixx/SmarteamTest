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
        <div class="row">
            <div class="col-md-3 col-12 text-center">
                <a href="https://smarteamcr.com/"><img src="{{ asset('img/smarteam.svg') }}" alt="Smarteam"></a>
            </div>               
        </div>       
    </div>

 
 
    
   <!-- Resultado -->
    <div class="container resultado">
        <div class="row no-gutter py-4">
              
            <div class="col-12"> 
                <h1 class="darkblue">¡Están listos tus resultados!</h1>      
                <?php $str = $_SERVER['HTTP_REFERER'];
                $qs = parse_url($str, PHP_URL_QUERY);
                parse_str($qs, $output);
                $resultado = $output['resultado'];
                $recomendacion = $output['recomendacion'];?>   
                <div class="row">
                    @if($resultado == 1)                    
                        <div class="col-lg-7 col-12 py-4">
                            <h2 class="darkblue py-4">Su Condición es <span class="redc">Crítico</span></h2>
                            <p>¡Vaya! Los resultados de esta evaluación apuntan a que el estado actual
                            de tu departamento comercial es <span class="redc">Crítico.</span> Muchas de las respuestas incorrectas
                            indican que hay factores que no marchan de la mejor manera, siendo el momento
                            de un plan de mejoras.<p>
                            <p>A partir de las siguientes recomendaciones tendrás ideas de por dónde empezar:</p>
                        </div>
                        <div class="col-lg-5 col-12 d-flex justify-content-center">
                            <img src="{{ asset('img/resultadocritico.svg') }}">
                        </div>                        
                    @elseif($resultado == 2)
                        <div class="col-lg-7 col-12">
                            <h2 class="darkblue py-4">Su Condición es <span class="orangec">Moderado</span></h2>
                            <p>La evaluación del test, determinó que el estado actual de tu departamento comercial
                            es <span class="orangec">Moderado</span>. Esto significa que has obtenido algunas respuestas incorrectas y es recomendable
                            mejorar algunas áreas para alcanzar mayor eficiencia.</p>
                        </div>
                        <div class="col-lg-5 col-12 d-flex justify-content-center">
                            <img src="{{ asset('img/resultadomoderado.svg') }}">
                        </div>    
                    @else
                        <div class="col-lg-7 col-12"> 
                            <h2 class="darkblue py-4">Su Condición es <span class="greenc">Buena</span></h2>
                            <p>¡Enhorabuena! A partir de la evaluación, determinamos que el estado actual de tu departamento
                            comercial es <span class="greenc">Bueno</span>. Esto significa que puedes aprovechar el ritmo que llevas para impulsar el
                            crecimiento de tu empresa</p>
                        </div>    
                        <div class="col-lg-5 col-12 d-flex justify-content-center">
                            <img src="{{ asset('img/resultadobuena.svg') }}">
                        </div>
                    @endif
                </div>           
            </div>            
        </div>
    </div>    
        
    <div class="container-fluid recm_cr p-0">
        <div class="container py-4">
            <div class="row rem_row">
                <div class="d-flex justify-content-center pt-4 mt-4">
                    <div class="col-md-10 col-12 mt-3 rm_cd">
                        <div class="bg-white bx_r p-4">                             
                            <h2 class="text-center darkblue mb-4">Recomendaciones</h2>
                            <?php
                            $recomendacion = (json_decode($recomendacion));
                            foreach($recomendacion as $rc){
                                foreach($rc as $c){
                                    $rmd[] = $c->recomendacion;
                                }
                            }
                            ?>
                            <ul>
                                @foreach($rmd as $rd) 
                                <li class="mb-4">{{ $rd }} </li>
                                @endforeach
                            </ul>
                        </div> 
                        <div class="ball_sky_rm">
                            <img src="{{ asset('img/circlec_rm.png') }}">
                        </div>         
                
                        <h3 class="text-center darkblue mt-4 pt-4">Recibe una asesoria para aprovechar al máximo estos <br> resultados y expandir el alcance de tus objetivos</h3>
                        <div class="d-flex justify-content-center mt-4">
                            <a class="btn sky text-center" href="https://smarteamcr.com/hablemos/">Contactar asesor</a>
                        </div>                            
                    </div>
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