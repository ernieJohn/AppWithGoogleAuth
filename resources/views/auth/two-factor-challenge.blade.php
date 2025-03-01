<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Two Factor Challenge') }}</div>

                    <div class="card-body">
                        <p class="text-center"> {{ __('Please enter your authentication code to log in.') }}</p>


                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="code"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Code') }}</label>

                                <div class="col-md-6">
                                    <input id="code" type="text"
                                        class="form-control @error('code') is-invalid @enderror" name="code" required
                                        autocomplete="current-password">
                                    <span class="invalid-feedback" role="alert">

                                        @error('code')
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex align-items-center my-3">
                    <hr class="flex-grow-1">
                    <span class="mx-2">OR</span>
                    <hr class="flex-grow-1">
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Two Factor Recovery Code') }}</div>

                    <div class="card-body">
                        <p class="text-center"> {{ __('Please enter your recovey code to log in.') }}</p>


                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="code"
                                    class="col-md-4 col-form-label text-md-end">{{ __(' Recovery Code:') }}</label>

                                <div class="col-md-6">
                                    <input id="recovery_code" type="text"
                                        class="form-control @error('recovery_code') is-invalid @enderror"
                                        name="recovery_code" required autocomplete="current-reco">
                                    <span class="invalid-feedback" role="alert">

                                        @error('recovery_code')
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
