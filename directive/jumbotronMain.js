app.directive('navMain', function() {

  return {
  // generate template

  restrict: 'E',
  transclude: true,
  scope: {
    links: '@bsLinks',
  },
  link: function(scope, element, attrs) {
    scope.lorem = function(size){ loremIpsum.getSize(size); }
  },
  templateUrl: 'templates/nav-main.html'
  };
});

app.directive('jumbotronMain', function() {

  return {
  restrict: 'E',
  scope: {
    lorem: "=",
    toggle: '@bsToggle'
  },
  link: function(scope, element, attrs) {
    scope.random = function(min, max) { return Math.floor(Math.random() * (max - min + 1)) + min; }
    scope.toggleBtn = scope.toggle;
    scope.header = scope.random(6,15);
    scope.lead = scope.random(16,45);

  },
  templateUrl: 'templates/jumbotron-main.html'
  };
});



app.directive('cardsRow', function() {

  return {
  restrict: 'E',
  scope: {
    lorem: "="
  },
  link: function(scope, element, attrs) {

    scope.cards = new Array(parseInt(attrs.maxsize));
    scope.random = function(min, max) { return Math.floor(Math.random() * (max - min +1 )) + min; }
    let width = 12 / parseInt(attrs.maxsize);

    scope.width = function(){return "col-sm-"+ width;}
  },
  templateUrl: 'templates/cards-row.html'
  };
});

app.directive('breadcrumb', function() {

  return {
  restrict: 'E',
  scope: {
    lorem: "="
  },
  link: function(scope, element, attrs) {


    scope.links = new Array(parseInt(3));
    scope.random = function(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    let nr_links = scope.random(2,4);
    scope.links = new Array(nr_links);

    scope.word = function(size, seed){
      let str = scope.lorem(size, seed*13)|| 'waiting for content.';
      return str.substring(0, str.length - 1);
    }

    let width = 12;

    scope.width = function(){return "col-sm-"+ width;}
  },
  templateUrl: 'templates/breadcrumb.html'
  };
});

app.directive('articleInfoTop', function() {

  return {
  restrict: 'E',
  scope: {
    lorem: "="
  },
  link: function(scope, element, attrs)
  {
    //seed



    scope.links = new Array(parseInt(3));
    scope.random = function(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    scope.date = scope.random(4,28);
    let nr_links = scope.random(2,4);
    scope.links = new Array(nr_links);

    scope.word = function(size, seed){
      let str = scope.lorem(size, seed) || 'waiting for content.';
      return str.substring(0, str.length - 1);
    }

    let width = 12;

    scope.width = function(){return "col-sm-"+ width;}
  },
  templateUrl: 'templates/article-info-top.html'
  };
});




app.directive('articleFull', function() {

  return {
  restrict: 'E',
  scope: { lorem: "=" },
  link: function(scope, element, attrs) {

    scope.random = function(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    // make images and quotes
    scope.headersize = scope.random(4,8);
    scope.leadsize = scope.random(16,32);
    let nr_paragraphs = scope.random(3,7);
    scope.paragraphs = new Array(nr_paragraphs);
    scope.min = 32;
    scope.max = 128;
    scope.seed = 11;

    let width = 12;

    scope.width = function(){return "col-sm-"+ width;}
  },
  templateUrl: 'templates/article-full.html'
  };
});

app.directive('articleFooterTabs', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: {},
    link: function(scope, element, attrs){
      scope.lorem = loremIpsum.getSize;
      scope.word = loremIpsum.word;
      scope.random = randomNumber;

      // get count of tabs
      let tabsCount = randomNumber.get(1,4);
      scope.tabs = new Array(tabsCount);
      // tabs
      const types = ['author','Sources','Text','Properties','Comments']
      let tab = function(seed){
        let name = scope.word(1, seed);
        name = name.replace(/ /g,'');
        const id = 'tab_'+ name + '_' + seed;
        return { id: id, name: name};
      }
      for (var i = 0; i < scope.tabs.length; i++) {
        scope.tabs[i] = tab(i);
      }
    },
    templateUrl: 'templates/article-footer-tabs.html'
  }
}]);

app.directive('mediaComment', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: { },
    link: function(scope, element, attrs)
    {
      const lorem = loremIpsum.getSize;
      const word = loremIpsum.word;
      const random = randomNumber.get;
      const size = randomNumber.get(32,128);
      const seed = randomNumber.get(32,500);
      // comment content
      scope.name = word(2, seed);
      scope.comment = lorem(size, seed);
      // comment reply loop
      let replyExist = random(0,4);
      scope.hasReply = replyExist == 0 ? true : false;

    },
    templateUrl: 'templates/media-comment.html'
  }
}]);

app.directive('linksPane', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: { },
    link: function(scope, element, attrs)
    {
      const lorem = loremIpsum.getSize;
      const word = loremIpsum.word;
      const random = randomNumber.get;
      const size = randomNumber.get(32,128);
      const seed = randomNumber.get(32,500);
      // comment content
      scope.name = word(2, seed);
      scope.comment = lorem(size, seed);
      // comment reply loop
      let replyExist = random(0,4);
      scope.hasReply = replyExist == 0 ? true : false;

    },
    templateUrl: 'templates/links-pane.html'
  }
}]);

app.directive('authorPane', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: { },
    link: function(scope, element, attrs)
    {
      const lorem = loremIpsum.getSize;
      const word = loremIpsum.word;
      const random = randomNumber.get;
      const size = randomNumber.get(32,128);
      const seed = randomNumber.get(32,500);
      // comment content
      scope.name = word(2, seed);
      scope.comment = lorem(size, seed);
      // comment reply loop
      let replyExist = random(0,4);
      scope.hasReply = replyExist == 0 ? true : false;

    },
    templateUrl: 'templates/author-pane.html'
  }
}]);

app.directive('textPane', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: { },
    link: function(scope, element, attrs)
    {
      const lorem = loremIpsum.getSize;
      const word = loremIpsum.word;
      const random = randomNumber.get;
      const size = randomNumber.get(32,128);
      const seed = randomNumber.get(32,500);
      // comment content
      scope.name = word(2, seed);
      scope.comment = lorem(size, seed);
      // comment reply loop
      let replyExist = random(0,4);
      scope.hasReply = replyExist == 0 ? true : false;

    },
    templateUrl: 'templates/text-pane.html'
  }
}]);

app.directive('propertiesPane', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
  return{
    restrict: 'E',
    scope: { },
    link: function(scope, element, attrs)
    {

      const lorem = loremIpsum.getSize;
      const word = loremIpsum.word;
      const random = randomNumber.get;
      const random_bool = randomNumber.bool;
      const seed = randomNumber.get(32,500);

      // property name size
      const getNameSize = random(1,3);


      // Properties
      scope.properties = [];
      const property = function(i){
        const prop_seed = seed + i;
        const getVal = function(){
          const txtProp = random_bool();
          if(txtProp){ return word(1, prop_seed + 16); }
          else{ return random(1, 512); }
        }
        this.name = word(random(1,3),prop_seed);
        this.val = getVal();
      }
      const nrProperties = random(5,15);
      for (var i = 0; i < nrProperties; i++) {
        scope.properties.push(new property(i));
      }

    },
    templateUrl: 'templates/properties-pane.html'
  }
}]);

app.directive('shortText', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
    return{
      restrict: 'E',
      scope: { },
      link: function(scope, element, attrs)
      {
        const lorem = loremIpsum.getSize;
        const random = randomNumber.get;
        const size = random(32,64);
        const seed = random(32,500);
        // content
        scope.text = lorem(size, seed);
      },
      template: '<p class="short-text">{{text}}</p>'
    }
}]);

app.directive('footerCopyright', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
    return{
      restrict: 'E',
      scope: { },
      link: function(scope, element, attrs)
      {
        const lorem = loremIpsum.getSize;
        const random = randomNumber.get;
        const size = random(32,64);
        const seed = random(32,500);
        // content
        scope.text = lorem(size, seed);
      },
      templateUrl: 'templates/footer/copyright.html'
    }
}]);

app.directive('footerSiteMap', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
    return{
      restrict: 'E',
      scope: { },
      link: function(scope, element, attrs)
      {
        scope.word = loremIpsum.word;
        scope.random = randomNumber.get;


        scope.getNr = function(nr){return new Array(nr);};

        const size = scope.random(32,64);
        scope.tabs = new Array(4); // 4 columns
        const seed = scope.random(32,500);
        // content
        scope.text = scope.word(size, seed);
      },
      templateUrl: 'templates/footer/site-map.html'
    }
}]);

app.directive('footerPartners', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
    return{
      restrict: 'E',
      scope: { },
      link: function(scope, element, attrs)
      {
        scope.word = loremIpsum.word;
        scope.random = randomNumber.get;

        scope.getNr = function(nr){return new Array(nr);};
      },
      templateUrl: 'templates/footer/partners.html'
    }
}]);


app.directive('checkers', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber){
    return{
      restrict: 'E',
      scope: { },
      link: function(scope, element, attrs)
      {
        scope.word = loremIpsum.word;
        scope.random = randomNumber.get;

        scope.icons = [
          'rocket', 'subway', 'bus', 'refresh', 'font-awesome','heartbeat','git','dot-circle-o',
          'spinner', 'tty', 'universal-access', 'tasks', 'snowflake-o', 'shopping-bag', 'shopping-cart',
          'shopping-basket', 'star-half-full', 'support'
        ];

        scope.pickIcon = function(icon){
          console.log(icon);
          return 'fa-'+ scope.icons[icon];

        }


        scope.getNr = function(nr){return new Array(nr);};
      },
      templateUrl: 'templates/checkers.html'
    }
}]);
