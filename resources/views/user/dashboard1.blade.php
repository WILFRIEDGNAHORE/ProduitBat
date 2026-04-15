@php
    $user = Auth::user();
    $processingStatuses = ['pending', 'processed_and_ready_to_ship', 'dropped_off'];
    $deliveringStatuses  = ['shipped', 'out_for_delivery'];
    $completedStatuses   = ['delivered'];
@endphp

<!-- ========== Breadcrumb Section Start ========== -->
<div class="container py-12">
  <div class="breadcrumb">
    <ul>
      <li>
        <a href="{{ route('home') }}">
          <span class="inline-flex items-center justify-center">
            <i class="hgi hgi-stroke hgi-home-01 text-2xl leading-6"></i>
          </span>
          Home
        </a>
      </li>
      <li class="text-light-disabled-text">&#8226;</li>
      <li>
        <a class="text-sm! leading-[22px]! text-light-primary-text! font-normal">User Dashboard</a>
      </li>
    </ul>
  </div>
</div>
<!-- ========== Breadcrumb Section End ========== -->

<!-- ========== Alerts ========== -->
@if ($user->role === 'user' && $user->vendor_request == 1 && $user->vendor_status === 'pending' && $user->user_status === 'active')
  <div class="container mb-4">
    <div class="bg-yellow-50 border border-yellow-300 text-yellow-800 rounded-xl px-5 py-3 text-center font-semibold">
      Your vendor request is under review.
    </div>
  </div>
@endif
@if ($user->role === 'user' && $user->vendor_request == 1 && $user->vendor_status === 'rejected')
  <div class="container mb-4">
    <div class="bg-red-50 border border-red-300 text-red-800 rounded-xl px-5 py-3 text-center font-semibold">
      Your vendor request was rejected. Please contact support.
    </div>
  </div>
@endif
@if ($user->role === 'user' && $user->vendor_request == 1 && $user->vendor_status === 'banned')
  <div class="container mb-4">
    <div class="bg-red-50 border border-red-300 text-red-800 rounded-xl px-5 py-3 text-center font-semibold">
      Your vendor account has been banned.
    </div>
  </div>
@endif

<!-- ========== Flash Messages ========== -->
@if (session('success'))
  <div class="container mb-4">
    <div class="bg-green-50 border border-green-300 text-green-800 rounded-xl px-5 py-3 text-center">
      {{ session('success') }}
    </div>
  </div>
@endif

<!-- ========== My Account Section Start ========== -->
<section class="pb-[74px]">
  <div class="container">
    <div class="grid grid-cols-12 lg:gap-x-10 gap-y-6">

      <!-- ========== Sidebar Menu ========== -->
      <div class="xl:col-span-3 lg:col-span-4 col-span-12">
        <div class="sticky top-20">
          <ul class="flex flex-col gap-y-1 border border-gray-300 p-4 rounded-2xl my-account-menu">
            <li class="group">
              <button type="button" data-tab="dashboard"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white active group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300 active">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-dashboard-square-01 text-2xl leading-6 font-normal"></i>
                </span>
                Dashboard
              </button>
            </li>
            <li class="group">
              <button type="button" data-tab="orders"
                class="w-full flex items-center gap-x-4 font-semibold p-4 rounded-lg group-hover:text-white group-hover:bg-primary">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-delete-01 text-2xl leading-6 font-normal"></i>
                </span>
                Orders
                @if($orders->count() > 0)
                  <span class="ml-auto bg-primary text-white text-xs rounded-full px-2 py-0.5">{{ $orders->count() }}</span>
                @endif
              </button>
            </li>
            <li class="group">
              <button type="button" data-tab="address"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-location-01 text-2xl leading-6 font-normal"></i>
                </span>
                My Address
              </button>
            </li>
            <li class="group">
              <button type="button" data-tab="profile"
                class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300">
                <span class="inline-flex items-center justify-center">
                  <i class="hgi hgi-stroke hgi-user text-2xl leading-6 font-normal"></i>
                </span>
                My Account
              </button>
            </li>
            <li class="group">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                  class="w-full flex items-center gap-x-4 font-semibold p-4 group-hover:text-white group-hover:bg-primary rounded-lg transition-colors ease-in-out duration-300">
                  <span class="inline-flex items-center justify-center">
                    <i class="hgi hgi-stroke hgi-login-circle-02 text-2xl leading-6 font-normal"></i>
                  </span>
                  Log Out
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
      <!-- ========== Sidebar Menu End ========== -->

      <!-- ========== Content Area ========== -->
      <div class="xl:col-span-9 lg:col-span-8 col-span-12">
        <div class="my-account-content tab-content">

          <!-- ========== Dashboard Tab ========== -->
          <div class="menu-tab-pane" id="dashboard">
            <h3 class="mb-6">Dashboard</h3>
            <p>
              Hello, <strong>{{ $user->name }}</strong>! From your account dashboard you can easily check &amp; view your
              <a class="text-primary hover:underline" href="#" data-tab-target="orders">recent orders</a>,
              manage your
              <a class="text-primary hover:underline" href="#" data-tab-target="address">shipping and billing addresses</a>
              and
              <a class="text-primary hover:underline" href="#" data-tab-target="profile">edit your password and account details.</a>
            </p>

            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
              <div class="border border-gray-300 rounded-2xl p-4 text-center">
                <p class="text-2xl font-bold text-light-primary-text">{{ $orders->count() }}</p>
                <p class="text-sm text-light-secondary-text mt-1">Total Orders</p>
              </div>
              <div class="border border-gray-300 rounded-2xl p-4 text-center">
                <p class="text-2xl font-bold text-warning-dark">{{ $orders->whereIn('order_status', $processingStatuses)->count() }}</p>
                <p class="text-sm text-light-secondary-text mt-1">Processing</p>
              </div>
              <div class="border border-gray-300 rounded-2xl p-4 text-center">
                <p class="text-2xl font-bold text-success-dark">{{ $orders->whereIn('order_status', $completedStatuses)->count() }}</p>
                <p class="text-sm text-light-secondary-text mt-1">Completed</p>
              </div>
              <div class="border border-gray-300 rounded-2xl p-4 text-center">
                <p class="text-2xl font-bold text-light-primary-text">{{ $addresses->count() }}</p>
                <p class="text-sm text-light-secondary-text mt-1">Addresses</p>
              </div>
            </div>
          </div>
          <!-- ========== Dashboard Tab End ========== -->

          <!-- ========== Orders Tab ========== -->
          <div class="menu-tab-pane hidden" id="orders">
            <div class="flex flex-col gap-y-6 mb-6">
              <h3 class="text-light-primary-text">Orders History</h3>
              <div class="flex gap-x-4 overflow-x-auto order-history-product-filter">
                <button data-tab="all"
                  class="inline-flex items-center justify-center py-2 px-6 text-sm leading-[22px] rounded-[80px] font-medium bg-primary/8 text-primary">
                  All ({{ $orders->count() }})
                </button>
                <button data-tab="processing"
                  class="inline-flex items-center justify-center py-2 px-6 text-sm leading-[22px] rounded-[80px] font-medium text-light-primary-text">
                  Processing ({{ $orders->whereIn('order_status', $processingStatuses)->count() }})
                </button>
                <button data-tab="delivering"
                  class="inline-flex items-center justify-center py-2 px-6 text-sm leading-[22px] rounded-[80px] font-medium text-light-primary-text">
                  Delivering ({{ $orders->whereIn('order_status', $deliveringStatuses)->count() }})
                </button>
                <button data-tab="completed"
                  class="inline-flex items-center justify-center py-2 px-6 text-sm leading-[22px] rounded-[80px] font-medium text-light-primary-text">
                  Completed ({{ $orders->whereIn('order_status', $completedStatuses)->count() }})
                </button>
                <button data-tab="cancelled"
                  class="inline-flex items-center justify-center py-2 px-6 text-sm leading-[22px] rounded-[80px] font-medium text-light-primary-text">
                  Cancelled ({{ $orders->where('order_status', 'canceled')->count() }})
                </button>
              </div>
            </div>

            <div id="order-tab-content">
              <!-- ========== All Tab ========== -->
              <div class="tab-pane" id="all">
                <div class="flex flex-col gap-y-6">
                  @forelse($orders as $order)
                    @include('user.partials.order-card', ['order' => $order])
                  @empty
                    <div class="text-center py-12 text-light-secondary-text">
                      <i class="hgi hgi-stroke hgi-delivery-box-01 text-5xl leading-10 mb-4 block"></i>
                      <p class="text-lg font-semibold">No orders yet</p>
                      <p class="text-sm mt-1">You haven't placed any orders.</p>
                      <a href="{{ route('home') }}" class="btn btn-primary btn-large py-[11px] px-8 rounded-[80px] mt-6 inline-block">
                        Start Shopping
                      </a>
                    </div>
                  @endforelse
                </div>
              </div>
              <!-- ========== All Tab End ========== -->

              <!-- ========== Processing Tab ========== -->
              <div class="tab-pane hidden" id="processing">
                <div class="flex flex-col gap-y-6">
                  @forelse($orders->whereIn('order_status', $processingStatuses) as $order)
                    @include('user.partials.order-card', ['order' => $order])
                  @empty
                    <div class="text-center py-12 text-light-secondary-text">
                      <p class="text-lg font-semibold">No processing orders</p>
                    </div>
                  @endforelse
                </div>
              </div>
              <!-- ========== Processing Tab End ========== -->

              <!-- ========== Delivering Tab ========== -->
              <div class="tab-pane hidden" id="delivering">
                <div class="flex flex-col gap-y-6">
                  @forelse($orders->whereIn('order_status', $deliveringStatuses) as $order)
                    @include('user.partials.order-card', ['order' => $order])
                  @empty
                    <div class="text-center py-12 text-light-secondary-text">
                      <p class="text-lg font-semibold">No orders in delivery</p>
                    </div>
                  @endforelse
                </div>
              </div>
              <!-- ========== Delivering Tab End ========== -->

              <!-- ========== Completed Tab ========== -->
              <div class="tab-pane hidden" id="completed">
                <div class="flex flex-col gap-y-6">
                  @forelse($orders->whereIn('order_status', $completedStatuses) as $order)
                    @include('user.partials.order-card', ['order' => $order])
                  @empty
                    <div class="text-center py-12 text-light-secondary-text">
                      <p class="text-lg font-semibold">No completed orders</p>
                    </div>
                  @endforelse
                </div>
              </div>
              <!-- ========== Completed Tab End ========== -->

              <!-- ========== Cancelled Tab ========== -->
              <div class="tab-pane hidden" id="cancelled">
                <div class="flex flex-col gap-y-6">
                  @forelse($orders->where('order_status', 'canceled') as $order)
                    @include('user.partials.order-card', ['order' => $order])
                  @empty
                    <div class="text-center py-12 text-light-secondary-text">
                      <p class="text-lg font-semibold">No cancelled orders</p>
                    </div>
                  @endforelse
                </div>
              </div>
              <!-- ========== Cancelled Tab End ========== -->
            </div>
          </div>
          <!-- ========== Orders Tab End ========== -->

          <!-- ========== Address Tab ========== -->
          <div class="menu-tab-pane hidden" id="address">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-light-primary-text">My Addresses</h3>
              <button class="btn btn-primary btn-large py-[11px] rounded-[80px] add-new-address-button">
                Add New Address
              </button>
            </div>

            @if($addresses->isEmpty())
              <div class="text-center py-12 text-light-secondary-text border border-gray-300 rounded-2xl">
                <i class="hgi hgi-stroke hgi-location-01 text-5xl leading-10 mb-4 block"></i>
                <p class="text-lg font-semibold">No addresses saved</p>
                <p class="text-sm mt-1">Add your first delivery address.</p>
              </div>
            @else
              <div class="flex flex-col xl:flex-row gap-6 flex-wrap">
                @foreach($addresses as $address)
                  <div class="order-history-table-wrapper border-gray-300 rounded-2xl border overflow-x-auto flex-1 min-w-[280px]">
                    <table class="w-full order-history-table">
                      <thead>
                        <tr class="border-b border-gray-300">
                          <th class="text-left py-4 px-4">
                            <div class="flex items-center justify-between">
                              <p class="lg:text-xl lg:leading-[30px] text-lg leading-7 text-light-primary-text inline-flex items-center gap-x-3">
                                <span class="inline-flex items-center justify-center">
                                  <i class="hgi hgi-stroke hgi-location-06 text-2xl leading-6 font-normal"></i>
                                </span>
                                {{ $address->name }}
                              </p>
                              <div class="flex items-center gap-x-2">
                                <a href="{{ route('user.address.edit', $address->id) }}"
                                  class="btn btn-default btn-small outline rounded-[80px] shadow-none">
                                  <span class="inline-flex items-center justify-center">
                                    <i class="hgi hgi-stroke hgi-edit-02 text-[18px] leading-[18px] text-light-primary-text"></i>
                                  </span>
                                  Edit
                                </a>
                                <form action="{{ route('user.address.destroy', $address->id) }}" method="POST"
                                  onsubmit="return confirm('Delete this address?')">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"
                                    class="btn btn-small btn-error outline rounded-[80px] shadow-none">
                                    <span class="inline-flex items-center justify-center">
                                      <i class="hgi hgi-stroke hgi-delete-01 text-[18px] leading-[18px]"></i>
                                    </span>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="px-4 py-4">
                            <ul class="flex flex-col gap-y-1 text-light-primary-text text-sm">
                              @if($address->address)
                                <li>{{ $address->address }}</li>
                              @endif
                              @if($address->city)
                                <li>{{ $address->city }}@if($address->state), {{ $address->state }}@endif @if($address->zip) {{ $address->zip }}@endif</li>
                              @endif
                              @if($address->country)
                                <li>{{ $address->country }}</li>
                              @endif
                              @if($address->phone)
                                <li class="mt-2 flex items-center gap-x-2">
                                  <i class="hgi hgi-stroke hgi-call text-base"></i>
                                  {{ $address->phone }}
                                </li>
                              @endif
                              @if($address->email)
                                <li class="flex items-center gap-x-2">
                                  <i class="hgi hgi-stroke hgi-mail-01 text-base"></i>
                                  {{ $address->email }}
                                </li>
                              @endif
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                @endforeach
              </div>
            @endif
          </div>
          <!-- ========== Address Tab End ========== -->

          <!-- ========== Add Address Tab ========== -->
          <div class="menu-tab-pane hidden" id="add-address">
            <div class="flex items-center gap-x-6 mb-6">
              <button class="btn btn-default outline size-12 rounded-full shadow-none add-new-address-back-button">
                <i class="hgi hgi-stroke hgi-arrow-left-02 text-2xl leading-6"></i>
              </button>
              <h4 class="text-light-primary-text">Add New Address</h4>
            </div>
            <!-- Shipping Address Form -->
            <div class="border border-gray-300 rounded-2xl">
              <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                <h5 class="text-light-primary-text">Shipping Address</h5>
              </div>
              <div class="px-6 py-6">
                <form action="{{ route('user.address.store') }}" method="POST" class="flex flex-col gap-y-6">
                  @csrf
                  <div class="grid xl:grid-cols-12 lg:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6 w-full">
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6">
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="text" id="add_name" name="name" value="{{ old('name') }}"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Full Name" />
                          <label for="add_name"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Full Name *
                          </label>
                          <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500 text-xs px-2" />
                        </div>
                      </div>
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="email" id="add_email" name="email" value="{{ old('email') }}"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Email" />
                          <label for="add_email"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Email Address *
                          </label>
                          <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-xs px-2" />
                        </div>
                      </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-4 gap-y-6 w-full col-span-6">
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full">
                          <input type="tel" id="add_phone" name="phone" value="{{ old('phone') }}"
                            class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                            placeholder="Phone Number" />
                          <label for="add_phone"
                            class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                            Phone Number *
                          </label>
                          <x-input-error :messages="$errors->get('phone')" class="mt-1 text-red-500 text-xs px-2" />
                        </div>
                      </div>
                      <div class="md:col-span-6 col-span-12">
                        <div class="relative w-full h-full">
                          <select name="country" id="add_country" class="address-select label w-full">
                            <option value="">Select Country</option>
                            @foreach(config('settings.country_list', []) as $country)
                              <option value="{{ $country }}" @selected(old('country') === $country)>{{ $country }}</option>
                            @endforeach
                          </select>
                          <label for="add_country" class="nice-select-label">Country / Region *</label>
                          <x-input-error :messages="$errors->get('country')" class="mt-1 text-red-500 text-xs px-2" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="grid xl:grid-cols-12 lg:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6 w-full">
                    <div class="col-span-4">
                      <div class="relative w-full">
                        <input type="text" id="add_state" name="state" value="{{ old('state') }}"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="State" />
                        <label for="add_state"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          State
                        </label>
                      </div>
                    </div>
                    <div class="col-span-4">
                      <div class="relative w-full">
                        <input type="text" id="add_city" name="city" value="{{ old('city') }}"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="City" />
                        <label for="add_city"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          City *
                        </label>
                        <x-input-error :messages="$errors->get('city')" class="mt-1 text-red-500 text-xs px-2" />
                      </div>
                    </div>
                    <div class="col-span-4">
                      <div class="relative w-full">
                        <input type="tel" id="add_zip" name="zip" value="{{ old('zip') }}"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:outline-none"
                          placeholder="Zip Code" />
                        <label for="add_zip"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          Zip Code *
                        </label>
                        <x-input-error :messages="$errors->get('zip')" class="mt-1 text-red-500 text-xs px-2" />
                      </div>
                    </div>
                  </div>

                  <div class="relative w-full">
                    <textarea id="add_address" name="address" rows="3"
                      class="form-control peer input-group medium rounded-[20px] ps-4 pe-6 resize-none placeholder-transparent focus:placeholder-transparent focus:outline-none"
                      placeholder="Full address, apartment, suite...">{{ old('address') }}</textarea>
                    <label for="add_address"
                      class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-6 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                      Full Address *
                    </label>
                    <x-input-error :messages="$errors->get('address')" class="mt-1 text-red-500 text-xs px-2" />
                  </div>

                  <div class="flex items-center md:justify-end gap-x-6">
                    <button type="button"
                      class="btn btn-default outline btn-large md:px-[33px] w-[45%] md:w-auto py-2.5 rounded-[100px] shadow-none add-new-address-back-button">
                      Cancel
                    </button>
                    <button type="submit"
                      class="btn btn-primary btn-large md:px-[41px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                      Save Address
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- ========== Add Address Tab End ========== -->

          <!-- ========== Profile/My Account Tab ========== -->
          <div class="menu-tab-pane hidden" id="profile">
            <div class="flex flex-col gap-y-6">
              <div class="mb-2">
                <h3 class="text-light-primary-text">My Account</h3>
              </div>

              <!-- Personal Information -->
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5 class="text-light-primary-text">Personal Information</h5>
                </div>
                <div class="px-6 py-6">
                  <form action="{{ route('user.profile.update', $user->id) }}" method="POST"
                    enctype="multipart/form-data" class="flex flex-col gap-y-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="update_type" value="profile_update">

                    <!-- Avatar Upload -->
                    <div class="flex items-center gap-x-6">
                      <div class="w-[100px] h-[100px] rounded-full overflow-hidden bg-gray-200 border-2 border-dashed border-gray-300 flex-shrink-0">
                        @if($user->image)
                          <img src="{{ asset($user->image) }}" alt="{{ $user->name }}"
                            class="w-full h-full object-cover" id="avatar-preview" />
                        @else
                          <div class="w-full h-full flex items-center justify-center bg-[#F4F5F6]" id="avatar-placeholder">
                            <i class="hgi hgi-stroke hgi-user text-3xl text-gray-400"></i>
                          </div>
                          <img src="" alt="" class="w-full h-full object-cover hidden" id="avatar-preview" />
                        @endif
                      </div>
                      <div>
                        <label class="btn btn-default outline btn-large rounded-[80px] shadow-none cursor-pointer">
                          <i class="hgi hgi-stroke hgi-upload-04 mr-2"></i>
                          Upload Photo
                          <input type="file" name="image" class="hidden" id="avatar-input"
                            accept="image/jpeg,image/png,image/webp,image/gif"
                            onchange="previewAvatar(event)" />
                        </label>
                        <p class="text-xs text-light-secondary-text mt-2">JPG, PNG, WEBP. Max 2MB.</p>
                      </div>
                    </div>

                    <div class="grid xl:grid-cols-2 md:grid-cols-2 grid-cols-1 md:gap-x-4 gap-x-0 gap-y-6">
                      <div class="relative w-full">
                        <input type="text" id="profile_name" name="name"
                          value="{{ old('name', $user->name) }}"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Full Name" />
                        <label for="profile_name"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          Full Name *
                        </label>
                        <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500 text-xs px-2" />
                      </div>
                      <div class="relative w-full">
                        <input type="email" id="profile_email" name="email"
                          value="{{ old('email', $user->email) }}"
                          class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                          placeholder="Email Address" />
                        <label for="profile_email"
                          class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                          Email Address *
                        </label>
                        <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-xs px-2" />
                      </div>
                    </div>

                    <div class="text-end">
                      <button type="submit"
                        class="btn btn-primary btn-large md:px-[42px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                        Save Changes
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Password Change -->
              <div class="border border-gray-300 rounded-2xl">
                <div class="py-4 px-6 bg-gray-200 rounded-t-2xl">
                  <h5 class="text-light-primary-text">Password Change</h5>
                </div>
                <div class="px-6 py-6">
                  <form action="{{ route('user.profile.update', $user->id) }}" method="POST"
                    class="flex flex-col gap-y-6">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="update_type" value="password_update">

                    <div class="relative w-full">
                      <input type="password" id="current_password" name="current_password"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Current Password" />
                      <label for="current_password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Current Password *
                      </label>
                      <x-input-error :messages="$errors->get('current_password')" class="mt-1 text-red-500 text-xs px-2" />
                    </div>

                    <div class="relative w-full">
                      <input type="password" id="new_password" name="password"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="New Password" />
                      <label for="new_password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        New Password *
                      </label>
                      <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-xs px-2" />
                    </div>

                    <div class="relative w-full">
                      <input type="password" id="confirm_new_password" name="password_confirmation"
                        class="peer form-control input-group medium rounded-[80px] px-3.5 placeholder-transparent focus:placeholder-transparent focus:outline-none"
                        placeholder="Confirm New Password" />
                      <label for="confirm_new_password"
                        class="absolute left-[14px] top-1/2 -translate-y-1/2 text-xs leading-[18px] transition-all peer-placeholder-shown:text-light-disabled-text peer-focus:text-light-disabled-text peer-placeholder-shown:text-[16px] peer-placeholder-shown:top-1/2 peer-focus:text-[12px] peer-focus:top-0 peer-[:not(:placeholder-shown)]:text-[12px] peer-[:not(:placeholder-shown)]:top-0 bg-white peer-focus:px-1 peer-[:not(:placeholder-shown)]:px-1">
                        Confirm New Password *
                      </label>
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-500 text-xs px-2" />
                    </div>

                    <div class="text-end">
                      <button type="submit"
                        class="btn btn-primary btn-large md:px-[22px] w-[45%] md:w-auto py-[11px] rounded-[100px]">
                        Update Password
                      </button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
          <!-- ========== Profile Tab End ========== -->

        </div>
      </div>
      <!-- ========== Content Area End ========== -->

    </div>
  </div>
</section>
<!-- ========== My Account Section End ========== -->

<script>
  function previewAvatar(event) {
    const file = event.target.files[0];
    if (!file) return;
    const preview = document.getElementById('avatar-preview');
    const placeholder = document.getElementById('avatar-placeholder');
    preview.src = URL.createObjectURL(file);
    preview.classList.remove('hidden');
    if (placeholder) placeholder.classList.add('hidden');
  }
</script>
