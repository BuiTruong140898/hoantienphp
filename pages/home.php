<?php session_start();
if(isset($_COOKIE['cookie_dangnhap']))
	$_SESSION['start']=$_COOKIE['cookie_dangnhap'];
if(!isset($_SESSION["start"]))//{//echo($_SESSION['start']);}
header('location:homedangnhap.php');

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
    <![endif]-->
    <link href="cssSlide.css" rel="stylesheet">
</head>

<body style="margin-bottom:50px ">
    
    <?php 
    require "mysql/dbcon.php";
     ?>
    <div id="wrapper">
        <!-- Navigation -->
           <!-- Navigation -->
              <nav class="navbar navbar-default">
    <div class="container-fluid header-nav">
        <div class="container nav-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">HOANTIEN</a>
            </div><!--navbar-header-->
            <div class="search-menu-container">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
                        <div class="search-form nav navbar-nav col-md-6 col-sm-12">
                            <form class="navbar-form navbar-left" action="">
  <div class="input-group">
    <input  onkeyup="searchdoitac(this.value)"  type="text" class="form-control" NAME="doitac" placeholder="Search website liên kết ">
    <div class="input-group-btn">
     
      <button class="btn btn-default" type="submit"  NAME="search_doitac" value="1" >
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  
</form>
                        </div>
                        <ul class="nav navbar-nav navbar-right header-menu">
                      
      <li class="dropdown">
                    <a class="dropdown-toggle dropbtn" data-toggle="dropdown" href="#">
                        Xin chào <?php echo $_SESSION['start']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user dropdown-content">
                        <li> <a href="home.php?hienthi=thongtingiaodich"><i class="fa fa-fw fa-area-chart"></i>Thông tin giao dịch</a></li>
                        <li> <a href="home.php?hienthi=thongtincanhan"><i class="fa fa-fw fa-info-circle"></i>Thông tin cá nhân</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Khiếu nại</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                        </ul>
                    </div><!--navbar-collapse-->
                </div>
            </div>
        </div>

    </div><!--container-->
</nav>
        </nav>
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
              }
              
               ?>  
           </div>
           <div class="row">
            <div class="card-header">
                    <h4><i class="fa fa-table"></i> Các website liên kết</h4>
                   
            </div>
            <div id='hienthidoitac'>

            <?php
            require 'mysql/conn.php';
            
            $sql="select * from doitac limit 0,12";

            $doitac=mysqli_query($con,$sql);
            $i=mysqli_num_rows($doitac);
            while($i>0){
                 $row=mysqli_fetch_assoc($doitac);
             ?>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div style="height: 110px" class="panel panel-primary" onmouseover="doiTacOver(this)" onmouseout="doiTacOut(this)">
                     <a  style="text-align: center; text-decoration: none; display: block" href=<?php echo '"'.$row['linkdoitac'].'"' ?>>
                    <div align="center" class="panel-white">
                        <img align="center" src=<?php echo '"'.$row['images'].'"' ?>width="180px" height="80px">
            
                               

                                 
                                <div class="clearfix"></div>
                            </div>
                            <span style=" text-align: center; text-decoration: none; display: block; float:bottom"><?php echo $row['thongtinchietkhau'] ?></span>
                        </a>
                </div>
            </div>
            <?php
            $i--;
        }
              ?>
  </div>     

<button id="xemthemdoitac" onclick="xemthemdoitac()" class="btn-primary" style="height:30px;width:100%">Xem tất cả các website liên kết</button>
 



        </div>
        <div class="row">

            <div class="card-header">
                    <h4><i class="fa fa-table"></i> Deal khủng</h4>
                   
            </div>
 </div> 
        
        <!-- /.row -->
        <!-- /.row -->
        <!-- /#page-wrapper -->
    </div>
    <script>
         function doiTacOver(a)
         {
          a.style.paddingTop="0px";
          a.style.fontSize='20px';
         }
         function doiTacOut(a)
         {
           a.style.paddingTop="0px";
          
          a.style.fontSize='';
         }

</script>
<script type="text/javascript">
  function xemthemdoitac() {
    document.getElementById('xemthemdoitac').style.display='none';
  var xhttp; 
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("hienthidoitac").innerHTML += this.responseText;
    }
  };
  xhttp.open("GET", "xemthemdoitac.php", true);
  xhttp.send();
}
</script>

<script type="text/javascript">
  function searchdoitac(str) {
    if(str.length!=0)
    document.getElementById('xemthemdoitac').style.display='none';//khi chuoi co gia tri thi an thanh xemthemdoitac
  else
    document.getElementById('xemthemdoitac').style.display='inline';//khi chuoi bi xoa thi hien lai thanh xemthemdoitac
     
  var xhttp; 
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("hienthidoitac").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "searchdoitac.php?q="+str, true);
  xhttp.send();
}

</script>
    <script type="text/javascript" src="jsSlide.js">
	</script>
    <!-- /#wrapper -->
    <!-- jQuery -->
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