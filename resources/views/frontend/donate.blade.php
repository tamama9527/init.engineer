@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.donate'))

@section('content')
{{-- 發財種子 專用(乾爹許願.png) --}}
<fadacai-dasabi></fadacai-dasabi>
<div class="container-fluid my-5 animated fadeIn text-center text-white">
    <h1 class="display-1" style="font-family: MatissePro EB;">贊助我們就是</h1>
    <img class="w-100" src="/img/frontend/fadacai/乾爹許願.png">
    <h1 class="display-4" style="font-family: MatissePro EB;">臺灣安全、人民有錢</h1>
</div>
<footer-spotlight></footer-spotlight>

{{-- 讚 吉祥物 --}}
<div>
    <img class="position-fixed" style="right: 24px; max-width: 256px; bottom: 0px; z-index: 1;" src="/img/frontend/gif/8.gif" alt="吉祥物">
    <img class="position-fixed" style="right: 84px; max-width: 256px; bottom: -6px; z-index: 1;" src="/img/frontend/gif/9.gif" alt="吉祥物">
    <img class="position-fixed" style="right: 144px; max-width: 256px; bottom: 0px; z-index: 1;" src="/img/frontend/gif/10.gif" alt="吉祥物">
</div>

{{-- 雲端服務最愛用的方案價格機制 --}}
{{-- <div class="container">
    <img src="https://www.cameronsworld.net/img/content/24/70.gif" class="rounded w-100 my-5">
    <img src="/img/frontend/banner/Qj8fFn6.png" alt="贊助方案" class="rounded w-100" />
    <img src="https://www.cameronsworld.net/img/content/24/70.gif" class="rounded w-100 my-5">
</div> --}}

{{-- 真正在介紹贊助 --}}
<div class="container">
    <h1 class="text-white text-center display-1" style="font-family: MatissePro EB;">贊助有什麼好處？</h1>
    <div class="row d-flex justify-content-center mx-1">
        <div class="col-12 col-lg-5 card border border-4 text-white bg-img-rock m-2">
            <div class="card-header border-bottom border-w-4 display-4" style="font-family: MatissePro EB;">實況贊助</div>
            <div class="card-body d-flex flex-column" style="font-size: 1.6rem;">
                <p class="card-text">在直播的時候會有感謝贊助的音樂、圖示出現在直播當中，你可以許些願望，我覺得可行的話，會把願望加入 issues 當中，並且嘗試去實踐它。</p>
                <iframe class="mb-3" src="https://player.twitch.tv/?channel=kantai235" allowfullscreen="true" scrolling="no" frameborder="0"></iframe>
                <a href="https://p.ecpay.com.tw/02596" class="btn btn-lg btn-block btn-rainbow mt-auto">點我前往 實況贊助</a>
            </div>
        </div>
        <div class="col-12 col-lg-5 card border border-4 text-white bg-img-rock m-2">
            <div class="card-header border-bottom border-w-4 display-4" style="font-family: MatissePro EB;">單純贊助</div>
            <div class="card-body d-flex flex-column" style="font-size: 1.6rem;">
                <p class="card-title card-text">你可能會發現我們網站的頁尾有個「感謝xx贊助了xx塊錢，大約是xx個小時的伺服器費用。」的小文宣，這是專為贊助者所設置的，我們希望把贊助者善舉的這件事用這樣的方式來保存，至於保留的時間計算方式則是 6 小時 10 元，也就是說贊助 2,400 元將會掛 60 天。</p>
                <p class="card-text">如果您希望贊助同時留下感謝贊助的話，可能需要順便提供你想顯示的大頭貼、名字，如果想單純匿名贊助也可以。</p>
                <a href="https://cart.cashier.ecpay.com.tw/qp/bct4" class="align-items-end btn btn-lg btn-block btn-rainbow mt-auto">點我前往 單純贊助</a>
            </div>
        </div>
    </div>
</div>

{{-- Nyan 貓貓 --}}
<img class="nyan mb-5" style="margin-left: -25vw; width: 80vw; height: auto;" src="https://ziad-saab.github.io/nyan/nyan.gif">
@endsection
