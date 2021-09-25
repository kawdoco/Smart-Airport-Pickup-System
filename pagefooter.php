<style>
     .modal-header, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .col-centered{
    float: none;
    margin: 0 auto;
}
    #map { 
  height: 400px; 
  width: 100%; 
  position:absolute; 
  margin: 0;
  padding: 0;
  top: 0; 
  right: 0;
  left: 0; 
  z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
}

#layer { 
 height: 400px; 
  width: 100%; 
  position:absolute; 
  margin: 0;
  padding: 0;
  top: 0; 
  right: 0;
  left: 0; 
  z-index: 1;
    
  background: black;

  opacity: 0.35; /* Set the opacity for a slightly transparent Google Form */ 
  color: white;
}
</style>
<div class="container-edit-fluid" style="position: relative;">
            <div class="curve"><a href="#PageFooter"><img src="img/down1.png" alt="Down" class="center-block"></a></div>
        </div>
<div class="container-edit-fluid" style="background-color: #f5f5f5; height: auto;position: relative;">
              <div class="container-edit" style="margin-top: 30px; margin-bottom: 10px;">
              
        <div class="col-sm-12">
                   <p class="p2 text-center">Ayubowan Tours &amp; Travels (Pvt) Ltd</p>
                    
                    
                    <div class="row">
                        <p class="text-center"><br> <span style="text-align: left; padding-left: 15px; font-size: 12px; margin-top: 10px; 
                                      color:#515657;"> No 15, Ranamoto shopping complex,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colombo Road, Negombo,
                                    Sri Lanka<br></span></p>
                       <p class="text-center">
                           <i class="fa fa-phone-square" aria-hidden="true" style="color: #f58220; padding-left: 15px;"></i>
                           <span style="font-size: 40px;">+94 31 222 59 00 </span>
                            <i class="fa fa-fax" aria-hidden="true" style="color: #f58220; padding-left: 15px;"></i>
                            <span style="text-align: left; padding-left: 15px;
                                      color:#515657;font-size: 40px;"> +94 31 222 59 01 </span>
                               </p>
                                    
                              
                
                               <p class="text-center">    <span style="text-align: left; padding-left: 15px; 
                                                 color:#f58220;font-size: 35px;"> <a href="#" style="color:#f58220;">info@ayubowantours.com</a><br>
                                           
                            </span>
                               
                            </p>
                    </div>
                    </div>
                    </div>
                    </div>
<div class="container-edit-fluid" style="position: relative;" id="PageFooter">
<!--                       <div class="row"  style="margin: 0;padding: 0;">
                           <div id="map" class="row"></div>
        <div id="layer" class="row"></div>
    </div> -->
                   <!--<div class="row" style="background: linear-gradient(#e7e8ec,#e5e6eb);margin-top: 400px;">-->
                   <div class="row" style="background: linear-gradient(#e7e8ec,#e5e6eb);">
                       <!--<img src="img/map1.jpg" class="center-block img-responsive" style="margin-top: 20px;margin-bottom: 20px;">-->
                            <p style="padding-left: 15px;text-align: center;">
                                <a href="https://www.facebook.com/Ayubowantours/" target="_blank"><i class="fa fa-facebook-square fnticn" aria-hidden="true"></i></a>
                                <a href="https://plus.google.com/+AYUBOWANTOURS/posts" target="_blank"><i class="fa fa-google-plus-square fnticn" aria-hidden="true"></i></a>
<!--                                <a href="https://www.youtube.com/channel/UCFunx8fEcKdjgUlgUjX5ckA" target="_blank"><i class="fa fa-youtube-square fnticn" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-whatsapp fnticn" aria-hidden="true"></i></a>
                                <a href="viber://add?number=%773388288"><i class="fa fa-vimeo-square fnticn" aria-hidden="true"></i></a>
                                <a href="skype:ayubowan.travel?call"> <i class="fa fa-skype fnticn" aria-hidden="true"></i></a>-->

                              
                            </p><br>
                            <p class="text-center" style="font-size: 14px;font-weight: 600;">
                                Concept And Developed By<br>
                                <a href="http://www.kawdoco.com/" rel="nofollow" target="_blank" > <img src="http://www.totaltravel.lk/images/kawdoco_logo_small.png" alt="kawdoco"  /></a>
                            </p>
                    </div>  
                    
                    
              </div>
          

 
<script>
        
          function insertmail() {
	var min_length = 0; // min caracters to display the autocomplete
	var email = $('#email').val();
       // $('#country_list_id').val() = null;
  
       // alert(email); 
        
	if (email.length >= min_length) {
           
            //var random = Math.floor( Math.random() * 90 ) + 10;
            
		$.ajax({
			url: 'insertemail.php' ,
			type: 'POST',
                        cache : false,
                        async:false,
                   
			data: {email:email},
			success:function(data){
                             
                               // $('#country_list_id').data().autocomplete.term = null;
				//$('#country_list_id').val() =  null;
                              //   $('#country_list_id').show();
				$('#testshow').html(data);
			}
		});
               
                
	} else {
          
           //$('#country_list_id').empty();
		//$('#country_list_id').hide();
	}
}
 


              
	</script>    
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105666607-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-105666607-1');
</script>          