app.directive('shopSearchBigCard', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/shop-search-big/parts/shop-search-big-card.html'
  }
}]);
app.directive('shopSearchBigCards', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    link: function(scope, element, attrs){

    },
    templateUrl: 'templates/shop-search-big/parts/shop-search-big-cards.html'
  }
}]);
app.directive('shopSearchBigForm', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/shop-search-big/parts/shop-search-big-form.html'
  }
}]);
app.directive('shopSearchBigPagination', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/shop-search-big/parts/shop-search-big-pagination.html'
  }
}]);

app.directive('shopSearchResultManage', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/shop-search-big/parts/shop-search-result-manage.html'
  }
}]);



app.directive('shopSearchBig', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.lorem = loremIpsum.getSize;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/shop-search-big/shop-search-big.html'
  }
}]);
