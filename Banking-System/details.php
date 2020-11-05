<!DOCTYPE html>

<?php
    include("functions.php");
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="kyra banking, banking, best banking, banking solutions">
        
        <link rel="icon" href="images/logo.png" type="image/png">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" media="all">
        
        <title>Customer Details | KBS</title>
    </head>
    
    <body>
        <div class="container">
            <div class="alert alert-secondary" role="alert">
                <li style="list-style-type: none;">
                    <a style="padding-right: 10px; text-decoration: none;" href="tel:+919407030722" target="_blank">
                        <i class="fa fa-phone"></i> +91 9407030722
                    </a>
                </li>
                <li style="list-style-type: none;">
                    <a style="padding-right: 10px; text-decoration: none;" href="mailto:sg45905@gmail.com" target="_blank">
                        <i class="fa fa-envelope-o"></i> sg45905@gmail.com
                    </a>
                </li>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand pr-0 pr-sm-5" href="index.php">
                    <img src="images/logo.png" height="40px" width="40px">
                    KYRA Banking Systems
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto pl-0 pl-sm-5">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.php">View Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="results.php" enctype="multipart/form-data">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="user_query">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>

        <br>

        <div class="container">
            <?php
                if(isset($_GET['customer_id'])) {
                    $c_id = $_GET['customer_id'];
                    $get_customers = "select * from customers where customer_id='$c_id'";
                    $run_customers = mysqli_query($con, $get_customers);

                    while ($row_customers = mysqli_fetch_array($run_customers)) {
                        $customer_id = $row_customers['customer_id'];
                        $customer_name = $row_customers['customer_name'];
                        $customer_email = $row_customers['customer_email'];
                        $current_balance = $row_customers['current_balance'];
                        $customer_image = $row_customers['customer_image'];
                        echo "
                            <center>
                                <img src='images/customers/$customer_image'>
                            </center>
                            <br>
                            <table class='table table-bordered' style='text-align: center; font-size: 20px;'>
                                <tr>
                                    <th scope='col'>Customer ID</th>
                                    <td>$customer_id</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Customer Name</th>
                                    <td>$customer_name</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Customer Email</th>
                                    <td>$customer_email</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Current Balance</th>
                                    <td>$current_balance</td>
                                </tr>
                            </table>
                            <div class='row'>
                                <div class='col-6'>
                                    <center>
                                        <button class='btn'>
                                            <a href='Customer.php' style='text-decoration: none; color: #f0ffff;'>Back to all customers</a>
                                        </button>
                                    </center>
                                </div>
                                <div class='col-6'>
                                    <center>
                                        <button class='btn'>
                                            <a href='transfer.php?customer_id=$c_id' style='text-decoration: none; color: #f0ffff;'>Transfer Money</a>
                                        </button>
                                    </center>
                                </div>
                            </div>
                        ";
                    }
                }
            ?>
        </div>

        <div class="site-social-float">
            <a class="attesa-social" href="https://wa.me/919407030722" target="_blank" rel="noopener" title="Whatsapp">
                <i class="fa fa-whatsapp" style="color: #25d366">
                    <span class="screen-reader-text">Whatsapp</span>
                </i>
            </a>
            <a class="attesa-social" href="https://www.facebook.com/sg45905" target="_blank" rel="noopener" title="Facebook">
                <i class="fa fa-facebook" style="color: #3b5598">
                    <span class="screen-reader-text">Facebook</span>
                </i>
            </a>
            <a class="attesa-social" href="https://www.linkedin.com/in/sg45905/" target="_blank" rel="noopener" title="LinkedIn">
                <i class="fa fa-linkedin" style="color: #0e76a8;">
                    <span class="screen-reader-text">LinkedIn</span>
                </i>
            </a>
            <a class="attesa-social" href="https://www.instagram.com/sg.2906" target="_blank" rel="noopener" title="Instagram">
                <i class="fa fa-instagram" style="color: #e1306c">
                    <span class="screen-reader-text">Instagram</span>
                </i>
            </a>
            <a class="attesa-social" href="https://github.com/sg45905" target="_blank" rel="noopener" title="Github">
                <i class="fa fa-github" style="color: white">
                    <span class="screen-reader-text">Github</span>
                </i>
            </a>
        </div>

        <div class="text-center bg-dark footer">
            &copy; 2020 by <a href="index.html">KYRA Banking Systems</a> | Developed and maintained by <a href="https://sg45905.github.io" target="_blank">Sarthak Gupta</a>
            <br>
            <a style="padding-right: 10px;" href="https://wa.me/919407030722" target="_blank">
                <i class="fa fa-whatsapp"></i>
            </a>
            <a style="padding-right: 10px;" href="https://facebook.com/sg45905" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <a style="padding-right: 10px;" href="https://linkedin.com/in/sg45905" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
            <a style="padding-right: 10px;" href="https://instagram.com/sg.2906" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
            <a style="padding-right: 10px;" href="https://github.com/sg45905" target="_blank">
                <i class="fa fa-github"></i>
            </a>
        </div>
        
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-arrow-up"></i>
        </button>

        <script>
            mybutton = document.getElementById("myBtn");

            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            $(document).ready(
                function(){
                    var elem = $(this).attr("href");
                
                    $('html, body').animate(
                        {
                            scrollTop: $(elem).offset().top
                        },
                        
                        'slow'
                    );
                }
            );
        </script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    </body>
</html>
