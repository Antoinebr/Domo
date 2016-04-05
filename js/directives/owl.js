app.directive('owlCarousel', function() {
  return {
    restrict: 'A',

    link: function(scope, element, attrs) {
      $(element).owlCarousel({
        items: 1,
        nav:true
      });
    }
  };
});
