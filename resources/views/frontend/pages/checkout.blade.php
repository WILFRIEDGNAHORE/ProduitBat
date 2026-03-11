@extends('frontend.layouts.master')
@section('content')

<!-- ========== Breadcrumb Section Start ========== -->
<div class="container py-12">
  <div class="breadcrumb">
    <ul>
      <li>
        <a href='{{ url('/') }}'>
          <span class="inline-flex items-center justify-center">
            <i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i></span
          >Home</a
        >
      </li>
      <li class="text-light-disabled-text">&#8226;</li>
      <li><span class="text-sm leading-[22px]">Checkout</span></li>
    </ul>
  </div>
</div>
<!-- ========== Breadcrumb Section End ========== -->

<!-- ========== PAYMENT Section Start ========== -->
<div class="pb-[70px]">
  <div class="container">
    <div class="grid grid-cols-12 gap-x-6 gap-y-6">

      <!-- Address part -->
      <div class="xl:col-span-8 col-span-12">
        <div class="flex flex-col gap-y-6">

          <!-- Address -->
          <div class="border border-gray-300 rounded-2xl">
            <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
              <div class="flex items-center justify-between">
                <h5>Address</h5>
                <a href="#"
  onclick="document.getElementById('exampleModal').classList.remove('hidden');document.getElementById('exampleModal').classList.add('flex');"
  class="text-primary hover:underline font-semibold leading-[26px]">
  Add New Address
</a>
              </div>
            </div>

            <div class="md:px-6 px-3 py-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @forelse ($addresses as $address)
                <div class="border border-gray-300 rounded-xl">
                  <div class="flex items-center justify-between border-b border-gray-300 p-4">
                    <h5>{{ $address->name }}</h5>
                    <label class="flex items-center gap-x-2 cursor-pointer btn btn-default btn-small outline shadow-none rounded-[80px]">
                      <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-edit-02 text-[18px] leading-[18px] text-light-primary-text"></i>
                      </span>
                      <input class="form-check-input shipping_address_id sr-only"
                        data-id="{{ $address->id }}"
                        type="radio"
                        name="flexRadioDefault"
                        id="{{ $address->id }}">
                      Select
                    </label>
                  </div>
                  <ul class="p-4 flex flex-col gap-y-5 overflow-x-auto">
                    <li class="flex items-center gap-x-3 text-light-primary-text">
                      <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-user-square text-2xl leading-6"></i>
                      </span>
                      {{ $address->name }}
                    </li>
                    <li class="flex items-center gap-x-3 text-light-primary-text">
                      <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-call text-2xl leading-6"></i>
                      </span>
                      {{ $address->phone }}
                    </li>
                    <li class="flex items-center gap-x-3 text-light-primary-text">
                      <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-mail-01 text-2xl leading-6"></i>
                      </span>
                      {{ $address->email }}
                    </li>
                    <li class="flex items-center gap-x-3 text-light-primary-text">
                      <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-location-06 text-2xl leading-6"></i>
                      </span>
                      {{ $address->address }}, {{ $address->city }}, {{ $address->zip }}, {{ $address->country }}
                    </li>
                    <li class="flex items-center gap-x-3 text-light-primary-text">
                      <span class="inline-flex items-center justify-center">
                        <i class="hgi hgi-stroke hgi-cargo-ship text-2xl leading-6"></i>
                      </span>
                      Flat Rate Shipment
                    </li>
                  </ul>
                </div>
                @empty
                  <p>No Address Available</p>
                @endforelse
              </div>
            </div>
          </div>

          <!-- Shipping Methods -->
          <div class="border border-gray-300 rounded-2xl">
            <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
              <h5>Shipping Methods</h5>
            </div>
            <div class="md:px-6 px-3 py-6">
              <div class="payment-methods flex flex-col gap-y-6">
                @forelse ($rules as $rule)
                  @if ($rule->type === 'free_above' && getSubTotal() >= $rule->free_above)
                  <div class="border border-gray-300 w-full payment-method px-3 py-4">
                    <div>
                      <label class="flex items-center gap-x-2 cursor-pointer">
                        <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio"
                              name="exampleRadios"
                              id="{{ $rule->id }}"
                              value="{{ $rule->id }}"
                              data-id="{{ $rule->cost }}"
                              class="shipping_rule_id peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />
                            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>
                        <span class="text-light-primary-text">
                          {{ $rule->name }}
                          <span>(+{{ $settings->currency_icon }}{{ $rule->cost }})</span>
                        </span>
                      </label>
                    </div>
                  </div>
                  @elseif ($rule->type === 'flat_rate')
                  <div class="border border-gray-300 w-full payment-method px-3 py-4">
                    <div>
                      <label class="flex items-center gap-x-2 cursor-pointer">
                        <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                          <span class="relative inline-flex w-5 h-5 items-center justify-center">
                            <input type="radio"
                              name="exampleRadios"
                              id="{{ $rule->id }}"
                              value="{{ $rule->id }}"
                              data-id="{{ $rule->cost }}"
                              class="shipping_rule_id peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />
                            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                          </span>
                        </span>
                        <span class="text-light-primary-text">
                          {{ $rule->name }}
                          <span>(+{{ $settings->currency_icon }}{{ $rule->cost }})</span>
                        </span>
                      </label>
                    </div>
                  </div>
                  @endif
                @empty
                  <p>No Shipping Method Available</p>
                @endforelse
              </div>
            </div>
          </div>

          <!-- Payment -->
          <div class="border border-gray-300 rounded-2xl">
            <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
              <h5>Payment</h5>
            </div>
            <div class="md:px-6 px-3 py-6">
              <div class="payment-methods flex flex-col gap-y-6">
                <div class="border border-gray-300 w-full payment-method px-3 py-4">
                  <div>
                    <label class="flex items-center gap-x-2 cursor-pointer">
                      <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                        <span class="relative inline-flex w-5 h-5 items-center justify-center">
                          <input checked type="radio" name="payment-method"
                            class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />
                          <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                        </span>
                      </span>
                      <span class="text-light-primary-text">Bank Transfer</span>
                    </label>
                  </div>
                  <div class="payment-content pt-4 pl-2">
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                  </div>
                </div>
                <div class="border border-gray-300 w-full payment-method px-3 py-4">
                  <div>
                    <label class="flex items-center gap-x-2 cursor-pointer">
                      <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                        <span class="relative inline-flex w-5 h-5 items-center justify-center">
                          <input type="radio" name="payment-method"
                            class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />
                          <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                        </span>
                      </span>
                      <span class="text-light-primary-text">Cash on Delivery</span>
                    </label>
                  </div>
                  <div class="payment-content pt-4 pl-2">Pay with cash upon delivery.</div>
                </div>
                <div class="border border-gray-300 w-full payment-method px-3 py-4">
                  <div>
                    <label class="flex items-center gap-x-2 cursor-pointer">
                      <span class="has-[input:checked]:hover:bg-[#00AB55]/8 flex items-center justify-center w-9 h-9 bg-transparent rounded-full hover:bg-[#919EAB]/8 transition-colors duration-300 ease-in-out">
                        <span class="relative inline-flex w-5 h-5 items-center justify-center">
                          <input type="radio" name="payment-method"
                            class="peer appearance-none w-full h-full border-2 focus:outline-none checked:border-primary border-gray-300 rounded-full bg-white transition-all" />
                          <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2 h-2 rounded-full bg-primary opacity-0 scale-0 peer-checked:opacity-100 peer-checked:scale-100 transition-all"></span>
                        </span>
                      </span>
                      <span class="text-light-primary-text">Check Payment</span>
                    </label>
                  </div>
                  <div class="payment-content pt-4 pl-2">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Cart items part -->
      <div class="xl:col-span-4 col-span-12">
        <div class="border border-gray-300 rounded-2xl md:px-6 md:py-6 px-3 py-4 flex flex-col gap-y-6 sticky top-5">

          <h5 class="text-light-primary-text">Cart Items</h5>

          <div class="border border-gray-300 rounded-xl overflow-x-auto">
            <table class="w-full cart-items-table">
              <tbody class="space-y-6">
                @forelse ($cartItems as $item)
                <tr>
                  <td class="py-4 px-4 product-thumbnail">
                    <div class="w-[60px] h-[60px] rounded-xl bg-[#F4F3F5] overflow-hidden">
                      <img src="{{ $item->options->image }}" alt="{{ $item->name }}"
                        class="w-full h-full object-cover rounded-xl" />
                    </div>
                  </td>
                  <td class="py-4 md:pr-4 pr-2 align-bottom w-full">
                    <div class="flex flex-col gap-y-2">
                      <a class='text-light-primary-text font-semibold truncate hover:text-primary transition-colors duration-300 product-title'
                        href='{{ route("product-details.show", $item->id) }}'>
                        {{ $item->name }}
                      </a>
                      <div class="flex items-center justify-between">
                        <p class="text-sm leading-[22px] font-normal text-light-secondary-text cart-item-quantity">
                          {{ $item->qty }} x
                          @forelse ($item->options->variants as $key => $variant)
                            {{ $variant['name'] }}
                          @empty
                            {{ $item->name }}
                          @endforelse
                        </p>
                        <div class="flex items-center gap-x-1.5">
                          <span class="line-through text-light-disabled-text font-normal product-total-price">
                            {{ $settings->currency_icon }}{{ $item->price }}
                          </span>
                          <span class="text-primary font-semibold product-offer-price">
                            {{ $settings->currency_icon }}{{ ($item->price + $item->options->variantsTotal) * $item->qty }}
                          </span>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="2">Cart is empty</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>

          <!-- order-summary -->
          <div class="bg-gray-100 md:px-6 px-4 py-6 rounded-2xl">
            <div class="flex flex-col gap-y-6">
              <h5>Order Summary</h5>
              <div>
                <div class="flex flex-col gap-y-4 pb-4 border-b border-gray-300">
                  <p class="flex items-center justify-between">
                    Sub-Total<span class="text-gray-900">{{ $settings->currency_icon }}{{ getSubTotal() }}</span>
                  </p>
                  <p class="flex items-center justify-between">
                    Discount<span class="text-gray-900">(-) {{ $settings->currency_icon }}{{ discount() }}</span>
                  </p>
                  <p class="flex items-center justify-between">
                    Shipment<span class="text-gray-900 shipping_fee">(+){{ $settings->currency_icon }}0</span>
                  </p>
                </div>
                <h6 class="flex items-center justify-between text-light-primary-text pt-4">
                  Total<span class="text-gray-900 total_cost final_cost" data-id="{{ mainCartTotal() }}">{{ $settings->currency_icon }}{{ mainCartTotal() }}</span>
                </h6>
              </div>
            </div>
          </div>

          <div>
            <form action="">
              <input type="hidden" id="shipping_rule_id" name="shipping_rule_id" value="">
              <input type="hidden" id="shipping_address_id" name="shipping_address_id" value="">
              <a class='btn btn-primary py-3 rounded-[80px] w-full' href='#'>
                Place Order
              </a>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- ========== PAYMENT Section End ========== -->

<!-- Modal Add Address -->
<!-- Modal Add Address -->
<div id="exampleModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
  <div class="bg-white rounded-2xl w-full max-w-lg mx-4 max-h-[90vh] overflow-y-auto">
    <div class="flex items-center justify-between p-4 border-b border-gray-300">
      <h5 class="font-semibold">Add New Address</h5>
      <button onclick="document.getElementById('exampleModal').classList.add('hidden');document.getElementById('exampleModal').classList.remove('flex');"
        class="inline-flex items-center justify-center w-8 h-8 rounded-full hover:bg-gray-100">
        <i class="hgi hgi-stroke hgi-cancel-01 text-xl"></i>
      </button>
    </div>
    <form action="{{ route('user.address.store') }}" method="POST">
      @csrf
      <input type="hidden" name="checkout" value="checkout">
      <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
              class="form-control input-group medium rounded-[80px] px-3.5 w-full">
            @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div>
            <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}"
              class="form-control input-group medium rounded-[80px] px-3.5 w-full">
            @error('email')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div>
            <input type="tel" placeholder="Contact" name="phone" value="{{ old('phone') }}"
              class="form-control input-group medium rounded-[80px] px-3.5 w-full">
            @error('phone')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div>
            <select name="country" class="form-control input-group medium rounded-[80px] px-3.5 w-full">
              <option value="">Country</option>
              @forelse (config('settings.country_list') as $country)
                <option value="{{ $country }}">{{ $country }}</option>
              @empty
              @endforelse
            </select>
            @error('country')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div>
            <input type="text" placeholder="State" name="state" value="{{ old('state') }}"
              class="form-control input-group medium rounded-[80px] px-3.5 w-full">
            @error('state')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div>
            <input type="text" placeholder="City" name="city" value="{{ old('city') }}"
              class="form-control input-group medium rounded-[80px] px-3.5 w-full">
            @error('city')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div class="md:col-span-2">
            <input type="text" placeholder="Zip" name="zip" value="{{ old('zip') }}"
              class="form-control input-group medium rounded-[80px] px-3.5 w-full">
            @error('zip')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div class="md:col-span-2">
            <textarea name="address" class="summernote w-full">{{ old('address') }}</textarea>
            @error('address')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
          </div>
          <div class="md:col-span-2">
            <button type="submit" class="btn btn-primary py-3 rounded-[80px] w-full">Save changes</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@push('scripts')
<script>
    $('.summernote').summernote({
        height: 150,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']]
        ]
    });
</script>
@endpush

