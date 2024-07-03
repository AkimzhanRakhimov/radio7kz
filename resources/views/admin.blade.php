<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>База данных Arna multimedia</title>  
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">   
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

    <meta charset="utf-8">
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
                    <img src="images/design.png" class="logo-image" alt="">
                    
                    </div>
            </a>
        </div>
    
</header>

<section>
    <div class="buttons-container">
        <button class="toggle-button active" onclick="toggleTable('form1')" data-target="form1">Звонки</button>

        <button class="toggle-button" onclick="toggleTable('form2')" data-target="form2">Заявки</button>

    </div>

    <div class="table-container" id="form1" >
        <table>
            <!-- Заголовок таблицы -->
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Удаление</th>
                    <th>Редактирование</th>
                </tr>
            </thead>
            <!-- Тело таблицы с записями -->
            <tbody>
                @php
                    $perPage = 25;
                    $totalFormData = $formDatas->count();
                    $currentPage = request()->get('page1', 1);
                    $totalPages = ceil($totalFormData / $perPage);
                    $offset = ($currentPage - 1) * $perPage;
                    $paginatedFormData = $formDatas->sortByDesc('created_at')->slice($offset, $perPage);
                @endphp
               @php
               $totalRecords = $formDatas->count(); // Общее количество записей
               $startIndex = ($currentPage - 1) * $perPage; // Начальный индекс для текущей страницы
           @endphp
           
           @foreach ($paginatedFormData as $formData)
               @php
                   $index = $totalRecords - ($startIndex + $loop->index);
               @endphp
               <tr>
                   <td>{{ $index }}</td>
                   <td>{{ $formData->name }}</td>
                   <td>{{ $formData->phone }}</td>
                   <td>
                    <form action="{{ route('admin.deleteFormData', ['id' => $formData->id]) }}" method="post" class="form-changing" id="deleteForm{{ $formData->id }}">
                        @csrf
                        <button type="button" onclick="confirmDelete(this)">Удалить</button>
                    </form>
                </td>
                   <td>
                    <form action="{{ route('admin.editFormData', ['id' => $formData->id]) }}" method="get" class="form-changing">
                        @csrf
                        <button type="submit">Редактировать</button>
                    </form>
                </td>
               </tr>
           @endforeach
            </tbody>
        </table>
        <div class="pagination">
            @php
                $currentPageKey = 'page1'; // Определяем ключ параметра текущей страницы для первой таблицы
                if (isset($currentPageKeyForm2)) {
                    $currentPageKey = 'page2'; // Изменяем ключ, если пагинация для второй таблицы
                }
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
    </div>
    
    <div class="table-container" id="form2" style="display: none;">
        <table>
            <!-- Заголовок таблицы -->
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Телефон</th>
                    <th>Компания</th>
                    <th>Заказ</th>
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
                    <td>{{ $mainFormData->email }}</td>
                    <td>{{ $mainFormData->phone }}</td>
                    <td>{{ $mainFormData->company }}</td>
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
    <script>alert("Успешно удалено");</script>
@endif
@if(session('successChange'))
    <script>alert("Запись успешно обновлена");</script>
@endif
<script type="text/javascript" src="{{asset('js/admin.js') }}"></script>

</body>
</html>
