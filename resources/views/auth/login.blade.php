<x-guest-layout>
    @section('title')
        Login
    @endsection
    <main class="jobplugin__main">
        <div class="jobplugin__main-holder">
            <span class="jobplugin__pattern default-right"></span>
            <span class="jobplugin__pattern default-left"></span>
            <div class="jobplugin__visual-pattern">
                <img src="{{ asset('e-services/images/visual-pattern.png') }}" alt="Image Description">
            </div>
            <div class="jobplugin__container">
                <!-- User Box -->
                <div class="jobplugin__userbox">
                    <span class="jobplugin__userbox-bar jobplugin__bg-primary"></span>
                    <h1 class="jobplugin__text-secondary h3">Login</h1>
                    {{-- Errors --}}
                    <x-validation-errors class="mb-4" style="color: red" />
                    {{-- Session --}}
                    @session('status')
                        <div class="mb-4 text-sm font-medium" style="color: green">
                            {{ $value }}
                        </div>
                    @endsession
                    <!-- User Box Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="jobplugin__form">
                            <!-- User Form Row -->
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="text" name="id_number" placeholder="ID Number">
                                </div>
                            </div>
                            <!-- User Form Row -->
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="password" name="password" placeholder="PIN ****">
                                </div>
                            </div>
                        </div>
                        <!-- User Form Button -->
                        <div class="jobplugin__userbox-button">
                            <button type="submit"
                                class="jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Login</button>
                        </div>
                    </form>
                    <div class="jobplugin__userbox-seperator">
                        <span>or</span>
                    </div>
                    <!-- User Form Other Buttons -->
                    <div class="jobplugin__userbox-others">
                        <a href="javascript:void(0);" class="button-continue">
                            <span class="fa fa-apple"></span>
                            <span class="btn-text">Forgot PIN?</span>
                        </a>
                        <a href="{{ route('register') }}" class="button-continue btn-google">
                            <span class="fa fa-google"></span>
                            <span class="btn-text">Create Account</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
