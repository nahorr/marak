@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.header')

    <!-- Icon Blocks -->
    <section class="g-py-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-081 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">UPCOMING EVENT</h3>
              <p class="mb-0">LOCAL CONTENT CONFERENCE 2018 01 May TO 02 MAY, HOUSTON TEXAS. Marak Alliance be exhibiting during OTC 2018, visit us at booth # 6258</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-finance-086 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Past Events</h3>
              <p class="mb-0">Marak Incorporated packaged a bespoke course on Modern Petroleum Contracts for benefit of the honourable members of the Nigerian National Assembly and liaised with the University of Aberdeen to hosts the lawmakers to a grand dinner reception on 20 August 2010. </p>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-057 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Register</h3>
              <p class="mb-0">DON'T MISS OUT. This is the only major international local content event in the oil and gas industry in 2018. You'll meet local content experts from Middle East, Europe, Asia, Africa and South America.</p>
            </div>
            <!-- End Icon Blocks -->S
          </div>
        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <hr class="g-brd-gray-light-v4 my-0">

        <section class="g-bg-gray-light-v5">
      <div class="container g-py-100">
        <div class="row justify-content-center g-mb-110">
          <div class="col-lg-8">
            <!-- Heading -->
            <div class="text-center">
              <h3 class="h1 g-color-black g-font-weight-600 mb-5">DON'T MISS OUT</h3>
              <p class="lead mb-5">This is the only major international local <br> content event in the oil and gas industry in 2018. You'll meet local content experts from Middle East, Europe, Asia, Africa and South America.</p>
              <a class="btn btn-xl u-btn-outline-black g-font-weight-600 g-font-size-default g-px-35" href="#!">Register Now</a>
            </div>
            <!-- End Heading -->
          </div>
        </div>

      </div>
    </section>


    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(/unify/assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">For sponsorship enquiries email info@marakconsulting.com for more information</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="{{url('/contact')}}">Contact Us</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    @include('layouts.public.includes.footer')

@endsection