<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{setting('site.title')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
    <div class="offcanvas-overlay"></div>
    <div id="mobile_menu" class="offcanvas-panel">
        <div class="panel">
            <div class="mb-5 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <a href="index.html" class="logo">
                        <img src="./images/logo.png" alt="">
                    </a>
                </div>
                <div class="offcanvas-close"> <svg xmlns="http://www.w3.org/2000/svg" width="17.678" height="17.678"
                        viewBox="0 0 17.678 17.678" class="svg replaced-svg">
                        <g id="Group_2188" data-name="Group 2188" transform="translate(-1693.818 -1197.818)">
                            <line id="Line_88" data-name="Line 88" x2="14" y2="14"
                                transform="translate(1695.657 1199.657)" fill="none" stroke="#707070"
                                stroke-linecap="round" stroke-width="2.6"></line>
                            <line id="Line_89" data-name="Line 89" x1="14" y2="14"
                                transform="translate(1695.657 1199.657)" fill="none" stroke="#707070"
                                stroke-linecap="round" stroke-width="2.6"></line>
                        </g>
                    </svg>
                </div>
            </div>
            <ul class="nav flex-column align-items-start">
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Система управления</a>
                </li>
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Функционал</a>
                </li>
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Преимущества</a>
                </li>
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Внедрение</a>
                </li>
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Для кого?</a>
                </li>
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Стоимость</a>
                </li>
                <li class="nav__item nav-item">
                    <a href="#" class="nav__link nav-link">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
    <header class="header bg-white">
        <nav class="nav navbar navbar-expand-lg">
            <div class="container align-self-stretch align-items-stretch">
                <a class="navbar-brand align-self-center" href="#">
                 <img src="{{setting('site.logo')}}" alt=""> 
                </a>
                <div id="menu-button" class="d-lg-none d-inline-block align-self-center"> <span></span></div>
                <ul class="d-none d-lg-flex nav__list navbar-nav navbar-nav">
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Система управления</a>
                    </li>
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Функционал</a>
                    </li>
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Преимущества</a>
                    </li>
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Внедрение</a>
                    </li>
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Для кого?</a>
                    </li>
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Стоимость</a>
                    </li>
                    <li class="nav__item nav-item">
                        <a href="#" class="nav__link nav-link">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">

        @foreach ($blocks as $block)
            @switch($block->type)
                @case('slider')
                    <section class="section">
                        <div class="container collections">
                            <div class="row top-slider" >
                                <div class="col-md-6 col-xl-5  align-self-stretch">
                                    <div class="top-slider__inner">
                                        @foreach ($block->children as $item)
                                            <!-- Slides Texts -->
                                            <div class="top-slider__content">
                                                <h1 class="top-slider__title mb-5">{!!$item->title!!}</h1>
                                                <div class="top-slider__text mb-5" >{!!$item->caption!!}</div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Введите ваш Email"
                                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-info" type="button" id="button-addon2">Попробовать</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                
                                </div>
                                <!-- Slider main container -->
                                <div class="swiper-container col-md-6 col-xl-7 top-slider__image text-right">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        @foreach ($block->children as $item)
                                            <!-- Slides Images -->
                                            <div class="swiper-slide">
                                                <div class="case-scroll-block case-scroll-block_phone">
                                                    <div class="case-scroll-block__wrapper">
                                                        <!-- <div class="case-scroll-block__hover">Наведите курсор мыши</div> -->
                                                        <div class="case-scroll-block__inner">
                                                            <img src="{{$item->img}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- If we need pagination -->
                                    <!-- <div class="swiper-pagination"></div> -->
            
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
            
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                @case('first')
                    <section class="section" style="background-image: url('blocks/bg_1.png');">
                        <div class="container">
                            <div class="col-md-10 section-title">
                                <h2 class="text-center">{{$block->title}}</h2>
                                <p class="text-center">{!!$block->caption!!}</p>
                            </div>
                            @if ($block->children)
                                <div class="row">
                                    @foreach ($block->children as $item)
                                        <div class="p-2 col-lg-4 text-center">
                                            <div class="mb-3">
                                                <img src="{{$item->img}}" alt="">
                                            </div>
                                            <h4>{{$item->title}}</h4>
                                            <p class="text">{!!$item->caption!!}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </section>
                    @break
            
                @case('second')
                    <section class="section bg-blue">
                        <div class="container">
                            <div class="section-title">
                                <h2 class="text-center">{{$block->title}}</h2>
                            </div>
                            @if ($block->children)
                                <div class="row">
                                    <div class="row bg-lighter col-xxl-9 m-auto service">
                                        @foreach ($block->children as $item)
                                            <div class="d-flex flex-sm-row flex-column align-items-start">
                                                <div class="rounded bg-white service-icon mb-4 mb-sm-0">
                                                    <img src="{{$item->img}}" alt="">
                                                </div>
                                                <div class="pl-0 pl-sm-4">
                                                    <h5 class="text-purple">{{$item->title}}</h5>
                                                    <div>
                                                        {!!$item->caption!!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </section>
                    @break
            
                @case('left')
                    <section class="section">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 order-0 order-lg-1 pl-5 pr-5">
                                    <div class="col-lg-10 m-auto">
                                        <h2 class="black">{!!$block->title!!}</h2>
                                        {!!$block->caption!!}
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-0">
                                    <div class="d-flex align-items-center justify-content-center"> <img src="{{$block->img}}" style="max-width: 120%;"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @break
                @case('right')
                    <section class="section" style="background-image: url('blocks/bg.png');">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 order-1 order-lg-0  order-0 order-lg-1 pl-5 pr-5">
                                    <div class="col-lg-10 m-auto">
                                        <h2 class="black">{!!$block->title!!}</h2>
                                        {!!$block->caption!!}
                                    </div>
                                </div>
                                <div class="col-lg-6 order-0 order-lg-1 order-1 order-lg-0">
                                    <div class="d-flex align-items-center justify-content-center"> <img src="{{$block->img}}" style="max-width: 120%;"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                @case('tech')
                    <section class="section" >
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="section-title">
                                        <h2>{!!$block->title!!}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12 mb-md-0 mb-5">
                                    <img src="{!!$block->img!!}" data-rjs="2" alt="">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="pl-120">
                                        <ul class="list-how-works list-unstyled">
                                            @foreach ($block->children as $item)

                                                <li class="d-flex mb-5">
                                                    <div class="mr-5">
                                                        <img src="{{$item->img}}" class="wow fadeInUp10"
                                                            data-wow-duration="1s" data-rjs="2" alt=""
                                                            style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp10;">
                                                    </div>
                                                    <div class="col">
                                                        <h3>{!!$item->title!!}</h3>
                                                        {!!$item->caption!!}
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                @case('subscribe')
                    <section class="section" style="background-image: url('block/images/bg_1.png');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="cta-content app">
                                        <h2 class="black">{!!$block->title!!}</h2>
                                        <p class="mb-50">{!!$block->caption!!}</p>
                                        <form
                                            action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                                            class="newslatter-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Введите ваш Email" aria-label="Recipient's username"
                                                    aria-describedby="button-addon2">
                                                <button class="btn btn-info" type="button" id="button-addon2">Попробовать</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                @case('integration')
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center m-auto">
                                    <div class="section-title proto">
                                        <h2 class="proto_c1">{!!$block->title!!}</h2>
                                        <!-- <p></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($block->children as $item)
                                    <div class="col pr-4 pl-4 text-center">
                                        <img src="{{$item->img}}" data-rjs="2" alt=""> 
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    @break

                @case('for')
                    <section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="section-title">
                                        <h2 class="proto_c1">{!!$block->title!!}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-20 justify-content-center">
                                @foreach ($block->children as $item)
                                    <div class="col-lg-3 col-md-6 mb-md-100">
                                        <div class="card text-center">
                                            <div class="mb-4 bg-white align-self-center p-4 rounded"> <img src="{{$item->img}}" data-rjs="2" alt=""></div>
                                            <div class="feature-content">
                                                <h3>{!!$item->title!!}</h3>
                                                {!!$item->caption!!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    @break

                @case('faq')
                    <section class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="section-title semi-bold text-center">
                                        <h2 class="black">{!!$block->title!!}</h2>
                                        <!-- <p></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-between mt-20">
                                <div class="col-lg-6">
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($block->children as $item)
                                            <!-- FAQ item -->
                                            <div type="button" class="accordion-item" data-toggle="collapse" data-target="#collapse_{{$item->id}}" aria-expanded="false" aria-controls="collapse_{{$item->id}}">
                                                <div class="accordion-header" id="headingOne">
                                                    <h3 class="mb-0">
                                                        <img src="blocks/what.png" data-rjs="2" alt="" class="accordion-whatsign">
                                                        {!!$item->title!!}
                                                    </h3>
                                                </div>
                                            
                                                <div id="collapse_{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        {!!$item->caption!!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-5 pt-5 pb-5">
                                    <div class="accordion-right"> <img src="{{$block->img}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @break

                @case('footer')
                    <footer class="section bg-orange pb-0">
                        <div class="container mb-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-7 col-md-12 mb-md-60">
                                    <div class="footer-bottom-left">
                                        <h2>{!!$block->title!!}</h2>
                                        <p>{!!$block->caption!!}</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="footer-bottom-right">
                                        <form
                                            action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                                            class="newslatter-form">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex mb-4">
                                                    <input class="form-control mr-4" type="text" name="name" placeholder="Имя">
                                                    <input class="form-control" type="text" name="phone" placeholder="Телефон">
                                                </div>
                                                <div class="d-flex mb-4">
                                                    <input class="form-control mr-4" type="email" name="email" placeholder="Почта">
                                                    <input class="form-control" type="text" name="position" placeholder="Должность">
                                                </div>
                                                <input class="form-control mb-4" type="text" name="company" placeholder="Компания">
                                                <button type="submit" class="btn btn-warning text-white">Отправить</button>
                                            </div>
                                            <div class="form-check pt-4">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                <label class="form-check-label" for="flexCheckIndeterminate">
                                                    Далеко-далеко за словесными, горами в стране гласных и согласных.
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container bg-white p-sm-5 pt-5 pb-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-5 col-12">
                                    <div class="widget widget_text">
                                        <img src="{{setting('site.logo')}}" class="mb-4" alt="">
                                        <p class="mb-4">Далеко-далеко за словесными горами в стране гласных и согласных живут.</p>
                                        <div class="d-flex socials">
                                            <a class="bg-purple rounded-circle text-white" href="#" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="bg-purple rounded-circle text-white" href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="bg-purple rounded-circle text-white" href="#" target="_blank">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a class="bg-purple rounded-circle text-white" href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-5 col-10">
                                    <div class="mb-4">
                                        <h4 class="text-purple">Features</h4>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a class="link-dark" href="#">Timeline Review</a></li>
                                        <li><a class="link-dark" href="#">Custom fields</a></li>
                                        <li><a class="link-dark" href="#">Custom Templates</a></li>
                                        <li><a class="link-dark" href="#">Task dependencies</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-5 col-10">
                                    <div class="mb-4">
                                        <h4 class="text-purple">Company</h4>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a class="link-dark" href="#">about us</a></li>
                                        <li><a class="link-dark" href="#">pricing plan</a></li>
                                        <li><a class="link-dark" href="#">Privacy &amp; Policy</a></li>
                                        <li><a class="link-dark" href="#">latest news</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-5 col-10">
                                    <div class="mb-4">
                                        <h4 class="text-purple">Customers</h4>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a class="link-dark" href="#">login</a></li>
                                        <li><a class="link-dark" href="#">support</a></li>
                                        <li><a class="link-dark" href="#">help center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-4 pb-4">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="copyright-text style--two"> © 2019 By <a href="https://www.themelooks.com/">Themelooks</a>. All
                                        Rights Reserved</div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    @break
            
                @default
                    Default case...
            @endswitch
        @endforeach



    </main>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html> 
