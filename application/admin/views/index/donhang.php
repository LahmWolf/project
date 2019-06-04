<?php  
    if (!isset($_SESSION['emailAdmin'])) {
        ?>
        <script>
            window.location = "<?php echo URL_BASE;?>admin/login";
        </script>
    <?php
    }else{
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
        <h2 class="page-header">Danh sách đơn hàng đặt mua</h2>
        <table id="result" class="table table-bordered table-responsive table-hover text-center">
            <thead>
                <th class="text-center">ID</th>
                <th class="text-center">Tên KH</th>
                <th class="text-center">Email</th>
                <th class="text-center">SĐT</th>
                <th class="text-center">Địa chỉ</th>
                <th class="text-center">Tên ĐH</th>
                <th class="text-center">SL</th>
                <th class="text-center">Thành tiền</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Ngày lập</th>
                <!-- <th class="text-center">Trạng thái</th>
                <th class="text-center">Xóa</th> -->
            </thead>
            <?php  
            while ($row = $this->objDonHang->fetch(PDO::FETCH_ASSOC)) {
                extract($row);                       
            ?>
            <tr>
                <td><?php echo $donhang_id;?></td>
                <td>
                    <?php  
                    $database = new Libs_Model();
                    $db = $database->getConnection();
                    $donhang = new Admin_Models_Donhang($db);
                    $data = $donhang->getAllDonHang();
                    $khachhang = new Admin_Models_Khachhang($db);
                    $khachhang->khachhang_id = $khachhang_id;
                    $RowKH = $khachhang->getKhachHangById();
                    ?>
                    <?php echo $RowKH['ten']; ?>
                </td>   
                <td><?php echo $RowKH['email']; ?></td>             
                <td><?php echo $RowKH['soDienThoai']; ?></td>
                <td><?php echo $RowKH['diaChi']; ?></td>
                <td>
                    <?php  
                    $database = new Libs_Model();
                    $db = $database->getConnection();
                    $dongho = new Admin_Models_Dongho($db);
                    $dongho->dongho_id = $dongho_id;
                    $RowDH = $dongho->getDongHoById();
                    ?>
                    <?php echo $RowDH['ten']; ?>
                </td>                
                <td><?php echo $soLuong;?></td>
                <td><?php echo $thanhTien;?></td>
                <td><?php echo $trangThai;?></td>
                <td><?php echo $created;?></td>
            </tr>
            <?php } ?>
        </table >
        <h2>Thống kê doanh thu</h2>  
        <table class="table table-bordered table-responsive table-hover text-center">
    <thead>
      <tr>
        <th style="width: 300px">Thống kê</th>
        <th style="width: 500px">Xử lý</th>
        <th>Kết quả</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tổng số hóa đơn được lập trong tháng</td>
        <td>
            <div>
                <select style="width: 150px" class="form-control" onchange="locTheoThang(this.value);">
                    <option value="0">-- Chọn tháng--</option>
                    <option value="1">Tháng 1</option>
                    <option value="2">Tháng 2</option>
                    <option value="3">Tháng 3</option>
                    <option value="4">Tháng 4</option>
                    <option value="5">Tháng 5</option>
                    <option value="6">Tháng 6</option>
                    <option value="7">Tháng 7</option>
                    <option value="8">Tháng 8</option>
                    <option value="9">Tháng 9</option>
                    <option value="10">Tháng 10</option>
                    <option value="11">Tháng 11</option>
                    <option value="12">Tháng 12</option>
                </select>
        </td>
        <td style="color:Tomato;" id="loctheothang"></td>
      </tr>
      <tr>
        <td>Tổng số hóa đơn trong ngày</td>
        <td>
            <div class="row">
              <div class="col-md-4 col-xs-7" style="padding-right: 0px">
                    <input class="form-control" id="txtsumHD" type="search" style="width: 150px">
                    </div>
                    <div class="col-md-8 col-xs-5" style="padding-left: 0">
                        <button class="btn btn-sm btn-danger" onclick="sumHD2()">Tìm kiếm</button>
                    </div>
            </div>
        </td>
        <td style="color:DodgerBlue;" id="sumHD2">
            
        </td>
      </tr>
      <tr>
        <td>Tổng doanh thu trong tháng</td>
        <td>
            <div class="row">
              <div class="col-md-4 col-xs-7" style="padding-right: 0px">
                    <input class="form-control" id="txtHD" type="search" style="width: 150px">
                    </div>
                    <div class="col-md-8 col-xs-5" style="padding-left: 0">
                        <button class="btn btn-sm btn-danger" onclick="sumHD()">Tìm kiếm</button>
                    </div>
            </div>
        </td>
        <td style="color:MediumSeaGreen;" id="sumHD">
           
        </td>
      </tr>
    </tbody>
  </table>    
    <script>
        function delete_donhang(id) {
            var response = confirm("Bạn có chắc muốn xoá đơn hàng này khi đã giao hàng xong?");
            if (response==true) {
                window.location = "<?php echo URL_BASE;?>admin/deleteDonHang?id="+id;
            }
        }
    </script>
</div>  <!--/.main-->
<?php } ?>