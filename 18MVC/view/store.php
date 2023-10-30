<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
          class="text-black">Store</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
        <div id="slider-range" class="border-primary"></div>
        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
      </div>
      <div class="col-lg-6">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Reference</h3>
        <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
          data-toggle="dropdown">Reference</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
          <a class="dropdown-item" href="#">Relevance</a>
          <a class="dropdown-item" href="#">Name, A to Z</a>
          <a class="dropdown-item" href="#">Name, Z to A</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Price, low to high</a>
          <a class="dropdown-item" href="#">Price, high to low</a>
        </div>
      </div>
    </div>
    <!-- product add start -->
    <?php foreach ($pharmacy as $pharmacy) {
      ?>

      <div class="row">


        <div class="col-sm-6 col-lg-4 text-center item mb-4">
          <span class="tag">Sale</span>
          <a href="shop-single.html"> <img src="<?php echo $pharmacy->image ?>" height="70" width="70px" alt=""></a>
          <h3 class="text-dark"><a href="">
              <?php echo $pharmacy->description ?>
            </a></h3>
          <p class="price"><del>95.00</del> Rs.
            <?php echo $pharmacy->price ?>
          </p>
        </div>



      </div>

      <div class="col-sm-6 col-lg-4 text-center item mb-4">


      </div>
      <div class="col-sm-6 col-lg-4 text-center item mb-4">
      </div>
    <?php } ?>

  </div>
  <div class="col-sm-6 col-lg-4 text-center item mb-4">







  </div>
  <div class="row mt-5">
    <div class="col-md-12 text-center">
      <div class="site-block-27">
        <ul>
          <li><a href="#">&lt;</a></li>
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&gt;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>













<div class="site-section bg-secondary bg-image"
  style="background-image: url('<?php echo $this->baseurl; ?>images/bg_2.jpg');">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <a href="#" class="banner-1 h-100 d-flex"
          style="background-image: url('<?php echo $this->baseurl; ?>images/bg_1.jpg');">
          <div class="banner-1-inner align-self-center">
            <h2>Pharma Products</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
            </p>
          </div>
        </a>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0">
        <a href="#" class="banner-1 h-100 d-flex"
          style="background-image: url('<?php echo $this->baseurl; ?>images/bg_2.jpg');">
          <div class="banner-1-inner ml-auto  align-self-center">
            <h2>Rated by Experts</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>