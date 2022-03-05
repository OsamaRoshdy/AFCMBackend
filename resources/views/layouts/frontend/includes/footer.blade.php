<footer class="footer">
    @yield('footer')
    <div class="footer__main">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="footer__block">
                        <h4 class="footer__title d-block text-center">About AFCM</h4>
                        <div class="logo">
                            <a class="logo__img" href="http://localhost/AFCM/en">
                                <img src="AFMC-project/assets/images/logo.png" alt="Logo">
                            </a>
                            <a class="logo__dis" href="http://localhost/AFCM/en">
                                ARMED FORCES <span> COLLEGE OF MEDICINE </span>
                            </a>
                        </div>
                        <article>
                            <p>
                                To achieve excellence in medical education and scientific research and to become the
                                regional reference in military medicine.

                            </p>
                        </article>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="footer__block">
                        <h4 class="footer__title d-block text-center">Site Map</h4>
                        <ul class="footer__links" style="column-count: 2">

                            @foreach(getLinksFooter() as $link)
                            <li>
                                <a class="link link__footer"
                                   href="http://localhost/AFCM/en/Why_AFCM_">Contact The Colledge</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="footer__block">
                        <h4 class="footer__title d-block text-center">Success Partneer</h4>
                        <ul class="footer__contact" style="column-count: 2">
                            @foreach(getPartnerFooter() as $partner)
                            <li>
                                <div class="container">
                                    <div class="img">
                                        <img
                                            src="{{ $partner->image }}"
                                            class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="footer__block">
                        <h4 class="footer__title d-block text-center">Contact Us</h4>
                        <ul class="footer__contact">
                            <li>
                                <i class="bi bi-geo-alt-fill footer_bi"></i>
                                <span>Ihsan Abd El Quddus Street (from Al Khalifa Al Mumin Street), Sirah,
                                        Egypt.</span>
                            </li>
                            <li>
                                <i class="bi bi-phone footer_bi"></i>
                                <a class="link link__footer" href="fax:02-24032839">02-24032839</a>
                            </li>
                            <li>
                                <i class="bi bi-telephone-fill footer_bi"></i>
                                <a class="link link__footer" href="tel:02-24032872">02-24032872 - 02-24032843</a>
                            </li>
                            <li>
                                <i class="bi bi-envelope-fill footer_bi"></i>
                                <a class="link link__footer" href="mailto:Afcm@mod.gov.eg">Afcm@mod.gov.eg</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <p class="footer__copyright">All Rights Reserved to AFCM</p>
        </div>
    </div>
</footer>
