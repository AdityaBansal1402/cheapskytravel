$('.owl-carousel1').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    pagination: false,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
}),

$('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    
    responsive:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            margin:0
            
        },
        600:{
            items:2,
            nav:false,
            margin:0
        },
        1000:{
            items:3,
            nav:true,
            dots:false,
            
            loop:true
        }
    }
}),
$('.owl-slide').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    
    responsive:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            margin:0
            
        },
        600:{
            items:2,
            nav:false,
            margin:0
        },
        1000:{
            items:1,
            nav:false,
            dots:false,
            
            loop:true
        }
    }
})
$('.day-deal').owlCarousel({
    loop:false,
    margin:10,
    autoplay:false,
    responsive:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true,
            autoplay:true,
            margin:0
            
        },
        600:{
            items:2,
            nav:false,
            loop:true,
            autoplay:true,
            margin:10
        },
        1000:{
            items:3,
            nav:false,
            dots:false
            
           
        }
    }
})
$('.internation-pack').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsive:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            margin:0
            
        },
        600:{
            items:2,
            nav:false,
            margin:0
        },
        1000:{
            items:4,
            nav:false,
            dots:false,
            
            loop:true
        }
    }
})

$('.dest-slider').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsive:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            margin:0
            
        },
        600:{
            items:2,
            nav:false,
            margin:0
        },
        1000:{
            items:3,
            nav:false,
            dots:false,
            
            loop:true
        }
    }
})