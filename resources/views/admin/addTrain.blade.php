@extends('admin.base')
@section('pagetitle')
    افزودن قطار
@endsection
@section('content')
    <div class="row">

        <form action={{route("addTrain")}} method="post">
            @csrf

                <input class="form-control" type="text" name="train_model" placeholder="مدل قطار">
                <input  class="form-control" type="text" name="production_date" placeholder="سال ساخت">

                <select name="brand_id" id="">
                    @foreach($brands as $brand)
                        <option value={{$brand->id}}>{{ $brand->brand_name
 }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success" type="submit">
                    ارسال
                </button>
            </form>
    </div>


@endsection
