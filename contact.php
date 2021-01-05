<?php 
    $active = 'Контакти';
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
                      Контакти
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
                            
                            <h2> Свържете се с нас </h2>
                            
                            <p class="text-muted"> <!-- text-muted Begin -->
                                
                                Ако имате въпроси, свържете се с нас. Нашият екип е на разположение всеки работен ден <strong>от 08:00 до 18:00 часа</strong>.
                                
                            </p> <!-- text-muted Finish -->
                            
                        </center> <!-- center Finish -->
                        
                        <form action="contact.php" method="post"> <!-- form Begin -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Име</label>
                                
                                <input type="text" class="form-control" name="name" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Email</label>
                                
                                <input type="text" class="form-control" name="email" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Относно</label>
                                
                                <input type="text" class="form-control" name="subject" required>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="form-group"> <!-- form-group Begin -->
                                
                                <label>Вашето съобщение</label>
                                
                                <textarea name="message" class="form-control"></textarea>
                                
                            </div> <!-- form-group Finish -->
                            
                            <div class="text-center"> <!-- text-center Begin -->
                                
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Изпрати съобщение
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
          