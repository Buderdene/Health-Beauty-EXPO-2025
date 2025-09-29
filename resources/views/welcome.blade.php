<x-layouts.app>


        <div class="pm__1286367143 imageWrapperDesktop_i1u9ikxy h-[947px] overflow-hidden relative">
        <div class="video-slider">
            <video id="heroVideo" class="w-full h-full object-cover" controls="" autoplay="" loop="">
                <source src="/mp4/beautyExpo.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
            </video>
        </div>
        
        <!-- Video Speed Control & Countdown Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Video speed control
                const video = document.getElementById('heroVideo');
                if (video) {
                    video.playbackRate = 0.40; // 50% удаашруулсан
                    console.log('Video speed set to:', video.playbackRate);
                }

                // Countdown Timer - BEAUTY EXPO 2025 хүртэлх хугацаа
                // Зорилтот огноо тохируулах (2025 оны 6 сарын 1-ний 00:00:00)
                const targetDate = new Date('2025-12-04T00:00:00').getTime();
                
                function updateCountdown() {
                    const now = new Date().getTime();
                    const distance = targetDate - now;
                    
                    // Хугацаа тооцоолох
                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    // DOM elements шинэчлэх
                    document.getElementById('days').textContent = days.toString().padStart(2, '0');
                    document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                    document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                    document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
                    
                    // Хэрэв хугацаа дууссан бол
                    if (distance < 0) {
                        document.getElementById('days').textContent = '00';
                        document.getElementById('hours').textContent = '00';
                        document.getElementById('minutes').textContent = '00';
                        document.getElementById('seconds').textContent = '00';
                        
                        // Countdown дууссан тухай мессеж
                        console.log('BEAUTY EXPO 2025 эхэллээ!');
                    }
                }
                
                // Countdown шинэчлэх - секунд бүр
                updateCountdown(); // Анхны утга тохируулах
                setInterval(updateCountdown, 1000); // Секунд бүр шинэчлэх
            });
        </script>
        <div class="content_c9xmly3 absolute inset-0 flex items-center justify-center" style="background: #1414147E;">
            <section class="py-16 px-10 relative text-center">
                <div class="inline rounded-full uppercase py-4 px-5 bg-[#F2CCD72C] font-extrabold text-3xl lg:text-7xl xl:text-7xl  text-white">Halth & Beauty EXPO 2025</div>
                <h1 class="font-bold text-white text-7xl lg:text-7xl xl:text-7xl mt-10">
                    
                 <div class="grid grid-flow-col text-center">
                    <div class="bg-neutral rounded-box justify-center text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-7xl">
                        <span id="days" class="text-white">00</span>
                        </span>
                        <span class="text-2xl">
                            ӨДӨР
                        </span>
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-7xl">
                        <span id="hours" class="text-white">00</span>
                        </span>
                        <span class="text-2xl">
                            ЦАГ
                        </span>
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-7xl">
                        <span id="minutes" class="text-white">00</span>
                        </span>
                        <span class="text-2xl">
                            МИН
                        </span>
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-7xl">
                        <span id="seconds" class="text-white">00</span>
                        </span>
                        <span class="text-2xl">
                            СЕК
                        </span>
                    </div>
                    </div>
            </h1>
                <div class="w-full max-w-7xl h-px bg-gradient-to-r my-5 from-zinc-300 via-white to-zinc-300 mx-auto"></div>
                <p class="font-medium text-white text-base md:max-w-md mx-auto lg:max-w-none xl:text-xl">Олон улсын эрүүл мэнд гоо сайхны хамгийн том үзэсгэлэн худалдаа</p>
            </section>
        </div>
    </div>

    <section class="h-auto bg-white">
        <div class="px-10 pt-32 pb-10 mx-auto max-w-7xl">
            <div class="w-full mx-auto text-left md:text-center">
                <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-zinc-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight"> 
                     <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-pink-400 via-orange-500 to-pink-700 lg:inline">
                     Halth & Beauty EXPO 2025 </span> Төлөвлөлт</h1>
            </div>
        </div>

        <!-- SVG Container with Pan & Zoom -->
        <div id="svg-container" class="w-full h-[1200px] bg-white border-4 border-gray-200 rounded-lg overflow-hidden relative cursor-grab shadow-lg">
            <div id="svg-wrapper" class="w-full h-full overflow-auto">
                <object type="image/svg+xml" data="{{ asset('expo.svg') }}" 
                        class="min-w-full min-h-full object-contain"
                        id="expo-svg"
                        style="transform-origin: top left; transition: transform 0.2s ease;">
                </object>
         
            </div>
        </div>


                <!-- Controls -->
                <div class="flex justify-center items-center py-6 space-x-4">
                    <button id="zoom-out" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 font-extrabold rounded-lg transition-colors">
                        🔍➖ Жижигрүүлэх
                    </button>
                    <button id="zoom-reset" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 font-extrabold rounded-lg transition-colors">
                        🔄 Анхны хэмжээ
                    </button>
                    <button id="zoom-in" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 font-extrabold rounded-lg transition-colors">
                        🔍➕ Томруулах
                    </button>
                </div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-70 z-50 hidden">
  <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 p-6 transform transition-all duration-300 scale-95 opacity-0 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" id="modal-content">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-2xl font-bold text-gray-800">🏪 Тасгийн мэдээлэл</h2>
      <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
    </div>
    
    <div class="mb-6">
      <h3 class="text-lg font-semibold text-orange-600 mb-2">Path2732 - Дэлгүүрийн хэсэг</h3>
      <p class="text-gray-600 leading-relaxed">
        Энэ бол Health & Beauty EXPO 2025-ын дэлгүүрийн тусгай хэсэг юм. 
        Энд гоо сайхны бүтээгдэхүүн, эрүүл мэндийн хэрэгсэл, органик бүтээгдэхүүн зэрэг олон төрлийн бараа таны хүлээж байна.
      </p>
    </div>
    
    <div class="bg-orange-50 rounded-lg p-4 mb-4">
      <h4 class="font-semibold text-orange-800 mb-2">📍 Байршил мэдээлэл:</h4>
      <ul class="text-sm text-orange-700 space-y-1">
        <li>• Тасаг: A-сектор</li>
        <li>• Талбай: 45 м²</li>
        <li>• Борлуулагч: Premium Beauty Co.</li>
      </ul>
    </div>
    
    <div class="flex gap-3">
      <button onclick="closeModal()" 
              class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-lg transition-colors">
        Хаах
      </button>
      <button class="flex-1 bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded-lg transition-colors">
        Дэлгэрэнгүй
      </button>
    </div>
  </div>
</div>

<script>
function openModal() {
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modal-content');
    
    modal.classList.remove('hidden');
    
    // Animation
    setTimeout(() => {
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeModal() {
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modal-content');
    
    modalContent.classList.remove('scale-100', 'opacity-100');
    modalContent.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

// Click outside to close
document.getElementById('modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>

<script>
// SVG элементийн click event-ийг сонсох
document.addEventListener('DOMContentLoaded', function() {
    // SVG ачаалагдсаны дараа event listener нэмэх
    setTimeout(function() {
        const svgObject = document.getElementById('expo-svg');
        if (svgObject && svgObject.contentDocument) {
            const svgDoc = svgObject.contentDocument;
            const path2732 = svgDoc.getElementById('Path2732');
            
            if (path2732) {
                path2732.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Path2732 clicked!');
                    openModal();
                });
                
                // Hover effect нэмэх
                path2732.style.cursor = 'pointer';
                path2732.addEventListener('mouseenter', function() {
                    path2732.style.opacity = '0.7';
                });
                path2732.addEventListener('mouseleave', function() {
                    path2732.style.opacity = '1';
                });
                
                console.log('Path2732 event listeners added successfully');
            } else {
                console.log('Path2732 element not found in SVG');
            }
        } else {
            console.log('SVG object or contentDocument not available');
        }
    }, 500); // SVG бүрэн ачаалагдахыг хүлээх
});
</script>

        <!-- SVG Pan & Zoom Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const container = document.getElementById('svg-container');
                const wrapper = document.getElementById('svg-wrapper');
                const svg = document.getElementById('expo-svg');
                
                let scale = 1;
                let isDragging = false;
                let startX, startY, scrollLeft, scrollTop;
                
                // Zoom функцууд
                function zoomIn() {
                    scale = Math.min(scale * 1.2, 3); // Max 3x zoom
                    updateTransform();
                }
                
                function zoomOut() {
                    scale = Math.max(scale / 1.2, 0.5); // Min 0.5x zoom
                    updateTransform();
                }
                
                function resetZoom() {
                    scale = 1;
                    wrapper.scrollLeft = 0;
                    wrapper.scrollTop = 0;
                    updateTransform();
                }
                
                function updateTransform() {
                    if (svg) {
                        svg.style.transform = `scale(${scale})`;
                        svg.style.width = `${100 * scale}%`;
                        svg.style.height = `${100 * scale}%`;
                    }
                }
                
                // Event listeners
                document.getElementById('zoom-in').addEventListener('click', zoomIn);
                document.getElementById('zoom-out').addEventListener('click', zoomOut);
                document.getElementById('zoom-reset').addEventListener('click', resetZoom);
                
                // Mouse wheel zoom
                container.addEventListener('wheel', function(e) {
                    e.preventDefault();
                    if (e.deltaY < 0) {
                        zoomIn();
                    } else {
                        zoomOut();
                    }
                });
                
                // Drag to pan
                wrapper.addEventListener('mousedown', function(e) {
                    isDragging = true;
                    container.style.cursor = 'grabbing';
                    startX = e.pageX - wrapper.offsetLeft;
                    startY = e.pageY - wrapper.offsetTop;
                    scrollLeft = wrapper.scrollLeft;
                    scrollTop = wrapper.scrollTop;
                });
                
                wrapper.addEventListener('mouseleave', function() {
                    isDragging = false;
                    container.style.cursor = 'grab';
                });
                
                wrapper.addEventListener('mouseup', function() {
                    isDragging = false;
                    container.style.cursor = 'grab';
                });
                
                wrapper.addEventListener('mousemove', function(e) {
                    if (!isDragging) return;
                    e.preventDefault();
                    const x = e.pageX - wrapper.offsetLeft;
                    const y = e.pageY - wrapper.offsetTop;
                    const walkX = (x - startX) * 2;
                    const walkY = (y - startY) * 2;
                    wrapper.scrollLeft = scrollLeft - walkX;
                    wrapper.scrollTop = scrollTop - walkY;
                });
                
                // Touch support for mobile
                wrapper.addEventListener('touchstart', function(e) {
                    const touch = e.touches[0];
                    startX = touch.pageX - wrapper.offsetLeft;
                    startY = touch.pageY - wrapper.offsetTop;
                    scrollLeft = wrapper.scrollLeft;
                    scrollTop = wrapper.scrollTop;
                });
                
                wrapper.addEventListener('touchmove', function(e) {
                    e.preventDefault();
                    const touch = e.touches[0];
                    const x = touch.pageX - wrapper.offsetLeft;
                    const y = touch.pageY - wrapper.offsetTop;
                    const walkX = (x - startX) * 2;
                    const walkY = (y - startY) * 2;
                    wrapper.scrollLeft = scrollLeft - walkX;
                    wrapper.scrollTop = scrollTop - walkY;
                });
                
                // Initialize with proper default state
                setTimeout(function() {
                    resetZoom(); // Анхны байдалд тохируулах
                    console.log('SVG initialized with default zoom and position');
                }, 100); // Small delay to ensure SVG is loaded
            });
        </script>
    </section>


    <section class="bg-white tails-selected-element">
        <div class="px-8 py-8 mx-auto sm:py-10 lg:py-20 max-w-7xl">
            <div class="relative py-6 overflow-hidden rounded-lg bg-gradient-to-r from-pink-500 to-purple-500 lg:py-12 md:px-6 lg:p-16 lg:flex lg:items-center lg:justify-between md:shadow-xl md:bg-purple-1000" data-primary="purple-600" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <div class="absolute top-0 right-0 hidden w-full -mt-20 transform rotate-45 translate-x-1/2 bg-white sm:block h-96 opacity-5"></div>
                <div class="absolute top-0 left-0 hidden w-full -mt-20 transform rotate-45 -translate-x-1/2 bg-pink-300 sm:block h-96 opacity-5"></div>
                <div class="relative p-6 rounded-lg md:p-0 md:pb-4">
                    <h2 class="text-3xl font-extrabold leading-9 tracking-tight text-white sm:text-4xl sm:leading-10">Та талбай түрээслэх бол яг одоо бүртгүүлээрэй</h2>
                    <p class="w-full mt-5 text-base leading-6 text-pink-100 md:w-3/4" data-primary="pink-600">Олон улсын эрүүл мэнд гоо сайхны хамгийн том үзэсгэлэн худалдаа MICHEAL EXPO 2025</p>
                </div>
                <div class="relative flex flex-col items-center w-full px-6 space-y-5 md:space-x-5 md:space-y-0 md:flex-row md:w-auto lg:flex-shrink-0 md:px-0">
                    <a href="#_" class="block w-full px-5 py-3 text-base font-extrabold leading-6 text-center text-purple-600 transition duration-150 ease-in-out bg-purple-100 rounded-md md:inline-flex md:shadow md:w-auto hover:bg-white focus:outline-none focus:shadow-outline" data-primary="purple-600" data-rounded="rounded-md">
                        ОДОО БҮРТГҮҮЛЭХ</a>
                    <a href="#_" class="text-white font-extrabold">ХОЛБОО БАРИХ</a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
