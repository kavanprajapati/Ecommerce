<div class="card-body card-block">
    <div class="form-group">
        <label for="category_name" class="form-control-label">Category Name</label>
        <input
        type="text"
        id="category_name"
        placeholder="Enter category name"
        class="form-control"
        />
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
    <a href="{{ route('admin.category.index') }}" class="btn btn-danger btn-sm">
        <i class="fa fa-ban"></i> Cancel
    </a>
</div>
