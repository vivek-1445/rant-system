
<?php
include 'database.php';

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $que = "select * from item WHERE `item_id`='$id'";
  $fire1 = mysqli_query($database_connection, $que);
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>YourAgent &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.php">YourAgent</a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Add Your Proparty</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                          <p>info@yourdomain.com</p>
                          <p>(+1) 435 3533</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Connect With Us</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->
    <?php while($w1 = mysqli_fetch_array($fire1)){ ?>
    <section class="site-hero overlay page-inside" style="background-image: url(img/prop_single_img.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left mr-auto" data-aos="fade-up">
            <h1 class="heading">₹<?php echo @$w1['item_rant']; ?></h1>
            <p class="sub-heading"><?php echo @$w1['item_description']; ?></p>
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>

    <!-- END section -->


    <section class="section" id="next-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-md-0">
            <img src="Admin/images/<?php echo @$w1['image']; ?>" alt="Image" class="img-fluid rounded img-shadow" style="width: 100%;">

          </div>

        </div>
        <div class="row mt-5">
          
          <div class="col-lg-8 ml-auto">
            <h3 class="mb-3">₹<?php echo @$w1['item_rant']; ?></h3>
            <p class="mb-5"><?php echo @$w1['item_description']; ?></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
            <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
            <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>

            <p><a href="contact.php?id=<?php ?>" class="btn btn-primary">Contact Me</a></p>
            
          </div>
        </div>
      </div>
    </section>
    <?php } ?>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <img src="img/about_1.jpg" alt="Image" class="img-fluid rounded img-shadow">
          </div>
          <div class="col-lg-4 ml-auto">
            <h3 class="mb-3">Contact Agent</h3>
            <p>I'm John Doe a realtor agent, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
            <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>
            <p><a href="contact.php" class="btn btn-primary">Contact Me</a></p>
            
          </div>
        </div>
      </div>
    </section>


    <?php include 'Front.footer.php'; ?>



