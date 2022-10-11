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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Liên hệ</a></li>
                        <li class="nav-header">Thông tin</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Nhiệm vụ</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Lời Hứa</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;Lịch sử</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Lịch sử của HAU</strong>
                </div>


                <p>
                <div class="hero-unit-2">
        <br>
        - Ngày 8/6/1961, Chính phủ có Văn bản số 1972.CN, cho phép Bộ Kiến Trúc mở lớp đào tạo Kiến trúc sư. Đây có thể coi là mốc thời gian đầu tiên cho sự hình thành của Khoa Kiến trúc.
        <br>

        - Ngày 3/9/1961, Khai giảng khóa 1. Khóa này được biên chế thành ngành Kiến trúc khóa VI Trường Đại Học Bách khoa Hà Nội. Ban lãnh đạo lớp đào tạo do Thứ Trưởng KTS. Nguyễn Cao Luyện, KTS. Nguyễn Nghi là phó ban phụ trách công tác giáo vụ.
        <br>
        - Những nhà giáo đầu tiên là các thầy giáo KTS. Vũ Tam lang, HS. Đặng Quý Khoa, KS. Dương Tiến Thọ, KS. Lê Văn Hội, KS. Nguyễn Văn Tợ, KS. Nguyễn Khánh Hội. Năm 1962, 1963 có thêm KS. Dương Văn Cánh và KTS. Huỳnh Lẫm.
        <br>

        - Cán bộ Kiến Trúc tham gia giảng dạy có KTS. Nguyễn Văn Ninh, KTS. Hoàng Như Tiếp, KTS. Trần Hữu Tiềm, KTS. Tạ Mỹ Duật, KTS. Đoàn Văn Minh, KTS.Đoàn Ngọ, KTS. Nguyễn Ngọc Chân, KTS. Khổng Toán, TS.KTS. Vương Quốc Mỹ, KTS. Nguyễn Hữu Thứt, KS. Vũ Thận, KS. Nguyễn Văn Tài, KS. Trịnh Hoài Linh, KS. Phạm Đình Biều... Cán bộ giảng dạy Mỹ Thuật có các họa sỹ: Trần Văn Cẩn, Nguyễn Đức Nùng, Lương Xuân Nhị, Vương Trình, Ngô Tôn Đệ, Trịnh Thiệp, Nhà Điêu khắc Lê Công Thành... Cán bộ giảng dạy các môn cơ sở và kỹ thuật cơ sở: Thái Thanh Sơn, Tô Xuân Dũng, Hoàng Văn Thân, Nguyễn Bân, Lều Thọ Trình, Trương Hùng Thiên, Nguyễn Văn Yên, Nguyễn Kim Luyện, Nguyễn Thái...
        <br>

        - Tháng 6/1962, kỳ thi tuyển sinh lớp Kiến trúc sư Khóa II tại Trường Trung cấp Kiến trúc Hà Đông đã có 40 thí sinh trúng tuyển.
        <br>

        - Tháng 9/1962, tuyển sinh bổ sung thêm 60 sinh viên khóa II qua thi năng khiếu trong sinh viên Khoa Xây dựng khóa VII Trường Đại học Bách khoa.
        <br>

        - Tháng 5/1963 tuyển sinh 30 sinh viên khóa III từ sinh viên khóa VIII Bách khoa qua thi kiểm tra năng khiếu.
        <br>

        - Ngày 16/10/1963, lớp đào tạo Kiến trúc sư chuyển từ Trường Đại học Bách khoa về cơ sở Phúc Xá, Ba Đình, Hà Nội. Tháng 11/1963, hình thành bộ máy tổ chức và triển khai việc giảng dạy và học tập.
        <br>
        - Đơn vị chức năng nhiệm vụ có 2 tổ:
        <br>
             + Tổ giáo vụ;
             <br>
             + Tổ Hành chính tổ chức.
             <br>

        -Tháng 5/1965 Trường sơ tán về xã Thụy Vân, huyện Lâm Thao, tỉnh Phú Thọ.
        <br>

        - Ngày 7/6/1967 Chính phủ có Quyết định sáp nhập lớp Kiến trúc sư vào Trường Đại học Xây dựng thành Khoa Kiến trúc Đô thị.
    Khoa Kiến trúc Đô thị đào tạo Kiến trúc sư và Kỹ sư Đô thị. Ngành Kiến trúc có trên 180 sinh viên, gồm các lớp: 64K, 65K, 66K, 67k, TC1, CT1.
    <br>

        - Ngày 17/9/1969 Chính phủ đã có Quyết định 181/CP về việ thành lập Đại học Kiến trúc, trên cơ sở của ngành Kiến trúc Đô thị tách ra từ Trường Đại học Xây dựng, địa điểm tại Hà Đông.
    Ngày mới thành lập, Khoa Kiến trúc có 4 bộ môn: Bộ môn Mỹ thuật, Bộ môn Kiến trúc dân dụng, Bộ môn Kiến trúc Công nghiệp, Bộ môn Quy hoạch Đô thị & Nông thôn.
    <br>

        - Đầu năm 1972, Trường sơ tán về Từ Châu, huyện Thanh Oai, Hà Tây.
        <br>

        - Tháng 7 năm 1972 Trường sơ tán về xã Ngọc Thanh, huyện Mê Linh, Tỉnh Vĩnh Phú.
        Từ 1979 - nay: Ổn định, phát triển và hòa nhập
<br>
        - Công tác giảng dạy, nghiên cứu khoa học không ngừng được cải tiến và đã đem lại chất lượng cao trong công tác đào tạo Kiến trúc sư. Vào thời điểm 1996, lần đầu tiên mô hình đào tạo Kiến trúc sư theo xưởng ra đời,cho đến nay đã có hai lần chuyển đổi mô hình cho phù hợp. Mô hình đào tạo theo xưởng tại Khoa Kiến trúc là phù hợp với xu thế đào tạo Kiến trúc sư trên thế giới( theo Hiến chương UIA 2005).

    
                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


