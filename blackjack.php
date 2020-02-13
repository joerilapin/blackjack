
<?php
class Blackjack
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}
$obj = new Blackjack();
$obj-> displayVar();

?>






//<?php/*

$eersterandom = mt_rand(1,11);
$tweederandom = mt_rand(1,11);
$somplayer = $eersterandom + $tweederandom;
echo "de random eerste kaart      ".$eersterandom;
echo "<br/>de random tweede kaart ".$tweederandom;
echo "<br/>de eerste twee kaarten van de player ".$somplayer;
echo ""
*/
//?>

