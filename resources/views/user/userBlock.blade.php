
  <div class="card mt-3" style="width: 14rem;">
    <img class="card-img-top" src="{{ $user->getAvatar() }}" alt="{{ $user->getNameOrUserName() }}">
    <div class="card-body">
      <h5 class="card-title">{{ $user->getNameOrUserName() }}</h5>
      <p class="card-text">{{ $user->email }}</p>
      @if ($user->location)
            <p>{{ $user->location }}</p>
        @endif
    </div>
  </div>
