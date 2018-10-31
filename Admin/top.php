<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index">AFRICA NEWS AGENCY </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="index"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                    <li role="presentation"><a href="profile"><i class="fa fa-user"></i> <?=$_SESSION['names']?> </a></li>
                    <li role="presentation"><a href="php/logout.php"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>