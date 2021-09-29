<div onclick=hideSign(event) class="sign_fon" id="sign_up">
  <div class='sign_block'>
    <form method="POST" action="{{ route('register') }}" class="sign_form">
      @csrf
      <span>Sign up</span>
      <div class="sign_inputs">
        <input
          placeholder='You name'
          type="text"
          name="name"
          value="{{ old('name') }}"
          required
          autocomplete="name"
          autofocus
        >
        @error('name')
        <p>
          {{ $message }}
        </p>
        @enderror

        <input
          placeholder='E-mail Address'
          type="email"
          name="email"
          value="{{ old('email') }}"
          required
          autocomplete="email"
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
          autocomplete="new-password"
        >

        @error('password')
        <p>
          {{ $message }}
        </p>
        @enderror

        <input
          placeholder="Password-confirm"
          type="password"
          name="password_confirmation"
          required
          autocomplete="new-password"
        >
      </div>
      <button type="submit">
        {{ __('Register') }}
      </button>
      <span  class="sign_change_menu" onclick="show('sign_up','none'); show('sign_in','flex');">
        Already have an account? Login
      </span>
    </form>
  </div>
</div>