<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')
      
<section class="url">
  <div class="url__text"><a href="/">Главная</a></div>
  <div class="url__text">{!! App\Models\Category::find($subcategory->category_id)->name !!}</div>
  <div class="url__text">{{ $subcategory->name }}</div>
</section>

<section class="card">
  <div class="card__title subtitle">{{ $subcategory->name }}</div>
  <div class="card__wrapper">
    <div class="card__wrapper-top">
      <div class="card__wrapper-number">
        <span>{{ $products->count() }}</span> товаров
      </div>
      <div class="card__wrapper-filter dropdown">
          <span>
            @if($sort == 'down')
            По уменьшению цены
            @else
            По увеличению цены
            @endif
          </span>
          <div class="dropdown-content">
            @if($sort == 'down')
            <p style="font-size: 14px;">
              <a href="/subcategory/{{ $subcategory->id }}?sort=up">
                По увеличению цены
            </a>
          
            @else 
            <p style="font-size: 14px;">
              <a href="/subcategory/{{ $subcategory->id }}?sort=down">
                По уменьшению цены
            </a>
            
            

            @endif
            </p>
          </div>
      </div>
    </div>
    <div class="card__wrapper-bottom">
      @foreach ($products as $product)
      <div class="card__wrapper-item">
        <a href="/product/{{ $product->id }}" class="card__wrapper-img" style="background-image: url(/storage/{{ $product->image }});"></a>
        <div class="card__wrapper-text">
          {{ $product->name }}
        </div>
        <div class="card__wrapper-price"><span>
          @if (session('currency') == 'KZT')
            {{ number_format($product->price_kz) }}</span> тг
          @elseif(session('currency') == 'UAH')
            {{ number_format($product->price_uah) }}</span> грн
          @elseif(session('currency') == 'RUB')
            {{ number_format($product->price_rub) }}</span> руб
          @endif
        </div>
        <a href="/product/{{ $product->id }}" class="card__wrapper-btn">Подробнее</a>
      </div>
      @endforeach
    </div>
  </div>
</section>
<style>

</style>
@include('layouts.footer')
</html>
