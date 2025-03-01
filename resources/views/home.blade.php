<x-layouts.app>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Two Factor Authentication') }}</div>

                    <div class="card-body">
                        @if (session('status') == 'two-factor-authentication-disabled')
                            <div class="alert alert-success" role="alert">
                                Two Factor Authentication has been disabled.
                            </div>
                        @endif
                        @if (session('status') == 'two-factor-authentication-enabled')
                            <div class="alert alert-success" role="alert">
                                Two Factor Authentication has been enabled.
                            </div>
                        @endif

                        <form method="POST" action="{{ '/user/two-factor-authentication' }}">
                            @csrf
                            @if (auth()->user()->two_factor_secret)
                                @method('DELETE')
                                <div class="pb-5">
                                    <h6>Please scan the QR code into your phones authenticator application</h1>
                                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                </div>
                                <div>
                                    <h3>Recovery Codes:</h3>
                                    <ul>
                                        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                                            <li> {{ $code }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                                <button class="btn btn-danger">Disable</button>
                            @else
                                <button class="btn btn-primary">Enable</button>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
