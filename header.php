<style>
    .goog-logo-link{
        display:none;
    }
    .goog-te-gadget .goog-te-combo {
    margin: -1px 0;
    background: #648cb5;
    color: white;
    font-size: 14px;
    font-family: cursive;
    font-weight: bold;
    }
</style>
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 mini-heade">
                <div style="margin:auto;">
                <div style="width:100px;float:right;" id="google_translate_element">
                </div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <ul class="list-inline">
                        <li> <a href="archives/1">Archive </a></li>
                        <li> <a href="about">About </a></li>
                        <li> <a href="contact">Contact </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 hidden-xs heade-non-mobile">
                <div style="postion:relative; display: block;">
                    <div class="header-logo">
                        <a href="home/"> <img src="assets/img/logo.jpg"/></a>
                    </div>
                    <div class="header-menu">
                        <ul class="list-inline">
                            <li> <a href="home/">Home </a></li>
                        <?php $selection =  $con->query("SELECT * FROM `categories`");
                              while($disp = $selection->fetch()){?>
                                <li> <a href="category/<?=str_replace(' ', '', ucwords($disp['category_link']));?>/1"><?=ucwords($disp['category'])?> </a></li>
                        <?php    }               
                        ?>   
                            <!-- <li>
                                <a href="#" id="search-toggle"> <i class="fa fa-search"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-12 hidden-xs" id="search-div">
                <div>
                    <div style="float:right">
                        <form class="form-inline" method="get">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Type Here...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div></div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                <div>
                    <p style="position:relative;"> <img src="assets/img/logo.jpg"/>
                        <a href="#" id="menu-trigger" style="position: absolute; top: 40%;right:5px;"> <i class="fa fa-navicon"></i></a>
                    </p>
                </div>
                <div id="header-menu-mobile" class="header-menu-mobile">
                    <ul>
                        <li> <a href="index">Home </a></li>
                        <?php $selection =  $con->query("SELECT * FROM `categories`");
                              while($disp = $selection->fetch()){?>
                                <li> <a href="category/<?=str_replace(' ', '', ucwords($disp['category_link']));?>"><?=ucwords($disp['category'])?> </a></li>
                        <?php    }               
                        ?>   
                    </ul>
                </div>
                <div>
                    <div style="float:right">
                        <form class="form-inline" method="get">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Type Here...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div></div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>