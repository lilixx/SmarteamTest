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
            <div class="col-12 mb-4 py-4">
                <div class="porcent"></div>  
                <div class="progress w-100">
                    <div class="progress__inner"></div>
                </div>
            </div>    
            <div class="col-12">       
            <form class="quiz" action="{{ route('tests.store') }}" method="POST">
              @csrf  
                <div class="quiz__inner">
                  
                   @foreach($preguntas as $pr)
                        <?php $i = $i +1; ?>  
                        <div data-question="<?php echo $i; ?>" class="quiz__step--<?php echo $i; ?><?php if($i == 1){ ?> quiz__step--current<?php } ?> quiz__step">
                          <h3 class="quiz__question blue text-center">{{$pr->pregunta}}</h3>
                          @foreach($pr->repuesta as $rp)
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="correcta[{{$pr->id}}]" id="exampleRadios1" value="{{$rp->correcta}}">
                                <label class="form-check-label gray mb-3" for="{{$rp->respuesta}}">
                                    {{$rp->respuesta}}
                                </label>                               
                              </div>
                                                           
                          @endforeach 
                          @if($i == 6)
                            <div class="send_btn d-flex justify-content-center align-items-center pt-4 mt-4">  
                                <button type="submit" class="submit btn green">Mirar Resultados</button>
                            </div>    
                          @endif                   
                        </div>
                       
                    @endforeach
                    
                </div>
              </form>    
            </div>
            <div class="col-12 mb-4">
                <div class="bottom__container">
                    <div class="navigation mt-4 py-4">
                        <div class="navigation__btn navigation__btn--left btn sky">
                            Anterior
                        </div>
                        <div class="navigation__btn navigation__btn--right btn sky">
                            Siguiente
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>      

</body>    

   <!-- End Questions -->

<script type="text/javascript">
const numberSteps = $('.quiz__step').length - 1;
let disableButtons = false;
const tick = '<div class="answer__tick"><svg width="14" height="14" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>'; 
let thanks = '<div class="thanks"><div class="thanks__tick">✔ </div><h1 class="thanks__title">Thank you!</h1></div>';

$('.answer__input').on('change', function(e) { 
 
    if($(this).next().children('.answer__tick').length>0){
      return false
    }
  $(this).next().append(tick)
});


$('.navigation__btn--right').click(function(e){
let currentIndex = Number($('.quiz__step--current').attr('data-question'));
  if($('.quiz__step--current input:checked').length == 0){
     //console.log('input empty');
     return false;
 }
  //console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
  if(currentIndex == numberSteps + 1 || disableButtons==true){
    //console.log('last')
    return false;
  }
  if(currentIndex + 1 == numberSteps + 1 ){
    $(this).addClass('navigation__btn--disabled');
  }
  if(currentIndex == numberSteps){
  $('.summary__item').remove();
    $('.quiz__step:not(.quiz__summary)').each(function(index, item){
      console.log(item)
      let icon = $(item).children('.question__emoji').text()
      let answer = $(item).children('.answer').find('input:checked').val();
      let node = '<div class="summary__item"><div class="question__emoji">'+icon+'</div>'+answer+'</div>'
      $('#summary').append(node)
    })
  }
  const percentage = (currentIndex * 100)/ numberSteps;
  $('.progress__inner').width(percentage+ '%');
  
  console.log('input ok')
  $('.quiz__step--current').hide('300');
  $('.quiz__step--current').removeClass('quiz__step--current');
  $('.quiz__step--'+(currentIndex+1)).show('300').addClass('quiz__step--current');
  currentIndex = Number($('.quiz__step--current').attr('data-question'));
   if(currentIndex > 1 ){
    $('.navigation__btn--left').removeClass('navigation__btn--disabled');
  }
  var avg = Math.round(percentage); 
   $('.porcent').text(avg+ '%');
});
/*
function keypressEvent(e){
    let key = e.which || e.keyCode;

  if(key==65 || key==66){
    $('.quiz__step--current input[data-char="'+key+'"]').prop('checked', true).change();
    console.log($('.quiz__step--current input[data-char="'+key+'"]'))
   // $('.quiz__step--current input[data-char="'+key+'"] + .answer__label').change();
  }
}
*/
let currentIndex = Number($('.quiz__step--current').attr('data-question'));
 if(currentIndex == 1 || disableButtons==true){
    $('.navigation__btn--left').addClass('navigation__btn--disabled');
 } 


$('.navigation__btn--left').click(function(e){
let currentIndex = Number($('.quiz__step--current').attr('data-question'));
 
  console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
  if(currentIndex == 1 || disableButtons==true){
    console.log('first')
    $(this).addClass('navigation__btn--disabled');
    return false;
  }
 

  $('.navigation__btn--right').removeClass('navigation__btn--disabled')
  
 

  console.log('input ok')
  $('.quiz__step--current').hide('300');
  $('.quiz__step--current').removeClass('quiz__step--current');
  $('.quiz__step--'+(currentIndex-1)).show('300').addClass('quiz__step--current');
  currentIndex = Number($('.quiz__step--current').attr('data-question'));
  if(currentIndex == 1 ){
    $(this).addClass('navigation__btn--disabled');
  }
    const percentage = ((currentIndex-1)  * 100)/ numberSteps+1;
    var avg = Math.round(percentage); 
    $('.porcent').text(avg+ '%');
  $('.progress__inner').width(percentage+ '%');
$('.quiz__step--current').keyup(keypressEvent);
});

</script>    

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