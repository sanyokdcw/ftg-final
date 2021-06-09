<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')
@php
  if (session('currency') == null){
    session(['currency' => 'KZT']);
  }
  $currency = session('currency');
@endphp

<section class="url">
  <div class="url__text"><a href="/">Главная</a></div>
  <div class="url__text"><a href="/projects">Наши проекты</a></div>
  <div class="url__text">{{ $project->title }}</div>
</section>

<section class="detail-page">
  <div class="detail-page-title subtitle">{{ $project->title }}</div>
  <div class="detail-page__wrapper">
    <div class="detail-page__left">
      <img src="/storage/{{ json_decode($project->image, true)[0] }}" alt="">
    </div>
    <div class="detail-page__right">
      <div class="detail-page__right_img">
        <img src="/storage/{{ $project->company_image }}" alt="">
      </div>
      <div class="detail-page__right-text">
        <div>Объект:</div>
        <span>{{ $project->object_name }}</span>
      </div>
      <div class="detail-page__right-info">
        <div class="detail-page__right-item">
          <div class="detail-page__right-item_title">
            Срок
            выполнения
          </div>
          <div class="detail-page__right-item_text">
            <div class="detail-page__right-item_number">{{ $project->deadline[0] }}</div>
            <div class="detail-page__right-item_date">{{ $project->deadline[1] }}</div>
          </div>
        </div>
        <div class="detail-page__right-item">
          <div class="detail-page__right-item_title">
            Начало
            работы
          </div>
          <div class="detail-page__right-item_text">
            <div class="detail-page__right-item_number">{{ $project->start_of_work }}</div>
            <div class="detail-page__right-item_date">год</div>
          </div>
        </div>
        <div class="detail-page__right-item">
          <div class="detail-page__right-item_title">
            Стоимость
            выполнения
          </div>
          <div class="detail-page__right-item_text">
            @if ($currency == 'KZT')
              <div class="detail-page__right-item_number">{{ number_format($project->price_kz) }}</div>
              <div class="detail-page__right-item_date">тг</div>
            @elseif($currency == 'UAH')
              <div class="detail-page__right-item_number">{{ number_format($project->price_uah) }}</div>
              <div class="detail-page__right-item_date">грн</div>
            @elseif($currency == 'RUB')
              <div class="detail-page__right-item_number">{{ number_format($project->price_rub) }}</div>
              <div class="detail-page__right-item_date">руб</div>
            @endif
            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="specifications">
  <div class="specifications__top">
    <div class="specifications__top-item">
      Задача
    </div>
    <div class="specifications__top-item">
      Решение
    </div>
    <div class="specifications__top-item">
      Итог
    </div>
  </div>
  <div class="specifications__bottom">
    <div class="specifications__bottom-item">
      {!! $project->task !!}
    </div>
  </div>
</section>


@include('layouts.footer')
</html>