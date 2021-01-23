@extends('admin.category.base')
@section('module-content')
<div class="row">
   <div class="col-lg-{{ Config::get('constants.FORM_COL_SIZE') }}">
      <div class="card">
            <div class="card-header">
                <strong>Edit Category</strong>
            </div>
            <div class="card-form-body">
            <form action="{{ route('admin.category.update',['id'=>$category->id]) }}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               @include('admin.category.form')
            </form>
            </div>
      </div>
    </div>
</div>
@endsection

