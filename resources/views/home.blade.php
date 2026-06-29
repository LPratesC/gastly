<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Bem-vindo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Hero Section -->
    <div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-900 to-indigo-800">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="/" class="text-white text-2xl font-bold">
                        <x-application-logo class="w-10 h-10 fill-current text-white inline-block" />
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="px-6 py-2 bg-white text-indigo-900 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="px-6 py-2 text-white border-2 border-white rounded-lg font-semibold hover:bg-white hover:text-indigo-900 transition duration-300">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" 
                                   class="px-6 py-2 bg-white text-indigo-900 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                                    Registrar
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 py-20">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Left Content -->
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
                    <h1 class="text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Bem-vindo à<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">
                            Nossa Plataforma
                        </span>
                    </h1>
                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        Gerencie seus projetos, colabore com sua equipe e alcance novos patamares de produtividade. 
                        Tudo em um único lugar.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="px-8 py-4 bg-white text-indigo-900 rounded-lg font-bold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                                Ir para Dashboard
                            </a>
                        @else
                            <a href="{{ route('register') }}" 
                               class="px-8 py-4 bg-white text-indigo-900 rounded-lg font-bold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                                Começar Gratuitamente
                            </a>
                            <a href="{{ route('login') }}" 
                               class="px-8 py-4 border-2 border-white text-white rounded-lg font-bold text-lg hover:bg-white hover:text-indigo-900 transition duration-300">
                                Fazer Login
                            </a>
                        @endauth
                    </div>
                </div>

                <!-- Right Content - Illustration -->
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                        <div class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3 bg-white/20 rounded-lg p-4">
                                    <div class="w-12 h-12 bg-green-400 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold">Tarefa Concluída</p>
                                        <p class="text-gray-300 text-sm">Projeto atualizado com sucesso</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 bg-white/20 rounded-lg p-4">
                                    <div class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold">Nova Equipe</p>
                                        <p class="text-gray-300 text-sm">5 membros adicionados</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 bg-white/20 rounded-lg p-4">
                                    <div class="w-12 h-12 bg-purple-400 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold">Relatório Gerado</p>
                                        <p class="text-gray-300 text-sm">Analytics da semana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="container mx-auto px-6 py-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Por que escolher nossa plataforma?</h2>
                <p class="text-xl text-gray-300">Descubra os benefícios que fazem a diferença</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Alta Performance</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Otimizado para velocidade e eficiência. Trabalhe sem interrupções com nossa infraestrutura robusta.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Segurança Total</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Seus dados protegidos com criptografia de ponta e autenticação segura. Sua privacidade é nossa prioridade.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Trabalho em Equipe</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Colabore em tempo real com sua equipe. Compartilhe, comente e evolua juntos.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="container mx-auto px-6 py-20">
            <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-12 border border-white/20 text-center">
                <h2 class="text-4xl font-bold text-white mb-6">Pronto para começar?</h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Junte-se a milhares de usuários que já estão transformando sua forma de trabalhar.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="px-8 py-4 bg-white text-indigo-900 rounded-lg font-bold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                            Acessar Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" 
                           class="px-8 py-4 bg-white text-indigo-900 rounded-lg font-bold text-lg hover:bg-gray-100 transition duration-300 shadow-lg">
                            Criar Conta Grátis
                        </a>
                        <a href="{{ route('login') }}" 
                           class="px-8 py-4 border-2 border-white text-white rounded-lg font-bold text-lg hover:bg-white hover:text-indigo-900 transition duration-300">
                            Já tenho conta
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="container mx-auto px-6 py-8">
            <div class="border-t border-white/20 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos os direitos reservados.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Termos</a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacidade</a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Contato</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
