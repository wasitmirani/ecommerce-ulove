    @if (is_plugin_active('newsletter'))
        {!! do_shortcode('[newsletter-form title="' . __('Sign up to Newsletter') . '" description="' . __('...and receive $25 coupon for first shopping.') . '"][/newsletter-form]') !!}
    @endif

     <footer class="main" style="color:white; background-color:black;">
        <section class="section-padding-60">
            <div class="container">
                <div class="row">
                    {!! dynamic_sidebar('footer_sidebar') !!}
                    @if (theme_option('payment_methods'))
                        <div class="col-lg-4">
                            <h5 class="widget-title mb-30 wow fadeIn animated text-light">{{ __('Payments') }}</h5>
                            <div class="row">
                                <div class="col-md-4 col-lg-12">
                                    <p class="mb-20 wow fadeIn animated mt-md-3">{{ __('Secured Payment Gateways') }}</p>
                                    <img class="wow fadeIn animated" src="{{ asset('assets/payment-methods.png')}}" alt="{{ __('Payment methods') }}">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <div class="footer-down">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p>{{ theme_option('copyright') }}</p>
              <ul class="copyright-ul">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        {{-- <div class="container pb-20 wow fadeIn animated">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">{{ theme_option('copyright') }}</p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        {{ __('All rights reserved.') }}
                    </p>
                </div>
            </div>
        </div> --}}
    </footer>
    {{-- <footer>
      <div class="footer-up aos-init aos-animate" data-aos="fade" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="assets/images/Group 20.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 dis-flex-end">
              <ul class="footer-menu-1">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">Categories</a></li><li>
                </li><li><a href="#">Contacts</a></li><li>
                </li><li><a href="#">UMusic Members</a></li><li>
                </li><li><a href="#">U Luv Music Publishing</a></li><li>
              </li></ul>
              <ul class="footer-menu-2">
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p>{{} theme_option('copyright') }}</p>
              <ul class="copyright-ul">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}
    @if (theme_option('preloader_enabled', 'yes') == 'yes')
        <!-- Preloader Start -->
        <div id="preloader-active" >
            <div class="preloader d-flex align-items-center justify-content-center" style="background-color: black">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        @if (theme_option('favicon'))
                            <img class="jump" src="{{ RvMedia::getImageUrl(theme_option('favicon')) }}" alt="logo">
                        @endif
                        <h5 class="mb-5 text-light">{{ __('Loading....') }}</h5>
                        <div class="loader">
                            <div class="bar bar1"></div>
                            <div class="bar bar2"></div>
                            <div class="bar bar3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quick-view-modal" tabindex="-1" aria-labelledby="quick-view-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="half-circle-spinner loading-spinner">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                    </div>
                    <div class="quick-view-content"></div>
                </div>
            </div>
        </div>
    </div>

        <script>
            window.siteUrl = "{{ url('') }}";
        </script>

        @if (is_plugin_active('ecommerce'))
            <script>
                window.currencies = {!! json_encode(get_currencies_json()) !!};
            </script>
        @endif

        {!! Theme::footer() !!}

    <script>
        window.trans = {
            "Views": "{{ __('Views') }}",
            "Read more": "{{ __('Read more') }}",
            "days": "{{ __('days') }}",
            "hours": "{{ __('hours') }}",
            "mins": "{{ __('mins') }}",
            "sec": "{{ __('sec') }}",
        }
    </script>

    {!! Theme::place('footer') !!}

    @if (session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg))
            <script type="text/javascript">
                $(document).ready(function () {
                    @if (session()->has('success_msg'))
                    window.showAlert('alert-success', '{{ session('success_msg') }}');
                    @endif

                    @if (session()->has('error_msg'))
                    window.showAlert('alert-danger', '{{ session('error_msg') }}');
                    @endif

                    @if (isset($error_msg))
                    window.showAlert('alert-danger', '{{ $error_msg }}');
                    @endif

                    @if (isset($errors))
                    @foreach ($errors->all() as $error)
                    window.showAlert('alert-danger', '{!! clean($error) !!}');
                    @endforeach
                    @endif
                });
            </script>
        @endif
 <script src="{{asset('assets/slick-slider/slick/slick.min.js')}}"></script>

    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
       <script>
    AOS.init();
    </script>
    </body>
</html>
