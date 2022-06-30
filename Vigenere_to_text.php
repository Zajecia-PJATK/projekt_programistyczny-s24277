<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.scss">
    <style>
        .div1 { grid-area: 1 / 1 / 2 / 2; }
        .div2 { grid-area: 2 / 2 / 3 / 3; }
        .div3 { grid-area: 2 / 3 / 4 / 5; }
        .div4 { grid-area: 4 / 3 / 6 / 5; }
        .div5 { grid-area: 6 / 3 / 7 / 4; }
        .div6 { grid-area: 6 / 4 / 7 / 5; }
        .div7 { grid-area: 1 / 2 / 2 / 4; }
    </style>
</head>
<body>
<div class="parent">
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
            <label for="fname">Key</label>
            <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Key" style="height:50px"></textarea>
            </div>
        </form>
    </div>
    <div class="div3">
        <form>
            <label for="fname">Your Input</label>
            <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Your input" style="height:200px"></textarea>
            </div>
        </form>
    </div>
    <div class="div4">
        <form>
            <label for="fname">Result</label>
            <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Result" style="height:200px" disabled></textarea>
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
        <form>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="div7">
        <h  style="font-size:60px; color: LawnGreen; float: right;" >Vigenere to Text</h>
    </div>
</div>
</body>
</html>
<?php
require 'Vigenere.php';

?>