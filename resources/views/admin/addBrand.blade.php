@extends('admin.base')


@section('pagetitle')
افزودن برند
@endsection
@section('content')
    <div class="row">
        <form class="form" action="{{route('addBrandValidate')}}" method="post">
            @csrf
            <input class="form-control" type="text" name="brand_name" value="" placeholder="برند قطار را اضافه کنید">
            <button class="btn btn-success" type="submit">ارسال</button>
        </form>
    </div>


@endsection
