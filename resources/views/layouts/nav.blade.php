



 <nav class="navbar navbar-default navbar-fixed-top mega-nav">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse " id="MainMenu">
            <ul class="nav navbar-nav menu-list">
                <li class="dropdown list-category">
                    <li><a href="{{url('/')}}">Home</a></li>



                    @if(Auth::check())
                      <li><a href="{{url('makeListing')}}">Postavi oglas</a></li>
                      <li><a href="{{url('userListing')}}">Moji oglasi</a></li>

                    @endif

               </ul>

            </ul>

            <ul class="nav navbar-nav navbar-right MainMenuRight">
                @if(Auth::check())
                    <li><a href="#">{{ucFirst(Auth::user()->name)}} {{Auth::user()->lname}}</a?</li>
                    @if(Auth::user()->status == 9)

                        <li><a href="" class="dropdown-toggle" data-toggle="dropdown">Admin many<b class="caret"></b></a?</li>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('adminDashBoard')}}">Pretrazi korisnike</a></li>
                            <li><a href="{{url('blockedUsers')}}">Blokirani korisnici</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>

                    @endif
                    <li><a href="{{url('logout')}}">Odjavi se</a></li>
                @elseif(!Auth::check())
                    <li><a href="{{url('register')}}">Registruj se</a></li>


                    <li class="dropdown">

                        <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Prijavi se <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="POST" action="{{ url('/login') }}" accept-charset="UTF-8" id="login-nav">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" name="email" id="mail" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" id="pass" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block"  value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>

                        </ul>
                    </li>
                @endif
            </ul>
        </div>

        </div>
  </nav>

















   