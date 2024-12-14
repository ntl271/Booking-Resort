<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">   
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head"  style="background-color: #ADD8E6;border-radius: 5px; padding: 2px;">
                                    <header>Danh Sách Tài Khoản</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        
                                      
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                        <tr>
                                            <th class="center"> STT</th>
                                            <th class="center"> Họ và Tên</th>
                                            <th class="center"> Email</th>
                                            <th class="center"> Sdt</th>  
                                            <th></th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- danh dách phòng --> 
                                        <?php  if(isset($data["alltaikhoan"])){
                                            $list_taikhoan  = json_decode($data["alltaikhoan"],true);
                                            $number = 1;
                                            if(!empty($list_taikhoan)){
                                                foreach($list_taikhoan  as $row_r){
                                                   
                                                    echo '<tr class="odd gradeX">
                                                    <td class="center">'.$number.'</td>
                                                    <td class="center">'.$row_r["ten"].'</td>
                                                    <td class="center">'.$row_r["email"].'</td>
                                                    <td class="center">'.$row_r["sdt"].'</td> ';
                                                    echo '<td class="center">
                                                        <a href="./admin/edittaikhoan/'.$row_r["username"].'" class="btn btn-tbl-edit btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>';
                                    
                                                    if ($data['username'] !== $row_r["username"]) {
                                                        echo '<button class="btn btn-tbl-delete btn-xs" onclick="deletetaikhoan(\''.($row_r["username"]).'\''.')">
                                                            <i class="fa fa-trash-o "></i>
                                                        </bttton>';
                                                    }
                                                    echo '
                                                    </td>
                                                </tr>';
                                                $number ++;
                                                }
                                            }
                                        }                                        
                                        ?>
										</tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->

        <script type="text/javascript">
            function thanhcong_up(){
                swal("Thành Công","Thông Tin đã được cập nhật" , "success");
            }
            function  thatbai_up(){
                swal("Lỗi......","Đã có lỗi xảy ra khi cập nhật thông tin. thử lại" , "warning");
            }

            function deletetaikhoan(username){
                swal({
                    title: "Delete?",
                    text: "Bạn muốn xóa không !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location ="./admin/deletetaikhoan/"+username;
                    } else {
                        swal("Quyết định của bạn thật tuyệt vời");
                    }
                    });
            }
        
        </script>
            <?php 
                if(isset($data["result_up"])){
                    if($data["result_up"]){
                        echo '<script type="text/javascript"> thanhcong_up(); </script>';
                    }else{
                        echo '<script type="text/javascript"> thatbai_up(); </script>';
                    }
                }


            ?>