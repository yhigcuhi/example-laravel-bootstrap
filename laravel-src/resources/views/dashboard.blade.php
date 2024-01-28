<x-app-layout>
    {{-- Wrapper --}}
    <div class="container">
        <div class="d-flex flex-column">
            <section class="mt-5">
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
                            <div>
                                2024/1/29(月) 10:00 〜 11:00
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
                                <small>アクセスマップ</small>
                            </button>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success w-100">
                    <i class="fa-solid fa-plus me-2"></i>追加する
                </button>
            </section>
        </div>
    </div>
</x-app-layout>
