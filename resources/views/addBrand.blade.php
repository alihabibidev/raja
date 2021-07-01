<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('addBrandValidate')}}" method="post">
    @csrf
    <input type="text" name="brand_name" placeholder="برند قطار را اضافه کنید">
    <button type="submit">ارسال</button>
</form>


</body>
</html>
