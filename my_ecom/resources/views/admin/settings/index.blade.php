@extends('admin.settings.base')
@section('module-content')

<div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Settings</h3>
                    </div>
                    <hr>
                    <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="site_name" class="control-label mb-1">Site Name</label>
                            <input id="site_name" name="site_name" type="text" class="form-control @error('site_name') is-invalid @enderror" aria-required="true" aria-invalid="false" value="">
                            @error('site_name')
                               <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group has-success">
                            <label for="site_email" class="control-label mb-1">Site Email</label>
                            <input id="site_email" name="site_email" type="text" class="form-control @error('site_email') is-invalid @enderror">
                            @error('site_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg btn-info btn-block">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

