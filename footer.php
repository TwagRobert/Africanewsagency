
	<div  class="clearfix"></div>
	<footer>
        <div class="footer_area">
            <div class="footer_menu">
                <ul class="list-inline f_menu">
                    <li> <a href="index">Home </a></li>
                    <?php $selection =  $con->query("SELECT * FROM `categories`");
                              while($disp = $selection->fetch()){?>
                                <li> <a href="category/<?=str_replace(' ', '', ucwords($disp['category_link']));?>"><?=ucwords($disp['category'])?> </a></li>
                        <?php    }               
                        ?>   
                </ul>
            </div>
            <p>
                <a href="#" class="footer-icons"> <i class="fa fa-facebook"></i></a>
                <a href="#" class="footer-icons"> <i class="fa fa-twitter"></i></a>
                <a href="#" class="footer-icons"> <i class="fa fa-instagram"></i></a>
                <a href="#" class="footer-icons"> <i class="fa fa-rss"></i></a>
            </p>
            <p>Copyright © 2018 AFRICA NEWS AGENCY. ALL RIGHTS RESERVED <a href="//www.dmca.com/Protection/Status.aspx?ID=64f1df36-3929-4e3f-a6f3-218ad37efbd7" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w150-5x1-08.png?ID=64f1df36-3929-4e3f-a6f3-218ad37efbd7" alt="DMCA.com Protection Status"/></a> </p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
</body>

</html>