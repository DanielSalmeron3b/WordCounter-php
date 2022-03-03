<?php
    function wordcount($text){
        // Deleting blank spaces between words
        $text_area = preg_replace("/\s+/u"," ", trim($text));

        $words = preg_split("/\s/u", $text_area);
        return $words;
    }
?>