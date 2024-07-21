@extends('layouts.admin')

@section('content') 

<main id="main" class="bg-black pt-12 border border-gray-800 rounded shadow" style='padding:0 15% 0 15%;  height: 70vh ;  '>
  <div class="flex text-sky-100 pt-12 pb-12">  
        <div class="flex-auto pl-12  w-1/2">
            <h1 class="text-3xl mb-5">Soluções de software sob medida</h1>
            <p class="text-1xl"><br>A GPS Tech é uma software house especializada em desenvolver solucoes digitais sob medida para atender as necessidades unicas de cada cliente</p>
            <button type="button" class="mt-5 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-1 px-5 border border-gray-400 rounded shadow">Saiba mais</button>
       
        </div>
        <div class=" pl-12 w-1/2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Item_sem_imagem.svg" alt=""> 
        </div>
    </div>
</main>
 

<section class='pt-12' id='servicos' style='margin:0 15% 0 15%; height: 100vh ;'>
        <div class='text-center pt-8'>
            <span class="text-center inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Nossos Serviços</span>
            <div class='desenvolvimento'>
                <h1 class='text-3xl mt-5 mb-2 font-bold'>Desenvolvimento de software sob medida</h1>
                <p class='text-1xl mb-12 text-wrap align-text-top'>A GPS Tech oferece uma ampla gama de serviços de desenvolvimento de software, desde aplicativos web e móveis até sistemas empresariais complexos. Nossos especialistas trabalham em estreita colaboração com você para criar soluções que atendem às suas necessidades únicas.</p>
            </div>
        </div>

        <div class='flex '>
            <div class='servico-lista w-1/2'>
                <h3 class='text-2xl mt-5 font-bold'>Aplicativos web</h3>
                <p class='text-1xl text-justify-left'> <br>Desenvolvemos aplicativos web responsivos e escaláveis, com foco em usabilidade e desempenho.</p>
                <h3 class='text-2xl text-justify-left mt-2 font-bold'>Aplicativos Móveis</h3>
                <p class='text-1xl text-justify-left'><br>Criamos aplicativos móveis nativos e multiplataforma para iOS e Android.</p>
                <h3 class='text-2xl text-justify-left mt-2 font-bold'>Sistemas Empresariais </h3>
                <p class='text-1xl text-justify-lefts'><br>Desenvolvemos soluções empresariais personalizadas.</p>
            </div>
            <div class='servico-img flex-auto pl-12 w-1/2 '>
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Item_sem_imagem.svg" alt=""> 
            </div>
    </div>
</section>
    


<section class='pt-12' id='depoimentos' style='margin:0 15% 0 15%; height: 100vh ;'>
        <div class='text-center pt-8'>
            <span class="text-center inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Depoimentos</span>
            <div class='depoimentos'>
                <h1 class='text-3xl mt-5 mb-2 font-bold'>O que nossos clientes dizem</h1>
                <p class='text-1xl mb-12 text-wrap align-text-top'>Veja o que alguns de nossos clientes satisfeitos têm a dizer sobre a qualidade dos 
                nossos <br> serviços e a experiência de trabalhar conosco.</p>
            </div>
        </div>

        <div class='flex '>
            <div class='comentario1 w-1/2'>
                <h3 class='text-2xl mt-5 font-bold'> "A GPS Tech entregou exatamente o que <br> precisávamos!"</h3>
                <p class='text-1xl text-justify-left pt-2'> "Trabalhamos com a GPS Tech no desenvolvimento de um sistema de gestão empresarial e ficamos impressionados com
                a qualidade do trabalaho e a atenção dos detalhes. Eles 
                realmente entenderam nossas necessidades e criaram uma
                solução sob medida."</p>
                <div class="avatar flex w-1/2 pt-5">
                    <img src="img/imagem-de-ico.jpg" alt="i">
                    <div class="nome-cargo flex-auto w-1/2">
                        <p class="usuario">João Dias</p>
                        <p class="loc">Gerente de TI</p>
                        <p class="pl-2"> Empresa XYZ</p>
                    </div>   
                </div>
            </div>               
                
            <div class='comentario2 flex-auto pl-12 w-1/2 '>
                <h3 class='text-2xl mt-5 font-bold'> "A equipe da GPS Tech é incrível!"</h3>
                <p class='text-1xl text-justify-left pt-10'> "Ficamos muito satisfeitos com o trabalho da GPS Techno desenvovimento do nsosso aplicativo móvel. Eles foram proativos, ouviram nossas necessidades e entregaram uma solução que superou expectativas. Recomendo fortemente."</p>
                <div class="avatar flex w-1/2 pt-5 text-justify-left">
                    <img src="img/imagem-de-ico.jpg" alt="i">
                    <div class="nome-cargo flex-auto w-1/2">
                        <p class="usuario">Maria Silva</p>
                        <p>Diretora de Marketing</p>
                        <p class="pl-2">Empresa ABC</p>
                    </div>   
                </div>
            </div>
    </div>
</section>


<section id='contato' style='margin:0 15% 0 15%; height: 100vh ;'>
    <div class="flex pt-12 ">
        <div class="contact flex-auto pl-12  w-1/2">
        <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Contato</span>
            <h1 class="text-2xl pt-4">Pronto para Começar ?</h1>
            <p class="text-1xl pt-4" >Entre em Contato com nossa Equipe e vamos discutir como podemos ajudar a transformar sua ideia em realidade.</p>
            <a href='https://api.whatsapp.com/message/MFHRIJCBJOINP1?autoload=1&app_absent=0' target="_blank" rel="external"><button type="button" class="bg-black text-sky-100 font-semibold py-0 px-2 border border-gray-400 rounded shadow mt-3">Entrar em Contato</button></a>
        </div>

        <div class="localizacao flex-auto pl-12 w-1/2" >
            <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Localização</span>
            <p><br>Nosso escritório esta localizado no coracao da cidade, com facil acesso a transporte publico e estacionamento.Venha nos visitar e conheca nossa equipe.</p>
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Item_sem_imagem.svg" alt="" class="pt-5"> 
        </div>
    </div>
</section> 

@endsection

