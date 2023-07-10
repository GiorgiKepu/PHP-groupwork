<?php 

require 'files.php';

function sliderSection() : void {
  echo '<div class="detail-box">
    <div class="play_btn">
      <button>
        <i class="fa fa-play" aria-hidden="true"></i>
      </button>
    </div>
    <h1>
      Mico <br>
      <span>
        Hospital
      </span>
    </h1>
    <p>
      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
    </p>
    <a href="">
      Contact Us
    </a>
    </div>';
};

function book_appointment() : void {
  global $bookAppointment;
  foreach ($bookAppointment as $appointment) {
  echo '<div class="form-group col-lg-4">
  <label for="'. $appointment['for'] .'">'. $appointment['text'] .' </label>
  '. $appointment['addition'] .'
  </div>';
  }
};

function book_appointment1() : void {
  global $bookAppointment1;
  foreach ($bookAppointment1 as $appointment) {
  echo '<div class="form-group col-lg-4">
  <label for="'. $appointment['for'] .'">'. $appointment['text'] .' </label>
  '. $appointment['addition'] .'
  </div>';
  }
};

function headi() : void {
  global $header1;
  foreach ($header1 as $head) {
    echo '<a href="">
    <i class="'. $head['class'] .'" aria-hidden="true"></i>
    <span>
    '. $head['span'] .'
    </span>
  </a>';
  }
};

function testimonials() : void {
    global $testimonial; 
    foreach ($testimonial as $client) {
        echo '
        <div class="'. $client['class'] .'">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                  '. $client['name'] .'
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              '. $client['text'] .'
              </p>
            </div>
          </div>
        ';
    };
};

function button() : void {
    global $carouselButtonBox;
    foreach ($carouselButtonBox as $but) {
        echo '<a class="'. $but['a-class'] .'" href="#customCarousel2" role="button" data-slide="'. $but['data-slide'] .'">
        <i class="'. $but['i-class'] .'" aria-hidden="true"></i>
        <span class="sr-only">'. $but['span'] .'</span>
      </a>';
    };
};

function contact() : void {
    global $getInTouch;
    foreach($getInTouch as $contact) {
        echo '<div>
        <input type="'. $contact['type'] .'" class="'. $contact['class'] .'" placeholder="'. $contact['placeholder'] .'" name="'. $contact['name'] .'" />
      </div>';
    };
};

function carouselWrap() : void {
  global $carouselWrap;
  for($i = 0; $i < sizeof($carouselWrap); $i++ ) {
    echo '<div class="item">
    <div class="box">
      <div class="img-box">
        <img src="'. $carouselWrap[$i]['src'] .'" alt="" />
      </div>
      <div class="detail-box">
        <h5>
        '. $carouselWrap[$i]['name'] .'
        </h5>
        <h6>
          MBBS
        </h6>
        <div class="social_box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>';
  }
};

function address() : void {
  global $footerAddress;
  foreach ($footerAddress as $address) {
    echo '<a href="">
    <i class="'.$address['class'].'" aria-hidden="'.$address['aria-hidden'].'"></i>
    <span>
    '.$address['span'].'
    </span>
  </a>
  ';
  }
};

function socialBox() : void {
  global $socialBox;
  foreach($socialBox as $soc) {
    echo '<a href="">
    <i class="fa fa-'. $soc['class'] .'" aria-hidden="true"></i>
  </a>';
  }
};

function distribution1() : void {
  global $latestPosts;
  foreach($latestPosts as $post) {
    echo ' <div class="post_box">

    <div class="img-box">
      <img src="'. $post['image'] .'" alt="">
    </div>
    <p>
      Normal
      distribution
    </p>

  </div>';
  }
};

function distribution2() : void {
  global $latestPosts1;
  foreach($latestPosts1 as $post) {
    echo ' <div class="post_box">

    <div class="img-box">
      <img src="'. $post['image1'] .'" alt="">
    </div>
    <p>
      Normal
      distribution
    </p>

  </div>';
  }
};

function footerContect() : void {
  global $footer;
  foreach($footer as $foot) {
    echo '<a href="'. $foot['href'] .'">
              '. $foot['text'] .'
          </a>';
  }
};