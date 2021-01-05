<?php include("includes/header.php"); ?>

  
  <div id="content"> <!-- #content Begin -->
      <div class="container"> <!-- container Begin -->
          <div class="col-md-12"> <!-- col-md-12 Begin -->
              
              <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                  <li>
                      <a href="index.php">Начало</a>
                  </li>
                  <li>
                      Магазин
                  </li>
              </ul> <!-- breadcrumb Finish -->
              
          </div> <!-- col-md-12 Finish -->
          
          <div class="col-md-3"> <!-- col-md-3 Begin -->
             
              
    <?php
    
    include("includes/sidebar.php");
    
    ?>
              
          </div> <!-- col-md-3 Finish -->
          
          <div class="col-md-9"> <!-- col-md-9 Begin -->
              <div id="productMain" class="row"> <!-- #productMain Begin -->
                  <div class="col-sm-6"> <!-- col-sm-6 Begin -->
                      <div id="mainImage"> <!-- mainImage Begin -->
                          <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- #myCarousel Begin -->
                              <ol class="carousel-indicators"> <!-- carousel-indicators Begin -->
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                              </ol> <!-- carousel-indicators Finish -->
                              
                              <div class="carousel-inner">
                                  <div class="item active">
                                      <center><img src="admin_area/product_images/product-3.jpg" alt="Product 3"></center>
                                  </div>
                                  <div class="item">
                                      <center><img src="admin_area/product_images/product-3a.jpg" alt="Product 3a"></center>
                                  </div>
                                  <div class="item">
                                      <center><img src="admin_area/product_images/product-3b.jpg" alt="Product 3b"></center>
                                  </div>
                              </div>
                              
                              <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control Begin -->
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                  <span class="sr-only">Previous</span>
                              </a> <!-- left carousel-control Finish -->
                              
                              <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel-control Begin -->
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                              </a> <!-- right carousel-control Finish -->
                              
                              
                              
                          </div> <!-- #myCarousel Finish -->
                      </div> <!-- mainImage Finish -->
                  </div> <!-- col-sm-6 Finish -->
                  
                  <div class="col-sm-6"> <!-- col-sm-6 Begin -->
                      <div class="box"> <!-- box Begin -->
                          <h1 class="text-center"> Месечен абонамент "Прочети ме"
                          
                          
                          
                          </h1>
                          
                          
                          <form action="details.php" class="form-horizontal" method="post"> <!-- form-horizontal Begin -->
                              <div class="form-group"> <!-- form-group Begin -->
                              <label for="" class="col-md-5 control-label">Продължителност (месеци)</label>
                              
                              <div class="col-md-7"> <!-- col-md-7 Begin -->
                                     <select name="product_qty" id="" class="form-control"> <!-- select Begin -->
                                      <option>1</option>
                                      <option>3</option>
                                      <option>6</option>
                                      <option>12</option>
                                  </select> <!-- select Finish -->
                                  </div> <!-- col-md-7 Finish -->
                              </div> <!-- form-group Finish -->
                              
                              
                              <div class="form-group"> <!-- form-group Begin -->
                                  <label class="col-md-5 control-label">Брой книги (месец)</label> 
                                  
                                  <div class="col-md-7">
                                  <select name="product_number" class="form-control"><!-- form-control Begin -->
                                      <option>1</option>
                                      <option>3</option>
                                      <option>5</option>
                                  </select> <!-- form-control Finish -->
                                  </div>
                              </div> <!-- form-group Finish -->
                              
                              <p class="price">10.99BGN</p>
                              
                              <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Добави в количката</button></p>
                              
                          </form> <!-- form-horizontal Finish -->
                          
                      </div> <!-- box Finish -->
                      
                      <div class="row" id="thumbs"> <!-- row Begin -->
                          
                          <div class="col-xs-4">  <!-- col-xs-4 Begin -->
                          <a data-target="#myCarousel" data-slide-to="0" class="active"> <!-- thumb Begin -->
                          <img src="admin_area/product_images/product-3.jpg" alt="product 3" class="img-responsive">
                          </a> <!-- thumb Finish -->
                          </div> <!-- col-xs-4 Finish -->
                          
                          
                          
                          <div class="col-xs-4">  <!-- col-xs-4 Begin -->
                          <a data-target="#myCarousel" data-slide-to="1" class="active"> <!-- thumb Begin -->
                          <img src="admin_area/product_images/product-3a.jpg" alt="product 3a" class="img-responsive">
                          </a> <!-- thumb Finish -->
                          </div> <!-- col-xs-4 Finish -->
                          
                          
                          
                          <div class="col-xs-4">  <!-- col-xs-4 Begin -->
                          <a data-target="#myCarousel" data-slide-to="2" class="active"> <!-- thumb Begin -->
                          <img src="admin_area/product_images/product-3b.jpg" alt="product 3b" class="img-responsive">
                          </a> <!-- thumb Finish -->
                          </div> <!-- col-xs-4 Finish --> 
                          
                      </div> <!-- row Finish -->
                      
                  </div> <!-- col-sm-6 Finish -->
                  
              </div> <!-- #productMain Finish -->
              
              <div class="box" id="details"> <!-- box Begin -->
                 
                <h4>Описание</h4>
                  
                  <p>
                     
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officiis sint architecto eveniet tempora natus, maiores dolore quos itaque magni excepturi reprehenderit, adipisci saepe sit ullam dolores? Consequuntur, consequatur, laboriosam?
                      
                  </p>
                  
                  <hr>
                  
              </div> <!-- box Finish -->
              
              <div id="same-heigh-row"> <!-- #same-heigh-row Begin -->
                  <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 Begin -->
                      <div class="box same-height headline"> <!-- box same-height headline Begin -->
                          <h3 class="text-center">Още интересни предложения</h3>
                          
                          
                          
                      </div> <!-- box same-height headline Finish -->
                  </div> <!-- col-md-3 col-sm-6 Finish -->
                  
                  <div class="col-md3 col-sm-6 center-responsive"> <!-- col-md3 col-sm-6 center-responsive Begin -->
                      <div class="product same-height"> <!-- product same-height Begin -->
                      <a href="details.php">
                          <img class="img-responsive" src="admin_area/product_images/product-1a.jpg" alt="Product 1">
                      </a>
                      
                      <div class="text"> <!-- text Begin -->
                          <h3><a href="details.php">Приказки за лека нощ</a></h3>
                          
                          <p class="price">10.99BGN</p>
                      </div> <!-- text Finish -->
                      </div> <!-- product same-height Finish -->
                  </div> <!-- col-md3 col-sm-6 center-responsive Finish -->
                  
              </div> <!-- #same-heigh-row Finish -->
              
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