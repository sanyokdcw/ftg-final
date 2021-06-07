<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')


<section class="url">
  <div class="url__text">Главная</div>
  <div class="url__text">Блог</div>
  <div class="url__text">{{ $blog->name }}</div>
</section>

<section class="detail-page">
  <div class="detail-page-title subtitle">КОНЦЕНТРИРОВАНИЕ ЗАСОЛЕННЫХ СТОЧНЫХ ВОД</div>
  <div class="detail-page__wrapper">
    <div class="detail-page__left" style="width:50%">
      <img src="/storage/{{ $blog->image }}" alt="">
    </div>
    <div class="detail-page__right"  style="width:50%">
      <div class="detail-page__right-text">
        <p>
            {{ $blog->description }}
        </p>
      </div>

    </div>
  </div>
</section>

<section class="specifications">
  <div class="specifications__top">
    <div class="specifications__top-item">
    </div>
    <div class="specifications__top-item">
      {{ $blog->name }}
    </div>
    <div class="specifications__top-item">
    </div>
  </div>
  <div class="specifications__bottom">
    <div class="specifications__bottom-item">
{{ $blog->text }}
    </div>

  </div>
</section>


@include('layouts.footer')
</html>