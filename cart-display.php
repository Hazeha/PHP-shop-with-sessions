<?Php
session_start();
?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>

<head>
<title>Displaying Session Cart products from plus2net.com</title>
</head>

<body>
<?Php
    if(isset($_SESSION['cart'])){
        echo "Number of Items in the cart = ".sizeof($_SESSION['cart']);
        echo " <br><a href=cart-remove-all.php>Remove all</a><br>";


        for($i=0; $i<sizeof($_SESSION['cart']); $i++) {
            foreach ($_SESSION['cart'][$i] as $key => $val){
                if ($key === 'product'){
                    echo 'id = ' . $val . ' - ';
                } else {
                    echo 'qty = ' . $val;
                }

            } // inner array while loop
            echo "<br>";
        } // outer array for loop

        } else {
        echo " Session Cart is not created. Visit <a href=cart.php>cart.php</a> page to create the array and add products to it. ";
    }
    require 'menu.php';

?>
</body>
</html>
