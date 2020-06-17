<div class="media mt-3">
    <a href="">
        <img src="{{ $user->getAvatar() }}" class="mr-3" alt="{{ $user->getNameOrUserName() }}">
    </a>
    <div class="media-body">
        <a href="">
            <h5 class="mt-0">{{ $user->getNameOrUserName() }}</h5>
        </a>

        @if ($user->location)
            <p>{{ $user->location }}</p>
        @endif
    </div>
  </div>
