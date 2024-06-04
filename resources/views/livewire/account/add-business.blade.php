<main class="jobplugin__main">
    @section('title')
        Add Business
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
                        <h2 class="h5">Add Business</h2>
                        <span class="jobplugin__settings-head__bar jobplugin__bg-primary"></span>
                        <p class="jobplugin__settings-head__text">Register your business with Busia Services. Fill the
                            correct details to avoid blacklisting.</p>
                    </div>
                    <!-- Settings Card -->
                    <form wire:submit.prevent='addBusiness'>
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
                                                <p class="jobplugin__settings-card__infolist-label">Business Name</p>
                                                <div class="">
                                                    <input type="text" placeholder="e.g Mcomps Limited"
                                                        wire:model.live='business_name' class="form-control"
                                                        style="border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jobplugin__settings-formrow full">
                                            <div class="jobplugin__settings-formrow__column">
                                                <p class="jobplugin__settings-card__infolist-label">Sub-County</p>
                                                <div class="jobplugin__settings-card__select">
                                                    <select class="form-control" wire:model.live='subcounty'
                                                        style="border-radius: 10px;">
                                                        <option value="Select country">Select Sub-County</option>
                                                        @foreach ($subcounties as $item)
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
                                                <p class="jobplugin__settings-card__infolist-label">Ward</p>
                                                <div class="jobplugin__settings-card__select">
                                                    <select class="form-control" wire:model.live='ward'
                                                        style="border-radius: 10px;">
                                                        <option>Select Ward</option>
                                                        @if ($subcounty)
                                                            @foreach ($wards->where('subcounty_id', $subcounty) as $item)
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
                                                <p class="jobplugin__settings-card__infolist-label">Market</p>
                                                <div class="jobplugin__settings-card__select">
                                                    <select class="form-control" wire:model.live='market'
                                                        style="border-radius: 10px;">
                                                        <option value="Select country">Select Market</option>
                                                        @if ($ward)
                                                            @foreach ($markets->where('ward_id', $ward) as $item)
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
                                                <p class="jobplugin__settings-card__infolist-label">Business Category
                                                </p>
                                                <div class="jobplugin__settings-card__select">
                                                    <select class="form-control" wire:model.live='category'
                                                        style="border-radius: 10px;">
                                                        <option value="Select country">Select Category</option>
                                                        @foreach ($categories as $item)
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
                                                <p class="jobplugin__settings-card__infolist-label">Exact Address</p>
                                                <div class="">
                                                    <input type="text" placeholder="e.g. Opposite Mcomps Limited"
                                                        class="form-control" wire:model.live='address'
                                                        style="border-radius: 10px;">
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
