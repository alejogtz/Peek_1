<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo de cuenta</title>
</head>
<body>

    <form action="/open-extra-info-view" method="post">
        @csrf
        <input type="submit" value="pet" name='type-account'>
        <input type="submit" value="company" name='type-account'>
    </form>
    
</body>
</html>