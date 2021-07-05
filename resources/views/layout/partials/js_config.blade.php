<?php

$data = [
    'csrf'               => csrf_token(),
    'uploadFile'         => auth()->check() ? route('api.files.upload') : '',
    'removeFile'         => auth()->check() ? route('api.files.delete') : '',
    'cart'               => route('frontend.client.cart.index'),
    'addToCart'          => route('frontend.client.cart.store'),
    'addToCustomRequest' => route('frontend.client.requests.add'),
    'login'              => route('auth.login.form', 'client')
];

if (auth('vendors-web')->check()) {
    $data['store_product'] = route('frontend.vendor.product.store');
    $data['update_product'] = route('frontend.vendor.product.update', '%id%');
    $data['store_ad'] = route('frontend.vendor.ads.store');
    $data['update_ad'] = route('frontend.vendor.ads.update', '%id%');
    $data['payment_ad'] = route('frontend.vendor.ads.payment', '%id%');
}

if (auth('clients-web')->check()) {
    $data['store_address'] = route('frontend.client.address.store');
    $data['update_address'] = route('frontend.client.address.update', '%id%');
    $data['delete_address'] = route('frontend.client.address.destroy', '%id%');
    $data['default_address'] = route('frontend.client.address.setDefault', '%id%');
    $data['get_cities'] = route('api.getCities');
    $data['store_order'] = route('frontend.client.orders.store');
    $data['addToPriceList'] = route('frontend.client.priceList.store');
    $data['addToCatalog'] = route('frontend.client.catalog.store');
    $data['changeCartQuantity'] = route('frontend.client.cart.changeQuantity');
    $data['deleteCartItem'] = route('frontend.client.cart.destroy', '%id%');
    $data['addToFavourite'] = route('frontend.client.favourite.toggle');
    $data['customRequest'] = route('frontend.client.requests.index');
}
?>

<script>
    window.laravel = @json($data)
</script>
