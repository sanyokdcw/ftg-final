<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@php
  if (session('currency') == null){
    session(['currency' => 'KZT']);
  }
  $currency = session('currency');
@endphp
<section class="url">
  <div class="url__text"><a href="/">Главная</a></div>
  <div class="url__text"><a href="/subcategory/{{ App\Models\Subcategory::find($product->subcategory_id)->id }}">{{ App\Models\Subcategory::find($product->subcategory_id)->name }}</a></div>
  <div class="url__text">{{ $product->name }}</div>
</section>

<section class="card-detail">
  <div class="card-detail__title subtitle">{{ $product->name }}</div>
  <div class="card-detail__wrapper">
    <div class="card-detail__wrapper-left">
      <div class="card-detail__wrapper-left_img">
        <img src="/storage/{{ $product->image }}" alt="" style="width:100%">
      </div>
    </div>
    <div class="card-detail__wrapper-right">
      <div class="card-detail__wrapper-right_info">
        <div class="card-detail__wrapper-right_text">
          <div>Артикул:</div>
          <span>{{ $product->article }}</span>
        </div>
        <div class="card-detail__wrapper-right_text">
          <div>Наличие:</div>
          <span>{{ $product->existence }}</span>
        </div>
      </div>
      <div class="card-detail__wrapper-right_price">
        @if ($currency == 'KZT')
          {{  number_format($product->price_kz,0,","," ") }} тенге
        @elseif($currency == 'UAH')
          {{  number_format($product->price_uah,0,","," ") }} гривен
        @elseif($currency == 'RUB')
          {{  number_format($product->price_ru,0,","," ") }} рублей
        @endif
        
      </div>
      <div class="card-detail__wrapper-right_block">
        <div class="card-detail__wrapper-right_count">
          <button class="card-detail__wrapper-right_minus" onclick="countDecrement()">-</button>
          <div class="card-detail__wrapper-right_number" id="counter">1</div>
          <button class="card-detail__wrapper-right_plus" onclick="countIncrement()">+</button>
        </div>
        <div class="card-detail__wrapper-right_subprice title">
          @if ($currency == 'KZT')
            {{ number_format($product->price_kz,0,","," ") }} тг
          @elseif($currency == 'UAH')
            {{ number_format($product->price_uah,0,","," ") }} грн
          @elseif($currency == 'RUB')
            {{  number_format($product->price_ru,0,","," ") }} руб
          @endif
        </div>
        <form action="/cart-add" method="POST">
          @csrf
          <input type="hidden" name="quantity" id="quantity" value="1">
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button class="card-detail__wrapper-right_btn" type="submit">заказать</button>
        </form>
      </div>
      <div class="card-detail__wrapper-right_consultation">
        <div class="card-detail__wrapper-right_phone">
          <input type="phone" name="phone">
        </div>
<form action="/request" method="POST">
	@csrf        
<button type="submit" class="card-detail__wrapper-right_order">Заказать консультацию</button>
</form>      </div>
    </div>
  </div>
</section>

<section class="specifications">
  <div class="specifications__top">
    <div class="specifications__top-item">
      Описание
    </div>
    <div class="specifications__top-item">
      Характеристики
    </div>
    <div class="specifications__top-item">
      Документация
    </div>
  </div>
  <div class="specifications__bottom">
    <div class="specifications__bottom-item">
    {!! strip_tags($product->description) !!}
    </div>
  </div>
</section>

<section class="help">
  <div class="help__wrapper">
    <div class="help__wrapper-left">
      <img src="../images/help-bg.png" alt="">
    </div>
    <div class="help__wrapper-right">
      <div class="help__wrapper-title">Помощник при выборе систем</div>
      <div class="help__wrapper-text">Мы обязательно Вам поможем!</div>
      <a href="/product" class="help__wrapper-btn">Подобрать СИСТЕМУ</a>
    </div>
  </div>
</section>

<section class="popular">
  <div class="popular__title subtitle">Популярные товары</div>
  <div class="popular__wrapper">
    @foreach ($products as $product)
    <div class="card__wrapper-item">
      <div class="card__wrapper-img" style="background-image: url(/storage/{{ $product->image }});"></div>
      <div class="card__wrapper-text">
        {{ $product->name }}
      </div>
      @if ($currency == 'KZT')
        <div class="card__wrapper-price"><span>{{ number_format($product->price_kz,0,","," ") }}</span> тг</div>
      @elseif($currency == 'UAH')
        <div class="card__wrapper-price"><span>{{ number_format($product->price_uah,0,","," ") }}</span> грн</div>
      @elseif($currency == 'RUB')
        <div class="card__wrapper-price"><span>{{ number_format($product->price_rub,0,","," ") }}</span> руб</div>
      @endif
      <a href="/product/{{ $product->id }}" class="card__wrapper-btn">Подробнее</a>
    </div>
    @endforeach
  </div>
</section>
<script>
function countIncrement() {
  let count = document.getElementById("counter")
  
  let newCount = parseInt(count.innerHTML) + 1
  count.innerHTML = `${newCount}`
  document.getElementById('quantity').value = newCount
}

function countDecrement() {
  let count = document.getElementById("counter")
  
  if(parseInt(count.innerHTML) > 1) {
    let newCount = parseInt(count.innerHTML) - 1
    count.innerHTML = `${newCount}`
    document.getElementById('quantity').value = newCount
  }
}

</script>
@include('layouts.footer')
</html>
