<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')

        
<section class="url">
  <div class="url__text">Главная</div>
  <div class="url__text">Про компанию</div>
</section>

<section class="company">
  <div class="company__title subtitle">ПРО КОМПАНИЮ</div>
  <img src="../images/main-bg-2.jpg" alt="">
  <div class="company__subtitle title">ТОО FTG COMPANY</div>
  <div class="company__block">
    <div class="company__block-item">
      <div class="company__block-title title">По своей сути рыбатекст является </div>
      <div class="company__block-subtitle">По своей сути рыбатекст является </div>
      <div class="company__block-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст
      </div>
    </div>
    <div class="company__block-item">
      <div class="company__block-title title">По своей сути рыбатекст является </div>
      <div class="company__block-subtitle">По своей сути рыбатекст является </div>
      <div class="company__block-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст
      </div>
    </div>
    <div class="company__block-item">
      <div class="company__block-title title">По своей сути рыбатекст является </div>
      <div class="company__block-subtitle">По своей сути рыбатекст является </div>
      <div class="company__block-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст
      </div>
    </div>
  </div>
  <div class="company__block company__block-too">
    <div class="company__block-item">
      <div class="company__block-title title">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum
      </div>
    </div>
    <div class="company__block-item">
      <div class="company__block-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от
        lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и
        придаст неповторимый колорит советских времен.
      </div>
    </div>
    <div class="company__block-item">
      <div class="company__block-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от
        lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и
        придаст неповторимый колорит советских времен.
      </div>
    </div>
  </div>
  <div class="company__subtitle subtitle">В отличии от lorem ipsum, текст рыба</div>
  <div class="company__text">
    По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у
    некторых людей недоумение при попытках прочитать рыбу текст
  </div>
  <div class="company__wrapper">
    <div class="company__wrapper-item">
      <div class="company__wrapper-title subtitle">
        В отличии от lorem ipsum, текст рыба на русском языке наполнит
      </div>
      <div class="company__wrapper-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст
      </div>
    </div>
    <div class="company__wrapper-item">
      <img src="../images/news/item-3.jpg" alt="">
    </div>
    <div class="company__wrapper-item">
      <div class="company__wrapper-title">
        В отличии от lorem ipsum, текст рыба на русском языке наполнит
      </div>
      <div class="company__wrapper-text">
        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который
        вызывает у некторых людей недоумение при попытках прочитать рыбу текст
      </div>
    </div>
  </div>
</section>

<section class="property">
  <div class="property__wrapper">
    @foreach ($advantages as $advantage)
    <div class="property__wrapper-item">
      <div class="property__wrapper-item_top">
        <img src="/storage/{{ $advantage->image }}" alt="">
      </div>
      <div class="property__wrapper-item_title title">{{ $advantage->title }}</div>
      <div class="property__wrapper-item_text">{{ $advantage->text }}</div>
    </div>
    @endforeach
  </div>
</section>

<section class="sertificate">
  <div class="sertificate__title title">СЕРТИФИКАТЫ FTG COMPANY</div>
  <div class="sertificate__wrapper swiper-container">
    <div class="swiper-wrapper">
      @foreach ($certificates as $certificate)
      <div class="sertificate__wrapper-item swiper-slide">
        <img src="/storage/{{ $certificate->image }}" alt="">
        <div class="sertificate__wrapper-text">{{ $certificate->name }}</div>
      </div>
      @endforeach
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>


@include('layouts.footer')
</html>