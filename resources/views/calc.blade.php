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
                    У баку готуємо розчин з розрахунку:
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="кг продажного">
                <div class="calc__symbol">
                    +
                </div>
                <input type="text" name="" id="" placeholder="кг/сутки">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Насос-дозатор OLB02-07 должен дозировать:
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="мл/ч разбавлены">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">

                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="импульсов в мин">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Через
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="0 мг/л ( г/м3 )">
            </div>
        </div>
        <div class="calc__row">
            <div class="calc__left">
                <div class="calc__text">
                    Ресурс растворимого бака составляет:
                </div>
            </div>
            <div class="calc__right">
                <input type="text" name="" id="" placeholder="Часов">
                <div class="calc__symbol">
                    =
                </div>
                <input type="text" name="" id="" placeholder="Суток работы">
            </div>
        </div>
    </section>
    <div class="calc__btn">
        <div class="form__input" style="width: 50%;">
            <input type="submit" value="Отправить" style="">
        </div>
    </div>

</section>

<style>
.calc__btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
</style>

@include('layouts.footer')
</html>
