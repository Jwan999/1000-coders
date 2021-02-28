
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="flex flex-col">
            <label for="email" class="text-gray-800 text-lg">@lang("language.email")</label>
            <input id="email" type="email"
                   class="mt-3 rounded-lg focus:outline-none border border-indigo-100 px-3 py-2 form-control @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="password" class="mt-2 text-gray-800 text-lg">@lang("language.password")</label>
            <input id="password" type="password"
                   class="mt-3 rounded-lg focus:outline-none border border-indigo-100 px-3 py-2 form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        {{--        <div class="form-group row">--}}
        {{--            <div class="col-md-6 offset-md-4">--}}
        {{--                <div class="form-check">--}}
        {{--                    <input class="form-check-input" type="checkbox" name="remember"--}}
        {{--                           id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

        {{--                    <label class="form-check-label" for="remember">--}}
        {{--                        {{ __('Remember Me') }}--}}
        {{--                    </label>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class=flex>
            <button type="submit" class="mt-4 rounded px-4 py-2 text-lg bg-indigo-500 text-white">
      @lang("language.login")
            </button>
            {{--                @if (Route::has('password.request'))--}}
            {{--                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
            {{--                        {{ __('Forgot Your Password?') }}--}}
            {{--                    </a>--}}
            {{--                @endif--}}

        </div>
    </form>






