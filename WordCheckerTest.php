<?php
require_once 'word_checker.php';

use PHPUnit\Framework\TestCase;

class WordCheckerTest extends TestCase
{
    public function testSanitizeText()
    {
        $inputText = "This is a badword1 sentence with badword2 words.";
        $expectedCleanText = "this is a ********2 sentence with ******** words.";

        $cleanText = sanitizeText($inputText);

        $this->assertEquals($expectedCleanText, $cleanText);
    }

    public function testSanitizeTextWithNoBadWords()
    {
        $inputText = "This is a clean sentence without bad words.";
        $expectedCleanText = "this is a clean sentence without bad words.";

        $cleanText = sanitizeText($inputText);

        $this->assertEquals($expectedCleanText, $cleanText);
    }
}

?>
