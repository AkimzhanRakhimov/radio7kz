<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Радио 7 Семей</title>  
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
               
                 
                    <div class="container layout">
                    <a href="" class="logo-leak">
                        <div class="logo-container">
                        <img src="images/design.png" class="logo-image" alt="">
                        
                        </div>
                    </a>
                  
                        <div class="menus">
                            <div class="burger-menu" onclick="toggleMenu()">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                            <div class="items">
                                
                                <a class="menuItem" href="#">Главная</a>
                                <a class="menuItem" href="#about">О нас</a>
                                <a class="menuItem" href="#order">Связаться</a>
                                <a class="menuItem" href="#contacts">Контакты</a>
                            </div>
                        </div>
                       
                       
                       
                        
                    </div> 
                  <!-- Slideshow container -->
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($images as $index => $image)
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                      <div class="carousel-inner">
                          @foreach ($images as $image)
                              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                  <img class="banner-image" src="{{ asset('images/' . $image->filename) }}" class="d-block w-100" alt="...">
                              </div>
                          @endforeach
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  </div>
            
        </header>
        <div class="audio-container">
            <div class="audio-info">
                <span class="artist">Исполнитель: Example Artist</span>
                <span class="title">Название трека: Example Track</span>
            </div>
            <div class="custom-controls">
                <button id="playPauseBtn"><i class="fas fa-play"></i></button>
                <div class="volume-control">
                    <i id="volumeIcon" class="fas fa-volume-up"></i>
                    <input type="range" id="volumeSlider" min="0" max="1" step="0.01" value="1">
                </div>
            </div>
            <audio class="radio" id="radioPlayer">
                <source src="https://listen2.myradio24.com/8334" type="audio/mpeg">
                Ваш браузер не поддерживает элемент audio.
            </audio>
        </div>
        <section>
            <div class="container" id="about">
                <h1 class="heading">О нас</h1>
                <div class="under">
                <div class="flexed"> <div class="centrified">
                    <p class="paragraph">7 Мая 2001 года – первый выход «Радио 7» в эфир на частоте 106,9 FM.    <br> <br>
                        Формат Hot AC/CHR – Динамичная музыка для активных и позитивных (20 – 40 лет). <br> <br>
                        </p></div> <img src="images/design.png" class="logo-big" alt="">
                   </div>
                   <div class="after-flexed">  <p class="paragraph">«Радио 7» — музыкальная радиостанция в г. Семей с собственной службой новостей. Основной акцент в новостях делается на городские события. Информационные выпуски выходят ежедневно по будням с 07:00 до 19:00
                   <div class="hide">
                    <br> <br>
                    Зона уверенного приема – 35-40 км.
                    <br> <br>
                    Миссия «Радио 7», в нашем понимании, — создавать уютную, семейную атмосферу для каждого горожанина или гостя Семея, ориентируя наших слушателей в самых разных жизненных проявлениях, будь то музыка или новости, интернет или театр, литература и кино, отдых, развлечения и путешествия. Главное в нашей работе — быть максимально полезными городу и его жителям, поддержать и помочь им в стремлении совершенствоваться и делать мир добрее, отзывчивей, лучше.
                    <br> <br>
                    Мы очень гордимся, что согласно опросам*, большинство наших земляков, называя самую слушаемую для них радиостанцию выбирали «Радио 7»
                    <br> <br>
                    В эфир выходят программы как. произведенные в собственной Production студии, так и приобретенные у партнеров других студий (студия «Апельсин» г. Москва, студия «Седьмое небо» г. Казань). Среди них каждый радиослушатель может найти познавательную или развлекательную программу на свой вкус. Подробнее о каждой из них вы можете прочитать в разделе «Программы»
                    <br> <br>
                    В Production студии изготовляется радиореклама и другая аудиопродукция.
                    <br> <br>
                    На «Радио 7» самый широкий в городе спектр рекламных возможностей — индивидуальные (дополнительные) рекламные блоки, объявления, спонсирование программ и игр, рекламные акции.</p> </div></div> 
                </div>
            </div>
   
    <div class="container" id="order">
        <h1 class="heading">Связаться</h1>
        <div class="under">
        
        <div class="form-container">
            <form id="mainForm" action="{{ route('submit.main.form') }}" method="POST">
                @csrf <!-- Добавляем защиту CSRF -->
                <div class="form-group">
                    <label for="name">Введите ваше имя:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Введите ваш номер телефона:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="order">Сообщение*:</label>
                    <textarea id="order" name="order" rows="5" required></textarea>
                </div>
                <button type="submit"  class="submit-btn">Связаться</button>
            </form>
            <p class="privacy-text">Нажимая на кнопку, вы даете согласие на обработку персональных данных.</p>
        </div>
    </div>
    </div>
    
        </section>
        <footer>
            <div class="container " id="contacts">
                <h1 class="heading white">Контакты</h1>
                <div class="under">

                <div class="map_and_info">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449.454120814604!2d80.2584528790178!3d50.413221330586914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f2653421395555%3A0xd3853bd824eb2579!2z0KDQsNC00LjQviA3!5e0!3m2!1sru!2skz!4v1720080533801!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="all_info">
                <div class="contact-row">
                    <p class="contact-column white">
                        Семей, ул. Мәңгілік Ел,26 
                        <br>
                        <br>
                        8 (7222) 56 84 65, &nbsp
                        <br>
                        <br>
                        8 (7222) 52 44 65
                        <br>
                        <br>
                        info@radio7.kz
                    </p>
                    <br>

           
                </div>
                <div class="insta">
                    <p class="contact-column white">
                        @radio_7_semey
                    </p>
                    <img class="insta-logo" src="images/instagram.png" alt="">

                </div>
            </div>
            
        </div>
    </div>
            <div class="container">   
            <div class="contact-row footer">
                    <p class="contact-column ending white">
                        © Radio 7 \ Все права защищены
                    </p>
                </div>
            </div>
            
        </footer>
        @if(session('success'))
    <script>
        alert("{{ session('success') }}");
        window.location.reload();
    </script>
@endif
       <script type="text/javascript" src="{{asset('js/index.js') }}"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
