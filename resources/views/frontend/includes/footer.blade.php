<footer class="footer bg-black text-white page-footer font-small unique-color-dark">
    <div class="container">
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
            <!-- Grid column -->
        </div>
        <!-- Grid row-->
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-white font-weight-bold">關於本站</h6>
                <hr class="bg-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 32px;">
                <p><img class="img-fluid rounded w-100" src="{{ asset('/img/frontend/background/WsOFRId.png') }}" alt="就看你能多有梗" /></p>
            </div>

            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-white font-weight-bold">聯絡我們</h6>
                <hr class="bg-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 32px;">
                <p><i class="fas fa-envelope mr-3"></i> tamama9527@gmail.com</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-white font-weight-bold">服務項目</h6>
                <hr class="bg-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 32px;">
                <p><a href="{{ route('frontend.policies') }}">{{ __('navs.frontend.policies') }}</a></p>
                <p><a href="{{ route('frontend.social.cards.index') }}">{{ __('navs.frontend.social.cards.index') }}</a></p>
                <p><a href="{{ route('frontend.social.cards.create') }}">{{ __('navs.frontend.social.cards.create') }}</a></p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-white font-weight-bold">社群平台</h6>
                <hr class="bg-white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 32px;">
                <p><a href="https://kaobei.engineer"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/Zl6Mrfs.png') }}" alt="官方網站" /></a></p>
                <p><a href="https://www.facebook.com/kaobei.engineer"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/zgwvd6x.png') }}" alt="Facebook 測試機" /></a></p>
                <p><a href="https://www.facebook.com/init.kobeengineer"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/3qOl69x.png') }}" alt="Facebook 正式機" /></a></p>
                <p><a href="https://twitter.com/kaobei_engineer"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/aPI28fr.png') }}" alt="Twitter" /></a></p>
                <p><a href="https://www.plurk.com/kaobei_engineer"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/SFcRaLN.png') }}" alt="Plurk" /></a></p>
                <p><a href="https://www.instagram.com/kaobei.engineer"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/6FgkF3R.png') }}" alt="Instagram" /></a></p>
                <p><a href="https://kaobei-engineer.tumblr.com"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/dffwOx9.png') }}" alt="Tumblr" /></a></p>
                <p><a href="https://discord.gg/tPhnrs2"><img class="img-fluid rounded" src="{{ asset('img/frontend/banner/tknHq2i.png') }}" alt="Discord" /></a></p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-white py-3">
        <p class="m-0">{!! __('strings.frontend.general.all_rights_reserved', ['year' => date('Y'), 'app_name' => app_name()]) !!}</p>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
