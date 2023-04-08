<?php
session_start();
include "config/upsell/upsell_info.php";
include "config/pixel.php";
include "config/upsell/upsell_block.php";
include "upsell_build.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?=$pixel?>'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?=$pixel?>&ev=PageView&noscript=1"
        /></noscript>
<!-- DO NOT MODIFY -->
    <title>Дякуємо за замовлення!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex" />
    <link rel="icon" href="files/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,300italic,700&amp;subset=latin,cyrillic" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" />
    <!-- Slick -->
    <link rel="stylesheet" href="upsell/files/css/slick.css" />
    <link rel="stylesheet" href="upsell/files/css/slick-theme.css" />
    <link rel="stylesheet" href="upsell/css/animations-extended.min.css" />
    <link rel="stylesheet" href="upsell/css/bootstrap.min.css" />
    <link rel="stylesheet" href="upsell/css/mdb.min.css" />
    <link rel="stylesheet" href="upsell/files/css/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">


</head>

<body>
    <div class="section block-1">
        <div class="wrap" style="overflow: hidden;">
            <div class="top-title" style="margin: 10px auto 0;">
                <h2> Дякуюємо за замовлення. <br>Скоро наш менеджер зателефонує для підтвердження замовлення. <br>Будь ласка, перевірте введенні данні.</h2>
                <br>
                <h2 style="color:white;"><span><?php echo $_SESSION['name']; ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><?php echo $_SESSION['phone']; ?></span></h2>
                <div class="info"></div>
                <p></p>
                <br>
            </div>
        </div>
    </div>
    <div class="section block-2">
        <h1>
        <br>Новому покупцю пропонуємо
        <br>вигідні знижки ♡</h1>
        <style>
            .tov-adv {
                display: flex;
                width: 100%;
                justify-content: center;
            }

            .tov-adv li {
                margin: 30px 25px 10px;
            }
        </style>
    </div>
    <div class="section block-3">
        <div class="wrap">

            <?=$upsell_list?>

            <script>
                function getParentId(el) {
                    const upsell_id = el.parentElement.id;
                    sendAjaxForm(upsell_id, 'rq.php?comment=upsell');
                    $(`#btn_${upsell_id}`).hide();
                    $(`#btnok_${upsell_id}`).show();

                }

                let btns = document.querySelectorAll('button');
                btns.forEach((btn) => {
                    btn.addEventListener('click', () => {
                        getParentId(btn);
                    });
                });

                function sendAjaxForm(ajax_form, url) {
                    $.ajax({
                        url:     url, //url страницы (action_ajax_form.php)
                        type:     "POST", //метод отправки
                        dataType: "html", //формат данных
                        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
                        error: function(response) {
                            alert('Ошибка добавления');
                        }
                    });
                }
            </script>

        </div>
    </div>

    <div class="wrapper1" data-lazy-bgimage="order/dat/3.jpg" data-lazy-bgimage_nohd="true" data-lazy-bgimage_size="1600,1000" style="color: rgb(244, 249, 250);border-top-color: rgb(61, 115, 133);border-top-style: solid;border-top-width: 20px;background-size: cover;background-position: 50% 50%;background-repeat: no-repeat;text-align: center;background: #3d7385;">
        <span style="color: #ffffff;font-size: 18px;background: #3d7385;">
        <a href="politics.html">Політика конфіденційності</a>
        <br>
        <a href="garantee.html">Повернення та гарантія</a>
        <br>
        </span>
        <div class="wrapper1" data-lazy-bgimage="order/dat/3.jpg" data-lazy-bgimage_nohd="true" data-lazy-bgimage_size="1600,1000" style="color: rgb(244, 249, 250);border-top-color: rgb(61, 115, 133);border-top-style: solid;border-top-width: 20px;background-size: cover;background-position: 50% 50%;background-repeat: no-repeat;text-align: center;">
    </div>

    <script type="text/javascript" src="upsell/files/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
        $("form.order").submit(function(e) {
            alert('Вау, чудовий вибір! Ми додали цей товар до Вашого кошику. Подивимось що ще корисного ми маємо?');
            var btn = $(this).find("button");
            // e.preventDefault();
            btn.prop("disabled", true);
            btn.removeClass("btn-success");
            btn.addClass("btn-warning");
            btn.text("Додано до замовлення");
            $.ajax({
                url: 'upsell.php',
                type: "POST",
                data: $(this).serialize(),
                dataType: "html", //формат данных      
                success: function(data) {
                    btn.removeClass("btn-success");
                    btn.addClass("btn-warning");
                    btn.text("Додано до замовлення");
                },

            });

            let parent = $(this).closest('.tov-item');

            setTimeout(function() {
                parent.hide(500);
            }, 500);

            return false;
        });
    </script>

    <script type="text/javascript" src="upsell/files/js/slick.min.js"></script>

    <!-- Скрипт слайдера Slick -->

    <script type="text/javascript">
        var slick_view = document.querySelectorAll(".slider");
        var slick_nav = document.querySelectorAll(".slider-nav");
        for (var i = 0; i < slick_view.length; i++) {
            $(slick_view[i]).slick({
                slidesToShow: 1,
                centerMode: true,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                infinite: true,
                fade: true,
                adaptiveHeight: true,
                prevArrow: "<img src='upsell/left-arrow.svg' class='prev' alt='1'>",
                nextArrow: "<img src='upsell/right-arrow.svg' class='next' alt='2'>",
                asNavFor: slick_nav[i]
            });
            $(slick_nav[i]).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                arrows: false,
                centerMode: true,
                focusOnSelect: true,
                prevArrow: "<img src='upsell/left-arrow.svg' class='prev' alt='1'>",
                nextArrow: "<img src='upsell/right-arrow.svg' class='next' alt='2'>",
                asNavFor: slick_view[i],

            });
        }
    </script>

    <!-- / Скрипт слайдера Slick -->

    <script src="upsell/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="upsell/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="upsell/js/mdb.min.js" type="text/javascript"></script>
    <script>
        new WOW().init();
        $(document).ready(function() {
            $(".mdb-select").material_select();
        });
    </script>

    <style>
        [data-toggle="collapse"] .fa:before {
            content: "\f139";
        }

        [data-toggle="collapse"].collapsed .fa:before {
            content: "\f13a";
        }

        .slick-arrow {
            -webkit-filter: grayscale(1);
            /* Webkit */
            filter: gray;
            /* IE6-9 */
            filter: grayscale(1);
            /* W3C */
        }

        .tov-info-li li:before {
            height: 16px;
            width: 16px;
            display: inline-block;
            margin-right: 10px;
            background-image: url(upsell/check.svg);
            background-size: contain;
            content: '';
            list-style: none;
        }

        .tov-info-li {
            list-style: none !important;
        }

        select {
            width: 100%;
            padding: 10px;
        }

        @media screen and (max-width: 450px) {
            #mybtn {
                margin: 15px auto 0;
            }
        }
    </style>
</body>
</html>