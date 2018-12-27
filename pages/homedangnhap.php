<?php session_start();

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hoantien.tk</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![
    endif]-->
     
	<link href="cssSlide.css" rel="stylesheet">
</head>

<body >
    
    <?php 
    require "mysql/dbcon.php";
     ?>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default" >
    <div class="container-fluid header-nav">
        <div class="container nav-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homedangnhap.php">HOANTIEN</a>
            </div><!--navbar-header-->
            <div class="search-menu-container">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
                        <div class="search-form nav navbar-nav col-md-6 col-sm-12">
                            <form class="navbar-form navbar-left" action="">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  
</form >
                        </div>
        <ul class="nav navbar-nav navbar-right">
      <li><a data-toggle="modal" data-target="#myModal" href="#">Đăng nhập</a></li>
      <li><a data-toggle="modal" data-target="#myModal1" href="#">Đăng ký</a></li>
    </ul>
                    </div><!--navbar-collapse-->
                </div>
            </div>
        </div>

    </div><!--container-->
</nav>
<!--modal-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
       <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="left" style=" font-size:20px">Vui lòng điền thông tin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-signin" method="post" action="dangnhap.php">
     
      <div class="form-label-group">
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
       
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember-me" value="remember-me"> Nhớ tài khoản
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block"  type="submit">Đăng nhập</button>
     
    </form>
        </div>
        
		</div>
        </div>
     </div>     
            <!--modal-->
<div class="modal fade" id="myModal1">
   <div class="modal-dialog ">
      <div class="modal-content" >
       <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" align="left" style=" font-size:20px">Vui lòng điền thông tin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form class="form-signin" method="post" action="dangky.php">
     
  
                            <label for="name" class="col-md-4 control-label">Họ và tên</label>

                           
                                <input id="name" type="text" class="form-control" name="name" value="" placeholder="Nhập Họ và tên" required >

                                                    
                    

                    
                            <label for="email" class="col-md-4 control-label">Địa chỉ Email</label>

                        
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Nhập địa chỉ Email" required>

                                                         
                   

                       
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="Nhập Mật khẩu, vui lòng chọn mật khẩu khác với mật khẩu email facebook" required>

                 

                    
                            <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại Mật khẩu" required>
                     

                        <hr/>

                     
                     
                            <label for="bank_account_number" class="col-md-4 control-label">Số tài khoản</label>

                          
                                <input id="bank_account_number" type="text" class="form-control" name="bank_account_number" value="" placeholder="Nhập Số tài khoản" required >


                       
                            <label for="bank_owner" class="col-md-4 control-label">Tên chủ tài khoản</label>

                           
                                <input id="bank_owner" type="text" class="form-control" name="bank_owner" value="" placeholder="Nhập Tên chủ tài khoản" required >

                                                         

                      
                            <label for="bank_name" class="col-md-4 control-label">Ngân hàng</label>

                                <select class="form-control" name="bank_name" id="bank_name">
                                    <option>Chọn tên ngân hàng</option>
                                    <option value="ACB">ACB</option>
                                    <option value="Agribank">Agribank</option>
                                    <option value="DongABank">DongABank</option>
                                    <option value="TechcomBank">TechcomBank</option>
                                    <option value="Vietcombank">Vietcombank</option>
                                    <option value="Vietinbank">Vietinbank</option>
                                </select>

                                                           

                        
                            <label for="bank_branch" class="col-md-4 control-label">Chi nhánh ngân hàng</label>

                                                         <input id="bank_branch" type="text" class="form-control" name="bank_branch" value="" placeholder="Nhập Tên chi nhánh ngân hàng" required >


                        <hr/>                      

                                                       <br><input class="btn btn-lg btn-success btn-block" type="submit" name="dangky" value="Đăng ký"></a>

    </form>
        </div>
        
		</div>
        </div>
     </div>  
       <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade1">
    <div class="numbertext">1 / 3</div>
    <img src="1.png" style="width:100%">
   
  </div>

  <div class="mySlides fade1">
    <div class="numbertext">2 / 3</div>
    <img src="2.png" style="width:100%">
 
  </div>

  <div class="mySlides fade1">
    <div class="numbertext">3 / 3</div>
    <img src="3.png" style="width:100%">
  
  </div>

  <!-- Next and previous buttons -->

</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



        <div style="margin-top: 0px" class="container">
            
            <!-- /.row -->
            <div class="row">
              
              <?php if(isset($_GET["hienthi"]))
        $hienthi=$_GET["hienthi"];
        else
            $hienthi="";
              switch ($hienthi) {
                  case 'thongtincanhan':
                  require "noidung/thongtincanhan.php";
                      # code...
                      break;
                  case 'thongtingiaodich':
                  require "noidung/thongtingiaodich.php";
                  break;
                  case 'timkiemgiaodich':
                  require "noidung/thongtingiaodich.php";
                    # code...
                    break;
                  
    
                  default:
                  require "trangchu/hienthidoitac.php";
                      # code...
                      break;
              }
              
               ?>  
        </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
	<script type="text/javascript" src="jsSlide.js">
	</script>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>