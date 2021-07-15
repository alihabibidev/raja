@extends('admin.base')

@section('pagetitle')
    ویرایش قطار
@endsection



@section("content")

    <div class="row">
        <form class="form" action="{{route('editTrainAction')}}" method="post">
            @csrf
            <input class="form-control" type="text" name="train_model" placeholder="برند قطار را اضافه کنید" value="{{$train->train_model}}">
            <input class="form-control" type="text" name="production_date" placeholder="سال ساخت قطار را اضافه کنید" value="{{$train->production_date}}">
            <input type="hidden" name="id" value={{$train->id}}>
            <button class="btn btn-success" type="submit">ویرایش</button>
        </form>
    </div>


@endsection
