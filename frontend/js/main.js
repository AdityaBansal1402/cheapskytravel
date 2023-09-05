$('.top-slider').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            nav:true
        },
        600:{
            items:1,
            nav:true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        },
        1000:{
            items:1,
            nav:true,
            dots:true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
      
        }
    }
})
$('.dest-slider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            nav:true
        },
        600:{
            items:1,
            nav:true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        },
        1000:{
            items:3.2,
            nav:true,
            dots:true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
      
        }
    }
})


		$(document).ready(function(){
		    $('#adult').prop('disabled', true);
   			$(document).on('click','.plus1',function(){
				$('#adult').val(parseInt($('#adult').val()) + 1 );
    		});
        	$(document).on('click','.minus1',function(){
    			$('#adult').val(parseInt($('#adult').val()) - 1 );
    				if ($('#adult').val() == 0) {
						$('#adult').val(1);
					}
    	    	});
		    $('#child').prop('disabled', true);
   			$(document).on('click','.plus2',function(){
				$('#child').val(parseInt($('#child').val()) + 1 );
    		});
        	$(document).on('click','.minus2',function(){
    			$('#child').val(parseInt($('#child').val()) - 1 );
    				if ($('#child').val() == 0) {
						$('#child').val(1);
					}
    	    	});
		    $('#infant').prop('disabled', true);
   			$(document).on('click','.plus3',function(){
				$('#infant').val(parseInt($('#infant').val()) + 1 );
    		});
        	$(document).on('click','.minus3',function(){
    			$('#infant').val(parseInt($('#infant').val()) - 1 );
    				if ($('#infant').val() == 0) {
						$('#infant').val(1);
					}
    	    	});
 		});