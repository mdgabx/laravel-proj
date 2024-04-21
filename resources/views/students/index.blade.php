<!DOCTYPE html>
<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    
    <body>
        <ul>
            @foreach ($students as $student)
            <li>{{ $student->gender }} {{ $student->gender_count }}</li>   
            @endforeach
        </ul>
        <h1 class="text-3xl font-bold underline">
            Hello world!
          </h1>
    </body>
</html>