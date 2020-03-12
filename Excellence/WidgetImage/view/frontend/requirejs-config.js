// var config = {
//     "map": {
//         "*": {
//             "OwlCarousel": "Excellence_WidgetImage/js/owl-carousel"
//         }
//     },
//     "shim":{
//         "Excellence_WidgetImage/js/owl.carousel.min": ["jquery"]
//     }
// };

var config = {
    map:{
        '*' : {
          
            "owlcarousel" : "Excellence_WidgetImage/js/owlcarousel/owl.carousel"
        }
    },
    shim : {
       
        "owlcarousel" : {
            deps: ['jquery'],
            export : 'owlcarousel'
        }
       
    }
};