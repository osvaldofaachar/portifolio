<?php
require_once 'projetos.php';

// Variáveis de conexão
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'portifolio-api';

// Instância da classe Projeto
$projetoObj = new Projeto($host, $user, $password, $db);
$projetos = $projetoObj->listarProjetos();
?>



<!DOCTYPE html>

    <html lang="en">


    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!--==================== FAVICON ====================-->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
       
        <title>Osvaldo Achar</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Osvaldo <span>Achar</span></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Inicío
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> Sobre
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Habilidades
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Serviços
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Poftifólio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contacto
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>



                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
        
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/osvaldo-achar-3b686a23b/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://github.com/osvaldofaachar" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                            <a href="https://instagram.com/osvaldo_achar/" target="_blank" class="home__social-icon">
                                <i class="uil uil-instagram-alt"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" x='12' y='5' href="assets/img/Screenshot_20241109-134522-removebg-preview (1).png"/>
                                </g>
                            </svg>
                            
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Olá, eu sou Osvaldo</h1>
                            <h3 class="home__subtitle">Desenvolvedor FullStack</h3>
                            <p class="home__description">
                                Sou desenvolvedor FullStack apaixonado por criar soluções robustas e eficientes. Com foco em qualidade, dinamismo e inovação, transformo desafios em código que faz a diferença no mundo.
                            </p>
                            <a href="#contact" class="button button--flex">
                                Contacte me <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Ir Para Baixo</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">Sobre Mim</h2>
                <span class="section__subtitle">Minha Apresentação</span>

                <div class="about__container container grid">
                    <img src="assets/img/Screenshot_20241109-134522-removebg-preview (1).png" alt="" class="about__img">
                
                <div class="about__data">

                    <p class="about__description">Sou Osvaldo Achar, desenvolvedor web especializado em backend com Java e Spring. Ambiciono expandir meus horizontes, evoluindo para desenvolvedor frontend e criando experiências completas para o usuário.</p>
                
                <div class="about__info">
                <div>    
                    <span class="about__info-title">5+</span>
                    <span class="about__info-name">Anos de <br> Experiência</span>
                </div>

                <div>
                    <span class="about__info-title">50+</span>
                    <span class="about__info-name">Projectos <br> Feitos</span>
                </div>

                <div>
                    <span class="about__info-title">30+</span>
                    <span class="about__info-name">Clientes <br> Satisfeitos</span>
                </div>
                </div>
                
                <div class="about__buttons">
                    <a download="" href="assets/pdf/CURRICULUM VITAE.pdf" class="button button--flex">
                        Baixar Curriculum Vitae  <i class="uil uil-download-alt button__icon"></i>
                    </a>
                </div>

                </div>
              </div>

            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Habilidades</h2>
                <span class="section__subtitle">Meu Nível Técnico</span>

                <div class="skills__container container grid">
                <div>
                    <!--==================== SKILLS 1 ====================-->
                    <div class="skills__content skill__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Desenvolvimento Frontend </h1>
                                <span class="skills__subtitle"> Mais de 4 anos</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Angular</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__angular"></span>
                                </div>
                            </div>


                        </div>
                    </div>

                     <!--==================== SKILLS 2 ====================-->
                     <div class="skills__content skill__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Desenvolvimento Backend </h1>
                                <span class="skills__subtitle"> Mais de 2 anos</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Java</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__java"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">SpringBoot</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__springboot"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">45%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">MySQL</h3>
                                    <span class="skills__number">65%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__mysql"></span>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div>
                    <!--==================== SKILLS 3 ====================-->
                    <div class="skills__content skill__close">
                        <div class="skills__header">
                            <i class="uil uil-monitor skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Técnico de Informática </h1>
                                <span class="skills__subtitle"> Mais de 5 anos</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Manutenção e Reparos de Hardware</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__manutencao"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"></h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__instalacao"></span>
                                </div>
                            </div>
                            

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Suporte Técnico e Solução de Problemas</h3>
                                    <span class="skills__number">75%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__suporte"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Segurança de TI e Proteção de Dados</h3>
                                    <span class="skills__number">65%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__seguranca"></span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                </div>


            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualificações</h2>
                <span class="section__subtitle">Minha Jornada Pessoal</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active" data-target='#education'>
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Educação
                        </div>

                        <div class="qualification__button button--flex" data-target="#work">
                            <i class="uil uil-briefcase-alt qualification__icon"></i>
                            Trabalho
                        </div>
                    </div>

                    <div class="qualification__sections">
                        <!--==================== QUALIFICATION CONTENT 1 ====================-->
                        <div class="qualification__content qualification__active" data-content id="education">
                            <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Tecnologias de Informação</h3>
                                <span class="qualification__subtitle">Universidade Católica de Moçambique</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2024
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                          <!--==================== QUALIFICATION 2 ====================-->
                          <div class="qualification__data">
                            <div></div>
                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">HTML5 e CSS3 </h3>
                                <span class="qualification__subtitle">Curso em Video</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - 2021
                                </div>
                            </div>

                        </div>

                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Curso de JavaScript</h3>
                                <span class="qualification__subtitle">Curso em Video</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 - 2022
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 4 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Java Backend Development </h3>
                                <span class="qualification__subtitle">Telusko, Amigoscode, BroCode</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - 2024
                                </div>
                            </div>

                        </div>
                            <!--==================== QUALIFICATION 5 ====================-->
                        <div class="qualification__data">
                          
                           
                            <div>
                                <h3 class="qualification__title">Ensino Pré-universitário</h3>
                                <span class="qualification__subtitle">E.S.G. Eduardo Mondlane</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                            <!--==================== QUALIFICATION 6 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Ensino Secundário</h3>
                                <span class="qualification__subtitle">E.S.G. Eduardo Mondlane</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014 - 2017
                                </div>
                            </div>

                            
                        </div>

                            <!--==================== QUALIFICATION 7 ====================-->
                        <div class="qualification__data">
                            
                            <div>
                                <h3 class="qualification__title">Ensino Primário</h3>
                                <span class="qualification__subtitle">E.C. do 1º e 2º Grau Samora Machel</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2007 - 2013
                                </div>
                            </div>

                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                        </div>
                        </div>
                    
                         <!--==================== QUALIFICATION CONTENT 2 ====================-->
                         <div class="qualification__content" data-content id="work">
                            <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Técnico de Informática</h3>
                                <span class="qualification__subtitle">NSuporte Ltda</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022 - 2024
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                          <!--==================== QUALIFICATION 2 ====================-->
                          <div class="qualification__data">
                            <div></div>
                            
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Desenvolvedor Backend </h3>
                                <span class="qualification__subtitle">NSuporte Ltda</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023 - 2024
                                </div>
                            </div>

                        </div>

                        </div>
                    </div>
                </div>
            </section>

              <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        <h2 class="section__title">Serviços</h2>
        <span class="section__subtitle">Serviços Disponíveis </span>
        
        <div class="services__container container grid">
            <!--==================== SERVICES 1 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-web-grid services__icon"></i>
                    <h3 class="services__title">UI/UX <br> Designer</h3>
                </div>
                <span class="button button--flex button--small button--link services__button">
                    Ver Mais
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
                
                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">UI/UX <br> Designer</h4>
                        <i class="uil uil-times services__modal-close"></i>
                        
                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Criação de interfaces visuais.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Projeto de experiências do usuário</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Prototipação e testes de usabilidade.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Otimização da experiência móvel.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--==================== SERVICES 2 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-arrow services__icon"></i>
                    <h3 class="services__title">Dev <br> Frontend</h3>
                </div>
                <span class="button button--flex button--small button--link services__button">
                    Ver Mais
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
                
                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Desenvolvimento <br> Frontend</h4>
                        <i class="uil uil-times services__modal-close"></i>
                        
                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Construção de Interfaces Visuais.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Otimização do Desempenho.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Criação de elementos interativos.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Acessibilidade e Responsividade.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--==================== SERVICES 3 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-server-network services__icon"></i>
                    <h3 class="services__title">Dev <br> Backend</h3>
                </div>
                <span class="button button--flex button--small button--link services__button">
                    Ver Mais
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
                
                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Dev <br> Backend</h4>
                        <i class="uil uil-times services__modal-close"></i>
                        
                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Desenvolvimento de APIs e Integrações.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Gerenciamento de Banco de Dados.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Implementação de Lógica de Negócio.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Manutenção e Escalabilidade.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--==================== SERVICES 4 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-monitor services__icon"></i>
                    <h3 class="services__title">Tec. <br> Informática</h3>
                </div>
                <span class="button button--flex button--small button--link services__button">
                    Ver Mais
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>
                
                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Técnico de <br> Informática</h4>
                        <i class="uil uil-times services__modal-close"></i>
                        
                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Manutenção e Reparos de Hardware.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Instalação e Configuração de Software.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Suporte Técnico e Solução de Problemas.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Segurança de TI e Proteção de Dados.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Projetos de infraestrutura de TI.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Implementação de redes cabeadas e wireless.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Configuração de servidores.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <!--==================== PORTFOLIO ====================-->
 <section class="portfolio section" id="portfolio">
    <h2 class="section__title">Portfólio</h2>
    <span class="section__subtitle">Projetos Mais Recentes <a href="exibir.html">( Ver Todos )</a> </span>

    <div class="portfolio__container container swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($projetos as $projeto): ?>
                <div class="portfolio__content grid swiper-slide">
                    <img src="<?= htmlspecialchars($projeto['url_imagem']); ?>" alt="Imagem do projeto" class="portfolio__img">

                    <div class="portfolio__data">
                        <h3 class="portfolio__title"><?= htmlspecialchars($projeto['titulo']); ?></h3>
                        <p class="portfolio__description">
                            <?= htmlspecialchars($projeto['descricao']); ?>
                        </p>
                        <a href="#" class="button button--flex button--small portfolio__button">
                            Rodar
                            <i class="uil uil-play button__icon"></i>
                        </a>
                        <a href="<?= htmlspecialchars($projeto['link_do_codigo_fonte']); ?>" 
                           class="button button--flex button--small portfolio__button" target="_blank">
                            Código 
                            <i class="uil uil-github button__icon"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
        </div>
        <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>
    <!--==================== PROJECT IN MIND ====================-->
    <!-- <section class="project section">
        <div class="project__bg">
            <div class="project__container container grid">
                <div class="project__data">
                    <h2 class="project__title">You have a new project</h2>
                    <p class="project__description">
                        Contact me now and get a 30% discount on your new project.
                    </p>
                    <a href="#contact" class="button button--flex button--white">
                        Contact Me 
                        <i class="uil uil-message button__icon .project__icon"></i>
                    </a>
                </div>
                <img src="assets/img/project.png" alt=""  class="project__img">
            </div>
        </div>
    </section> -->

    <!-- ==================== TESTIMONIAL ==================== -->
    <!-- <section class="testimonial section">
        <div class="section__title">Testimonial</div>
        <span class="section__subtitle">My client saying</span>
        
        <div class="testimonial__container container swiper-container">
            <div class="swiper-wrapper"> -->
                <!--==================== TESTIMONIAL 1 ====================-->
                <!-- <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">
                            <div>
                                <h3 class="testimonial__name">Sara Smith</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>
                        <div>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                        </div>
                    </div>

                    <p class="testimonial__description">
                        I get a good impression, I carry out my project with all the possible quality
                        and attention and support 24 hours a day.
                    </p>
                </div> -->
                <!--==================== TESTIMONIAL 2 ====================-->
                <!-- <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">
                            <div>
                                <h3 class="testimonial__name">Matt Robinson</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>
                        <div>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                        </div>
                    </div>

                    <p class="testimonial__description">
                        I get a good impression, I carry out my project with all the possible quality
                        and attention and support 24 hours a day.
                    </p>
                </div> -->
                <!--==================== TESTIMONIAL 3 ====================-->
                <!-- <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">
                            <div>
                                <h3 class="testimonial__name">Raul Harris</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>
                        <div>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                            <i class="uil uil-star .testimonial__icon-star"></i>
                        </div>
                    </div>

                    <p class="testimonial__description">
                        I get a good impression, I carry out my project with all the possible quality
                        and attention and support 24 hours a day.
                    </p>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-testimonial"></div>
        </div>
    </section> -->

                  


 <!--==================== CONTACT ME ====================-->
 <section class="contact section" id="contact">
    <div class="section__title">Contacto</div>
    <span class="section__subtitle">Entre em contacto</span>

    <div class="contact__container container grid">
        <div>
            <div class="contact__information">
                <i class="uil uil-phone contact__icon"></i>

                <div>
                    <h3 class="contact__title">Celular</h3>
                    <span class="contact__subtitle">+258 87 226 3320</span>
                </div>
            </div>
            <div class="contact__information">
                <i class="uil uil-envelope contact__icon"></i>

                <div>
                    <h3 class="contact__title">Email</h3>
                    <span class="contact__subtitle">osvaldofaachar@gmail.com</span>
                </div>
            </div>
            <div class="contact__information">
                <i class="uil uil-map-marker contact__icon"></i>

                <div>
                    <h3 class="contact__title">Localização</h3>
                    <span class="contact__subtitle">Quelimane, Zambézia - Moçambique</span>
                </div>
            </div>
        </div>

        <form action="https://formspree.io/f/mkgneape" method="POST" class="contact__form grid">
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="name" class="contact__label">Nome</label>
                    <input type="text" id="name" name="name" class="contact__input" required>
                </div>
                <div class="contact__content">
                    <label for="email" class="contact__label">Email</label>
                    <input type="email" id="email" name="email" class="contact__input" required>
                </div>
            </div>
            <div class="contact__content">
                <label for="project" class="contact__label">Assunto</label>
                <input type="text" id="project" name="subject" class="contact__input">
            </div>
            <div class="contact__content">
                <label for="message" class="contact__label">Mensagem</label>
                <textarea id="message" name="message" cols="0" rows="7" class="contact__input" required></textarea>
            </div>
            <div>
                <button type="submit" class="button button--flex">
                    Enviar Mensagem
                    <i class="uil uil-message button__icon"></i>
                </button>
            </div>
        </form>
        
        
    </div>
</section>

        </main>

        
<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container container grid">
            <div>
                <h1 class="footer__title">Osvaldo Achar</h1>
                <span class="footer__subtitle">Desenvolvedor Web FullStack</span>
            </div>

            <ul class="footer__links">
                <li>
                    <a href="#services" class="footer__link">Serviços</a>
                </li>
                <li>
                    <a href="#portfolio" class="footer__link">Portifólio</a>
                </li>
                <li>
                    <a href="#contact" class="footer__link">Contacto</a>
                </li>
            </ul>

            <div class="footer__socials">
                <a href="https://www.facebook.com/profile.php?id=100004317315654&ref=xav_ig_profile_web" target="_blank" class="footer__social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/osvaldo_achar/" target="_blank" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
            </div>

            <p class="footer__copy">&#169; Osvaldo Achar. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

        
        <!--==================== SCROLL TOP ====================-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup__icon"></i>
</a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
