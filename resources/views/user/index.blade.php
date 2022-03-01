@extends('layouts.master')

@section('content')
<div class="container" style="background-color:white; padding-top:20px;">

  @if(isset($data['error']))
  {{$data['error']}}
  @endif
  <div>
    Enter User ID: <input type="text" id="user_id" placeholder="Enter User ID" require> <button id="submit">View Downline</button>
  </div>
  <br>
  <div id="result"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#submit").click(function(e) {
        e.preventDefault();
        $('#result').html('');
        if ($('#user_id').val() == '') {
          alert('User ID is needed');
          $('#user_id').focus();
        } else {
          url = "{{url('user/getDownline/')}}" + "/" + $('#user_id').val();
          $.ajax({
            url: url,
            type: "GET",
            success: function(result) {
              console.log(result);
              if (result.data.error) {
                var string = result.data.error + "<br>";
                $('#result').append(string);
              } else if (result.data.user.length == 0) {
                var string = "No Downline / User ID NOT FOUND! <br>";
                $('#result').append(string);
              } else {
                $.each(result.data.user, function(i, u) {
                  var string = "ID: " + u.id + " name: " + u.name + "<br>";
                  $('#result').append(string);
                });
              }


            }
          });
        }

      });
    });
  </script>
</div>
@endsection