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
                <div class="header-container">
                 
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
            </div>
            
        </header>

        <section>
   
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
                    <label for="email">Введите вашу почту:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Введите ваш номер телефона:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="company">Введите название вашей компании:</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <div class="form-group">
                    <label for="order">Что вы хотите заказать*:</label>
                    <textarea id="order" name="order" rows="5" required></textarea>
                </div>
                <button type="submit"  class="submit-btn">Отправить заявку</button>
            </form>
            <p class="privacy-text">Нажимая на кнопку, вы даете согласие на обработку персональных данных.</p>
        </div>
    </div>
    
        </section>
        <footer>
            <div class="container section-container" id="contacts">
                <h1 class="heading">Контакты</h1>
                <div class="contact-row">
                    <p class="contact-column">
                        Семей, ул. Мәңгілік Ел,26
                    </p>
                    <div class="numbers">
                        <p class="contact-column">
                            +7 (708) 467 12 61, &nbsp
                        </p>
                        <p class="contact-column">
                            +7 722-267 12 61
                        </p>
                    </div>
                   
                    <p class="contact-column">
                        info@arnamultimedia.kz
                    </p>
                </div>
    
            
                <div class="contact-row">
                    <div class="insta">
                        <img class="insta-logo" src="images/instagram.png" alt="">
                        <p class="contact-column">
                            @radio_7_semey
                        </p>
                    </div>
                    <div class="insta">
                        <img class="insta-logo" src="images/instagram.png" alt="">
                    <p class="contact-column">
                        @arnapress_news
                    </p>
                    </div>    
                </div>
                <br>
    
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40680.142483997915!2d80.1865273216797!3d50.4129893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f26560fccbd983%3A0x9cdcb878b0009585!2sArnamultimedia!5e0!3m2!1sru!2skz!4v1712133434275!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container section-container">   
            <div class="contact-row">
                    <p class="contact-column ending">
                        Arnamultimedia.kz 2014-2024 <br> © Все права защищены
                    </p>
                </div>
            </div>
            
        </footer>
       <script type="text/javascript" src="{{asset('js/index.js') }}"></script>
        
    </body>
</html>
