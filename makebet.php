<?php
include ("viewbet.php");
$bet = $_POST["vote"];
$season = $_POST["season"];
$survivor = $_POST["survivor"];



$show = makebet($bet,$season,$survivor);


if($show == "bet")
{
    header("Location: index?complete");
}
else{
    header("Location: index?ip");
}
?>