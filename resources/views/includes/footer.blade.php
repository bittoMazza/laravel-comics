<footer>
<div class="top-footer-container">
    <div class="container">
        <div class="row">
            <div class="col-6 py-5 d-flex">
                <div>
                    <ul>
                        <h3 class="text-white">DC COMICS</h3>
                        @foreach ($dc_comics_link as $link)
                            <li>
                                <a href="#">{{ $link['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <h3 class="text-white">SHOP</h3>
                        @foreach ($dc_comics_link as $link)
                            <li>
                                <a href="#">{{ $link['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="px-3">
                    <ul>
                        <h3 class="text-white">DC</h3>
                        @foreach ($dc_info as $link)
                            <li>
                                <a href="#">{{ $link['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <h3 class="text-white">SITES</h3>
                        @foreach ($dc_comics_link as $link)
                            <li>
                                <a href="#">{{ $link['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <img class="w-100 position-relative logo-dc-bg" src="../assets/img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="low-footer-container py-4">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="sign-up-btn"> SIGN-UP NOW</a>
        <div class="d-flex align-items-center social-container">
            <span>FOLLOW US</span>
            <a href="#"><img src="../assets/img/footer-facebook.png" alt=""></a>
            <a href="#"><img src="../assets/img/footer-periscope.png" alt=""></a>
            <a href="#"><img src="../assets/img/footer-pinterest.png" alt=""></a>
            <a href="#"><img src="../assets/img/footer-twitter.png" alt=""></a>
            <a href="#"><img src="../assets/img/footer-youtube.png" alt=""></a>
        </div>
    </div>
</div>
</footer>
