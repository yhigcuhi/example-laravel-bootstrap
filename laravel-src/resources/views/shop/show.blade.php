<x-app-layout>
    {{-- Wrapper --}}
    <div>
        <div class="d-flex flex-column overflow-scroll">
            <section class="mb-4">
                {{--  title --}}
                <div class="px-2 d-flex align-items-center gap-4">
                    <a class="navbar-brand me-0 p-0" href="#">ロゴ</a>
                    <span class="d-flex flex-column justify-content-start">
                        <h5 class="card-title m-0">AAA サロン</h5>
                        <small>アアア サロン</small>
                    </span>
                </div>
                {{--  navigation --}}
                <div class="row w-full">
                    {{-- 各フッターメニュー --}}
                    <div class="col p-2 bg-success text-white border border-success">
                        <a href="{{ route('shop.show') }}" class="text-white text-decoration-none d-flex flex-column align-items-center">
                            <i class="fa-solid fa-house fw-bold"></i>
                            <small class="mt-1">トップ</small>
                        </a>
                    </div>
                    <div class="col p-2 bg-white border border-success">
                        <a href="#" class="text-black-50 text-decoration-none d-flex flex-column align-items-center">
                            <i class="fa-solid fa-ticket"></i>
                            <small class="mt-1">メニュー</small>
                        </a>
                    </div>
                    <div class="col p-2 bg-white border border-success">
                        <a href="#" class="text-black-50 text-decoration-none d-flex flex-column align-items-center">
                            <i class="fa-solid fa-user"></i>
                            <small class="mt-1">スタッフ</small>
                        </a>
                    </div>
                    <div class="col p-2 bg-white border border-success">
                        <a href="#" class="text-black-50 text-decoration-none d-flex flex-column align-items-center">
                            <i class="fa-solid fa-map"></i>
                            <small class="mt-1">アクセス</small>
                        </a>
                    </div>
                    <div class="col p-2 bg-white border border-success">
                        <a href="#" class="text-black-50 text-decoration-none d-flex flex-column align-items-center">
                            <i class="fa-solid fa-circle-info"></i>
                            <small>お知らせ</small>
                        </a>
                    </div>
                </div>
                {{-- カード --}}
                <div class="card mb-4">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                    {{-- カードボディ --}}
                    <div class="card-body">
                        <h5 class="card-title">AAA サロン</h5>
                        <div class="d-flex flex-column">
                            <div class="fw-bold">
                                ボディケア 60分
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>
                                    2024/1/29(月) 10:00 〜 11:00
                                </span>
                                <span class="text-secondary">
                                    <i class="fa-solid fa-clock me-2"></i>60分
                                </span>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <a href="#">詳細...</a>
                            </div>
                        </div>
                        <hr />
                        {{-- カードボディ:フッター --}}
                        <div class="d-flex justify-content-center flex-column">
                            <button class="btn btn-primary my-2">
                                <i class="fa-solid fa-check me-2"></i>チェックイン
                            </button>
                            <button type="button" class="btn btn-outline-primary my-2">
                                <i class="fa-solid fa-map mr-2"></i>
                                <small>アクセス</small>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
