@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المؤلفين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل المؤلفين</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <form action="{{ url('publishing_houses/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$publishingHouse-> id}}">
        <div class="mb-3">
            <label for="publishing_house_name" class="form-label">اسم دار النشر</label>
            <input type="text" class="form-control" name="publishing_house_name" id="publishing_house_name" value="{{$publishingHouse-> publishing_house_name}}">
        </div>

        <div class="mb-3">
            <label for="publishing_house_address" class="form-label">عنوان دار النشر</label>
            <input type="text" class="form-control" name="publishing_house_address" id="publishing_house_address" value="{{$publishingHouse-> publishing_house_address}}">
        </div>

        <button type="submit" class="btn btn-primary btn-block">تعديل</button>
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