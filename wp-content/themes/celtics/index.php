<?php
/**
 * The main template file
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */

get_header();
;
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section id="home-slide">
				<ul class="big-featured">
					<li>
						<a href="#"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" />
						<div class="featured-capition">
							<div class="title">
								Análise do calendário de jogos do Celtics para 2014/2015
							</div>
							<time datetime="2014-02-01 14:00" class="date-time">
								<div class="date">
									01/02/2014
								</div>
								-
								<div class="time">
									14:00h
								</div>
							</time>
						</div> </a>
					</li>
					<li>
						<a href="#"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" />
						<div class="featured-capition">
							<div class="title">
								Análise do calendário de jogos do Celtics para 2014/2015
							</div>
							<time datetime="2014-02-01 14:00" class="date-time">
								<div class="date">
									01/02/2014
								</div>
								-
								<div class="time">
									14:00h
								</div>
							</time>
						</div> </a>
					</li>
					<li>
						<a href="#"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" />
						<div class="featured-capition">
							<div class="title">
								Análise do calendário de jogos do Celtics para 2014/2015
							</div>
							<time datetime="2014-02-01 14:00" class="date-time">
								<div class="date">
									01/02/2014
								</div>
								-
								<div class="time">
									14:00h
								</div>
							</time>
						</div> </a>
					</li>
				</ul>
				<div class="featured-nav">
					<a href="#" class="prev"> <i class="icon sprite-featured-arrow-left"></i> </a>
					<a href="#" class="next"> <i class="icon sprite-featured-arrow-right"></i> </a>
				</div>
				<div class="sprite-feature-capition-shadow"></div>
			</section>
		</div>
	</div>
</div>
<section id="next-match">
	<div class="match-container">
		<div class="next-match">
			<header>
				<h1 class="title"> Próxima partida </h1>
				<div class="info">
					<div class="teams">
						<span class="home-team"> Celtics </span><span class="at"> X </span><span class="away-team"> Bulls </span>
					</div>
					<div class="stadium">
						TD. GARDEN - BOS
					</div>
					<time datetime="2014-02-01 14:00" class="date-time">
						<span class="date"> 01/02/2014 </span>
						-
						<span class="time"> 14:00h </span>
					</time>
				</div>
			</header>
			<div class="teams-logo">
				<ul>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri() . '/images/teams-logo.png'; ?>" alt="" />
					</li>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri() . '/images/teams-logo.png'; ?>" alt="" />
					</li>
				</ul>
			</div>
			<div class="sprite-match-timer-shadow"></div>
		</div>
		<div class="match-timer">
			<div class="match-timer-days">
				<div class="dozens">
					0
				</div>
				<div class="units">
					1
				</div>
				<span>DIAS</span>
			</div>
			<div class="match-timer-hours">
				<div class="dozens">
					1
				</div>
				<div class="units">
					2
				</div>
				<span>HORAS</span>
			</div>
			<div class="match-timer-minutes">
				<div class="dozens">
					5
				</div>
				<div class="units">
					3
				</div>
				<span>MINUTOS</span>
			</div>
			<div class="match-timer-seconds">
				<div class="dozens">
					2
				</div>
				<div class="units">
					4
				</div>
				<span>SEGUNDOS</span>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-sm-offset-9">
			<section class="home-social text-center">
				<ul class="row">
					<li class="col-sm-4">
						<a href="#" target="_blank"> <i class="icon sprite-rss"></i> <span class="alias">ARTIGOS</span> <span class="number">1952</span> </a>
					</li>
					<li class="col-sm-4">
						<a href="#" target="_blank"><i class="icon sprite-twitter"></i><span class="alias">SEGUIDORES</span> <span class="number">2763</span></a>
					</li>
					<li class="col-sm-4">
						<a href="#" target="_blank"><i class="icon sprite-facebook"></i><span class="alias">CURTIDAS</span> <span class="number">1963</span></a>
					</li>
				</ul>
			</section>
		</div>
	</div>
</div>
<div id="home-news" class="container">
	<div class="row">
		<section class="news">
			<div class="col-sm-12">
				<h2 class="title"><span>Últimas notícias</span></h2>
				<ul>
					<li>
						<div class="thumb">
							<img src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" class="img-responsive" />
						</div>
						<header>
							<h3 class="title">Evan Turner fecha contrato com o Celtics</h3>
							<time datetime="2014-02-01 14:00" class="date-time">
								<span class="date"> 01/02/2014 </span>
								-
								<span class="time"> 14:00h </span>
							</time>
						</header>
						<div class="excerpt">
							No fim da tarde desta segunda-feira (21), faltando 100 dias para o início da temporada regular da NBA, o Boston Celtics anunciou mais um reforço para as disputas em 2014/2015.
						</div>
						<div class="comments">
						    <div class="comments-number">49</div>
						    <span>comentários</span>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>