Sections créées dans resources/views/frontend/sections/
Fichier	Lignes	Contenu
hero.blade.php	152	Slider / bannières hero
cta-info.blade.php	75	Bandeau info (livraison, support…)
discount-you-love.blade.php	677	Produits en promotion
best-selling-products.blade.php	846	Meilleures ventes
category.blade.php	525	Grille des catégories
top-selling-products.blade.php	828	Top ventes
our-products.blade.php	7952	Tous produits (onglets: All, Medical, First Aid, Diabetic, Herbal, Healthcare)
cta-banner.blade.php	116	Bannière CTA
newly-launched-products.blade.php	766	Nouveaux produits
hot-deals.blade.php	662	Offres spéciales
banner.blade.php	84	Bannière promo
blog.blade.php	284	Articles de blog
subscribe.blade.php	47	Newsletter
home.blade.php réduit à 31 lignes :

@extends('frontend.layouts.master')

@section('content')
    @include('frontend.sections.hero')
    @include('frontend.sections.cta-info')
    ... (13 sections)
@endsection


Résultat du découpage
master.blade.php — 2887 lignes
Contient le squelette HTML complet :

<!DOCTYPE html> + <head> (CSS, fonts, meta)
Preloader, overlay, bouton scroll-to-top
Cart sidebar, sidebars auth (Register, Login, Forgot/Reset password, OTP)
Quick View modal + Size Variation modal
@include('frontend.layouts.mobile-menu')
@include('frontend.layouts.header')
@yield('content') ← emplacement du contenu des pages
@include('frontend.layouts.footer')
Scripts JS + </body></html>
mobile-menu.blade.php — 322 lignes
Le menu sidebar off-canvas (lignes 74–395 de l'original) avec navigation mobile, login/signup et réseaux sociaux.

header.blade.php — 867 lignes
La <header> complète : barre top (infos contact, devise/langue), barre middle (logo, recherche, compte, panier), barre mobile. Inclut @include('frontend.layouts.main-menu').

main-menu.blade.php — 1030 lignes
Le menu de navigation desktop (header-bottom sticky-header) avec le méga-menu catégories.

footer.blade.php — 434 lignes
Le footer complet (liens, newsletter, réseaux sociaux) + la barre de navigation mobile fixe en bas d'écran.

home.blade.php — 13031 lignes
Réduit au contenu de la page uniquement :


@extends('frontend.layouts.master')

@section('content')
    <!-- Hero Section, produits, bannières, FAQ... -->
@endsection