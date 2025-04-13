<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Portfolio DEV</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="font-[Sans-Serif] bg-[#16181D]">
    <!-- Cabeçalho -->
    <header class="bg-[url(/assets/background-header.png)] bg-center sm:bg-cover w-full h-screen px-4 flex justify-center items-center text-center">
        <!-- Centralizando e deixando em direção em colunas -->
        <div class="mx-auto flex flex-col items-center justify-center text-center space-y-10 w-full max-w-screen-lg  mt-[-60px] sm:mt-[-100px] md:mt-0"">
            <!-- Foto -->
            <div class="h-32 w-32 border-3 border-solid border-[#E3646E] rounded-full">
                <img src="assets/Eu-headset.jpg" alt="Imagem minha usando um headset"
                    class="h-full w-full rounded-full border-3 object-cover">
            </div>

            <!-- Informações -->
            <div class="mx-auto space-y-6 text-center">
                <p class="text-gray-400 sm:text-[14px] md:text-[20px] leading-[120%]">
                    Hello World! Meu nome é <span class="text-[#E3646E]">Salumão Barbosa</span> e sou
                </p>
                <h1 class="text-gray-100 font-bold md:text-[56px]">Desenvolvedor PHP</h1>
                <p class="mx-auto text-[14px] sm:max-w-md text-gray-400 px-4">
                    Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da
                    minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
                </p>
            </div>
            <div class="flex flex-wrap justify-center gap-2">
                <a class="text-black rounded-md px-4 py-2 mx-1 font-semibold text-xs text-green-900 bg-[#82BC4F]" href="#">Github</a>
                <a class="text-black rounded-md px-4 py-2 mx-1 font-semibold text-xs text-purple-900 bg-[#BB72E9]" href="#">PHP</a>
                <a class="text-black rounded-md px-4 py-2 mx-1 font-semibold text-xs text-blue-900 bg-[#3996DB]" href="#">CSS</a>
                <a class="text-black rounded-md px-4 py-2 mx-1 font-semibold text-xs text-orange-900 bg-[#E3646E]" href="#">HTML</a>
                <a class="text-black rounded-md px-4 py-2 mx-1 font-semibold text-xs text-yellow-900 bg-[#EABD5F]" href="#">JS</a>
            </div>
            <a href="#projects">
                <div class="h-16 w-16 flex justify-center items-center text-gray-400 sm:mt-32 border-1 p-4 rounded-full">
                <i class="ph-bold ph-caret-double-down"></i>
                </div>
            </a>
        </div>
        
    </header>
    <!-- Meus trabalhos -->
    <main class="mx-auto max-w-screen-lg mt-10">
        <div class="text-center mb-10" id="projects">
            <h1 class="text-[#E3646E] text-[20px]">
                Meu trabalho
            </h1>
            <p class="text-white font-bold text-[24px]">
                Veja os projetos em destaque
            </p>
        </div>

        <div class="mx-auto">
            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Projeto 1 -->
                <div class="flex bg-[#292c34] p-2 rounded-[12px] justify-between space-x-3 mb-4">
                    <div class="w-2/4">
                        <img class="h-full w-full rounded-lg object-cover" src="assets/image.png" alt="Travelgram">
                    </div>
                    <div class="w-3/4 space-y-3">
                        <h3 class="text-gray-300 font-bold text-[16px]">Travelgram</h3>
                        <p class="text-gray-400 text-[14px] leading-[140%]">Rede social onde as pessoas mostram  os registros de suas viagens pelo mundo</p>
                        <div class="flex space-x-2 mt-4">
                            <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                            <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                            <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                        </div>
                    </div>
                </div>

                <div class="flex bg-[#292c34] p-2 rounded-[12px] justify-between space-x-3 mb-4">
                    <div class="w-2/4">
                    <img class="h-full w-full rounded-lg object-cover" src="assets/image-1.png" alt="Receita">
                    </div>
                    <div class="w-3/4 space-y-3">
                        <h3 class="text-gray-300 font-bold text-[16px]">Página de Receitas</h3>
                        <p class="text-gray-400 text-[14px] leading-[140%]">Rede social onde as pessoas mostram  os registros de suas viagens pelo mundo</p>
                        <div class="flex space-x-2 mt-4">
                            <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                            <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                            <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                        </div>
                    </div>
                </div>

                <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 mb-4">
                    <div class="w-2/4">
                        <img class="h-full w-full rounded-lg object-cover" src="assets/image-2.png" alt="Tech News">
                    </div>
                    <div class="w-3/4 space-y-3">
                        <h3 class="text-gray-300 font-bold text-[16px]">Tech News</h3>
                        <p class="text-gray-400 text-[14px] leading-[140%]">Homepage de um portal de notícias sobre a área da tecnologia</p>
                        <div class="flex space-x-2 mt-4">
                            <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                            <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                            <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                        </div>
                    </div>
                </div>

                <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 mb-4">
                    <div class="w-2/4">
                        <img class="h-full w-full rounded-lg object-cover" src="assets/image-3.png" alt="Imagem Projeto">
                    </div>
                    <div class="w-3/4 space-y-3">
                        <h3 class="text-gray-300 font-bold text-[16px]">Refund</h3>
                        <p class="text-gray-400 text-[14px] leading-[140%]">Um sistema para pedido e acompanhamento de reembolso</p>
                        <div class="flex space-x-2 mt-4">
                            <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                            <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                            <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                        </div>
                    </div>
                </div>
                    
                <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 mb-4">
                    <div class="w-2/4">
                        <img class="h-full w-full rounded-lg object-cover" src="assets/image-4.png" alt="Imagem Projeto">
                    </div>
                    <div class="w-3/4 space-y-3">
                        <h3 class="text-gray-300 font-bold text-[16px]">Zingen</h3>
                        <p class="text-gray-400 text-[14px] leading-[140%]">Landing Page completa e responsiva de um aplicativo de Karaokê</p>
                        <div class="flex space-x-2 mt-4">
                            <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                            <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                            <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                        </div>
                    </div>
                </div>

                <div class="flex bg-[#292C34] p-2 rounded-[12px] justify-between space-x-3 mb-4">
                    <div class="w-2/4">
                        <img class="h-full w-full rounded-lg object-cover" src="assets/image-5.png" alt="Imagem Projeto">
                    </div>
                    <div class="w-3/4 space-y-3">
                        <h3 class="text-gray-300 font-bold text-[16px]">Página de turismo</h3>
                        <p class="text-gray-400 text-[14px] leading-[140%]">Página com as principais informações para quem quer viajar para Busan</p>
                        <div class="flex space-x-2 mt-4">
                            <span class="bg-[#BB72E9] text-black rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-[#3996DB] text-black rounded-md px-2 py-1 font-semibold text-xs">CSS</span>
                            <span class="bg-[#E3646E] text-black rounded-md px-2 py-1 font-semibold text-xs">HTML</span>
                            <span class="bg-[#EABD5F] text-black rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
    <footer class="bg-[url(/assets/background-footer.png)] bg-cover bg-center w-full h-screen px-4 flex justify-center items-center text-center">
        <div>
            <div>
                <span class="text-purple-400">Contato</span>
                <h1 class="text-gray-300 font-bold py-2">Gostou do meu trabalho?</h1>
                <p class="mx-auto text-[14px] sm:max-w-md text-gray-400 px-4">Entre em contato ou acompanhe as minhas redes sociais!</p>
            </div>

            <div class="mt-10 text-[18px]">
                <div class="flex justify-between items-center bg-gray-600 px-4 py-3 rounded-md mb-4">
                    <div class="flex items-center gap-2 text-gray-200 hover:text-blue-500 transition duration-200">
                        <i class="ph-bold ph-linkedin-logo"></i>
                        <a href="#">Linkedin</a>
                    </div>    
                    <i class="ph-bold ph-arrow-up-right flex justify-right text-blue-400"></i>
                </div>

                <div class="flex justify-between items-center bg-gray-600 px-4 py-3 rounded-md mb-4">
                    <div class="flex items-center gap-2 text-gray-200 hover:text-blue-500 transition duration-200">
                        <i class="ph-bold ph-instagram-logo"></i>
                        <a href="#">Instagram</a>
                    </div>    
                    <i class="ph-bold ph-arrow-up-right flex justify-right text-blue-400"></i>
                </div>

                <div class="flex justify-between items-center bg-gray-600 px-4 py-3 rounded-md mb-4">
                    <div class="flex items-center gap-2 text-gray-200 hover:text-blue-500 transition duration-200">
                        <i class="ph-bold ph-github-logo"></i>
                        <a href="#">Github</a>
                    </div>    
                    <i class="ph-bold ph-arrow-up-right flex justify-right text-blue-400"></i>
                </div>

                <div class="flex justify-between items-center bg-gray-600 px-4 py-3 rounded-md mb-4">
                    <div class="flex items-center gap-2 text-gray-200 hover:text-blue-500 transition duration-200">
                        <i class="ph-bold ph-linkedin-logo"></i>
                        <a href="#">E-mail</a>
                    </div>    
                    <i class="ph-bold ph-arrow-up-right flex justify-right text-blue-400"></i>
                </div>
            </div>
        </div>

    </footer>
    <!-- Contato -->
</body>

</html>