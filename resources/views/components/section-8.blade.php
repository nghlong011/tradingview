
<section class="max-w-[1376px] w-full mx-auto flex flex-col py-4 sm:py-6 md:py-8 gap-4 sm:gap-6 md:gap-8 px-4 lg:px-0">
    {{-- Header Section --}}
    <div class="flex flex-col items-center justify-center text-center">
        <h2 class="text-[#F4F4F4] font-semibold text-[36px] sm:text-[48px] md:text-[64px] leading-tight md:leading-[64px] uppercase">
            Love in every<br>#TradingView
        </h2>
    </div>

    {{-- Stats Section --}}
    <section class="p-4 sm:p-6 md:p-8 max-w-[1376px] w-full mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            @php
                $stats = [
                    [
                        'value' => '90M+',
                        'label' => 'Traders and investors use our platform.',
                        'icon' => '/assets/circle-G3Q9hXrm.svg',
                        'icon_position' => 'left-1/3',
                    ],
                    [
                        'value' => '#1',
                        'label' => 'Top website in the world when it comes to all things investing.',
                        'icon' => '/assets/square.svg',
                        'icon_position' => 'left-[18%]',
                    ],
                    [
                        'value' => '1.5M+',
                        'label' => 'Mobile reviews with 4.9 average rating. No other fintech apps are more loved.',
                        'icon' => '/assets/star-B4kjBhxh.svg',
                        'icon_position' => 'left-[41%]',
                    ],
                    [
                        'value' => '10M+',
                        'label' => 'Custom scripts and ideas shared by our users.',
                        'icon' => '/assets/pine-LcY6WRkB.svg',
                        'icon_position' => 'left-[39%]',
                    ],
                ];
            @endphp

            @foreach ($stats as $stat)
                <div class="p-4 sm:p-6 md:p-8 flex relative flex-col gap-2 hover:bg-[#1A1F25] rounded-xl transition-colors duration-300 group">
                    <img src="{{ $stat['icon'] }}" alt="" class="absolute top-0 {{ $stat['icon_position'] }}">
                    <h3 class="text-[#D9DFE6] font-semibold text-3xl sm:text-4xl md:text-[48px] leading-tight md:leading-[56px] relative z-10 transition-colors duration-300">
                        {{ $stat['value'] }}
                    </h3>
                    <p class="text-[#ADB6C3] font-medium text-base sm:text-lg md:text-[20px] leading-snug md:leading-[24px]">
                        {{ $stat['label'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Testimonials Section --}}
    <div class="w-full relative px-4 md:px-0">
        <div class="swiper">
            <div class="swiper-wrapper">
                @php
                    $testimonials = [
                        [
                            'image' => '/assets/card1-Dy4Agw-G.png',
                            'author' => '@mytradingsetup',
                            'text' => 'The desktop app is lightning fast! No more browser lag—just smooth charting and trading.',
                        ],
                        [
                            'image' => '/assets/card2-KbxLObpx.png',
                            'author' => '@chrislowingproducer',
                            'text' => 'Transitioning to more online trading is awesome. Thanks for all the tools analyzing charts.',
                        ],
                        [
                            'image' => '/assets/card3-BeIKNzDl.png',
                            'author' => '@spacedork',
                            'text' => 'The split-screen feature is a game-changer! Multiple timeframes at once without switching tabs.',
                        ],
                        [
                            'image' => '/assets/card4-CW9P8Sxo.png',
                            'author' => '@joey_official',
                            'text' => 'Finally! A one-stop trading app that works. I can stay immersed in my research without a break.',
                        ],
                        [
                            'image' => '/assets/card5-CDKoVC78.png',
                            'author' => '@orly_summerz',
                            'text' => 'TradingView\'s Desktop has completely changed my workflow! Trade faster and analyze better!',
                        ],
                        [
                            'image' => '/assets/card6-NCULFrcu.png',
                            'author' => '@tradingView',
                            'text' => 'My trading lifestyle is smoother than ever. No distractions, just clean professional charts.',
                        ],
                        [
                            'image' => '/assets/card7-BwsRTy0f.png',
                            'author' => '@globaltrillary',
                            'text' => 'Real-time updates and no browser crashes! TradingView Desktop is a must-have!',
                        ],
                        [
                            'image' => '/assets/card8-CsE_qImb.png',
                            'author' => '@tunccoms',
                            'text' => 'I can customize my setup exactly how I want. TradingView Desktop keeps my life easy!',
                        ],
                        [
                            'image' => '/assets/card9-DQ1V_ux0.png',
                            'author' => '@most_luxurious_lifestyle',
                            'text' => 'Not just a powerful charting terminal, but with TradingView\'s ease of use. Perfect combo!',
                        ],
                        [
                            'image' => '/assets/card10-BED51rVw.png',
                            'author' => '@TRzustan',
                            'text' => 'With TradingView Desktop, I execute trades faster and stay ahead of the market!',
                        ],
                        [
                            'image' => '/assets/card11-vIMz393q.png',
                            'author' => '@Market Warrior Network',
                            'text' => 'No more slow loading charts or missed opportunities.',
                        ],
                        [
                            'image' => '/assets/card12-H9cfDOMv.png',
                            'author' => '@traderfx',
                            'text' => 'From laptop to anywhere, and the desktop app keeps my workflow seamless across devices!',
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="w-full min-w-[280px] sm:min-w-[320px] flex-shrink-0 flex flex-col gap-2 px-2 sm:px-0">
                            <img src="{{ $testimonial['image'] }}" class="rounded-[8px] w-full aspect-video object-cover" alt="">
                            <span class="text-white font-bold text-[16px] sm:text-[18px] leading-tight sm:leading-[24px]">
                                {{ $testimonial['author'] }}
                            </span>
                            <p class="text-[#B8B8B8] text-[16px] sm:text-[18px] leading-tight sm:leading-[24px]">
                                {{ $testimonial['text'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- Navigation Buttons --}}
            <div class="swiper-button-prev hidden md:flex size-8 bg-[#1F1F1F] rounded-full items-center justify-center transition-all duration-300 hover:bg-[#2a2a2a] disabled:opacity-50 disabled:cursor-not-allowed absolute top-1/2 -translate-y-1/2 z-10 left-0 md:-left-12">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotate-180">
                    <path d="M6.61204 1L13 8L6.61204 15L5 13.7344L10.2323 8L5 2.2656L6.61204 1Z" fill="#B2B5BE"></path>
                </svg>
            </div>
            <div class="swiper-button-next hidden md:flex size-8 bg-[#1F1F1F] rounded-full items-center justify-center transition-all duration-300 hover:bg-[#2a2a2a] disabled:opacity-50 disabled:cursor-not-allowed absolute top-1/2 -translate-y-1/2 z-10 right-0 md:-right-12">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.61204 1L13 8L6.61204 15L5 13.7344L10.2323 8L5 2.2656L6.61204 1Z" fill="#B2B5BE"></path>
                </svg>
            </div>

            {{-- Pagination --}}
            <div class="swiper-pagination flex md:hidden justify-center items-center gap-2 mt-4"></div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="min-h-[400px] sm:min-h-[480px] md:min-h-[560px] relative flex flex-col gap-4 sm:gap-6 md:gap-8 items-center justify-center px-4 sm:px-6 md:px-8">
    <div class="p-4 relative z-10 flex flex-col items-center text-center justify-center gap-3 sm:gap-4 md:gap-6 max-w-[90%] sm:max-w-[80%] md:max-w-[70%]">
        <h2 class="text-[#F4F4F4] uppercase font-bold text-[32px] sm:text-[48px] md:text-[64px] leading-tight sm:leading-tight md:leading-[64px] tracking-tight">
            <span class="block">Join 90 million</span>
            <span class="block">traders and investors</span>
        </h2>
        <p class="text-[#D0D3D7] font-bold text-[18px] sm:text-[22px] md:text-[28px] leading-snug sm:leading-normal md:leading-[40px]">
            Harness the power of the world's most popular financial analysis platform.
        </p>
    </div>

    {{-- CTA Button --}}
    <div class="w-full max-w-[280px] sm:max-w-[300px] md:max-w-[320px] relative z-10">
        <button class="relative w-full flex px-4 items-center justify-center rounded-lg overflow-hidden transition-all duration-300 py-2 sm:py-3 md:py-4 text-[#F4F4F4] font-semibold text-[16px] sm:text-[18px] md:text-[20px] leading-[20px] sm:leading-[22px] md:leading-[24px] w-full">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-600 to-pink-600"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 transition-opacity duration-300 ease-in-out opacity-0" style="filter: brightness(1.2); mix-blend-mode: soft-light;"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent transition-transform duration-500 ease-in-out opacity-20 -translate-x-full" style="width: 50%; transform: translateX(-200%);"></div>
            <span class="relative z-10">Install now</span>
        </button>
    </div>

    {{-- Background Gradient --}}
    <div class="absolute inset-0 overflow-hidden">
        <img src="/assets/gradient-B_HeJV--.webp" class="absolute top-0 left-0 w-full h-full mix-blend-exclusion" alt="">
    </div>
</section>
