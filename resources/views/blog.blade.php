<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')

<section class="url">
  <div class="url__text"><a href="/">Главная</a></div>
  <div class="url__text">Блог</div>
</section>

<section class="blog">
  <div class="blog__title subtitle">БЛОГ</div>
  <div class="blog__wrapper">
    @foreach ($blogs as $blog)
    <div class="blog__wrapper-card">
      <div class="blog__wrapper-top">
        <img src="/storage/{{ $blog->image }}" alt="">
      </div>
      <div class="blog__wrapper-bottom">
        <div class="blog__wrapper-subtitle">{{ $blog->name }}</div>
        <div class="blog__wrapper-text">
          {!! $blog->description !!}
        </div>
        <div class="blog__button">
          <a href="/blog/{{ $blog->id }}" class="blog__button-link">Читать далее</a>
          <div class="blog__button-time">{{ $blog->created_at->format('d-m-Y') }}</div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  {{-- <button class="blog__btn">Показать ещё</button> --}}
</section>

@include('layouts.footer')
</html>
