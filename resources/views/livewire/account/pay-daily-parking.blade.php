<main class="jobplugin__main">
    @section('title')
        Pay Daily Parking
    @endsection
    <div class="jobplugin__main-holder">
        <div class="jobplugin__container">
            <!-- Settings Page Title -->
            <h1 class="h3 jobplugin__text-secondary space-bottom">Settings</h1>
            <!-- Settings Block -->
            <div class="jobplugin__settings">
                <!-- Settings Nav Opener -->
                <a href="#"
                    class="jobplugin__settings-opener jobplugin__text-primary hover:jobplugin__bg-primary hover:jobplugin__text-white">
                    <span class="rj-icon rj-settings"></span>
                </a>
                <!-- Settings Menu -->
                @livewire('account.elements.account-menu')
                <!-- Settings Content -->
                <div class="jobplugin__settings-content">
                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card">
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <div class="jobplugin__settings-card__verification">
                                <div class="jobplugin__settings-card__verification-placeholder">
                                    <div class="jobplugin__settings-card__verification-icon">
                                        <img src="{{ asset('e-services/images/card.png') }}" alt="Card">
                                    </div>
                                    <div class="jobplugin__settings-card__verification-infoicon jobplugin__bg-primary">
                                        <span class="rj-icon rj-info"></span>
                                    </div>
                                </div>
                                <div class="jobplugin__settings-card__verification-textbox">
                                    <h4 class="h5">Payment</h4>
                                    <p>Please intiate payment to complete parking request.</p>
                                    <p><strong>Parking Zone: </strong>{{ $parking->zone->name }} | <strong>Vehicle Type:
                                        </strong>{{ $parking->vehicleType->name }}</p>
                                </div>
                                <!-- Settings Card Buttons -->
                                @php
                                    $amount = $parking->vehicleType->charges + $parking->zone->attached_value;
                                @endphp
                                <div class="jobplugin__settings-card__verification-buttons">
                                    <a href="javascript:void(0);"
                                        class="jobplugin__button jobplugin__bg-primary small hover:jobplugin__bg-secondary intaSendPayButton"
                                        data-amount="{{ $amount }}" data-currency="KES" data-email=""
                                        data-first_name="{{ Auth::user()->first_name }}"
                                        data-last_name="{{ Auth::user()->last_name }}"
                                        data-phone_number="{{ Auth::user()->phone_number }}"
                                        data-api_ref="{{ $parking->reference }}" data-country="KE">Pay Ksh
                                        {{ $amount }}
                                    </a>
                                </div>
                            </div>
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
        const url = '{{ env('PARKING_CALL_BACK') }}';

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
