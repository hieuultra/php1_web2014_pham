<?php
$name=readline("enter your name:");

$hi='hi $name.  How are you today?';

$hello="hello $name . how are u today";

$heredoc=<<<MESSAGE
  Hello $name 

  you are a good man
  
MESSAGE;

$nowdoc=<<<'MESSAGE'
  Hello $name 

  you are a good man
  
MESSAGE;

echo $hi;
echo "\n";
echo $hello;
echo "\n";

echo $heredoc;
echo "\n";
echo $nowdoc;