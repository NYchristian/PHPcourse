<?php
//include auth.php file on all secure pages
include("auth.php");
include("server.php");
$upload_dir = 'uploads/..';
?>
<!DOCTYPE html>

<head>  
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p><a href="home.php">EDIT GROUP</a>
<p><a href="home.php">EDIT ITEM</a></p>

</div>
           <title>ITEM IMAGES</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
<body>  
           <br />  
           <div class="container" style="width:800px;">  
                <h3 align="center">ITEM IMAGES</h3><br />  
                <ul class="nav nav-tabs">  
                     <li class="active"><a data-toggle="tab" href="#products">GROUP A</a></li>  
                     <li><a data-toggle="tab" href="#cart">GROUP B <span class="badge"><?php if(isset($_SESSION["username"])) { echo count($_SESSION["username"]); } else { echo '0';}?></span></a></li>  
                </ul>  
                <div class="tab-content">  
                     <div id="products" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM info ORDER BY id ASC";  
                     $result = mysqli_query($db, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-4" style="margin-top:12px;">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">  
                               <img src="<?php echo $upload_dir.$row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>  <div id="cart" class="tab-pane fade">  
                          <div class="tab-content">  
                     <div id="products" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM info ORDER BY id ASC";  
                     $result = mysqli_query($db, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-4" style="margin-top:12px;">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">  
                               <img src="<?php echo $upload_dir.$row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               
                          </div>  
                     </div> 
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                </div>  
           </div>  
      </body>  
                

                     <?php  
                       
                     ?> 


 
<?php  
                       
                  
?>






</body>
</html>