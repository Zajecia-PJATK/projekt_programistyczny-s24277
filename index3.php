<!DOCTYPE html>
<html>
<style>
    body{
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
        float: right;
    }
    label{
        color: DodgerBlue;
    }
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
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #1E90FF;}
</style>
<body>
<div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
        <a href="./index.php">Morse</a>
        <a href="./index2.php">Affine</a>
        <a href="./index3.php">Vigenere</a>
    </div>
</div>
<form>
    <label for="fname">First Name</label>
    <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Mleko" style="height:200px"></textarea>
    </div>
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
<?php
require 'Morse.php';
require 'Alphabet.php';
require 'Vigenere.php';
?>