@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="row">{{ $error }}</div>
            @endforeach
        </ul>
    </div>
@endif
