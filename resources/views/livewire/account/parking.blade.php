<main class="jobplugin__main">
    @section('title')
        Daily Parking
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
                        <h2 class="h5">Daily Parking</h2>
                        <span class="jobplugin__settings-head__bar jobplugin__bg-primary"></span>
                        <p class="jobplugin__settings-head__text">Pay for a single day parking.</p>
                    </div>
                    <!-- Settings Card -->
                    <form wire:submit.prevent='addParking'>
                        <div class="jobplugin__settings-card">
                            <!-- Settings Card Body -->
                            <div class="jobplugin__settings-card__body">
                                <!-- Settings Info List -->
                                <ul class="jobplugin__settings-card__infolist">
                                    <li>
                                        <x-validation-errors class="mb-4" style="color: red" />
                                    </li>

                                    <li>
                                        <div class="jobplugin__settings-formrow full">
                                            <div class="jobplugin__settings-formrow__column">
                                                <p class="jobplugin__settings-card__infolist-label">Parking Zone</p>
                                                <div class="jobplugin__settings-card__select">
                                                    <select class="form-control" wire:model.live='parking_zone'
                                                        style="border-radius: 10px;">
                                                        <option value="Select country">Select Zone</option>
                                                        @foreach ($zones as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jobplugin__settings-formrow full">
                                            <div class="jobplugin__settings-formrow__column">
                                                <p class="jobplugin__settings-card__infolist-label">Vehicle Type</p>
                                                <div class="jobplugin__settings-card__select">
                                                    <select class="form-control" wire:model.live='vehicle_type'
                                                        style="border-radius: 10px;">
                                                        <option>Select Type</option>
                                                        @if ($parking_zone)
                                                            @foreach ($vehicleTypes as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jobplugin__settings-formrow full">
                                            <div class="jobplugin__settings-formrow__column">
                                                <p class="jobplugin__settings-card__infolist-label">Vehicle Reg. Number
                                                </p>
                                                <div class="">
                                                    <input type="text" placeholder="e.g. KAA 987H"
                                                        class="form-control"
                                                        wire:model.live='vehicle_registration_number'
                                                        style="border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jobplugin__settings-formrow full">
                                            <div class="jobplugin__settings-formrow__column">
                                                <p class="jobplugin__settings-card__infolist-label">Parking Date</p>
                                                <div class="">
                                                    <input type="date" class="form-control"
                                                        wire:model.live='parking_date' style="border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Settings Card Buttons -->
                                <div class="jobplugin__section-buttons form-buttons">
                                    <button type="submit"
                                        class="jobplugin__button jobplugin__bg-primary hover:jobplugin__bg-secondary"><span
                                            wire:loading.remove>Next</span>
                                        <span wire:loading>Processing...</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
