<?php

include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2,2);

echo "That worked";
echo "Goal Average: " . $myTeam->getGoalAverage();

?>