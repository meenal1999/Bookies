<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DSW PROJECT</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>
<style type="text/css">
    .navbar-nav li:hover{
        background-color: black;
        color: white;
    }


.jumbotron{
    background: linear-gradient(to right, #4568dc , #b06ab3);
    color: white;
}
    .fa-bolt:before, .fa-flash:before {
    content: "\f0e7";
}

*, ::after, ::before {
    box-sizing: border-box;
}

.fa-linkedin:before {
    content: "\f0e1";
}

.fa-twitter:before {
    content: "\f099";
}
.fa-facebook-f:before, .fa-facebook:before {
    content: "\f09a";
}
.fb-ic:hover {
    color: #3b5998;
}
.fixed{
      width: 400px;
  height: 400px;
  overflow: hidden;
  border: 1px solid black;

}

.mar
{
    margin-top: 20px;
}
.collection-card .stripe {
    position: absolute;
    bottom: 3rem;
    width: 100%;
    text-align: center;
    padding: 1.2rem;
}
.collection-card .stripe.dark {
    background-color: rgba(0,0,0,.7);
    color: white;
}
.select{
    color: white;
}
.carousel-caption{
    font-weight: bold;
    font-weight: 700;
    color: #FFD700;
}
</style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
  </head>
  <body>
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark indigo fixed-top" style="   background: linear-gradient(to right, #4568dc , #b06ab3);
    color: white;
}">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">Bookies</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect waves-light" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="#">Buy</a>
                    </li>

            <?php session_start();
                if(!(isset($_SESSION["username"])))
                {
                    echo '<li class="nav-item"><a class="nav-link waves-effect waves-light" href="signin.php">SignUp/LogIn</a></li>';

                }
                else
                {   
                    $user= $_SESSION["username"];
                    $servername = "localhost";
                    $username = "username";
                    echo '<li class="nav-item"><a href="Database/user_dashboard.php" class="nav-link waves-effect waves-light">'.$_SESSION["username"].'</a></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect waves-light" href="#">Wallet</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">History</a>
                            <a class="dropdown-item waves-effect waves-light" href="logout.php">Log out</a>
                        </div>
                    </li>';
                    }
            ?>            
            <li><a></a></li>
                    <!-- Dropdown -->
                    

                </ul>
                <!-- Links -->

                <form class="form-inline waves-light waves-light ml-auto" mdbWavesEffect>
                    <div class="md-form mt-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" width="30%">
                        <!-- <button mdbBtn color="success" outline="true" size="sm" class="my-0 waves-light" type="submit" mdbWavesEffect>Search</button> -->
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->

    </header>


<br>
<br>
<br>
<br>


<!-- Material form contact -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Contact us</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormName" class="form-control">
                <label for="materialContactFormName">Name</label>
            </div>

            <!-- E-mail -->
            <div class="md-form">
                <input type="email" id="materialContactFormEmail" class="form-control">
                <label for="materialContactFormEmail">E-mail</label>
            </div>

            <!-- Default unchecked -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked">Default unchecked</label>
</div>
            
            <!-- Subject -->
            <span>Subject</span>
            <select class="mdb-select">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a bug</option>
                <option value="3">Feature request</option>
                <option value="4">Feature request</option>
            </select>

            <!--Message-->
            <div class="md-form">
                <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>

            <!-- Copy -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->



<!-- <?php session_start();
    echo ' .$_SESSION["username"]. ';
?> -->

<?php
echo 'username is '.$user;
$conn = new mysqli("localhost","root","","book_webpage");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo ' <br>
<div class="container">
    <div class="row">';

$sql1 = "SELECT max(Book_Id) FROM bookdescription ";
$id = $conn->query($sql);

$bookid= $id+1;
$sql2 = "SELECT Acc_Id FROM account WHERE Name= '$user' ";
$accid = $conn->query($sql2);
$sql3="UPDATE account SET Sell=(Sell+1) WHERE Acc_Id=$accid";
$conn->query($sql3);

$bookid=$row["Book_Id"];
$name=$row["Name"];
$author=$row["Author"];
$descr=$row["Description"];
$price=$row["Price"];
$genre=$row["Genre"];

echo $row["Book_Id"]." ". $row["Name"]. " " . $row["Author"]. $row["Price"]." ". $row["Genre"]." ". $row["Description"]." ". $row["Seller_Id"]." ". $row["Buyer_Id"]."<br>";



$sql4 = "INSERT values INTO bookdescription ($bookid,$name,$author,$price,$genre,$description,$accid,0) ";
$conn->query($sql3);

// $sql5="";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//    while($row = $result->fetch_assoc()) {
       
//}}

?>























</body></html>