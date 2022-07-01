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
include_once 'Morse.php';
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
            <label for="String">Your input</label>
            <div class="col-75">
                <textarea id="String" name="String" placeholder="Your input" style="height:200px"><?php echo $_POST['String'];?></textarea>
            </div>
    </div>
    <div class="div3">
            <label for="Result">Result</label>
            <div class="col-75">
                <textarea id="Result" name="Result" placeholder="Result" style="height:200px" disabled><?php $array = $morse -> codeMorse($_POST["String"]);
                    echo $morse -> printmorse($array);
                    ?></textarea>
            </div>
    </div>
    <div class="div4">
            <div class="row">
                <input type="submit" value="Submit">
            </div>
    </div>
    <div class="div5">
        <input class="button_up" type="file" name="inputfile"
               id="inputfile">
        <br>
        <script type="text/javascript">
            document.getElementById('inputfile')
                .addEventListener('change', function () {
                    var fr = new FileReader();
                    fr.onload = function () {
                        document.getElementById('String')
                            .textContent = fr.result;
                    }
                    fr.readAsText(this.files[0]);
                })
        </script>
        <input id="Download" type="button" value="Download" onclick="saveTextAsFile(document.getElementById('Result').value,'Morse.txt');" />
        <script>
            function saveTextAsFile(textToWrite, fileNameToSaveAs) {
                var textFileAsBlob = new Blob([textToWrite], {type: 'text/plain'});
                var downloadLink = document.createElement("a");
                downloadLink.download = fileNameToSaveAs;
                downloadLink.innerHTML = "Download File";
                if (window.webkitURL != null) {
                    //chrome
                    downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
                } else {
                    // Firefox
                    downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
                    downloadLink.onclick = destroyClickedElement;
                    downloadLink.style.display = "none";
                    document.body.appendChild(downloadLink);
                }
                downloadLink.click();
            }

        </script>
        <div class="row">
            <div id="twitterbutton">Get from Twitter</div>
        </div>
    </div>
    <div class="div6">
        <h  style="font-size:60px; color: LawnGreen; float: right;" >Text to Morse</h>
    </div>
</form>
</body>
</html>
<script src="index.js"></script>