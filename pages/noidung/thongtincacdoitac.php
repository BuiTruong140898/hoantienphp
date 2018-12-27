          <div class="card mb-3" style="width: 100%"> 
            <div class="card-header">
                    <h4><i class="fa fa-table"></i>Các đối tác</h4>
                   
            </div>
            
            <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                <form name="a" method="get" target="" action="">
                <!-- <input type="hidden" name="hienthi" value="timkiemdoitac"> -->

                <input type="text" name="doitac" style="width: 95%"  placeholder="Search tên website | VD: lazada.vn">
                <input type="hidden" name="hienthi" value="timkiemdoitac">
               <span class="input-group-append">
                        <button  name="search_doitac" value="1" class="btn btn-success">
                            <i class="fa fa-search"></i>
                        </button>
                        
                    </span>
                    </form>
            </div>
            <div class="table-responsive">
          <table class="table table-bordered" id="tblCashback" width="100%" cellspacing="0">
                    
                        <tr>
                            <td>Id đối tác</td>
                        <td>Thông tin đối tác</td>
                        <td>Images</td>
                        <td>Thông tin chiết khấu</td>
                        <td>Link đối tác</td>
                        <td><a href="doitac/themdoitac.php"><button type="button">Thêm</button></a></td>
                    </tr>
            <?php
            require 'mysql/conn.php';
             if (isset($_GET['search_doitac'])) {
                 $search_doitac = $_GET['doitac'];

                 $sql = "select * from doitac where thongtindoitac LIKE '%".$search_doitac."%'";
             } else {
                 $sql = 'select * from doitac order by iddoitac desc';
             }

            $doitac = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($doitac)) {
                ob_start(); ?>
            <tr>
                <td> ['iddoitac']</td>
                <td>['thongtindoitac']</td>
                <td><img width="100" height="50" src= "['images']"></td>
                <td> ['thongtinchietkhau']</td>
                <td> ['linkdoitac']</td>
                <td><a href="doitac/suadoitac.php?iddoitac=['iddoitac']"><button type="button">Sửa</button></a><a onclick="return confirm('Bạn có chắc chắn muốn xoá dữ liệu này không!')" href="doitac/xoadoitac.php?iddoitac=['iddoitac']"><button style="background: red; color:white" type="button">Xoá</button></a></td>
           </tr>



            <?php 
           $s = ob_get_clean();
                $s = str_replace("['iddoitac']", $row['iddoitac'], $s);
                $s = str_replace("['thongtindoitac']", $row['thongtindoitac'], $s);
                $s = str_replace("['images']", $row['images'], $s);
                $s = str_replace("['thongtinchietkhau']", $row['thongtinchietkhau'], $s);
                $s = str_replace("['linkdoitac']", $row['linkdoitac'], $s);
                echo $s;
            }
              ?>
              </table>
</div>
</div>
             