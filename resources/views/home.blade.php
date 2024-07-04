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
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&family=Inter:wght@100..900&display=swap" rel="stylesheet">
   
    </head>
    <body>
        <header>
               
                 
                    <div class="container layout">
                    <a href="" class="logo-leak">
                        <div class="logo-container">
                        <img src="images/design.png" class="logo-image" alt="">
                        
                        </div>
                    </a>
                  
                        <div class="navbar">
                            <div class="burger-menu" onclick="toggleMenu()">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                            <div class="items">
                                <a class="menuItem" href="#about">Главная</a>
                                <a class="menuItem" href="#reviews">О нас</a>
                                <a class="menuItem" href="#order">Связаться</a>
                                <a class="menuItem" href="#contacts">Контакты</a>
                            </div>
                        </div>
                       
                       
                       
                        
                    </div> 
                    <img src="images/banner.png" alt="" class="banner-image">                  
        
            
        </header>

        <section>
            <div class="container section-container" id="order">
                <h1 class="heading">О нас</h1>
                <div class="flexed"> <div class="centrified">
                    <p>7 Мая 2001 года – первый выход «Радио 7» в эфир на частоте 106,9 FM.    <br> <br>
                        Формат Hot AC/CHR – Динамичная музыка для активных и позитивных (20 – 40 лет). <br> <br>
                        </p></div> <img src="images/design.png" class="logo-big" alt="">
                   </div>
                   <div class="after-flexed">  <p>«Радио 7» — музыкальная радиостанция в г. Семей с собственной службой новостей. Основной акцент в новостях делается на городские события. Информационные выпуски выходят ежедневно по будням с 07:00 до 19:00
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
                    На «Радио 7» самый широкий в городе спектр рекламных возможностей — индивидуальные (дополнительные) рекламные блоки, объявления, спонсирование программ и игр, рекламные акции.</p> </div>
                  
            </div>
    <div class="container section-container" id="order">
        <h1 class="heading">Связаться</h1>
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
    
        </section>
        <footer>
            <div class="container section-container" id="contacts">
                <h1 class="heading white">Контакты</h1>
                <div class="contact-row">
                    <p class="contact-column white">
                        Семей, ул. Мәңгілік Ел,26
                    </p>
                    <div class="numbers">
                        <p class="contact-column white">
                            8 (7222) 56 84 65, &nbsp
                        </p>
                        <p class="contact-column white">
                            8 (7222) 52 44 65
                        </p>
                    </div>
                   
                    <p class="contact-column white">
                        info@radio7.kz
                    </p>
                </div>
    
            
                <div class="contact-row">
                    <div class="insta">
                        <img class="insta-logo" src="images/instagram.png" alt="">
                        <p class="contact-column white">
                            @radio_7_semey
                        </p>
                    </div>
                    
                    </div>    
                </div>
                <br>
    
            </div>
            
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449.454120814604!2d80.2584528790178!3d50.413221330586914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f2653421395555%3A0xd3853bd824eb2579!2z0KDQsNC00LjQviA3!5e0!3m2!1sru!2skz!4v1720080533801!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container section-container">   
            <div class="contact-row">
                    <p class="contact-column ending white">
                        © Radio 7 <br> Все права защищены
                    </p>
                </div>
            </div>
            
        </footer>
       <script type="text/javascript" src="{{asset('js/index.js') }}"></script>
        
    </body>
</html>
