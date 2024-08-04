<x-guest-layout>
    <div class="sm:rounded-lg flex h-screen">
        <!-- Image -->
        <div class="w-full sm:w-2/5 h-screen py-2">
            <img src="{{ asset('images/image.png') }}" alt="Login Image" class="object-cover w-full h-full rounded">
        </div>
        
        <!-- Form -->
        <div class="w-full  flex flex-col justify-between">
            <!-- Sign Up Link -->
            <div class="flex justify-end p-4">
                
                <a class="text-xl text-gray-600 hover:text-gray-900  pt-10 pr-6 pb-0 " href="{{ route('register') }}">
                    {{ __('Already registered? ') }}<span class="text-blue-500">Sign up</span>
                </a>
            </div>

            <!-- Login Form -->
               
               <div class="flex flex-grow items-center justify-center px-4 sm:px-8">
                
                <form method="POST" action="{{ route('login') }}" class="w-full sm:w-3/5 lg:w-2/5 mx-auto">
                    @csrf
                    <!-- Sign In / Sign Up Links -->
                <div class="">
                    <h1 class="font-black text-4xl text-gray-900">Welcome back</h1>
                    <p class="text-gray-400">Welcome back! Please enter your details</p>
                </div>
                    
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Forgot Password and Login Button -->
                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <x-primary-button class="bg-orange-500 w-full py-4  hover:bg-orange-700 text-white font-bold  rounded focus:outline-none focus:shadow-outline mt-4">
                        {{ __('Sign in') }}
                    </x-primary-button>
                    
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
