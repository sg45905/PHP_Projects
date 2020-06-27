<?php
    // import the required files
    require_once('menu.php');
    require_once('data.php');
    
    // get the menu item name from the html
    $menuName = $_GET['name'];
    $menu = Menu::findByName($menus, $menuName);
    $menuReviews = $menu->getReviews($reviews);
?>

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
        <!-- main wrapper -->
        <div class="review-wrapper">
            <!-- menu item -->
            <div class="review-menu-item">
                <!-- menu item image -->
                <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
                
                <!-- menu item name -->
                <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
                
                <!-- if drink - get the type -->
                <?php if ($menu instanceof Drink): ?>
                    <p class="menu-item-type"><?php echo $menu->getType() ?></p>
                
                <!-- if food - get the spiciness -->
                <?php else: ?>
                    <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
                        <img src="chilli.png" class='icon-spiciness'>
                    <?php endfor ?>
                <?php endif ?>
                
                <!-- price for the menu item -->
                <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?></p>
            </div>
            
            <!-- review wrapper -->
            <div class="review-list-wrapper">
                <!-- review list -->
                <div class="review-list">
                    <!-- review title -->
                    <div class="review-list-title">
                        <!-- review icon -->
                        <img src="review.png" class='icon-review'>
                        <h4>Reviews</h4>
                    </div>
                    
                    <!-- reviews -->
                    <?php foreach ($menuReviews as $review): ?>
                        <?php $user = $review->getUser($users) ?>
                        <!-- review -->
                        <div class="review-list-item">
                            <!-- user associated -->
                            <div class="review-user">
                                <!-- if male show male icon -->
                                <?php if ($user->getGender() == 'male'): ?>
                                    <img src="male.png" class='icon-user'>
                                
                                <!-- if female show female icon -->
                                <?php else: ?>
                                    <img src="female.png" class='icon-user'>
                                <?php endif ?>

                                <!-- name of the user -->
                                <p><?php echo $user->getName() ?></p>
                            </div>
                            
                            <!-- body of the review -->
                            <p class="review-text"><?php echo $review->getBody() ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            
            <!-- return to menu link -->
            <a href="index.php">← Back to Menu</a>
        </div>
    </body>
</html>
