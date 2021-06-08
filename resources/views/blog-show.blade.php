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
    <div class="detail-page__left" style="width:100%;height: 600px;">
      <img src="/storage/{{ $blog->image }}" alt="" style="height: 100%; object-fit:contain">
    </div>
  </div>
</section>

<section class="specifications">

  <div class="specifications__bottom">
    <div class="specifications__bottom-item">
    </div>
    <div class="text">
      {!! $blog->text !!}
    </div>
  </div>



  <div class="bottom-text">
    <p>{{ $blog->description }}</p>
  </div>
</section>

<style>

.bottom-text {
  background: #F7F9FA;
  margin-top: 40px;
}

.bottom-text p {
  padding: 40px 70px;
}

ol {
  list-style: none; counter-reset: li;
  padding-left: 17px;
}
li::before {
  content: counter(li) ". ";
   color: #0575E6;
  font-weight: 700;
  display: inline-block; width: 1em;
  margin-left: -1em
  }
  li {
    counter-increment: li

  }
</style>
@include('layouts.footer')
</html>