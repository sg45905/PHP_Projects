<!-- import the required files -->
<?php 
require_once('data.php');
require_once('menu.php');
?>

<!DOCTYPE html>
<html>
    <!-- head section -->
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        
        <!-- title -->
        <title>Café My-Choice</title>
        
        <!-- css links -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    </head>
    
    <!-- body section -->
    <body>
        <!-- main menu -->
        <div class="menu-wrapper container">
            <!-- brand logo -->
            <h1 class="logo">Café My-Choice</h1>
            
            <!-- display total item count u add to cart -->
            <h3>Item Count: <?php echo Menu::getCount() ?></h3>
            
            <!-- form to place order -->
            <form method="post" action="confirm.php">
                <!-- menu items -->
                <div class="menu-items">
                    <!-- display menu items using for each loop -->
                    <?php foreach ($menus as $menu): ?>
                        <!-- single menu item -->
                        <div class="menu-item">
                            <!-- image to display -->
                            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
                            
                            <!-- item name with a link to details page -->
                            <h3 class="menu-item-name">
                                <a href="show.php?name=<?php echo $menu->getName() ?>">
                                    <?php echo $menu->getName() ?>
                                </a>
                            </h3>
                            
                            <!-- if its a drink - hot/cold -->
                            <?php if ($menu instanceof Drink): ?>
                                <p class="menu-item-type"><?php echo $menu->getType() ?></p>
                            
                            <!-- if not - its a food - spiciness -->
                            <?php else: ?>
                                <?php for ($i=0; $i<$menu->getSpiciness(); $i++): ?>
                                    <img src="chilli.png" class='icon-spiciness'>
                                <?php endfor ?>
                            <?php endif ?>
                            
                            <!-- display price for the item -->
                            <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?> (tax included)</p>
                            
                            <!-- input to get the qty one would like to purchase -->
                            <span>Qty: </span>
                            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
                        </div>
                    <?php endforeach ?>
                </div>
                
                <!-- submit button -->
                <input type="submit" value="Order">
            </form>
        </div>
    </body>
</html>
