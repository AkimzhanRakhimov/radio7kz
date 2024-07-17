<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Административная панель </title>  
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">   
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
       
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
                          <div class="carousel-caption d-none d-md-block">
                              <form action="{{ route('delete.image', ['id' => $image->id]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-success">Удалить</button>
                              </form>
                          </div>
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
         <div class="container">
            <h2 >Загрузить изображение</h2>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="stroke">
                    <div >
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div >
                        <button type="submit" class="btn btn-success">Загрузить</button>
                    </div>
                </div>
              </form>
             </div>
           
            
         
         
</header>

<section>
    <br>
    <div class="buttons-container">

        <button class="toggle-button" onclick="toggleTable('form2')" data-target="form2">Сообщения</button>

    </div>

   
    <div class="table-container" id="form2" style="display: none;">
        <table>
            <!-- Заголовок таблицы -->
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
         
                    <th>Телефон</th>
                 
                    <th>Сообщение</th>
                    <th>Удаление</th>
                    <th>Редактирование</th>
                </tr>
            </thead>
            <!-- Тело таблицы с записями -->
            <tbody>
                @php
                    $perPage = 25;
                    $totalMainFormData = $mainFormDatas->count();
                    $currentPage = request()->get('page2', 1);
                    $totalPages = ceil($totalMainFormData / $perPage);
                    $offset = ($currentPage - 1) * $perPage;
                    $paginatedMainFormData = $mainFormDatas->sortByDesc('created_at')->slice($offset, $perPage);
                @endphp
                @php
                $totalRecords = $mainFormDatas->count(); // Общее количество записей
                $startIndex = ($currentPage - 1) * $perPage; // Начальный индекс для текущей страницы
            @endphp
            
            @foreach ($paginatedMainFormData as $mainFormData)
                @php
                    $index = $totalRecords - ($startIndex + $loop->index);
                @endphp
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $mainFormData->name }}</td>
            
                    <td>{{ $mainFormData->phone }}</td>
                   
                    <td>{{ $mainFormData->order }}</td>
                    <td>
                        <form action="{{ route('admin.deleteMainFormData', ['id' => $mainFormData->id]) }}" method="post" class="form-changing">
                            @csrf
                            <button type="button" onclick="confirmDelete(this)">Удалить</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.editMainFormData', ['id' => $mainFormData->id]) }}" method="get" class="form-changing">
                            @csrf
                            <button  type="submit">Редактировать</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            @php
                $currentPageKeyForm1 = 'page1'; // Определяем ключ параметра текущей страницы для первой таблицы
                $currentPageKeyForm2 = 'page2'; // Определяем ключ параметра текущей страницы для второй таблицы
                $currentPageKey = isset($mainFormDatas) ? $currentPageKeyForm2 : $currentPageKeyForm1;
            @endphp
        
            @if ($currentPage > 1)
                <a href="?{{ $currentPageKey }}=1" class="page-link">&laquo; Первая</a>
                <a href="?{{ $currentPageKey }}={{ $currentPage - 1 }}" class="page-link">&laquo; Предыдущая</a>
            @endif
        
            @php
                $showPages = 5; // Определяем количество отображаемых страниц
                $half = floor($showPages / 2);
                $start = $currentPage - $half;
                $end = $currentPage + $half;
                if ($start < 1) {
                    $start = 1;
                    $end = min($start + $showPages - 1, $totalPages);
                }
                if ($end > $totalPages) {
                    $end = $totalPages;
                    $start = max($end - $showPages + 1, 1);
                }
            @endphp
        
            @if ($start > 1)
                <span>&hellip;</span>
            @endif
        
            @for ($i = $start; $i <= $end; $i++)
                <a href="?{{ $currentPageKey }}={{ $i }}" class="page-link{{ $currentPage == $i ? ' active' : '' }}">{{ $i }}</a>
            @endfor
        
            @if ($end < $totalPages)
                <span>&hellip;</span>
            @endif
        
            @if ($currentPage < $totalPages)
                <a href="?{{ $currentPageKey }}={{ $currentPage + 1 }}" class="page-link">Следующая &raquo;</a>
                <a href="?{{ $currentPageKey }}={{ $totalPages }}" class="page-link">Последняя &raquo;</a>
            @endif
        </div>
</section>
@if(session('success'))
    <script>alert("Успешно изменено");</script>
@endif
@if(session('successChange'))
    <script>alert("Запись успешно обновлена");</script>
@endif
<script type="text/javascript" src="{{asset('js/admin.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
