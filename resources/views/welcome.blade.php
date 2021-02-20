@extends('layouts.front')

@section('content')

<!--SLider sec start-->
<section class="slider-area cursor-light">
    <div class="bg-overlay"></div>
    <div class="container position-relative">
        <div class="inner-bg-overlay"></div>
        <div class="row">
            <div class="slider-detail col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".8s">
                <div class="slider-slide">
                    <div class="slider-inner-content">
                        <h4 class="slide-heading text-uppercase">En <span> BroAD </span></h4>
                        <p class="slide-text">Tenemos un amplio conocimiento de los elementos fiscales, regulatorios y de mercados, así como estrechas relaciones con autoridades y ejecutivos clave dentro de los diversos participantes en el mercado de valores.</p>
                        <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEER MÁS
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
                <div class="slider-slide">
                    <div class="slider-inner-content">
                        <h4 class="slide-heading text-uppercase">Los profesionistas<span> </span></h4>
                        <p class="slide-text">De BROAD tenemos una amplia y reconocida experiencia evaluando, estructurando, desarrollando e implementando productos financieros innovadores que cumplen con los requerimientos de inversión de nuestros clientes</p>
                        <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEER MÁS
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
                <div class="slider-slide">
                    <div class="slider-inner-content">
                        <h4 class="slide-heading text-uppercase">Ya <span>sea como </span></h4>
                        <p class="slide-text">BROAD o en lo individual, nuestro equipo ha participado en la estructuración de por lo menos 40 transacciones de banca de inversión y poco más de 100 en las que se han diseñado diversos productos de tesorería, también conocidos como estrategias de cobertura con derivados.</p>
                        <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEER MÁS
                            <span></span><span></span><span></span><span></span>
                        </a> 
                    </div>
                </div>
            </div>
            <div class="slider-img col-12 col-lg-6 wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                <div class="img-slide">
                    <img src="{{ asset('bro-advisory/img/example10.jfif') }}">
                </div>
                <div class="img-slide">
                    <img src="{{ asset('bro-advisory/img/example8.jpg') }}">
                </div>
                <div class="img-slide">
                    <img src="{{ asset('bro-advisory/img/example3.jpg') }}">
                </div>
            </div>
        </div>
        <div class="slider-arrows">
            <a href="javascript:void(0);" class="slider-arr slider-arr-up link" id="slider-arr-up"><i class="fas fa-angle-up"></i></a>
            <a href="javascript:void(0);" class="slider-arr slider-arr-down link" id="slider-arr-down"><i class="fas fa-angle-down"></i></a>
        </div>
    </div>
    <div class="slider-icons">
        <ul class="slider-social banner-social">
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-facebook-f"></i> </a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-twitter"></i>  </a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-linkedin"></i> </a></li>
            <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="fab fa-instagram"></i> </a></li>
        </ul>
    </div>
</section>
<!--SLider sec End-->

<!--About sec start-->
<section class="about-sec" id="about-sec">
    <div class="about-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                <div class="purple-overlay"></div>
                <div class="row no-gutters wow fadeInLeft">
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-stats-up"></i></a>
                            </div>
                            <h4 class="card-heading">Deuda</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-handshake"></i></a>
                            </div>
                                <h4 class="card-heading">M&A</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-invest-monitor"></i></a>
                            </div>
                                <h4 class="card-heading">FX & IR</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <a class="scroll" href="#asesoria"><i class="lni lni-investment"></i></a>
                            </div>
                            <h4 class="card-heading">Capital</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left">
                <div class="about-content wow fadeInRight">
                    <div class="about-inner-content">
                        <h4 class="heading text-uppercase">BRO<span class="text-yellow" style="display:inline-block">AD</span></h4>
                        <p class="text">
                            Es una firma de asesoría financiera y legal a empresas, inversionistas institucionales, fondos y financial sponsors, en estructuración de financiamiento, IPOs, procesos de M&A, valuaciones y reestructuras y estrategias de optimización, valuación y cobertura de riesgos de tipo de cambio y tasa de interés con productos derivados.
                        </p>
                        <p class="text">
                            Nuestra especialidad se centra en la estructuración de productos financieros que atiendan a las necesidades de fondeo y cobertura de las empresas.
                        </p>
                        <!-- <a href="#about-sec" class="btn white-trans-btn rounded-pill">LEER MÁS
                        <span></span><span></span><span></span><span></span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About sec End-->

<!--Stats sec start-->
<section class="stats-sec padding-top padding-bottom" id="stats-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 stats-heading-area">
                <h4 class="heading text-uppercase text-center wow fadeIndown">Nuestros servicios</h4>
                <div class="row">
                    <div class="col-12 services pt-4" >
                        <h4 class="darkcolor py-4 text-center wow fadeInLeft">PRODUCTOS DE <span style="color: #ff9c07">TESORERÍA</span></h4>
                        <div class="row">
                            <div class="col wow fadeInLeft">
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Análisis y valuación de cualquier estrategia de cobertura propuesta</span>
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Obtención del “costo flat” de cualquier producto de tesorería</span>
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Recomendación de la mejor estrategia de optimización y cobertura para cualquier activo subyacente, siempre tomando en cuenta las necesidades del cliente</span>
                            </div>
                            <div class="col wow fadeInRight">
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Determinación del Credit Value Adjustment (“CVA”) y Return on Assets (“RAR”), para cualquier estrategia de cobertura</span>
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Obtención de líneas de financiamiento para operar derivados con cualquier institución financiera establecida en México</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 services pt-4">
                        <h4 class="darkcolor py-4 text-center wow fadeInLeft">BANCA DE <span style="color: #ff9c07">INVERSIÓN M&A</span></h4>
                        <div class="row">
                            <div class="col wow fadeInLeft">
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Análisis de las alternativas de financiamiento público, privado, bancario, bursátil, mezzanine o capital</span>
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Diseño, estructuración, calificación, implementación, autorización y fondeo del financiamiento específico</span>
                                <span id="asesoria" class="sub-heading-text"><span class="pr-2 li">►</span>Calificación de financiamientos aplica fundamentalmente para financiamientos púbicos vía el mercado de valores</span>
                            </div>
                            <div class="col wow fadeInRight">
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Obtención de aprobaciones por parte de los reguladores</span>
                                <span class="sub-heading-text"><span class="pr-2 li">►</span>Obtención de las aprobaciones necesarias por parte de los comités de crédito y/o riesgos por parte de los inversionistas para un exitoso fondeo de los financiamientos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 services pt-4">
                        <h4 class="darkcolor py-4 wow fadeInLeft text-center"><span style="color: #ff9c07">ASESORAMIENTO</span> EN</h4>
                        <div class="row text-center">
                            <div class="col-12 col-lg-6 wow fadeInLeft card-icons pb-3">
                                <div class="service-card">
                                    <div class="icon-holder">
                                    <i class="lni lni-investment"></i>
                                    </div>
                                <h4 class="card-heading pb-3">CAPITAL</h4>
                                <p class="text-dark text-left sub-heading-text">Asesoría para preparar compañías privadas para emisiones públicas de acciones (IPOs), Follow-on, oferta secundarias, suscripciones y ofertas dirigidas, entre otros.</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 wow fadeInRight card-icons pb-3">
                                <div class="service-card">
                                    <div class="icon-holder">
                                    <i class="lni lni-stats-up"></i>
                                </div>
                                <h4 class="card-heading pb-3">DEUDA</h4>
                                <p class="text-dark text-left sub-heading-text">Brindamos un servicio integral para el levantamiento de recursos a través de colocaciones de capital, mezzanine, instrumentos convertibles, crédito preferente deuda subordinada y otros instrumentos híbridos a nivel nacional e internacional.</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 wow fadeInLeft card-icons">
                                <div class="service-card">
                                    <div class="icon-holder">
                                    <i class="lni lni-handshake"></i>
                                </div>
                                <h4 class="card-heading pb-3">M&A</h4>
                                <p class="text-dark text-left sub-heading-text">Brindamos el servicio de fusiones y Adquisiciones (M&A), desinversiones y escisiones (Spin-off), adquisiciones apalancadas (LBO, MBO y MBI), alianzas estratégicas y joint-ventures, ampliaciones y reestructuras de capital, proyectos de evaluación financiera y valuación de empresas y activos (fairness opinion) para empresas públicas y privadas en diversas industrias en mercados nacionales como internacionales.</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 wow fadeInRight card-icons">
                                <div class="service-card">
                                    <div class="icon-holder">
                                    <i class="lni lni-invest-monitor"></i>
                                </div>
                                <h4 class="card-heading pb-3">FX & IR</h4>
                                <p class="text-dark text-left sub-heading-text">Brindamos asesoría en: optimización y cobertura de riesgos de tipo de cambio de diversas monedas (FX options) y tasa de interés (CCS, IRS, COS, Swaptions, Caps) con derivados, contratos ISDA y líneas de crédito para operar TH, valuaciones de MTM y llamadas de margen, valuación de costos reales de diversas estrategias presentadas por bancos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5">
                                <h4 class="darkcolor pb-4 wow fadeInLeft text-center" style="font-size: 18px;">Nuestra <span style="color: #ff9c07">asesoría</span> consistirá en</h4>
                                <div class="row">
                                    <div class="col wow fadeInLeft">
                                        <span class="sub-heading-text"><span class="pr-2 li">►</span>Valuar, analizar y estructurar el financiamiento adecuado para los proyectos de propósito especifico, filiales o subsidiarias de EVENPLAN a través de diferentes instrumentos de deuda o capital</span>
                                        <span class="sub-heading-text"><span class="pr-2 li">►</span>El monto de la o las operaciones a ser realizadas será determinado una vez que BROAD haya analizado los flujos de efectivo correspondientes, así como la documentación legal pertinente</span>
                                    </div>
                                    <div class="col wow fadeInRight">
                                        <span class="sub-heading-text"><span class="pr-2 li">►</span>BROAD podrá llevar a cabo las actividades anteriores por sí mismo o mediante la contratación de expertos en las distintas áreas de especialidad, tales como despachos de abogados, contadores públicos, técnicos independientes y fiduciarios que en todo caso serán sufragados por la Empresa previa autorización</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Stats sec End-->

<!--Team sec start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading">NUESTRO <span>EQUIPO</span></h4>
                    <p class="text">
                        Nuestro equipo cuenta con el conocimiento, la trayectoria y las relaciones necesarias para instrumentar cualquier financiamiento público o privado, así como para instrumentar cualquier transacción de fusión o adquisición (M&A).
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('bro-advisory/img/example11.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!--Team Social-->
                                        <ul class="team-social">
                                            <li><a class="facebook-text-hvr" href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter-text-hvr" href="javascript:void(0);">  <i class="fab fa-twitter"></i> </a></li>
                                            <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Andrés Romero Arias</h4>
                                    <p class="team-designation">Partner | Banca de Inversión</p>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('bro-advisory/img/example11.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!--Team Social-->
                                        <ul class="team-social">
                                            <li><a class="facebook-text-hvr" href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter-text-hvr" href="javascript:void(0);">  <i class="fab fa-twitter"></i> </a></li>
                                            <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Gerardo López Flores</h4>
                                    <p class="team-designation">Partner | Banca de Inversión</p>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('bro-advisory/img/example11.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!--Team Social-->
                                        <ul class="team-social">
                                            <li><a class="facebook-text-hvr" href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter-text-hvr" href="javascript:void(0);">  <i class="fab fa-twitter"></i> </a></li>
                                            <li><a class="instagram-text-hvr" href="javascript:void(0);"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a class="pinterest-text-hvr" href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Alejandro Bringas Piña</h4>
                                    <p class="team-designation">Partner | FX & IR Derivatives</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:void(0);" class="team-nav team-prev" id="team-prev">
                        <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="javascript:void(0);" class="team-nav team-next" id="team-next">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team sec End-->


<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading">NUESTRA <span>EXPERIENCIA</span></h4>
                </div>
                <div class="col-md-12 pt-5">
                    <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item" style="margin-right: 6px;">TODAS</div>
                        <div data-filter=".tesoreria" class="cbp-filter-item" style="margin-right: 6px;">PRODUCTOS DE TESORERÍA</div>
                        <div data-filter=".inversion" class="cbp-filter-item" style="margin-right: 6px;">BANCA DE INVERSIÓN</div>
                        <div data-filter=".financiero" class="cbp-filter-item" style="margin-right: 6px;">ASESOR FINANCIERO</div>
                    </div>

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                        <div class="cbp-item tesoreria">
                            <a href="#asesor-financiero" class="scroll cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example4.jpeg') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">PRODUCTOS DE TESORERÍA</h4>
                                        <p class="p-hover-des">En los que hemos participado y cerrado</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item tesoreria">
                            <a href="#asesor-financiero" class="scroll cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example5.jpeg') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">PRODUCTOS DE TESORERÍA</h4>
                                        <p class="p-hover-des">En los que hemos valuado y cerrado</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item inversion">
                            <a href="#asesor-financiero" class="scroll cbp-caption " data-title="Workout Buddy<br>by Tiberiu Neamu">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example6.jpg') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">BANCA DE INVERSIÓN</h4>
                                        <p class="p-hover-des">En los que hemos estructurado y vendido</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item financiero">
                            <a href="#asesor-financiero" class="scroll cbp-caption" >
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('bro-advisory/img/example7.png') }}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">ASESOR FINANCIERO</h4>
                                        <p class="p-hover-des">Líder en la estructuración de financiamientos bursátiles</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->


<!--testimonial section start-->
<div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
    <div class="right-overlay"></div>
    <div class="container">
        <div class="testimonial-area padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center text-center text-lg-left left-bg">
                        <div class="testimonial-details wow fadeInLeft">
                            <h4 class="heading">CLIENTES <span class="span">SATISFECHOS</span></h4>
                            <p class="text">
                                Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <div class="testimonial-carousel wow fadeInRight">
                            <div class="testimonial-box owl-carousel owl-theme">
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                                    </p>
                                    <div class="img-holder">
                                        <img src="{{ asset('bro-advisory/img/bimbo.png') }}">
                                    </div>
                                    <h4 class="user-name">Grupo Bimbo</h4>
                                </div>
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                                    </p>
                                    <div class="img-holder">
                                        <img src="{{ asset('bro-advisory/img/bachoco.png') }}">
                                    </div>
                                    <h4 class="user-name">Bachoco</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial section end-->


<!--sponsers section start-->
<div class="sponser-sec padding-top" id="asesor-financiero">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 py-4 wow fadeInRight" >
                <h4 class="heading-title pb-3">Productos de <span class="text-yellow">tesorería</span> en los que hemos <span class="text-blue">participado</span> y <span class="text-blue">cerrado</span></h4>
                <div class="sponser-tags owl-carousel owl-theme">
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/bimbo.png') }}">
                        </div>
                        <div class="content_footer">
                            <p class="sub_title">Cross Currency Swap</p>
                            <p class="sub_years">10 años</p>
                            <p class="sub_title black">USD $40 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/mexichem.png') }}">
                        </div>
                        <div class="content_footer">
                            <p class="sub_title">Coupon Only Swap</p>
                            <p class="sub_years">7 años</p>
                            <p class="sub_title black">EUR/USD $70 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/alsea.png') }}">
                        </div>
                        <div class="content_footer">
                            <p class="sub_title">FX Options | Knock Out Forward</p>
                            <p class="sub_years">1 años</p>
                            <p class="sub_title black">USD $35 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/palacio_de_hierro.png') }}">
                        </div>
                        <div class="content_footer">
                            <p class="sub_title">Interest Rate Swap</p>
                            <p class="sub_years">5 años</p>
                            <p class="sub_title black">USD $2,500 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/gerdau.png') }}">
                        </div>
                        <div class="content_footer">
                            <p class="sub_title">Interest Rate Swap</p>
                            <p class="sub_years">7 años</p>
                            <p class="sub_title black">USD $5,000 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/jugos_del_valle.png') }}">
                        </div>
                        <div class="content_footer">    
                            <p class="sub_title">Interest Rate Swap</p>
                            <p class="sub_years">5 años</p>
                            <p class="sub_title black">USD $1,000 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/tmm.png') }}">
                        </div>
                        <div class="content_footer">
                            <p class="sub_title">Interest Rate Cap</p>
                            <p class="sub_years">3 años</p>
                            <p class="sub_title black">USD $10,500 millones</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/tv_azteca.png') }}">
                        </div> 
                        <div class="content_footer">
                            <p class="sub_title">Coupon Only Swap</p>
                            <p class="sub_years">7 años</p>
                            <p class="sub_title black">USD/MXN $400 millones</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4 wow fadeInLeft">
            <h4 class="heading-title pb-3">Productos de <span class="text-yellow">tesorería</span> en los que hemos <span class="text-blue">valuado</span> y <span class="text-blue">cerrado</span></h4>
                <div class="sponser-tags owl-carousel owl-theme">
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/bachoco.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/fibra_hd.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/financiera_atlas.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/la_vasconia.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/elementia.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/idesa.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/totalplay.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/fibra_hd.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4 wow fadeInRight">
            <h4 class="heading-title pb-3">Banca de <span class="text-yellow">inversión</span> en los que hemos <span class="text-blue">estructurado</span> y <span class="text-blue">vendido</span></h4>
                <div class="sponser-tags owl-carousel owl-theme">
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/grupo_iamsa.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/cas.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/canal_5.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/tmm.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/promotora_fresnillo.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/grupo_herradura_occidente.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/tuca.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/tv_azteca.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4 wow fadeInLeft">
            <h4 class="heading-title pb-3">Asesor <span class="text-yellow">financiero</span> líder en la <span class="text-blue">infraestructura</span> de <span class="text-blue">financiamientos bursátiles</span></h4>
                <div class="sponser-tags owl-carousel owl-theme">
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/pinfra.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/dinero_express.svg') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/instituto_de_control_vehicular.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/fonacot.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/docsolutions.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/grupo_jap.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/ssl_digital.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-img">
                            <img class="img_gray" src="{{ asset('bro-advisory/img/orsan.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--sponsers section end-->


<!--Blogs section start-->
<section class="blog-sec" id="blog-sec">
    <div class="left-overlay"></div>
    <div class="container position-relative">
        <div class="blog-inner-overlay"></div>
        <div class="row blog-area">
            <div class="col-12 col-lg-5 d-flex align-items-center text-center text-lg-left">
                <div class="blog-detail wow fadeInLeft">
                    <h4 class="heading text-black text-uppercase">ÚLTIMAS <span>ENTRADAS DE BLOG</span></h4>
                    <p class="text text-black">
                        Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.
                    </p>
                    <a class="btn anim-btn rounded-pill" href="architect-studio/standard-blog.html">LEER MÁS
                    <span></span><span></span><span></span><span></span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="blog-img wow fadeInRight">
                    <img src="{{ asset('bro-advisory/img/example8.jpg') }}" alt="blog-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blogs section end-->


<!--Contact section start-->
<section class="contact-sec padding-top padding-bottom" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h4 class="heading text-center text-lg-left text-uppercase">Contáctanos</h4>
                <form class="row contact-form wow fadeInLeft" id="contact-form-data">
                    <div class="col-sm-12" id="result"></div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="userName" placeholder="Nombre" class="form-control">
                        <input type="email" name="userEmail" placeholder="Email*" class="form-control">
                        <input type="text" name="userSubject" placeholder="Asunto" class="form-control">
                    </div>
                    <div class="col-12 col-md-7">
                        <textarea class="form-control" name="userMessage" rows="6" placeholder="Tu Mensaje"></textarea>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn yellow-btn rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> Enviar Mensaje
                            <span></span><span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                <div class="contact-details wow fadeInRight">
                    <h4 class="heading text-uppercase">Encuentranos en</h4>
                    <!-- <p class="text">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered .
                    </p> -->
                    <ul>
                        <li style="width: 100% !important;"><i class="lni lni-map-marker addr"></i>Javier Barros Sierra 540, Torre 1, Piso 5 Santa Fe, C.P. 01210 CDMX </li>
                        <li><i class="lni lni-phone"></i>
                        <span>(55) 3633 2080</span>
                        <span>(55) 7672 4817</span>
                        </li>
                        <li><i class="lni lni-envelope"></i>abringas@bropartners.com</li>
                    </ul>
                </div>
                <img src="{{ asset('bro-advisory/img/contact-background.png') }}" class="contact-background" alt="contact">
            </div>
        </div>
    </div>
</section>
<!--Contact section end-->

@endsection