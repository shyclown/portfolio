app.directive('specificCardOne', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/cards/specific-card-one.html'
  }
}]);

app.directive('specificCardTwo', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/cards/specific-card-two.html'
  }
}]);

app.directive('specificCardThree', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/cards/specific-card-three.html'
  }
}]);
