@extends('layouts.app')

@section('title', 'Home')
@section('content')
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quo laudantiu</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <section class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Cloud Software</h2>
        <p>Mengenal Software Berbasis Cloud</p>
      </header>

      <div class="row">

        <p style="font-size: 18px; text-align: center">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. 
          Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

      </div>

    </div>

  </section>
  <section class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Cloud Software</h2>
        <p>Kelebihan Utama Software Berbasis Cloud</p>
      </header>

      <div class="row">

        <div class="col-lg-3">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/values-1.png" class="img-fluid" alt="">
            <h3>Fast</h3>
            <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/values-2.png" class="img-fluid" alt="">
            <h3>Realtime</h3>
            <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets/img/values-3.png" class="img-fluid" alt="">
            <h3>Integrated</h3>
            <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
          </div>
        </div>
        <div class="col-lg-3 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets/img/values-3.png" class="img-fluid" alt="">
            <h3>Easy use</h3>
            <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
          </div>
        </div>

      </div>

    </div>

  </section>
  <section class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Semangat #TransformasiIndustri</p>
      </header>

      <div class="row">

        <p style="font-size: 18px; text-align: center">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. 
          Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

      </div>

    </div>

  </section>
  <section class="pricing">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Pricing</h2>
        <p>Check our Pricing</p>
      </header>

      <div class="row gy-4" data-aos="fade-left">

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <h3 style="color: #07d5c0;">Free Plan</h3>
            <div class="price"><sup>$</sup>0<span> / mo</span></div>
            <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="box">
            <span class="featured">Featured</span>
            <h3 style="color: #65c600;">Starter Plan</h3>
            <div class="price"><sup>$</sup>19<span> / mo</span></div>
            <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <h3 style="color: #ff901c;">Business Plan</h3>
            <div class="price"><sup>$</sup>29<span> / mo</span></div>
            <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="box">
            <h3 style="color: #ff0071;">Ultimate Plan</h3>
            <div class="price"><sup>$</sup>49<span> / mo</span></div>
            <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>

      </div>

    </div>

  </section>
@endsection