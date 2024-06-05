<main class="jobplugin__main">
    @section('title')
        Parking
    @endsection
    <div class="jobplugin__main-holder">
        <div class="jobplugin__container">
            <!-- Settings Page Title -->
            <h1 class="h3 jobplugin__text-secondary space-bottom">Menu</h1>
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
                    <!-- Settings Content Head -->
                    <div class="jobplugin__settings-head">
                        <h2 class="h5">Parking Manager</h2>
                        <span class="jobplugin__settings-head__bar jobplugin__bg-primary"></span>
                    </div>
                    <!-- Settings Card -->
                    @if ($dailyParking->count() > 0)
                        <div class="jobplugin__settings-card connected-card">
                            <!-- Settings Card Body -->
                            <div class="jobplugin__settings-card__body">
                                <h3 class="h5">Daily Parking</h3>
                                @foreach ($dailyParking as $item)
                                    <div class="jobplugin__settings-card__connected" style="margin-bottom: 15px;">
                                        <div class="jobplugin__settings-card__connected-textbox">
                                            <div class="jobplugin__settings-card__connected-text">
                                                <strong class="jobplugin__settings-card__connected-title">{{ $item->zone->name }},
                                                    {{ $item->vehicleType->name }},
                                                    {{ $item->plate_number }}</strong>
                                                @if (\Carbon\Carbon::parse($item->parking_date >= \Carbon\Carbon::today()))
                                                    <p>Parking will be valid only on
                                                        <strong>{{ date('d M Y', strtotime($item->parking_date)) }}</strong>.
                                                    </p>
                                                @else
                                                    <p>Parking was valid only on
                                                        <strong>{{ date('d M Y', strtotime($item->parking_date)) }}</strong>.
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="jobplugin__settings-card__connected-button">
                                            @if (\Carbon\Carbon::parse($item->parking_date >= \Carbon\Carbon::today()))
                                                @if ($item->status === 'pending')
                                                    <a href="{{ route('daily.parking.pay', ['sticker' => $item->reference]) }}"
                                                        class="button-continue btn-google">
                                                        <span class="btn-text">Pay</span>
                                                    </a>
                                                @else
                                                    <a href="javascript:void(0);" class="button-continue btn-google">
                                                        <span class="btn-text">Download Sticker</span>
                                                    </a>
                                                @endif
                                            @else
                                                <a href="javascript:void(0);" class="button-continue btn-google">
                                                    <span class="btn-text">Renew</span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    {{ $dailyParking->links('pagination::bootstrap-5') }}
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="jobplugin__settings-card connected-card">
                            <!-- Settings Card Body -->
                            <div class="jobplugin__settings-card__body">
                                <h3 class="h5">Daily Parking</h3>
                                <div class="jobplugin__settings-card__connected">
                                    <div class="jobplugin__settings-card__connected-textbox">
                                        <div class="jobplugin__settings-card__connected-text">
                                            <strong class="jobplugin__settings-card__connected-title">No records
                                                found</strong>
                                            <p>You have not applied for this service before.</p>
                                        </div>
                                    </div>
                                    <div class="jobplugin__settings-card__connected-button">
                                        <a href="{{ route('daily.parking') }}" class="button-continue">
                                            <span class="btn-text">Apply Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card connected-card">
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <h3 class="h5">Seasonal Parking</h3>
                            <div class="jobplugin__settings-card__connected">
                                <div class="jobplugin__settings-card__connected-textbox">
                                    <div class="jobplugin__settings-card__connected-text">
                                        <strong class="jobplugin__settings-card__connected-title">No records
                                            found</strong>
                                        <p>You have not applied for this service before.</p>
                                    </div>
                                </div>
                                <div class="jobplugin__settings-card__connected-button">
                                    <a href="javascript:void(0);" class="button-continue">
                                        <span class="btn-text">Apply Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jobplugin__settings-card connected-card">
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <h3 class="h5">Reserved Parking</h3>
                            <div class="jobplugin__settings-card__connected">
                                <div class="jobplugin__settings-card__connected-textbox">
                                    <div class="jobplugin__settings-card__connected-text">
                                        <strong class="jobplugin__settings-card__connected-title">No records
                                            found</strong>
                                        <p>You have not applied for this service before.</p>
                                    </div>
                                </div>
                                <div class="jobplugin__settings-card__connected-button">
                                    <a href="javascript:void(0);" class="button-continue">
                                        <span class="btn-text">Apply Now</span>
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

