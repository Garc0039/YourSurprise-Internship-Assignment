<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div>
    @for ($i = 0; $i < count($registeredUsers); $i++)
        <p>
            User {{$registeredUsers[$i]->id}} data:
            {{$registeredUsers[$i]->email}}
            {{$registeredUsers[$i]->likes}}
            {{$registeredUsers[$i]->views}}
            {{$registeredUsers[$i]->reposts}}
        </p>
    @endfor
</div>
</body>
</html>
