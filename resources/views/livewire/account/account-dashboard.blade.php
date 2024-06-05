<main class="jobplugin__main">
    @section('title')
        My Account
    @endsection
    <div class="jobplugin__main-holder">
        <div class="jobplugin__container">
            <!-- Settings Page Title -->
            <h1 class="h3 jobplugin__text-secondary space-bottom">Menu</h1>
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
                    <!-- Settings Content Head -->
                    <div class="jobplugin__settings-head">
                        <h2 class="h5">Hello <span
                                style="text-transform: capitalize">{{ Auth::user()->first_name }}</span></h2>
                        <span class="jobplugin__settings-head__bar jobplugin__bg-primary"></span>
                        <p class="jobplugin__settings-head__text">This is client Account</p>
                    </div>
                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card box-outlined">
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <ul class="jobplugin__settings-card__infolist">
                                <li>
                                    <strong class="jobplugin__settings-card__subtitle large-title">Balance:
                                        Ksh 0.00</strong>
                                </li>
                                <li>
                                    <div class="jobplugin__settings-card__infolist-buttons">
                                        <a href="javascript:void(0);"
                                            class="jobplugin__button jobplugin__bg-primary small hover:jobplugin__bg-secondary">Top
                                            Up</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Settings Card -->
                    @if ($businesses->count() < 1)
                        <div class="jobplugin__settings-card">
                            <!-- Settings Card Head -->
                            <header class="jobplugin__settings-card__head">
                                <h3 class="h6">My Businesses</h3>
                                <a href="{{ route('business.add') }}"
                                    class="jobplugin__button jobplugin__bg-primary jobplugin__border-primary small hover:jobplugin__bg-white">Add
                                    a business</a>
                            </header>
                            <!-- Settings Card Body -->
                            <div class="jobplugin__settings-card__body">
                                <ul class="jobplugin__settings-card__infolist">
                                    <li>
                                        <p>You haven't set up any business yet. Add a business so you can access
                                            services
                                            when
                                            you're ready.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="jobplugin__settings-card">
                            <!-- Settings Card Head -->
                            <header class="card__head"
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; background-color: #f0f0f0; padding: 10px; border-radius: 8px;">
                                <h3 class="h6"
                                    style="margin: 0; flex: 1; text-align: left; color: #333; font-family: Arial, sans-serif;">
                                    My Businesses</h3>
                                <a href="{{ route('business.add') }}" class="btn btn-primary btn-sm"
                                    style="margin: 0; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none; border: none; border-radius: 8px; font-family: Arial, sans-serif;">Add
                                    a business</a>
                            </header>
                        </div>
                        <!-- Settings Card -->
                        <div class="row" style="margin-top: 30px">
                            @foreach ($businesses as $item)
                                <div class="card col-md-6" style="margin-top:30px;">
                                    <!-- Settings Card Head -->
                                    <style>
                                        .jobplugin__settings-card__head {
                                            display: flex;
                                            flex-direction: column;
                                            align-items: flex-start;
                                            border: 1px solid #ccc;
                                            padding: 16px;
                                            border-radius: 8px;
                                            background-color: #f9f9f9;
                                        }

                                        .jobplugin__settings-card__head h3 {
                                            margin: 0 0 8px;
                                        }

                                        .details-section {
                                            margin-top: 8px;
                                            padding-left: 8px;
                                            border: 1px solid #ccc;
                                            border-radius: 8px;
                                            background-color: #f1f1f1;
                                        }
                                    </style>
                                    <header class="jobplugin__settings-card__head">
                                        <h3 class="h6">{{ $item->name }} ({{ $item->license->name }})</h3>
                                        <div>
                                            <span class="btn btn-sm text-success"
                                                style="text-transform: uppercase">BR-NO: {{ $item->reference }}</span>
                                            @if (\Carbon\Carbon::parse($item->renewal_date) >= \Carbon\Carbon::now())
                                                <span class="btn btn-sm text-info">
                                                    Active
                                                @else
                                                    <span class="btn btn-sm text-danger">
                                                        Expired
                                            @endif
                                            </span>
                                            @php
                                                $amount = $item->license->amount + $item->market->attached_value;
                                            @endphp

                                        </div>
                                        <div class="jobplugin__settings-card__buttons ">
                                            <a href="{{ route('business.manage',['reference'=>$item->reference]) }}" class="btn btn-secondary btn-sm"
                                                style="margin: 0; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none; border: none; border-radius: 8px; font-family: Arial, sans-serif;">
                                                Manage Business
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm intaSendPayButton"
                                                style="margin: 0; padding: 5px 10px; background-color: #007bff; color: #fff; text-decoration: none; border: none; border-radius: 8px; font-family: Arial, sans-serif;"
                                                data-amount="{{ $amount }}" data-currency="KES"
                                                    data-email="" data-first_name="{{ Auth::user()->first_name }}"
                                                    data-last_name="{{ Auth::user()->last_name }}"
                                                    data-phone_number="{{ Auth::user()->phone_number }}"
                                                    data-api_ref="{{ $item->reference }}"
                                                    data-country="KE">
                                                @if (\Carbon\Carbon::parse($item->renewal_date) >= \Carbon\Carbon::now())
                                                    Extend
                                                @else
                                                    Renew
                                                @endif
                                                Ksh {{ $amount }}
                                            </a>
                                        </div>
                                    </header>
                                    <section class="details-section">
                                        <p style="margin-top: 8px; margin-bottom:0px">Your license
                                            @if (\Carbon\Carbon::parse($item->renewal_date) >= \Carbon\Carbon::now())
                                                is
                                            @else
                                                was
                                            @endif
                                            valid until the end of
                                            <strong>{{ date('M d, Y', strtotime($item->renewal_date)) }}</strong>.
                                    </section>
                                    <section class="details-section">
                                        <strong>Address</strong>
                                        <p style="margin-bottom: 0px">{{ $item->market->name }},
                                            {{ $item->address }}</p>
                                    </section>
                                    <hr style="margin-top:30px">
                                </div>
                            @endforeach
                        </div>
                    @endif
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
