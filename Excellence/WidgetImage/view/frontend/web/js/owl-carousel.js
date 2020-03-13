define([
    "jquery",
    "Excellence_WidgetImage/js/owl.carousel.min"
], function($){
    return function (config, element) {
        return $(element).owlCarousel(config);
    }
});