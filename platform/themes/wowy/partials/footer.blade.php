    @if (is_plugin_active('newsletter'))
        {!! do_shortcode('[newsletter-form title="' . __('Sign up to Newsletter') . '" description="' . __('...and receive $25 coupon for first shopping.') . '"][/newsletter-form]') !!}
    @endif
    <footer class="main">
        <section class="section-padding-60">
            <div class="container">
                <div class="row">
                    {!! dynamic_sidebar('footer_sidebar') !!}
                    @if (theme_option('payment_methods'))
                        <div class="col-lg-4">
                            <h5 class="widget-title mb-30 wow fadeIn animated">{{ __('Payments') }}</h5>
                            <div class="row">
                                <div class="col-md-4 col-lg-12">
                                    <p class="mb-20 wow fadeIn animated mt-md-3">{{ __('Secured Payment Gateways') }}</p>
                                    <img class="wow fadeIn animated" src="{{ RvMedia::getImageUrl(theme_option('payment_methods')) }}" alt="{{ __('Payment methods') }}">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated">
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
        </div>
    </footer>

    @if (theme_option('preloader_enabled', 'yes') == 'yes')
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        @if (theme_option('favicon'))
                            <img class="jump" src="{{ RvMedia::getImageUrl(theme_option('favicon')) }}" alt="logo">
                        @endif
                        <h5 class="mb-5">{{ __('Now Loading') }}</h5>
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
    </body>
</html>
