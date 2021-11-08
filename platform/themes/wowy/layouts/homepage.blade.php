{!! Theme::partial('header') !!}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/slick-slider/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/slick-slider/slick/slick.css')}}" rel="stylesheet">

<main class="main">
   <section class="banner" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 dis-flex-start" data-aos="fade-right" data-aos-duration="2000">
            <h2>Featured artist..</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <form action="{{ route('public.products') }}" method="get">
              <input type="text" name="q" class="form-control" placeholder="Search Anything">
              <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </form>

          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
            <img src="assets/images/klipartz.png" class="img-fluid" class="img-fluid" alt="">
          </div>
        </div>
        <div class="banner-in">
          <div class="row">
                @foreach(get_featured_product_categories(['limit' => 6, 'withCount' => ['products']]) as $category)
                {{-- <li class="cat-item text-muted"><a href="{{ $category->url }}">{{ $category->name }}</a>({{ $category->products_count }})</li> --}}
            <div class="col-lg-2" data-aos="fade-right" data-aos-duration="3000">
              <a href="{{ $category->url }}">
                <div class="img-box">
                    {{-- @dd($category) --}}

                  {{-- <img src="assets/images/Rectangle 71.png" class="img-fluid" alt=""> --}}
                  <img src="{{RvMedia::getImageUrl($category->image, null, false, RvMedia::getDefaultImage())  }}" class="img-fluid" alt="{{ $category->name }}" />
                  <h3>{{ $category->name }}</h3>
                </div>
              </a>
            </div>
            @endforeach

          </div>
        </div>
      </div>
      <div class="corner"><a href="#"><img src="assets/images/corner.png" class="img-fluid" alt=""></a></div>
    </section>
    <section class="section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 data-aos="fade-right" data-aos-duration="1000">Hottest Products.</h2>
            <p data-aos="fade-right" data-aos-duration="2000">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's..</p>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
            <img src="assets/images/music1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-duration="2000">
            <img src="assets/images/music2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-duration="3000">
            <img src="assets/images/music3.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="section-3" data-aos="zoom-out-up" data-aos-duration="3000">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center sec-3-in">
            <h2>Portal to Hell</h2>
            <h3><a href="#">For Metalheads Only</a></h3>
          </div>
        </div>
      </div>
    </section>
    {{       Html::tag('div', '[product-category-products category_id="17"][/product-category-products]')}}
    <section class="section-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 data-aos="zoom-out-down" data-aos-duration="3000">Our Products.</h2>
            <p data-aos="zoom-out-down" data-aos-duration="1000">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="zoom-out-up" data-aos-duration="1000">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="Hip-Hop-tab" data-bs-toggle="tab" data-bs-target="#Hip-Hop" type="button" role="tab" aria-controls="Hip-Hop" aria-selected="true">Hip Hop</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="jazz-tab" data-bs-toggle="tab" data-bs-target="#jazz" type="button" role="tab" aria-controls="jazz" aria-selected="false">jazz</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="metal-tab" data-bs-toggle="tab" data-bs-target="#metal" type="button" role="tab" aria-controls="metal" aria-selected="false">metal</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="blues-tab" data-bs-toggle="tab" data-bs-target="#blues" type="button" role="tab" aria-controls="blues" aria-selected="false">blues</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="classical-tab" data-bs-toggle="tab" data-bs-target="#classical" type="button" role="tab" aria-controls="classical" aria-selected="false">classical</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="Hip-Hop" role="tabpanel" aria-labelledby="Hip-Hop-tab">
                <div class="row">

                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
              </div>
              {{-- @dd() --}}
              <div class="tab-pane fade" id="jazz" role="tabpanel" aria-labelledby="jazz-tab">
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="metal" role="tabpanel" aria-labelledby="metal-tab">
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="blues" role="tabpanel" aria-labelledby="blues-tab">
               <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="classical" role="tabpanel" aria-labelledby="classical-tab">
               <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                      <h3>N.A.D.A</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                      <h3>CAPPIN</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                      <h3>HEAT WAVE</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                  <div class="col-lg-3" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="box-in">
                      <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                      <h3>BONE TAYA</h3>
                      <h4>JOHN MAC</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="sec4-btn" data-aos="zoom-in-up" data-aos-duration="2000">
              <a href="{{url('/products')}}">View All Products</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="1000" data-aos-duration="1000">
            <div class="sec-5-in">
              <img src="assets/images/sec5-1.png" class="img-fluid" alt="">
              <h3>On-Time Delivery</h3>
            </div>
          </div>
          <div class="col-lg-4 text-center" data-aos="zoom-out-up" data-aos-duration="1000">
            <div class="sec-5-in">
              <img src="assets/images/sec5-2.png" class="img-fluid" alt="">
              <h3>All Albums/Cds</h3>
            </div>
          </div>
          <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="1000" data-aos-duration="1000">
            <div class="sec-5-in">
              <img src="assets/images/sec5-3.png" class="img-fluid" alt="">
              <h3>Customer Support</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 dis-flex-start" data-aos="zoom-out-right" data-aos-duration="2000">
            <h2>Album Of the<br><strong>Week!</strong></h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
            <h3>haterz</h3>
            <h4>cheaper shepherd</h4>
            <h5>$200</h5>
            <a href="#" class="buy-btnn">Buy Now</a>
          </div>
          <div class="col-lg-6 dis-flex" data-aos="zoom-out-left" data-aos-duration="2000">
            <img src="assets/images/sec6-img.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="section-7" data-aos="zoom-out-up" data-aos-duration="3000">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" >
            <div class="news-in">
              <h2>Subscribe For Newsletter</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
            <form>
              <input type="name" class="form-control inp-1" placeholder="Enter Your Name">
              <input type="email" class="form-control inp-2" placeholder="Enter Email Address">
              <button type="submit" class="btn btn-primary inp-3">Send Now</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-8">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 data-aos="zoom-out" data-aos-duration="1000">Products You May Like.</h2>
          </div>
          <div class="col-lg-6" data-aos="zoom-out-right" data-aos-duration="1000">
            <div class="sec-8-in">
              <div class="row">
                <div class="col-lg-6" >
                  <img src="assets/images/Rectangle 50.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 dis-flex-start">
                  <h3>The jack.</h3>
                  <h4>Orph Sen</h4>
                  <h5>$150</h5>
                  <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1000">
            <div class="sec-8-in">
              <div class="row">
                <div class="col-lg-6">
                  <img src="assets/images/Rectangle 53.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 dis-flex-start">
                  <h3>The jack.</h3>
                  <h4>Orph Sen</h4>
                  <h5>$150</h5>
                  <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1000">
            <div class="sec-8-in">
              <div class="row">
                <div class="col-lg-6">
                  <img src="assets/images/Rectangle 54.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 dis-flex-start">
                  <h3>The jack.</h3>
                  <h4>Orph Sen</h4>
                  <h5>$150</h5>
                  <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1000">
            <div class="sec-8-in">
              <div class="row">
                <div class="col-lg-6">
                  <img src="assets/images/Rectangle 55.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 dis-flex-start">
                  <h3>The jack.</h3>
                  <h4>Orph Sen</h4>
                  <h5>$150</h5>
                  <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1000">
            <div class="sec-8-in">
              <div class="row">
                <div class="col-lg-6">
                  <img src="assets/images/Rectangle 58.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 dis-flex-start">
                  <h3>The jack.</h3>
                  <h4>Orph Sen</h4>
                  <h5>$150</h5>
                  <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1000">
            <div class="sec-8-in">
              <div class="row">
                <div class="col-lg-6">
                  <img src="assets/images/Rectangle 59.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 dis-flex-start">
                  <h3>The jack.</h3>
                  <h4>Orph Sen</h4>
                  <h5>$150</h5>
                  <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js"
integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

addToCard(id){
    axios.post("/cart/add-to-cart").then((res)=>{

    })
}

</script>
{!! Theme::partial('footer') !!}




