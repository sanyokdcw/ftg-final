<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')


<section class="system">
  <div class="system__bg" style="background-image: url(images/main-bg.jpg);"></div>
  <div class="system__wrapper swiper-container">
    <div class="swiper-wrapper">
      @foreach ($categories_menu as $category)
      <div class="system__wrapper-item swiper-slide">
        <div class="system__wrapper-item_img">
          <img src="/storage/{{ $category->image }}" class="system_img"  alt="">
        </div>
        <div class="system__wrapper-item_text">
          {!! $category->name !!}
        </div>
      </div>
      @endforeach
    </div>

    <div class="swiper-pagination"></div>
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

<section class="client">
  <div class="client__top">
    <div class="client__title title">НАШИ КЛИЕНТЫ</div>
    {{-- <a href="#" class="client__full">Все клиенты</a> --}}
  </div>
  <div class="client__wrapper">
    @foreach ($customers as $customer)
    <div class="client__wrapper-item">
      <img src="/storage/{{ $customer->image }}" alt="">
    </div>
    @endforeach
  </div>
</section>

<section class="news">
  <div class="client__top">
    <div class="client__title title">ПОСЛЕДНИЕ НОВОСТИ</div>
    <a href="/blog" class="client__full">Все новости</a>
  </div>
  <div class="news__wrapper">
    @foreach ($blogs as $blog)
    <div class="news__wrapper-item">
      <div class="news__wrapper-item_top" style="width:100%">
        <img src="/storage/{{ $blog->image }}" alt="" style="width:100%">
      </div>
      <div class="news__wrapper-item_bottom">
        <div class="news__wrapper-item_title">
          {{ $blog->title }}
        </div>
        <div class="news__wrapper-item_text">
          {{ $blog->description }}
        </div>
        <div class="news__wrapper-item_button">
          <a href="/blog/{{ $blog->id }}" class="news__wrapper-item_next">Читать далее</a>
          <div class="news__wrapper-item_date">{{ $blog->created_at->format('d-m-Y') }}</div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<section class="help">
  <div class="help__wrapper">
    <div class="help__wrapper-left">
      <img src="/images/helper.png" alt="">
    </div>
    <div class="help__wrapper-right">
      <div class="help__wrapper-title">Помощник при выборе систем</div>
      <div class="help__wrapper-text">Мы обязательно Вам поможем!</div>
      <a href="/product/" class="help__wrapper-btn">Подобрать СИСТЕМУ</a>
    </div>
  </div>
</section>

<section class="ftg">
  <div class="client__top">
    <div class="client__title title">ТОО FTG COMPANY</div>
    <a href="/company" class="client__full">Читать далее</a>
  </div>
  <div class="ftg__text">
    Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
    осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в
    домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст
    генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст
    более привлекательным и живым для визуально-слухового восприятия.
  </div>
</section>


@include('layouts.footer')
</html>
