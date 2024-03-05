<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <title>EasyProduct</title>

        @vite('resources/css/app.css')
    </head>
    <body class="relative w-full bg-center min-h-screen bg-cover bg-no-repeat bg-fixed">

        <!-- Section 1 -->
        <section class="bg-[#000000b3]">
            <div class="absolute inset-0 min-h-screen bg-[#09090b] opacity-[.97]"></div>
            <div class="mx-auto relative z-999 max-w-7xl">
                <div class="relative flex items-center justify-between h-24 px-10">
                    <div class="flex items-center mb-4 mt-8 font-medium text-gray-100 md:mb-0 lg:order-none lg:w-auto lg:items-center lg:justify-center">
                        <img class="h-16 md:h-20 lg:h-[5rem]" src="{{ asset('storage/logo.png') }}" alt="Logo">
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ route('thank-you', ['lang' => 'pt']) }}">
                            <img class="h-6" src="{{ asset('storage/brazil-flag.png') }}" alt="Brazil Flag Icon">
                        </a>
                        <a href="{{ route('thank-you', ['lang' => 'en']) }}">
                            <img class="h-6 opacity-40" src="{{ asset('storage/uk-flag.png') }}" alt="United Kingdom Flag Icon">
                        </a>
                    </div>
                </div>
                <div class="flex min-h-[90vh] items-center justify-center">
                    <div class="bg-gradient-to-br from-secondarycolor via-primarycolor to-secondarycolor rounded-xl px-1 py-1">
                        <section class="box-border py-8 leading-7 bg-black rounded-2xl sm:py-12 md:py-16 lg:py-24">
                            <div class="box-border max-w-sm px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 md:max-w-7xl">
                                <div class="flex flex-col gap-5 items-center space-y-5 leading-7 text-center text-gray-900 border-0 border-gray-200 xl:space-y-4">
                                    <h1 class="box-border m-0 text-4xl font-extrabold leading-tight tracking-tight text-white border-solid md:text-5xl lg:text-6xl">
                                        Obrigado, agradecemos o seu interesse no <span class="text-transparent bg-clip-text bg-gradient-to-t from-secondarycolor via-primarycolor to-primarycolor">EasyProduct</span>.
                                    </h1>
                                    <p class="box-border pb-8 text-2xl text-gray-100 border-solid md:text-2xl">
                                        Você receberá um e-mail para confirmar sua inscrição na lista de espera do EasyProduct.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
