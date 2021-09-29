<link href="{{ asset('css/header/styles.css') }}" rel="stylesheet">
<script src="{{ asset('js/signMenu/index.js') }}" defer></script>

@include('layouts.header.signIn')
@include('layouts.header.signUp')

<div class="header">
  <div class="header_core">
    <ul>
      <li>
        <a href='./'>Home</a>
      </li>
      <li>
        <a href='./payment'>Payment</a>
      </li>
      <li>
        <a href='./qrcode'>Create QR code</a>
      </li>
      <li>
        <a href='./else'>Something else</a>
      </li>
    </ul>
    <div class="authorization">
      @guest
        @if (Route::has('register'))
          <span onclick="show('sign_in','flex')">Sign in</span>
          |
          <span onclick="show('sign_up','flex')">Sign up</span>
        @endif
        
        @else
          <span>{{ Auth::user()->name }}</span>
          |
          <a href="{{ route('logout') }}"
            class="no-underline hover:underline"
            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
              {{ csrf_field() }}
          </form>
      @endguest
    </div>
  </div>
</div>