<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản trị</title>
    <link href="<?php echo URL_BASE;?>/templates/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL_BASE;?>/templates/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL_BASE;?>/templates/admin/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo URL_BASE;?>/templates/admin/css/styles.css" rel="stylesheet">
    <link href="<?php echo URL_BASE;?>/templates/admin/css/layout.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="<?php echo URL_BASE;?>/templates/admin/ckeditor/ckeditor.js"></script>
    <script src="<?php echo URL_BASE;?>/templates/admin/ckeditor/ckfinder/ckfinder.js"></script>
    <script src="<?php echo URL_BASE;?>/templates/admin/Classes/PHPExcel.php"></script>
    <script type="text/javascript">
        function showData(){
            var search = document.getElementById("txtSearch").value;
            if (search.length == 0) {
                document.getElementById("result").innerHTML = "Nhập tên cần tìm kiếm";
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("result").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","<?php echo URL_BASE;?>admin/search/?ten="+search,true);
                xmlhttp.send();
            }
        }


        function showDataKH(){
            var search = document.getElementById("txtSearchKH").value;
            if (search.length == 0) {
                document.getElementById("result").innerHTML = "Nhập email khách hàng cần tìm kiếm";
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("result").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","<?php echo URL_BASE;?>admin/searchKH/?email="+search,true);
                xmlhttp.send();
            }
        }

        function locTheoThang(thang) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loctheothang").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","<?php echo URL_BASE;?>admin/loctheothang/?thang="+thang,true);
            xmlhttp.send();
        }

        function sumHD() {
            var search = document.getElementById("txtHD").value;
            if (search.length == 0) {
                document.getElementById("sumHD").innerHTML = "Nhập tháng cần tìm kiếm";
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("sumHD").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","<?php echo URL_BASE;?>admin/sumHD/?ma="+search,true);
                xmlhttp.send();
            }
        }

        function sumHD2() {
            var search = document.getElementById("txtsumHD").value;
            if (search.length == 0) {
                document.getElementById("sumHD").innerHTML = "Nhập ngày cần tìm kiếm";
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("sumHD2").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","<?php echo URL_BASE;?>admin/sumHD2/?ngay="+search,true);
                xmlhttp.send();
            }
        }

        function sumKH() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML =
              this.responseText;
            }
          };
          xhttp.open("GET", "<?php echo URL_BASE;?>admin/sumKH/", true);
          xhttp.send(); 
        }
    </script>
</head>
<body>
    <?php  
        session_start();
        if (!isset($_SESSION['emailAdmin'])) {        
            require TEMPLATE;
        }else{
        require 'templates/admin/header.php';   
        require TEMPLATE;
        require 'templates/admin/footer.php';
        }  
    ?>    
</body>
</html>
