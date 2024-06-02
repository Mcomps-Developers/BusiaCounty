<x-guest-layout>
    @section('title')
        Create Account
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
                    <h1 class="jobplugin__text-secondary h3">Create Account</h1>
                    {{-- Errors --}}
                    <x-validation-errors class="mb-4" style="color: red" />
                    {{-- Session --}}
                    @session('status')
                        <div class="mb-4 text-sm font-medium" style="color: green">
                            {{ $value }}
                        </div>
                    @endsession
                    <!-- User Box Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="jobplugin__usertype">
                            <label class="jobplugin__usertype-radio">
                                <input type="radio" name="group" checked>
                                <span class="jobplugin__usertype-radio__item">
                                    <span class="jobplugin__usertype-radio__btn"></span>
                                    Individual
                                </span>
                            </label>
                            <label class="jobplugin__usertype-radio">
                                <input type="radio" name="group">
                                <span class="jobplugin__usertype-radio__item">
                                    <span class="jobplugin__usertype-radio__btn"></span>
                                    Organization
                                </span>
                            </label>
                        </div>
                        <div class="jobplugin__form">
                            <!-- User Form Row -->
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="text" placeholder="ID/Passport Number" id="id_number" name="id_number" :value="old('id_number')">
                                </div>
                            </div>
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="tel" placeholder="Phone Number (254)" value="254" id="phone_number" name="phone_number">
                                </div>
                            </div>
                            <!-- User Form Row -->
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="text" placeholder="First Name" id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="text" placeholder="Last Name" id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="jobplugin__form-row">
                                <div class="jobplugin__form-field">
                                    <input type="password" placeholder="PIN ****" id="pin" name="pin">
                                </div>
                            </div>
                        </div>
                        <!-- User Form Button -->
                        <div class="jobplugin__userbox-button">
                            {{-- <button type="button" id="verifyButton" --}}
                            <button type="submit"
                                class="jobplugin__button large jobplugin__bg-primary hover:jobplugin__bg-secondary">Next</button>
                        </div>
                    </form>
                    <div class="jobplugin__userbox-seperator">
                        <span>or</span>
                    </div>
                    <!-- User Form Other Buttons -->
                    <div class="jobplugin__userbox-others">
                        <a href="{{ route('login') }}" class="button-continue">
                            <span class="fa fa-apple"></span>
                            <span class="btn-text">Login</span>
                        </a>
                        <a href="{{ route('eservices') }}" class="button-continue btn-google">
                            <span class="fa fa-google"></span>
                            <span class="btn-text">Go Home</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('verifyButton').addEventListener('click', function() {
                const idNumber = document.getElementById('id_number').value;
                const firstName = document.getElementById('first_name').value;
                const lastName = document.getElementById('last_name').value;

                fetch('{{ route('verify-id') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            id_number: idNumber,
                            first_name: firstName,
                            last_name: lastName
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById('first_name').value = data.data.firstName;
                            document.getElementById('last_name').value = data.data.lastName;
                        } else {
                            alert('ID verification failed: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
</x-guest-layout>
