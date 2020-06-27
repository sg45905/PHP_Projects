<!DOCTYPE html>
<html>
    <!-- head section -->
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">

        <!-- title -->
        <title>Brand</title>

        <!-- css links -->
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
                    <li>Tab 1</li>
                    <li>Tab 2</li>
                    <li class="selected">Contact</li>
                </ul>
            </div>
        </div>

        <!-- main body -->
        <div class="main">
            <!-- contact form -->
            <div class="contact-form">
                <!-- form heading -->
                <div class="form-title">Contact</div>

                <!-- main form -->
                <form method="post" action="sent.php">
                    <!-- Name label -->
                    <div class="form-item">Name</div>
                    <!-- input field for name -->
                    <input type="text" name="name">

                    <!-- Age label -->
                    <div class="form-item">Age</div>
                    <!-- select option field for age -->
                    <select name="age">
                        <option value="unselected">Select your age</option>
                        <!-- for loop to print options for age -->
                        <?php 
                            for ($i = 6; $i <= 100; $i++) {
                                echo "<option value='{$i}'>{$i}</option>";
                            } 
                        ?>
                    </select>

                    <!-- Category label -->
                    <div class="form-item">Category</div>
                    <!-- categories -->
                    <?php 
                        $types = array('About Us', 'Comments/Opinions', 'Job inquiry', 'Media', 'Payment', 'Other');
                    ?>
                    <!-- select option field for category -->
                    <select name="category">
                        <option value="unselected">Select reason for contacting us</option>
                        <!-- for loop to print options for category -->
                        <?php
                            foreach ($types as $type) {
                                echo "<option value='{$type}'>{$type}</option>";
                            }
                        ?>
                    </select>

                    <!-- Message label -->
                    <div class="form-item">Message</div>
                    <!-- text area to input the message by the user -->
                    <textarea name="body"></textarea>

                    <!-- submit button -->
                    <input type="submit" value="Submit">
                </form>
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
