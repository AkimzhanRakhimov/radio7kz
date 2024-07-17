<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Вход</title>  
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">    
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">    
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        .banner-image{
            height: 11vh;
           object-fit: cover
        }
    </style>
    </head>
    <body>
        <header>
          
            <div class="container layout">
                    <a href="" class="logo-leak">
                        <div class="logo-container">
                            <img src="images/design.png" class="logo-image" alt="">
                            
                            </div>
                    </a>
                                                  
            </div>       
        </header>
        <section>
    <div class="container section-container" id="order">
        <h1 class="heading">Войти</h1>
        <div class="form-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Введите логин:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="password">Введите пароль:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Войти</button>
            </form>
        </div>
    </div>
    
        </section>
       <script type="text/javascript" src="{{asset('js/index.js') }}"></script>
        
    </body>
</html>
