<x-layouts.app>
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-12 px-4">
    <div class="max-w-4xl mx-auto">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">Бидний тухай</h1>
            <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full"></div>
        </div>

        <!-- Content Cards -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            
            <!-- About Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">🏢</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">EXPO 2025</h2>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Бид ирээдүйн технологи, инноваци болон бизнесийн шийдлүүдийг танилцуулах олон улсын үзэсгэлэнг зохион байгуулж байна.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Манай зорилго бол дэлхийн хамгийн шинэлэг технологи, урлаг, соёлын үзэсгэлэнг нэг дор цуглуулах явдал юм.
                </p>
            </div>

            <!-- Mission Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Зорилго</h2>
                </div>
                <ul class="text-gray-600 space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2">•</span>
                        Инновацийн шинэ боломжуудыг танилцуулах
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2">•</span>
                        Олон улсын хамтын ажиллагааг дэмжих
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2">•</span>
                        Ирээдүйн технологийг танилцуулах
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-2">•</span>
                        Соёл, урлагийн солилцоог дэмжих
                    </li>
                </ul>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Статистик</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-500 mb-2">100+</div>
                    <div class="text-gray-600">Орон</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-500 mb-2">1000+</div>
                    <div class="text-gray-600">Компани</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-500 mb-2">50M+</div>
                    <div class="text-gray-600">Зочид</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-500 mb-2">6</div>
                    <div class="text-gray-600">Сар</div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="text-center">
            <a href="/" 
               class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1 mr-4">
                Нүүр хуудас
            </a>
            <a href="/portfolio" 
               class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg transition-all duration-300 hover:shadow-xl transform hover:-translate-y-1">
                3D План үзэх
            </a>
        </div>

    </div>
</div>
</x-layouts.app>
