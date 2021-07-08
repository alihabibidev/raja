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
<form action={{route("addTrip")}} method="post">
    @csrf
    {{--    <input type="text" name="star" placeholder="تعداد ستاره قطار">--}}
    <input type="text" name="Origin" placeholder="مبدا قطار">
    <input type="text" name="destination" placeholder="مقصد قطار">
    <input type="text" name="price" placeholder=" قیمت ">
    <input type="text" name="off_price" placeholder=" قیمت شگفت انگیز ">
    <input type="date" name="time" placeholder=" زمان حرکت ">

    <select name="star">
        <option value="1"></option>
        <option value="2"></option>
        <option value="3"></option>
        <option value="4"></option>
    </select>

    {{--        <input type="text" name="time" placeholder=" زمان سفر ">--}}


    <select name="train_id" id="">
        @foreach($trains as $train)
            <option value={{$train->id}}>{{ $train->train_model }} - {{$train->brand->brand_name}}</option>
        @endforeach
    </select>

    <button type="submit">
        ارسال
    </button>
</form>
</body>
</html>
