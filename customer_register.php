<?php 
    $active = 'Моят акаунт';
    include("includes/header.php"); 
?>

  
  <div id="content"> <!-- #content Begin -->
      <div class="container"> <!-- container Begin -->
          <div class="col-md-12"> <!-- col-md-12 Begin -->
              
              <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                  <li>
                      <a href="index.php">Начало</a>
                  </li>
                  <li>
                      Регистрация
                  </li>
              </ul> <!-- breadcrumb Finish -->
              
          </div> <!-- col-md-12 Finish -->
          
          <div class="col-md-3"> <!-- col-md-3 Begin -->
             
              
    <?php
    
    include("includes/sidebar.php");
    
    ?>
              
          </div> <!-- col-md-3 Finish -->
            
            <div class="col-md-9"> <!-- col-md-9 Begin -->
                
                <div class="box"> <!-- box Begin -->
                    
                    <div class="box-header"> <!-- box-header Begin -->
                        
                        <center> <!-- center Begin -->
                            
                            <h2> Регистрирай нов акаунт </h2>
                            
                        </center> <!-- center Finish -->
                        
                        <form action="customer_register.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Име</label>
                                
                                <input type="text" class="form-control" name="c_fname" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Фамилия</label>
                                
                                <input type="text" class="form-control" name="c_lname" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Email</label>
                                
                                <input type="text" class="form-control" name="c_email" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Създайте парола</label>
                                
                                <input type="password" class="form-control" name="c_password" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Повторете парола</label>
                                
                                <input type="password" class="form-control" name="c_password" required>
                                
                            </div> <!-- form-group Finish --> 
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Вашият град</label>
                                
                                <input type="text" class="form-control" name="c_city" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Вашият адрес</label>
                                
                                <input type="text" class="form-control" name="c_address" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            
                            <div class="text-center"> <!-- text-center Begin -->
                                
                                <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Регистрация
                                </button>
                                
                            </div> <!-- text-center Finish -->
                            
                        </form> <!-- form Finish -->
                        
                    </div> <!-- box-header Finish -->
                    
                </div> <!-- box Finish -->
                
            </div> <!-- col-md-9 Finish -->
          
      </div> <!-- container Finish -->
  </div> <!-- #content Finish -->
  
    <?php
    
    include("includes/footer.php");
    
    ?>
   
   
   <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
         

          
</body>
</html>
          