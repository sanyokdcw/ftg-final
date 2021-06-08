<!DOCTYPE html>
<html lang="ru">

@include('layouts.catalog')
@include('layouts.header')
@section('content')

<section class="url">
  <div class="url__text">Главная</div>
  <div class="url__text">Калькулятор</div>
</section>
<section class="blog">
    <div class="blog__title subtitle">КАЛЬКУЛЯТОР ОБЪЕМА</div>
    <div class="contact__wrapper-title" style="margin-bottom: 50px">ПОКАЗАТЕЛИ:</div>
    <section class="calc">
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Дозировка товарного ингибитора (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Расход воды в которую дозируется ингибитор (ваше значения), Q =
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/ч">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Кількість товарного інгібатора, необхідне для потоку з витратою, Q:
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="г/ч">
                <input type="text" name="" id="" placeholder="кг/сутки" class="calc__margin">
                <input type="text" name="" id="" placeholder="кг/месяц">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Объем реагентного бака с которого будет осуществляться дозирования (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 литров">
                <input type="text" name="" id="" placeholder="0% раствор" class="calc__margin">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Дозировка товарного ингибитора (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Дозировка товарного ингибитора (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Дозировка товарного ингибитора (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Дозировка товарного ингибитора (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Дозировка товарного ингибитора (ваше значения):
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
    </section>
</section>
<style>

.calc__row {
    display: flex;
    margin-bottom: 50px;
}

.calc__left {
    width: 50%;
    display:flex;
    align-items: center
}

.calc__right {
    width:50%;
    display:flex;
    align-items: center;
}

.calc__right input {
    background: #F7F9FA;
    border: none;
    outline: none;
    font-size: 14px;
    padding: 20px 30px;
    border-radius: 100px;
    text-align: center;
}
.calc__margin {
    margin-left: 10px;
    margin-right: 10px;
}
</style>

@include('layouts.footer')
</html>
