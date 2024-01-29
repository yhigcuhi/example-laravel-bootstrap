<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        {{-- 画面 個別のjavaScript読み込み --}}
        @stack('js')
        {{-- 画面 個別のCSS読み込み --}}
        @stack('css')
        {{-- 共通スタイル --}}
        <style>
            /* ハンバーガーメニューの棒の色 */
            .navbar-toggler .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(108,117,125,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }
        </style>
    </head>
    <body>
        <div class="min-vh-100 bg-light">
            {{-- ページ ヘッダー --}}
            <header>
                @if (isset($header))
                    {{ $header }}
                @else
                    {{-- 指定なし: ヘッダー ナビゲーション --}}
                     @include('layouts.partials.navigation')
                @endif
            </header>

            {{-- ページ コンテンツ --}}
            <main>
                {{ $slot }}
            </main>
            {{-- ページ フッター --}}
            <footer>
                @if (isset($footer))
                    {{ $footer }}
                @else
                    {{-- 指定なし: フッター メニュー --}}
                    @include('layouts.partials.bottom_menu')
                @endif
            </footer>
        </div>
    </body>
</html>
