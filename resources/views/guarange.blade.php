<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')


<section class="url">
  <div class="url__text"><a href="/">Главная</a></div>
  <div class="url__text">Гарантия и сервис</div>
</section>

<div class="guarange">
  <div class="guarange__title subtitle">ГАРАНТИЯ И СЕРВИС</div>
  <div class="guarange__wrapper">
    <div class="guarange__wrapper-item">
      <div class="guarange__wrapper-title title">
        <img src="../images/guarantee/item-1.png" alt="">
        <span>Комплексная гарантия до 5 лет!</span>
      </div>
      <div class="guarange__wrapper-text">
        Теперь у вас будет 2 года гарантии! На любое оборудование, без доплат и скрытых платежей, все честно.
      </div>
      <div class="guarange__wrapper-text">
        Вы покупаете фильтр, а мы гарантируемего безупречную работу.
      </div>
    </div>

    <div class="guarange__wrapper-item">
      <div class="guarange__wrapper-title title">
        <img src="../images/guarantee/item-2.png" alt="">
        <span>Обмен и возврат</span>
      </div>
      <div class="guarange__wrapper-text">
        Без проблем возвращаем и обмениваем товар в четырехдневный срок, если товар не был в эксплуатации, а
        комплект не розпаковани.Мы делаем все возможное, чтобы вы остались довольны.
      </div>
    </div>
  </div>
</div>

<section class="estimation">
  <div class="estimation__title">Возникли вопросы?</div>
  <div class="estimation__text">Мы обязательно Вам поможем!</div>
  <button class="estimation__btn btn-contact">Связаться с нами</button>
</section>


@include('layouts.footer')
</html>