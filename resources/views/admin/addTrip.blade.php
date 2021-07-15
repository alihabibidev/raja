

@extends('admin.base')


@section('pagetitle')
    افزودن سفر
@endsection
@section('content')
    <div class="row">
        <form action={{route("addTrip")}} method="post">
            @csrf
            {{--    <input type="text" name="star" placeholder="تعداد ستاره قطار">--}}
            <input type="text" name="Origin" placeholder="مبدا قطار">
            <input type="text" name="destination" placeholder="مقصد قطار">
            <input type="text" name="price" placeholder=" قیمت ">
            <input type="text" name="off_price" placeholder=" قیمت شگفت انگیز ">
            <input type="number" name="capacity" placeholder="  ظرفیت سفر ">
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
    </div>


@endsection
