<main class="jobplugin__main">
    @section('title')
        Transactions
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
                    <!-- Settings Content Head -->
                    <div class="jobplugin__settings-head">
                        <h2 class="h5">Transactions</h2>
                        <span class="jobplugin__settings-head__bar jobplugin__bg-primary"></span>
                    </div>
                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card">
                        <!-- Settings Card Head -->
                        <header class="jobplugin__settings-card__head">
                            <h3 class="h6">All Transactions</h3>
                        </header>
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            @foreach ($transactions as $item)
                                <div class="jobplugin__settings-card__subbox">
                                    <div class="jobplugin__settings-card__subbox-head">
                                        <strong
                                            class="jobplugin__settings-card__subbox-title">[{{ $item->tracking_id }}] :
                                            Business Renewal <span class="text-success">&amp;
                                                {{ $item->api_ref }}</span></strong>
                                    </div>
                                    <!-- Settings Card List -->
                                    <ul class="jobplugin__settings-card__subbox-list">
                                        <li>
                                            @if ($item->state === 'COMPLETE')
                                                <strong class="jobplugin__settings-card__subbox-subtitle">Successfully
                                                    verified on
                                                    {{ date('M d Y h:iA', strtotime($item->created_at)) }}</strong>
                                            @else
                                                <strong class="jobplugin__settings-card__subbox-subtitle">Transaction
                                                    failed on {{ date('M d Y h:iA', strtotime($item->created_at)) }}.
                                                    <b>Reason: </b> {{ $item->failed_reason }}</strong>
                                            @endif

                                        </li>
                                    </ul>
                                </div>
                                {{ $transactions->links('pagination::bootstrap-5') }}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
