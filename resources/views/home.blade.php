<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Рекламное агенство Arna multimedia</title>  
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
                <div class="banner">
                    <img src="images/banner.png" alt="" class="banner-image">
            <div class="container layout">
                    <a href="" class="logo-leak">
                        <div class="logo-container">
                        <img src="images/design.png" class="logo-image" alt="">
                        
                        </div>
                    </a>
                    <div class="numbers">
                        <p class="call-number">+7 (708) 467 12 61, &nbsp</p>
                        <p class="call-number"> +7 722-267 12 61</p>
                    </div>
                        <div class="navbar">
                            <div class="burger-menu" onclick="toggleMenu()">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div>
                            <div class="items">
                                <a class="menuItem" href="#about">Преимущества</a>
                                <a class="menuItem" href="#reviews">Отзывы</a>
                                <a class="menuItem" href="#clients">Клиенты</a>
                                <a class="menuItem" href="#contacts">Контакты</a>
                                <a class="menuItem rounded" href="#order">Отправить заявку</a>
                            </div>
                        </div>
                       
                        <h3 class="layout-h3">Семей, область Абай</h2> 
                        <h1 class="layout-h1">КОМПЛЕКСНОЕ РАЗМЕЩЕНИЕ ВАШЕЙ РЕКЛАМЫ</h1>
                        <a class="call-order rounded" id="openModalBtn" href="#">Позвонить</a>

                        <div id="myModal" class="modal">
                          <div class="modal-content">
                            <span class="close">&times;</span>
                            <form id="myForm" action="{{ route('submit.form') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Введите ваше имя:</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                            
                                <div class="form-group">
                                    <label for="phone">Введите ваш номер телефона:</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>
                                <button type="submit"  class="submit-btn">Отправить заявку</button>
                            </form>
                          </div>
                        
                    </div> 
                                       
            </div>
            
        </header>

        <section>
    <div class="container section-container" >
        <h1 class="heading">Рекламные услуги</h1>
        <div class="service-cards">
            <div class="service-card">
                <img src="images/radio.png" alt="" class="service-image">
                <h3>Реклама на радиостанциях</h3>
                <p class="service-paragraph"><ul><li>Радио 7 </li>
                    <li>Русское радио Азия</li> 
                        <li>НС</li>  <li>Авторадио</li></ul></p>
            </div>
            <div class="service-card">
                <img src="images/led.png" alt="" class="service-image">
                <h3>Наружная реклама</h3>
                <p class="service-paragraph"><ul><li>ЛЭД-экраны</li></ul> </p>
            </div>
            <div class="service-card">
                <img src="images/www.png" alt="" class="service-image">
                <h3>Реклама на сайте</h3>
                
                <p class="service-paragraph"><ul><li>Arnapress.kz</li></ul> </p>
            </div>
            <div class="service-card">
                <img src="images/rupor.png" alt="" class="service-image">
                <h3>Реклама на ТВ каналах</h3>
                <p class="service-paragraph"><ul><li>СЕМЕЙ</li> 
                    <li>ТВК6</li></ul> </p>
            </div>
        </div>
     
    </div>
    <div class="container section-container" id="about" >
      
        <div class="advantage mscroll"  scrl="1">
            <div class="advantage-wrap">
                <h1 class="header-text ">Преимущества</h1>
                <div class="advantage-line first">
                    <div class="block"><h3 class="above-text">20 лет</h3><h4 class="under-text">мы успешно рекламируем, <br>продвигаем ваши товары <br>и услуги</h4></div>
                    <div class="block"><h3 class="above-text">ПРИНЦИП ОДНОГО ОКНА</h3><h4 class="under-text">возможность заказать <br>рекламу на разные медиа-<br>направления</h4></div>
                    <div class="block to-hide"><h3 class="above-text ">Система бонусов</h3><h4 class="under-text">при размещении на <br>нескольких медиа-<br>направлениях, другие <br>в подарок</h4></div>
                    <div class="clears"></div>
                </div>
                <div class="advantage-line second">
                    <div class="block"><h3 class="above-text">Гибкая система скидок</h3><h4 class="under-text">при размещении даже <br>на 1 медиа-направлении <br>вы можете получить скидку</h4></div>
                    <div class="block"><h3 class="above-text">Штат профессионалов</h3><h4 class="under-text">наш штат обладает <br>огромным опытом <br>и багажом знаний</h4></div>
                    <div class="block to-hide"><h3 class="above-text ">Собственное производство</h3><h4 class="under-text">наша техническая база <br>значительно снизит ваши <br>расходы и повысит <br>качество рекламы.</h4></div>
                    <div class="clears"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-container" id="reviews">
        <h1 class="heading">Отзывы клиентов</h1>
   
    </div>
    <div id="modal-review" class="modal-review">
        <div class="modal-review-content">
            <span class="close">&times;</span>
            <div id="full-review"></div>
        </div>
    </div>
    <div class="scroll-container">
    <div class="review-cards">
        <div class="review-card">
            <div class="person">
                <img src="images/person1.jpeg" alt="" class="person-photo">
                <div class="person-characteristics">
                    <p class="person-name">Кузьмин Александр</p>
                    <p class="person-company">Сеть магазинов "Хлебная лавка"</p>
                </div>
                
            </div>
            <div class="person-review">
               <p class="review">С рекламным агентством Arna multimedia сеть магазинов «Хлебная Лавка» сотрудничает уже более 15 лет.
                 Можно с уверенностью сказать, что компания может называться одной из лучших в городе в сфере рекламных услуг.
                  Компания работает качественно, быстро, без проволочек, корректно, нас все устраивает. 
                  Желаем нам дальнейшего сотрудничества!</p> 
              <div class="leak-container"><a href="javascript:void(0)" class="read-more">Читать весь отзыв</a></div> 
            </div>
        </div>
        <div class="review-card">
            <div class="person">
                <img src="images/person2.jpeg" alt="" class="person-photo">
                <div class="person-characteristics">
                    <p class="person-name">Давыденко Сандугаш</p>
                    <p class="person-company">Ресторан-караоке «Эльдорадо»</p>
                </div>
                
            </div>
            <div class="person-review">
               <p class="review">Деятельность нашей организации – услуги по организации общественного питания. 
                При открытии нашего ресторанного комплекса «Эльдорадо» мы нуждались в рекламе. 
                Решили обратиться в рекламное агентство «Arnamultimedia». Высокий профессионализм 
                сотрудников рекламного агентства помог нам достигнуть поставленных коммерческих целей и укрепить свои 
                позиции на рынке ресторанного бизнеса. Сотрудники агентства всегда внимательно подходят к исполнению задач, 
                а также готовы откликнуться на любые просьбы и вопросы. Благодарим РА «Arnamultimedia» за качественное
                 выполнение поставленных задач, внимание к деталям и оперативную реакцию на все запросы. За много лет сотрудничества 
                 агентство показало высокий профессионализм и помогло выполнить наши планы.</p> 
              <div class="leak-container"><a href="javascript:void(0)" class="read-more">Читать весь отзыв</a></div> 
            </div>
        </div>
        <div class="review-card">
            <div class="person">
                <img src="images/person3.jpeg" alt="" class="person-photo">
                <div class="person-characteristics">
                    <p class="person-name">Оразаев Ерик</p>
                    <p class="person-company">Hyundai Semey</p>
                </div>
                
            </div>
            <div class="person-review">
               <p class="review">
                Уважаемые коллеги рекламного агентства Arnamultimedia! Хотим выразить вам благодарность за долговременное сотрудничество,
                 за помощь в продвижении нашего автомобильного бренда Hyundai Semey, а также за ваш неустанный труд, за то, 
                 что помогаете нам быть на связи с миром!
                Желаем вам никогда не стоять на месте, идти в ногу со временем, стабильно развиваться и всегда оставаться в тренде!</p> 
              <div class="leak-container"><a href="javascript:void(0)" class="read-more">Читать весь отзыв</a></div> 
            </div>
        </div>
        <div class="review-card">
            <div class="person">
                <img src="images/person4.jpeg" alt="" class="person-photo">
                <div class="person-characteristics">
                    <p class="person-name">Бибатырев Рустам</p>
                    <p class="person-company">ТД ADALIN</p>
                </div>
                
            </div>
            <div class="person-review">
               <p class="review">
                Торговый дом «ADALIN» выражает благодарность коллективу рекламного агентства Arnamultimedua за высокое качество исполнения
                 работ, индивидуальный подход, а также профессионализм сотрудников и их отзывчивость.
                За период нашего сотрудничества специалисты рекламного агентства зарекомендовали себя как профессионалы своего дела.
                 Работы были выполнены в соответствии со всеми требованиями, качественно и в срок. Предложенные Вами креативные решения
                  соответствуют всем нашим требованиям, а сотрудничество с Вами оставило у нас самые приятные впечатления!
                Желаем процветания и финансового благополучия, выражаем надежду на дальнейшее плодотворное сотрудничество.</p> 
              <div class="leak-container"><a href="javascript:void(0)" class="read-more">Читать весь отзыв</a></div> 
            </div>
        </div>
    </div>
    <button class="scroll-left">&lt;</button>
    <button class="scroll-right">&gt;</button>
    </div>
    <div class="container section-container" id="clients">
        <h1 class="heading">Наши клиенты</h1>
        <div class="client-row">
            <div class="client-container">
                <img src="images/hyundai.jpeg" alt="" class="client-logo ">
            </div>
            <div class="client-container to-hide-on-phone">
                <img src="images/chery.jpeg" alt="" class="client-logo">
            </div>
            <div class="client-container to-hide">
                <img src="images/bereke.jpeg" alt="" class="client-logo ">
            </div>
        </div>
        <div class="client-row">
            <div class="client-container">
                <img src="images/centercredit.jpeg" alt="" class="client-logo">
            </div>
           
            <div class="client-container  to-hide-on-phone">
                <img src="images/kazpoligraf.jpeg" alt="" class="client-logo ">
            </div>
            <div class="client-container to-hide">
                <img src="images/adalin.jpeg" alt="" class="client-logo">
            </div>
        </div>
        <div class="client-row">
            <div class="client-container to-hide-on-phone">
                <img src="images/amanat.jpeg" alt="" class="client-logo">
            </div>
            <div class="client-container to-hide ">
                <img src="images/jetour.jpeg" alt="" class="client-logo">
            </div>
            <div class="client-container ">
                <img src="images/alser.jpeg" alt="" class="client-logo ">
            </div>
        </div>
    </div>
    <div class="container section-container" id="order">
        <h1 class="heading">Подать заявку</h1>
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
