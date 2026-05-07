@extends('frontend.layouts.master')

@section('title', 'Inscription')

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
                    <h2 class="text-2xl font-bold font-dm-sans text-light-primary-text">Créer un compte</h2>
                    <p class="text-sm text-light-secondary-text mt-1">Rejoignez-nous dès aujourd'hui</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-y-5">
                    @csrf

                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-light-primary-text mb-1.5">
                            Nom complet
                        </label>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-colors @error('name') border-error @enderror"
                            placeholder="Prénom Nom"
                        />
                        @error('name')
                            <p class="mt-1.5 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

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
                        <label for="password" class="block text-sm font-medium text-light-primary-text mb-1.5">
                            Mot de passe
                        </label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-colors @error('password') border-error @enderror"
                            placeholder="Minimum 8 caractères"
                        />
                        @error('password')
                            <p class="mt-1.5 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-light-primary-text mb-1.5">
                            Confirmer le mot de passe
                        </label>
                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm focus:outline-none focus:border-primary transition-colors"
                            placeholder="Répétez votre mot de passe"
                        />
                        @error('password_confirmation')
                            <p class="mt-1.5 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Terms --}}
                    <label class="flex items-start gap-x-2 cursor-pointer">
                        <span class="relative inline-flex w-5 h-5 items-center justify-center flex-none mt-0.5">
                            <input
                                type="checkbox"
                                required
                                class="peer appearance-none w-full h-full border-2 border-gray-300 rounded-sm checked:bg-primary checked:border-none focus:outline-none transition-all"
                            />
                            <span class="absolute inset-0 inline-flex items-center justify-center text-white opacity-0 peer-checked:opacity-100 transition-all">
                                <i class="hgi hgi-stroke hgi-tick-02 text-[14px]"></i>
                            </span>
                        </span>
                        <span class="text-sm text-light-secondary-text leading-5">
                            J'accepte les <a href="#" class="text-primary hover:underline">conditions d'utilisation</a>
                            et la <a href="#" class="text-primary hover:underline">politique de confidentialité</a>
                        </span>
                    </label>

                    {{-- Submit --}}
                    <button type="submit" class="btn btn-primary rounded-full py-3 w-full font-semibold text-sm">
                        Créer mon compte
                    </button>

                </form>

                {{-- Login link --}}
                <p class="text-center text-sm text-light-secondary-text mt-6">
                    Déjà inscrit ?
                    <a href="{{ route('login') }}" class="text-primary font-semibold hover:underline">
                        Se connecter
                    </a>
                </p>

            </div>
        </div>
    </div>
</section>

@endsection
