<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TechFarma - Welcome</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Css do Projeto -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- fades -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="h-screen relative">

    <!-- NAVBAR -->
    <header class="bg-white px-8 bg-white border-b border-gray-100">
        <nav class="flex justify-between items-center mx-auto mx-8 py-4">
            <div data-aos="fade-right">
                <a href="{{ route('welcome') }}">
                    <img class="cursor-pointer hidden sm:block" src="/img/logo-techfarma2.png" alt="Logo TechFarma">
                </a>
            </div>
            <div class="menu nav-links duration-500 md:static absolute md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-white">
                    <li class="hover:text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-normal leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">
                        <!-- <a href="{{ route('welcome') }}">Início</a> -->
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <!--
                <a href="{{ route('index') }}">
                    <button
                        class="text-lime-600 inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 hover:border-lime-600 focus:outline-none focus:text-lime-700 focus:border-lime-600 transition duration-300 ease-in-out"
                        data-aos="fade-right">Ir para o FarmaTech</button>
                </a>

                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
                -->
            </div>
        </nav>
    </header>

    <!-- INÍCIO -->
    <section class="mt-4" data-aos="fade-down" id="inicio">
        <div class="mt-8 px-8 sm:px-24 grid grid-cols-1 xl:grid-cols-2 gap-6 py-4">
            <div class="w-full rounded-xl flex flex-col justify-center">
                <h1 class="text-lg py-1 font-semibold">Aspar - Assessoria & Tecnologia</h1>
                <h2 class="text-2xl py-1 font-bold">Consultoria e Desenvolvimento</h2>
                <p class="text-lg py-1 font-normal text-gray-600">A Aspar é uma empresa inovadora que atua há alguns
                    anos no desenvolvimento e integração de sistemas e aplicações, fornecendo consultoria e soluções de
                    acessibilidade web.</p>
            </div>
            <div
                class="w-full py-4 hidden sm:block transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <img class="rounded-xl" src="/img/tech-foto.png" alt="Logo Sis Emendas">
            </div>
        </div>
    </section>

    <!-- Empresa -->
    <section class="border-t-2 mt-4" data-aos="fade-down" id="empresa">
        <div class="mt-8 px-8 sm:px-24">
            <div class="flex flex-col justify-center items-center">
                <div>
                    <h2
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-lime-600 rounded-lg">
                        Empresa</h2>
                </div>
                <div class="py-2">
                    <h1 class="text-2xl py-1 font-bold">Aspar</h1>
                </div>
                <div class="py-2">
                    <p class="text-lg text-center py-1 font-normal text-gray-600">Somos uma empresa dedicada ao
                        desenvolvimento de
                        projetos que visam ajudar
                        as pessoas e promover uma web mais inclusiva.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HMV -->
    <section data-aos="fade-down">
        <div class="mt-2 px-8">
            <div class="flex justify-center items-center">
                <div class="tab-section p-5 rounded-lg backdrop-filter backdrop-blur-lg w-[1200px] min-h-[400px]">
                    <div class="flex flex-wrap gap-1 rounded">
                        <button
                            class="inline-flex justify-center text-xl p-4 font-bold flex-grow w-80 border-b-2 hover:border-lime-600 font-medium leading-5 transition duration-300 ease-in-out bg-gray-200 hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl"
                            data-tab-target="#tab1">História</button>
                        <button
                            class="inline-flex justify-center text-xl p-4 font-bold flex-grow w-80 border-b-2 hover:border-lime-600 font-medium leading-5 transition duration-300 ease-in-out bg-gray-200 hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl"
                            data-tab-target="#tab2">Missão</button>
                        <button
                            class="inline-flex justify-center text-xl p-4 font-bold flex-grow w-80 border-b-2 hover:border-lime-600 font-medium leading-5 transition duration-300 ease-in-out bg-gray-200 hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl"
                            data-tab-target="#tab3">Valores</button>
                    </div>
                    <div class="mt-4">
                        <div id="tab1" class="tab-content text-gray-700">
                            <div class="mt-8 grid grid-cols-1 xl:grid-cols-2 gap-10 py-4">
                                <div class="w-full rounded-xl flex flex-col justify-center">
                                    <h2 class="text-2xl py-1 font-bold"><ion-icon name="chevron-forward-outline"
                                            size="small" class="mr-2"></ion-icon>Nossa História</h2>
                                    <p class="text-lg py-1 font-normal text-gray-600">A Aspar é uma empresa inovadora
                                        que atua há alguns anos no desenvolvimento e integração de sistemas e
                                        aplicações, fornecendo consultoria e soluções de acessibilidade web.</p>

                                    <p class="text-lg py-1 font-normal text-gray-600">Nossa jornada tem sido marcada por
                                        uma busca incansável por inovação, atendendo às necessidades em constante
                                        evolução de nossos clientes e da sociedade como um todo.</p>
                                </div>
                                <div class="w-full py-4 hidden sm:block">
                                    <img class="rounded-xl" src="/img/tech-foto.png" alt="Logo Sis Emendas">
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="hidden tab-content text-gray-700">
                            <div class="mt-8 grid grid-cols-1 xl:grid-cols-2 gap-10 py-4">
                                <div class="w-full rounded-xl flex flex-col justify-center">
                                    <h2 class="text-2xl py-1 font-bold"><ion-icon name="chevron-forward-outline"
                                            size="small" class="mr-2"></ion-icon>Nossa Missão</h2>
                                    <p class="text-lg py-1 font-normal text-gray-600">Sentimos entusiasmo quando
                                        auxiliamos aqueles que nos inspiram a compartilhar com o mundo seus esforços
                                        para aprimorar a qualidade de vida das pessoas.</p>
                                    <p class="text-lg py-1 font-normal text-gray-600">Seja ao criar um novo site
                                        institucional ou desenvolver um aplicativo que auxilie pessoas com deficiência
                                        visual, nosso impulso deriva da convicção de que, ao término do dia, nossos
                                        projetos tiveram um impacto positivo na transformação da sociedade.</p>
                                </div>
                                <div class="w-full py-4 hidden sm:block">
                                    <img class="rounded-xl" src="/img/tech-foto.png" alt="Logo Sis Emendas">
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="hidden tab-content text-gray-700">
                            <div class="mt-8 grid grid-cols-1 xl:grid-cols-2 gap-10 py-4">
                                <div class="w-full rounded-xl flex flex-col justify-center">
                                    <h2 class="text-2xl py-1 font-bold"><ion-icon name="chevron-forward-outline"
                                            size="small" class="mr-2"></ion-icon>Nossos Valores</h2>
                                    <p class="text-lg py-1 font-normal text-gray-600">Os valores fundamentais da Aspar
                                        refletem nossa missão e compromisso inabalável com a inovação, acessibilidade e
                                        o bem-estar da sociedade. Colocamos a inovação no centro de nossas operações,
                                        buscando constantemente desenvolver e integrar sistemas e aplicativos de ponta
                                        que atendam às necessidades em constante evolução de nossos clientes.</p>
                                    <p class="text-lg py-1 font-normal text-gray-600">Além disso, nossa paixão pela
                                        acessibilidade web e a melhoria da qualidade de vida das pessoas é o alicerce de
                                        tudo o que fazemos. Ao criar soluções que incluem desde sites institucionais até
                                        aplicativos destinados a auxiliar aqueles com deficiência visual, estamos
                                        comprometidos em contribuir para a transformação positiva da sociedade, sempre
                                        inspirados pela crença de que nosso trabalho tem um impacto significativo no
                                        mundo.</p>
                                </div>
                                <div class="w-full py-4 hidden sm:block">
                                    <img class="rounded-xl" src="/img/tech-foto.png" alt="Logo Sis Emendas">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Serviços -->
    <section class="border-t-2 mt-4" data-aos="fade-down" id="servicos">
        <div class="mt-8 px-8">
            <div class="flex flex-col justify-center items-center">
                <div>
                    <h2
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-lime-600 rounded-lg">
                        Serviços</h2>
                </div>
                <div class="py-2">
                    <h1 class="text-2xl py-1 font-bold">O que entregamos?</h1>
                </div>
                <div class="py-2">
                    <p class="text-lg py-1 font-normal text-gray-600">Resultado, análise do problema e desenvolvimento
                        da solução ideal para você alcançar os objetivos da sua empresa.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Serviços -->
    <section class="p-2" data-aos="fade-down">
        <div class="mt-2 px-8">
            <div class="flex flex-col sm:flex-row justify-center items-center">

                <div
                    class="max-w-sm h-50 md:h-72 sm:h-96 p-6 bg-gray-200 hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2">
                    <img src="img/icon-01.svg" class="bg-lime-600 py-2 px-2 rounded" alt="Experiência"
                        title="Experiência">
                    <h5 class="mb-2 mt-2 text-2xl py-1 font-bold">Experiência</h5>
                    <p class="text-lg py-1 font-normal text-gray-600">Sabemos dos desafios enfrentados e conhecemos os
                        caminhos para alcançar os melhores resultados.</p>
                </div>

                <div
                    class="max-w-sm h-50 md:h-72 sm:h-96 p-6 bg-gray-200 hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2">
                    <img src="img/icon-02.svg" class="bg-lime-600 py-2 px-2 rounded" alt="Inovação"
                        title="Inovação">
                    <h5 class="mb-2 mt-2 text-2xl py-1 font-bold">Inovação</h5>
                    <p class="text-lg py-1 font-normal text-gray-600">A Aspar traz inovação e soluções completas para
                        eliminar gargalos.</p>
                </div>

                <div
                    class="max-w-sm h-50 md:h-72 sm:h-96 p-6 bg-gray-200 hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2">
                    <img src="img/icon-03.svg" class="bg-lime-600 py-2 px-2 rounded" alt="Acessibilidade"
                        title="Acessibilidade">
                    <h5 class="mb-2 mt-2 text-2xl py-1 font-bold">Acessibilidade</h5>
                    <p class="text-lg py-1 font-normal text-gray-600">A Aspar pode ajudar sua organização a eliminar as
                        barreiras no mundo digital.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cases -->
    <section class="border-t-2 mt-4" data-aos="fade-down" id="cases">
        <div class="mt-8 px-8">
            <div class="flex flex-col justify-center items-center">
                <div>
                    <h2
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-lime-600 rounded-lg">
                        Cases</h2>
                </div>
                <div class="py-2">
                    <h1 class="text-2xl py-1 font-bold">Trabalhos realizados</h1>
                </div>
                <div class="py-2">
                    <p class="text-lg py-1 font-normal text-gray-600">Entregando soluções.</p>
                </div>
                <div class="flex flex-col sm:flex-row">
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <a href="{{ route('index') }}" target="_blank">
                            <img src="img/logo-no.png" class="w-40"
                                title="SIS Emendas">
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnologias -->
    <section class="border-t-2 mt-4" data-aos="fade-down" id="tecnologias">
        <div class="mt-8 px-8">
            <div class="flex flex-col justify-center items-center">
                <div>
                    <h2
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-lime-600 rounded-lg">
                        Tecnologias</h2>
                </div>
                <div class="py-2">
                    <h1 class="text-2xl py-1 font-bold">Principais tecnologias utilizadas na Aspar.</h1>
                </div>
                <div class="py-2">
                    <p class="text-lg py-1 font-normal text-gray-600">Empregamos tecnologia para resolver desafios,
                        visando auxiliar as pessoas e promover uma internet mais acessível e inclusiva.</p>
                </div>
                <div class="flex flex-col sm:flex-row">
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <img class="w-24" src="/img/javascript.png" alt="JavaScript" title="JavaScript">
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <img class="w-24" src="/img/php.png" alt="PHP" title="PHP">
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <img class="w-24" src="/img/postgres.png" alt="Postgres" title="Postgres">
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <img class="w-24" src="/img/react.png" alt="React" title="React">
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <img class="w-24" src="/img/vue.png" alt="Vue" title="Vue">
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white hover:bg-gray-50 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 h-full sm:h-max transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                        <img class="w-24" src="/img/typescript.png" alt="TypeScript" title="TypeScript">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="whats" data-aos="fade-up">
        <a href="https://wa.me/+5561999999999" target="_blank">
            <img src="/img/whatsapp.png" width="70px" alt="Fale conosco pelo WhatsApp"
                title="Fale conosco pelo WhatsApp">
        </a>
    </div>

    <script>
        const tabs = document.querySelectorAll('[data-tab-target]');
        const activeClass = 'border-lime-600';

        // Select first tab by default
        tabs[0].classList.add(activeClass);
        document.querySelector('#tab1').classList.remove('hidden');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetContent = document.querySelector(tab.dataset.tabTarget);
                // console.log(targetContent)

                document.querySelectorAll('.tab-content').forEach(content => content.classList.add(
                    'hidden'));
                targetContent.classList.remove('hidden');

                // Remove active class from all tabs
                document.querySelectorAll('.border-lime-600').forEach(activeTab => activeTab.classList
                    .remove(activeClass));

                // Add active class to clicked tab
                console.log(tab)
                tab.classList.add(activeClass);
            });
        });
    </script>

    <!-- Navbar open/close -->
    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>

    <!-- Fade's -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>

    <!-- Js do Projeto -->
    <script src="/js/script.js"></script>

    <!-- Ion Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>
