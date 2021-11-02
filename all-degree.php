<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/all-degree.jpg);">
  <div class='overlay'></div>
  <div class="container">
    <div class="overlay-text">
      <h1>Human Resources Management (MSc)</h1>
      <p>October 20, 2020</p>
    </div>
  </div>
</div>

<div class="filter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form>
          <div class="row">
            <div class="col-md-4 mt-3">
              <select class="form-control">
                <option>Programme Type</option>
                <option>Masters</option>
                <option>Doctorate</option>
                <option>Bachelor Degree</option>
                <option>Post graducate</option>
              </select>
            </div>
            <div class="col-md-4 mt-3">
              <select class="form-control">
                <option>Programmes Category</option>
                <option>Health &amp; Psychology</option>
                <option>Literature</option>
                <option>Politics</option>
              </select>
            </div>
            <div class="col-md-4 mt-3">
              <select class="form-control">
                <option>Duration</option>
                <option>5 days</option>
                <option>1 week</option>
                <option>1 month</option>
                <option>3 months</option>
                <option>6 month</option>
                <option>9 months</option>
                <option>12 month</option>
                <option>18 months</option>
                <option>24 months</option>
                <option>36 months</option>
                <option>48 months</option>
              </select>
            </div>
            <div class="col-md-12">
              <div class="collapse" id="collapseFilter">
                <div class="row">
                  <div class="col-md-3 mt-3">
                    <select class="form-control">
                      <option>Study Type</option>
                      <option>Online</option>
                      <option>Classroom</option>
                    </select>
                  </div>
                  <div class="col-md-3 mt-3">
                    <select class="form-control">
                      <option>Credit Ratings</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                  <div class="col-md-3 mt-3">
                    <select class="form-control">
                      <option>Location</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                  <div class="col-md-3 mt-3">
                    <select class="form-control">
                      <option>Budget</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3 mt-3">
              <p class="text-center serviceList">
                <a data-toggle="collapse" href="#collapseFilter" role="button" aria-expanded="false" aria-controls="collapseFilter">
                  Advanced Filter <i class="fa fa-chevron-down"></i>
                  <i class="fa fa-chevron-up"></i>
                </a>
              </p>
            </div>
            <div class="col-md-3 mt-2">
              <button class="btn btn-dark btn-block">Search</button>
            </div>
            <div class="col-md-3"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="main-content pt-find">
  <div class="find course-list-msbm">
    <div class="container">
      <p class="heading-find">Explore Degree Programmes</p>
      <div class="row myflexx">
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">BBA<br>Bachelor of Business</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">BBA<br>Bachelor of Business</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">BBA<br>Bachelor of Business</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
          <a href="" class="card-ahref-flex">
            <div class="card-img-wrap">
              <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text card-uni">UK Partner University</p>
              <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
              <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              <div class="row">
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                </div>
                <div class="col-5 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                </div>
                <div class="col-7 mb-2">
                  <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                </div>
              </div>
              <div class="card-info-btn">
                <button class="btn btn-dark btn-block mt-auto">Find More</button>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('components/footer.php'); ?>

</body>

</html>