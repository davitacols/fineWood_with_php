<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <x-profile-update-information-form />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <x-profile-update-password-form />
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <x-profile-two-factor-authentication-form />
        @endif

        <x-profile-logout-other-browser-sessions-form />

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-profile-delete-user-form />
        @endif
    </div>
</x-app-layout>
