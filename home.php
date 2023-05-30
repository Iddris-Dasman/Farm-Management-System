<?php 
  include("header.php");

?>

<style>
  .footer-icon {
    height: 60px;
    margin-right: 70px;
  }
  
  @media (max-width: 991.98px) {
    .footer-icon {
      height: 25px;
      margin-right: 5px;
    }
  }
  
  @media (max-width: 767.98px) {
    .footer-icon {
      height: 20px;
      margin-right: 3px;
    }
  }
</style>

    <!-- slider -->
    <section class="about-us-slider swiper-container p-relative">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide-item">
          <img
            src="./images/news4.jpg"
            class="img-fluid full-width"
            alt="Banner"
          />
          <div class="transform-center">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-lg-7 align-self-center">
                  <div class="right-side-content">
                    <h1 class="text-custom-white fw-600">
                       Machinery
                    </h1>
                    <h3 class="text-custom-white fw-400">
                      New trackter registrations mirror dealer sentiment
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay overlay-bg"></div>
        </div>
        <div class="swiper-slide slide-item">
          <img
            src="./images/news3.jfif"
            class="img-fluid full-width"
            alt="Banner"
          />
          <div class="transform-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8 align-self-center">
                  <div class="right-side-content text-center">
                    <h1 class="text-custom-white fw-600">
                   Ghana
                    </h1>
                    <h3 class="text-custom-white fw-400">
                     Crops export set for record high after heavy rains
                    </h3>
              
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay overlay-bg"></div>
        </div>
        <div class="swiper-slide slide-item">
          <img
            src="./images/news5.png"
            class="img-fluid full-width"
            alt="Banner"
          />
          <div class="transform-center">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-lg-7 align-self-center">
                  <div class="right-side-content text-right">
                    <h1 class="text-custom-white fw-600">
                    cost of living
                    </h1>
                    <h3 class="text-custom-white fw-400">
                      Dairy farmers on "knife edge" as milk price drops
                    </h3>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay overlay-bg"></div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </section>
    <!-- slider -->
  
    <!-- your previous order -->
    <section class="recent-order section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header-left">
        
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="product-box mb-md-20">
              <div class="product-img">
                <a href="./Manage_farm/crops.php">
                  <img
                    src="./images/crops.jpg"
                    class="img-fluid full-width"
                    alt="product-img"
                  />
                </a>
              </div>
              <div class="product-caption">
                <h1 class="product-title">
                  <a href="./Manage_farm/crops.php" class="text-light-black">
                    Crops</a
                  >
                </h1>
                <div class="product-btn">
                  <a
                    href="./Manage_farm/crops.php"
                    class="btn-first white-btn full-width text-light-green fw-600"
                    > Crop Management</a
                  >
                </div>
              </div>
            </div>
          </div>
    
          
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="product-box mb-md-20">
              <div class="product-img">
                <a href="./Manage_farm/inventory.php">
                  <img
                    src="./images/inventory.jpg"
                    class="img-fluid full-width"
                    alt="product-img"
                  />
                </a>
              </div>
              <div class="product-caption">
                <h1 class="product-title">
                  <a href="./Manage_farm/inventory.php" class="text-light-black">
                    Inventory</a
                  >
                </h1>
                <div class="product-btn">
                  <a
                    href="./Manage_farm/inventory.php"
                    class="btn-first white-btn full-width text-light-green fw-600"
                    > Inventory Management</a
                  >
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="product-box mb-md-20">
              <div class="product-img">
                <a href="./Manage_farm/livestock.php">
                  <img
                    src="./images/ani.png"
                    class="img-fluid full-width"
                    alt="product-img"
                  />
                </a>
              </div>
              <div class="product-caption">
                <h1 class="product-title">
                  <a href="./Manage_farm/livestock.php" class="text-light-black">
                    Livestock</a
                  >
                </h1>
                <div class="product-btn">
                  <a
                    href="./Manage_farm/livestock.php"
                    class="btn-first white-btn full-width text-light-green fw-600"
                    > Livestock Management</a
                  >
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="product-box mb-md-20">
              <div class="product-img">
                <a href="./Manage_farm/sales.php">
                  <img
                    src="./images/sales.png"
                    class="img-fluid full-width"
                    alt="product-img"
                  />
                </a>
              </div>
              <div class="product-caption">
                <h1 class="product-title">
                  <a href="./Manage_farm/sales.php" class="text-light-black">
                    Sales</a
                  >
                </h1>
                <div class="product-btn">
                  <a
                    href="./Manage_farm/sales.php"
                    class="btn-first white-btn full-width text-light-green fw-600"
                    > Sales Management</a
                  >
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 mt-4 col-sm-6">
            <div class="product-box mb-md-20">
              <div class="product-img">
                <a href="./Manage_farm/report.php">
                  <img
                    src="./images/report.png"
                    class="img-fluid full-width"
                    alt="product-img"
                  />
                </a>
              </div>
              <div class="product-caption">
                <h1 class="product-title">
                  <a href="./Manage_farm/report.php" class="text-light-black">
                    Report</a
                  >
                </h1>
                <div class="product-btn">
                  <a
                    href="./Manage_farm/report.php"
                    class="btn-first white-btn full-width text-light-green fw-600"
                    >See Report</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 col-sm-6">
            <div class="product-box mb-md-20">
              <div class="product-img">
                <a href="./Manage_farm/purchase.php">
                  <img
                    src="./images/purchase.png"
                    class="img-fluid full-width"
                    alt="product-img"
                  />
                </a>
              </div>
              <div class="product-caption">
                <h1 class="product-title">
                  <a href="./Manage_farm/purchase.php" class="text-light-black">
                    Purchases</a
                  >
                </h1>
                <div class="product-btn">
                  <a
                    href="./Manage_farm/purchase.php"
                    class="btn-first white-btn full-width text-light-green fw-600"
                    >Purchase Management</a
                  >
                </div>
              </div>
            </div>
          </div>
    
          </div>
        </div>
      </div>
    </section>

  
    <style>
/* CSS */

.footer {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background: #000;
  /* margin: 1rem; */
}

.content{
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer div {
  margin: 10px;
  text-align: center;
}

.footer-icon {
  width: 50px;
  height: 50px;
  margin-bottom: 10px;
 
}

h1 {
  font-size: 10px;
  margin-top: 0;
  margin-bottom: 5px;
  color: white;
}

@media only screen and (max-width: 768px) {
  .footer {
    flex-direction: column;
    padding:2px ;
  }
  
  .footer div {
    margin: 10px 0;
  }
  h1{
    margin-right: 5px;
  }
  .footer-icon{
    padding: 2px;
  }
}


</style>

<div class="col-lg-4 footer">
  <div class="content">
    <span class="text-light-white fs-14 mr-3">
      Farm Management System
    </span>
    <div>
      <a href="./Manage_farm/crops.php">
      <img src="./images/footer1.jpg"  alt="Crops" class="footer-icon">
      <h1>Crops</h1>
      </a>
    </div>
    <div>
      <a href="./Manage_farm/inventory.php">
      <img src="./images/footer2.jpg" alt="Inventory" class="footer-icon">
      <h1>Inventory</h1>
    </div>
    </a>
    <div>
      <a href="./Manage_farm/livestock.php">
      <img src="./images/footer3.jpg" alt="Livestock" class="footer-icon">
      <h1>Livestock</h1>
      </a>
    </div>
    <div>
      <a href="./Manage_farm/sales.php">
      <img src="./images/footer4.jpg" alt="Sales" class="footer-icon">
      <h1>Sales</h1>
      </a>
    </div>
    <div>
      <a href="./Manage_farm/purchase.php">
      <img src="./images/footer5.jpg" alt="Purchases" class="footer-icon">
      <h1>Purchase</h1>
      </a>
    </div>

    <div>
      <a href="./Manage_farm/report.php">
      <img src="./images/footer6.jpg" alt="Purchases" class="footer-icon">
      <h1>Report</h1>
      </a>
    </div>
  </div>
</div>



      
    </div>
    <!-- Place all Scripts Here -->
    <script src="./js/home.js"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
   
    <script src="assets/js/sticksy.js"></script>
   
    <script src="assets/js/munchbox.js"></script>
    
  </body>

</html>
