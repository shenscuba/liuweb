@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
    <div class="container">
      <div class="flash-message">
        <p class="alert alert-{{ $msg }}" style="margin: 10px 5px 0 5px">
          {{ session()->get($msg) }}
        </p>
      </div>
    </div>
  @endif
@endforeach