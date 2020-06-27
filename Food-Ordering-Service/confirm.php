<!-- import the required files -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
    <!-- head section -->
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        
        <!-- title -->
        <title>My-Choice</title>
        
        <!-- css links -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>
    
    <!-- body section -->
    <body>
        <!-- order -->
        <div class="order-wrapper">
            <!-- cart -->
            <h2>Cart</h2>
            <?php $totalPayment = 0 ?>
            
            <?php foreach ($menus as $menu): ?>
                <?php 
                    $orderCount = $_POST[$menu->getName()];
                    $menu->setOrderCount($orderCount);
                    $totalPayment += $menu->getTotalPrice();
                ?>
                
                <!-- display order amount for each menu item -->
                <p class="order-amount">
                    <?php echo $menu->getName() ?>
                    x
                    <?php echo $orderCount ?>
                </p>
                
                <!-- display total price for each menu item -->
                <p class="order-price">$<?php echo $menu->getTotalPrice() ?></p>
            <?php endforeach ?>
            
            <!-- display total price for the order -->
            <h3>Total price: <?php echo $totalPayment ?></h3>
        </div>
    </body>
</html>
