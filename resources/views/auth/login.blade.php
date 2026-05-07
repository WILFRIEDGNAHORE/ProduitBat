@extends('frontend.layouts.master')

@section('title', 'Connexion')

@section('content')

<section class="py-16 bg-gray-50 min-h-[70vh] flex items-center">
    <div class="container">
        <div class="max-w-md mx-auto">

            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8">

                {{-- Header --}}
                <div class="text-center mb-8">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend/assets/images/logo.avif') }}" alt="Logo" class="h-10 mx-auto mb-4">
                    </a>
                    <h2 class="text-2xl font-bold font-dm-sans text-light-primary-text">Connexion</h2>
                    <p class="text-sm text-light-secondary-text mt-1">Accédez à votre compte</p>
                </div>

                {{-- Session status --}}
                @if(session('status'))
                    <div class="mb-4 px-4 py-3 bg-primary-lighter text-primary rounded-xl text-sm">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-y-5">
                    @csrf

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-light-primary-text mb-1.5">
                            Adresse e-mail
                        </label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-colors @error('email') border-error @enderror"
                            placeholder="votre@email.com"
                        />
                        @error('email')
                            <p class="mt-1.5 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="text-sm font-medium text-light-primary-text">
                                Mot de passe
                            </label>
                            @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs text-primary hover:underline">
                                    Mot de passe oublié ?
                                </a>
                            @endif
                        </div>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-colors @error('password') border-error @enderror"
                            placeholder="••••••••"
                        />
                        @error('password')
                            <p class="mt-1.5 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Remember me --}}
                    <label class="flex items-center gap-x-2 cursor-pointer">
                        <span class="relative inline-flex w-5 h-5 items-center justify-center flex-none">
                            <input
                                type="checkbox"
                                name="remember"
                                class="peer appearance-none w-full h-full border-2 border-gray-300 rounded-sm checked:bg-primary checked:border-none focus:outline-none transition-all"
                            />
                            <span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">
                                <i class="hgi hgi-stroke hgi-tick-02 text-[14px]"></i>
                            </span>
                        </span>
                        <span class="text-sm text-light-secondary-text">Se souvenir de moi</span>
                    </label>

                    {{-- Submit --}}
                    <button type="submit" class="btn btn-primary rounded-full py-3 w-full font-semibold text-sm">
                        Se connecter
                    </button>

                </form>

                {{-- Register link --}}
                <p class="text-center text-sm text-light-secondary-text mt-6">
                    Pas encore de compte ?
                    <a href="{{ route('register') }}" class="text-primary font-semibold hover:underline">
                        S'inscrire
                    </a>
                </p>

            </div>
        </div>
    </div>
</section>

@endsection
