@if(session('success'))

  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{session('success')}}
</div>
  <script type="text/javascript">
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
    }, 4000);
  </script>

  {{-- <div class="alert alert-success alert-dismissable">
    <div class="row">{{session('success')}}</div>
    @php
    Session::forget('success');
    @endphp
  </div> --}}

@endif
