@extends('frontend.layouts.master')
@section('title', 'Edit Address')
@section('content')

<section class="py-16">
  <div class="container mx-auto px-4 max-w-2xl">

    <div class="border border-gray-300 rounded-2xl p-8">
      <h2 class="text-xl font-semibold text-light-primary-text mb-6">Edit Address</h2>

      <form action="{{ route('user.address.update', $address->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Name --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">Full Name <span class="text-error-dark">*</span></label>
          <input type="text" name="name" value="{{ old('name', $address->name) }}"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary"
            placeholder="Your full name">
          <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- Email --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">Email Address <span class="text-error-dark">*</span></label>
          <input type="email" name="email" value="{{ old('email', $address->email) }}"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary"
            placeholder="your@email.com">
          <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- Phone --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">Phone Number <span class="text-error-dark">*</span></label>
          <input type="tel" name="phone" value="{{ old('phone', $address->phone) }}"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary"
            placeholder="+1 234 567 890">
          <x-input-error :messages="$errors->get('phone')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- Country --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">Country <span class="text-error-dark">*</span></label>
          <select name="country"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary bg-white">
            <option value="">Select country</option>
            @forelse (config('settings.country_list') as $country)
              <option value="{{ $country }}" @selected(old('country', $address->country) === $country)>{{ $country }}</option>
            @empty
              <option disabled>No countries available</option>
            @endforelse
          </select>
          <x-input-error :messages="$errors->get('country')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- State --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">State / Province</label>
          <input type="text" name="state" value="{{ old('state', $address->state) }}"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary"
            placeholder="State or province">
          <x-input-error :messages="$errors->get('state')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- City --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">City <span class="text-error-dark">*</span></label>
          <input type="text" name="city" value="{{ old('city', $address->city) }}"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary"
            placeholder="City">
          <x-input-error :messages="$errors->get('city')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- Zip --}}
        <div class="mb-4">
          <label class="block text-sm font-medium text-light-primary-text mb-1">ZIP / Postal Code <span class="text-error-dark">*</span></label>
          <input type="text" name="zip" value="{{ old('zip', $address->zip) }}"
            class="w-full border border-gray-300 rounded-[80px] px-4 py-2.5 text-sm outline-none focus:border-primary"
            placeholder="12345">
          <x-input-error :messages="$errors->get('zip')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- Address --}}
        <div class="mb-6">
          <label class="block text-sm font-medium text-light-primary-text mb-1">Street Address <span class="text-error-dark">*</span></label>
          <textarea name="address" rows="3"
            class="w-full border border-gray-300 rounded-2xl px-4 py-2.5 text-sm outline-none focus:border-primary resize-none"
            placeholder="House number, street name…">{{ old('address', $address->address) }}</textarea>
          <x-input-error :messages="$errors->get('address')" class="mt-1 text-sm text-error-dark" />
        </div>

        {{-- Actions --}}
        <div class="flex items-center gap-3">
          <button type="submit"
            class="btn btn-large btn-primary py-[11px] px-8 text-sm leading-[22px] font-semibold rounded-[80px]">
            Update Address
          </button>
          <a href="{{ route('user.dashboard') }}"
            class="btn btn-large btn-default outline py-[11px] px-8 text-sm leading-[22px] font-semibold rounded-[80px] shadow-none">
            Cancel
          </a>
        </div>

      </form>
    </div>

  </div>
</section>

@endsection
