<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta property="og:title" content="Duotherapy"/>
        <meta property="og:type" content="product"/>
        <meta property="og:description" content="Você está cansado de não saber quem viu algo que você compartilhou? O EasyLink permite que você obtenha informações sobre quem clica e acessa um link que você compartilhou."/>
        <meta property="og:image" content="{{ asset('storage/pt-meta-image.png') }}"/>

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <title>Duotherapy</title>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MX54LS9J2B"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-MX54LS9J2B');
        </script>

        @vite('resources/css/app.css')
    </head>
    <body class="relative font-sans w-full bg-center min-h-screen bg-cover bg-no-repeat bg-fixed lg:scale-[0.7] lg:h-screen lg:-mt-[70px] lg:overflow-y-hidden" style="background-image:url({{ asset('storage/background.jpg') }})">

        <!-- Section 1 -->
        <section>
            <div class="mx-auto max-w-7xl">
                <div class="relative flex items-center justify-between h-24 px-10">
                    <div class="flex items-center mb-4 mt-8 font-medium text-gray-100 md:mb-0 lg:order-none lg:w-auto lg:items-center lg:justify-center">
                        <img class="h-16 md:h-20 lg:h-[5rem]" src="{{ asset('storage/logo.png') }}" alt="Logo">
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('pt.home') }}">
                            <img class="h-6" src="{{ asset('storage/brazil-flag.png') }}" alt="Brazil Flag Icon">
                        </a>
                        <a href="{{ route('en.home') }}">
                            <img class="h-6 opacity-40" src="{{ asset('storage/uk-flag.png') }}" alt="United Kingdom Flag Icon">
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="flex flex-col items-center px-10 pt-20 pb-9 lg:flex-row">
                        <div class="relative w-full max-w-3xl lg:w-7/12">
                            <div class="relative flex flex-col items-center justify-center w-full h-full lg:pr-10">
                                <div class="flex flex-col items-start space-y-8">
                                    <div class="relative">
                                        <h1 class="mb-8 text-5xl lg:text-[3.10rem] font-black leading-none tracking-normal text-white
                                         md:text-6xl md:tracking-tight">
                                            Você <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;">  gostaria </span> de aprender<span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;"> massagem relaxante</span>
                                            para fazer no seu <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;"> parceiro </span> ?</h1>
                                        <h2 class="mb-8 text-5xl lg:text-[1.50rem] font-black leading-none tracking-normal text-white md:text-2xl md:tracking-tight">
                                            Saiba que todo o casal que se massageia permanece mais tempo junto. Assuma a liderança e saiba mais; venha fazer o melhor curso de massagem a dois em Lisboa. Cadastre-se e você saberá mais sobre:
                                        </h2>
                                    </div>
                                    <ul class="flex flex-col gap-5">
                                        <li class="flex items-top">
                                            <div class="w-10">
                                                <span class="inline-flex items-center justify-center w-7 h-7 mr-2 text-white bg-gradient-to-r from-primarycolor to-primarycolor rounded-full"><span class="text-md font-bold">✓</span></span>
                                            </div>
                                            <p class="text-2xl text-white font-black"> Como a <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;"> massagem </span> pode salvar o seu <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;"> casamento </span> ? </p>
                                        </li>
                                        <li class="flex items-top">
                                            <div class="w-10">
                                                <span class="inline-flex items-center justify-center w-7 h-7 mr-2 text-white bg-gradient-to-r from-primarycolor to-primarycolor rounded-full"><span class="text-md font-bold">✓</span></span>
                                            </div>
                                            <p class="text-2xl text-white font-black">Como funciona o nosso programa de <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;"> massagem para casais </span> ? </p>
                                        <li class="flex items-top">
                                            <div class="w-10">
                                                <span class="inline-flex items-center justify-center w-7 h-7 mr-2 text-white bg-gradient-to-r from-primarycolor to-primarycolor rounded-full"><span class="text-md font-bold">✓</span></span>
                                            </div>
                                            <p class="text-2xl text-white font-black"> Aumente sua <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;"> autoestima </span>  e a cumplicidade do <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;">casal </span> . </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <aside class="relative z-10 w-full max-w-3xl mt-20 lg:mt-0 lg:w-5/12 ">
                            @include('error-message')
                            <div class="bg-gradient-to-br from-secondarycolor via-primarycolor to-secondarycolor rounded-xl px-1 py-1 ">
                                <div class="flex flex-col items-start justify-start py-10 px-5 sm:px-10 bg-[#09090a] w-1/33.7 shadow-2xl rounded-xl" style="border: 4px solid #8329B4;">
                                    <form action="{{ route('form.validation', ['lang' => \Request::getpathinfo()]) }}" method="POST" class="w-full">
                                        <h4 class="w-full text-[2.0rem] md:text-[2.8rem] text-white text-center font-bold">Saiba mais sobre <span class="bg-clip-text bg-gradient-to-t from-yellow-300 via-green-700 to-green-900" style="color: #8329B4;">Duotherapy
                                            </span> agora!</h4>
                                        @csrf
                                        <div class="relative w-full mt-6 space-y-8">
                                            <div class="relative">
                                                <label class="font-medium text-white">Nome</label>
                                                <input type="text" name="name" id="name" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-100 rounded-lg focus:outline-none focus:border-primarycolor focus:ring-4 focus:ring-primarycolor" placeholder="Digite seu nome completo">
                                            </div>
                                            <div class="relative">
                                                <label class="font-medium text-white">Email</label>
                                                <input type="email" name="email" id="email" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-100 rounded-lg focus:outline-none focus:border-primarycolor focus:ring-4 focus:ring-primarycolor" placeholder="Digite seu melhor email">
                                            </div>
                                            <div class="relative">
                                                <label class="font-medium text-white">Telefone</label>
                                                <input type="tel" name="phone" id="phone" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-100 rounded-lg focus:outline-none focus:border-primarycolor focus:ring-4 focus:ring-primarycolor" placeholder="Digite seu número de telefone">
                                            </div>
                                            <div class="flex flex-row-reverse items-center gap-3">
                                                <label for="checkbox" class="w-full text-white xl:text-xl font-medium">Concordo em receber emails!</label>
                                                <input type="checkbox" name="checkbox" id="checkbox" class="cursor-pointer w-5 h-5 xl:w-7 xl:h-7 border rounded-sm focus:outline-none" checked required>
                                            </div>
                                            <div class="relative">
                                                <button type="submit" class="w-full px-5 py-4 text-lg text-center cursor-pointer font-semibold text-white bg-gradient-to-br from-#768d59 rounded-lg hover:from-primarycolor hover:via-secondarycolor hover:to-primarycolor transition duration-150 ease-out transform" style="background-color: #8329B4; color: white;">Estou Interessado!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
