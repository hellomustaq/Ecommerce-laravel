@if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                  <h6 style="text-align: center;">{{ $error }}</h6>
            @endforeach
    </div>
@endif
