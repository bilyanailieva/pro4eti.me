<?php
    $active = 'Моята количка';
    include("includes/header.php"); 
?>

  
  <div id="content"> <!-- #content Begin -->
      <div class="container"> <!-- container Begin -->
          <div class="col-md-12"> <!-- col-md-12 Begin -->
              
              <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li>
                      Вашата количка
                  </li>
              </ul> <!-- breadcrumb Finish -->
              
          </div> <!-- col-md-12 Finish -->
          
          
          <div id="cart" class="col-md-9"> <!-- col-md-9 Begin -->
              
              
              <div class="box"> <!-- box Begin -->
                  
                  <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->
                      
                      <h1>Вашата количка</h1>
                      
                      <p class="text-muted">В момента имате 2 артикул(а) в количката</p>
                      
                      <div class="table-responsive"> <!-- table-responsive Begin -->
                          
                          <table class="table"> <!-- table Begin -->
                              
                              <thread> <!-- thread Begin -->
                                  
                                  <tr> <!-- tr Begin -->
                                      
                                      <th colspan="2">Абонамент</th>
                                      <th>Продължителност (месеци)</th>
                                      <th>Брой книги/месец</th>
                                      <th>Цена</th>
                                      <th colspan="1">Изтрий</th>
                                      
                                  </tr> <!-- tr Finish -->
                                  
                              </thread> <!-- thread Finish -->
                              
                              <tbody> <!-- tbody Begin -->
                                  
                                  <tr> <!-- tr Begin -->
                                      
                                      <td>
                                          
                                          <img class="img-responsive" src="admin_area/product_images/product-3a.jpg" alt="Product 3a">
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <a href="#"> Прочети ме </a>
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          6 
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          1
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          50.99 BGN
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <input type="checkbox" name="remove[]">
                                          
                                      </td>
                                      
                                      
                                      
                                  </tr> <!-- tr Finish -->
                                  
                              </tbody> <!-- tbody Finish -->
                              
                              
                              
                              <tbody> <!-- tbody Begin -->
                                  
                                  <tr> <!-- tr Begin -->
                                      
                                      <td>
                                          
                                          <img class="img-responsive" src="admin_area/product_images/product-1a.jpg" alt="Product 1a">
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <a href="#"> Приказки за лека нощ </a>
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          1 
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          5
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          14.99 BGN
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <input type="checkbox" name="remove[]">
                                          
                                      </td>
                                      
                                      
                                      
                                  </tr> <!-- tr Finish -->
                                  
                              </tbody> <!-- tbody Finish -->
                              
                              <tfoot> <!-- tfoot Begin -->
                                  
                                  <tr> <!-- tr Begin -->
                                      
                                      <th colspan="5"> Общо </th>
                                      <th colspan="2"> 100 BGN </th>
                                      
                                  </tr> <!-- tr Finish -->
                                  
                              </tfoot> <!-- tfoot Finish -->
                              
                          </table> <!-- table Finish -->
                          
                      </div> <!-- table-responsive Finish -->
                      
                      <div class="box-footer"> <!-- box-footer Begin -->
                          
                          <div class="pull-left"> <!-- pool-left Begin -->
                              
                              <a href="index.php" class="btn btn-default"> <!-- btn btn-default Begin -->
                                  
                                  <i class="fa fa-chevron-left"></i> Към другите ни предложения
                                  
                              </a> <!-- btn btn-default Finish -->
                              </div> <!-- pool-left Finish -->  
                          
                          <div class="pull-right"> <!-- pool-right Begin -->
                              
                              <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <!-- btn btn-default Begin -->
                                  
                                  <i class="fa fa-refresh"></i> Обнови количката
                                  
                              </button> <!-- btn btn-default Finish -->
                              
                              <a href="checkout.php" class="btn btn-primary">
                                  
                                  Завърши поръчката <i class="fa fa-chevron-right"></i>
                                  
                              </a>
                              
                          </div> <!-- pool-right Finish -->
                          
                          
                          
                      </div> <!-- box-footer Finish -->
                      
                      
                  </form> <!-- form Finish -->
                  
              </div> <!-- box Finish -->
              
              
          </div> <!-- col-md-9 Finish -->
          
          <div class="col-md-3"> <!-- col-md-3 Begin -->
              
              <div id="order-summary" class="box"> <!-- box Begin -->
                  
                  <div class="box-header"> <!-- box-header Begin -->
                      
                      <h3> Обзор на поръчката </h3>
                      
                  </div> <!-- box-header Finish -->
                  
                  <p class="text-muted"> <!-- text-muted Begin -->
                      
                      Доставката и допълнителните разходи са базирани на Вашия избор
                      
                  </p> <!-- text-muted Finish -->
                  
                  <div class="table-responsive"> <!-- ttable-responsive Begin -->
                      
                      <table class="table"> <!-- table Begin -->
                          
                          <tbody> <!-- tbody Begin -->
                              
                              <tr>    <!-- tr Begin --> 
                              
                                  <td> Междинна сума </td>
                                  <th> 100 BGN </th>
                              
                              </tr> <!-- tr Finish --> 
                              
                              <tr> <!-- tr Begin -->
                                  
                                  <td> Доставка </td>
                                  <td> 3 BGN </td>
                                  
                                  
                              </tr> <!-- tr Finish --> 
                              
                              <tr> <!-- tr Begin -->
                                  
                                  <td> Такса обслужване </td>
                                  <td> 0 BGN </td>
                                  
                              </tr> <!-- tr Finish --> 
                              
                              <tr class="total"> <!-- tr Begin -->
                                  
                                  <td> Общо </td>
                                  <td> 103 BGN </td>
                                  
                              </tr> <!-- tr Finish --> 
                              
                          </tbody> <!-- tbody Finish -->
                          
                      </table> <!-- table Finish -->
                      
                  </div> <!-- ttable-responsive Finish -->
                  
              </div> <!-- box Finish -->
              
          </div> <!-- col-md-3 Finish -->
          
          
      </div> <!-- container Finish -->
  </div> <!-- #content Finish -->
  
 <?php
    
    include("includes/footer.php");
    
    ?>
   
   
   <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
         

          
</body>
</html>
          
         
    