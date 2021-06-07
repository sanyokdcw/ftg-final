<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')
      
<section class="url">
  <div class="url__text">Главная</div>
  <div class="url__text">Каталог</div>
  <div class="url__text">{{ $subcategory->name }}</div>
</section>

<section class="card">
  <div class="card__title subtitle">{{ $subcategory->name }}</div>
  <div class="card__wrapper">
    <div class="card__wrapper-top">
      <div class="card__wrapper-number">
        <span>{{ $products->count() }}</span> товаров
      </div>
      <div class="card__wrapper-filter">По увеличению цены</div>
    </div>
    <div class="card__wrapper-bottom">
      @foreach ($products as $product)
      <div class="card__wrapper-item">
        <a href="/product/{{ $product->id }}" class="card__wrapper-img" style="background-image: url(/storage/{{ $product->image }});"></a>
        <div class="card__wrapper-text">
          {{ $product->name }}
        </div>
        <div class="card__wrapper-price"><span>{{ number_format($product->price_kz) }}</span> тг</div>
        <a href="/product/{{ $product->id }}" class="card__wrapper-btn">Подробнее</a>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('layouts.footer')
</html>
