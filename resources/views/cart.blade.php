<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')

        
<section class="url">
  <div class="url__text"><a href="/">Главная</a></div>
  <div class="url__text">Корзина</div>
</section>

<section class="cart">
  <div class="cart__title subtitle">КОРЗИНА</div>
  <div class="cart__wrapper">
    <div class="cart__wrapper-left">
      <div class="cart__wrapper-left_title">ИНФОРМАЦИЯ ПОКУПАТЕЛЯ</div>
      {{-- <button class="cart__wrapper-left_btn">Я новый покупатель</button> --}}
      <div class="cart__wrapper-form">
        <div class="cart__wrapper-form_input">
          <input type="text" placeholder="Имя" value="{{ Auth::user()->name }}" required>
        </div>
        <div class="cart__wrapper-form_input">
          <input type="text" placeholder="Фамилия" value="{{ Auth::user()->surname }}" required>
        </div>
        <div class="cart__wrapper-form_input">
          <input type="phone" placeholder="Телефон" value="{{ Auth::user()->number }}" required >
        </div>
        <div class="cart__wrapper-form_input">
          <input type="email" placeholder="Электронная почта" value="{{ Auth::user()->email }}" required>
        </div>
      </div>
      <div class="cart__wrapper-left_title">СПОСОБ ДОСТАВКИ</div>
      <div class="cart__wrapper-form">
      <div class="cart__wrapper-left_select">
          <select class="cart__wrapper-left_output">
            <option value="">Город</option>
            <option value="">Алматы</option>
            <option value="">Алматы</option>
            <option value="">Алматы</option>
          </select>
        </div>

        <div class="cart__wrapper-left_select">
          <select class="cart__wrapper-left_output">
            <option value="">Отделение</option>
            <option value="">Отделение</option>
            <option value="">Отделение</option>
            <option value="">Отделение</option>
          </select>
        </div>

        <div class="cart__wrapper-left_select">
          <select class="cart__wrapper-left_output">
            <option value="">Доставка почтой</option>
            <option value="">Самовывоз</option>
          </select>
        </div>
      </div>


      <div class="cart__wrapper-left_title">СПОСОБ оплаты</div>
      <div class="cart__wrapper-left_select">
          <select class="cart__wrapper-left_output">
            <option value="">Наличными</option>
            <option value="">Картой</option>
          </select>
        </div>
      <textarea style="width:500px" class="cart__wrapper-left_textarea" placeholder="Комментировать"></textarea>
    </div>
    
    <div class="cart__wrapper-right">
      <form action="/add-order" method="POST">
        @csrf
      @foreach ($cart_items as $item)
        @php
          $product = \App\Models\Product::find($item->product_id);
        @endphp
        <input type="hidden" name="products[]" value="{{ $product->id }}">
      <div class="cart__wrapper-right_title title">
        {{ $product->name }}
      </div>
      <div class="cart__wrapper-right_product">
        <div class="cart__wrapper-right_img">
          <img src="/storage/{{ $product->image }}" alt="">
        </div>
        <div class="cart__wrapper-right_count">
          <div class="cart__wrapper-right_number">Количество - {{ $item->quantity }}</div>
        </div>
        <div class="cart__wrapper-right_subprice title"><span>{{ number_format($product->price_kz * $item->quantity) }}</span> 
          @if (session('currency') == 'KZT')
            тг
          @elseif(session('currency') == 'UAH')
            грн
          @elseif(session('currency') == 'RUB')
            руб
          @endif
        </div>
      </div>
      @endforeach
      <input type="hidden" name="sum" value="{{ $sum }}">
      <div class="cart__wrapper-right_text">
        <div>Стоимость товаров:</div>
        <span>{{ number_format($sum) }} @if (session('currency') == 'KZT')
            тг
        @elseif(session('currency') == 'UAH')
            грн
        @elseif(session('currency') == 'RUB')
            руб
        @endif
        </span>
      </div>
      {{-- <div class="cart__wrapper-right_text">
        <div>3книжка:</div>
        <span>-</span>
      </div> --}}
      <div class="cart__wrapper-right_text cart__wrapper-right_result">
        <div>ИТОГО К ОПЛАТЕ:</div>
        <span>{{ number_format($sum) }} 
          @if (session('currency') == 'KZT')
            тг
          @elseif(session('currency') == 'UAH')
            грн
          @elseif(session('currency') == 'RUB')
            руб
          @endif
        </span>
      </div>
      <button type="submit" class="cart__wrapper-right_btn">ОФОРМИТЬ ЗАКАЗ</button>
    </form>
      <div class="cart__wrapper-right_consultation">
        <div class="cart__wrapper-right_input">
          <input type="text" name="phone">
        </div>
        <button class="cart__wrapper-right_order">Заказать консультацию</button>
      </div>
    </div>
  </div>
</section>

<section class="popular">
  <div class="popular__title subtitle">Популярные товары</div>
  <div class="popular__wrapper">
    @foreach ($popular as $p)
        
    <div class="card__wrapper-item">
      <div class="card__wrapper-img" style="background-image: url(/storage/{{ $p->image }});"></div>
      <div class="card__wrapper-text">
        {{ $p->name }}
      </div>
      <div class="card__wrapper-price"><span>{{ number_format($p->price_kz) }}</span> 
        @if (session('currency') == 'KZT')
            тг
        @elseif(session('currency') == 'UAH')
            грн
        @elseif(session('currency') == 'RUB')
            руб
        @endif
      </div>
      <a class="card__wrapper-btn"  href="/product/{{ $p->id }}" style="color: #112468">Подробнее</a>
    </div>

    @endforeach
  </div>
</section>

        
@include('layouts.footer')
</html>
