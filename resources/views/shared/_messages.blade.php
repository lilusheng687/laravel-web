@if (Session::has('success'))
    <div class="alert alert-success fade show">
        <span class="close" data-dismiss="alert">×</span>
        <strong>Success!</strong>
        {{ Session::get('success') }}
    </div>
@endif
