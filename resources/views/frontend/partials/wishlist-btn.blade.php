@auth
    @php $isWishlisted = in_array($product->id, $wishlistIds ?? []); @endphp
    <button type="button"
        class="wishlist-btn size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300 transition-colors"
        data-product="{{ $product->id }}"
        aria-label="Ajouter aux favoris">
        <i class="hgi text-xl {{ $isWishlisted ? 'hgi-fill hgi-favourite text-error' : 'hgi-stroke hgi-favourite text-light-secondary-text' }}"></i>
    </button>
@else
    <a href="{{ route('login') }}"
        class="size-11 flex flex-none items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 border border-gray-300"
        title="Connectez-vous pour ajouter aux favoris">
        <i class="hgi hgi-stroke hgi-favourite text-xl text-light-secondary-text"></i>
    </a>
@endauth
