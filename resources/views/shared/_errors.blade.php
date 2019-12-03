@if ($errors->any())
    <div class="alert alert-danger fade show">
        <strong>Whoops!</strong>
       <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
