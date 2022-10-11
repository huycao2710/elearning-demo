<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        
                        <li class="active"><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Liên hệ
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header">Thông tin</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Nhiệm vụ
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Lời Hứa
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;Lịch sử
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-phone-sign icon-large"></i>&nbsp;Thư mục</strong>&nbsp;
                </div>
                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="alert alert-success">  Liên hệ với chúng tôi qua </div>

                            <div class="row-fluid">
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;Facebook: <a href="https://www.facebook.com/huy.cao.2710/"> Huy Cao</a></p>
                                    <p><i class="icon-circle"></i>&nbsp;Email: <a href="mailto:caovanhuy2710@gmail.com">caovanhuy2710@gmail.com</a></p>
                                    
                                    


                                </div>
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;  SĐT - <a href="tell:0822102710">0822102710</a></p>
                                    <p><i class="icon-circle"></i>&nbsp;  Address - <a href="https://goo.gl/maps/yFU8vA1RjbkUZWuWA">Ngõ 194 Giải Phóng</a></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- end slider -->
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


