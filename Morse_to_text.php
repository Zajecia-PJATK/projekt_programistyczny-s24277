<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.scss">
<style>
    .div1 { grid-area: 1 / 1 / 2 / 2; }
    .div2 { grid-area: 2 / 2 / 4 / 5; }
    .div3 { grid-area: 4 / 2 / 6 / 5; }
    .div4 { grid-area: 6 / 2 / 7 / 3; }
    .div5 { grid-area: 6 / 4 / 7 / 5; }
    .div6 { grid-area: 1 / 2 / 2 / 4; }
</style>
<body>
<?php
require 'Morse.php';

?>
<form class="parent" method="post">
    <div class="div1">
        <div class="dropdown">
            <button class="dropbtn">Codes</button>
            <div class="dropdown-content">
                <a href="./index.php">Text to Morse</a>
                <a href="./Morse_to_text.php">Morse to Text</a>
                <a href="./Text_to_affine.php">Text to Affine</a>
                <a href="./Affine_to_text.php">Affine to Text</a>
                <a href="./Text_to_vigenere.php">Text to Vigenere</a>
                <a href="./Vigenere_to_text.php">Vigenere to Text</a>
            </div>
        </div>
    </div>
    <div class="div2">
        <form>
            <label for="String">Your input</label>
            <div class="col-75">
                <textarea id="subject" name="String" placeholder="Your input" style="height:200px"><?php echo $_POST['String'];?></textarea>
            </div>
        </form>
    </div>
    <div class="div3">
        <form>
            <label for="Result">Result</label>
            <div class="col-75">
                <textarea id="subject" name="Result" placeholder="Result" style="height:200px" disabled><?php echo DecodingNormalMorse($_POST['String']);?></textarea>
            </div>
        </form>
    </div>
    <div class="div4">
        <form>
            <div class="row">
                <input type="submit" value="Submit" >
            </div>
        </form>
    </div>
    <div class="div5">
        <form>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="div6">
        <h  style="font-size:60px; color: LawnGreen; float: right;" >Morse to Text</h>
    </div>
</form>
</body>
</html>
