<div onclick=hideSign(event) class="sign_fon" id="sign_in">
  <div class='sign_block'>
    <form method="POST" action="{{ route('login') }}" class="sign_form">
      @csrf
      <span>Sign in</span>
      <div class="sign_inputs">
        <input
          placeholder="E-mail"
          type="email"
          name="email"
          value="{{ old('email') }}"
          required
          autocomplete="email"
          autofocus
        >
        @error('email')
        <p>
          {{ $message }}
        </p>
        @enderror

        <input
          placeholder="Password"
          type="password"
          name="password"
          required
        >
        @error('password')
        <p>
          {{ $message }}
        </p>
        @enderror

        <label for="remember">
          <input
            type="checkbox"
            name="remember"
            {{ old('remember') ? 'checked' : '' }}
          >
          <span>{{ __('Remember Me') }}</span>
        </label>

        <button type="submit">
          {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
      </div>
      <span class="sign_change_menu" onclick="show('sign_up','flex'); show('sign_in','none');">
        Don't have an account? Registration
      </span>
    </form>
  </div>
</div>