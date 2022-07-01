<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.scss">
    <style>
        .div1 { grid-area: 1 / 1 / 2 / 2; }
        .div2 { grid-area: 2 / 2 / 3 / 3; }
        .div3 { grid-area: 3 / 2 / 4 / 3; }
        .div4 { grid-area: 2 / 3 / 4 / 5; }
        .div5 { grid-area: 4 / 3 / 6 / 5; }
        .div6 { grid-area: 6 / 3 / 7 / 4; }
        .div7 { grid-area: 6 / 4 / 7 / 5; }
        .div8 { grid-area: 1 / 2 / 2 / 4; }
    </style>
</head>
<body>
<?php
require 'Alphabet.php';

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
            <label for="A">First number</label>
            <div class="col-75">
                <textarea id="subject" name="A" placeholder="First number" style="height:100%"><?php echo $_POST['A'];?></textarea>
            </div>
    </div>
    <div class="div3">
            <label for="B">Second number</label>
            <div class="col-75">
                <textarea id="subject" name="B" placeholder="Second number" style="height:100%"><?php echo $_POST['B'];?></textarea>
            </div>
    </div>
    <div class="div4">
            <label for="String">Your input</label>
            <div class="col-75">
                <textarea id="subject" name="String" placeholder="Your input" style="height:200px"><?php echo $_POST['String'];?></textarea>
            </div>
    </div>
    <div class="div5">
            <label for="Result">Result</label>
            <div class="col-75">
                <textarea id="subject" name="Result" placeholder="Result" style="height:200px" disabled><?php echo "dziala";//echo decodeAffine($_POST['A'],$_POST['B'],$_POST['String']); ?></textarea>
            </div>
    </div>
    <div class="div6">
            <div class="row">
                <input type="submit" value="Submit">
            </div>
    </div>
    <div class="div7">
            <div class="row">
                <input type="submit" value="Submit">
            </div>
    </div>
    <div class="div8">
        <h  style="font-size:60px; color: LawnGreen; float: right;" >Affine to Text</h>
    </div>
</form>
</body>
</html>
