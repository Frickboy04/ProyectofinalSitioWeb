<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shopping LITE</title>
	 <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon" />


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />    
 
</head>
<body >

 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
 <img src="assets/logo.jpg" width="20%"/>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"><img src="assets/logo.jpg"/></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  </div>
             
           
        </div>
    </div>
     
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              
                            <a  href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ln">
                                INICIAR SESIÓN
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal" data-target="#su">
                                REGISTRO
                            </a>
							
						                <a  href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#an">
                                COLABORADORES
                            </a>

                            <a  href="foro/" class="btn btn-primary btn-lg" >
                                FORO
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                       
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>



       <div id="page-wrapper" style="margin-top:-20%">

			 
<div class="alert alert-default" style="color:white;background-color:black">
   <h3> <span class="glyphicon glyphicon-shopping-cart"></span>Productos</h3>
  </div>

    <br />
    

<?php








$dbcon=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($dbcon,"store");//database

$start=0;
$limit=8;
$id=1;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}

$query=mysqli_query($dbcon,"select * from items LIMIT $start, $limit");


while($query2=mysqli_fetch_array($query))
{

echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
      <div class='panel-heading' style='color:white;background-color : black;'>
      <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['item_name']."</textarea>
</center>
      </div>
      <div class='panel-body'>
     <a class='fancybox-buttons' href='Admin/item_images/".$query2['item_image']."' data-fancybox-group='button' title='Page ".$id."- ".$query2['item_name']."'>
    
    <img src='Admin/item_images/".$query2['item_image']."' class='img img-thumbnail'  style='width:350px;height:150px;' />
    </a>
  
    
    <center><h4> Precio: $ ".$query2['item_price'].".00 </h4></center>

    <button class='btn btn-success' width='100%'>Disponible</button>
      </div>
    </div>
  </div>";


}

echo "<div class='container'>";
echo "</div>";




$rows=mysqli_num_rows(mysqli_query($dbcon,"select * from items"));
$total=ceil($rows/$limit);
echo "<br /><ul class='pager'>";
if($id>1)
{
echo "<li><a style='color:white;background-color : #033c73;' href='?id=".($id-1)."'>Anterior</a><li>";
}
if($id!=$total)
{
echo "<li><a style='color:white;background-color : #033c73;' href='?id=".($id+1)."' class='pager'>Siguiente</a></li>";
}
echo "</ul>";


echo "<center><ul class='pagination pagination-lg'>";
for($i=1;$i<=$total;$i++)
{
if($i==$id) { echo "<li class='pagination active'><a style='color:white;background-color : #033c73;'>".$i."</a></li>"; }



else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
}
echo "</ul></center>";
?>
    
    
    
    
    
    
    
    <br />

<div class="alert alert-default" style="background-color:#033c73;">
                 <p style="color:white;text-align:center;">

      </p>
                  
              </div>
      
          </div>
      </div>

     

     
  </div>



</div>
<!-- /#wrapper -->



       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="testimonials-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     
                 </div>

             </div>
             <!--/.HEADER LINE END-->


                   </div>
				   
				   
				    
       
   
      <!-- COURSES SECTION END-->
     <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registro</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="register.php">
                   <fieldset>
					
							<div class="form-group">
                                <input class="form-control" placeholder="Firstname" name="ruser_firstname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Lastname" name="ruser_lastname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Address" name="ruser_address" type="text" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="ruser_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="ruser_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="register">Sign Up</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
<!-- Script -->


     <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Acceso a Clientes</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="userlogin.php">
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="user_login">Iniciar</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancelar</button>
				   </form>
				   
              </div>
            </div>
          </div>
        </div>
		
		<div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">Administrator Credentials</h4>
              </div>
              <div class="modal-body">
            
				
				 <form role="form" method="post" action="adminlogin.php">
                   <fieldset>
					
						
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="admin_username" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password" required>
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="admin_login">Login</button>
				
				 <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
				   </form>
              </div>
            </div>
          </div>
        </div>
		 <br />
			 <br />
			 <br />
<!-- Script -->
     <!-- CONTACT SECTION END-->
    <div id="footer">
    Felipe de Jesus Ayala Guerrero<br>
    Anael López Vélez<br>
    Carlos  Robles Soto

     </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
        
    <script src="assets/js/mon_ad.min.js"></script>

</body>
</html>
