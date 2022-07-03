@extends('layouts.main')

@section('content')
    
    <!-- ***** Payment Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Paragliding <em>Payment</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Payment can be made via mobile banking.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/rsz_ico.png" alt="">Choose Paragliding</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/rsz_ico.png" alt="">Buy Tickets</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/rsz_ico.png" alt="">Payment Method</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/rsz_ico.png" alt="">Payment Success</a></a></li>
                  <div class="main-rounded-button"><a href="/location">Back</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/Paragliding Pokhara.jpg" alt="First Class">
                    <h4>Choose Paragliding</h4>
                    <p>Choose the type of paragliding you want to do.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Tandem
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Training
                        </label>
                    </div>
                    <br>
                    <br>
                    <div class="main-button">
                        <a href="#tabs-2">Next</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/Screenshot 2022-07-04 023157.png" alt="Second Training">
                    <!-- <h4>Second Training Class</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> -->
                    <br>
                    <br>
                    <div class="main-button">
                        <a href="#tabs-3">Next</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/payment.png" alt="Third Class">
                    <!-- <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p> -->
                    <div class="main-button">
                        <a href="#tabs-4">Next</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="assets/images/payment-succes.png" alt="Fourth Training">
                    <!-- <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p> -->
                    <br>
                    <br>
                    <div class="main-button">
                        <a href="/">Next</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Payment End ***** -->

@endsection