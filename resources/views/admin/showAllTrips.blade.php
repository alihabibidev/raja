@extends('admin.base')

@section('pagetitle')
    سفر ها
@endsection



@section("content")

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                {{--                    <div class="dropdown pull-right">--}}
                {{--                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">--}}
                {{--                            <i class="zmdi zmdi-more-vert"></i>--}}
                {{--                        </a>--}}
                {{--                        <ul class="dropdown-menu" role="menu">--}}
                {{--                            <li><a href="#">فعال</a></li>--}}
                {{--                            <li><a href="#">متن اول</a></li>--}}
                {{--                            <li><a href="#">متن دوم</a></li>--}}
                {{--                            <li class="divider"></li>--}}
                {{--                            <li><a href="#">متن پاورقی</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}



                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ای دی</th>
                        <th> تعداد ستاره</th>
                        <th>مبدا</th>
                        <th>مقصد</th>
                        <th>قیمت</th>
                        <th>تخفیف</th>
                        <th>زمان حرکت</th>
                        <th>ظرفیت </th>




                    </tr>
                    </thead>

                    <tbody>
                    @foreach($trips as $trip)
                        <tr>
                            <td>{{$trip->id}}</td>
                            <td>{{$trip->star}}</td>
                            <td>{{$trip->origin}}</td>
                            <td>{{$trip->destination}}</td>
                            <td>{{$trip->price}}</td>
                            <td>{{$trip->off_price}}</td>
                            <td>{{$trip->time}}</td>
                            <td>{{$trip->capacity}}</td>



                            <td style="    display: flex;justify-content: flex-end;">
                                <a href="{{ route('editTripPage' , ["id" => $trip->id]) }}"  class="btn btn-info btn-bordred waves-effect w-md waves-light ali-m-r-1 ali-m-l-1 m-b-5"> ویرایش</a>

                                <a href="{{ route('deleteTrip' , ["id" => $trip->id]) }}" onclick="return confirm('are you sure?')"  class="btn btn-danger btn-bordred waves-effect w-md waves-light ali-m-r-1 ali-m-l-1 m-b-5">حذف</a>
                            </td>

                        </tr>
                    @endforeach



                    </tbody>
                </table>
                <div class="row">
                    {{ $trips->links('vendor.pagination.default') }}
                </div>
            </div>
        </div><!-- end col -->
    </div>

@endsection







@section("extra_js")
    <!-- Datatables-->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();

    </script>
@endsection
