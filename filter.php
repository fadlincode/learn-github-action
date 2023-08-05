<?php
    if (isset($_POST['input_text'])) {
        $inputText = $_POST['input_text'];
        require_once 'word_checker.php';
        $cleanText = sanitizeText($inputText);
        echo $cleanText;
    }
?>