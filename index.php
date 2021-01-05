<?php 
    $active = 'Начало';
    include("includes/header.php"); 
?>
  
  <div class="container" id="slider"> <!-- container slider start -->
     
     <div class="col-md-12"> <!-- col-md-12 start -->
        
        <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide start -->
            
            <ol class="carousel-indicators"> <!-- carousel-indicators start -->
                
                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

                
            </ol> <!-- carousel-indicators finish -->
            
            <div class="carousel-inner"> <!-- carousel-inner start -->
               
               <?php
                
                $get_slides = "select * from slider LIMIT 0,1";
                
                $run_slides = mysqli_query($con,$get_slides);
                
                while($row_slides=mysqli_fetch_array($run_slides)){
                    
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    
                    echo "
                    
                    <div class='item active'>
                    
                    <img src='admin_area/slides_images/$slide_image'>
                    
                    </div>
                    
                    ";
                }
                
                $get_slides = "select * from slider LIMIT 1,3";
                
                $run_slides = mysqli_query($con,$get_slides);
                
                while($row_slides=mysqli_fetch_array($run_slides)){
                    
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    
                    echo "
                    
                    <div class='item'>
                    
                    <img src='admin_area/slides_images/$slide_image'>
                    
                    </div>
                    
                    ";
                }
                
                ?>
                
            </div> <!-- carousel-inner finish -->
            
            <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control start -->
                
                <span class="glyphicon glyphicon-chevron-left"></span> 
                <span class="sr-only">Previous</span>
                
            </a> <!-- left carousel-control finish -->
            
                        <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel-control start -->
                
                <span class="glyphicon glyphicon-chevron-right"></span> 
                <span class="sr-only">Next</span>
                
            </a> <!-- right carousel-control finish -->
            
        </div> <!-- carousel slide start -->
         
     </div>  <!-- col-md-12 finish -->
      
  </div> <!-- container slider Finish -->
   
   <div id="advantages"> <!-- advantages start -->
       
       <div class="container"> <!-- container start -->
           
           <div class="same-height-row"> <!-- same-height-row start -->
               
               <div class="col-sm-4"> <!-- col-sm-4 start -->
                   
                   <div class="box same-height"> <!-- box same-height start -->
                       
                       <div class="icon"> <!-- icon start -->
                           
                           <i class="fa fa-heart"></i>
                
                           
                       </div> <!-- icon finish -->
                       
                       <h3><a href="#">Обичаме книгите!</a></h3>
                       
                       <p>Знаем ви накараме да обикнете четенето или да разнообразите вашия читателски ритуал.</p>
                       
                   </div> <!-- box same-height finish -->
                   
               </div> <!-- col-sm-4 finish -->
               
               <div class="col-sm-4"> <!-- col-sm-4 start -->
                   
                   <div class="box same-height"> <!-- box same-height start -->
                       
                       <div class="icon"> <!-- icon start -->
                           
                           <i class="fa fa-tag"></i>
                
                           
                       </div> <!-- icon finish -->
                       
                       <h3><a href="#">Изгодно</a></h3>
                       
                       <p>Сравни с други сайтове, които предлагат нови книги и електронни издания.</p>
                       
                   </div> <!-- box same-height finish -->
                   
               </div> <!-- col-sm-4 finish -->
               
               <div class="col-sm-4"> <!-- col-sm-4 start -->
                   
                   <div class="box same-height"> <!-- box same-height start -->
                       
                       <div class="icon"> <!-- icon start -->
                           
                           <i class="fa fa-thumbs-up"></i>
                
                           
                       </div> <!-- icon finish -->
                       
                       <h3><a href="#">100% оригинална идея</a></h3>
                       
                       <p>Ние предлагаме изгодно и практично решение за книголюбители.</p>
                       
                   </div> <!-- box same-height finish -->
                   
               </div> <!-- col-sm-4 finish -->
               
               
           </div>  <!-- same-height-row finish -->
           
       </div> <!-- container finish -->
       
   </div> <!-- advantages finish -->
   
   <div id="hot"> <!-- hot start -->
       
       <div class="box"> <!-- box start -->
           
           <div class="container"> <!-- container start -->
                
                <div class="col-md-12"> <!-- col-md-12 start -->
                    
                    <h2>
                        Най-новите ни предложения
                    </h2>
                    
                </div> <!-- col-md-12 finish -->
               
           </div> <!-- container finish -->
           
       </div> <!-- box finish -->
       
   </div> <!-- hot finish -->
   
   <div id="content" class="container"> <!-- content container start -->
       
       <div class="row"> <!-- row start -->
          
          <?php
           
           getPro();
           
           ?>
           
       </div> <!-- row finish -->
       
   </div> <!-- content container finish -->
   
   <?php
    
    include("includes/footer.php");
    
    ?>
   
   
   <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
         

          
</body>
</html>