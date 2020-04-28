<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
   
</head>

<body>
<?php include 'menu.php'; ?>
<section class="my-5">
   <div class="py-5">
 <h2 class="text-center">Contact us</h2>
   </div>
   <div class="w-50 m-auto">
     <form action="userinfo.php" method="post">
       <div class="form-group">
         <label>Username</label>
         <input type="text" name="user" autocomplete="off" class="form-control" required>
       </div>
       <div class="form-group">
         <label>Email</label>
         <input type="text" name="email" autocomplete="off" class="form-control" >
       </div>
       <div class="form-group">
         <label>Mobile number</label>
         <input type="text" name="mobile" autocomplete="off" class="form-control" >
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