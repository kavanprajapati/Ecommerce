
@extends('admin.layout.app')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @include('admin.success_error')
            @yield('module-content')
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@endsection
