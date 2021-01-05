<div id="footer"> <!-- #footer Begin -->
    <div class="container"> <!-- container Begin -->
        <div class="row"> <!-- row Begin -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Страници</h4>
                
                <ul> <!-- ul Begin -->
                   
                    <li><a href="cart.php">Количка</a></li>
                    <li><a href="contact.php">Свържи се с нас</a></li>
                    <li><a href="shop.php">Магазин</a></li>
                    <li><a href="checkout.php">Моят Акаунт</a></li>
                </ul> <!-- ul Finish -->
                
                <hr>
                
                <h4>За потребители</h4>
                <ul> <!-- ul Begin -->
                    <li><a href="checkout.php">Вход</a></li>
                    <li><a href="customer_register.php">Регистрация</a></li>
                </ul> <!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div> <!-- col-sm-6 col-md-3 Finish -->
            <div class="com-sm-6 col-md-3"> <!-- class="com-sm-6 col-md-3 Begin -->
                
                <h4>ТОП предложения</h4>
                
                <ul>
                
                <?php
                        
                        $get_p_cats = "select * from product_category";
                        $run_p_cats = mysqli_query($con, $get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "
                            
                                <li>
                                <a href='shop.php?p_cat=$p_cat_id'>
                                
                                $p_cat_title
                                
                                </a>
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                    
                </ul>
                
                
                <hr class="hidden-md hidden-lg">
        
                        
                
            </div> <!-- class="com-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Контакти:</h4> 
               
               <p> <!-- p Begin -->
                   
                   <strong>pro4eti.me inc.</strong>
                   <br/>Sofia
                   <br/>Bulgaria
                   <br/>+359885911331
                   <br/>support@pro4eti.com
                   <br/><strong>Bilyana I.</strong>
                   
               </p> <!-- p Finish -->
               
               <a href="contact.php">Свържете се с нас</a>
                
                <hr class="hidden-md hidden-lg">

                
            </div> <!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                Не пропускайте най-новите читателски предложения</p>
                
                <form action="" method="post"> <!-- post input-group Begin -->
                    <div class="input-group">
                       
                       <input type="text" class="form-control" name="email">
                       
                       <span class="input-group-btn"> <!-- input-group-btn Begin -->
                          
                          <input type="submit" value="Запиши се" class="btn btn-default">
                           
                           
                       </span>  <!-- input-group-btn Finish -->
                        
                    </div> <!-- input-group Finish -->
                </form> <!-- Form Finish -->
                
                <hr>
                
                <h4>Последвайте ни</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
                
            </div>
            
        </div> <!-- row Finish -->
    </div>  <!-- container Finish --> 
</div> <!-- #footer Finish -->


<div id="copyright"> <!-- copyright Begin-->
    <div class="container"> <!-- container Begin-->
        <div class="col-md-6"> <!-- col-md-6 Begin-->
           
           <p class="pull-left">&copy; 2020 pro4eti.me All Rights Reserved</p>
            
        </div> <!-- col-md-6 Finish -->
        
        <div class="col-md-6"> <!-- col-md-6 Begin-->
           
           <p class="pull-right"> Theme by: <a href="#">MrGhie</a></p>
            
        </div> <!-- col-md-6 Finish -->
    </div> <!-- container Finish -->
</div> <!-- #copyright Finish -->