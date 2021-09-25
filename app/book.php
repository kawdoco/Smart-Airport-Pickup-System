
<style>
    
    /* Base Styles */
#cssmenu,
#cssmenu ul,
#cssmenu li,
#cssmenu a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  font-weight: normal;
  text-decoration: none;
  line-height: 1;
  font-size: 12px;
  position: relative;
}
#cssmenu a {
  line-height: 1.3;
}
#cssmenu {
  /*width: 260px;*/
}
#cssmenu > ul > li > a {
  padding-right: 40px;
  
  font-size: 25px;
  font-weight: bold;
  display: block;
  background: #6ba5bf;
  color: #fff;
  
  border-bottom: 1px solid #e7e7e7;
}



#cssmenu > ul > li > a > span {
   background: #31a6df;
  background: -moz-linear-gradient(#31a6df 0%, #31a6df 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #31a6df), color-stop(100%, #31a6df));
  background: -webkit-linear-gradient(#31a6df 0%, #31a6df 100%);
  background: linear-gradient(#31a6df 0%, #31a6df 100%);
  padding: 10px 10px 10px 10px;
  display: block;
  font-size: 14px;
  font-weight: 300;
}
#cssmenu > ul > li > a:hover {
  text-decoration: none;
}
#cssmenu > ul > li.active {
  border-bottom: none;
}
#cssmenu > ul > li.active > a {
  color: #000;
  
}
#cssmenu > ul > li.active > a span {
  background: #31a6df;
}
#cssmenu span.cnt {
  position: absolute;
  top: 6px;
  right: 15px;
  padding: 0;
  margin: 0;
  background: none;
}
/* Sub menu */
#cssmenu ul ul {
  display: none;
}
#cssmenu ul ul li {
  border: 1px solid #e0e0e0;
  border-top: 0;
}
#cssmenu ul ul a {
  padding: 5px 5px 5px 25px;
  display: block;
  color: #676767;
  font-size: 12px;
}
#cssmenu ul ul a:hover {
  color: #e94f31;
}

#cssmenu ul ul a:before {
  content: "»";
  position: absolute;
  left: 10px;
  color: #e94f31;
}
#cssmenu ul ul li.odd {
  background: #bfbdbd;
}
#cssmenu ul ul li.even {
  background: #fff;
}

    </style>
<div id='cssmenu'>
<ul>
   <li class='active'></li>
    <li class='has-sub'><a href='#'><span><i class="fa fa-fighter-jet" aria-hidden="true"></i> AIR PORT PICKUP</span></a>
      <ul>
          <li style="background-color: #fff;"><?php require_once 'airportpickup.php'; ?></li>
      </ul>
   </li>
   
     <li class='has-sub '><a href='#'>
             <span>
                 <i class="fa fa-fighter-jet" style=" -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);" aria-hidden="true"></i> AIR PORT DROP 
             </span></a>
       <ul>
         <li  style="background-color: #fff;"><?php require_once './airportdrop.php'; ?></li>
      </ul>
   </li>
     <li class='has-sub '>
         <a href='#'>
             <span>
                 <i class="fa fa-car" aria-hidden="true"></i> CAR WITH DRIVER
             </span>
         </a>
       <ul>
         <li  style="background-color: #fff;"><?php require_once './withdriver.php'; ?></li>
      </ul>
   </li>
     <li class='has-sub '>
         <a href='#'>
             <span>
                 <i class="fa fa-th-list" aria-hidden="true"></i> RENT A CAR
             </span>
         </a>
       <ul>
         <li  style="background-color: #fff;"><?php require_once './rentcar.php'; ?></li>
      </ul>
   </li>
    
</ul>
</div>
    <script>
        
    $(document).ready(function(){
    $( document ).on( 'focus', ':input', function(){
        $( this ).attr( 'autocomplete', 'off' );
    });
});

            function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#pickoff').val();
       // $('#country_list_id').val() = null;
        
        $.ajaxSetup({ cache: false });
        
  
        
	if (keyword.length >= min_length) {
           
            //var random = Math.floor( Math.random() * 90 ) + 10;
            $('#country_list_id').empty();
            
		$.ajax({
			url: 'refresh_command.php' ,
			type: 'POST',
                        cache : false,
                        async:false,
                   
			data: {keyword:keyword},
			success:function(data){
                             
                               // $('#country_list_id').data().autocomplete.term = null;
				//$('#country_list_id').val() =  null;
                                 $('#country_list_id').show();
				$('#country_list_id').html(data);
                                
                               
			}
		});
               
                
	} else {
          
           $('#country_list_id').empty();
		$('#country_list_id').hide();
                
       
	}
}
 
// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
        $(this).val('');
	$('#pickoff').val(item);
	// hide proposition list
       
	$('#country_list_id').hide(); 
        $('#dpd3')[0].focus();
}
function set_item1(item) {
    $(this).val('');
	// change input value
	$('#pickoff1').val(item);
	// hide proposition list
       
	//$('#country_list_id').hide();
       // $('#dpd3')[0].focus();
}
/////////////////////////////////////////////////////////////////////////////////////////

 function autodrop() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#dropoff').val();
       // $('#country_list_id').val() = null;
        
        $.ajaxSetup({ cache: false });
        
  
        
	if (keyword.length >= min_length) {
           
            //var random = Math.floor( Math.random() * 90 ) + 10;
            $('#country_list_id').empty();
            
		$.ajax({
			url: 'refresh_command1.php' ,
			type: 'POST',
                        cache : false,
                        async:false,
                   
			data: {keyword:keyword},
			success:function(data){
                             
                               // $('#country_list_id').data().autocomplete.term = null;
				//$('#country_list_id').val() =  null;
                                 $('#country_list_id1').show();
				$('#country_list_id1').html(data);
                                
                               
			}
		});
               
                
	} else {
          
           $('#country_list_id1').empty();
		$('#country_list_id1').hide();
                
       
	}
}
 
// set_item : this function will be executed when we select an item
function set_item2(item) {
	// change input value
        $(this).val('');
	$('#dropoff').val(item);
	// hide proposition list
       
	$('#country_list_id1').hide(); 
        $('#dpdrop')[0].focus();
}
function set_item12(item) {
    $(this).val('');
	// change input value
	$('#dropoff1').val(item);
	// hide proposition list
       
	//$('#country_list_id').hide();
       // $('#dpd3')[0].focus();
}

//////////////////////////////////////////////////////////////////////////////////////
	
    if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			//$('#dp1').datepicker({
			//	format: 'mm-dd-yyyy'
			//});
			//$('#dp2').datepicker();
			//$('#dp3').datepicker();

 
			


        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({       
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }          
          
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
       
        
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
        
        
        var pickuptime = $('#dpd3').datepicker({
                  onRender: function(date) {
            return date.valueOf() <= now.valueOf() ? 'disabled' : '';
           
          }
        }).on('changeDate', function(ev) {
          $('#country_list_id').hide();
         pickuptime.hide();
        }).data('datepicker');
        
        
        var droptime = $('#dpdrop').datepicker({
           
          onRender: function(date) {
            return date.valueOf() <= now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          $('#country_list_id2').hide();
         droptime.hide();
        }).data('datepicker');
        
        
		});
                
                
              
	</script>    
         <script>
/* globals $: false */

$.fn.responsiveTabs = function() {
  this.addClass('responsive-tabs');
  this.append($('<span class="glyphicon glyphicon-triangle-bottom"></span>'));
  this.append($('<span class="glyphicon glyphicon-triangle-top"></span>'));

  this.on('click', 'li.active > a, span.glyphicon', function() {
    this.toggleClass('open');
  }.bind(this));

  this.on('click', 'li:not(.active) > a', function() {
    this.removeClass('open');
  }.bind(this));
};

$('.nav.nav-tabs').responsiveTabs();
</script>
        
        