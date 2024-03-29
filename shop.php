<?php 
    $active = 'Магазин';
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
             
             
             <?php
              
                if(!isset($_GET['p_cat'])){
                    
                    if(!isset($_GET['cat'])){
                    
                    echo "
                <div class='box'> <!-- box Begin -->
                  <h1>Магазин</h1>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero repellat, obcaecati atque. Sunt ipsum quam, tenetur laboriosam eius? Aspernatur pariatur, fugiat. Laudantium, sequi magni eos reiciendis qui illo aspernatur mollitia!
                  </p>
                </div> <!-- box Finish -->
              
              ";
                    
                    }  
                }
              
              ?>
              
              <div class="row"> <!-- row Begin -->
              
              <?php
              
                if(!isset($GET['p_cat'])){
                 
                     if(!isset($GET['cat'])){
                         
                         $per_page = 6;
                         
                         if(isset($_GET['page'])){
                             
                             $page = $_GET['page'];
                             
                         }else{
                             
                            $page = 1;
                                  
                             }
                            $start_from = ($page-1) * $per_page;
                             
                             $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                             
                             $run_products = mysqli_query($con,$get_products);
                             
                             while($row_products = mysqli_fetch_array($run_products)){
                                 
                                $pro_id = $row_products['product_id'];
                                 
                                $product_title = $row_products['product_title'];
                                 
                                $product_price = $row_products['product_price'];
                                 
                                $product_img1 = $row_products['product_img1'];
                                 
                                 echo "
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                            
                                            <a href='details.php?pro_id=$pro_id'> 
                                            
                                                <img class='img-responsive' src='admin_area/product_images/$product_img1'>
                                            
                                            </a>
                                            
                                            
                                            <div class='text'>
                                                
                                                
                                                    <a href='details.php?pro_id=$product_title'> 
                                                    
                                                    <h3>
                                                    
                                                    $product_title
                                                    
                                                    </h3>
                                                    
                                                    </a>   
                                                
                                            
                                            </div>
                                            
                                            <p class='price'>
                                                
                                                $product_price BGN
                                            
                                            </p>
                                            
                                            <p class='button'>
                                                
                                                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                                    
                                                    Повече детайли 
                                                
                                                </a>
                                                
                                                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                    
                                                    <i class='fa fa-shopping-cart'></i> Добави в количката 
                                                
                                                </a>
                                            
                                            </p>
                                        
                                        </div>
                                    </div>
                                 
                                 ";
                            
                         }
                     
                  
                ?>  
                  
              </div> <!-- row Finish -->
              
              <center>
                  <ul class="pagination">
                    
                    <?php
                         
                         $query = "select * from products";
                         
                         $result = mysqli_query($con,$query);
                         
                         $total_records = mysqli_num_rows($result);
                         
                         $total_pages = ceil($total_records / $per_page);
                         
                         echo "
                         
                            <li>
                            
                                <a href='shop.php?page=1'> ".'First Page'." </a>                            
                            </li>
                         
                         
                         ";
                         
                         for($i=1; $i<=$total_pages; $i++){
                             
                             echo "
                         
                            <li>
                            
                                <a href='shop.php?page=".$i."'> ".$i." </a>                            
                            </li>
                         
                         
                         ";
                             
                         };
                         
                         echo "
                         
                            <li>
                            
                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>                            
                            </li>
                         
                         
                         ";
                         
                      
                      }
                }
                      
                      ?>
                     
            
                  </ul>
              </center>
              
              
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