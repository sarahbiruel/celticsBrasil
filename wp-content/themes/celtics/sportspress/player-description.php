<?php
include_once ('/classes/player.php');

$id = $_POST['id'];

/*
 * Create a player     *
 */
$player = new Player($id);
echo $player->getJson();
