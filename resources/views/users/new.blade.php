<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/users/create" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif
        <label for="email">Email</label>
        <input type="text" name="email">
        @if($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
        @endif
        <p>File</p>
        <input type="file" name="avatar" />
        <input type="submit">
    </form>
</body>
</html>