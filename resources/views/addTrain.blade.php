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
<form action="">
    @foreach($brands as $brand)
        {{}}
    @endforeach
    <input type="text" name="train_model" placeholder="مدل قطار">
    <input type="text" name="production_date" placeholder="سال ساخت">
    <select name="brand_id" id="">

        <option value="fadak"></option>
        <button type="submit">
            ارسال
        </button>
    </select>
</form>
</body>
</html>