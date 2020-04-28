<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
 
  
</head>
<body> 
  
<?php include 'menu.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/auckland.jpg" alt="Auckland" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Auckland</h3>
        <p>We had such a great time in Auckland!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/queenstown.jpg" alt="Queenstown" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Queenstown</h3>
        <p>Thank you, Queenstown!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/rotorua" alt="Rotorua" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Rotorua</h3>
        <p>Geothermal Hotspots</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <section class="my-5">
   <div class="py-5">

     <h2 class="text-center">About us</h2>
   </div>
   <div class="container-fluid">
   <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
       <img src="images/newzealand" class="img-fluid" aboutimg></div>
       <div class="col-lg-6 col-md-6 col-12">
         <p class="py-3">New Zealand is a sovereign island country in the southwestern Pacific Ocean.
            The country has two main landmasses—the North Island, and the South Island—and around 600 
            smaller islands. It has a total land area of 268,000 square kilometres (103,500 sq mi). 
            New Zealand is about 2,000 kilometres (1,200 mi) east of Australia across the Tasman Sea
             and 1,000 kilometres (600 mi) south of the Pacific island areas of New Caledonia, Fiji, 
             and Tonga. </p>
             <a href="about.php" class="btn btn-success">Check more</a>
     </div>
   </div>
   </div>
   
 </section>  
 <section class="my-5">
   <div class="py-5">
 <h2 class="text-center">Our Services</h2>
   </div>
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-4 col-md-4 col-12">
       <div class="card">
  <img class="card-img-top" src="images/transport.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Transport</h4>
    <a href="services.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
       <div class="card">
  <img class="card-img-top" src="images/accomodation.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Accomodation</h4>
    
    <a href="services.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
       </div>
       <div class="col-lg-4 col-md-4 col-12">
       <div class="card">
  <img class="card-img-top" src="images/health.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Health and Safety</h4>
    <a href="services.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
       </div>
    
   
 </section>
   <section class="my-5">
   <div class="py-5">

     <h2 class="text-center">Gallery</h2>
     
     <div class="container-fluid">
     
   <div class="row">
     
     <div class="col-lg-4 col-md-4 col-12">
       <img src="images/huka.jpg" class="img-fluid image_class" >
      </div>
      <div class="col-lg-4 col-md-4 col-12">
       <img src="images/harbour.jpg" class="img-fluid image_class">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
       <img src="images/britomart.jpg" class="img-fluid image_class">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
       <img src="images/maratai.jpg" class="img-fluid image_class">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
       <img src="images/titirangi.jpg" class="img-fluid image_class">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
       <img src="images/Whakapapa.jpg" class="img-fluid image_class">
      </div>
     </div>
   
     </div>
   </div>
  </section>
  <section class="my-5">
   <div class="py-5">
 <h2 class="text-center">Contact us</h2>
   </div>
   <div class="w-50 m-auto">
     <form action="userinfo.php" method="post">
       <div class="form-group">
         <label>Username</label>
         <input type="text" name="user" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
         <label>Mobile number</label>
         <input type="text" name="mobile" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
         <label>Comments</label>
         <textarea class="form-control" name="comment"></textarea>
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
     </form>
   </div>

  </section>
 <footer>
  <p class="p-2 mb-0 bg-dark text-white mt-5 text-center" >NZ Travelogue </p3>
</footer>
  


</body>
</html>
