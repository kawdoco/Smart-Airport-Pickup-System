
    $(document).ready(function(){
    
    $('#cssmenu > ul > li ul').each(function(index, e){
      var count = $(e).find('li').length;
      var content = '<span class="cnt"><img src="img/icon_plus.png"/></span>';
      $(e).closest('li').children('a').append(content);
    });    
    
   
    $('#cssmenu > ul > li > a ').click(function() {
        $('#cssmenu li').removeClass('active');
        $(this).closest('li').addClass('active');	
        var checkElement = $(this).next();
        
        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
        }
        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#cssmenu ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
        }
        if($(this).closest('li').find('ul').children().length == 0) {
            return true;
        } else {
            return false;	
        }		
    });
});

$(document).ready( function() {
	$('#cssmenu li.has-sub.open ul').show();
});



$(document).ready(function () {
    
 $('#dp1').datepicker({
format: 'mm-dd-yyyy'
});
        
 

    var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

  $('#dpd10').on('changeDate', function(ev){

    $(this).datepicker('hide');
});


 var date = $('#dpd10').datepicker({       
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }          
          
        }).on('changeDate', function(ev){
      if (ev.date.valueOf() > $(this).date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            $(this).setValue(newDate);
             date.hide();
          }
});



});
           
