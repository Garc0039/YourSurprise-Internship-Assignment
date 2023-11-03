<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <div>
        <p>
            The posts likes by user {{$userNumber}}
        </p>
        @for ($i = 0; $i < count($posts); $i++)
            <p>
                {{$posts[$i][0]->post}}
            </p>
        @endfor
    </div>
</body>
</html>
