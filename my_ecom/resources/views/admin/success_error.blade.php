@if (session()->has('success'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    <span class="badge badge-pill badge-success">Success</span>
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@elseif(session()->has('error'))
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">Error</span>
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
