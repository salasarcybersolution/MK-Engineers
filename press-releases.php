<?php include('header.php')?>
<style>
    
   .p_list_img{
      background-image: url('assets/images/all-project/main_traparant.png');
      height: 327px;
      padding: 0px;
      margin: 0px;
      background-size: 100% 100%;
   }
   .p_list_img img{
      width: 100%;
      margin-top: 45px;
      height: 237px;
   }
   .p_list_conte{
      border: 2px dotted #ccc;
      margin-top: 15px;
      padding: 10px;
     
   }
   .p_list_conte h3{
      margin: 0px;
      padding: 0px;
       color: #1e8d99;
   }

   .p_list_conte p{
      line-height: 23px;
      padding: 0px;
      font-size: 14px;
      margin-top: 5px;
   }
.custom-row{
   margin-top: 20px; 
}
.all_content{
   cursor: pointer;
}   
</style>
 
      <!--================ End Header Area =================-->
     
         <!--================ End Slider Top Section =================-->
         <!--================ Welcome Section =================-->
       <div class="our_team team_page cellpadding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tt-title text-left">PRESS RELEASES</h3>
                   </div>     
                </div>
                 <!-- 1 -->
                 <div class="row custom-row">
                    <div class="col-md-4 col-sm-12 all_content" onclick="openModalInfo('1','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/1.jpg" id="img_1">
                         </div>  
                        
                    </div> 
                     <div class="col-md-4 col-sm-12 all_content" onclick="openModalInfo('2','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/2.jpg" id="img_2">
                         </div>  
                         
                    </div>

                    <div class="col-md-4 col-sm-12 all_content" onclick="openModalInfo('3','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/3.jpg" id="img_3">
                         </div>  
                         
                    </div>    
                </div>

                <!-- 2 -->
                 <div class="row custom-row">
                    <div class="col-md-4 all_content" onclick="openModalInfo('4','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/4.jpg" id="img_4">
                         </div>  
                         
                    </div> 
                     <div class="col-md-4 all_content" onclick="openModalInfo('5','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/5.jpg" id="img_5">
                         </div>  
                          
                    </div>

                    <div class="col-md-4 all_content" onclick="openModalInfo('6','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/6.jpg" id="img_6">
                         </div>  
                        
                    </div>    
                </div>


                <!-- 3 -->
                 <div class="row custom-row">
                    <div class="col-md-4 all_content" onclick="openModalInfo('7','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/7.jpg" id="img_7" > 
                         </div>  
                          
                    </div> 
                     <div class="col-md-4 all_content" onclick="openModalInfo('8','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/8.jpg" id="img_8">
                         </div>  
                         
                    </div>
                    <div class="col-md-4 all_content" onclick="openModalInfo('9','img')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/9.jpg" id="img_9">
                         </div>  
                         
                    </div>
    
                </div>

                <div class="row custom-row">
                    <div class="col-md-4 all_content" onclick="openModalInfo('10','video')">
                         <div  class="p_list_img">  
                           <img src="assets/images/press/new_imges/Screenshot_1.png" id="img_10" > 
                         </div>  
                          
                    </div> 
                     
                    
    
                </div>


             </div>

        </div>
 
      <!--================ End Our Customer Saying Section =================-->
         
       
      <!--js -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.shuffle.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/global.js"></script>
      <script src="assets/js/swiper.jquery.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.barfiller.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div class="modal fade" id="allInfoModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
         
        <div class="modal-body" style="height: 500px;overflow-y: scroll;display: none;" id="main_modal_body"> 
            <img src="" width="100%"  id="d_img">
            <p style="margin-top: 10px;" id="d_content"></p>
        </div>
        <div class="modal-body" style="height: 500px;display: none;" id="main_modal_body_2"> 
           <video width="100%" id="v1" controls>
                   
           </video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>

<script>
   function openModalInfo(srt,srt1) {
     $(".modal-body").hide();    
     if(srt1 == 'img'){
         var img =  $('#img_'+srt).attr('src');
         $("#d_img").attr("src",img);
         $("#main_modal_body").show();             
     }else{
        $("#v1").html('<source src="assets/images/press/new_imges/new_video.mp4" type="video/mp4"></source>' ); 
         $("#main_modal_body_2").show();
     }
     $('#allInfoModal').modal('show');
   }
</script>
</body>
</html>