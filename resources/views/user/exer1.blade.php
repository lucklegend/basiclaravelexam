@extends('layouts.master')

@section('content')
<?php
$timeslots = array(
  "-" => "-",
  "0:00" => "12 AM",
  "1:00" => "1 AM",
  "2:00" => "2 AM",
  "3:00" => "3 AM",
  "4:00" => "4 AM",
  "5:00" => "5 AM",
  "6:00" => "6 AM",
  "7:00" => "7 AM",
  "8:00" => "8 AM",
  "9:00" => "9 AM",
  "7:00" => "7 AM",
  "8:00" => "8 AM",
  "9:00" => "9 AM",
  "10:00" => "10 AM",
  "11:00" => "11 AM",
  "12:00" => "12 PM",
  "13:00" => "1 PM",
  "14:00" => "2 PM",
  "15:00" => "3 PM",
  "16:00" => "4 pM",
  "17:00" => "5 PM",
  "18:00" => "6 PM",
  "19:00" => "7 PM",
  "20:00" => "8 PM",
  "21:00" => "9 PM",
  "22:00" => "10 PM",
  "23:00" => "11 PM",

)
?>
<section id="banner">
  <div class="container">
    <div id="banner_content" class="text-center">
      <h1>Hello World!</h1>
      <h5 class="text">lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
      <div class="text-center">
        <a href="#contact-form" id="toContact">
          <button class="btn-default">contact us</button>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="home">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Pharetra Magna<br>Etiam Mollis</h1>
        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed velit in metus malesuada commodo euismod ut orci. Sed pharetra, tellus sit amet tempus feugiat, nunc purus faucibus eros, ac laoreet nisl quam non lectus. Curabitur cursus accumsan felis in dapibus. Suspendisse ullamcorper iaculis ligula ut pharetra. Nam fermentum semper arcu, vitae rutrum erat porttitor sit amet. Integer dignissim commodo metus, ac dignissim est malesuada eget. Quisque eu metus vulputate, scelerisque sapien quis, tincidunt nisi. Maecenas tincidunt tempus lacinia. Proin nulla mi, venenatis sed odio sed, feugiat pulvinar mauris. Donec vehicula lobortis nunc, at rutrum lorem efficitur in. Integer finibus nibh vitae lorem accumsan mattis. Aenean convallis blandit metus, sit amet luctus orci iaculis sed.</h5>
      </div>
      <div class="col-6">
        <img src="{{asset('images/orange.jpg')}}" class alt="orange" />
      </div>
    </div>
    <div class="arrow text-center">
      <a href="#tell-us" id="downArrow">
        <img src="{{asset('images/triangle-yellow.svg')}}" alt="arrow down">
      </a>
    </div>
  </div>
</section>
<section id="tell-us">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h4 class="title">Tell us about the number electrical devices in your building.</h4>
        <small>Entering your location will help us determine current energy costs for your area.</small>
      </div>
    </div>
    <div class="row m-top-2">
      <div class="col-6">
        <label class="xs-title" for="zip">Zip</label>
        <input type="number" name="zip" id="zip" placeholder="Zip Code" class="form-control">

        <fieldset class="">
          <legend>Occupancy Schedule</legend>

          <div class="form-row">
            <div class="col-form-4"><label class="s-title">Weekdays</label></div>
            <div class="col-form-3">
              <select name="weekendFrom" id="weekendFrom" class="form-control">
                @foreach($timeslots as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-form-2 text-center"><label class="s-title">TO</label></div>
            <div class="col-form-3">
              <select name="weekendTo" id="weekendTo" class="form-control">
                @foreach($timeslots as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="col-form-4"><label class="s-title">Saturday</label></div>
            <div class="col-form-3">
              <select name="saturdayFrom" id="saturdayFrom" class="form-control">
                @foreach($timeslots as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-form-2 text-center"><label class="s-title">TO</label></div>
            <div class="col-form-3">
              <select name="saturdayTo" id="saturdayTo" class="form-control">
                @foreach($timeslots as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-form-4"><label class="s-title">Sunday</label></div>
            <div class="col-form-3">
              <select name="sundayFrom" id="sundayFrom" class="form-control">
                @foreach($timeslots as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-form-2 text-center"><label class="s-title">TO</label></div>
            <div class="col-form-3">
              <select name="sundayTo" id="sundayTo" class="form-control">
                @foreach($timeslots as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
              </select>
            </div>
          </div>

        </fieldset>
      </div>
      <div class="col-6">
        <label class="xs-title" for="typeBusiness">Type of Business/Organization</label>
        <select name="zip" id="typeBusiness" placeholder="Select One" class="form-control">
          <option value="Select One">Select One</option>
          <option value="Solo">Solo</option>
          <option value="Corporation">Corporation</option>
          <option value="Manufacturing">Manufacturing</option>
          <option value="Food">Food</option>
        </select>
        <fieldset class="">
          <legend>Utility</legend>
          <div class="form-row">
            <div class="col-form-6">
              <label class="s-title">Utility Provider</label>
            </div>
            <div class="col-form-6">
              <input type="text" name="utility-provider" id="utility-provider" class="form-control">
            </div>
          </div>

          <div class="form-row">
            <div class="col-form-6">
              <label class="s-title">Average Electric Rate</label>
            </div>
            <div class="col-form-3">
              <input type="text" name="ave_elec_rate" id="ave_elec_rate" class="form-control">
            </div>
            <div class="col-form-3 text-center">
              <label class="xs-title">per kWh(est.)</label>
            </div>
          </div>
          <div class="form-row">
            <div class="col-form-12">
              <br>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</section>
<section id="devices">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h4 class="title">Your Devices and Appliances</h4>
        <small>Enter the estimated number of plug load devices of each type that you have in the categories below.</small>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <fieldset class="">
          <legend>Devices with High Savings Potential</legend>
          <p class="xs-text">Plug installed and scheduled on these types of devices will provide the greatest savings.</p>
          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Computers</label></div>
            <div class="col-form-4">
              <input type="text" name="computer" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Snack Machines</label></div>
            <div class="col-form-4">
              <input type="text" name="snack_machine" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Soda Machines</label></div>
            <div class="col-form-4">
              <input type="text" name="soda_machine" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">AC Units</label></div>
            <div class="col-form-4">
              <input type="text" name="soda_machine" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">PTAC Units</label></div>
            <div class="col-form-4">
              <input type="text" name="soda_machine" class="form-control">
            </div>
          </div>

        </fieldset>
      </div>
      <div class="col-6">
        <fieldset class="">
          <legend>Devices with Low Savings Potential</legend>
          <p class="xs-text">Plug load enerby use in computers and office equipment is on the rise. Tell us how many electrical products you have in the office space location in your building.</p>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Copiers & Printers</label></div>
            <div class="col-form-4">
              <input type="text" name="copier_printer" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">TVs</label></div>
            <div class="col-form-4">
              <input type="text" name="tv" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Coffee Pots</label></div>
            <div class="col-form-4">
              <input type="text" name="coffee_pots" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Water Cooler/Fountains</label></div>
            <div class="col-form-4">
              <input type="text" name="water_cool_fountain" class="form-control">
            </div>
          </div>

          <div class=" form-row">
            <div class="col-form-8"><label class="s-title">Others</label></div>
            <div class="col-form-4">
              <input type="text" name="others" class="form-control">
            </div>
          </div>

        </fieldset>
      </div>
    </div>
  </div>
</section>
<section id="contact-form">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h4 class="title">Your Contact Information</h4>
        <small>We will send you a detailed report of your potential savings. Your information is safe with us - we will not send you spam.</small>
      </div>
    </div>
    <form>
      <div class="row m-top-2">
        <div class="col">
          <label class="xs-title" for="bofn">Business, Organization or Facility Name</label>
          <input type="text" name="bofn" id="bofn" placeholder="" class="form-control" required>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <label class="xs-title" for="bofn">First Name</label>
          <input type="text" name="firstname" id="firstname" placeholder="" class="form-control" required>
        </div>
        <div class="col-6">
          <label class="xs-title" for="bofn">Last Name</label>
          <input type="text" name="lastname" id="lastname" placeholder="" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label class="xs-title" for="bofn">Email</label>
          <input type="text" name="email" id="email" placeholder="" class="form-control" required>
        </div>
        <div class="col-6">
          <label class="xs-title" for="bofn">Phone Number</label>
          <input type="text" name="phone" id="phone" placeholder="" class="form-control" required>
        </div>
      </div>
      <div class="row m-top-2">
        <div class="col text-center">
          <button class="btn-black">Calculate Your Savings</button>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col text-center">
        <a href="#banner" id="upArrow">
          <img src="{{asset('images/triangle-yellow.svg')}}" alt="arrow up">
        </a>
      </div>
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $('#downArrow').click(function() {
    $('body,html').animate({
      scrollTop: $('#tell-us').offset().top
    }, 1600);
  });

  $('#toContact').click(function() {
    $('body,html').animate({
      scrollTop: $('#contact-form').offset().top
    }, 1600);
  });

  $(document).ready(function() {
    var winHeight = $(window).height();
    $('#banner').css('height', winHeight + "px");
    var bannerContent = $('#banner_content').height();
    bCHeight = (winHeight / 2) - (bannerContent / 2);
    $('#banner_content').css('margin-top', bCHeight + "px");
  });
  $('#upArrow').fadeOut();
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1700) {
      $('#upArrow').fadeIn();
    } else {
      $('#upArrow').fadeOut();
    }
  });
  $('#upArrow').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
</script>
@endsection