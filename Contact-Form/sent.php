<!DOCTYPE html>
<html>
    <!-- head section -->
    <head>
        <!-- meta tage -->
        <meta charset="utf-8">
        
        <!-- title -->
        <title>Brand</title>
        
        <!-- css link -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>

    <!-- body section -->
    <body>
        <!-- main header -->
        <div class="header">
            <!-- brand name -->
            <div class="header-left">Brand</div>
            
            <!-- navigation tabs -->
            <div class="header-right">
                <ul>
                    <li>About Progate</li>
                    <li>Recruitment</li>
                    <li class="selected">Contact</li>
                </ul>
            </div>
        </div>
        
        <!-- main body -->
        <div class="main">
            <!-- response heading -->
            <div class="thanks-message">Thanks for contacting us!</div>
            
            <!-- response -->
            <div class="display-contact">
                <div class="form-title">Submitted</div>
                
                <!-- name -->
                <div class="form-item">■ Name</div>
                <?php echo $_POST['name']; ?>
                
                <!-- age -->
                <div class="form-item">■ Age</div>
                <?php echo $_POST['age']; ?>
                
                <!-- category -->
                <div class="form-item">■ Category</div>
                <?php echo $_POST['category']; ?>
                
                <!-- message -->
                <div class="form-item">■ Message</div>
                <?php echo $_POST['body']; ?>
            </div>
        </div>
        
        <!-- footer -->
        <div class="footer">
            <!-- footer navigation -->
            <div class="footer-left">
                <ul>
                    <li>Tab 1</li>
                    <li>Tab 2</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </body>
</html>
