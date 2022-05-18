<?php get_header(); ?>


<!-- Carrosel Inicial -->
<section id="banner-inicial">
    <div id="carousel-banner" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">


            <!-- Título Carrosel -->
            <div class="allign-box">
                <div class="titulo-banner container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>
                                Landing page for Real Estate
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters,
                                <span>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>


            <!-- Imagens Background Carrosel -->
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/assets/img/carousel-bg-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/assets/img/carousel-bg-1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/assets/img/carousel-bg-1.png" alt="Third slide">
            </div>


        </div>
    </div>

</section>

<!-- Barra Explore -->
<section id="barra-explore">
    <div class="conteudo-explore flexMode">
        <div class="titulo-explore">
            Explore community
        </div>
        <div class="items-explore">
            <div class="item-explore">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69px" height="69px">
                    <image x="0px" y="0px" width="69px" height="69px" xlink:href="data:img/png;base64,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" />
                </svg>
                <div class="desc-explore">40 Lifestyle Awards</div>
            </div>

            <div class="item-explore">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69px" height="69px">
                    <image x="0px" y="0px" width="69px" height="69px" xlink:href="data:img/png;base64,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" />
                </svg>
                <div class="desc-explore">Happy Family</div>
            </div>

            <div class="item-explore">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69px" height="69px">
                    <image x="0px" y="0px" width="69px" height="69px" xlink:href="data:img/png;base64,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" />
                </svg>

                <div class="desc-explore">20 Years</div>
            </div>
        </div>
    </div>
</section>

<!-- Our Home -->

<section id="nossa-casa">

    <!-- Caixa de texto -->
    <div class="caixa-texto">
        <div class="titulo-nossa-casa">
            <h1>Our Home and flats</h1>
        </div>

        <div class="desc-nossa-casa">
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The point of
            using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
        </div>
    </div>

    <!-- Galeria de imagens -->
    <div class="expo">
        <div class="box-expo flexMode">

            <div class="col-expo flexMode">
                <div class="img-expo">
                    <div class="background-expo"></div>
                    <img class="" src="<?php bloginfo('template_url') ?>/assets/img/img-expo-1.png" alt="">
                </div>
                <div class="desc-expo">Distracted</div>
            </div>

            <div class="col-expo">
                <div class="img-expo">
                    <div class="background-expo"></div>
                    <img class="" src="<?php bloginfo('template_url') ?>/assets/img/img-expo-2.png" alt="">
                </div>
                <div class="desc-expo">Distracted</div>
            </div>

            <div class="col-expo">
                <div class="img-expo">
                    <div class="background-expo"></div>
                    <img class="" src="<?php bloginfo('template_url') ?>/assets/img/img-expo-3.png" alt="">
                </div>
                <div class="desc-expo">Distracted</div>
            </div>
        </div>
    </div>
</section>


<!-- Find House -->
<section id="encontrar-casa" style="background-image:url(<?php bloginfo('template_url') ?>/assets/img/bg-encontrar.png)">
    <div class="box">
        <div class="caixa-texto">
            <div class="titulo-encontrar">
                <h1>Find your house wihtout any difficulties</h1>
            </div>
            <div class="desc-encontrar">
                It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum
                is that it has a more-or-less normal distribution of letters,
            </div>
            <a class="botao-encontrar" href=""> Read More</a>
        </div>
    </div>
</section>

<!-- Balance -->

<section id="balance">
    <div class="titulo-balance">
        <h1>A unique balance of luxury life</h1>
    </div>

    <div class="box-balance">
        <div class="flexMode">
        <div class="info-balance flexMode">
            <div>
                <div class="num-balance">
                    <div class="flexMode"><span>01</span></div>
                </div>
                <div class="desc-balance">
                    It is a long established fact that a reader will
                    be distracted by the readable content of a page
                    when looking at its layout. The point of using
                    Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using
                    'Content here, content here', making it look
                </div>
            </div>
            <a class="botao-balance" href="">See More</a>
        </div>
        <div class="img-balance">
            <img src="<?php bloginfo('template_url') ?>/assets/img/img-balance.png" alt="">
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>

