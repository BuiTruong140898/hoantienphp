<!-- Example DataTables Card-->

<?php require 'mysql/conn.php'; ?>
    <div class="card mb-3" style="width: 100%">
        <div class="card-header">
            <h4><i class="fa fa-table"></i> Xem Chiết Khấu |</h4>
            <div>Chiết khấu đã duyệt (approved):<?php 
            $sql="SELECT sum(sotien) from thongtingiaodich where trangthai='đã duyệt'";
            $chietkhaudaduyet=mysqli_query($con,$sql);
            $rowchietkhaudaduyet=mysqli_fetch_array($chietkhaudaduyet);
            echo $rowchietkhaudaduyet["0"].'đ';
             ?> <span id="lblApprovedCashback" class="badge badge-success"></span></div>

            <div>Chiết khấu đang chờ duyệt (pending):<?php 
            $sql="SELECT sum(sotien) from thongtingiaodich where trangthai='chờ duyệt'";
            $chietkhaudaduyet=mysqli_query($con,$sql);
            $rowchietkhaudaduyet=mysqli_fetch_array($chietkhaudaduyet);
            echo $rowchietkhaudaduyet["0"].'đ';
             ?> <span id="lblPendingCashback" class="badge badge-danger"></span></div>
            <div>Tổng số tiền:<?php 
            $sql="SELECT sum(sotien) from thongtingiaodich where trangthai='đã duyệt' or trangthai='chờ duyệt'";
            $chietkhaudaduyet=mysqli_query($con,$sql);
            $rowchietkhaudaduyet=mysqli_fetch_array($chietkhaudaduyet);
            echo $rowchietkhaudaduyet["0"].'đ';
             ?></div>
        </div>
        <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                    <form method="get" action="">
                        <input type="hidden" name="hienthi" value="tinkiemgiaodich">
                    <input style="width: 90%" id="txtGlobalSearch" class="form-control form-control-ck" name="giaodich" type="text" placeholder="Search theo ID đơn hàng, Đối tác, trạng thái ">
                    <span class="input-group-append">
                        <button id="btnSearch" name="search_giaodich" value="1" class="btn btn-success" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
        <div class="card-body">
            <div class="table-responsive">
                
                <table class="table table-bordered" id="tblCashback" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%">ID đơn hàng</th>
                            <th width="10%">Khách hàng</th>
                            <th width="10%">Đối tác</th>
                            <th width="10%">Số tiền</th>
                            <th width="10%">Chiết khấu</th>
                            <th width="10%">Ngày mua</th>
                            <th width="20%">Ngày dự kiến duyệt</th>
                            <th width="20%">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <td>
                        <?php 
                         if(isset($_GET["search_giaodich"])){
                            $giaodich=$_GET["giaodich"];
                        
                            $sql="select * from thongtingiaodich where iddonhang like'%".$giaodich."%' or doitac like '%".$giaodich."%'  or trangthai like N'%".$giaodich."%'"  ; 
                          
                        }
                        else
                      $sql = "SELECT * FROM `thongtingiaodich`";
                       $rows = mysqli_query($con,$sql);
                       $i= mysqli_num_rows($rows);
                       
                       
                        while ($row=mysqli_fetch_assoc($rows)) {
                                            
                         
                          ?> 
                            <tr>
                            <th width="10%"><?php echo $row['iddonhang'] ?></th>
                            <th width="10%"><?php echo $row['nguoidung'] ?></th>
                            <th width="10%"><?php echo $row['doitac'] ?></th>
                            <th width="10%"><?php echo $row["sotien"] ?></th>
                            <th width="10%"><?php echo $row["hoantien"] ?></th>
                            <th width="10%"><?php echo $row['ngaymua'] ?></th>
                            <th width="20%"><?php echo $row["ngaydukienduyet"] ?></th>
                            <th width="20%"><?php echo $row["trangthai"] ?></th>
                            </tr>
                           <?php
                       
                   
                       
                   }
                   mysqli_close($con);
                         ?>
                     </td>

                    </tbody>
                </table>
            </div> <!-- card-body-->
        </div> <!-- card-->
    </div>
    <!-- End of Example DataTables Card-->