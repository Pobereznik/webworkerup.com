<?php
require_once( "api.php" );
extract( API( $params, true ), EXTR_OVERWRITE );

/**
 * @var $hash
 * @var $email
 * @var $phone
 * @var $phoneLink
 */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144336711-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144336711-5');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69762502, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69762502" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Легкий заработок для начинающих</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- >>>>>>>>>>>>>>>> All CSS Files <<<<<<<<<<<<<<<< -->

    <!-- Style css -->
    <link rel="stylesheet" href="style.css">

    <meta name="robots" content="noindex,nofollow">
</head>

<body data-hash="<?= $hash; ?>">

<div class="phone_block">
    <div class="container">
        <h1>Жми на кнопку и получи свои первые деньги!</h1>
        <h2>Самый легкий заработок для начинающих!</h2>

        <a data-contact="WhatsApp" data-number="1" target="_blank" href="<?= $phoneLink; ?>"
           role="button" class="btn" title="Написать на WhatsApp">
            Написать на WhatsApp
        </a>
    </div>
</div>

<div class="mail_block">
    <p>Если у Вас нет возможности написать нам на Whatsapp, не нужно ждать. Напишите нам на почту, и мы Вам сразу же ответим</p>
    <span class="email"><?= $email; ?></span>
    <button>Копировать почту</button>
</div>


<?php /*
<!-- >>>>>>>>>>>>>>>> Header End <<<<<<<<<<<<<<<< -->


<!-- >>>>>>>>>>>>>>>> About Us Area Start <<<<<<<<<<<<<<<< -->
<section class="about_area section_padding_100" id="about">
    <div class="container">
        <div class="about_us_area">
            <div class="row">
                <!-- About Us Area -->
                <div class="col-xs-12 col-md-5 pull-right">
                    <div class="about_us_thumb wow fadeInRight" data-wow-delay="0.2s">
                        <img src="img/bg-pattern/about.jpg" alt="">
                    </div>
                </div>

                <div class="col-xs-12 col-md-7 wow fadeInUp">
                    <!-- About Us Text Start -->
                    <div class="about_us_text">
                        <h3>О нас</h3>
                        <p>Наша компания ежемесячно проводит тренинги, курсы и обучение для людей, которые желают начать
                            зарабатывать. Более ста человек уже полностью закончили обучение и имеют стабильно высокий
                            доход. Мы предлагаем помощь специалистов и обучение использования инструментов для
                            работы</p>
                        <p>Наша цель - дать людям возможность зарабатывать. "Какова наша выгода?" - спросите Вы! Многие
                            заграничные работодатели обращаются к нам в поисках специалистов. Наша задача - научить Вас
                            и предоставить в качестве высококвалифицированных специалистов</p>

                        <a data-contact="WhatsApp" data-number="4" target="_blank" href="<?= $phoneLink; ?>"
                           role="button" class="btn" title="Написать на WhatsApp">Написать на WhatsApp <i
                                    class="icofont icofont-brand-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- >>>>>>>>>>>>>>>> Awesome Feature Area End <<<<<<<<<<<<<<<< -->

<!-- >>>>>>>>>>>>>>>> Why Choose Us Area Start <<<<<<<<<<<<<<<< -->
<section class="why_choose_us_area section_padding_100_70" id="devices">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h3>Оставить заявку</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form data-contact="Form" data-number="5" action="#" class="contact" method="post">
                    <input type="text" name="name" value="" placeholder="Ваше имя" required>
                    <input type="email" name="email" value="" placeholder="Почтовый адрес" required>
                    <div>
                        <input type="submit" value="Оставляю заявку">
                        <!--<input data-contact="email" type="submit" value="Оставляю заявку">-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- >>>>>>>>>>>>>>>> Why Choose Us Area Start <<<<<<<<<<<<<<<< -->

<!-- >>>>>>>>>>>>>>>> Blog Area Start <<<<<<<<<<<<<<<< -->
<section class="blog_area section_padding_100_70" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h3>Отзывы о нас</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
        <div class="row">

            <!-- single latest news area start -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".2s">
                    <!-- single latest news thumb -->
                    <div class="single_latest_news_img_area">
                        <img src="img/news-img/1.jpg" alt="">
                        <!-- single latest news published date -->
                    </div>
                    <div class="single_latest_news_text_area">
                        <!-- single latest news title -->
                        <div class="news_title">
                            <a href="#" onclick="return false;"><h4>Кирилл Симаков</h4></a>
                        </div>
                        <!-- single latest news excerp -->
                        <div class="news_content">
                            <p>Попробовать зарабатывать в интернете мне предложил друг спустя месяц работы. Я сначала
                                думал что это обман всё, и в интернете зарабатывать без специальных навыков невозможно.
                                Но мои сомнения развеяли!</p>
                        </div>
                        <div>
                            <a class="btn btn-default" href="#devices" role="button">Хочу так же!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- single latest news area start -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".4s">
                    <!-- single latest news thumb -->
                    <div class="single_latest_news_img_area">
                        <img src="img/news-img/2.jpg" alt="">
                        <!-- single latest news published date -->
                    </div>
                    <div class="single_latest_news_text_area">
                        <!-- single latest news title -->
                        <div class="news_title">
                            <a href="#" onclick="return false;"><h4>Алексей Воронков</h4></a>
                        </div>
                        <!-- single latest news excerp -->
                        <div class="news_content">
                            <p>Когда мне предложили даную работу, я и не думал что это может быть настолько прибыльно!
                                Но я решил попробовать в качестве пасивного заработка. На даный момент это мой основной
                                доход</p>
                        </div>
                        <div>
                            <a class="btn btn-default" href="#devices" role="button">Хочу так же!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- single latest news area start -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".6s">
                    <!-- single latest news thumb -->
                    <div class="single_latest_news_img_area">
                        <img src="img/news-img/3.jpg" alt="">
                        <!-- single latest news published date -->
                    </div>
                    <div class="single_latest_news_text_area">
                        <!-- single latest news title -->
                        <div class="news_title">
                            <a href="#" onclick="return false;"><h4>Елена Рыбчинская</h4></a>
                        </div>
                        <!-- single latest news excerp -->
                        <div class="news_content">
                            <p>Я и подумать не могла, что буду зарабатывать в интернете, так как я не сильна в
                                IT-технологиях. Сначала мне было очень сложно, но я быстро научилась, так как мне всё
                                очень детально объяснили</p>
                        </div>
                        <div>
                            <a class="btn btn-default" href="#devices" role="button">Хочу так же!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- >>>>>>>>>>>>>>>> Blog Area End <<<<<<<<<<<<<<<< -->

<!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->
<section class="message_now_area section_padding_100_70" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Message Title -->
                <div class="message_title">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h3>Свяжитесь с нами</h3>
                        <p>Вы не пожалеете о своём выборе!</p>
                        <a data-contact="WhatsApp" data-number="6" target="_blank" class="btn btn-default" href="<?= $phoneLink; ?>"
                           role="button">Написать <i
                                    class="icofont icofont-brand-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->

<!-- >>>>>>>>>>>>>>>> Footer Area Start <<<<<<<<<<<<<<<< -->
<footer class="footer_area">
    <!-- Bottom Footer Area Start -->
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- <div class="social_links_area">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="icofont icofont-social-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="icofont icofont-social-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="icofont icofont-social-google-plus"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="icofont icofont-social-pinterest"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="icofont icofont-social-youtube-play"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- >>>>>>>>>>>>>>>> Footer Area End <<<<<<<<<<<<<<<< -->

<div role="dialog" tabindex="-1" id="works_details" class="modal fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal_head">
                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="icofont icofont-close"></i></button>
            </div>
            <div class="modal_body">Спасибо что оставили заявку. Мы свяжемся с Вами в ближайшее время</div>
        </div>
    </div>
</div>


<!-- >>>>>>>>>>>>>>>> All jQuery Plugins <<<<<<<<<<<<<<<< -->

<!-- jQuery (necessary for all JavaScript plugins) -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>

<!-- Owl-carousel js -->
<script src="js/owl.carousel.min.js"></script>

<!-- Ajax Contact js -->
<script src="js/ajax-contact.js"></script>

<!-- Meanmenu js -->
<script src="js/meanmenu.js"></script>

<!-- Onepage Nav js -->
<script src="js/jquery.nav.min.js"></script>

<!-- Magnific Popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- Back to top js -->
<script src="js/jquery.scrollUp.js"></script>

<!-- jQuery easing js -->
<script src="js/jquery.easing.1.3.js"></script>

<!-- WOW js -->
<script src="js/wow.min.js"></script>

<!-- parallux js -->
<script src="js/jquery.stellar.min.js"></script>

<!-- Footer Reveal js -->
<script src="js/footer-reveal.js"></script>

<!-- YouTube Video Player js -->
<script src="js/YTPlayer.min.js"></script>

<!-- GOOGLE MAPS -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>-->

<!-- GOOGLE ACTIVE JS -->
<!--<script src="js/map-active.js"></script>-->

<!-- Active js -->
<script src="js/custom.js"></script>
*/ ?>
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/contact.js"></script>

</body>

</html>