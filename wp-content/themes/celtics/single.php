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

            <div class="single-thumbnail">
               <img src="<?php echo get_template_directory_uri(); ?>/images/temp/single-thumbnail.jpg">
            </div>

            <div class="featured-single">
                <div class="title">
                    <p>Marcus Smart é ovacionado no Fenway Park.</p>
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

<div class="container">
    <div class="row">

        

        <div class="col-md-8">

            <!-- Data -->
            <div>
                <time datetime="2014-02-01 14:00"></time>
                <div class="comments-number">54 comentários</div>
            </div>

            <!-- Artigo -->
            <div class=" ">
                <h2 class="title"><span>Marcus Smart é ovacionado no Fenway Park</span></h2>

                <article>
                <p>Marcus Smart, escolhido pelo Boston Celtics com a sexta escolha no 2014 NBA Draft, passou apenas alguns dias de sua vida, até o presente momento, na cidade de Boston. Todavia, já conseguiu realizar um sonho de muitos dos cidadãos da capital do estado de Massachusetts: lançar uma bola no Fenway Park, centenário e famosíssimo estádio do Boston Red Sox.
Smart e o calouro do New England Patriots – Dominique Easley – realizaram o tradicional primeiro lançamento, pouco antes do começo da partida entre o Red Sox e o Houston Astros (que terminou com a vitória do Red Sox por 10×7).
</p>
                <p>Smart fez seu lançamento com certa desenvoltura e facilidade, mas ficou claro que sua maior qualidade está com a bola laranja do basquete.
“Eu costumava jogar baseball apenas por entretenimento”, disse Smart, enquanto era entrevistado no banco de reservas do Red Sox. ”Eu era fã do jogo de baseball quando criança, mas, obviamente, conforme você cresce, as coisas mudam. Eu ainda gosto de baseball e de assistir aos jogos, mas não sou mais o mesmo fanático de outrora”.</p>
                </article>
            </div>

        </div>

        <!-- Sidebar -->

        <div class="col-md-4 sidebar">

            <!-- Author -->
            <div class="author-single">
                <div class="author-head">
                    <div class="author-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>images/temp/author.jpg">
                    </div>

                    <div class="author-name">
                        <h2 class="title"><span>Rômulo Portugal</span></h2>
                    </div>
                </div>

                <div class="resume-author">
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
                <h2 class="title"><span>Últimas notícias</span></h2>

                <div class="tab-panel">
                    <ul>
                        <li>
                            <div class="mini-thumb">
                                <a href="#">img thumb</a>
                                <h4>Evan Turner fecha contrato com o Celtics</h4>
                            </div>
                        </li>    
                        <li>
                            <div class="mini-thumb">
                                <a href="#">img thumb</a>
                                <h4>Evan Turner fecha contrato com o Celtics</h4>
                            </div>
                        </li>    
                        <li>
                            <div class="mini-thumb">
                                <a href="#">Img</a>
                                <h4>Evan Turner fecha contrato com o Celtics</h4>
                            </div>
                        </li>                       
                    </ul>
                </div>

                <div class="see-more"></div> <!-- carrega outras noticias -->
            </div>

            <hr class="line">

            <!-- Categories -->
            <div class="categories">
                <h2 class="title"><span>Colunas</span></h2>
                <ul class="categorie-list">
                    <li>Aprenda sem Berro</li>
                    <li>Craques do passado</li>
                    <li>Glauco Cemia</li>
                    <li>Rivalidades</li>
                    <li>Sinal Verde</li>
                    <li>Títutlos</li>
                    <li>Túnel do Tempo</li>
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