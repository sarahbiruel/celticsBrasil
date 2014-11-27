<?php
/**
 * The single template file
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */

get_header();
?>

<div class="container">
    <div class="row">

        <div class="col-md-12">

            <div id="single-thumbnail">
               <img src="<?php echo get_template_directory_uri(); ?>/images/temp/single-thumbnail.jpg">
            
                <div class="featured-capition-list">
                    <div class="featured-capition">
                        <div class="title">
                            Marcus Smart é ovacionado no Fenway Park.
                        </div>
                    </div>
                </div>

                <nav class="featured-nav">
                    <li><a href="#" class="prev"> <i class="icon sprite-featured-arrow-left"></i></a></li>
                    <li><a href="#" class="next"> <i class="icon sprite-featured-arrow-right"></i></a></li>
                </nav>

                <div class="sprite-feature-capition-shadow visible-md visible-lg"></div>

            </div>

            
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <!-- Artigo -->
            <div class="single-post">

                <!-- Data -->
                <div class="block-time-comments">
                    <div class="time-comments">
                        <time datetime="2014-02-01 14:00">
                            <p class="number">23</p>
                            <p class="month">Dezembro</p>
                            <span>2014</span>
                        </time>
                    </div>
                    <div class="time-comments light-green">
                        <p class="number">54</p>
                        <span>comentários</span>
                    </div>
                </div>

                <h1 class="single-title"><span>Marcus Smart é ovacionado no Fenway Park </span></h1>

                <article>
                    <p>Marcus Smart, escolhido pelo Boston Celtics com a sexta escolha no 2014 NBA Draft, passou apenas alguns dias de sua vida, até o presente momento, na cidade de Boston. Todavia, já conseguiu realizar um sonho de muitos dos cidadãos da capital do estado de Massachusetts: lançar uma bola no Fenway Park, centenário e famosíssimo estádio do Boston Red Sox.
        Smart e o calouro do New England Patriots – Dominique Easley – realizaram o tradicional primeiro lançamento, pouco antes do começo da partida entre o Red Sox e o Houston Astros (que terminou com a vitória do Red Sox por 10×7).
        </p>
                    <p>Smart fez seu lançamento com certa desenvoltura e facilidade, mas ficou claro que sua maior qualidade está com a bola laranja do basquete.
        “Eu costumava jogar baseball apenas por entretenimento”, disse Smart, enquanto era entrevistado no banco de reservas do Red Sox. ”Eu era fã do jogo de baseball quando criança, mas, obviamente, conforme você cresce, as coisas mudam. Eu ainda gosto de baseball e de assistir aos jogos, mas não sou mais o mesmo fanático de outrora”.</p>
                    
                    <p>Smart, nascido e criado em Dallas (Texas), não cresceu como um torcedor do Houston Astros (adversário da noite desse último Sábado), mas como um fã do Texas Rangers. Ele chegou a ir a diversos jogos do Rangers, ao longo da sua vida, mas fez questão de frisar que sua maior paixão sempre foi o basquete.
O jogo desse Sábado marcou a primeira ida do novo camisa 36 do Celtics ao Fenway Park, mas o calouro já fez questão de divulgar que jamais esquecerá esse dia.</p>

                    <p>”Essa foi minha primeira vez no Fenway Park, não há nada parecido. É simplesmente inacreditável o que estou vivendo”, disse Smart.
O atleta, oriundo da Universidade de Oklahoma State, também fez questão de lembrar o que passou em sua cabeça, enquanto caminhava no túnel que dá acesso ao campo do estádio.</p>

                    <p>”Eu estava caminhando e pensei: ‘nossa, que sensação incrível. É assim que eles se sentem ao entrar em campo? Que loucura!’ “.
O outro fato inesquecível e louco do dia, para Marcus Smart? Conhecer David Ortiz.
“David Ortiz dispensa apresentações, é um dos maiores nomes do baseball”, disse Smart. ”Ele simplesmente estava sentado próximo a mim, falando no telefone, e a sensação foi de ‘espera um pouco, aquele cara é Ortiz! Não pensei duas vezes e fui até ele, para tirar uma foto e eternizar esse momento’ “.</p>
                </article>

            </div>
        </div>

        <!-- Sidebar -->

        <div class="col-md-4 sidebar">

            <!-- Author -->
            <div class="author-single">
                <div class="author-head">
                    <div class="author-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/temp/author.jpg">
                    </div>

                    <div class="author-name">
                        <h2 class="single-title"><span>Rômulo Portugal</span></h2>
                    </div>
                </div>

                <div class="author-resume">
                    <p>Carioca, estudante de Direito, e fã de futebol, NBA e NFL. Acompanha o Celtics desde 2003. Seu fanatismo pelo maior campeão da NBA o fez torcer para os demais times de Boston. Tem Paul Pierce como primeiro e grande ídolo na NBA.
</p>
                </div>

                <div class="social-icons">
                    <p>Facebook, Twitter, Instagram</p>
                </div>
            </div>

            <hr class="line">

            <!-- Recent Posts -->

            <div class="recent-posts">
                <h2 class="single-title"><span>Últimas notícias</span></h2>

                <div class="posts-list">
                    <ul>
                        <li>
                            <div class="mini-thumb">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/thumb-1.jpg" /></a>
                            </div>
                             <h4><a href="#">Evan Turner fecha contrato com o Celtics</a></h4>
                        </li>    
                        <li>
                            <div class="mini-thumb">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/thumb-2.jpg" /></a>
                            </div>
                             <h4><a href="#">Celtics vem oferecendo Bass a outras equipes</a></h4>
                        </li>    
                        <li>
                            <div class="mini-thumb">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/thumb-3.jpg" /></a>
                            </div>
                            <h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
                        </li>
                    </ul>
                </div>
            </div> 

            <div class="see-more"><span class="before"></span><a href="#" class="gray-link">Clique e veja mais notícias<i class="icon sprite-see-more-gray"></i></a><span class="after"></span></div> <!-- carrega outras noticias -->

            <hr class="line">

            <!-- Categories -->
            <div class="sidebar-categories">
                <h2 class="single-title"><span>Colunas</span></h2>
                <ul class="categories-list">
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Aprenda sem Berro</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Craques do Passado</a>    
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Glauco Cemia</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Rivalidades</a> 
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Sinal Verde</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Títulos</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Túnel do Tempo</a>    
                    </li>
                </ul>
            </div>

            <hr class="line">

            <div class="feed-social-bar">
                <ul class="row">
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="icon sprite-rss"></i>
                            <span class="alias">ARTIGOS</span>
                            <span class="number">1952</span>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="icon sprite-twitter"></i>
                            <span class="alias">SEGUIDORES</span>
                            <span class="number">2763</span>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="icon sprite-facebook"></i>
                            <span class="alias">CURTIDAS</span>
                            <span class="number">1963</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>


<?php
get_footer();
?>