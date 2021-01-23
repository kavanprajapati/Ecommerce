@extends('admin.category.base')
@section('module-content')
<div class="row">
   <div class="col-lg-{{ Config::get('constants.FORM_COL_SIZE') }}">
      <div class="card">
            <div class="card-header">
                <strong>Add Category</strong>
            </div>
            <div class="card-form-body">
            <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
               @include('admin.category.form')
            </form>
            </div>
      </div>
    </div>
</div>
@endsection

