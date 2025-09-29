<x-layouts.app>
    @vite('resources/js/app.js')
    
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 bg-gradient-to-br from-pink-400 to-pink-900 z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="animate-spin rounded-full h-32 w-32 border-b-2 border-white mb-4"></div>
            <h2 class="text-white text-2xl font-bold mb-2">3D ТӨЛӨВЛӨЛТ ПЛАН АЧААЛЛАЖ БАЙНА...</h2>
            <p class="text-blue-200">HEALTH & BEAUTY EXPO 2025 <br> Түр хүлээнэ үү...</p>
        </div>
    </div>

    <!-- Main 3D Canvas Container -->
    <div class="w-full h-screen relative bg-white">
        
    <section class="relative block pt-16 overflow-hidden leading-6 text-left text-white bg-pink-900 bg-no-repeat bg-cover sm:pt-20 md:pt-24 tails-selected-element" data-primary="purple-700">
    <div class="w-full max-w-5xl px-8 mx-auto leading-6 text-left xl:px-0">
        <div class="flex flex-wrap items-center justify-center flex-1 text-center text-white lg:text-left">
            <div class="relative w-full px-4 leading-6 text-left lg:w-7/12 xl:w-1/2">
                <h2 class="mx-0 mt-0 mb-5 font-sans text-4xl font-bold text-white">
                    HEALTH & BEAUTY EXPO 2025
                </h2>
                <div class="pr-10 text-left text-purple-300" data-primary="purple-700">
                олон улсын эрүүл мэнд гоо сайхны хамгийн том үзэсгэлэн худалдаа.
                    </div>
            </div>
            <div class="relative flex flex-col w-full px-4 mt-10 leading-6 text-left md:flex-row lg:w-5/12 xl:w-1/2 justifty-end">
                <a href="#" class="inline-flex items-center justify-center w-full h-16 px-10 py-0 mb-8 text-xl font-semibold text-center text-white no-underline align-middle bg-pink-400 border border-transparent border-solid rounded-full cursor-pointer select-none md:mb-0 md:mr-8 md:w-auto lg:px-7 xl:px-10 hover:bg-pink-500 focus:shadow-xs focus:no-underline" data-primary="green-400" data-rounded="rounded-full">
                    ОДОО БҮРТГҮҮЛЭХ
                </a>
                <a href="#" class="inline-flex items-center justify-center w-full h-16 px-10 py-0 text-xl font-semibold text-center text-white no-underline align-middle bg-transparent border-2 border-pink-600 border-solid rounded-full cursor-pointer select-none md:w-auto lg:px-7 xl:px-10 hover:border-white hover:text-white focus:shadow-xs focus:no-underline" data-primary="purple-600" data-rounded="rounded-full">
                    ХОЛБОО БАРИХ
                </a>
            </div>
        </div>
        <div class="flex flex-wrap justify-center max-w-5xl mx-auto mt-8 text-white md:mt-20">
            <div class="relative w-full px-4 leading-6 text-left xl:flex-grow-0 xl:flex-shrink-0">
                <div class="rounded-t-xl h-10 bg-zinc-900 flex items-center space-x-1.5 justify-start relative overflow-hidden">
                    <div class="relative z-10 w-3 h-3 ml-3 bg-zinc-700 rounded-full"></div>
                    <div class="relative z-10 w-3 h-3 bg-zinc-700 rounded-full"></div>
                    <div class="relative z-10 w-3 h-3 bg-zinc-700 rounded-full"></div>
                </div>

                <img src="/banner.jpg" alt="" class="h-auto max-w-full text-white align-middle border-none">
            </div>
        </div>
    </div>
</section>

    <!-- Main Content Layout -->
    <div class="flex h-screen bg-gray-100">
        
        <!-- 3D Canvas Area (3/4 width) -->
        <div class="w-3/4 h-full relative">
            <div id="canvas-container" class="w-full h-full overflow-auto bg-white border-r-4 border-gray-300">
                <!-- Three.js canvas will be inserted here -->
            </div>
        </div>
        
        <!-- Information Panel (1/4 width) -->
        <div class="w-1/4 h-full bg-gradient-to-b from-gray-50 to-gray-100 overflow-y-auto">
            <div class="p-6 space-y-6">
                
                <!-- Header -->
                <div class="text-center border-b border-gray-200 pb-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">🏪 3D План</h2>
                    <p class="text-sm text-gray-600">Health & Beauty EXPO 2025</p>
                </div>

                <!-- Model Status -->
                <div class="bg-white rounded-lg p-4 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-3 flex items-center">
                        <span class="w-3 h-3 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Модельын төлөв
                    </h3>
                   
                </div>

                <!-- Controls -->
                <div class="bg-white rounded-lg p-4 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-3">🎮 Удирдлага</h3>
                    <div class="space-y-3">
                        <button id="reset-view" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition-colors flex items-center justify-center">
                            🔄 Анхны харагдац
                        </button>
                        <button id="toggle-wireframe" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition-colors flex items-center justify-center">
                            🔲 Wireframe
                        </button>
                        <button id="fullscreen-btn" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-lg transition-colors flex items-center justify-center">
                            🖥️ Бүтэн дэлгэц
                        </button>
                    </div>
                </div>

                <!-- Camera Info -->
                <div class="bg-white rounded-lg p-4 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-3">📷 Камерын мэдээлэл</h3>
                    <div class="space-y-2 text-xs">
                        <div class="bg-blue-50 p-2 rounded">
                            <span class="text-blue-800 font-medium">Position:</span>
                            <div id="camera-position" class="text-blue-600 font-mono">x: 0, y: 25, z: 0</div>
                        </div>
                        <div class="bg-green-50 p-2 rounded">
                            <span class="text-green-800 font-medium">Target:</span>
                            <div id="camera-target" class="text-green-600 font-mono">x: 0, y: 0, z: 0</div>
                        </div>
                    </div>
                </div>

                <!-- Instructions -->
                <div class="bg-white rounded-lg p-4 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-3">📋 Заавар</h3>
                    <div class="space-y-2 text-xs text-gray-600">
                        <div class="flex items-start">
                            <span class="text-blue-500 mr-2">🖱️</span>
                            <span><strong>Mouse drag:</strong> Камер эргүүлэх</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-green-500 mr-2">🔍</span>
                            <span><strong>Mouse wheel:</strong> Zoom in/out</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-purple-500 mr-2">🖱️</span>
                            <span><strong>Right click:</strong> Pan харагдац</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-orange-500 mr-2">👆</span>
                            <span><strong>Модель click:</strong> Мэдээлэл popup</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-gradient-to-r from-orange-400 to-pink-500 rounded-lg p-4 text-white">
                    <h3 class="font-bold mb-2">📊Ерөнхий мэдээлэл</h3>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div class="text-center">
                            <div class="text-lg font-bold">250+</div>
                            <div class="text-orange-100">Тасаг</div>
                        </div>
                        <div class="text-center">
                            <div class="text-lg font-bold">15K</div>
                            <div class="text-orange-100">м² талбай</div>
                        </div>
                        <div class="text-center">
                            <div class="text-lg font-bold">500+</div>
                            <div class="text-orange-100">Компани</div>
                        </div>
                        <div class="text-center">
                            <div class="text-lg font-bold">50K+</div>
                            <div class="text-orange-100">Зочид</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript Functions -->
    <script>
        function toggleInstructions() {
            const instructions = document.getElementById('instructions');
            instructions.classList.toggle('hidden');
        }
        
        function toggleModelInfo() {
            const modelInfo = document.getElementById('model-info');
            modelInfo.classList.toggle('hidden');
        }
        
        function hideLoadingScreen() {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 500);
        }
        
        function updateModelStatus(status, elements = 0) {
            document.getElementById('model-status').textContent = status;
            document.getElementById('model-status-detail').textContent = status;
            document.getElementById('model-elements').textContent = elements;
        }
        
        // Show model info when model is loaded
        function showModelInfo() {
            setTimeout(() => {
                document.getElementById('model-info').classList.remove('hidden');
            }, 2000);
        }
        
        // Auto-hide loading screen after 3 seconds (fallback)
        setTimeout(() => {
            hideLoadingScreen();
        }, 3000);
        
        // Update camera position display
        function updateCameraInfo() {
            // This will be called from portfolio.js
        }
        
        // Make function globally available
        window.updateCameraInfo = updateCameraInfo;
    </script>

</x-layouts.app>
