<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Отель Albatros</title>


    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/slicebox.css" />
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="text/javascript" src="/js/modernizr.custom.13303.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
  <body>
    <div id="go-top" class="animated fadeIn">
        <a href="javascript:void(0)"><i class="fa fa-arrow-circle-o-up"></i></a>
    </div>

    <div class="modal-form col-md-3 col-xs-10">
      <i class="fa fa-times fa-lg" aria-hidden="true"></i>
      <div>
        <h4>Бронирование</h4>
            <form action="/bookCreate" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                      
                            <div>
                                <div class="input-group">
                                    <label for="inputEmail3" class="control-label">Имя <i>*</i></label>
                                
                                <input type="text" class="form-control" name="name">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                            <div>
                                <div class="input-group">
                                    <label for="inputEmail3" class="control-label">Фамилия <i>*</i></label>
                                    <input type="text" class="form-control" name="last_name">
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                              <div>
                                <div class="input-group">
                                    <label for="inputEmail3" class="control-label">Номер телефона <i>*</i></label>
                                    <input type="text" name="phone_number" class="form-control" placeholder="996123456789">
                                </div>
                            </div>
            
                          
                        <div class="row">
                            <label for="">Дата приезда: <i>*</i></label>
                            <select name="coming_day">
                            @for ($i = 1; $i < 32; $i++)
                                
                                <option>@if ($i < 10){{ 0 }}@endif{{ $i }}</option> 
                            @endfor
                            </select>
                            <select name="coming_month">
                            @for ($i = 1; $i < 13; $i++)
                                <option>@if($i < 10){{ 0 }}@endif{{ $i }}</option>
                            @endfor
                            </select>
                            <select name="coming_year">
                            @for ($i = 2017; $i < 2021; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                        <div class="row">
                            <label for="">Дата выезда: <i>*</i></label>
                            <select name="leaving_day">
                            @for ($i = 1; $i < 32; $i++)
                                <option>@if ($i < 10){{ 0 }}@endif{{ $i }}</option>
                            @endfor
                            </select>
                            <select name="leaving_month">
                            @for ($i = 1; $i < 13; $i++)
                                <option>@if ($i < 10){{ 0 }}@endif{{ $i }}</option>
                            @endfor
                            </select>
                            <select name="leaving_year">
                            @for ($i = 2017; $i < 2021; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                        <div class="row">
                            <label for="">Тип номера: <i>*</i></label>
                            <select name="hotel_number" id="hotel_number">
                              
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Забронировать</button>
                    </form>
      </div>
    </div>
    


    <header id="head" class="hidden-sm hidden-xs">
      
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
              <img class="logo" alt="Brand" src="/img/logo2.png">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Главная</a></li>
              <li><a class="scrollto" href="/#rooms">Номера</a></li>
              <li><a class="scrollto" href="/#galery">Галерея</a></li>
              <li><a class="scrollto" href="/#info">О нас</a></li>
              <li><a class="scrollto" href="/#service">Услуги</a></li>
              <li><a class="scrollto" href="/#contacts">Контакты</a></li>
              <li><a class="special-link .booking-btn">Бронирование</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>



    </header>
    <div class="lg-content">
       @yield('content')
    </div>
     
        <!--carusel -->
        <div id="mobile">
        <div class="mobile-header">
          <a href="/"><img src="/img/logo2.png" class="img-responsive logo-mobile" alt=""></a>
        </div>
      @yield('content')

       <div class="mobile-footer hidden-lg hidden-md">
            <div class="contacts-mobile">
              <p><strong>Телефон: </strong>+996 312 903 777 +996 702 903 777</p>
              <p><strong>hotelalbatros.kg@yandex.ru</strong></p>
              <p><strong>г. Бишкек ул. Горького, 129</strong></p>
            </div>

            <ul class="social">
              <li><a href=""><i class="fa fa-odnoklassniki-square fa-lg" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-vk fa-lg" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>
              <li><a href=""><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>


    <section id="contacts" class="contact hidden-sm hidden-xs hidden-xs">
      <h2>Контакты</h2>
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.7227998053754!2d74.59090231513612!3d42.85758597915664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec9d560750f19%3A0x8d7fe2c21034932d!2z0J7RgtC10LvRjCAiRGVsdXhlSG90ZWwi!5e0!3m2!1sru!2skg!4v1490352090568" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    <section class="visible-xs visible-sm">
      
    </section>
    <footer class="hidden-sm hidden-xs hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-8 contacts">
            <h3>КОНТАКТЫ</h3>
            <div class="col-md-4">
              <h3>Адрес:</h3>
              <p><i>г.</i> Бишкек <i>ул.</i> Горького, 129</p>
            </div>
            <div class="col-md-4">
              <h3>Телефон:</h3>
              <p>+996 312 903 777</p>
              <p>+996 702 903 777</p>
            </div>
            <div class="col-md-4">
              <h3>E-mail:</h3>
              <p>hotelalbatros.kg@yandex.ru</p>
            </div>
          </div>
          <div class="col-md-4 smm">
            <a href=""><i class="fa fa-odnoklassniki-square fa-lg" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-vk fa-lg" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </footer>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/main.js" type="text/javascript"></script>



    <!-- Slick -->

     <script type="text/javascript">
      $('.carousel').carousel({
        interval: 1000;
      });
    </script>

    <script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/js/jssor.slider-23.0.0.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
  </body>
</html>