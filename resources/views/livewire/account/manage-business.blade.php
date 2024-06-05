<main class="jobplugin__main">
    @section('title')
        Manage Business
    @endsection
    <div class="jobplugin__main-holder">
        <div class="jobplugin__container">
            <!-- Settings Page Title -->
            <h1 class="h3 jobplugin__text-secondary space-bottom">Settings</h1>
            <!-- Settings Block -->
            <div class="jobplugin__settings">
                <!-- Settings Nav Opener -->
                <a href="javascript:void(0);"
                    class="jobplugin__settings-opener jobplugin__text-primary hover:jobplugin__bg-primary hover:jobplugin__text-white">
                    <span class="rj-icon rj-settings"></span>
                </a>
                <!-- Settings Menu -->
                @livewire('account.elements.account-menu')
                <!-- Settings Content -->
                <div class="jobplugin__settings-content">
                    @php
                        $amount = $business->license->amount + $business->market->attached_value;
                    @endphp
                    <!-- Settings Card -->
                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card box-organization">
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <!-- Settings Card Organization -->
                            <div class="jobplugin__settings-organization">
                                <h3 class="h5">Business Details</h3>
                                <ul>
                                    <li>
                                        <div class="jobplugin__settings-organization__box">
                                            <div class="jobplugin__settings-organization__checkicon">
                                                <img src="{{ asset('e-services/images/check-icon.svg') }}"
                                                    alt="Image Description">
                                            </div>
                                            <p><strong>Business Name</strong><br>
                                                {{ $business->name }}
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jobplugin__settings-organization__box">
                                            <div class="jobplugin__settings-organization__checkicon">
                                                <img src="{{ asset('e-services/images/check-icon.svg') }}"
                                                    alt="Image Description">
                                            </div>
                                            <p>
                                                <strong>Registration Number</strong><br>
                                                {{ $business->reference }}
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jobplugin__settings-organization__box">
                                            <div class="jobplugin__settings-organization__checkicon">
                                                <img src="{{ asset('e-services/images/check-icon.svg') }}"
                                                    alt="Image Description">
                                            </div>
                                            <p>
                                                <strong>Business Adrress</strong><br>
                                                {{ $business->market->name }},
                                                {{ $business->address }}
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card box-outlined">
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <ul class="jobplugin__settings-card__infolist">
                                <li>
                                    <strong class="jobplugin__settings-card__subtitle">Action Area</strong>
                                </li>
                                <li>
                                    <!-- Settings Card Buttons -->
                                    <div class="jobplugin__settings-card__infolist-buttons">
                                        <a href="javascript:void(0);"
                                            class="jobplugin__button jobplugin__bg-primary small hover:jobplugin__bg-secondary"
                                            data-amount="{{ $amount }}" data-currency="KES" data-email=""
                                            data-first_name="{{ Auth::user()->first_name }}"
                                            data-last_name="{{ Auth::user()->last_name }}"
                                            data-phone_number="{{ Auth::user()->phone_number }}"
                                            data-api_ref="{{ $business->reference }}" data-country="KE">
                                            Pay License</a>
                                        <a href="javascript:void(0);"
                                            class="jobplugin__button small button-danger">Close
                                            Business</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.4/build/intasend-inline.js"></script>
<script>
    new window.IntaSend({
            publicAPIKey: '{{ env('INTASEND_PUB_KEY') }}',
            live: true
        })
        .on("COMPLETE", (results) => {
            // console.log("Success", results);
            saveTransactionToController(results);
        })
        .on("FAILED", (results) => {
            // console.log("Failed", results);
            saveTransactionToController(results);
        })
        .on("IN-PROGRESS", (results) => console.log("Payment in progress status", results));

    function saveTransactionToController(results) {
        console.log('Results:', results); // Log the results

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const url = '{{ env('INTASEND_CALL_BACK') }}';

        console.log('Sending request to:', url); // Log the URL being requested

        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    results: results
                })
            })
            .then(response => {
                console.log('Response received:', response); // Log the response received

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Check if the response body is empty
                if (response.headers.get('Content-Length') === '0') {
                    // Response body is empty, return an empty object
                    return {};
                }
                // Log the response body
                return response.text().then(text => {
                    console.log('Response body:', text);
                    return text ? JSON.parse(text) : {};
                });
            })
            .then(data => {
                console.log('Response data:', data); // Log the response data

                // Reload the current page
                window.location.reload();
            })
            .catch(error => console.error('Error saving transaction:', error));

    }
</script>
