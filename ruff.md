<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Owl Carousel with Three Dots and Three Images</title>
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    /* Customize styles here */
    .owl-carousel {
      width: 70%;
      margin: auto;
    }

    .owl-dot {
      display: inline-block;
      background: #ddd;
      border-radius: 50%;
      width: 10px;
      height: 10px;
      margin: 0 5px;
      cursor: pointer;
    }

    .owl-dot.active {
      background: #333;
    }
  </style>
</head>
<body>

<div class="owl-carousel owl-theme">
  <div class="item">
    <img src="https://placeimg.com/200/200/any" class="img-fluid" alt="Image 1">
    <h5 class="text-center mt-3">Image 1 Title</h5>
  </div>
  <div class="item">
    <img src="https://placeimg.com/200/200/animals" class="img-fluid" alt="Image 2">
    <h5 class="text-center mt-3">Image 2 Title</h5>
  </div>
  <div class="item">
    <img src="https://placeimg.com/200/200/arch" class="img-fluid" alt="Image 3">
    <h5 class="text-center mt-3">Image 3 Title</h5>
  </div>
</div>

<!-- Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots:true,
      items:1 // Display one item at a time
    });
  });
</script>

</body>
</html>