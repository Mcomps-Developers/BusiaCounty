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
                                        <a href="#"
                                            class="jobplugin__button jobplugin__bg-primary small hover:jobplugin__bg-secondary">Top
                                            Up</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Settings Card -->
                    <div class="jobplugin__settings-card">
                        <!-- Settings Card Head -->
                        <header class="jobplugin__settings-card__head">
                            <h3 class="h6">My Businesses</h3>
                            <a href="javascript:void(0);"
                                class="jobplugin__button jobplugin__bg-primary jobplugin__border-primary small hover:jobplugin__bg-white">Add
                                a business</a>
                        </header>
                        <!-- Settings Card Body -->
                        <div class="jobplugin__settings-card__body">
                            <ul class="jobplugin__settings-card__infolist">
                                <li>
                                    <p>You haven't set up any business  yet. Add a business so you can access services when
                                        you're ready.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
