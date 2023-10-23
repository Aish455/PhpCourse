<?php

function hello($x){
    $user =$x;
if ($user=="Nour") {

  echo 'hello'.$user;
}else {
    echo 'Bye'.$user;
}
}
hello('Anas');
echo '<br>';
hello('Nour');
hello('Nour');
hello('Nour');

?>