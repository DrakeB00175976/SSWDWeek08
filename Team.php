
<?php

class Team {

    public $name, $totalPoints, $totalGames, $totalGoals;

    public function __construct($name) {
        $this->name = $name;
        $this->totalPoints = 0;
        $this->totalGames = 0;
        $this->totalGoals = 0;
    }

    public function finalScore($parm1, $parm2) {

        if ($parm1 > $parm2) {
            $this->totalPoints += 3;
        }
        elseif ($parm1 == $parm2) {
            $this->totalPoints += 1;
        }

        $this->totalGoals += $parm1;
        $this->totalGames += 1;
    }

    public function __toString() {
        return "NAME: " . $this->name .
        " Points: " . $this->totalPoints .
        " Games: " . $this->totalGames .
        " Goals: " . $this->totalGoals;
    }
    public function getGoalAverage():
    float {
        return $this->totalGoals /
     $this->totalGames;
    }

}

$T1 = new Team("Tigers");

$T1->finalScore(2, 2);

echo $T1;

?>
