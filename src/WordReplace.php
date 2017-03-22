<?php
    class WordReplace
    {
        function replace_oneWord($input_sentence, $word_to_replace, $replace_word)
        {
            $convert_sentence = explode(" ", $input_sentence);
            $output_sentence = array();
            foreach ($convert_sentence as $word) {
              if ($word == $word_to_replace) {
                array_push($output_sentence, $replace_word);
              } else {
                array_push($output_sentence, $word);
              }

            }
            return implode(" ", $output_sentence);
        }
    }
 ?>
