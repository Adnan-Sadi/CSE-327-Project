<!---  Header   -->
<Header>
    <div>
        <nav class="navbar navbar-default navigation-clean-button">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="/newsfeed">Photographers' Porfolio</a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse navbar-left" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/newsfeed">Home</a></li>

                        <!-- Checking if user is logged in -->
                        @if (Session::get('u_id'))
                        <li><a href="{{ asset('profileindex') }}">{{ Session::get('username') }}</a></li> 
                        @endif
                        <!-- Checking if user is logged in -->

                        <li><a href="/gallery/{{ Session::get('u_id') }}">Gallery</a></li>
                        <li><a href="/follower-page/{{ Session::get('u_id') }}">Followers/Following</a></li>
                    </ul>

                    <!-- Checking if user is not logged in -->
                    @if (!Session::get('u_id'))
                        <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="/login">Log In</a> 
                        <a class="btn btn-default action-button" role="button" href="/registration">Sign Up</a></p>   
                    @else
                    <!-- Checking if user is not logged in -->

                    <p class="navbar-text navbar-right actions"><a class="btn btn-default action-button" role="button" href="/logout">Logout</a></p>   
                    @endif
                    
                    <ul class="wrap">
                        <div class="search">
                           <input type="text" class="searchTerm" placeholder="Search By Username...">
                           <button type="submit" class="searchButton">
                             <i class="fa fa-search"></i>
                          </button>
                        </div>
                    </ul>
                </div>
                
            </div>
        </nav>
    </div>
</Header>
<!---  Header   -->