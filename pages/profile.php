<?php
include "../userProfile.php";
include "../send.php";
include "../doc1.php";
$name = $user["name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Luxury rent</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

        <div class="wrapper_body">
            <div class="wrapper_content">
                <div class="wrapper_menu">
                    <div class="wrapper_letter"></div>
                    <div class="menu_content">
                        <div id="profile">Мой профиль</div>
                        <div id="docs">Проверка документов</div>
                        <div id="rent">Мои заявки</div>
                    </div>
                </div>
                <div class="wrapper_profile">
                    <form action="../edit.php" method="POST">
                        <div class="profile_subtitle">Мой профиль</div>
                        <div class="profile_title">Необходимые настройки</div>
                        <div class="profile_personal">
                            <div class="personal_title title">Личная информация</div>
                            <input class="profile_input" name="name" value="<?php echo $user['name'] ?>" type="text" placeholder="Имя">
                            <input class="profile_input" name="surname" value="<?php echo $user['surname'] ?>" type="text" placeholder="Фамилия">
                            <input class="profile_input" name="secondName" value="<?php echo $user['secondName'] ?>" type="text" placeholder="Отчество">
                            <input class="profile_input" name="dateOfBirth" value="<?php echo $user['dateOfBirth'] ?>" type="date" placeholder="Дата рождения">
                        </div>
                        <div class="profile_additional">
                            <div class="personal_title title">Дополнительная информация</div>
                            <input class="additional_input" name="phoneNumber" value="<?php echo $user['phoneNumber'] ?>" type="tel" placeholder="+7 (___)-___-__-__">
                            <input class="additional_input" name="email" value="<?php echo $user['email'] ?>" type="email" placeholder="E-mail">
                            <input class="additional_input" name="driversLicense" value="<?php echo $user['driversLicense'] ?>" type="date" placeholder="Дата получения ВУ">
                            <input class="additional_input" name="country" value="<?php echo $user['country'] ?>" type="text" placeholder="Гражданство">
                        </div>
                        <div class="profile_passwordChange">
                            <div class="personal_title title">Изменение пароля</div>
                            <input class="additional_input" name="password" type="password" placeholder="Новый пароль">
                            <input class="additional_input" name="passwordRepeat" type="password" placeholder="Повторите новый пароль">
                        </div>
                        <button action="submit" id="profile_save" class="profile_save profile">Сохранить</button>
                    </form>
                </div>
                <div class="wrapper-docs">
                    <div class="docs-block">
                        <div class="docs-header">
                            <div class="docs-h1">
                                Личные документы
                            </div>
                            <div class="docs-h2">
                                Сервис гарантирует конфиденциальность данных
                            </div>
                        </div>
                        <div class="docs-subheader">
                            Загрузите все документы. <br> После проверки вы сможете арендовать автомобиль.
                        </div>
                        <div class="docs-body">
                            <div class="docs-passport">
                                <div class="passport-header">
                                    Паспорт
                                </div>
                                <div class="passport-body">
                                    <div class="docs-item">
                                    <div class="docs-item-header">
                                    Первый разворот
                                        <form action="../send.php" method="post" enctype="multipart/form-data" class="docs-item-header">
                                                <input type="file" name="file" id="labelFile" class="inputFile">
                                                <label for="labelFile">
                                                <img src="
                                                <?php
                                                
                                        $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');
                                        $photoid = $_COOKIE["id"];
                                        $data = 1;
                                        $photo = $mysql->query("SELECT * FROM `documents` WHERE `userId` = '$photoid' and `type` = '$data'");
                                        $photo = $photo->fetch_assoc();
                                        $mysql->close();
                                        echo $photo["path"];
                                        if(empty ($photo["path"])){
                                            echo '/images/photo.png';
                                        }
                                               ?> " alt="" class="docImg"></label>
                                                <input type="submit" value="загрузить"  class="btnLoad">

                                            </form>
                                        </div>
                                    </div>
                                    <div class="docs-item">
                                        <div class="docs-item-header">
                                            Второй разворот
                                            <form action="../doc1.php" method="post" enctype="multipart/form-data" class="docs-item-header">
                                                <input type="file" name="file" id="labelFile1" class="inputFile">
                                                <label for="labelFile1">
                                                <img src="<?php
                                                
                                        $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');
                                        $photoid = $_COOKIE["id"];
                                        $data = 2;
                                        $photo = $mysql->query("SELECT * FROM `documents` WHERE `userId` = '$photoid' and `type` = '$data'");
                                        $photo = $photo->fetch_assoc();
                                        $mysql->close();
                                        echo $photo["path"];
                                        if(empty ($photo["path"])){
                                            echo '/images/photo.png';
                                        }
                                               ?> " alt="" class="docImg"></label>
                                                <input type="submit" value="загрузить"  class="btnLoad">

                                            </form>
                                        </div>
                                        <div class="docs-item-image">
                                        </div>
                                    </div>
                                    <div class="docs-item">
                                        <div class="docs-item-header">
                                            Селфи
                                            <form action="../selfi.php" method="post" enctype="multipart/form-data" class="docs-item-header">
                                                <input type="file" name="file" id="labelFile2" class="inputFile">
                                                <label for="labelFile2">
                                                <img src="<?php
                                                
                                        $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');
                                        $photoid = $_COOKIE["id"];
                                        $data = 3;
                                        $photo = $mysql->query("SELECT * FROM `documents` WHERE `userId` = '$photoid' and `type` = '$data'");
                                        $photo = $photo->fetch_assoc();
                                        $mysql->close();
                                        echo $photo["path"];
                                        if(empty ($photo["path"])){
                                            echo '/images/photo.png';
                                        }
                                               ?> " alt="" class="docImg"></label>
                                                <input type="submit" value="загрузить"  class="btnLoad">

                                            </form>
                                        </div>
                                        <div class="docs-item-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-vu">
                            <div class="vu-header">
                                    Водительское удостоверение
                                </div>
                                <div class="vu-body">
                                    <div class="vu-item">
                                        <div class="vu-item-header">
                                        
                                            Первая сторона
                                            <form action="../driverLicense1.php" method="post" enctype="multipart/form-data" class="docs-item-header">
                                                <input type="file" name="file" id="labelFile3" class="inputFile">
                                                <label for="labelFile3">
                                                <img src="<?php
                                                
                                        $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');
                                        $photoid = $_COOKIE["id"];
                                        $data = 4;
                                        $photo = $mysql->query("SELECT * FROM `documents` WHERE `userId` = '$photoid' and `type` = '$data'");
                                        $photo = $photo->fetch_assoc();
                                        $mysql->close();
                                        echo $photo["path"];
                                        if(empty ($photo["path"])){
                                            echo '/images/photo.png';
                                        }
                                               ?> " alt="" class="docImg"></label>
                                                <input type="submit" value="загрузить"  class="btnLoad">

                                            </form>
                                        </div>
                                        <div class="vu-item-image">
                                        </div>
                                    </div>
                                    <div class="vu-item">
                                        <div class="vu-item-header">
                                            Вторая сторона
                                            <form action="../driverLicense2.php" method="post" enctype="multipart/form-data" class="docs-item-header">
                                                <input type="file" name="file" id="labelFile4" class="inputFile">
                                                <label for="labelFile4">
                                                <img src="<?php
                                                
                                        $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');
                                        $photoid = $_COOKIE["id"];
                                        $data = 5;
                                        $photo = $mysql->query("SELECT * FROM `documents` WHERE `userId` = '$photoid' and `type` = '$data'");
                                        $photo = $photo->fetch_assoc();
                                        $mysql->close();
                                        echo $photo["path"];
                                        if(empty ($photo["path"])){
                                            echo '/images/photo.png';
                                        }
                                               ?> " alt="" class="docImg"></label>
                                                <input type="submit" value="загрузить"  class="btnLoad">

                                            </form>
                                        </div>
                                        <div class="vu-item-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_rent"> 
                    <?php

                    while ($carRent = mysqli_fetch_assoc($rent)) {

                    ?>

                        <div class="rent_block">
                            <div class="rent_block_body">
                                <img src="<?php

                                            $mysql = new mysqli('localhost', 'root', '', 'luxuryrent');

                                            $carId = $carRent["carId"];

                                            $car = $mysql->query("SELECT * FROM `car` WHERE `id` = '$carId'");

                                            $car = $car->fetch_assoc();

                                            $mysql->close();

                                            echo $car["img2"];

                                            ?>" alt="">
                                <div class="car">
                                    <div class="carName"><?php
                                                            echo $car["brand"];
                                                            echo " ";
                                                            echo $car["model"];
                                                            ?></div>
                                    <div class="carRent">

                                        <div>
                                            <div class="carDay">
                                                <p>Период аренды:</p>
                                                <b>
                                                    <?php
                                                    echo countDaysBetweenDates($carRent["dateOfReceiving"], $carRent["returnDate"]);

                                                    if (countDaysBetweenDates($carRent["dateOfReceiving"], $carRent["returnDate"]) % 10 == 1) {
                                                        echo " день";
                                                    } else if (countDaysBetweenDates($carRent["dateOfReceiving"], $carRent["returnDate"]) % 10 > 1 && countDaysBetweenDates($carRent["dateOfReceiving"], $carRent["returnDate"]) % 10 < 5) {
                                                        echo " дня";
                                                    } else {
                                                        echo " дней";
                                                    }
                                                    ?>
                                                </b>
                                            </div>
                                            <div class="carDate">
                                                <?php
                                                echo date('d.m.Y', strtotime($carRent["dateOfReceiving"]));
                                                ?>-
                                                <?php echo date('d.m.Y', strtotime($carRent["returnDate"])); ?>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Статус аредны:</p>
                                            <b>На модерации</b><br>
                                            <?php
                                            echo date('d.m.y');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carInfo">
                                <div class="moderation">На модерации</div>
                                <div class="info">Детали сделки</div>
                            </div>
                        </div>


                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="footer" style="margin-top:150px;">
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


    <script src="/js/script.js"></script>
    <script src="/js/registration.js"></script>
    <script src="/js/popup.js"></script>
    <script src="/js/profile.js"></script>
</body>

</html>