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
    
    <div class="projetos-igreja">
        <h2>Quem somos</h2>
        <h3>Somos uma entidade não-governamental, que busca distribuir literaturas a população</h3>
    </div>
    
    <div class="projetos-igreja">
        <h2>Objetivo</h2>
            <h3>
                Associação que visa Arrecadar fundos financeiros para aquisição de literaturas, tais como:
            </h3>  
                <ul class="projeto-lista">  
                    <li><a>Bíblias</a></li>
                            
                    <li><a>Livros</a></li>
                            
                    <li><a>Revistas</a></li>
                            
                    <li><a>Folhetos</a></li>
                            
                    <li><a>Apostilas</a></li>
                            
                    <li><a>Livretos para crianças, adolescentes, jovens e adultos</a></li>
                </ul>

            <h4>
                Sendo que todos os materiais adquiridas serão distribuídos gratuitamente a toda a sociedade, através de seus associados contribuintes.
            </h4>
                
        </div>

        <div class="projetos-igreja">     
            <h2>Missão</h2>
            <h3>
                Levar conhecimento, cultura, educação, fé, lazer e entretenimento! 
            </h3>


            <h2>Visão</h2>
            <h3>
                Atender pessoas de todas as idades com literaturas educativas, de auto-ajuda e proporcionando bem-estar a todos.
            </h3>


            <h2>Valores</h2>
                <ul class="projeto-lista"> 
                    <li>Vida</li>
                    <li>Família</li>
                    <li>Princípios Morais e éticos</li>
                    <li>Educação</li>
                    <li>Cultura</li>
                    <li>Fé</li>
                    <li>Vida, Família</li>
                </ul>
            
        </div>

        <a href="#" class="link-seja-mantenedor">Acesse aqui para ser um sócio-mantenedor!</a>
        <div class="img-center">
                <img src="https://diocesedesaojoaodelrei.com.br/wp-content/uploads/2017/08/familia-696x362.jpg">      
        </div>
          
        <div class="projetos-igreja">   
            <h2>Estados que pretendemos distribuir literaturas:</h2>
                <img src="https://www.infoescola.com/wp-content/uploads/2009/12/bandeira-de-santa-catarina.jpg" width="30%;"
                    alt="Foto da Bandeira do Estado de Santa Catarina">


                <img src="https://images.educamaisbrasil.com.br/content/banco_de_imagens/guia-de-estudo/D/rio-grande-do-sul-geografia.jpg" width="30%;" alt="Foto da Bandeira do Estado do Rio Grande do Sul">
            
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paran%C3%A1.svg/300px-Bandeira_do_Paran%C3%A1.svg.png" width="30%;" alt="Foto da Bandeira do Estado do Paraná">
                
        </div>    
        
@endsection


