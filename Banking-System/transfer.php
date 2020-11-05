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
        
        <title>Transfer Now | KBS</title>
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
                    $row_customers = mysqli_fetch_array($run_customers);
                    $customer_id = $row_customers['customer_id'];
                    $customer_name = $row_customers['customer_name'];
                    $current_balance = $row_customers['current_balance'];

                    echo "
                        <form action='transfer.php?customer_id=$c_id' method='post' enctype='multipart/form-data'>
                            <label for='from' style='font-size: 20px;'>Transferring from</label>
                            <div class='form-row'>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='from_acc'>Customer ID</label>
                                    <input type='number' class='form-control' name='from_acc' value='$customer_id' readonly>
                                </div>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='from_acc_name'>Customer Name</label>
                                    <input type='text' class='form-control' name='from_acc_name' value='$customer_name' readonly>
                                </div>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='curr_bal'>Current Balance</label>
                                    <input type='number' class='form-control' name='curr_bal' value='$current_balance' readonly>
                                </div>
                            </div>
                            <br>
                            <label for='to' style='font-size: 20px;'>Transfer to</label>
                            <div class='form-row'>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='to_acc'>Customer ID</label>
                                    <select class='form-control' name='to_acc' required>
                                        <option value='0'>Select Name on Account</option>
                    ";
                                        $get_customers = "select * from customers";
                                        $run_customers = mysqli_query($con, $get_customers);
                                        while($row_customers = mysqli_fetch_array($run_customers)) {
                                            $customer_id = $row_customers['customer_id'];
                                            $customer_name = $row_customers['customer_name'];
                                            echo "<option value='$customer_id'>$customer_name</option>";
                                        }
                    echo "
                                    </select>
                                </div>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='transfer_amt'>Transfer Amount</label>
                                    <input type='number' class='form-control' name='transfer_amt' placeholder='Amount' required>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                    <label for='transfer_msg'>Message for the reciever</label>
                                    <input type='text' class='form-control' name='transfer_msg' placeholder='Message'>
                                </div>
                            </div>
                            <center>
                                <button type='submit' class='btn btn-primary' name='transfer'>Transfer Now</button>
                            </center>
                        </form>
                        <div class='row'>
                            <div class='col'>
                                <center>
                                    <button class='btn'>
                                        <a href='customer.php' style='text-decoration: none; color: #f0ffff;'>Cancel Transfer</a>
                                    </button>
                                </center>
                            </div>
                        </div>
                    ";
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

<?php
    if (isset($_POST['transfer'])) {
        $curr_bal = $_POST['curr_bal'];
        $transfer_date = date('d-m-Y H:i:s a');
        $from_acc = $_POST['from_acc'];
        $from_acc_name = $_POST['from_acc_name'];
        $to_acc = $_POST['to_acc'];
        $transfer_amt = $_POST['transfer_amt'];
        $transfer_msg = $_POST['transfer_msg'];
        
        if($to_acc != 0){
            $get_customer = "select current_balance from customers where customer_id=$from_acc";
            $run_customer = mysqli_query($con, $get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            
            if($transfer_amt <= $row_customer['current_balance']) {
                $f_customer = "update customers set current_balance=$curr_bal-$transfer_amt where customer_id=$from_acc";
                $run_f_customer = mysqli_query($con, $f_customer);

                $t_customer = "select current_balance from customers where customer_id=$to_acc";
                $run_t_customer = mysqli_query($con, $t_customer);
                $row_t_customer = mysqli_fetch_array($run_t_customer);
                $to_curr_bal = $row_t_customer['current_balance'];

                $t_customer_1 = "update customers set current_balance=$to_curr_bal+$transfer_amt where customer_id=$to_acc";
                $run_t_customer_1 = mysqli_query($con, $t_customer_1);
                
                $insert_transfer = "insert into transfers (transfer_date, from_acc, from_acc_name, to_acc, transfer_amt, transfer_msg) values ('$transfer_date', $from_acc, '$from_acc_name', $to_acc, $transfer_amt, '$transfer_msg')";
                $run_transfer = mysqli_query($con, $insert_transfer);
                if($run_f_customer && $run_t_customer && $run_t_customer_1 && $run_transfer) {
                    echo '<script>alert("Transfer complete")</script>';
                    echo '<script>window.open("customer.php", "_self")</script>';
                } else {
                    echo '<script>alert("Unable to transfer")</script>';
                }
            } else {
                echo '<script>alert("Insufficient Balance!!!")</script>';
            }
        } else {
            echo '<script>alert("Please selct an account!!!")</script>';
        }
    }
?>
