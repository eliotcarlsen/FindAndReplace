<?php
  require_once "src/WordReplace.php";

  class WordReplaceTest extends PHPUnit_Framework_TestCase
  {
    function test_replace_oneWord() {
      //Arrange
      $test_WordReplace = new WordReplace;
      $input = "testword";
      $input_word_to_replace = "testword";
      $replace_word = "someword";

      //Act
      $result = $test_WordReplace->replace_oneWord($input, $input_word_to_replace, $replace_word);

      //Assert
      $this->assertEquals("someword", $result);
    }

    function test_replace_multiWord() {
      //Arrange
      $test_WordReplace = new WordReplace;
      $input = "go to the meetup";
      $input_word_to_replace = "meetup";
      $replace_word = "bar";

      //Act
      $result = $test_WordReplace->replace_oneWord($input, $input_word_to_replace, $replace_word);

      //Assert
      $this->assertEquals("go to the bar", $result);
    }
  }





?>
