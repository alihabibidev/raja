@extends('admin.base')


@section('pagetitle')
    یوزر ها
@endsection
@section("content")

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">



                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ای دی</th>
                        <th> نام</th>
                        <th> نام خانوادگی</th>
                        <th> یوزر نیم</th>
                        <th>ایمیل</th>
                        <th>شماره تماس</th>
                        <th>نقش کاربری</th>
                        <th> عملیات</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->family}}</td>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->role}}</td>
                            <td style="    display: flex;justify-content: flex-end;">
                                <a href="{{ route('addUserToken' , ["id" => $user->id]) }}" onclick="return confirm('are you sure?')"  class="btn btn-purple waves-effect w-md waves-light m-b-5 ali-m-r-1 ali-m-l-1 m-b-5"> ایجاد توکن</a>
                                <a href="{{ route('deleteUserToken' , ["id" => $user->id]) }}" onclick="return confirm('are you sure?')"  class="btn btn-warning waves-effect w-md waves-light m-b-5 ali-m-r-1 ali-m-l-1 m-b-5"> حذف توکن</a>
                                <a href="{{ route('editUser' , ["id" => $user->id]) }}"  class="btn btn-info btn-bordred waves-effect w-md waves-light ali-m-r-1 ali-m-l-1 m-b-5"> ویرایش</a>
                                <a href="{{ route('deleteUser' , ["id" => $user->id]) }}" onclick="return confirm('are you sure?')"  class="btn btn-danger btn-bordred waves-effect w-md waves-light ali-m-r-1 ali-m-l-1 m-b-5">حذف</a>
                            </td>

                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div><!-- end col -->
    </div>

@endsection

