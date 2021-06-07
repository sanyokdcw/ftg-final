<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FTG</title>
  <link rel="stylesheet" href="../css/style.min.css" />
</head>

<body>

  <div class="main">
    <button class="chat">
      <img src="../images/chat.png" alt="">
    </button>
    <div class="container">
      <section class="sitebar">
        <a href="/" class="sitebar__logo">
          <img src="../images/logo.png" alt="">
        </a>
        <div class="sitebar__wrapper">
          <div class="sitebar__wrapper-left">
            <div class="sitebar__wrapper-item">
              <div class="sitebar__wrapper-item_left">
                <img src="../images/language-icon.png" alt="">
              </div>
              <div class="sitebar__wrapper-item_right">
                RU
              </div>
            </div>

            <div class="sitebar__wrapper-item">
              <a href="tel:88008001234">
                <img src="../images/phone-1.png" alt="">
                <div class="sitebar__wrapper-item_right">
                <a href="tel: 8 800 800-12-34">
                  8 800 800-12-34
                  </a>
                </div>
              </a>
            </div>

            <div class="sitebar__wrapper-item sitebar__wrapper-times">
              <a href="tel:88008001234">
                <img src="../images/time-icon.png" alt="">
                <div class="sitebar__wrapper-item_right">
                  <div>Пн-Пт 09:00-18:00</div>
                  <div>Cб 09:00-14:00</div>
                </div>
              </a>
            </div>
          </div>

          <div class="sitebar__wrapper-right">
            <div class="sitebar__wrapper-item">
              <div class="sitebar__wrapper-item_left">
                <img src="../images/card-icon.png" alt="">
              </div>
              <div class="sitebar__wrapper-item_right">
                UAH
              </div>
            </div>

            <div class="sitebar__wrapper-item sitebar__wrapper-ball">
              <a href="tel:88008001234">
                <img src="../images/phone-2.png" alt="">
                <div class="sitebar__wrapper-item_right">
                  Позвонить
                </div>
              </a>
            </div>

          </div>
        </div>
        <button class="sitebar__btn">Подобрать Продукцию</button>
        <div class="sitebar__drowdown-title">
          <img src="../images/product-icon.png" alt=""> <span>Каталог продукции</span>
        </div>
        <div class="sitebar__fixed">
          <div class="sitebar__fixed-close">
            <div class="sitebar__fixed-close_item"></div>
            <div class="sitebar__fixed-close_item"></div>
          </div>
          <ul class="sitebar__drowdown">

            @foreach ($categories as $category)
            <li class="sitebar__drowdown-item sitebar__drowdown-item_active">
              <div class="sitebar__drowdown-btn">{{ $category->name }}</div>
              <div class="sitebar__drowdown-item_block">
                @foreach ($category->subcategories as $subcategory)
                <a href="/subcategory/{{ $subcategory->id }}" class="sitebar__drowdown-item_btn">
                  <span>{{ $subcategory->name }}</span>
                </a>
                @endforeach
              </div>
            </li>
            @endforeach

          </ul>

          <a href="#" class="sitebar__link">Напишите нам</a>
          <div class="sitebar__social">
            <a href="#" class="sitebar__social-link">
              <img src="../images/facebook-icon.png" alt="">
            </a>
            <a href="#" class="sitebar__social-link">
              <img src="../images/vk-icon.png" alt="">
            </a>
            <a href="#" class="sitebar__social-link">
              <img src="../images/twitter-icon.png" alt="">
            </a>
          </div>
          <div class="sitebar__text">© FTGCompany. All Rights Reserved</div>
        </div>
      </section>
