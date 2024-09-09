<?php

class Solution {
    function twoSum($nums, $target) {
        $map = [];
        foreach($nums as $key => $val){
            $diff = $target - $val;

            if(isset($map[$diff])){
                return [$map[$diff], $key];
            }
            
            $map[$val] = $key;
        }

        return [];
    }
}