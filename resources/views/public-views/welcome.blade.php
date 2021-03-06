@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.header')

    <!-- Icon Blocks -->
    <section class="g-py-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 g-px-40 g-mb-50 g-mb-0--lg">
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

          <div class="col-lg-6 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-finance-086 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Past Events</h3>
              <p class="mb-0">Marak Incorporated packaged a bespoke course on Modern Petroleum Contracts for benefit of the honourable members of the Nigerian National Assembly.</p>
            </div>
            <!-- End Icon Blocks -->
          </div>

        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <hr class="g-brd-gray-light-v4 my-0">

        <!-- Our Services -->
    <section class="g-py-100">
      <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <div class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
            <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">DON'T MISS OUT</h2>
          </div>
          <p class="g-font-size-16">This is the only major international local content event in the oil and gas industry in 2018. You'll meet local content experts from Middle East, Europe, Asia, Africa and South America.</p>
        </header>
        <img class="img-fluid w-100" src="{{asset('unify/assets/img-temp/893x372/img1.jpg')}}" alt="Image Description">
      </div>
    </section>
    <!-- End Our Services -->

    <hr class="g-brd-gray-light-v4 my-0">

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