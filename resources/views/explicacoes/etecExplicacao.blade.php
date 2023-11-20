@extends('layouts.main-Completo')

@section('title', 'Informações do Vestibulinho - PrepTEC')

@section('content')
<head>
    <link rel="stylesheet" href="/css/explicacoes/etecExplicacao.css">
    <link rel="stylesheet" href="/css/layouts/main.css">
    <script>
        function brdnext()
        {
            document.getElementById("txt-part1-brd-etec-title").style.display = "none";
            document.getElementById("txt-part1-brd-vest-title").style.display = "block";
            document.getElementById("txt-part1-exp-etec").style.display = "none";
            document.getElementById("txt-part1-exp-vest").style.display = "block";
        }
        function brdback()
        {
            document.getElementById("txt-part1-brd-etec-title").style.display = "block";
            document.getElementById("txt-part1-brd-vest-title").style.display = "none";
            document.getElementById("txt-part1-exp-etec").style.display = "block";
            document.getElementById("txt-part1-exp-vest").style.display = "none";
        }
        var showing = [1, 0, 0, 0, 0];
        var texts = ['d-part2-yp-exp-tecnico', 'd-part2-yp-exp-mtec', 'd-part2-yp-exp-mtec-pi', 'd-part2-yp-exp-mtec-n', 'd-part2-yp-exp-ams'];
        function mdltsnext() 
        {
            var tElems = [];
            for (var i = 0; i < texts.length; i++)
            {
                tElems.push(document.getElementById(texts[i]));   
            }
            for (var i = 0; i < showing.length; i++) 
            {
                if (showing[i] == 1) 
                {
                    tElems[i].style.display = 'none';
                    showing[i] = 0;
                    
                    if (i == showing.length - 1) 
                    {
                        tElems[0].style.display = 'block';
                        showing[0] = 1;
                    } 
                    else 
                    {
                        tElems[i + 1].style.display = 'block';
                        showing[i + 1] = 1;
                    }
                    break;
                }
            }      
        }
        var showing2 = [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var texts2 = ['d-part3M-page1', 'd-part3M-page2', 'd-part3M-page3', 'd-part3M-page4', 'd-part3M-page5', 'd-part3M-page6', 'd-part3M-page7', 'd-part3M-page8', 'd-part3M-page9', 'd-part3M-page10', 'd-part3M-page11', 'd-part3M-page12', 'd-part3M-page13', 'd-part3M-page14'];
        function eixosnext() 
        {
            var tElems2 = [];
            for (var i = 0; i < texts2.length; i++)
            {
                tElems2.push(document.getElementById(texts2[i]));   
            }
            for (var i = 0; i < showing2.length; i++) 
            {
                if (showing2[i] == 1) 
                {
                    tElems2[i].style.display = 'none';
                    showing2[i] = 0;
                    
                    if (i == showing2.length - 1) 
                    {
                        tElems2[0].style.display = 'block';
                        showing2[0] = 1;
                    } 
                    else 
                    {
                        tElems2[i + 1].style.display = 'block';
                        showing2[i + 1] = 1;
                    }
                    break;
                }
            }      
        }
    </script>
</head>
<body>
    <!--SVG com fundo azul ondulado-->

        <svg viewBox="0 0 1440 810" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com" id="svg-blue-curve">
            <defs>
                <style bx:fonts="Roboto">@import url(https://fonts.googleapis.com/css2?family=Roboto%3Aital%2Cwght%400%2C100%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C700%3B0%2C900%3B1%2C100%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C700%3B1%2C900&amp;display=swap);</style>
            </defs>
            <path fill="#326cb4" fill-opacity="1" d="M 0 72.252 L 59.999 132.538 C 120.001 191.921 240.001 313.85 360 313.171 C 480.001 313.85 599.999 191.921 720 180.634 C 840.002 169.342 960.001 264.175 1080.002 300.978 C 1200.001 336.427 1320.003 313.85 1380.001 300.978 L 1440 289.012 L 1440 0 L 1380.001 0 C 1320.003 0 1200.001 0 1080.002 0 C 960.001 0 840.002 0 720 0 C 599.999 0 480.001 0 360 0 C 240.001 0 120.001 0 59.999 0 L 0 0 L 0 72.252 Z" style="transform-box: fill-box; transform-origin: 50% 50%;"/>
            <text style="fill: rgb(255, 255, 255); font-family: Roboto; font-size: 35.678px; line-height: 85.6271px; white-space: pre;" transform="matrix(1.575657, 0, 0, 1.681711, 302.221619, -55.201729)" x="2.737" y="126.402">INFORMAÇÕES DO VESTIBULINHO</text>
        </svg>

    <!--Fim do SVG com fudo azul ondulado-->

    <!--Parte 1: Oque é Etec?/ O que é Vestibulinho? - Lousa e Explicação-->

        <!--Div Pai A- O que é Etec/ Vestibulinho-->
            <div id="d-part1-father">

                <!--Container central-->
                    <div class="container text-center">

                        <!--Alinhamento A - 2 Colunas Horizontais-->
                            <div class="row row-cols-2" id="d-part1-row">

                                <!--Coluna Lousas-->
                                    <div class="col" id="d-part1-brd-column">

                                        <!--Lousa-->
                                            <div id="d-part1-brd-design">

                                                <!--Texto 1: Oque é ETEC?-->
                                                    <h2 id="txt-part1-brd-etec-title">O que é<br>Etec?</h2>
                                                <!--Fim do Texto 1-->

                                                <!--Texto 2: Oque é Vestibulinho?-->
                                                    <h2 id="txt-part1-brd-vest-title">O que é<br>Vestibulinho?</h2>
                                                <!--Fim do Texto 2-->

                                            </div>
                                        <!--Fim da Lousa-->

                                        <!--Botão Anterior-->
                                            <button id="btn-part1-brd" onClick="brdback()">
                                                <ion-icon name="chevron-back-outline" id="img-part1-btn-brd"></ion-icon>
                                            </button>
                                        <!--Fim do Botão Anterior-->

                                        <!--Botão Proximo-->
                                            <button id="btn-part1-brd" onClick="brdnext()">
                                                <ion-icon name="chevron-forward-outline" id="img-part1-btn-brd"></ion-icon>
                                            </button>
                                        <!--Fim do Botão Proximo-->

                                    </div>
                                <!--Fim da Coluna Lousas-->

                                <!--Coluna Explicações Lousa - Etec e Vestibulinho-->
                                    <div class="col" id="d-part1-exp-column">

                                        <!--Texto Etec-->
                                            <p id="txt-part1-exp-etec">
                                                De acordo com o site do Centro Paula Souza, 
                                                as Escolas Técnicas Estaduais (Etecs) são instituições de ensino que possui uma variedade de Cursos Técnicos, 
                                                contendo Ensinos Técnicos, Integrados, Médio e Especialização. 
                                                Essas escolas são financiadas pelo Centro Estadual de Educação do Estado de São Paulo, possuindo
                                                associação com o Centro Paula Souza. O objetivo dessa rede de ensino é 
                                                proporcionar aos alunos uma preparação mais abrangente para a vida profissional.
                                            </p>
                                        <!--Fim do Texto Etec-->

                                        <!--Texto Vestibulinho-->
                                            <p id="txt-part1-exp-vest">
                                                De acordo com o site do Vestibulinho Etec, 
                                                o Vestibulinho Etec é um processo seletivo para ingressar nas Escolas Técnicas Estaduais (Etecs) 
                                                por meio de um exame de múltipla escolha. Esta prova é voltada principalmente para os
                                                estudantes que estão cursando o 9º ano do Ensino Fundamental 
                                                e o 2º ano do Ensino Médio no estado de São Paulo. 
                                            </p>
                                        <!--Fim do Texto Vestibulinho-->

                                    </div>
                                <!--Fim da Coluna Explicações Lousa-->

                            </div>
                        <!--Fim do Alinhamento A-->

                    </div>
                <!--Fim do Container Central-->

            </div>
        <!--Fim da Div Pai A-->

    <!--Fim da Parte 1-->

    <!--Parte 2 - Modalidades-->

        <!--Div Pai B - Modalidades-->
            <div id="d-part2-father">

                <!--PapeL Atrás-->
                    <div id="d-part2-yp-back"></div>
                <!--Fim do Papel Atrás-->

                <!--Papel Frente-->
                    <div id="d-part2-yp-front">
                        
                        <!--Centralizador-->
                            <center>

                                <!--Tecnico-->
                                    <div id="d-part2-yp-exp-tecnico">

                                        <!--Row Tecnico-->
                                            <div class="row row-cols-2" id="d-part2-yp-exp-tecnico-row">

                                                <!--Coluna Texto Tecnico-->
                                                    <div class="col" id="d-part2-yp-exp-tecnico-column-txt">

                                                        <!--Titulo Tecnico-->
                                                            <h2 id="txt-part2-yp-exp-title-tecnico">O que é Técnico?</h2>
                                                        <!--Fim do Titulo Tecnico-->

                                                        <!--Explicação do Tecnico-->
                                                            <p id="txt-part2-yp-exp">
                                                                Segundo o site do MEC, cursos técnicos são programas de nível médio com o propósito 
                                                                de capacitar o aluno proporcionando conhecimentos teóricos e práticos nas diversas 
                                                                atividades do setor produtivo.
                                                            </p>
                                                        <!--Fim da Explicação do Tecnico-->

                                                    </div>
                                                <!--Fim da Coluna Texto Tecnico-->
                                        
                                                <!--Coluna Post It Tecnico-->
                                                    <div class="col" id="d-part2-yp-exp-tecnico-column-post-it">
                                                        <!--Post It-->
                                                            <div id="d-part2-yp-exp-tecnico-post-it">
                                                                <p>Existem 3 modalidades para o ensino técnico, são essas:</p>
                                                                <ul>
                                                                    <li>Presencial
                                                                    <li>Semipresencial
                                                                    <li>Online
                                                                </ul>
                                                            </div>
                                                        <!--Fim do Post It-->
                                                    </div>
                                                <!--Fim da Coluna Post It Tecnico-->

                                            </div>
                                        <!--Fim do Row Tecnico-->

                                    </div>
                                <!--Fim do Tecnico-->

                                <!--M-TEC-->
                                    <div id="d-part2-yp-exp-mtec">

                                        <!--Titulo M-TEC-->
                                            <h2 id="txt-part2-yp-exp-title">O que é <text id="txt-part2-yp-exp-title-object">M-TEC?</text></h2>
                                        <!--Fim do Titulo M-TEC-->

                                        <!--Explicação do M-TEC-->
                                            <p id="txt-part2-yp-exp">
                                                Segundo o site do Centro Paula Souza, 
                                                o M-Tec é uma modalidade composta por três séries anuais, 
                                                com até seis aulas diárias presenciais ministradas em meio período (manhã ou tarde). 
                                                A matriz curricular inclui componentes curriculares voltados à formação técnica e profissional, 
                                                com terminalidade correspondente às ocupações identificadas no mercado de trabalho.
                                            </p>
                                        <!--Fim da Explicação do M-TEC-->

                                    </div>
                                <!--Fim do M-TEC-->

                                <!--M-TEC-PI-->
                                    <div id="d-part2-yp-exp-mtec-pi">

                                        <!--Titulo M-TEC-PI-->
                                            <h2 id="txt-part2-yp-exp-title">O que é <text id="txt-part2-yp-exp-title-object">M-TEC-PI?</text></h2>
                                        <!--Fim do Titulo M-TEC-PI-->

                                        <!--Explicação do M-TEC-PI-->
                                            <p id="txt-part2-yp-exp">
                                                Segundo o site do Centro Paula Souza, 
                                                o M-Tec-PI é uma modalidade composta por três séries anuais articuladas, 
                                                com até oito aulas presenciais diárias, em período integral. 
                                                A matriz curricular inclui componentes curriculares voltados à formação técnica e profissional, 
                                                com terminalidade correspondente às ocupações identificadas no mercado de trabalho.
                                            </p>
                                        <!--Fim da Explicação do M-TEC-PI-->

                                    </div>
                                <!--Fim do M-TEC-PI-->

                                <!--M-TEC-N-->
                                    <div id="d-part2-yp-exp-mtec-n">

                                        <!--Titulo M-TEC-N-->
                                            <h2 id="txt-part2-yp-exp-title">O que é <text id="txt-part2-yp-exp-title-object">M-TEC-N?</text></h2>
                                        <!--Fim do Titulo M-TEC-N-->

                                        <!--Explicação do M-TEC-N-->
                                            <p id="txt-part2-yp-exp">
                                                Segundo o site do Centro Paula Souza, 
                                                o M-Tec-N é uma modalidade composta por três séries anuais, 
                                                com até seis aulas diárias presenciais ministradas no período noturno. 
                                                Parte da carga horária ministrada por intermédio de atividades não presenciais. 
                                                A matriz curricular inclui componentes curriculares voltados à formação técnica e profissional, 
                                                com terminalidade correspondente às ocupações identificadas no mercado de trabalho.
                                            </p>
                                        <!--Fim da Explicação do M-TEC-N-->
                                    </div>
                                <!--Fim da Explicação do M-TEC-N-->

                                <!--AMS-->
                                    <div id="d-part2-yp-exp-ams">

                                        <!--Titulo AMS-->
                                            <h2 id="txt-part2-yp-exp-title">O que é <text id="txt-part2-yp-exp-title-object">AMS?</text></h2>
                                        <!--Fim do Titulo AMS-->

                                        <!--Explicação do AMS-->
                                            <p id="txt-part2-yp-exp">
                                                Segundo o site do Centro Paula Souza, 
                                                o AMS é uma modalidade totalmente presencial, 
                                                que permite que, em um período de cinco anos, 
                                                o estudante conclua os ensinos nos níveis Médio, 
                                                Técnico e Superior. Nos três primeiros anos, 
                                                o aluno cursa o Ensino Médio integrado ao Técnico e desenvolve 200 horas de formação profissional em uma empresa parceira. 
                                                E se desejar, é possível fazer um curso superior para ser tecnólogo do mesmo campo técnico escolhido, 
                                                sem a necessidade de realizar o vestibular.
                                            </p>
                                        <!--Fim da Explicação do AMS-->

                                    </div>
                                <!--Fim do AMS-->

                            </center>
                        <!--Fim do Centralizador-->

                        <!--Botão Ver Mais-->
                            <button id="btn-part2-yp" onClick="mdltsnext()">Clique para ver mais...</button>
                        <!--Fim do Botão Ver Mais-->
                        
                        <!--Circulos Papel Amarelo-->
                            <div id="d-part2-yp-circle1"></div>
                            <div id="d-part2-yp-circle2"></div>
                            <div id="d-part2-yp-circle3"></div>
                        <!--Fim dos Circulos Papel Amarelo-->

                    </div>
                <!--Fim do Papel Frente-->

            </div>
        <!--Fim da Div Pai B-->

    <!--Fim da Parte 2-->

    <!--Parte 3 - Eixos Tecnologicos-->
        <div id="d-part3-father">

            <!--Checkboxes Livro-->
                <div id="d-part3-book-btn-hidden-1"></div>
                <div id="d-part3-book-btn-hidden-2"></div>
                <input type="checkbox" class="checkbox-part3-book" id="checkbox-part3-book-1">
                <input type="checkbox" class="checkbox-part3-book" id="checkbox-part3-book-2">
                <input type="checkbox" class="checkbox-part3-book" id="checkbox-part3-book-3">
                <input type="checkbox" class="checkbox-part3-book" id="checkbox-part3-book-4">
                <input type="checkbox" class="checkbox-part3-book" id="checkbox-part3-book-5">
                <input type="checkbox" class="checkbox-part3-book" id="checkbox-part3-book-6">
                <ion-icon name="chevron-back-outline" id="img-part3-book-btn-back"></ion-icon>
                <ion-icon name="chevron-forward-outline" id="img-part3-book-btn-next"></ion-icon>
            <!--Fim das Checkboxes Livro-->

            <!--Capa do Livro-->  
                <div class="d-template-center-vertAndHori"id="d-part3-book-cover">

                    <!--Pagina 1 - Apresentação-->
                        <div class="d-part3-book-pages" id="d-part3-book-page-start">

                            <!--Centralizador-->
                                <div class="d-template-center-vertAndHori">

                                    <h2 id="txt-part3-book-title-1">Eixos<br>Tecnológicos</h2>
                                    <p id="txt-part3-paper-explanation-1">
                                        O cursos da Etec são dividos em 
                                        12<br> eixos tecnológicos:
                                    </p>

                                </div>
                            <!--Fim do Centralizador-->

                        </div>
                    <!--Fim da Pagina 1-->

                    <!--Perspectiva-->
                        <div id="d-part3-book-perspective">

                            <!--Conjunto A-->
                                <div class="d-part3-book-conjs" id="d-part3-book-conj1">

                                    <!--Pagina 3 - Controle e Processos Industriais-->
                                        <div class="d-part3-book-pages d-part3-book-page-back ">
                                            
                                            <h2 id="txt-part3-book-title">Controle e Processos Industriais</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Contempla tecnologias de apoio à infraestrutura e aos processos mecânicos, 
                                                elétricos e eletroeletrônicos envolvidos na manutenção de máquinas navais, 
                                                industriais ou de locomoção; na transformação metalmecânica de partes de máquinas, 
                                                equipamentos, veículos, materiais de transporte, e na automatização de mecanismos, 
                                                medições e correções em processos produtivos, com base em: leitura e produção de textos técnicos; 
                                                estatística e raciocínio lógico; ciência, tecnologia e inovação; investigação tecnológica; 
                                                tecnologias de comunicação e informação; desenvolvimento interpessoal; legislação; 
                                                normas técnicas; saúde e segurança do trabalho; gestão da qualidade e produtividade; 
                                                responsabilidade e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 3-->

                                    <!--Pagina 2 - Ambiente e Saúde-->
                                        <div class="d-part3-book-pages d-part3-book-page-front">
                                            
                                            <h2 id="txt-part3-book-title">Ambiente e Saúde</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Contempla tecnologias consagradas à melhoria da qualidade de vida e ao bem-estar físico, 
                                                mental e social, à proteção e preservação dos seres vivos e recursos naturais, 
                                                e ao desenvolvimento e inovação de aparatos tecnológicos de atenção e mitigação 
                                                de riscos à saúde e ao ambiente, com base em: políticas públicas em saúde, 
                                                biossegurança, leitura e produção de textos técnicos; ciência, tecnologia e inovação; 
                                                investigação tecnológica; tecnologias de comunicação e informação; 
                                                desenvolvimento interpessoal e trabalho em equipe; legislação e normas técnicas; 
                                                saúde e segurança do trabalho; gestão da qualidade; 
                                                responsabilidade e sustentabilidade social e ambiental;
                                                qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 2-->

                                </div>
                            <!--Fim do Conjunto A-->

                            <!--Conjunto B-->
                                <div class="d-part3-book-conjs" id="d-part3-book-conj2">

                                    <!--Pagina 5 - Gestão e Negócios-->
                                        <div class="d-part3-book-pages d-part3-book-page-back ">
                                            
                                            <h2 id="txt-part3-book-title">Gestão e Negócios</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias de suporte e de melhoria da organização 
                                                da produção e de trabalho de empreendimentos nas suas rotinas 
                                                administrativas de comercialização, controle contábil, 
                                                gestão da qualidade, gestão de pessoas, gestão financeira, 
                                                logística e marketing, com base em: e produção de textos técnicos; 
                                                à estatística e raciocínio lógico; às línguas estrangeiras; 
                                                à ciência e tecnologia; às tecnologias sociais e empreendedorismo;
                                                à prospecção mercadológica e marketing; às tecnologias de comunicação 
                                                e informação; ao desenvolvimento interpessoal; à legislação; 
                                                às normas técnicas; à saúde e segurança do trabalho; 
                                                à responsabilidade e sustentabilidade social e ambiental; 
                                                à qualidade de vida; e à ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 5-->

                                    <!--Pagina 4 - Desenvolvimento Educacional e Social-->
                                        <div class="d-part3-book-pages d-part3-book-page-front">
                                            
                                            <h2 id="txt-part3-book-title">Desenvolvimento Educacional e Social</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias de apoio às atividades educativas e 
                                                sociais voltadas à inclusão social e educacional, 
                                                ao respeito às diferenças culturais, à respeitosa convivência comunitária, 
                                                à preservação de patrimônios e à melhoria da qualidade de vida, com base em: 
                                                leitura e produção de textos técnicos; estatística e raciocínio lógico; 
                                                ciência e tecnologia; tecnologias sociais; empreendedorismo; cooperativismo 
                                                e associativismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; 
                                                legislação e políticas públicas; normas técnicas; saúde e segurança do trabalho; 
                                                responsabilidade e sustentabilidade social e ambiental; qualidade de vida; 
                                                e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 4-->

                                </div>
                            <!--Fim do Conjunto B-->

                            <!--Conjunto C-->
                                <div class="d-part3-book-conjs" id="d-part3-book-conj3">

                                    <!--Pagina 7 - Infraestrutura-->
                                        <div class="d-part3-book-pages d-part3-book-page-back ">
                                            <h2 id="txt-part3-book-title">Infraestrutura</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">                           
                                                Compreende empregadas em projetos de construção de obras civis, topografia, geotécnica, 
                                                hidráulica, recursos hídricos, saneamento, transporte de pessoas e bens e controle de 
                                                trânsito e tráfego, com base em: leitura e produção de textos técnicos; estatística e 
                                                raciocínio lógico; desenho técnico; ciência, tecnologia e inovação; investigação tecnológica; 
                                                empreendedorismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; 
                                                legislação; normas técnicas; saúde e segurança do trabalho; gestão da qualidade e produtividade; 
                                                responsabilidade e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                        </div>
                                    <!--Fim da Pagina 7-->

                                    <!--Pagina 6 - Informação e Comunicação-->
                                        <div class="d-part3-book-pages d-part3-book-page-front">
                                            
                                            <h2 id="txt-part3-book-title">Informação e Comunicação</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias empregadas em infraestruturas; protocolos destinados 
                                                ao processamento e administração de dados e informações; projetos gráficos 
                                                para aplicações computacionais; e na comutação, transmissão e recepção de dados, 
                                                com base em: leitura e produção de textos técnicos; estatística e raciocínio lógico; 
                                                ciência, tecnologia e inovação; investigação tecnológica; empreendedorismo; 
                                                desenvolvimento interpessoal; legislação; normas técnicas; saúde e segurança do trabalho; 
                                                gestão da qualidade; responsabilidade e sustentabilidade social e ambiental; 
                                                qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 6-->

                                </div>
                            <!--Fim do Conjunto C-->

                            <!--Conjunto D-->
                                <div class="d-part3-book-conjs" id="d-part3-book-conj4">

                                    <!--Pagina 9 - Produção Cultural e Design-->
                                        <div class="d-part3-book-pages d-part3-book-page-back">
                                            
                                            <h2 id="txt-part3-book-title">Produção Cultural e Design</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias de produção, conservação, difusão, performance e gerenciamento de bens 
                                                culturais materiais e imateriais, voltadas ao desenvolvimento da economia criativa e da produção 
                                                cultural em seus vários segmentos, espaços e meios de criação e de fruição artística, com base em: 
                                                leitura e produção de textos técnicos; raciocínio lógico e estético; ciência e tecnologia; 
                                                tecnologias sociais; empreendedorismo; cooperativismo e associativismo; prospecção mercadológica e 
                                                marketing; tecnologias de comunicação e informação; desenvolvimento interpessoal; legislação e 
                                                políticas públicas; normas técnicas; saúde e segurança do trabalho; gestão da qualidade; responsabilidade 
                                                e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 9-->

                                    <!--Pagina 8- Produção Alimentícia-->
                                        <div class="d-part3-book-pages d-part3-book-page-front">
                                            
                                            <h2 id="txt-part3-book-title">Infraestrutura</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">                           
                                                Compreende empregadas em projetos de construção de obras civis, topografia, geotécnica, 
                                                hidráulica, recursos hídricos, saneamento, transporte de pessoas e bens e controle de 
                                                trânsito e tráfego, com base em: leitura e produção de textos técnicos; estatística e 
                                                raciocínio lógico; desenho técnico; ciência, tecnologia e inovação; investigação tecnológica; 
                                                empreendedorismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; 
                                                legislação; normas técnicas; saúde e segurança do trabalho; gestão da qualidade e produtividade; 
                                                responsabilidade e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 8-->

                                </div>
                            <!--Fim do Conjunto D-->

                            <!--Conjunto E-->
                                <div class="d-part3-book-conjs" id="d-part3-book-conj5">

                                    <!--Pagina 11 - Recursos Naturais-->
                                        <div class="d-part3-book-pages d-part3-book-page-back ">
                                            
                                            <h2 id="txt-part3-book-title">Recursos Naturais</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias de prospecção, avaliação técnica e econômica, planejamento, extração e 
                                                cultivo de recursos naturais considerando os sistemas e elos das cadeias de produção animal, 
                                                vegetal e mineral, com base em: leitura e produção de textos técnicos; raciocínio lógico; ciência, 
                                                tecnologia e inovação; investigação tecnológica; tecnologias sociais; empreendedorismo; cooperativismo 
                                                e associativismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; legislação 
                                                e políticas públicas; normas técnicas; saúde e segurança do trabalho; gestão da qualidade; responsabilidade 
                                                e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 11-->

                                    <!--Pagina 10 - Produção Industrial-->
                                        <div class="d-part3-book-pages d-part3-book-page-front">
                                        
                                            <h2 id="txt-part3-book-title">Produção Industrial</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias envolvidas nos equipamentos, sistemas e processos físico-químicos de 
                                                transformação de matérias-primas e substâncias, integrantes de linhas de produção, com base em: 
                                                leitura e produção de textos técnicos; raciocínio lógico; ciência, tecnologia e inovação; 
                                                investigação tecnológica; empreendedorismo; cooperativismo e associativismo; tecnologias de 
                                                comunicação e informação; desenvolvimento interpessoal; legislação; normas técnicas; saúde e 
                                                segurança do trabalho; gestão da qualidade e produtividade; responsabilidade e sustentabilidade 
                                                social e ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 10-->

                                </div>
                            <!--Fim do Conjunto E-->

                            <!--Conjunto F-->
                                <div class="d-part3-book-conjs" id="d-part3-book-conj6">

                                    <!--Pagina 13 - Turismo, Hospitalidade e Lazer-->
                                        <div class="d-part3-book-pages d-part3-book-page-back ">
                                            
                                            <h2 id="txt-part3-book-title">Turismo, Hospitalidade e Lazer</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias de planejamento, organização, supervisão, operação e avaliação do atendimento e 
                                                do acolhimento em atividades de agenciamento e guiamento, hospedagem, gastronomia, eventos e lazer, 
                                                com base em: leitura e produção de textos técnicos; raciocínio lógico; historicidade e cultura; 
                                                línguas estrangeiras; ciência, tecnologia e inovação; tecnologias sociais; empreendedorismo; 
                                                cooperativismo e associativismo; prospecção mercadológica e marketing; tecnologias de comunicação 
                                                e informação; desenvolvimento interpessoal; legislação; normas técnicas; saúde e segurança do trabalho; 
                                                gestão da qualidade; responsabilidade e sustentabilidade social e ambiental; qualidade de vida; 
                                                ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 13-->

                                    <!--Pagina 12  - Segurança-->
                                        <div class="d-part3-book-pages d-part3-book-page-front">
                                            
                                            <h2 id="txt-part3-book-title">Segurança</h2>
                                            <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                                Compreende tecnologias de controle e eliminação de acidentes e riscos à saúde humana e de defesa, 
                                                resguardo e vigilância de patrimônios, empregadas na segurança pública e privada, na defesa social 
                                                e civil, na segurança do trabalho e em ações de contra incêndio, com base em: leitura e produção de 
                                                textos técnicos; raciocínio lógico; ciência e tecnologia e inovação; empreendedorismo; tecnologias 
                                                de comunicação e informação; desenvolvimento interpessoal; legislação; normas técnicas; saúde e 
                                                segurança do trabalho; cidadania e direitos humanos; responsabilidade e sustentabilidade social e 
                                                ambiental; qualidade de vida; e ética profissional.
                                            </p>
                                            <p id="txt-part3-book-watermark">(CNCT - MEC)</p>

                                        </div>
                                    <!--Fim da Pagina 12-->

                                </div>
                            <!--Fim do Conjunto F-->

                            <!--Pagina 14-->
                                <div class="d-part3-book-pages" id="d-part3-book-page-end">
                                    
                                    <p id="txt-part3-paper-explanation-2">
                                        Você pode consultar esses e <br>mais eixos tecnológicos no <br>site do MEC
                                    </p><br>
                                    <button class="d-template-center-hori btn-templeate-appearance" id="btn-template-size"><a href="http://cnct.mec.gov.br/" id="txt-part3-book-btn-cnct">Consulte aqui</a></button>
                                </div>
                            <!--Fim da Pagina 14-->

                        </div>
                    <!--Fim da Perspectiva-->

                </div>
            <!--Fim da Capa do Livro-->

            <!--Botão Proximo-->
            <!--Fim do Botão Proximo-->
            <!--Fim do Botão Voltar-->
        </div>
    <!--Fim da Parte 3-->

    <!--Parte 3 Mobile- Eixos Tecnologicos-->
        <div id="d-part3-father-mobile">

            <!--Capa Livro-->
                <div id="d-part3M-book-cover" class="d-template-center-hori">

                    <!--Papel-->
                        <div class="d-template-center-vertAndHori" id="d-part3M-book-paper">
                            <!--Pagina 1 - Apresetação-->
                                <div class="d-template-center-vertAndHori" id="d-part3M-page1">
                                    <h2 id="txt-part3-book-title-1">Eixos Tecnológicos</h2>
                                    <p id="txt-part3-paper-explanation">O cursos da Etec são dividos em 12 eixos tecnológicos:</p>
                                </div>
                            <!--Fim do Pagina 1-->

                            <!--Pagina 2 - Ambiente e Saúde-->
                                <div id="d-part3M-page2">
                                    <h2 id="txt-part3-book-title">Ambiente e Saúde</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Contempla tecnologias consagradas à melhoria da qualidade de vida e ao bem-estar físico, 
                                        mental e social, à proteção e preservação dos seres vivos e recursos naturais, 
                                        e ao desenvolvimento e inovação de aparatos tecnológicos de atenção e mitigação 
                                        de riscos à saúde e ao ambiente, com base em: políticas públicas em saúde, 
                                        biossegurança, leitura e produção de textos técnicos; ciência, tecnologia e inovação; 
                                        investigação tecnológica; tecnologias de comunicação e informação; 
                                        desenvolvimento interpessoal e trabalho em equipe; legislação e normas técnicas; 
                                        saúde e segurança do trabalho; gestão da qualidade; 
                                        responsabilidade e sustentabilidade social e ambiental;
                                        qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 2-->

                            <!--Pagina 3 - Controle e Processos Industriais-->
                                <div id="d-part3M-page3">
                                    <h2 id="txt-part3-book-title">Controle e Processos Industriais</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Contempla tecnologias de apoio à infraestrutura e aos processos mecânicos, 
                                        elétricos e eletroeletrônicos envolvidos na manutenção de máquinas navais, 
                                        industriais ou de locomoção; na transformação metalmecânica de partes de máquinas, 
                                        equipamentos, veículos, materiais de transporte, e na automatização de mecanismos, 
                                        medições e correções em processos produtivos, com base em: leitura e produção de textos técnicos; 
                                        estatística e raciocínio lógico; ciência, tecnologia e inovação; investigação tecnológica; 
                                        tecnologias de comunicação e informação; desenvolvimento interpessoal; legislação; 
                                        normas técnicas; saúde e segurança do trabalho; gestão da qualidade e produtividade; 
                                        responsabilidade e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 3-->

                            <!--Pagina 4 - Desenvolvimento Educacional e Social-->
                                <div id="d-part3M-page4">
                                    <h2 id="txt-part3-book-title">Desenvolvimento Educacional e Social</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias de apoio às atividades educativas e 
                                        sociais voltadas à inclusão social e educacional, 
                                        ao respeito às diferenças culturais, à respeitosa convivência comunitária, 
                                        à preservação de patrimônios e à melhoria da qualidade de vida, com base em: 
                                        leitura e produção de textos técnicos; estatística e raciocínio lógico; 
                                        ciência e tecnologia; tecnologias sociais; empreendedorismo; cooperativismo 
                                        e associativismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; 
                                        legislação e políticas públicas; normas técnicas; saúde e segurança do trabalho; 
                                        responsabilidade e sustentabilidade social e ambiental; qualidade de vida; 
                                        e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 4-->

                            <!--Pagina 5 - Gestão e Negócios-->
                                <div id="d-part3M-page5">
                                    <h2 id="txt-part3-book-title">Gestão e Negócios</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias de suporte e de melhoria da organização 
                                        da produção e de trabalho de empreendimentos nas suas rotinas 
                                        administrativas de comercialização, controle contábil, 
                                        gestão da qualidade, gestão de pessoas, gestão financeira, 
                                        logística e marketing, com base em: e produção de textos técnicos; 
                                        à estatística e raciocínio lógico; às línguas estrangeiras; 
                                        à ciência e tecnologia; às tecnologias sociais e empreendedorismo;
                                        à prospecção mercadológica e marketing; às tecnologias de comunicação 
                                        e informação; ao desenvolvimento interpessoal; à legislação; 
                                        às normas técnicas; à saúde e segurança do trabalho; 
                                        à responsabilidade e sustentabilidade social e ambiental; 
                                        à qualidade de vida; e à ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 5-->

                            <!--Pagina 6 - Informação e Comunicação-->
                                <div id="d-part3M-page6">
                                    <h2 id="txt-part3-book-title">Informação e Comunicação</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias empregadas em infraestruturas; protocolos destinados 
                                        ao processamento e administração de dados e informações; projetos gráficos 
                                        para aplicações computacionais; e na comutação, transmissão e recepção de dados, 
                                        com base em: leitura e produção de textos técnicos; estatística e raciocínio lógico; 
                                        ciência, tecnologia e inovação; investigação tecnológica; empreendedorismo; 
                                        desenvolvimento interpessoal; legislação; normas técnicas; saúde e segurança do trabalho; 
                                        gestão da qualidade; responsabilidade e sustentabilidade social e ambiental; 
                                        qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 6-->

                            <!--Pagina 7 - Infraestrutura-->
                                <div id="d-part3M-page7">
                                    <h2 id="txt-part3-book-title">Infraestrutura</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">                           
                                        Compreende empregadas em projetos de construção de obras civis, topografia, geotécnica, 
                                        hidráulica, recursos hídricos, saneamento, transporte de pessoas e bens e controle de 
                                        trânsito e tráfego, com base em: leitura e produção de textos técnicos; estatística e 
                                        raciocínio lógico; desenho técnico; ciência, tecnologia e inovação; investigação tecnológica; 
                                        empreendedorismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; 
                                        legislação; normas técnicas; saúde e segurança do trabalho; gestão da qualidade e produtividade; 
                                        responsabilidade e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 7-->

                            <!--Pagina 8 - Produção Alimentícia-->
                                <div id="d-part3M-page8">
                                    <h2 id="txt-part3-book-title">Infraestrutura</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">                           
                                        Compreende empregadas em projetos de construção de obras civis, topografia, geotécnica, 
                                        hidráulica, recursos hídricos, saneamento, transporte de pessoas e bens e controle de 
                                        trânsito e tráfego, com base em: leitura e produção de textos técnicos; estatística e 
                                        raciocínio lógico; desenho técnico; ciência, tecnologia e inovação; investigação tecnológica; 
                                        empreendedorismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; 
                                        legislação; normas técnicas; saúde e segurança do trabalho; gestão da qualidade e produtividade; 
                                        responsabilidade e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 8-->

                            <!--Pagina 9 - Produção Cultural e Design-->
                                <div id="d-part3M-page9">
                                    <h2 id="txt-part3-book-title">Produção Cultural e Design</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias de produção, conservação, difusão, performance e gerenciamento de bens 
                                        culturais materiais e imateriais, voltadas ao desenvolvimento da economia criativa e da produção 
                                        cultural em seus vários segmentos, espaços e meios de criação e de fruição artística, com base em: 
                                        leitura e produção de textos técnicos; raciocínio lógico e estético; ciência e tecnologia; 
                                        tecnologias sociais; empreendedorismo; cooperativismo e associativismo; prospecção mercadológica e 
                                        marketing; tecnologias de comunicação e informação; desenvolvimento interpessoal; legislação e 
                                        políticas públicas; normas técnicas; saúde e segurança do trabalho; gestão da qualidade; responsabilidade 
                                        e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 9-->

                            <!--Pagina 10 - Produção Industrial-->
                                <div id="d-part3M-page10">
                                    <h2 id="txt-part3-book-title">Produção Industrial</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias envolvidas nos equipamentos, sistemas e processos físico-químicos de 
                                        transformação de matérias-primas e substâncias, integrantes de linhas de produção, com base em: 
                                        leitura e produção de textos técnicos; raciocínio lógico; ciência, tecnologia e inovação; 
                                        investigação tecnológica; empreendedorismo; cooperativismo e associativismo; tecnologias de 
                                        comunicação e informação; desenvolvimento interpessoal; legislação; normas técnicas; saúde e 
                                        segurança do trabalho; gestão da qualidade e produtividade; responsabilidade e sustentabilidade 
                                        social e ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 10-->

                            <!--Pagina 11 - Recursos Naturais-->
                                <div id="d-part3M-page11">
                                    <h2 id="txt-part3-book-title">Recursos Naturais</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias de prospecção, avaliação técnica e econômica, planejamento, extração e 
                                        cultivo de recursos naturais considerando os sistemas e elos das cadeias de produção animal, 
                                        vegetal e mineral, com base em: leitura e produção de textos técnicos; raciocínio lógico; ciência, 
                                        tecnologia e inovação; investigação tecnológica; tecnologias sociais; empreendedorismo; cooperativismo 
                                        e associativismo; tecnologias de comunicação e informação; desenvolvimento interpessoal; legislação 
                                        e políticas públicas; normas técnicas; saúde e segurança do trabalho; gestão da qualidade; responsabilidade 
                                        e sustentabilidade social e ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 11-->

                            <!--Pagina 12 - Segurança-->
                                <div id="d-part3M-page12">
                                    <h2 id="txt-part3-book-title">Segurança</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias de controle e eliminação de acidentes e riscos à saúde humana e de defesa, 
                                        resguardo e vigilância de patrimônios, empregadas na segurança pública e privada, na defesa social 
                                        e civil, na segurança do trabalho e em ações de contra incêndio, com base em: leitura e produção de 
                                        textos técnicos; raciocínio lógico; ciência e tecnologia e inovação; empreendedorismo; tecnologias 
                                        de comunicação e informação; desenvolvimento interpessoal; legislação; normas técnicas; saúde e 
                                        segurança do trabalho; cidadania e direitos humanos; responsabilidade e sustentabilidade social e 
                                        ambiental; qualidade de vida; e ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 12-->

                            <!--Pagina 13 - Turismo, Hospitalidade e Lazer-->
                                <div id="d-part3M-page13">
                                    <h2 id="txt-part3-book-title">Turismo, Hospitalidade e Lazer</h2>
                                    <p class="txt-template-jusify-text" id="txt-part3-paper-explanation">
                                        Compreende tecnologias de planejamento, organização, supervisão, operação e avaliação do atendimento e 
                                        do acolhimento em atividades de agenciamento e guiamento, hospedagem, gastronomia, eventos e lazer, 
                                        com base em: leitura e produção de textos técnicos; raciocínio lógico; historicidade e cultura; 
                                        línguas estrangeiras; ciência, tecnologia e inovação; tecnologias sociais; empreendedorismo; 
                                        cooperativismo e associativismo; prospecção mercadológica e marketing; tecnologias de comunicação 
                                        e informação; desenvolvimento interpessoal; legislação; normas técnicas; saúde e segurança do trabalho; 
                                        gestão da qualidade; responsabilidade e sustentabilidade social e ambiental; qualidade de vida; 
                                        ética profissional.
                                    </p>
                                </div>
                            <!--Fim do Pagina 13-->

                            <!--Pagina 14 - Link para o CNCT-->
                                <div id="d-part3M-page14" class="d-template-center-vertAndHori">
                                    <p id="txt-part3-paper-explanation-2">
                                        Você pode consultar esses e mais eixos tecnológicos no site do MEC
                                    </p>
                                    <button class="d-template-center-hori btn-templeate-appearance" id="btn-template-size"><a href="http://cnct.mec.gov.br/" id="txt-part3-book-btn-cnct">Consulte aqui</a></button>
                                </div>
                            <!--Fim do Pagina 14-->
                        </div>
                    <!--Fim do Papel-->

                </div>
            <!--Fim da Capa Livro-->

            <!--Botão Next-->
                <button class="d-template-center-hori btn-templeate-appearance" id="btn-part3-next" onclick="eixosnext()">Proximo</button>
            <!--Fim do Botão Next-->
        </div>
    <!--Fim da Parte 3 Mobile-->
    
    <!--Parte 4 - Unidades-->

        <!--Container Parte 4-->
            <div class="container" id="d-part4-father">

                <!--Row - 2 Colunas-->
                    <div class="row row-cols-2">    

                        <!--Coluna Esquerda-->
                            <div class="col" id="d-part4-col-unidades">       

                                <!--Titulo Unidades-->
                                    <h2 id="txt-part4-unidades-title" >Unidades</h2>
                                <!--Fim do Titulo Unidades-->  
                                
                                <!--Explicação Unidades-->
                                    <p class="txt-template-main-text" id="txt-part4-unidades-exp">
                                        Confira aqui o mapa 
                                        de unidades na região
                                        da <br>cidade de São Paulo
                                    </p>
                                <!--Fim da Explicação Unidades-->

                                <!--Consultar Unidades-->
                                    <p id="txt-part4-unidades-outrasCid">
                                        Você pode consultar outras cidades 
                                        no site oficial do Vestibulinho Etec.
                                    </p>
                                    <a id="txt-part4-unidades-outrasCid-2" href="https://www.vestibulinhoetec.com.br/unidades-cursos/">Acesse Aqui</a>
                                <!--Fim do Consultar Unidades-->

                            </div>
                        <!--Fim da Coluna Esquerda-->

                        <!--Coluna Direita-->
                            <div class="col" id="d-part4-col-mapa">                               
                                <!--Mapa-->
                                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1IMH4O9a-GGRHPEElZ9Qj2ntxpEp8gIE&ehbc=2E312F" class="d-template-center-hori" id="map-part4-etecsSP"></iframe>
                                <!--Fim do Mapa-->

                                <!--Ultima Atualização-->
                                    <p id="txt-part4-mapa-atualizacao" >(ultima atualização do mapa: Julho/2023)</p>
                                <!--Fim da Ultima Atualização-->
                            </div>             
                        <!--Fim da Coluna Direita-->  

                    </div>                                    
                <!--Fim do Row-->

            </div>                                            
        <!--Fim do Container Parte 4-->

    <!--Fim da Parte 4-->
</body>
@endsection