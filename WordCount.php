<?php
// File test case = WordCount.php
class WordCount{
    public function countWords($sentence){
        return count(explode(" ",$sentence));
    }
}
?>