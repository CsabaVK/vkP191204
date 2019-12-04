<?php
    
        $rolls = $_POST['rolls'] ?? 10;
        $dice = $_POST['dice'] ?? 3;
        $number = $_POST['number'] ?? 6;
?>

<form action="/index.php" method="POST">
    <label for="rolls">Number of rolls</label> <br />
    <input type="text" id="rolls" name="rolls" value="<?=$rolls?>"> <br /><br />
    <label for="dice">Number of Dice</label> <br />
    <input type="text" id="dice" name="dice" value="<?=$dice?>"> <br /><br />
    <label for="dice">Your number (1-6)</label> <br />
    <input type="text" id="number" name="number" value="<?=$number?>"> <br /><br />
    <button type="submit">Roll the dice!</button>    
</form>
<?php

if ($_POST) {       
    # code...
}