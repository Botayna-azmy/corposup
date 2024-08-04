<x-guest-layout>
    <div class="sm:rounded-lg flex h-screen">
        <!-- Image -->
        <div class="w-full sm:w-2/5 h-screen py-2">
            <img src="{{ asset('images/image.png') }}" alt="Login Image" class="object-cover w-full h-full rounded">
        </div>
        
        <!-- Form -->
        <div class="w-full  flex flex-col justify-between">
            <!-- Sign in Link -->
            <div class="flex justify-end p-4">
                
                <a class="text-xl text-gray-600 hover:text-gray-900  pt-10 pr-6 pb-0 " href="{{ route('login') }}">
                    {{ __('Already registered? ') }}<span class="text-blue-500">Sign in</span>
                </a>
            </div>

            <!-- Login Form -->
               
            <div class="flex flex-grow items-center justify-center px-4 sm:px-8">
                
                <!-- Formulaire -->
            <div class="w-full sm:w-1/2 pr-4">
               
                <div class="pt-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <h1 class="font-black text-4xl py-6 text-center text-gray-900">Create Account</h1>
                    </div>
                    <!-- Nom -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" class="text-lg font-semibold" />
                        <x-text-input id="name" class="block mt-1 w-full text-base" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Adresse e-mail -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" class="text-lg font-semibold" />
                        <x-text-input id="email" class="block mt-1 w-full text-base" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Mot de passe -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-lg font-semibold" />
                        <x-text-input id="password" class="block mt-1 w-full text-base" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirmer le mot de passe -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-lg font-semibold" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full text-base" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Rôle -->
                    <div class="mt-4">
                        <x-input-label for="role" :value="__('You are here as ')" class="text-lg font-semibold" />
                        <div class="flex flex-wrap gap-4 justify-center">
                            <div class="flex items-center gap-2">
                                <input id="buyer" type="radio" name="role" value="buyer" class="mr-2" required checked>
                                <label for="buyer">{{ __('Buyer') }}</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input id="seller" type="radio" name="role" value="seller" class="mr-2" required>
                                <label for="seller">{{ __('Seller') }}</label>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>

                    <!-- Boutons -->
                    <div class="flex items-center justify-start mt-4">
                        
                        <x-primary-button class="bg-orange-500 w-full py-4  hover:bg-orange-700 text-white font-bold  rounded focus:outline-none focus:shadow-outline mt-4">
                        {{ __('Sign Up') }}
                    </x-primary-button>
                    </div>
                </form> 
            </div>
            </div>

                    
                    
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
