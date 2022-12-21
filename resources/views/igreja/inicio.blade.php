{{-- Index da Igreja --}}
@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <div class="slogan-inicio">
        <h1>Seja bem-vindo ao site!</h1>
    </div>
    <div>
         Espaço para vídeo
        <video class="video-inicial" autoplay muted loop>
            <source src="#" type="video/mp4">

        </video>
    </div>
    <a href="#">Seja um sócio-mantenedor deste projeto!</a>

        <h2>Objetivo</h2>

        <p>
                        <b>
                        Associação que visa Arrecadar fundos financeiros para aquisição de literaturas, tais como:<br>
                        </b>    
                    
                        <ul>
                            <li>
                                <a>
                    
                                Bíblias
                                
                                </a>
                            </li>
                            
                            <li>
                                <a>
                                Livros
                                </a>
                            </li>
                            
                            <li>
                                <a>
                                Revistas
                                </a>
                            </li>
                            
                            <li>
                                <a>
                                    Folhetos
                                </a>
                            </li>
                            
                            <li>
                                <a>
                                Apostilas
                                </a>
                            </li>
                            
                            <li>
                                <a>
                                Livretos para crianças, adolescentes, jovens e adultos
                                </a>
                            </li>
                        </ul>

                        <b>
                        Sendo que todos os materiais adquiridas serão distribuídos gratuitamente a toda a sociedade, através de seus associados contribuintes.
                        </b>
                    </p>
                
                <h2 >Missão</h2>
                <p>
                    <!-- Texto pronto -->
                    <strong>
                        Levar conhecimento, cultura, educação, fé, lazer e entretenimento! 
                    </strong>
                </p>


                <h2 class="visao">Visão</h2>
                <p>
                    <strong>
                        <!-- Texto Pronto -->
                    Atender pessoas de todas as idades com literaturas educativas, de auto-ajuda e proporcionando bem-estar a todos.
                    </strong>
                </p>


                <h2 class="meta">Meta</h2>
                <p>
                    <strong>
                        <!-- Texto Pronto -->
                    Atingir o maior número de pessoas em Santa Catarina, Paraná e Rio Grande do Sul
                </strong>
            </p>


            <h2>Valores</h2>
                    <p>
                        <div class="DivPValores" id="Vida">
                            <div class="DivValores">
                                <b>
                                Vida
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Família
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Princípios Morais e éticos
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Educação
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Cultura
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Fé
                                </b>
                             </div>

                            <p>
                                <b>
                                Vida, Família, <br> Princípios Morais e éticos,<br> Educação, Cultura, Fé
                                </b>
                            </p>
                        </div>
                    </p>
                    <p class="pValores">
                        <div class="DivPValores" id="Vida">
                            <div class="DivValores">
                                <b>
                                Vida
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Família
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Princípios Morais e éticos
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Educação
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Cultura
                                </b>
                            </div>
                            
                            <div class="DivValores">
                                <b>
                                Fé
                                </b>
                             </div>

                            <p>
                                <b>
                                Vida, Família, <br> Princípios Morais e éticos,<br> Educação, Cultura, Fé
                                </b>
                            </p>
                        </div>
                    </p>

                    <img src="https://diocesedesaojoaodelrei.com.br/wp-content/uploads/2017/08/familia-696x362.jpg">



                    <h2>Estados que pretendemos distribuir literaturas:</h2>
                <div class="Bandeiras" id="BandeiraSC">
                    <img src="https://www.infoescola.com/wp-content/uploads/2009/12/bandeira-de-santa-catarina.jpg" width="30%;"
                    alt="Foto da Bandeira do Estado de Santa Catarina">
                </div>

                <div class="Bandeiras" id="BandeiraRS">
                    <img src="https://images.educamaisbrasil.com.br/content/banco_de_imagens/guia-de-estudo/D/rio-grande-do-sul-geografia.jpg" width="30%;" alt="Foto da Bandeira do Estado do Rio Grande do Sul">
                </div>
                
                <div class="Bandeiras" id="BandeiraPR">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paran%C3%A1.svg/300px-Bandeira_do_Paran%C3%A1.svg.png" width="30%;" alt="Foto da Bandeira do Estado do Paraná">
                </div>
            </div>          
<!--     <div class="projetos-igreja">
        <h2>Nossos Projetos</h2>

        <h3>Projeto Prática de Fé</h3>
        <ul class="projeto-lista">
            <li>Realização de cultos com ministração de louvores e palavra.</li>
            <li>Realização de cultos com ensino da Palavra de Deus</li>
            <li>Realização de cultos evangelísticos com distribuição de literatura.</li>
            <li>Realização de orações da fé por necessidades de cada família.</li>
        </ul>
    </div>

    <div class="projetos-igreja">
        <h3>Projeto Educacional</h3>
        <ul class="projeto-lista">
            <p>Desenvolvem atividades com crianças, adolescentes e jovens visando fortalecer o Caráter de Cristo,
                valores, princípios morais e éticos, patriotismo, recreação, acampamentos, prática de escotismo e
                integração em busca de uma formação educacional por princípios. </p>
            <br><br>
            <li>Realização de Palestras educativas de socialização para todas as faixas etárias.</li>
        </ul>
    </div>

    <div class="projetos-igreja">
        <h3>Projeto Social</h3>
        <ul class="projeto-lista">
            <li>Distribuimos roupas usadas para pessoas carentes de nossa cidade e também nas localidades do interior do
                município. </li>
            <li>Distribuimos cestas básicas de alimento para famílias carentes de nossa cidade e também nas localidades
                do interior.</li>
        </ul>
    </div>

    <div class="projetos-mais-info">
        <p>Mais informações na página de projetos: <a href="{{ route('projects.page') }}">Quero saber mais!</a></p>
    </div>
    <hr>

    <div class="reunioes">
        <h2>Nossas Reuniões</h2>
        <p>Noite da Vitória <br>
            Quintas-Feiras às 19:15 hs</p>
        <p>Noite da Família <br>
            Domingos às 19:00 hs</p>
    </div>
 -->
@endsection


