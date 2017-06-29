app.directive('specificCardMidOne', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/cards/single/specific-card-mid-one.html'
  }
}]);
app.directive('specificCardMidTwo', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/cards/single/specific-card-mid-two.html'
  }
}]);
app.directive('specificCardMini', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/cards/single/specific-card-mini.html'
  }
}]);
app.directive('specificCardMidThree', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: false,
    templateUrl: 'templates/cards/single/specific-card-mid-three.html'
  }
}]);



app.directive('specificCardPanelOne', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/cards/specific-card-panel-one.html'
  }
}]);

app.directive('specificCardPanelTwo', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/cards/specific-card-panel-two.html'
  }
}]);

app.directive('specificCardPanelThree', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope:{},
    link: function(scope, element, attrs){
      scope.word = loremIpsum.word;
      scope.random = randomNumber.get;
      scope.getNr = function(nr){return new Array(nr);};
    },
    templateUrl: 'templates/cards/specific-card-panel-three.html'
  }
}]);
