
/*----------------------------
--------- WHATS NEW ----------
-----------------------------*/

$('#page').cycle({
                fx:'fade',
                next:'#next',
                prev:'#prev',
                timeout:3000,
                pause:1
            });

/*----------------------------*/



/*----------------------------
------- TESTINOMIAL ---------
---------------------------*/
        
$(document).ready(function () {           
			$('.bxslider').bxSlider({
				mode: 'vertical',
				slideMargin: 3,
				auto:true,
				pause:2000,
				stopAuto: false
			});   
        });


/*----------------------------*/




/*---------------------------
---- DATE &TIME PICKER ------
---------------------------*/

$(document).ready(function () {   

    $('#datetimepicker3').datetimepicker({
	inline:true,
	minDate:new Date(),
	
});
      });

/*-----------------------------*/


/*-----------------------------------
-------EDITOR-PICK-SLIDER------------
------------------------------------*/


$(document).ready(function(){
    var width = $(window).width();
    var count = 1;
    if(width > 768) {
        count = 4;
    }
    else if(width > 470) {
        count = 2;
    }
    $('.editor-pick-slider').slick({
  slidesToShow: count,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 3000,
});
    
/*------------------------------------*/
    
    
/*-----------------------------------
-----TIME N DATE PICKER HOME-------
------------------------------------*/
    
    
    
     $('#basicExample .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#basicExample .date').datepicker({
                    'format': 'm/d/yyyy',
                    'autoclose': true
                });

                var basicExampleEl = document.getElementById('basicExample');
               // var datepair = new Datepair(basicExampleEl);
    	$("#example1").dateDropdowns();
    });


/*-----------------------------------
----------- GALLERY ----------------
------------------------------------*/

$(function(){
		var gallery = $('.gallery a').simpleLightbox();
	});

/*-----------------------------------
------------ SEARCH BOX -------------
------------------------------------*/
	
	
	
	  $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
					$('#DropdownShop').dropdown('toggle');
					$('.shop-autocomplete .dropdown-menu').hide();
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
			
	
	
	//Add to cart book function
	$('.addtocart').click(function(){
        
        var shop_service_id = $(this).attr('data-ss-cat-id');
        var sub_service_name = $(this).attr('data-ss-cat-name');
        var sub_service_price = $(this).attr('data-ss-cat-price');

      //  alert(id);
        
         $.ajax({
             type:'POST',
             url: '../addtocart',
             data:{shop_service_id:shop_service_id,sub_service_name:sub_service_name, sub_service_price:sub_service_price},
             dataType:'json',
               success: function (data){
                 if(data.msg=="success"){
                   console.log(data);
                   $('.total_items').html(data.total_items);
                   $('.total_price').html(data.total_price);
                    
                }
                else{
                  
                }
            }
        });
    });

// view cart function
    $('.view_cart').click(function(){
        
      
        
         $.ajax({
             type:'POST',
             url: '../viewcart',
           
             dataType:'json',
               success: function (data){
                 if(data.msg=="success"){
                   console.log(data);
                   
                }
                else{
                    
                }
            }
        });
    });