<!DOCTYPE html>
<html>
<head>
    <title>Word Checker Demos</title>
</head>
<body>
    <div>
        <label for="input-text">Input Text:</label>
        <input type="text" id="input-text">
        <button onclick="checkWord()">Check</button>
    </div>
    <div id="output"></div>

    <script>
        function checkWord() {
            var inputText = document.getElementById("input-text").value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "filter.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var cleanText = xhr.responseText;
                        document.getElementById("output").textContent = cleanText;
                    } else {
                        // Handle error
                    }
                }
            };
            xhr.send("input_text=" + encodeURIComponent(inputText));
        }
    </script>
</body>
</html>