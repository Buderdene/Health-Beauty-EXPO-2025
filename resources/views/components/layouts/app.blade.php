<!DOCTYPE html>
<html lang="mn" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'EXPO 2025 - Ирээдүйн үзэсгэлэн' }}</title>
                     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
            @media (min-width: 481px) {
    .pm__1286367143 {
        background-image: url('https://scontent.fuln6-1.fna.fbcdn.net/v/t39.30808-6/552180892_1182233167292584_8358037768377298921_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=-SV8VW78WMcQ7kNvwG1ZBR5&_nc_oc=AdlXpKjCacdenxT6GdlaixyZMPYuTy2cCHue-_5g0peUv6v6KTHItu_zCrBgshpFN8o&_nc_zt=23&_nc_ht=scontent.fuln6-1.fna&_nc_gid=4S7HtXhQWVLh0a4QJXkrKw&oh=00_AfZQDrrR05Iv1dgO2Nruce24G-DLL004m031pNKXCZfORw&oe=68E0489D');
    }
            }
            @media (min-width: 1440px) and (min-device-pixel-ratio: 2) {
                .pm__1286367143 {
                    background-image: url('https://scontent.fuln6-1.fna.fbcdn.net/v/t39.30808-6/552180892_1182233167292584_8358037768377298921_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=-SV8VW78WMcQ7kNvwG1ZBR5&_nc_oc=AdlXpKjCacdenxT6GdlaixyZMPYuTy2cCHue-_5g0peUv6v6KTHItu_zCrBgshpFN8o&_nc_zt=23&_nc_ht=scontent.fuln6-1.fna&_nc_gid=4S7HtXhQWVLh0a4QJXkrKw&oh=00_AfZQDrrR05Iv1dgO2Nruce24G-DLL004m031pNKXCZfORw&oe=68E0489D');
                }
            }
            .video-slider {
                display: flex;
                align-items: center;
                /* Center vertically */
                justify-content: center;
                /* Center horizontally */
                height: 100%;
                /* Ensure it takes full height */
            }
        </style>


    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="h-full antialiased bg-white">
    
    <!-- Top Navigation -->
    <nav class="bg-gray-100 shadow-sm border-b border-gray-200 sticky top-0 z-40">
        <section class="max-w-7xl mx-auto px-8 body-font tails-selected-element">
            <div class="container flex flex-col items-center justify-between mx-auto max-w-7xl md:flex-row">
                <span class="inline-block font-sans text-2xl font-extrabold text-left text-black no-underline bg-transparent cursor-pointer focus:no-underline">
                </span>
                <div class="inline-flex items-center ml-5 space-x-6 lg:w-2/5 lg:justify-end lg:ml-0">
                    <span class="inline-flex items-center justify-center px-4 py-2 text-base leading-6 text-black whitespace-no-wrap  shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        9402 2040
                    </span>

                    <span class="inline-flex items-center justify-center px-4 py-2 text-base leading-6 text-black whitespace-no-wrap  shadow-sm rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        Grandlineenterprisesllc@gmail.com
                    </span>
                </div>
            </div>
        </section>
    </nav>

    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-extrabold text-gray-800 hover:text-orange-500 transition-colors">
                        LOGO
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-2 uppercase">
                    <a href="/" class="text-gray-600 hover:text-orange-500 px-3 py-2 text-xl font-extrabold transition-colors {{ request()->is('/') ? 'text-orange-500' : '' }}">
                        НҮҮР
                    </a>
                    <a href="#" class="text-gray-600 hover:text-orange-500 px-3 py-2 text-xl font-extrabold transition-colors {{ request()->is('about') ? 'text-orange-500' : '' }}">
                        БИДНИЙ ТУХАЙ
                    </a>
                    <a href="/portfolio" class="text-gray-600 hover:text-orange-500 px-3 py-2 text-xl font-extrabold transition-colors {{ request()->is('portfolio') ? 'text-orange-500' : '' }}">
                        3D PLAN
                    </a>

                    <a href="#" class="text-gray-600 hover:text-orange-500 px-3 py-2 text-xl font-extrabold transition-colors {{ request()->is('about') ? 'text-orange-500' : '' }}">
                        БҮРТГҮҮЛЭХ
                    </a>
                    <a href="#" class="text-gray-600 hover:text-orange-500 px-3 py-2 text-xl font-extrabold transition-colors {{ request()->is('about') ? 'text-orange-500' : '' }}">
                        ХОЛБОО БАРИХ
                    </a>


                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-600 hover:text-orange-500 p-2" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                    <a href="/" class="block px-3 py-2 text-base font-extrabold text-gray-600 hover:text-[#ff6bbc] transition-colors">
                        Нүүр
                    </a>
                    <a href="/portfolio" class="block px-3 py-2 text-base font-extrabold text-gray-600 hover:text-[#ff6bbc] transition-colors">
                        3D План
                    </a>
                    <a href="/about" class="block px-3 py-2 text-base font-extrabold text-gray-600 hover:text-[#ff6bbc] transition-colors">
                        Тухай
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-400">
                    © Halth & Beauty EXPO 2025. Бүх эрх хуулиар хамгаалагдсан.
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile menu toggle script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });


        .video-slider {
            display: flex;
            align-items: center;
            /* Center vertically */
            justify-content: center;
            /* Center horizontally */
            height: 100%;
            /* Ensure it takes full height */
        }


    </script>


    <script type="text/javascript">
        const video = document.getElementById('heroVideo');

		const placeholder = document.getElementById('imagePlaceholder');

        // Ensure the video is muted
        video.muted = true;

		video.addEventListener('play', () => {
			placeholder.style.display = 'none';
		});

		video.addEventListener('pause', () => {
			placeholder.style.display = 'block';
		});
    </script>

</body>
</html>
