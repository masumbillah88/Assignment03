<?php
    
    $grades = [85, 92, 78, 88, 95];
    function sortArrayDescending($sorted){
            $sortedArray = rsort($sorted);
            print_r($sorted);
    }
    sortArrayDescending($grades);

?>