<x-app-layout>
    {{-- TOPデザインレイアウト パターン2 --}}
    {{-- Wrapper --}}
    <div>
        <div class="d-flex flex-column overflow-scroll">
            {{-- Profile --}}
            <section class="p-3 mb-2">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- left --}}
                    <div class="d-flex flex-column">
                        {{-- mine --}}
                        <div class="flex-row align-items-center">
                            <span class="fs-3 fw-bold">田中 太郎</span>
                            <span class="ms-2">様</span>
                        </div>
                        {{-- next --}}
                        <div class="text-secondary">会員番号：{{ mb_strtoupper(\Illuminate\Support\Str::random(10)) }}</div>
                    </div>
                    {{-- right --}}
                    <div>
                        <a href="#" class="text-secondary text-decoration-none d-flex flex-column align-items-center">
                            <i class="fa-solid fa-bell"></i>
                        </a>
                    </div>
                </div>
                {{-- next --}}
                <div class="text-secondary mt-2">次回：2024/02/01 (木) 10:00 〜 11:00</div>
            </section>
            <section class="p-3 mb-2">
                {{-- カード --}}
                <div class="card mb-4">
                    {{-- カードボディ --}}
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="fw-bold">
                                ボディケア 60分
                            </div>
                            <div class="my-2 d-flex flex-column">
                                <div>現在...</div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="mx-auto">
                                        <span class="fs-3 fw-bold">10</span>
                                        <span class="ms-2">人 待ち</span>
                                    </span>
                                    <button class="btn btn-outline-primary">
                                        <i class="fa-solid fa-rotate-right me-2"></i>更新
                                    </button>
                                </div>
                            </div>
                            <div class="text-secondary">2024/02/01 (木) 10:00 〜 11:00</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-3 mb-2">
                {{-- メニュー --}}
                <div class="w-100 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center gap-4">
                            <button class="btn btn-outline-primary d-flex flex-column w-50 py-4">
                                <i class="fa-solid fa-qrcode fs-3"></i>
                                <span class="fw-bold mt-2">チェックイン</span>
                            </button>
                            <button class="btn btn-outline-danger d-flex flex-column w-50 py-4">
                                <i class="fa-solid fa-qrcode fs-3"></i>
                                <span class="fw-bold mt-2">履歴</span>
                            </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
