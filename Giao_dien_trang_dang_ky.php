

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">     
    <link rel="stylesheet" type="text/css" href="../login/stype.css"> 
        <title>form đăng nhập</title>
        <style>
        *{
            //margin: 0;
            padding: 0;
            outline: none;//
        }
        :root{
            --bg1 :rgb(247, 173, 154);
            --bg2 :rgb(26, 80, 228);
        
            
        }
        
        #menu_top{
                background-color: white);
                height: 80px;
                width: 90%;
                line-height:80px ;
        }
        #menu_top ul{
                 margin:0px ;
                 padding: 0px;}

        #menu_top ul li{
                 list-style: none;
                 float: right;
            }
         #menu_top ul li a{
                 text-decoration: none;
                 display: block;
                 height: 80px;
                line-height: 80px;
                color: rgba(0, 0, 0, 0.541);
                padding: 0px 20px 0px 0px;
                font-family:Cambria;}    
        .cont{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height:650px;
            background-image:url(https://pdp.edu.vn/wp-content/uploads/2021/02/hinh-nen-may-trang-nen-xanh.jpg) ;
        }
        .form-login{
            width: 500px;
            height: 450px;
            background: #fff;
            border-radius: 15px;
        }
        .form-login input{
            height: 30px;
            width:65% ;
            border-radius: 10px;
            border-radius:5px ;
            border: 1px solid gray;
            padding-left: 15px;
            }
        
        .button input{
            width: 20%;
            height: 35px;
            margin-bottom: 30px;
            background: linear-gradient(120deg, var(--bg2),var(--bg1));
            border: none;
            border-radius: 5px;
            color: #fff;
            background-size: 200%;
            transition-delay: 0.2s;
           
            
            
        }
        .button input:hover{
            background-position: right;
            font-size: 15px;
        }
        .form-login h1{
            margin: relative;
        }
        .form-text{
            margin-bottom: 20px;
            position: relative;
        }
        label{
            float: left;
            width: 100px;
            padding-left: 25px;
            text-align: left;
        }
        input{margin-bottom: 4px;}
        </style>
        
        
        
        
    </head>
    <body>
   
        <div id="menu_top">         
            <ul>
                <a href="/web/Giao_dien_trang_chu.php"><img src="http://airsense.vn/resource/airsense.vn/wp-content/uploads/2020/04/airsense.png" width="300px" height="80px" float:left></a>
                <li><b><a href="liên kết" title="Giúp Đỡ">GIÚP ĐỠ</a></li>
                <li><a href="/web/Giao_dien_trang_login.php" title="đăng nhập">ĐĂNG NHẬP</a></li>
                <li><a href="/web/Giao_dien_trang_blog.html" title="thông tin">VỀ CHÚNG TÔI</a></li>
                <li><a href="/web/Giao_dien_trang_chu.php" title="trang chủ">TRANG CHỦ</a></li>
                
            </ul>
        </div>
        <div id="banner">
        <div class="cont">
               
                <form class="form-login" action="" method="post"> 
                <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
                <?php
                $conn=mysqli_connect("127.0.0.1","root","");
                $db=mysqli_select_db($conn,"testing");

                if(isset($_POST['submit'])){
                    $name=$_POST['name'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];   
                    $password=$_POST['password'];
                    $password=md5($password);
                    if(empty($_POST['name']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['password'])){
                        echo '<p style="color:red"> Vui lòng không bỏ trống!!!</p>';
                
                     }else{
                        
                            $sql="INSERT INTO `information`( `name`, `phone`, `email`, `password`) VALUES('$name','$phone','$email','$password')";
                            $query=mysqli_query($conn,$sql);
                            if($query!=0){
                                echo '<p style="text-align:center; color:green"> Bạn đã gửi đăng kí thành công!</p>';
                            }else{
                                echo '<p style="text-align:center;color:red"> Bạn gửi đăng kí không thành công!!!</p>';
                                }


                            }
                    }
                 
            ?>
                
                <div class="form-text">
                    <label>Họ & Tên</label>
                    <input type="text" name="name" placeholder="Viết có dấu" id=""/>

                </div>
                <div class="form-text">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" placeholder="sđt" id=""/>
                </div>
                <div class="form-text">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="email" id=""/>
                </div>
                <div class="form-text">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" placeholder="pasword" id=""/>
                </div>
                
                <div class="button">
                    <input type="submit"value="ĐĂNG KÝ" name="submit"/>
                    <input onclick="resetForm()" type="button" value="RESET">
                    <br>
                    
                    </div>      
                
                <span>Bạn đã có tài khoản? Đăng nhập<a href="../web/Giao_dien_trang_login.php"> tại đây</a> </span>
                
            </form>
            
            
        </div>
        </div>
      
    </body>
</html> 