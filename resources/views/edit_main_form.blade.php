<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>База данных Arna multimedia</title>  
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">    
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
       
    </style>
</head>
<body>
<header>
  
        <div class="container layout">
            <a href="" class="logo-leak">
                <div class="logo-container">
                    <img src="../images/design.png" class="logo-image" alt="">
                    
                    </div>
            </a>
        </div>
   
</header>

<section>
    <h1>Редактировать запись</h1>
    <div class="form-container">
    <form action="{{ route('admin.updateMainFormData', ['id' => $mainFormData->id]) }}" method="post">
        @csrf
        @method('PUT')

        <!-- Поля для редактирования данных -->
        <div>
            <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ $mainFormData->name }}" required>
        </div>
    </div>
        <div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $mainFormData->email }}" required>
        </div>
    </div>
        <div>
            <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="text" name="phone" id="phone" value="{{ $mainFormData->phone }}" required>
        </div>
    </div>
        <div>
            <div class="form-group">
            <label for="company">Компания:</label>
            <input type="text" name="company" id="company" value="{{ $mainFormData->company }}" required>
        </div>
    </div>
        <div>
            <div class="form-group">
            <label for="order">Заказ:</label>
            <textarea name="order" rows="5" id="order" required>{{ $mainFormData->order }}</textarea>
        </div>
    </div>

        <button class="submit-btn" type="submit">Сохранить</button>
    </form>
    </div>
</section>

<script type="text/javascript" src="{{asset('js/admin.js') }}"></script>

</body>
</html>
