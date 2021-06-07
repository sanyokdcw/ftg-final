<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')

<section class="url">
  <div class="url__text">Главная</div>
  <div class="url__text">Блог</div>
</section>

<section class="project">
  <div class="project__title subtitle">НАШИ ПРОЕКТЫ</div>
  
  <div class="project__wrapper">
  	@foreach($projects as $project)
    <div class="project__wrapper-card">
      <div class="project__wrapper-left">
        <div class="swiper-container mySwiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="../images/projects/full-item.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="../images/projects/full-item.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="../images/projects/full-item.jpg" />
            </div>
          </div>
        </div>
        <div class="swiper-container mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="project__wrapper-img" style="background-image: url(../images/projects/item-1.jpg);">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="project__wrapper-img" style="background-image: url(../images/projects/item-2.jpg);">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="project__wrapper-img" style="background-image: url(../images/projects/item-3.jpg);">
              </div>
            </div>
          </div>
        </div>

        <div class="project__wrapper-info">
          <div class="project__wrapper-info_item">
            <div class="project__wrapper-info_title">
              Срок
              выполнения
            </div>
            <div class="project__wrapper-info_number">
              2 <span>месяца</span>
              
            </div>
          </div>
          <div class="project__wrapper-info_item">
            <div class="project__wrapper-info_title">
              Начало
              работы
            </div>
            <div class="project__wrapper-info_number">
              2020 <span>год</span>
            </div>
          </div>
          <div class="project__wrapper-info_item">
            <div class="project__wrapper-info_title">
              Стоимость
              выполнения
            </div>
            <div class="project__wrapper-info_number">
              {{ $project->price_uah }}<span>руб</span>
            </div>
          </div>
        </div>
      </div>
      <div class="project__wrapper-right">
        <div class="project__wrapper-title title">
          
          {{$project->title}}
        </div>
        <div class="project__wrapper-subtitle">
		{{ $project->description }}
        </div>
        <div class="project__wrapper-button">
          <button class="project__wrapper-btn">ЗАДАЧА</button>
          <button class="project__wrapper-btn">Решение</button>
          <button class="project__wrapper-btn">Итог</button>
        </div>
        <div class="project__wrapper-block">
          <div class="project__wrapper-block_bg"></div>
          <div class="project__wrapper-text">
		{!! $project->task !!}
          </div>
        </div>
      </div>
    </div>
	@endforeach
</div


  <button class="blog__btn">Показать ещё</button>
</section>


@include('layouts.footer')
</html>
