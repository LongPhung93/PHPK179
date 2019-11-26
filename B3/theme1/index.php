<!-- Chọn style-->
<?php
        if(isset($_GET['style'])){
            $style=$_GET['style'];
            }
            else{
        $style='style3';
            }
?>




<!-- Đổi ngôn ngữ

//Truyền tham số lên url:index.php?tham_so1=gia_tri1&tham_so2=gia_tri2&tham_so3=gia_tri3



//Đọc file json
$data=file_get_contents('data.json');

//chuyển json sang dạng mảng
$result_array= json_decode($data,true);

//foreach
foreach ($result_array as $key=>$value){
    echo $value;
}
//ghi file json
$data_json=json_encode($result_array);

//đưa dữ liệu vào json
file_put_contents('data.json',$data_json);

-->


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bootstrap Project 2019</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<link rel="stylesheet" href="css/<?php echo $style;?>.css"/>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>



<div id="header" class="fixed-top">
	<div class="container">
		<div class="row">
        	<div id="logo" class="col-lg-5 col-md-5 col-sm-12">
            	<a href="index.php">vietpro academy</a>
            </div>
            <div id="menu" class="col-lg-5 col-md-5 col-sm-12">
                <a href="index.php?style=style1">Style 01</a> | 
                <a href="index.php?style=style2">Style 02</a> | 
                <a href="index.php?style=style3">Style 03</a> | 
                <a href="index.php?style=style4">Style 04</a>
            </div>
            <div id="language" class="col-lg-2 col-md-2 col-sm-12">
                <a href="index.php?language=VI">Việt Nam</a> |
                <a href="index.php?language=EN">England</a>
            </div>
		</div>
	</div>
</div>
<div id="body">
	<div id="main" class="container">  	
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            THƯ VIỆN SÁCH ONLINE
                            <small>Một ứng dụng nhỏ trong lộ trình khóa học Full Stack PHP.</small>
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th width="10%">#</th>
                                    <th width="60%">TÊN SÁCH</th>
                                    <th width="15%" class="text-center">ĐỌC THỬ</th>
                                    <th width="15%" class="text-center">TẢI VỀ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <th scope="row">1</th>
                                    <td>Tài liệu Full Stack Web Developer</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr class="success">
                                    <th scope="row">2</th>
                                    <td>Tài liệu Full Stack PHP Developer</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr class="info">
                                    <th scope="row">3</th>
                                    <td>Tài liệu Full Stack Javascript Developer</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr class="warning">
                                    <th scope="row">4</th>
                                    <td>Tài liệu Full Stack Web Python</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr class="danger">
                                    <th scope="row">5</th>
                                    <td>Tài liệu Full Stack Mobile Developer</td>
                                    <td class="text-center"><a href="#"><i class="fas fa-eye"></i></a></td>
                                    <td class="text-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
	<div class="container">
    	<p class="text-center">© 2019 <a href="https:vietpro.edu.vn" target="_blank">Vietpro Academy</a>. <b>Version:</b> 4.0</p>
    </div>
</div>




<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm sách vào thư viện</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
       <form action="#">
          <div class="form-group">
            <label for="name">Tên sách:</label>
            <a href="#"><input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="fileupload">Tải sách lên:</label>
            <a href="#"><input type="file" class="form-control-file border" id="fileupload">
          </div>
          <button id="add-book" type="submit" class="btn btn-primary">Thêm sách</button>
        </form> 
        
      </div>

    </div>
  </div>
</div>


<?php
/*// Get the contents of the JSON file 
$strJsonFileContents = file_get_contents("data.json");
// Convert to array 
$array = json_decode($strJsonFileContents, true);
var_dump($array); // show contents*/





?>



</body>
</html>