<?php 

function isPrime($number){
    //cek 1 bukan bilangan prima
    if($number == 1){
        return false;
    }

    //cek 2 hanya satu-satunya bilangan genap berupa bilangan prima
    if($number == 2){
        return true;
    }

    //algoritma akar kuadrat mempercepat pengujian bilangan prima yang lebih besar
    $x =  sqrt($number);
    $x = floor($x);

    for ($i = 2; $i <= $x ; $i++) { 
        if($number % $i == 0){
            break;
        }
    }

    if($x == $i - 1){
        return true;
    }else{
        return false;
    }
}

function cekAngkaPrima($n, $m){
    $jumlah = 0;
    for ($i = $n; $i <= $m; $i++) { 
        if(isPrime($i)){
            echo $i. ', ';
            $jumlah++;
        }
    }
    echo "<br>jumlah bilangan prima ".$jumlah. "<br>";
}

cekAngkaPrima(0, 100);
?>
</body>
</html>