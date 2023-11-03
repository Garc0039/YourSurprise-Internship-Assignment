<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div>
    <h2>
        Add a new user!
    </h2>

    <form method="POST" action="/public/registers">
        @csrf
        <label for="email">
            Email:
        </label> <br>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email')
        <p>
            {{$errors->first('email')}}
        </p>
        @enderror <br> <br>

        <label for="likes">
            Likes:
        </label> <br>
        <input type="number" min="1" max="10" name="likes" value="{{old('likes')}}">
        @error('likes')
        <p>
            {{$errors->first('likes')}}
        </p>
        @enderror <br> <br>

        <label for="reposts">
            Reposts:
        </label> <br>
        <input type="number" min="1" max="10" name="reposts" value="{{old('reposts')}}">
        @error('reposts')
        <p>
            {{$errors->first('reposts')}}
        </p>
        @enderror <br> <br>

        <label for="views">
            Views:
        </label> <br>
        <input type="number" min="1" max="10" name="views" value="{{old('views')}}">
        @error('views')
        <p>
            {{$errors->first('views')}}
        </p>
        @enderror <br> <br>

        <input type="submit">
    </form>
    <br>
</div>
</body>
</html>

