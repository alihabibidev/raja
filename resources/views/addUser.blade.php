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
<form action="{{route('addUserValidate')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="نام">
    <input type="text" name="family" placeholder="نام خانوادگی">
    <input type="text" name="user_name" placeholder="یوزر نیم">
    <input type="text" name="phone_number" placeholder="شماره تماس">
    <input type="text" name="email" placeholder="ایمیل">
    <input type="password" name="password" placeholder="پسورد">
    <select name="role" id="">
        <option value="1">مدیر کل</option>
        <option value="2">مدیر</option>
        <option value="3">برنامه نویس</option>
        <option value="4">نویسنده</option>
    </select>
    <br>
    <br>
    <button type="submit">
        ارسال
    </button>
</form>
</body>
</html>
