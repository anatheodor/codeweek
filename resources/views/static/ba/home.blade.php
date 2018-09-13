@extends('layout.base') @section('content')<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>

    <div id="slider"
         class="slider-parallax full-screen force-full-screen with-header swiper_wrapper page-section clearfix">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('img/ambassadors.jpg');width: 100%;">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter bottommargin"
                                 style="max-width:700px;"></div>


                            <h2 data-caption-animate="fadeInUp">CODEWEEK.EU</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">6. &mdash; 21. oktobar 2018. <a
                                        href="https://twitter.com/search?q=%23codeweek&amp;f=realtime">#codeweek</a></p>
                        </div>
                    </div>
                </div>
            </div><a href="#" data-scrollto="#section-codeweek" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a></div>


    </div><!-- Page Sub Menu --><div id="page-menu">

        <div id="page-menu-wrap">

            <div class="container clearfix">

                <div class="menu-title">Sedmica kodiranja <span>EU</span></div>

                <nav class="one-page-menu">
                    <ul>
                        <li><a href="#section-join" data-href="#section-join"><div>Angažirajte se</div></a></li>
                        <li><a href="#section-partners" data-href="#section-partners"><div>Partneri</div></a></li>
                        <li><a href="#section-contact" data-href="#section-contact"><div>Kontakt</div></a></li>
                    </ul>
                </nav>

                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

            </div>

        </div>

    </div><!-- #page-menu end --> <!-- Content --><section id="content">

        <div>


            <section id="section-intro" class="page-section section section-intro">

                <div class="container clearfix">


                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>&Scaron;ta?</h4>
                        </div>

                        <p>Sedmica kodiranja EU je inicijativa &scaron;irokih masa koja ima za cilj dovesti kodiranje i digitalnu pismenost do svih na zabavan i aktivan način.</p>



                    </div>

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Kada?</h4>
                        </div>

                        <p>6.-21. oktobar 2018.</p>


                    </div>

                    <div class="col_one_third col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Za&scaron;to?</h4>
                        </div>

                        <p>Učenje kodiranja pomaže nam da shvatimo svijet oko nas koji doživljava brze promjene, da pro&scaron;irimo svoje shvatanje kako funkcionira tehnologija te da razvijemo vje&scaron;tine i kapacitete u cilju istraživanja novih ideja i inoviranja.</p>



                    </div>

                </div>

            </section>

            <section id="section-banner-teacher" class="section section-banner">
                <a href="/schools">
                    @include('static.banner_teacher')
                </a>
            </section>


            <section id="section-join" class="page-section section">

                <div class="heading-block center">
                    <h2>Angažirajte se!</h2><span></span></div>

                <div class="container clearfix">


                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Organizirajte aktivnost</h4>
                        </div>

                        <p>Postanite dio Sedmice kodiranja tako &scaron;to ćete organizirati aktivnost. Postignite ne&scaron;to tako &scaron;to ćete inspirirati i motivirati druge.</p>

                        <p>Svi su dobrodo&scaron;li da organiziraju aktivnost. Samo odaberite temu i ciljanu publiku i <a
                                    href="/add">dodajte svoju aktivnost</a> na <a
                                    href="/events">mapu</a>. Za početak možete koristiti i <a
                                    href="/guide">set alata za organizatore</a>.</p>

                        <p>Ako vam je potrebna pomoć ili imate pitanje, možete se obratiti <a
                                    href="/ambassadors">ambasadorima Sedmice kodiranja EU</a> u svojoj zemlji.</p><a href="/events" class="button button-border button-rounded button-large">Postanite organizator</a></div>

                    <div class="col_one_third">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Pridružite se aktivnosti</h4>
                        </div>

                        <p>Kodiranje je za sve. Poku&scaron;ajte ne&scaron;to novo i otkrijte zabavu kodiranja tako &scaron;to ćete se pridružiti <a
                                    href="/events">aktivnosti koja je u va&scaron;oj blizini</a>.</p>

                        <p>Ima dosta događanja za sve uzraste i na razne teme. Uče&scaron;će je besplatno i nema preduslova.</p>

                        <p>Postoji i <a href="/resources/">lista resursa</a> koja će vam pomoći da počnete s kodiranjem upravo sad.</p><a href="/events" class="button button-border button-rounded button-large">Pregledajte aktivnosti</a></div>

                    <div class="col_one_third col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Ra&scaron;irite riječ</h4>
                        </div>

                        <p>Pomozite ovom cilju tako &scaron;to ćete <a href="http://blog.codeweek.eu">pro&scaron;iriti riječ</a> tako da vi&scaron;e ljudi može saznati za Sedmicu kodiranja. Ako znate ljude koji bi bili voljni organizirati događaj, javite im za Sedmicu kodiranja.</p>

                        <p>Imate inspirativnu priču za podijeliti? <a href="http://blog.codeweek.eu/submit">Objavite je na na&scaron;em blogu</a> i mi ćemo je podijeliti.</p>

                        <p>Mi smo na Twitteru kao <a href="https://twitter.com/CodeWeekEU">@CodeWeekEU</a>, na <a
                                    href="https://www.facebook.com/codeEU">Facebooku</a> a koristimo he&scaron;teg <a
                                    href="https://twitter.com/search?q=%23codeweek&amp;f=realtime">#codeweek</a>.</p><a href="http://blog.codeweek.eu" class="button button-border button-rounded button-large">Pogledajte &scaron;ta se de&scaron;ava</a></div>

                    <div class="clear"></div>
                </div>

            </section>

            <section id="section-partners" class="page-section topmargin-lg">
                <div class="container clearfix">

                    <div class="heading-block bottommargin-lg center">
                        <h2>Partneri i sponzori</h2><span>Pomozite nam da pro&scaron;irimo obuhvat i efekte Sedmice kodiranja</span><p>Sedmica kodiranja je inicijativa &scaron;irokih masa koju vode volonteri a koja ima obuhvat od stotina hiljada ljudi &scaron;irom svijeta. Mi stalno tražimo partnere i sponzore koji će nam pomoći u pro&scaron;irivanju. Ako želite biti dio na&scaron;e zajednice i sponzorirati na&scaron;e aktivnosti, kontaktirajte nas.</p><a href="mailto:info@codeweek.eu" class="button button-border button-rounded button-large">Stupite u kontakt</a></p>
                    </div>

                    <div class="">

                    </div>

                    <div class="clear"></div>

                    <ul class="clients-grid grid-4 nobottommargin clearfix">
                        <li><a href="https://www.apple.com/uk/everyone-can-code/"><img src="img/partners/apple.png"
                                                                                       alt="Apple"></a></li>
                        <li><a href="http://www.techsoupeurope.org/"><img src="img/partners/techsoup.png"
                                                                          alt="Tech Soup"></a></li>
                        <li><a href="http://programamos.es"><img src="img/partners/colabora_programamos.png"
                                                                 alt="Programamos"></a></li>
                        <li><a href="http://drscratch.programamos.es"><img src="img/partners/colabora_drscratch.png"
                                                                           alt="Dr.Scratch"></a></li>
                        <li><a href="http://www.publiclibraries2020.eu"><img
                                        src="img/partners/colabora_PublicLibraries2020.png" alt="Public Libraries 2020"></a></li>
                        <li><a href="http://ec.europa.eu/digital-agenda/en/grand-coalition-digital-jobs-0"><img
                                        src="img/partners/digital-skills.png"
                                        alt="Grand Coalition for Digital Jobs"></a></li>
                        <li><a href="http://coderdojo.org"><img src="img/partners/colabora_coderdojo.png"
                                                                alt="CoderDojo"></a></li>
                        <li><a href="http://www.africacodeweek.org/"><img src="img/partners/colabora_africacodeweek.png"
                                                                          alt="Africa Code Week"></a></li>
                        <li><a href="http://www.allyouneediscode.eu/"><img src="img/partners/colabora_aynic.png"
                                                                           alt="All you need is code"></a></li>
                        <li><a href="http://www.eun.org/"><img src="img/partners/colabora_eun.png"
                                                               alt="European Schoolnet"></a></li>
                        <li><a href="http://scratch.mit.edu/codeweekeu"><img src="img/partners/colabora_scratch.png"
                                                                             alt="Scratch"></a></li>
                        <li><a href="http://www.ictinpractice.com/"><img src="img/partners/colabora_ict-in-practice.png"
                                                                         alt="ICT In Practice"></a></li>
                        <li><a href="http://www.neunet.it/"><img src="img/partners/colabora_neunet.png"
                                                                 alt="NeuNet"></a></li>
                        <li><a href="https://edu.google.com/resources/computerscience"><img
                                        src="img/partners/google.png" alt="Google"></a></li>
                        <li><a href="https://education.lego.com/en-gb/secondary/explore/c/eu-code-week"><img
                                        src="img/partners/lego.png" alt="LEGOeducation"></a></li>
                        <li><a href="http://www.sap.com/"><img src="img/partners/sap-logo.png" alt="SAP"></a></li>
                        <li><a href="http://www.stifter-helfen.de/"><img src="img/partners/stifter-helfen.png"
                                                                         alt="Stifter Helfen"></a></li>
                        <li><a href="http://eutechalliance.eu/"><img src="img/partners/eu-tech-alliance.png"
                                                                     alt="EU Tech Alliance"></a></li>


                    </ul>

                </div>
            </section>

            <section id="section-contact" class="page-section section">

                <div class="heading-block title-center">
                    <h2>Stupite u kontakt s nama</h2><span>Jo&scaron; uvijek imate pitanja? Samo <a href="mailto:info@codeweek.eu">nam se javite</a>.</span></div>

            </section>

        </div>

    </section><!-- #content end --> @endsection @push('scripts')<script>
        window.$(function ($) {
            var newDate = new Date(2018, 9, 6);
            $('#countdown-ex1').countdown({until: newDate});
        });
    </script>@endpush @section('extra-css')<style>

        .section-intro, .section-banner {

            background: transparent;

        }


    </style>@endsection