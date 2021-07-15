@extends('admin.base')

@section('pagetitle')
    ویرایش برند
@endsection



@section("content")

    <div class="row">
        <form class="form" action="{{route('editBrandAction')}}" method="post">
            @csrf
            <input class="form-control" type="text" name="brand_name" placeholder="برند قطار را اضافه کنید" value="{{$brand->brand_name}}">
            <input type="hidden" name="id" value={{$brand->id}}>
            <button class="btn btn-success" type="submit">ویرایش</button>
        </form>
    </div>


@endsection


