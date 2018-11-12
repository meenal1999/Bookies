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
            <a class="navbar-brand" href="#">Company Name</a>

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
                    echo '<li class="nav-item"><a href="Database/user_dashboard.php">'.$_SESSION["username"].'</a></li>
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
        <!--/.Navbar-->s

    </header>


<br>
<br>
<br>





<?php
$servername = "localhost";
$username = "username";

// Create connection
$conn = new mysqli("localhost","root","","book_webpage");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo ' <br>
<div class="container">
    <div class="row">';

$sql = "SELECT * FROM bookdescription";
$result = $conn->query($sql);

echo '<div class="container jumbotron">
<h1 class="h1-responsive">Books</h1>
</div>';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $bookid=$row["Book_Id"];
        $name=$row["Name"];
        $author=$row["Author"];
        $descr=$row["Description"];
        $price=$row["Price"];
        $genre=$row["Genre"];

        // echo $row["Book_Id"]." ". $row["Name"]. " " . $row["Author"]. $row["Price"]." ". $row["Genre"]." ". $row["Description"]." ". $row["Seller_Id"]." ". $row["Buyer_Id"]."<br>";

if(($bookid-1)%4==0)
{
    echo '<div class="container">
    <div class="row">
    ';
}
if($bookid==24){break;}
echo '






        <div class="col-md-3">
                <section>

                    <!-- Card Regular -->
                    <div class="card card-cascade mb-4">

                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
                        <a>
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                      </div>


                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title"><strong>';

                        echo $row["Name"];
                        echo '</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">';
                        echo $author;
                        echo '</h6>
                        <div class="text-md-right">Price : ';
                        echo $price;
                        echo '</div><br>
                        <!-- Text -->
                        <p class="card-text">
                        <form action="bookdescriptionpage.php" method="get">
						  
						  <input type="submit" value="Submit" class="btn btn-indigo" style="color:white; font-weight:bold;">
						</form>
                        
                        </p>
                        </p>

                      </div>

                    </div>
                    <!-- Card Regular -->

                </section>
            </div>

           

';

    }

}

echo "<br>";    // output data of each row
    


?>







</div>
</body>
</html>