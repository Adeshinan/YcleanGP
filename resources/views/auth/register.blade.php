<x-guest-layout >
    <x-authentication-card >
        <x-slot name="logo" >
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <div class="mb-2">
                <x-label for="name" value="{{ __('Nom et prénoms') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mb-2">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mb-2">
                <x-label for="address" value="{{ __('Addresse') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <div class="mb-2">
                <x-label for="postal" value="{{ __('Code Postal') }}" />
                <x-input id="postal" class="block mt-1 w-full" type="text" name="postal" :value="old('postal')" required />
            </div>

            <div class="mb-2">
                <x-label for="ville" value="{{ __('Ville') }}" />
                <x-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required />
            </div>

            <div class="mb-2">
                <x-label for="numero" value="{{ __('Numero de téléphone') }}" />
                <x-input id="numero" class="block mt-1 w-full" type="text" name="numero" :value="old('numero')" required />
            </div>

            <div class="mb-2">
                <x-label for="sexe" value="{{ __('Sexe') }}" />
                <select id="sexe" name="sexe" class="block mt-1 w-full" required>
                    <option value="" selected>Choisir le sexe</option>
                    <option value="Masculin">Masculin</option>
                    <option value="Féminin">Féminin</option>
                </select>
            </div>

            <div class="col-span-2">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="col-span-2">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="col-span-2">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end col-span-2 mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Déjà inscrit?') }}
                </a>
                <x-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-button>
            </div>
        </form>

    </x-authentication-card>
</x-guest-layout>
