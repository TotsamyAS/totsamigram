
<?php
echo 'Hello world!';
$my_array=array();
for ($i=1; $i<rand(2,200);$i++){
    $name='Key_'.$i;
$my_array[$name]=rand($i,pow($i,2));
echo 'My associative array\'s element "'.$name.'" = '.$my_array[$name].'<br>';
}
?>
