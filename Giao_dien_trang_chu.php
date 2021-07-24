
<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$dbname="testing";

$conn=new mysqli("$hostname","$username","$password","$dbname");
if($conn){

}else{
	echo "connection Failed!!!";
}
?>
<html lang="en">
    <head>
        <title>Trang chủ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=device-width, initial-scale=1.0">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
           google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['time', 'temperature'],
          
          //PHP Code 
          <?php
              $query="select * from template";
              $res=mysqli_query($conn,$query);
              while($data=mysqli_fetch_array($res)){
                $time=$data['time'];
                $temperature=$data['temperature'];
                
          ?>  
           ['<?php echo $time;?>',<?php echo $temperature;?>], 
          <?php      
              }
          ?> 
 
            ]);
            var options = {
            title: 'Nhiệt độ',
            curveType: 'function',
            legend: { position: 'bottom' }
             };
         var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
         chart.draw(data, options);
         }
         init_reload();//update dữ liệu
        function init_reload(){
         SetInterval( function(){
         window.location.reload();
        },500);
    }
        </script>
       
        <style>
            body{
                
                margin: 0px auto;
                
                
            }
            #menu_top{
                background-color: white);
                height: 80px;
                width: 90%;
                line-height:80px ;

            }
            #banner{
                background-color: aqua;
                height:none;
                width: 100%;
            

            }
            #menu_top ul{
                 margin:0px ;
                 padding: 0px;}
            #menu_top ul li{
                 list-style: none;
                 float: right;
                 text-align: center;
            }
            #menu_top ul li a:hover{
                background-color:aliceblue ;
            }
            #menu_top ul li a{
                 text-decoration: none;
                 display: block;
                 height: 80px;
                line-height: 80px;
                color: rgba(0, 0, 0, 0.541);
                padding: 0px 20px 0px 0px;
                font-family:Cambria;
                
                }
            
            #main{
                background-color: aliceblue;
                height: 500px;
                width: 100%;

            }
            
                
   
             #footer{
                 background-color: black;
                 width: ;
                min-height: 100px;
                 clear:left ;
                line-height:100px ;
                text-align: center;}
            #footer #left{
                width: 30%;     
                min-height:50px;
                float: left;

            }
            #footer #left img{
                margin-top:40px;
                min-height:50px;
               
            }
            #footer #midd{
                min-height:50px;
                width: 40%;
                line-height: 50px;
                float: left;
                
            }
            #footer #midd p{
                color: white;
                text-align: left;
            }
                
            
            #curver_chart{
                margin-bottom: 20px;
            }

        </style>
    </head>
    <body >
        
        <div id="menu_top">
            
            <ul class="menu">
                <a href="/web/trangchu.php"><img src="http://airsense.vn/resource/airsense.vn/wp-content/uploads/2020/04/airsense.png" width="300px" height="80px" float:left></a>
                <li><b><a href="liên kết" title="Giúp Đỡ">GIÚP ĐỠ</a></li>
                <li><a href="/web/login.php" title="đăng nhập">ĐĂNG NHẬP</a></li>
                        
                <li><a href="/web/blog.html" title="thông tin">VỀ CHÚNG TÔI</a></li>
                <li><a href="/web/trangchu.php" title="trang chủ">TRANG CHỦ</a></li>
                
            </ul>
        </div>
        <div id="banner">
      
        <img src="https://png.pngtree.com/thumb_back/fh260/background/20190220/ourmid/pngtree-simple-simple-concise-blue-sky-image_9065.jpg" width="100%" height="600">
            </div>
        <div id="main">
        
            <div id="curve_chart" style="width: 900px; height: 500px"></div> 
        </div>
        <div id="footer">
        <div id="left">
        <a href="/web/trangchu.php"><img src="http://airsense.vn/resource/airsense.vn/wp-content/uploads/2020/04/airsense.png" width="200px" height="50px"  float:left></a>
        </div>
        
        <div id="midd">
            <p> Về chúng tôi</p>
        
        </div>
        </div>
    </body>
</html>