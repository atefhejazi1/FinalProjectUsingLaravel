@extends('layouts.master')
@section('title')
لوحة التحكم - المكتبة الرقمية
@stop
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')

@endsection
@section('content')

<div class="row mt-5">
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم الكتاب</th>
                <th scope="col">اسم المؤلف</th>
                <th scope="col">اسم دار النشر</th>
                <th scope="col">اسم تصنيف الكتاب</th>
                <th scope="col">اصدار الكتاب</th>
                <th scope="col">عرض الكتاب</th>
            </tr>
        </thead>
        <tbody>
            @php
            $x = 0;
            @endphp

            @foreach ( $books as $book )
            <tr>
                <th scope="row">{{++$x }}</th>
                <td>{{$book-> book_name}}</td>
                <td>{{$book-> authors->author_name}}</td>
                <td>{{$book-> publishing_houses->publishing_house_name}}</td>
                <td>{{$book-> book_ratings->book_rating_name}}</td>
                <td>{{$book-> issue_number}}</td>
                <td>
                    <!-- <a href={{"book/edit/".$book->id}} class="btn btn-outline-success btn-sm">تعديل</a> -->
                    <!-- <a href={{"book/delete/".$book->id}} class="btn btn-outline-danger btn-sm">حذف</a> -->
                    <a href={{"book/show/".$book->id}}>
                        <li class="icons-list-item"><i class="far fa-file-alt"></i></li>
                    </a>

                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>

</div>
</div>
<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection