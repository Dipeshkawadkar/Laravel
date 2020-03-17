<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/contact.css" >
    
  

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"rel="stylesheet">
   
  </head>

<body>  
     <!-- NAVABR NAVBAR NAVBAR NAVBAR NAVBAR  NAVABR NAVBAR NAVBAR NAVBAR NAVBAR NAVABR NAVBAR NAVBAR NAVBAR NAVBAR  -->

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark n3">
            <a class="n1 navbar-brand" href="../index">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="n1 nav-link" href="../Rafting">Rafting </a>
                </li>
                <li class="nav-item">
                  <a class="n1 nav-link" href="../Backpacking">Backpacking</a>
                </li>
                <li class="nav-item">
                        <a class="n1 nav-link" href="../canoe">Canoe</a>
                      </li>
                      
                 
                
                <li class="nav-item dropdown">
                  <a class="n1 nav-link dropdown-toggle" href="#" id="navbarDropdown more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                  </a>
                  <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Basecamp">Basecamp</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../packraft">Packraft</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../photography">Photography</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../Trips">All Trips</a>
                  </div>
                </li>
               
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
             
              <div class="container df ">
                <div class="row">
                    <div class="col-lg-9">
                            <h2 class="h2">CONTACT</h2>
                            <br>
                            <p class="p1">708-796-3334&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shivam2614@gmail.com</p><br><br>
                            <p class="p11">We are easy to reach and love to talk about Alaska. Call us anytime. (GMT -09).  Email is fine too and we strive to respond within 24 hours, often less. Or use the form below</p>
                            <p class="p22">Because of the remote nature of our trips and their length, we like to talk with all of our guests before the trip. But if you can’t wait to sign up, send us a Reservation Form and we will contact you shortly to confirm trip details, answer your questions, and make sure you are going to have the trip of a lifetime.</p><br>
                            
                              <div>
<div class="container">
  <form action="sqlcon.php" method="POST" class ="jumbotron">

        
    @if(count($errors) > 0)
      @foreach($error->all() as $error)
      <div class="col-md-8 alert alert-danger">{{$error}}</div>
      @endforeach
    @endif
    @if(session('response'))
      <div class="col-md-8 alert alert-success">
        {{session('response')}}
      </div>
    @endif



  <div class="form-group">
      <label for="name">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter First name" name="firstname">
    </div>
    <div class="form-group">
      <label for="name">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last name" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div><!-- 
    <div class="form-group">
      <label for="email">Date Of Birth:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob">
    </div> -->
  <!--   <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="web">Website:</label>
      <input type="text" class="form-control" id="web" placeholder="Enter WebAddress" name="web">
    </div>
    <div class="form-group">
      <label for="ip">IP:</label>
      <input type="text" class="form-control" id="ip" placeholder="Enter IP" name="ip">
    </div>
    
   -->  <div class="form-group">
      <label for="phno">Mobile Number:</label>
      <input type="text" class="form-control" id="phno" placeholder="Enter Mobile " name="phno">
    </div>
    <div class="form-group">
      <label for="phnoe">Number in your party:</label>
      <input type="text" class="form-control" id="phnoe" placeholder="Number of people" name="phnoe">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  

  </form>
</div>
                                  
                                </div>
                        </div>
                    </div>
                        </div>
                        <!-- <footer>
                                <div id="F1">
                                    <div id="F1-text">
                                        <h3>
                                        COPYRIGHT © ARCTIC WILD 2018
                                        </h3>
                                    </div>
                                    <div id="F1-logo">
                                        <img src="../images/pic3.png" id="F1-logo" class="logo">
                                    </div>
                                    <div>
                                        <h5 id="alm-black">
                                            <a href="mailto:info@arcticwild.com" class="a1">
                                                info@arcticwild.com 
                                            </a>
                                            – 
                                            <a href="tel:9074298203" class="a2">907.479.8203</a>
                                            – Box 80562, Fairbanks, Alaska 99708
                                        </h5>
                                    </div>
                                </div>
                                <div id="F2">
                                    <div id="F2-container">
                                        <div class="F2-text">
                                            <a href="../my.html" class="F2-link">
                                                HOME
                                            </a>
                                            <a href="../Trips/Trips.htm" class="F2-link">
                                                TRIPS
                                            </a>
                                            <a href="../Planning/Planning.html" class="F2-link">
                                                PLANNING
                                            </a>
                                            
                                        </div>
                                        <div class="F2-text">
                                            <a href="../faq/faq.html" class="F2-link">
                                                FAQ
                                            </a>
                                          
                                            <a href="../Contact/Contact.html" class="F2-link">
                                                CONTACT
                                            </a>
                                            <a href="../About/About.html" class="F2-link">
                                                ABOUT
                                            </a>
                                        </div> -->
                                        <!-- <div class="F2-extend">
                                            <div class="Extend-logo">
                                                <a href="#">
                                                    <img src="../images/Facebook.png" class="F2-img">
                                                </a>
                                            </div>
                                            <div class="Extend-logo">
                                                <a href="#">
                                                    <img src="../images/letter-icon.png" class="F2-img">
                                                </a>
                                            </div>
                                            <p class="F2-text2">
                                                Design by <a href="#" class="F2-link">Ratnabh</a>
                                            </p>
                                            <p class="F2-text2">
                                                Marketing by <a href="#" class="F2-link">Ratnabh</a>
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                            </footer>
                        
                        
                                          <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>                    
                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                        </body>
                        </html>


