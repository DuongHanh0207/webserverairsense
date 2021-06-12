

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">     
        
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
            height:800px;
            background-image:url(https://pdp.edu.vn/wp-content/uploads/2021/02/hinh-nen-may-trang-nen-xanh.jpg) ;
        }
        .form-login{
            width: 400px;
            height: 400px;
            background: #fff;
            border-radius: 15px;
        }
        .form-login input{
            height: 30px;
            width:55% ;
            border-radius: 10px;
            border-radius:5px ;
            border: 1px solid gray;
            padding-left: 15px;
            }
        
        .button input{
            width:60%;
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
            margin-bottom: 30px;
            position: relative;
        }
       
           
          </style>
    </head>
    <body>
        <div id="menu_top">         
            <ul>
                <a href="/web/trangchu.php"><img src="http://airsense.vn/resource/airsense.vn/wp-content/uploads/2020/04/airsense.png" width="300px" height="80px" float:left></a>
                <li><b><a href="liên kết" title="Giúp Đỡ">GIÚP ĐỠ</a></li>
                <li><a href="/web/login.php" title="đăng nhập">ĐĂNG NHẬP</a></li>
                <li><a href="/web/blog.html" title="thông tin">VỀ CHÚNG TÔI</a></li>
                <li><a href="/web/trangchu.php" title="trang chủ">TRANG CHỦ</a></li>
                
            </ul>
        </div>
        <div id="banner">
        <div class="cont">
            <form action="" method="post" class="form-login">
                <h1> TÀI KHOẢN</h1>
                <?php
                 $conn=mysqli_connect("127.0.0.1","root","");
                 $db=mysqli_select_db($conn,"testing");
                 if(isset($_POST['submit'])){
                     $phone=$_POST['phone'];
                     $password=$_POST['password'];
                     if(empty($_POST['phone']) or empty($_POST['password'])){
                        echo '<p style="color:red; text-align:center"> Vui lòng không bỏ trống!!!</p>';
                     }else{
                         $password=md5($password);
                         $sql="SELECT*FROM `information` WHERE phone='$phone'and password='$password'";
                         $query=mysqli_query($conn,$sql);
                         $num_rows=mysqli_num_rows($query);
                         if($num_rows!=0){
                             echo '<p style="color: green; text-align: center"> Bạn đã đăng nhập thành công!</p>';
                         }else{
                             echo'<p style="color:red; text-align: center"> Bạn đã đăng nhập không thành công!!!</p>';
                         }
                        }
                 }
                
                ?>
                <div class="form-text">
                  
                    <input type="text" placeholder="phone" name="phone"/>

                </div>
                <div class="form-text">
                    
                    <input type="password" placeholder="password" name="password"/>
                </div>
                
                <div class="button">
          
                    <input type="submit"value="ĐĂNG NHẬP" name="submit"/><br>
                    </div>      
                
                <span>Bạn chưa có tài khoản? Đăng kí<a href="../web/dangki.php"> tại đây</a> </span>
                
            </form>

        </div>
        </div>
      
    </body>
</html> 