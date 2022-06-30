<!DOCTYPE html>
<html>
<style>
    body{
        text-shadow: -2px -2px 0 black, 2px -2px 0 black, -2px 2px 0 black, 2px 2px 0 black;
        background-image: url('zCRSn1.gif');
        background-size: cover;
        height: 100vh;
        padding:0;
        margin:0;
    }
    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        margin: 4px 0;
        box-sizing: border-box;
        border: 2px solid DodgerBlue;
        background-color: white;
        border-radius: 4px;
    }
    input[type=submit] {
        background-color: DodgerBlue;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    label{
        color: DodgerBlue;
    }
    .parent {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(6, 1fr);
        grid-column-gap: 10px;
        grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 2 / 2; }
    .div2 { grid-area: 2 / 2 / 3 / 3; }
    .div3 { grid-area: 2 / 3 / 4 / 5; }
    .div4 { grid-area: 4 / 3 / 6 / 5; }
    .div5 { grid-area: 6 / 3 / 7 / 4; }
    .div6 { grid-area: 6 / 4 / 7 / 5; }
    .div7 { grid-area: 1 / 2 / 2 / 4; }
    /* Dropdown Button */
    .dropbtn {
        border-radius: 0px 0px 60px 0px;
        background-color: DodgerBlue;
        color: black;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: DodgerBlue;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(30, 144, 255,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: DodgerBlue;
        background: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-shadow: none;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #1E90FF;}
</style>
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
        <h  style="font-size:60px; color: DodgerBlue;" >Vigenere to Text</h>
    </div>
</div>
</body>
</html>
<?php
require 'Vigenere.php';

?>