@extends('layouts.master')
@section('css')
@endsection
@section('page-header')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الكتب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تفاصيل الكتاب</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0">
                <h5 class="card-title mb-0 pb-0">{{$books->book_name}}</h5>
            </div>
            <div class="card-body">
                <ul>
                    <li> {{ "اسم مؤلف الكتاب : ".$books-> authors->author_name}}</li>
                    <ul>
                        <li>{{ "عمر مؤلف الكتاب : ".$books-> authors->age}}</li>
                    </ul>
                    <li>{{ "اسم دار النشر : ".$books-> publishing_houses->publishing_house_name}}</li>
                    <ul>
                        <li>{{ "عنوان دار النشر : ".$books-> publishing_houses->publishing_house_address}}</li>
                    </ul>
                    <li>{{ "اسم تصنيف الكتاب : ".$books-> book_ratings->book_rating_name}}</li>
                    <ul>
                        <li>{{ "وصف تصنيف الكتاب : ".$books-> book_ratings->book_rating_description}}</li>
                    </ul>
                </ul>
            </div>
            <div class="card-footer">
                {{ "اٍصدار الكتاب : ". $books-> issue_number}}
            </div>
        </div>
    </div>

</div>

<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection