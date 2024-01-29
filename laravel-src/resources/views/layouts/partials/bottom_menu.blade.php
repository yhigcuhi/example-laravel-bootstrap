{{-- 固定 フッターメニュー --}}
<div class="row w-full bg-dark text-white fixed-bottom p-1">
    {{-- 各フッターメニュー --}}
    <div class="col p-2">
        <a href="{{ route('dashboard') }}" class="text-white text-decoration-none d-flex flex-column align-items-center">
            <i class="fa-solid fa-clock fw-bold"></i>
            <small class="mt-1">ホーム</small>
        </a>
    </div>
    <div class="col p-2">
        <a href="{{ route('shop.show') }}" class="text-white text-decoration-none d-flex flex-column align-items-center">
            <i class="fa-solid fa-shop fw-bold"></i>
            <small class="mt-1">お店</small>
        </a>
    </div>
    <div class="col p-2">
        <a href="{{ route('top.p2') }}" class="text-white text-decoration-none d-flex flex-column align-items-center">
            <i class="fa-solid fa-circle-info fw-bold"></i>
            <small class="mt-1">お知らせ</small>
        </a>
    </div>
    <div class="col p-2">
        <a class="text-white text-decoration-none d-flex flex-column align-items-center">
            <i class="fa-solid fa-circle-user fw-bold"></i>
            <small class="mt-1">設定</small>
        </a>
    </div>
</div>
