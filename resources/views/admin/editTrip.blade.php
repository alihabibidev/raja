@extends('admin.base')

@section('pagetitle')
    ویرایش سفر
@endsection



@section("content")

    <div class="row">
        <form class="form" action="{{route('editTripAction')}}" method="post">
            @csrf
            <input class="form-control" type="text" name="star" placeholder="ستاره قطار را اضافه کنید" value="{{$trip->star}}">
            <input class="form-control" type="text" name="destination" placeholder="مقصد قطار را اضافه کنید" value="{{$trip->destination}}">
            <input class="form-control" type="text" name="price" placeholder="قیمت قطار را اضافه کنید" value="{{$trip->price}}">
            <input class="form-control" type="text" name="off_price" placeholder="قیمت با تخفیف قطار را اضافه کنید" value="{{$trip->off_price}}">
            <input class="form-control" type="text" name="time" placeholder="زمان حرکت قطار را اضافه کنید" value="{{$trip->time}}">
            <input class="form-control" type="text" name="origin" placeholder="مبدا قطار را اضافه کنید" value="{{$trip->origin}}">
            <input class="form-control" type="number" name="capacity" placeholder="ظرفیت قطار را اضافه کنید" value="{{$trip->capacity}}">


            <input type="hidden" name="id" value={{$trip->id}}>
            <button class="btn btn-success" type="submit">ویرایش</button>
        </form>
    </div>


@endsection

