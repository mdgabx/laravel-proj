<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <ul>
            @foreach ($students as $student)
            <li>{{ $student->gender }} {{ $student->gender_count }}</li>   
            @endforeach
        </ul>
    </body>
</html>