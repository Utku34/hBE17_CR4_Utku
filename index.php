<?php
require_once"./component/boot.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
body{
    margin: 0;
}

.hero{
width: 100%;
opacity: 0.4;
}
.hero-sect{
    background-color: black;
}


/* ------------hero------------------------ */

[data-target="#mainMenu"] {
  position: relative;
  z-index: 999;
}

#mainMenu li > a {
  font-size: 12px;
  letter-spacing: 1px;
  color: #fff;
  font-weight: 400;
  position: relative;
  z-index: 1;
  text-decoration: none;
}

.main-header.fixed-nav #mainMenu li > a {
  color: #fff;
  text-decoration: none;
}

#mainMenu li:not(:last-of-type) {
  margin-right: 30px;
}

#mainMenu li > a::before {
  position: absolute;
  content: "";
  width: calc(100% - 1px);
  height: 1px;
  background: #fff;
  bottom: -6px;
  left: 0;

  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  transform: scale(0, 1);
  -webkit-transform-origin: right center;
  -ms-transform-origin: right center;
  transform-origin: right center;
  z-index: -1;

  -webkit-transition: transform 0.5s ease;
  transition: transform 0.5s ease;
}

#mainMenu li > a:hover::before,
#mainMenu li > a.active::before {
  -webkit-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  transform: scale(1, 1);
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
}

.main-header.fixed-nav #mainMenu li > a::before {
  background: #000;
}

.main-header {
  position: fixed;
  top: 25px;
  left: 0;
  z-index: 99;
  width: 100%;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.main-header.fixed-nav {
  top: 0;
  background: #fff;
  -webkit-box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
  box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.main-header.fixed-nav .navbar-brand > img:last-of-type {
  display: block;
}

.main-header.fixed-nav .navbar-brand > img:first-of-type {
  display: none;
}
.navbar-brand {
  color: #fff;
}
.main-header .navbar-brand img {
  max-width: 40px;
  animation: fadeInLeft 0.4s both 0.4s;
}
/* main-header end */
@media (max-width: 991px) {
  /*header starts*/
  .collapse.in {
    display: block !important;
    padding: 0;
    clear: both;
  }

  .navbar-toggler {
    margin: 0;
    padding: 0;
    width: 40px;
    height: 40px;
    position: absolute;
    top: 25px;
    right: 0;
    border: none;
    border-radius: 0;
    outline: none !important;
  }

  .main-header .navbar {
    float: none;
    width: 100%;
    padding-left: 0;
    padding-right: 0;
    text-align: center;
  }

  .main-header .navbar-nav li .nav-link {
    text-align: center;
    padding: 20px 15px;
    border-radius: 0px;
  }

  /**/
  .main-header .navbar-toggler .icon-bar {
    background-color: #fff;
    margin: 0 auto 6px;
    border-radius: 0;
    width: 30px;
    height: 3px;
    position: absolute;
    right: 0;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }

  .main-header .navbar .navbar-toggler .icon-bar:first-child {
    margin-top: 3px;
  }

  .main-header .navbar-toggler .icon-bar-1 {
    width: 10px;
    top: 0px;
  }

  .main-header .navbar-toggler .icon-bar-2 {
    width: 16px;
    top: 12px;
  }

  .main-header .navbar-toggler .icon-bar-3 {
    width: 20px;
    top: 21px;
  }

  .main-header .current .icon-bar {
    margin-bottom: 5px;
    border-radius: 0;
    display: block;
  }

  .main-header .current .icon-bar-1 {
    width: 18px;
  }

  .main-header .current .icon-bar-2 {
    width: 30px;
  }

  .main-header .current .icon-bar-3 {
    width: 10px;
  }

  .main-header .navbar-toggler:hover .icon-bar {
    background-color: #fff;
  }

  .main-header .navbar-toggler:focus .icon-bar {
    background-color: #fff;
  }
  .main-header{
    background-color: #000;
  }
}

.d2{
    background-color: white;
    display: inline-block;
    font-size: 20px;
    letter-spacing: 2px;
    border-radius: 10px;
    margin-left: 130px;


}
.d2 p {
    padding: 12px;
}
.img2{
    border-radius: 10px;
    margin-left: 60px;
    transition: 0.8s;
}
.img2:hover{
    box-shadow: 0px 0px 20px 1px #000;
    transition: 0.2s;
}

.h1-2{
    margin-left: 18px;
    transition: 0.5s;
}
.h1-2:hover{
    transition: 0.2s;
    letter-spacing: 2px;
}
.f111{
margin-top: 250px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
box-shadow: 0px 0px 10px 1px #000;

    
}

.th11{
font-size: 12px;

}




/* ---------------------hero-----------------end------------- */


</style>


</head>
<body style="background-color: #f0f0fa;
">
<!-- -------------------Hero-----------START------------ -->

<div class="hea1">
<header style="background-color: rgba(0,0,0, 0.4); margin-top: -35px; padding-top: 18px; padding-bottom: 15px;"
 class="main-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-0">
        <a class="navbar-brand" href="/mojo">
					    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="index.php?page=home" class="active active-first">Home</a>
            </li>
            <li>
              <a href="index.php?page=media">Our Media</a>
            </li>
            <li>
              <a href="index.php?page=add-media">Add Your Media</a>
            </li>
            <li>
              <a href="https://www.utku.at/" target="_blank">About me</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>
  </div>




<!-- -------------------Hero-----------section---END--------- -->







<!-- -------------------------PHP------------SECTION--------- -->

<?php
require_once "./db_connect.php";

$sql = "SELECT * from media";
$result = 
mysqli_query($conn,$sql);
$tbody = "";
// var_dump_pretty($result);
// $row = mysqli_fetch_assoc($result);
// var_dump_pretty($row);#
if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_assoc($result)) {
        $tbody .= "
<tr>
            <td><img class='img-thumbnail' src='pictures/" . $row['image'] . "'</td>
           <td>" . $row['title'] . "</td>
           <td>" . $row['short_description'] . "</td>
           <td>" . $row['type'] . "</td>
           <td>" . $row['author_first_name'] . "</td>
           <td>" . $row['author_last_name'] . "</td>
           <td>" . $row['publisher_name'] . "</td>
           <td>" . $row['publisher_address'] . "</td>
           <td>" . $row['publish_date'] . "</td>


           <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>
";
    }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}



if ($_GET['page']== 'media') {
   echo"<br><br><br><h1>Media Page</h1>";
    
echo"

<div class='manageProduct w-75 mt-3'>
<div class='mb-3'>
    <a href='create.php'><button class='btn btn-primary' type='button'>Add product</button></a>
</div>
<p class='h2'>media</p>
<table class='table table-striped'>
    <thead class='table-success'>
        <tr>
            <th class='th11'>Picture</th>
            <th class='th11'>Title</th>
            <th class='th11'>Description</th>
            <th class='th11'>type</th>
            <th class='th11'>author first name</th>
            <th class='th11'>author last name</th>
            <th class='th11'>publisher name</th>
            <th class='th11'>publisher address</th>
            <th class='th11'>publish date</th>

        </tr>
    </thead>
    <tbody>
        <?php echo $tbody
    </tbody>
</table>
</div>

";

    }
else if ($_GET['page'] == 'add-media') {
  echo"<p>Add media</p>";

    
} else {  
    echo "
    
    <div class='hero-sect'>
    <img class='hero' src='./images/hero.jpg' alt=''>
</div>


<br><br>

<h1 class='h1-2'>Welcome to our Libary <i class='fa-solid fa-book'></i></h1>

<br><br>
<img class='img2' src='https://img.freepik.com/premium-vector/stack-books_639669-32.jpg?size=338&ext=jpg&uid=P28533848&ga=GA1.2.593356510.1665650587&semt=sph'>


<div class='d2'>
<p>
On our <b>Website</b> you can se allot of Information <br>
about <b>Media (Books, CDs, DVDs)</b> And what is realy <br>
special on our page is that you can <b>Add</b> your own <br>
media on The Website so everyone can see your <br>
<b>artikle</b> and probaly want to buy it. 
</p>
</div>
    
    
    ";


    }












?>

<!-- ---------footer--------- -->
<footer id="sticky-footer" class="f111 flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Utkus Libary</small>
    </div>
  </footer>
<!-- ---------footer---------- -->
    
</body>
</html>