<?php
function tampilHelloWorld(){
    echo "Hello World! <br>"; 

    tampilHelloWorld();

}
for ($i=1; $i <= 25 ; $i++) {
    echo "Perulangan ke-{$i} <br>";
}

tampilHelloWorld();
?>
