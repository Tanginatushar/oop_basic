<?php
class Course{

    function __set($functionName ,$arguments){
        echo "hello";
    }

    function __call($functionName ,$arguments){
        echo "hello";
    }
}