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



<script type="text/javascript">
function myfunction()
    {
        alert("You need to log in to buy or sell a book");
    }
</script>


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
                    

            <?php session_start();
                if(!(isset($_SESSION["username"])))
                {
                    echo '
                        <a class="nav-link waves-effect waves-light" href="signin.php" onclick="myfunction()" >Sell</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="signin.php" onclick="myfunction()">Buy</a>
                    </li>
                    <li class="nav-item"><a class="nav-link waves-effect waves-light" href="signin.php">SignUp/LogIn</a></li>
                            <li class="nav-item">
                    ';

                }
                else
                {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="sell.php" >Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="buy.php">Buy</a>
                    </li>
                    <li class="nav-item"><a href="Database/user_dashboard.php" class="nav-link waves-effect waves-light">'.$_SESSION["username"].'</a></li>
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

<div class="container " >
    
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
      <div class="carousel-inner" >
        <div class="carousel-item active">
          <div class="view">
                        <img class="d-block w-100" src="imagessqr/alaskasqr.jpg" alt="First slide"  height="600" width="50%">
            <div class="mask rgba-black-light"></div>
          </div>
          <!-- <div class="carousel-caption"><strong>
            <h3 class="h3-responsive">Looking For Alaska </h3>
            <p>by John Green</p>
        </strong>
          </div> -->
        </div>
      <div class="carousel-item">
          <div class="view">
                      <img class="d-block w-100" src="imagessqr/11sqr.jpg" alt="First slide"  height="600" width="600">

<!--           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg" alt="Second slide">
 -->            <div class="mask rgba-black-light"></div>
          </div>
         <!--  <div class="carousel-caption">
            <h3 class="h3-responsive">Eleven Minutes</h3>
            <p>Paula Coelho</p>
          </div> -->
        </div>
        <div class="carousel-item">
          <div class="view">
                      <img class="d-block w-100" src="imagessqr/aurorasqr.jpg" alt="First slide"  height="600" width="600">

<!--           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg" alt="Second slide">
 -->            <div class="mask rgba-black-light"></div>
          </div>
          <!-- <div class="carousel-caption">
            <h3 class="h3-responsive">Aurora</h3>
            <p>By Kim Stanley Robinson</p>
          </div> -->
        </div>
        <div class="carousel-item">
          <div class="view">
                      <img class="d-block w-100" src="imagessqr/callmesqr.jpg" alt="First slide"  height="600" width="600">

<!--           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg" alt="Second slide">
 -->            <div class="mask rgba-black-light"></div>
          </div>
          <!-- <div class="carousel-caption">
            <h3 class="h3-responsive">Call Me By Your Name</h3>
            <p>Andre Aciman</p>
          </div> -->
        </div>
        <div class="carousel-item">
          <div class="view">
                      <img class="d-block w-100" src="imagessqr/darklanesqr.jpg" alt="First slide"  height="600" width="600">

<!--           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg" alt="Second slide">
 -->            <div class="mask rgba-black-light"></div>
          </div>
<!--           <div class="carousel-caption">
            <h3 class="h3-responsive">The Dark Lane</h3>
            <p>Sarah Bailey</p>
          </div> -->
        </div>
        
        <div class="carousel-item">
          <div class="view"> 
                      <img class="d-block w-100" src="imagessqr/bluebirdsqr.jpg" alt="First slide"  height="600" width="50%">

<!--           <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg" alt="Third slide">
 -->            <div class="mask rgba-black-light"></div>
          </div>
       <!--    <div class="carousel-caption">
            <h3 class="h3-responsive">Blue Bird</h3>
            <p>Attice Locke</p>
          </div> -->
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<br><br>



<div class="container jumbotron">
<h1 class="h1-responsive" >Genres</h1>
</div>

<div class="container">
    <div class="row ">
<div class="col-lg-3 col-md-6 mb-4 " >

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="images/dracula.jpg" class="img-fluid fixed" alt="Dracula">
                            <div class="stripe dark">
                                <a>
                                    <p><a class="select" href=""><strong>Horror</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
               

<div class="col-lg-3 col-md-6 mb-4 ">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="images/outlander.jpg" class="img-fluid fixed" style="width:700px;" alt="Outlander">
                            <div class="stripe dark">
                                <a>
                                    <p><a class="select" href=""><strong>Romance</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <div class="col-lg-3 col-md-6 mb-4 ">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="images/redmoon.jpg" class="img-fluid fixed" alt="Red Moon">
                            <div class="stripe dark">
                                <a>
                                    <p><a class="select" href=""><strong>Science Fiction</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <div class="col-lg-3 col-md-6 mb-4 ">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="images/six.jpg" class="img-fluid fixed" alt="Six">
                            <div class="stripe dark">
                                <a>
                                    <p><a class="select" href=""><strong>Crime/Mystery</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
</div></div>


<div class="container jumbotron">
<h1 class="h1-responsive">Books</h1>
</div>


<?php

$val=0;
// Create connection
$conn = new mysqli("localhost","root","","book_webpage");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo ' <br>
<div class="container">
    <div class="row">';

$sql = "SELECT * FROM bookdescription ORDER BY Book_Id DESC";
$result = $conn->query($sql);

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
$val=$val+1;
if(($bookid)%4==0)
{
    echo '<div class="container">
    <div class="row">
    ';
}
if($val==20){break;}
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
                        <p class="card-text"><button class="btn btn-indigo" ><a href="bookdescriptionpage.php" style="color:white; font-weight:bold;">See More Details</a></button>
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



<!--
<center>OR</center>



<div class="container">
            <div class="  row">

              <div class="col-lg-4 col-md-12 mb-4">

                <div class="card">

                 

                  <div class="card-body">
                    <h4 class="card-title">Book 1 </h4>
                    <div class="text-md-right">Location</div>
                    <p class="card-text"> Description- Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#!" class="btn btn-indigo waves-effect waves-light">Button</a>
                  </div>

            </div>
        </div>
              <div class=" col-lg-4 col-md-6 mb-4">

                <div class="card">

                  <div class="card-body">
                    <h4 class="card-title">Book 2</h4>
                    <div class="text-md-right">Location</div>
                    <p class="card-text"> Description- Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-indigo waves-effect waves-light">Button</a>
                  </div>

                </div>

              </div>

              <div class="col-lg-4 col-md-6 mb-4">

                <div class="card">


                  <div class="card-body">
                    <h4 class="card-title">Book 3</h4>
                    <div class="text-md-right">-By Author</div>
                    <p class="card-text">Job Description- Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-indigo waves-effect waves-light">Button</a>
                  </div>
</div></div></div></div>
</div>

   


<center>OR</center>




    <main class="mt-5">

        <div class="container mar">

            <div class="row">

                <div class="col-md-4 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-light"></div>
                    </div>

                </div>

                <div class="col-md-8 mb-4">

                    <h2>Some awesome heading</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem
                        voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis
                        natus quaerat!</p>
                    <a href="https://mdbootstrap.com/" class="btn btn-indigo waves-effect waves-light">Get it now!</a>

                </div>

            </div>
            

    <main class="mt-5">

        <div class="container mar">

            <div class="row">

             

                <div class="col-md-8 mb-4">

                    <h2>Some awesome heading</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem
                        voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis
                        natus quaerat!</p>
                    <a href="https://mdbootstrap.com/" class="btn btn-indigo waves-effect waves-light ">Get it now!</a>

                </div>

                <div class="col-md-4 mb-4">

                    <div class="view overlay z-depth-1-half">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-light"></div>
                    </div>

                </div>

            </div>
</div>
</main>
-->
</div>

                <div id="contact" class="container-fluid" style="width:100%;text-align:justify">
                    <div class="row text-center" >
                        <iframe style="border-width:0px;     height: 500px;    width: 100%; "  scrolling="auto" src="project.php"></iframe>
                    </div>
                </div>


</body>
</html>