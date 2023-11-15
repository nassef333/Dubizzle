<x-main-layout>
    <section class="">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center mt-5 mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0 ">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            The best offer <br />
                            <span class="text-primary">for your business</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Discover a world where automotive excellence and precision craftsmanship converge, revolutionizing your ride and elevating your driving experience to unparalleled heights with our superior quality car parts meticulously engineered for optimal performance, ensuring you unleash the full potential of your vehicle and drive with unwavering confidence on every journey.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf


                                    {{-- Email --}}
                                    <div class="form-outline mb-4">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- End Email --}}

                                    {{-- Password --}}
                                    <div class="row mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End Password --}}

                                    <!-- Submit button -->
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Login
                                        </button>
                                        <br>
                                        <a href="/register">
                                            Not registered Yet?
                                        </a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
