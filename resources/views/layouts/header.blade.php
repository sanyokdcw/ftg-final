<div class="content">
    <header class="header">
      <nav class="menu">
        <div class="header__fixed-close">
          <div class="header__fixed-close_item"></div>
          <div class="header__fixed-close_item"></div>
        </div>
        <ul class="menu__ul">
          <li class="menu__list">
            <a href="/company" class="menu__list-link menu__list-link_active">Про компанию</a>
            <div class="menu__list-submenu">
              <a href="/company" class="menu__list-link">Про компанию</a>
              <a href="/blog" class="menu__list-link">Блог</a>
              <a href="/project" class="menu__list-link">Наши проекты</a>
              <a href="/team" class="menu__list-link">Команда</a>
              <a href="/delivery" class="menu__list-link">Доставка</a>

            </div>
          </li>
          <li class="menu__list">
            <a href="/company" class="menu__list-link menu__list-link_active">Клиентам</a>
            <div class="menu__list-submenu">
              <a href="/company" class="menu__list-link">Про компанию</a>
              <a href="/blog" class="menu__list-link">Блог</a>
              <a href="/project" class="menu__list-link">Наши проекты</a>
              
              <a href="/team" class="menu__list-link">Команда</a>
              <a href="/delivery" class="menu__list-link">Доставка</a>
            </div>
          </li>
          <li class="menu__list">
            <a href="/pather" class="menu__list-link">Партнерам</a>
          </li>
          <li class="menu__list">
            <a href="/contact" class="menu__list-link">Контакты</a>
          </li>
        </ul>
      </nav>
      <div class="header__button">
        @if(Auth::check())
          <a href="/logout" style="margin:0">Выйти</a>
        @else 
          <a href="/login" style="margin:0">Войти</a>
        @endif
        <a href="/office" class="header__button-user">

          <img src="../images/user-icon.png" alt="" style="">
        </a>
        <a href="" class="header__button-search">
          <img src="../images/search-icon.png" alt="">
        </a>
        <a href="/cart" class="header__button-cart">
          <div class="header__button-cart_count">{{ $cartCount }}</div>
          <img src="../images/icon-cart.png" alt="">
        </a>
        <button href="#" class="bar">
          <div class="bar__item"></div>
          <div class="bar__item"></div>
          <div class="bar__item"></div>
        </button>
      </div>
    </header>
