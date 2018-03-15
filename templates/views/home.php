<?php
/**
 * @var  $this Controller
 * @var $user User
 *
 */
?>

<div class="container">
   <h1>hello <?= $user->getFullName() ?></h1>
    <a href="<?= $this->route('reg')?>" class="btn">Регистрация</a>
    <a href="<?= $this->route('weather')?>" class="btn">Погода</a>
</div>

<script scr="templates/assets/js/script/js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="templates/css/123123.css">
</head>

<body>
<div class="header">
    <div class="logo">
        <a href="about.html"><img src="app/image/flag.png" ></a>
    </div>
    <div class="nav">
        <ul>
            <li><a href="http://google.com">Случайное</a></li>
            <li><a href="users123.php">По рейтингу</a></li>
        </ul>
    </div>
    <div class="search">
        <form>
            <p><input type="search" name="" placeholder="Поиск по сайту">
                <input type="image" src="image/search_button.png" width="30px" height="30px"  value="Найти"></p>
        </form>
    </div>
    <div class="register">
        <a href="<?= $this->route('reg')?>">Регистрация</a>
    </div>
    <div class="auth">

    </div>

</div>
<div class="cont">
    <div class="posts">
        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname </br>
                3 мин назад
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p>text text text</p>
            </div>
        </div>

        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname <br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>

        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname <br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname <br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname </br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname <br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname <br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
        <div class="post">
            <div class="ava">
                <img src="app/image/cat.jpg" alt="">
                <br>@nickname <br>3 мин назад </br></h5>
            </div>
            <div class="pic">
                <img src="app/image/cat.jpg" alt="">
            </div>
            <div class="like">
                <img src="app/image/like.png" alt="">
            </div>
            <div class="htag">
                <p> text text text</p>
            </div>
        </div>
    </div>
</div>
</body>
<footer>
    <div class="bttm">
        <div class="by">
            <h5>Developer</h5>
        </div>
        <div class="about">
            <ul>
                <li><a href="about.html">О проекте</a></li>
                <li><a href="http://google.com">Помощь</a> </li>
                <li><a href="http://google.com">Поддержать проект</a></li>
            </ul>
        </div>
        <div class="counter">

        </div>
        <div class="subscribe">
            <form>
                <p><input type="text" name="" placeholder="Подпишитесь">
                    <input type="submit" value="Подписаться"></p>
            </form>
        </div>
    </div>
</footer>
</html>        </div>
</div>
</footer>
</html>