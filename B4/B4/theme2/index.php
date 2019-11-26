<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bootstrap Project 2019</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>



<?php
// //Đọc file json
$data_json=file_get_contents('data.json');

// //chuyển json sang dạng mảng
 $result_json= json_decode($data_json,true);
//  print_r($result_json);

// //foreach
//  foreach ($result_json as $key=>$value){
//    echo $value.'<br/>';
//  }



 if(isset($_POST['sbm'])){
    $ten = $_POST['ten'];
    $file_name = $_FILES['file_upload']['name'];//lấy được tên files
    $tmp_name = $_FILES['file_upload']['tmp_name'];
    $file_error = $_FILES['file_upload']['error'];
    if($file_error>0){
        echo 'File upload bị lỗi';
    }else{
        move_uploaded_file($tmp_name,'upload/'.$file_name);
        echo 'Bạn đã upload thành công'.'<hr/>';
    }
    //update json
    //Gán key cho value
    $result_json[$ten] = $file_name;//Gán key bằng value???
    //ghi file json: dữ liệu cũ sẽ bị thay thế bằng dữ liệu mới
    $json_en=json_encode($result_json,JSON_UNESCAPED_UNICODE);

    //đưa dữ liệu vào json
    file_put_contents('data.json',$json_en);
    

}
?>

<div id="header" class="fixed-top">
	<div class="container">
		<div class="row">
        	<div id="logo" class="col-lg-5 col-md-5 col-sm-12">
            	<a href="index.php">vietpro academy</a>
            </div>
            <div id="menu" class="col-lg-7 col-md-7 col-sm-12"><a data-toggle="modal" data-target="#myModal" href="#">+ Thêm sách vào thư viện</a></div>
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

                            <?php
                            $i=1;
                            foreach($result_json as $ten=>$file_name){
                                   
                            ?>
                                <tr class="active">
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><?php echo $ten; ?> </td>
                                    <td class="text-center"><a href="read.php?file=<?php echo $file_name; ?>"><i class="fas fa-eye"></i></a></td>
                                    <td class="text-center"><a href="download.php?file=<?php echo $file_name; ?>"><i class="fa fa-download"></i></a></td>
                                </tr>

                                <?php }
                                ?>
                                
                                
                                <!-- <tr class="success">
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
                                </tr> -->
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
        
       <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Tên sách:</label>
            <input type="text" class="form-control" id="name" name="ten">
          </div>
          <div class="form-group">
            <label for="fileupload">Tải sách lên:</label>
            <input type="file" class="form-control-file border" id="fileupload" name="file_upload">
          </div>
          <button id="add-book" type="submit" class="btn btn-primary" name="sbm">Thêm sách</button>
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
