@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المؤلفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ حذف المؤلفين</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('author/delete') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$author-> id}}">
        <div class="mb-3">
            <label for="author_name" class="form-label">اسم المؤلف</label>
            <input type="text" class="form-control" name="author_name" id="author_name" value="{{$author-> author_name}}">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">عمر المؤلف</label>
            <input type="text" class="form-control" name="age" id="age" value="{{$author-> age}}">
        </div>

        <button type="submit" class="btn btn-primary btn-block">حذف</button>
    </form>

</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection