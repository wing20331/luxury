<?php
include "../lambo_db.php";
$class = $car["class"];
$brand = $car["brand"];
$model = $car["model"];
$year = $car["releaseYear"];
$color = $car["color"];
$v = $car["engineСapacity"];
$driveUnit = $car["driveUnit"];
$transmission = $car["transmission"];
$power = $car["enginePower"];
$speed = $car["maximumSpeed"];
$price = $car["price"];
$img1 = $car["img1"];
$img2 = $car["img2"];
$img3 = $car["img3"];
$img4 = $car["img4"];
$img5 = $car["img5"];

setcookie("carId", $car["id"], time() + 300, "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <div class="header lock_padding">
            <div class="header_body">
                <div class="header_menu">
                    <div class="menu_location">
                        <img src="../images/Vector.png" alt="">
                        <p>Москва</p>
                    </div>
                    <div class="menu_number1">
                        <p>+7 (904) 033-62-58</p>
                    </div>
                    <div class="menu_logo">
                        <a href="../index.html"> <img src="../images/Logo.png" alt=""></a>
                    </div>
                    <div class="menu_number2">
                        <p>+7 (987) 935-83-24</p>
                    </div>
                    <div class="menu_account">
                        <a href="#popup" class="account_link popup_link">
                            <img src="../images/account.png" alt="">
                        </a>
                        <div id="account_burger">
                            <div class="burger_line first"></div>
                            <div class="burger_line second"></div>
                            <div class="burger_line fourth"></div>
                        </div>
                        <div id="main_menu">
                            <div id="close">
                                <img src="../images/Close.png" alt="">
                            </div>
                            <nav>
                                <a href="#popup" class="popup_link">Мой профиль</a>
                                <a href="/pages/catalog.html">Автопарк</a>
                                <a href="/pages/terms.html">Условия</a>
                                <a href="/pages/aboutUs.html">О нас</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-lambo">
            <div class="labmo-title">Lamborghini Aventador S</div>
            <div class="image-slider swiper-content">
                <div class="image-slider__wrapper swiper-wrapper">
                    <div class="image-slider__slide swiper-slide">
                        <div class="image-slider__image">
                            <img src="<?php echo $img1; ?>" alt="">
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div class="image-slider__image">
                            <img src="<?php echo $img2; ?>" alt="">
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div class="image-slider__image">
                            <img src="<?php echo $img3; ?>" alt="">
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div class="image-slider__image">
                            <img src="<?php echo $img4; ?>" alt="">
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div class="image-slider__image">
                            <img src="<?php echo $img5; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="lambo-information">
            <div class="lambo-info">
                <p><b>Класс: </b><?php echo $class; ?></p>
                <p><b>Бренд: </b><?php echo $brand; ?></p>
                <p><b>Модель </b><?php echo $model; ?></p>
                <p><b>Год выпуска: </b><?php echo $year; ?></p>
                <p><b>Цвет: </b> <?php echo $color; ?></p>
                <p><b>Мощность двигателя: </b> <?php echo $power; ?> л.с.</p>
                <p><b>Объем двигателя: </b> <?php echo $v; ?> л.</p>
                <p><b>Коробка передач: </b> <?php echo $transmission; ?></p>
                <p><b>Привод: </b> <?php echo $driveUnit; ?></p>
                <p><b>Максимальная скорость: </b> <?php echo $speed; ?> км/ч</p>
            </div>
            <div class="lambo-rent">
                <form action="../rent.php" method="POST">
                    <div class="rent-title">Период аренды:</div>
                    <div class="rent-start"><input type="date" name="start" id="rent-start"></div>
                    <div class="rent-end"><input type="date" name="end" id="rent-end"></div>
                    <hr>
                    <div class="rent-price"><b>От <?php echo $price; ?> ₽ </b>/ сутки</div>
                    <a href="#price">
                        <button class="price" href=".car-price">Посмотреть цены</button>
                    </a>
                    <button action="submit" class="rent">Забронировать</button>
                </form>
            </div>
        </div>
        <div class="car-info">
            <b>Аренда Lamborghini Aventador S:</b><br>
            Самая легендарная модель Lamborghini доступна в аренду в Luxury Rent уже сейчас. Безошибочно узнаваемые черты инновационного суперкара и культовый двигатель V12
            с мощностью 740 л.с. не смогут оставить равнодушным ни одного даже самого искушенного клиента.
            Aventador S обладает невероятной динамикой, вид передней части суперкара напоминает акулью голову, что создает автомобилю агрессивный стиль. Задняя часть подчеркивает особые патрубки системы выпуска шестигранной формы.
            Сочетая изысканность и современные технологические решения с неудержимой мощью спорткара, этот автомобиль обязан дарить незабываемые эмоции и впечатления.
            Арендуйте его уже сегодня, воплотив свою мечту в реальность!
        </div>
        <div class="car-menu">
            <div class="car-peculiarities">
                <div class="peculiarities-text">Особенности спорткара Lamborghini Aventador S:</div>
                <div id="peculiarities-plus"><img src="../images/lambo/images/plus.png" alt=""></div>
            </div>
            <div class="peculiarities">
                <div id="peculiarities-hidden">Высочайшее качество материалов внутренней отделки подчеркивает элегантность интерьера Lamborghini Aventador S. Приборная панель оснащена интерактивным ЖК-дисплеем TFT с усовершенствованной графикой и специальной светодиодной подсветкой. <br><br>

                    Aventador S предлагает на выбор 4 режима вождения: STRADA, SPORT, CORSA и EGO. Каждый из этих режимов позволяет изменять параметры тяги (двигатель, полный привод, коробка передач), рулевого управления, подвески и системы стабилизации.<br><br>

                    Расположенный в средней части кузова, атмосферный двигатель V12 мощностью 740 л.с. разгоняет суперкар до сотни всего за 2,9 секунды. Рабочий объем цилиндров – 6498 см3, максимальная мощность 740 л.с./544 кВт при 8400 об/мин. Семиступенчатая коробка передач осуществляет передачу тяги колесам всего за 50 милисекунд!<br><br>

                    Решив воспользоваться нашими услугами, вы узнаете, насколько просто могут сбываться мечты!</div>
            </div>
            <div class="move">
                <a name="price">
                    <div class="car-rent">
                        <div class="rent-text">Удобная аренда от Luxury Rent:</div>
                        <div id="rent-plus"><img src="../images/lambo/images/plus.png" alt=""></div>
                    </div>
                </a>
                <div class="rent1">
                    <div id="rent-hidden">Благодаря аренде Ламборгини Авентадор от Luxury Rent вы получаете самый простой и удобный способ ощутить все преимущества эксклюзивного спорткара ценой свыше 28 миллионов рублей.
                        Отличный вариант, чтобы создать эффектный имидж, ярко отметить важную дату или просто получить незабываемые эмоции. Вы можете взять автомобиль в аренду от 1 суток как без водителя, так и с ним.</div>
                </div>

            </div>
        </div>
        <div class="menu-move">
            <div class="car-price">
                <table>
                    <tr>
                        <td colspan="5">Стоимость аренды (в сут.)</td>
                    </tr>
                    <tr>
                        <td>1 сут.</td>
                        <td>2-3 сут.</td>
                        <td>4-6 сут.</td>
                        <td>7-14 сут.</td>
                        <td>Более</td>
                    </tr>
                    <tr>
                        <td> 200 000 ₽</td>
                        <td> 197 000 ₽</td>
                        <td> 194 000 ₽</td>
                        <td> 190 000 ₽</td>
                        <td>Договорная</td>
                    </tr>
                </table>
            </div>
            <div class="feedback">
                <form id="ajax-form" action="../mail.php" method="POST">
                    <div class="feedback_title">Остались вопросы?</div>
                    <div class="feedback_text">Мы перезвоним вам и проконсультируем по любому вопросу</div>
                    <input type="text" name="user_name" class="feedback_name" placeholder="Ваше имя">
                    <input type="text" name="user_phone" class="feedback_number" type="tel" placeholder="+7 (___)-___-__-__">
                    <button type="submit" class="feedback_button">Оставить заявку</button>
                </form>
            </div>
            <div class="footer">
                <div class="footer_wrapper">
                    <div class="footer_politics">
                        <div class="politics_logo"><img src="../images/Logo.png" alt=""></div>
                        <div class="politics_content">
                            <p>Аренда автомобилей премиум класса в Москве</p> <br>
                            <p>© 2022 Все
                                права защищены Политика конфиденциальности</p>
                        </div>
                    </div>
                    <div class="footer_menu">
                        <div class="menu_title title">Разделы:</div>
                        <div class="menu_content">
                        <a href="#popup" class="popup_link">
                            <p>Мой профиль</p>
                        </a><a href="/pages/catalog.html">
                            <p>Автопарк</p>
                        </a><a href="/pages/terms.html">
                            <p>Условия</p>
                        </a><a href="/pages/aboutUs.html">
                            <p>О нас</p>
                        </a>
                        </div>
                    </div>
                    <div class="footer_contacts">
                        <div class="contacts_title title">
                            Контакты:
                        </div>
                        <div class="contacts_content">
                            <p>+7 (904) 033-62-58</p>
                            <p>+7 (987) 935-83-24</p>
                        </div>
                        <div class="writeUs title">
                            Написать нам:
                        </div>
                        <div class="writeUs_content">
                            luxuryrentmsk@gmail.com
                        </div>
                    </div>
                    <div class="footer_address">
                        <div class="address_title title">
                            Адрес:
                        </div>
                        <div class="address_content">
                            <p>Россия, г.Москва,</p>
                            <p>Новый Арбат, 32</p>
                        </div>
                        <div class="address_links">
                            <a href="#"><img src="../images/footer/telegram.png" alt=""></a>
                            <a href="#"> <img src="../images/footer/vk.png" alt=""></a>
                            <a href="#"><img src="../images/footer/inst.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="popup" id="popup">
        <div class="popup_body">
            <form action="../auth.php" method="post">
                <div class="popup_content">
                    <div class="popup_letter"></div>
                    <div class="popup_title">Вход в личный кабинет</div>
                    <input type="text" placeholder="Логин" name="auth_login" class="popup_login popup_input">
                    <input type="password" placeholder="Пароль" name="auth_password" class="popup_password popup_input">
                    <button action="submit" class="popup_button">Вход</button>
                    <a href="#popup_2" class="popup_link popup_registration">
                        <div>Вас еще нет в системе?<br>
                            Зарегистрируйтесь!</div>
                    </a>
                    <div class="popup_terms">Нажимая на кнопку, вы принимаете<br>
                        <a href="#">условия пользовательского соглашения</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="popup_2">
        <div class="popup_body">
            <form action="../registration.php" method="post">
                <div class="popup_content">
                    <div class="popup_title">Регистрация</div>
                    <input type="text" id="popup_name" placeholder="Ваше Имя:" name="popup_name" class="popup_name popup_input">
                    <input type="email" id="popup_email" placeholder="Ваш E-mail:" name="popup_email" class="popup_email popup_input">
                    <input type="password" id="popup_password" placeholder="Пароль" name="popup_password" class="popup_password popup_input">
                    <input type="password" id="popup_passwordRepeat" name="popup_passwordRepeat" placeholder="Повторите пароль" class="popup_passwordRepeat popup_input">
                    <button action="submit" id="popup_button" class="popup_button">Зарегистрироваться</button>
                    <div id="error"></div>
                    <div class="popup_term last">Нажимая на кнопку, вы принимаете<br>
                        <a href="#">условия пользовательского соглашения</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/car-menu.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/feedback_pages.js"></script>
    <script src="../js/popup.js"></script>
    <script src="../js/registration.js"></script>
    <script src="../js/slider_car.js"></script>
</body>

</html>