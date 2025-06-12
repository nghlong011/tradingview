<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/package/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
            display: none;
        }

        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
            display: none;
        }

        .swiper-button-next svg,
        .swiper-button-prev svg {
            width: auto;
            height: auto;
        }
        .swiper-button-next,
        .swiper-button-prev {
            width: calc(var(--spacing) * 8);
            height: calc(var(--spacing) * 8);
        }
        .swiper-button-prev{
            left: calc(var(--spacing) * -12);
        }
        .swiper-button-next{
            right: calc(var(--spacing) * -12);
        }
        .swiper{
            position: unset;
        }
    </style>
</head>

<body class="antialiased bg-black">
    <livewire:home />

    <script src="/package/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/swiper-init.js') }}"></script>
</body>

</html>
