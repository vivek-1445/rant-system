<?php
include 'Front_header.php';
include 'database.php';

$que = "select * from item";
$fire1 = mysqli_query($database_connection,$que);
?>
<?php
  if(isset($_POST['review']))
  {?>
  <script type="text/javascript">
    window.location.href = "Front-review.php";
  </script>
<?php }?>

<!-- END section -->
<section class="section visit-section" id="next-section">
<!--  Search Area-->
  <center>
    <form>
  <div data-aos="fade-up">
    <input type="text" name="search_box"  id="search_box" class="form-control"   placeholder="search you found it." style="width: 37%;">
  </div>
    </form>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading" data-aos="fade-up">Popular Properties</h2>
      </div>
    </div>
    <div class="row">
      <?php while($w1 = mysqli_fetch_array($fire1)){ ?>
      <div class="col-lg-3 col-md-6 visit mb-3"  >
      <a href="property-single.php?id=<?php echo $w1['item_id']; ?>"><img src="Admin/images/<?php echo @$w1['image']; ?>" style="height:52%; width: 100%;" data-aos="fade-up" alt="Image placeholder" class="img-fluid rounded"> </a>
      <h3  data-aos="fade-up"><a href="property-single.php">₹</a><?php echo @$w1['item_rant']; ?></h3>
        <div  data-aos="fade-up" class="reviews-star float-left">
          <?php echo @$w1['item_type']; ?>
        </div>
        <br>
      <div  data-aos="fade-up" class="reviews-star float-left">
        <?php echo @$w1['item_description']; ?>
      </div>
    </div>
    <?php } ?>


  </div>
<!--    <tr>-->
<!--      <td colspan="10" style="text-align: center;">-->
<!--        --><?php //for ($i=0; $i < $number1 ; $i++) { ?>
<!--          <a href="index.php?page=--><?php //echo $i; ?><!--">--><?php //echo $i+1; ?><!--</a>-->
<!--        --><?php //} ?>
<!--      </td>-->
<!--    </tr>-->
</section>

<?php

$review = "select * from `customer-review`";
$fire_review = mysqli_query($database_connection,$review);

?>
<form method="post">
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2>Happy Customers</h2>
      </div>
    </div>
    <div class="js-carousel-1 owl-carousel">
      <div class="testimonial text-center">
        <div class="author-image mb-3">
          <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
        </div>
        <blockquote>
          <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
        </blockquote>
        <p><em>&mdash; Jean Smith</em></p>
      </div>
      <?php while($w2 = mysqli_fetch_array($fire_review)){ ?>
      <div class="testimonial text-center">
        <div class="author-image mb-3">
          <img src="Admin/images/<?php echo @$w2['image']; ?>" alt="Image placeholder" class="rounded-circle">
        </div>
        <blockquote>
          <p>&ldquo;<?php echo @$w2['review'];  ?>&rdquo;</p>
        </blockquote>
        <p><em>&mdash; <?php echo @$w2['name'];  ?></em></p>
      </div>
      <?php } ?>
    </div>
    <input type="submit" name="review" value="Give your Review" class="btn btn-primary text-white px-4" style="margin-top: 7px; float: right;">

  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <img src="img/about_1.jpg" alt="Image" class="img-fluid rounded img-shadow">
      </div>
      <div class="col-lg-4 ml-auto">
        <h3 class="mb-3">About Me</h3>
        <p>I'm John Doe a realtor agent, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero, officia, aliquam doloremque totam.</p>
        <p>Ratione natus expedita iusto, minus cumque vitae quo culpa reiciendis aspernatur aliquam veritatis magnam non, dicta nemo inventore, nisi quas dolores. Modi laboriosam sunt aliquid rem, deserunt quis? Porro, hic.</p>
        <p><img src="img/signature.jpg" alt="Image" class="img-fluid w-25"></p>
      </div>
    </div>
  </div>
</section>
</form>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
        <span class="ion-android-calendar display-3 text-primary"></span>
        <h3 class="card-title">Deal On Time</h3>
        <p>Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero</p>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
        <span class="ion-android-create display-3 text-primary"></span>
        <h3 class="card-title">Good Reviews</h3>
        <p>Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero</p>
      </div>
      <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
        <span class="ion-android-hangout display-3 text-primary"></span>
        <h3 class="card-title">24/7 Support</h3>
        <p>Saepe omnis beatae libero quisquam ex nostrum repellendus, consectetur suscipit. Velit iusto ducimus sit quos officiis nesciunt libero</p>
      </div>
    </div>
  </div>
</section>
<section class="section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-8">
        <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
        <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
        <div class="media media-custom d-block mb-4">
          <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">How to pick right realtor?</a></h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
        <div class="media media-custom d-block mb-4">
          <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">How to pick right realtor?</a></h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
        <div class="media media-custom d-block mb-4">
          <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">How to pick right realtor?</a></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END section -->
<?php include 'Front.footer.php'; ?>