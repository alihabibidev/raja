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
<form action={{route("addTrain")}} method="post">
    @csrf
    <input type="text" name="train_model" placeholder="مدل قطار">
    <input type="text" name="production_date" placeholder="سال ساخت">

    <select name="brand_id" id="">
        @foreach($brands as $brand)
            <option value={{$brand->id}}>{{ $brand->train_model }}</option>
        @endforeach
    </select>

        <button type="submit">
            ارسال
        </button>
</form>
</body>
</html>
