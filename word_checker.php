<?php

    function sanitizeText($inputText) {
        $badWords = array(
            'badword1',
            'badword2',
            // Add more bad words to the list as needed
        );

        // Convert the input text to lowercase for case-insensitive matching
        $lowerText = strtolower($inputText);

        // Use str_ireplace to replace bad words with asterisks (*)
        foreach ($badWords as $word) {
            $lowerText = str_ireplace($word, str_repeat('*', strlen($word)), $lowerText);
        }

        return $lowerText;
    }

?>