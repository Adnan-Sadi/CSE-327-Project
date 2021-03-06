<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Followers</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8aa2fd0685.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset('css/followingpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    @include('layouts.header')

    <div class="list-body">

    <!-- List of followers a certain user has -->
      <div class='follower-list'>

        <h3>Followers({{ $followers->count() }})</h3>

        @foreach ($followers as $follower )

        <div class="media">
            <div class="media-left">
                <img class="mr-3" onclick="window.location='/gallery/{{ $follower->u_id }}'" 
                src="{{ asset('photos/dummy-profile.png') }}" alt="Generic placeholder image" 
                height=64 width=64>
            </div>
            
            <div class="media-body">
              <h4 class="media-heading text-primary" onclick="window.location='/gallery/{{ $follower->u_id }}'">
              {{ $follower->full_name}}</h4>
            </div>
        </div>

        @endforeach

      </div>
      <!-- List of followers a certain user has -->


      <!-- Creates a border between follower and following list -->
      <div class=rounded></div>
      <!-- Creates a border between follower and following list -->

      <!-- List of the users a certain user is Following -->
      <div class='following-list'>

        <h3>Following({{ $followings->count() }})</h3>

        @foreach ($followings as $following)

        <div class="media">
            <div class="media-left" >
                <img class="mr-3"  onclick="window.location='/gallery/{{ $following->u_id }}'" 
                src="{{ asset('photos/dummy-profile.png') }}" alt="Generic placeholder image" 
                height=64 width=64>
            </div>
            
            <div class="media-body">
              <h4 class="media-heading text-primary" onclick="window.location='/gallery/{{ $following->u_id }}'">
              {{ $following->full_name }}</h4>
            </div>
        </div>
            
        @endforeach

        <!-- List of the users a certain user is Following -->

      </div>

    </div>

    @include('layouts.footer') 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<html>


