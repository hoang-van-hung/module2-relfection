<?php
$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
foreach ($age as $key =>$value){
    echo $key." :".$value."<br>";
}
arsort($age);
foreach ($age as $key =>$value){
    echo "New arr ".$key." :".$value."<br>";
}
