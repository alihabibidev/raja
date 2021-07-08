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
<<<<<<< HEAD
<form action={{route("addTrain")}} method="post">
    @csrf
=======
<form action="">

>>>>>>> 505452f9056f70a9f4f1486242ad270a430a8a7d
    <input type="text" name="train_model" placeholder="مدل قطار">
    <input type="text" name="production_date" placeholder="سال ساخت">

    <select name="brand_id" id="">
<<<<<<< HEAD
        @foreach($brands as $brand)
            <option value={{$brand->id}}>{{ $brand->train_model }}</option>
        @endforeach
    </select>

=======
        @php
           $brands = new \App\Http\Controllers\BrandController();
           $brands_view = $brands->getAllBrand();
        @endphp
        @foreach($brands_view as $brand)
            {{$brand}}
        @endforeach
        <option value="fadak"></option>
>>>>>>> 505452f9056f70a9f4f1486242ad270a430a8a7d
        <button type="submit">
            ارسال
        </button>
</form>
</body>
</html>
