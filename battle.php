<style>
#battle {
	height:420px;
	width: 960px;	
}
#battle_title {
	width:960px;
	color:#d7d7d7;
}
#battle_title p {
	font-size:20px;
}
#battle_players {
	width:960px;
	margin-top:-30px;
}
#players_blank_1 {
	float:left;
	width:50px;
	height:50px;
	color:#d7d7d7;
}
#player_1 {
	margin-top:15px;
	color:#3284ff;
	float:left;
	width:400px;
	font-size:25px;
}
#question {
	float:left;
	width:60px;
}
#player_2 {
	margin-top:15px;
	color:#3284ff;
	float:left;
	width:400px;
	font-size:25px;
}
#players_blank_3 {
	float:right;
	width:50px;
	height:50px;
	color:#d7d7d7;
}
#battle_videos {
	width:960px;
	margin-top:-5px;
	float:left;
}
#player1video video{
	
}
#vs {
	height:300px;
	width:60px;
	font-size:30px;
}
#vs img {
	margin-bottom:130px;
}
#player2video video{
	
}
#battle_votes {
	width:960px;	
}
#votes_blank_1 {
	float:left;
	width:50px;
	color:#d7d7d7;

}
#player1vote {
	float:left;
	width:50%;
	font-size:30px;

}
#player1vote_button {
	margin-top:25px;
	width:100%;
	border:1px solid #d7d7d7;
	color:#d7d7d7;	
	background-image: url('pictures/carbon.jpg');
}
#player2vote {
	float:right;
	width:50%;
	font-size:30px;
}
#player2vote_button {
	margin-top:25px;
	width:100%;
	border:1px solid #d7d7d7;
	color:#d7d7d7;	
	background-image: url('pictures/carbon.jpg');
}
#player2vote a {

}
#votes_blank_3 {
	float:right;
	width:50px;
	color:#d7d7d7;
}
#icons {
	width:100%;
}
#report_p1 {
	float:left;
	text-decoration:none;
	font-size:20px;
	color:#ff1919;
}
#question {	
	font-size:24px;
	color:white;
}
#report_p2 {
	float:right;
	text-decoration:none;
	font-size:20px;
	color:#ff1919;
}
#thanks_for_reporting_title {
	width:960px;
	margin-top:100px;
	color:#d7d7d7;
	font-size:30px;
}
#thanks_for_reporting {
	margin-top:100px;
	color:#d7d7d7;
	font-size:30px;
}
#thanks_for_reporting  a{
	margin-top:100px;
	color:#d7d7d7;	
}






@media screen and (max-width:980px) {
#battle_players {
	margin-top:50px;
}
#battle_top {
	
}
#judge_stats_title {
	font-size:40px;
}
#battle_top_table td {
	font-size:30px;
}
#battle_videos {
	margin-top:10px;
}
#player1vote_button {
	margin-top:15px;
	margin-bottom:50px;
	width:100%;
	height:75px;
	border:1px solid #d7d7d7;
	color:#d7d7d7;	
	background-image: url('pictures/carbon.jpg');
}
#player2vote_button {
	margin-top:15px;
	margin-bottom:50px;
	width:100%;
	height:75px;
	border:1px solid #d7d7d7;
	color:#d7d7d7;	
	background-image: url('pictures/carbon.jpg');
}
#player_1 {

}
}
</style>
<section id="battle">
	<section id="battle_title"><center><p style="color:black;">.</p></center>

	</section>	
			
	<section id="battle_players">
		<span id="players_blank_1">
			<span id="votes_blank_1" style="color:#ccac00;font-size:18px;"><b>Level<br><?echo$display_p1_level;?></b></span>
		</span>
		<span id="player_1"><center><?echo$display_player_1;?></center></span>
		<span id="question"><center><a href="#" data-toggle="tooltip" title="Watch both videos and pick the better of the two. Pick the right one and watch your judge stats increase."><img src="pictures/battleHelp.png" style="height:25px;width:25px;" onclick="alert('Watch both videos and pick the better of the two. Pick the right one and watch your judge stats increase.');"></img></a></center></span>
		<span id="player_2"><center><?echo$display_player_2;?></center></span>
		<span id="players_blank_3">
			<span id="votes_blank_3" style="color:#ccac00;font-size:18px;"><b>Level<br><?echo$display_p2_level;?></b></span>		
		</span>
	</section>	
			
	<section id="battle_videos">
		
		<span id="player1video">
			<?php
				$res = mysqli_query($mysqli, "SELECT video FROM player_info WHERE player_id='".$display_player_1."'"); 
				while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {  
					$display_player_1_vid = $row["video"]; 
					echo "<video width='450' height='280' controls preload='auto' src='videos/".$display_player_1_video."'></video>";
				}?>
		</span>
		<span id="vs"><img src="pictures/vs_black.png" style="height:50px; width:50px;"></img></span>
		<span id="player2video">
			<?php
				$res = mysqli_query($mysqli, "SELECT video FROM player_info WHERE player_id='".$display_player_2."'"); 
				while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {  
					$display_player_2_vid = $row["video"]; 
					echo "<video width='450' height='280' controls src='videos/".$display_player_2_video."'></video>";
				}?>
		</span>
		
	</section>	
						
	<section id="battle_votes">
		
		<span id="player1vote">
			<center>
				<?
				if ($_SESSION['player_id'])	{
					?>
					<a href="demo_battle_1_player_1.php"><button id="player1vote_button">Vote<text style="font-size:15px;margin-left:5px;">(Click)</text></button></a>
					<?
				}
				else {
					?>
					<a href=""><button id="player1vote_button" onclick="alert('Register to start as a level one judge.')">Vote<text style="font-size:15px;margin-left:5px;">(Click)</text></button></a>
					<?			
				}
				?>
			</center>
		</span>
		<span id="player2vote">
			<center>
				<?
				if ($_SESSION['player_id'])	{
					?>
					<a href="demo_battle_1_player_2.php"><button id="player2vote_button">Vote<text style="font-size:15px;margin-left:5px;">(Click)</text></button></a>
					<?
				}
				else {
					?>
					<a href=""><button id="player2vote_button" onclick="alert('Register to start as a level one judge.')">Vote<text style="font-size:15px;margin-left:5px;">(Click)</text></button></a>
					<?			
				}
				?>	
			</center>
		</span>
	</section>
</section>


<!--NEED TO FIX THIS!!!!!!!!!!!!!!!
<section id="icons">
	<a href="report_player_1.php" id="report_p1" title="Report Player 1" onclick="return confirm('Reporting someone is appropriate if they have uploaded adult, illegal, violent or graphic content, content promoting alcohol, tobacco, drugs, guns or terrorist ideology or spam, phishing, malware or systems abuse.\n\nAre you sure you want to report <?echo$display_player_1?>?');"><img src="pictures/report.png" style="height:40px;width:35px;"></img></a>
	<center><span id="question"><a href="#" data-toggle="tooltip" title="Watch both videos and pick the better of the two. Pick the right one and watch your judge stats increase."><img src="pictures/battleHelp.png" style="height:35px;width:35px;" onclick="alert('Watch both videos and pick the better of the two. Pick the right one and watch your judge stats increase.');"></img></a></span></center>
	<a href="report_player_2.php" id="report_p2" title="Report Player 2" onclick="return confirm('Reporting someone is appropriate if they have uploaded adult, illegal, violent or graphic content, content promoting alcohol, tobacco, drugs, guns or terrorist ideology or spam, phishing, malware or systems abuse.\n\nAre you sure you want to report <?echo$display_player_2?>?');"><img src="pictures/report.png" style="height:40px;width:35px;"></img></a>
</section>
-->
	
	
	
<?
/*
function vote_p1() {
	include 'connect.php';
	$display_battle_id = $_SESSION['display_battle_id'];
	include 'variables.php';
	//add +1 vote to lvl_1
	/////////////////////////////////////////////////////////////////////////////////
	$res = mysqli_query($mysqli, "SELECT p1_votes FROM battles WHERE player_1='".$display_player_1."''"); 
	$row = mysqli_fetch_assoc($res);
	mysqli_query($mysqli, "UPDATE battles SET p1_votes=p1_votes+1 WHERE player_1='".$display_player_1."'");
	mysqli_query($mysqli, "UPDATE battles SET total_votes=total_votes+1 WHERE player_1='".$display_player_1."'");
	///////////////////////////////////////////////////////////////////////////////////
	header("location: home.php");
}
*/
?>	
