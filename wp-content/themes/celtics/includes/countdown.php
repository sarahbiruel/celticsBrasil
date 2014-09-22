<?php
/**
 * Countdown
 *
 * @author      ThemeBoy
 * @package     SportsPress/Templates
 * @version     0.8.4
 */

if (!defined('ABSPATH'))
    exit ;
// Exit if accessed directly

$defaults = array('team' => null, 'id' => null, 'live' => get_option('sportspress_enable_live_countdowns', 'yes') == 'yes' ? true : false, );

if (isset($id)) :
    $post = get_post($id);
else :
    $args = array();
    if (isset($team))
        $args = array( array('key' => 'sp_team', 'value' => $team));
    $post = sp_get_next_event($args);
endif;

extract($defaults, EXTR_SKIP);

if ($post){
?>
<div class="next-match">
	<header>
		<h1 class="title"> Próxima partida </h1>
		<div class="info">
			<div class="teams">
				<span class="home-team"> <?php echo $post -> post_title; ?>
				</span>
			</div>
			<div class="stadium">
				<?php get_the_without_link($post -> ID, 'sp_venue'); ?>
			</div>
			<time datetime="2014-02-01 14:00" class="date-time">
				<span class="date"> <?php echo mysql2date('d/m/Y', $post -> post_date); ?>
				</span>
				-
				<span class="time"> <?php echo mysql2date('H:i', $post -> post_date); ?>h
				</span>
			</time>
		</div>
	</header>
	<div class="teams-logo hidden-xs">
		<ul>
			<?php
            $teams = split(' vs ', $post -> post_title);
            foreach ($teams as $team) {
                $teamPost = get_page_by_title($team, OBJECT, 'sp_team');
                $image = get_the_post_thumbnail($teamPost -> ID, 'team-thumb');
                if ($image) {
                    echo '<li>';
                    echo $image;
                    echo '</li>';
                }
            }
			?>
		</ul>
	</div>
	<div class="sprite-match-timer-shadow  hidden-xs"></div>
</div>

<?php
$now = new DateTime( current_time( 'mysql', 0 ) );
$date = new DateTime( $post->post_date );
$interval = date_diff( $now, $date );

$days = $interval->invert ? 0 : $interval->days;
$h = $interval->invert ? 0 : $interval->h;
$i = $interval->invert ? 0 : $interval->i;
$s = $interval->invert ? 0 : $interval->s;

if($days<100){

?>
<div class="match-timer">
	<div class="match-timer-days">
		<div class="dozens">
			<?php echo substr(sprintf('%02s', $days), 0, 1); ?>
		</div>
		<div class="units">
			<?php echo substr(sprintf('%02s', $days), 1, 1); ?>
		</div>
		<span>DIAS</span>
	</div>
	<div class="match-timer-hours hour">
		<div class="dozens">
			<?php echo substr(sprintf('%02s', $h), 0, 1); ?>
		</div>
		<div class="units">
			<?php echo substr(sprintf('%02s', $h), 1, 1); ?>
		</div>
		<span>HORAS</span>
	</div>
	<div class="match-timer-minutes">
		<div class="dozens">
			<?php echo substr(sprintf('%02s', $i), 0, 1); ?>
		</div>
		<div class="units">
			<?php echo substr(sprintf('%02s', $i), 1, 1); ?>
		</div>
		<span>MINUTOS</span>
	</div>
	<div class="match-timer-seconds hidden-xs hidden-sm">
		<div class="dozens">
			<?php echo substr(sprintf('%02s', $s), 0, 1); ?>
		</div>
		<div class="units">
			<?php echo substr(sprintf('%02s', $s), 1, 1); ?>
		</div>
		<span>SEGUNDOS</span>
	</div>
</div>
<?php 
    }
}