<?php include('header.php')?>
<style>
   .carousel-control{
      top: 90% !important;
   }

   .carousel-control.left,.right{
      background: none !important;
   }
   .all-project-title-box{
      background: #1e8d99;
      padding: 6px;
      text-align: center;
      color: #fff;
   } 
   .all-project-title-box h4{
      border: 2px dashed;
      padding: 17px;
      margin: 0px;
   }
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
      color: #1e8d99;
   }
</style>
 
      <!--================ End Header Area =================-->
     
         <!--================ End Slider Top Section =================-->
         <!--================ Welcome Section =================-->
       <div class="our_team team_page cellpadding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="tt-title text-left">ALL PROJECT</h3>
                   </div>     
                </div>
                <br>
                <!-- sider -->
                <div class="row">
                    <div class="col-md-12">
                          <div class="item">
                              <div class="single_service">
                                 <div class="image">
                                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                      <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                                        <li data-target="#myCarousel1" data-slide-to="3"></li>
                                        <li data-target="#myCarousel1" data-slide-to="4"></li>
                                        <li data-target="#myCarousel1" data-slide-to="5"></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                      <div class="carousel-inner">
                                       <!-- 1 -->
                                        <div class="item active">
                                          <img src="assets/images/all-project/slider/img1.jpg" alt="Los Angeles">
                                        </div>
                                         <!-- 2 -->
                                        <div class="item">
                                           <img src="assets/images/all-project/slider/img2.jpg" alt="Los Angeles">
                                        </div>
                                        <!-- 3 -->
                                        <div class="item">
                                           <img src="assets/images/all-project/slider/img3.jpg" alt="Los Angeles">
                                        </div>
                                         
                                        <!-- 5 -->
                                        <div class="item">
                                           <img src="assets/images/all-project/slider/img5.jpg" alt="Los Angeles">
                                        </div>
                                        <!-- 6 -->
                                        <div class="item">
                                           <img src="assets/images/all-project/slider/img6.jpg" alt="Los Angeles">
                                        </div>
                                        <!-- 7 -->
                                        <div class="item">
                                           <img src="assets/images/all-project/slider/img7.jpg" alt="Los Angeles">
                                        </div>

                                       
                                       
                                      </div>

                                      <!-- Left and right controls -->
                                      <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                        <span class="glyphicon glyphicon-arrow-left"></span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                        <span class="glyphicon glyphicon-arrow-right"></span>
                                       
                                      </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                   </div>     
                </div>

                 <br>
                 <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="all-project-title-box">
                           <h4>Constution of Malwa resort MPT in Mandu</h4>
                        </div>
                    </div>     
                </div>
 -->
                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/1/1.jpg" style="cursor: pointer;height: 237px;" onclick="viewAllImages('1')">
                         </div>  
                         <div class="p_list_conte">
                             Cement Concrete Road at Muralkhurd Stood Distt. Raisen
                         </div>
                         <textarea id="p_all_info_1" style="display: none;"><?php echo json_encode(array('folder_path' =>'1','title' =>'Cement Concrete Road at Muralkhurd Stood Distt. Raisen','all_imges'=>array('1.jpg','2.jpg'))); ?></textarea>
                    </div> 
                     <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/2/1.jpg" style="cursor: pointer;height: 237px;" onclick="viewAllImages('2')">
                         </div>  
                         <div class="p_list_conte">
                             Construction of 12 NGO & 48 Constable Qtrs in sagar
                         </div>

                         <textarea id="p_all_info_2" style="display: none;"><?php echo json_encode(array('folder_path' =>'2','title' =>'Construction of 12 NGO & 48 Constable Qtrs in sagar','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpeg','12.jpeg'))); ?></textarea>
                    </div>
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/3/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('3')">
                         </div>  
                         <div class="p_list_conte">
                             Constructio of wooden cottage resort in kerwa dam
                         </div>

                          <textarea id="p_all_info_3" style="display: none;"><?php echo json_encode(array('folder_path' =>'3','title' =>'Constructio of wooden cottage resort in kerwa dam','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg'))); ?></textarea>
                    </div>     
                </div>


                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/4/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('4')">
                         </div>  
                         <div class="p_list_conte">
                            hotel kalchuri residency in jabalpur
                         </div>
                          <textarea id="p_all_info_4" style="display: none;"><?php echo json_encode(array('folder_path' =>'4','title' =>'hotel kalchuri residency in jabalpur','all_imges'=>array('1.jpg','2.jpg','3.jpg','5.jpg','6.jpg'))); ?></textarea>
                    </div> 
                     <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/5/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('5')">
                         </div>  
                         <div class="p_list_conte">
                              Construction of 12 NGO & 48 Constable Qtrs at Mandla
                         </div>
                         <textarea id="p_all_info_5" style="display: none;"><?php echo json_encode(array('folder_path' =>'5','title' =>'Construction of 12 NGO & 48 Constable Qtrs at Mandla','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg'))); ?></textarea>
                    </div>
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                            <img src="assets/images/all-project/project_iner_img/6/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('6')">
                         </div>  
                         <div class="p_list_conte">
                              Construction of 12 NGO & 48 Constable Qtrs In Chhatarpur
                         </div>
                          <textarea id="p_all_info_6" style="display: none;"><?php echo json_encode(array('folder_path' =>'6','title' =>'Construction of 12 NGO & 48 Constable Qtrs In Chhatarpur','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg'))); ?></textarea>
                    </div>     
                </div>



                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/7/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('7')">
                         </div>  
                         <div class="p_list_conte">
                            Construction of 12 NGO & 48 Constable Qtrs in rajghat
                         </div>
                          <textarea id="p_all_info_7" style="display: none;"><?php echo json_encode(array('folder_path' =>'7','title' =>'Construction of 12 NGO & 48 Constable Qtrs in rajghat','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpeg','7.jpeg'))); ?></textarea>
                    </div> 
                     <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/8/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('8')">
                         </div>  
                         <div class="p_list_conte">
                             Constrution of wooden cottage resort in sarai forest
                         </div>
                         <textarea id="p_all_info_8" style="display: none;"><?php echo json_encode(array('folder_path' =>'8','title' =>'Constrution of wooden cottage resort in sarai forest','all_imges'=>array('1.jpg','2.jpg','3.jpeg','4.jpg','5.jpeg'))); ?></textarea>
                    </div>
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/9/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('9')">
                         </div>  
                         <div class="p_list_conte">
                             Construction of Geetanjali College in Bhopal
                         </div>
                          <textarea id="p_all_info_9" style="display: none;"><?php echo json_encode(array('folder_path' =>'9','title' =>'Construction of Geetanjali College in Bhopal','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg'))); ?></textarea>
                    </div>     
                </div>


                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/10/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('10')">
                         </div>  
                         <div class="p_list_conte">
                            Constution of Malwa resort MPT in Mandu
                         </div>
                         <textarea id="p_all_info_10" style="display: none;"><?php echo json_encode(array('folder_path' =>'10','title' =>'Constution of Malwa resort MPT in Mandu','all_imges'=>array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','08.jpg','09.jpg'))); ?></textarea>
                    </div> 
                     <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/11/1.jpeg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('11')">
                         </div>  
                         <div class="p_list_conte">
                             Construction of Canopy walk , in formation centre at Bandhavgarh Nation Park
                         </div>
                          <textarea id="p_all_info_11" style="display: none;"><?php echo json_encode(array('folder_path' =>'11','title' =>'Construction of Canopy walk , in formation centre at Bandhavgarh Nation Park','all_imges'=>array('1.jpeg','2.jpeg','3.jpeg','4.jpeg','5.jpeg'))); ?></textarea>
                    </div>
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/12/01.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('12')">
                         </div>  
                         <div class="p_list_conte">
                             Construction of Hamidia Arts & Commerce Degree College in Bhopal
                         </div>
                         <textarea id="p_all_info_12" style="display: none;"><?php echo json_encode(array('folder_path' =>'12','title' =>'Construction of Hamidia Arts & Commerce Degree College in Bhopal','all_imges'=>array('01.JPG','02.JPG','03.JPG','04.JPG','05.JPG','06.JPG','07.JPG','08.JPG','09.JPG','10.JPG','11.JPG','12.JPG'))); ?></textarea>
                    </div>     
                </div>


                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                            <img src="assets/images/all-project/project_iner_img/13/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('13')">
                         </div>  
                         <div class="p_list_conte">
                           Construction of Model School 100 Seater Girls Hostel at Amarwara
                         </div>
                          <textarea id="p_all_info_13" style="display: none;"><?php echo json_encode(array('folder_path' =>'13','title' =>'Construction of Model School 100 Seater Girls Hostel at Amarwara','all_imges'=>array('1.JPG','2.JPG','3.JPG','4.JPG'))); ?></textarea>  
                    </div> 
                     <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/14/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('14')">
                         </div>  
                         <div class="p_list_conte">
                            Construction of Geetanjali Sports Complex & Multipurpose gym Hall at Govt. Geetanjali College, Bhopla
                         </div>
                         <textarea id="p_all_info_14" style="display: none;"><?php echo json_encode(array('folder_path' =>'14','title' =>'Construction of Geetanjali Sports Complex & Multipurpose gym Hall at Govt. Geetanjali College, Bhopla','all_imges'=>array('1.JPG','2.JPG'))); ?></textarea>
                    </div>
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                          <img src="assets/images/all-project/project_iner_img/15/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('15')">
                         </div>  
                         <div class="p_list_conte">
                             Construction of tourist facilites at jamatara
                         </div>
                          <textarea id="p_all_info_15" style="display: none;"><?php echo json_encode(array('folder_path' =>'15','title' =>'Construction of tourist facilites at jamatara','all_imges'=>array('1.JPG','2.JPG','3.JPG','4.JPG','5.JPG','6.JPG','7.JPG','8.JPG','9.JPG','10.JPG','11.JPG','12.JPG','13.JPG'))); ?></textarea>
                    </div>     
                </div>
                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                            <img src="assets/images/all-project/project_iner_img/16/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('16')">
                         </div>  
                         <div class="p_list_conte">
                            construction of wooden cottage and water sport activity at Hanumantiya tapu 
                         </div>
                          <textarea id="p_all_info_16" style="display: none;"><?php echo json_encode(array('folder_path' =>'16','title' =>'construction of wooden cottage and water sport activity at Hanumantiya tapu ','all_imges'=>array('1.JPG','2.JPG','3.JPG','4.JPG','5.JPG','6.JPG','8.JPG','9.JPG','10.JPG','11.JPG','12.JPG','13.jpeg','14.jpeg'))); ?></textarea>
                    </div> 
                     <div class="col-md-4">
                         <div  class="p_list_img">  
                          <img src="assets/images/all-project/project_iner_img/17/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('17')">
                         </div>  
                         <div class="p_list_conte">
                             Contruction of Day Shelter, Public Amenities in Alirajpur
                         </div>

                          <textarea id="p_all_info_17" style="display: none;"><?php echo json_encode(array('folder_path' =>'17','title' =>'Contruction of Day Shelter, Public Amenities in Alirajpur','all_imges'=>array('1.JPG','2.JPG','3.JPG','4.JPG'))); ?></textarea>
                    </div>
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/18/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('18')">
                         </div>  
                         <div class="p_list_conte">
                             Development work at Gau Ghat, J.P Chauk Food Cort at Omakareshwar
                         </div>
                         <textarea id="p_all_info_18" style="display: none;"><?php echo json_encode(array('folder_path' =>'18','title' =>'Development work at Gau Ghat, J.P Chauk Food Cort at Omakareshwar','all_imges'=>array('1.JPG','2.JPG','3.JPG','4.JPG'))); ?></textarea>
                    </div>     
                </div>


                <br>
                 <div class="row">
                    <div class="col-md-4">
                         <div  class="p_list_img">  
                           <img src="assets/images/all-project/project_iner_img/19/1.jpg"  style="cursor: pointer;height: 237px;" onclick="viewAllImages('19')">
                         </div>  
                         <div class="p_list_conte">
                            Jabalpur Air India office
                         </div>

                         <textarea id="p_all_info_19" style="display: none;"><?php echo json_encode(array('folder_path' =>'19','title' =>'Jabalpur Air India office','all_imges'=>array('1.JPG','2.JPG','3.JPG','4.JPG','5.JPG','6.JPG','7.JPG','8.JPG','9.JPG'))); ?></textarea>
                    </div> 
                      
                          
                </div>


             </div>

        </div>
 
      <!--================ End Our Customer Saying Section =================-->

<div class="modal fade" id="myViewImagesModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="d_title"></h4>
        </div>
        <div class="modal-body">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators" style="bottom: 0%;" id="d_bubols">
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" id="all_slider_images">
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-arrow-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-arrow-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
         
       
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
<script>
    function viewAllImages(srt) {
        var p_all_info = $('#p_all_info_'+srt).val();
        var obj        = jQuery.parseJSON(p_all_info);
        var htmls      = '';
        var htmls2     = '';
        for(i=0;i< (obj.all_imges).length; i++)
            { 
                var c_class =  i == "0" ? "active" : "";
                htmls += '<div class="item '+c_class+'">'; 
                htmls += '<img src="http://103.15.67.180/developer/mk_engineers_html/assets/images/all-project/project_iner_img/'+obj.folder_path+'/'+obj.all_imges[i]+'" alt="Los Angeles" style="width:100%;height: 300px;">';
                htmls += '</div>';
                htmls2  += '<li data-target="#myCarousel" data-slide-to="'+i+'" class="'+c_class+'"></li>';
                
            }
        $('#d_title').html(obj.title);
        $('#all_slider_images').html(htmls);
        $('#d_bubols').html(htmls2);
        $('#myViewImagesModal').modal('show');
    }
</script>
   </body>
</html>