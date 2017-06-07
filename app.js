const app = angular.module('app',[]);
app.service('randomNumber', function(){
  this.get = function(min, max){ return Math.floor(Math.random() * (max - min)) + min; }
  this.bool = function(){ return Math.random() >= 0.5; }
});
app.service('loremIpsum', function($http){

  const self = this;
  let loremIpsumTxt = "";
  let arrayIpsum = [];
  let storage = []; // avoid digest error



  let error = [];

  // request
  const getLoremIpsum = function(){
    $http({
      method: 'GET',
      url: 'loremipsum.txt'
    }).then(
      function(res){
        loremIpsumTxt = res.data; // txt
        arrayIpsum = loremIpsumTxt.split(' ');
      },
      function(res){ error.push(res); });
  };
  // run request
  getLoremIpsum();

  // randomization
  function getRandomArbitrary(min, max) { return Math.floor(Math.random() * (max - min)) + min; }

  this.getSize = function(size, seed = 1)
  {
    if(arrayIpsum.length > 0){

      let pos = parseInt(size+""+seed);

      if(storage[pos]){
        return storage[pos];
      }
      else{
        let arrSize = arrayIpsum.length;
        let maxPick = arrSize - size;
        let startpoint = getRandomArbitrary( 0 , maxPick );
        let endpoint = startpoint + size;
        let smallLorem = arrayIpsum.slice( startpoint, endpoint );
        let str = smallLorem.toString();
        let str_0 = str.replace(/,,/g, "--"); // preserve dash
        let str_1 = str_0.replace(/,/g, " ");
        str = str_1.replace(/--/g, ", ");
        str = str.charAt(0).toUpperCase() + str.slice(1) + "."; // upperCase
        if(str != "."){ storage[pos] = str; }
        return str;
      }
    }
  }

  this.word = function(size, seed = 1){
    let str = self.getSize(size, seed) || 'waiting for content.';
    return str.substring(0, str.length - 1);
  }
});

app.controller('loremController', function($scope, $http, loremIpsum){

  $scope.lorem = function(size, seed){
    return loremIpsum.getSize(size, seed);
  };

});




app.controller('mainController', function($scope, wordmixer, chatmixer){

  $scope.pagename = "Shyclown";
  $scope.cards = [
    { header: 'Motivation', content: 'Here you can find my curiculum and examples', button: 'Read', modal: '#AboutMotivation'},
    { header: 'Curriculum Vitae', content: 'Here you can find my curiculum and examples', button: 'Read', modal: '#AboutCV'},
    { header: 'Blog', content: 'Here you can find my curiculum and examples', button: 'Read', modal: '#AboutBlog'},
    { header: 'Gallery', content: 'Here you can find images and drawings', button: 'Visit', modal: '#AboutGallery'},
  ];

  $scope.skills = [
    { name: 'PHP', confidence: '', about: '', category:'' },
    { name: 'HTML', confidence: '', about: '', category:'' },
    { name: 'CSS', confidence: '', about: '', category:'' },
    { name: 'JavaScript', confidence: '', about: '', category:'' },
    { name: 'AngularJS', confidence: '', about: '', category:'' },
  ];
  $scope.mainLinks = [
    { name: 'About', href: '#' },
    { name: 'Porfolio', href: '#' },
    { name: 'Faq', href: '#' },
    { name: 'Contacts', href: '#' },
  ];
  $scope.topLinks = [
    { name: 'About', href: '#About' },
    { name: 'Porfolio', href: '#Portfolio' },
    { name: 'Faq', href: '#' },
    { name: 'Contacts', href: '#Contacts' },
  ];
  $scope.footerLinks = [
    { name: 'About', href: '#' },
    { name: 'Porfolio', href: '#' },
    { name: 'Faq', href: '#' },
    { name: 'Contacts', href: '#' },
  ];

  $scope.contact = {
    firstname: 'Roman',
    surname: 'Moravcik',
    adress: {
      street: 'Ipelska 5',
      city: 'Bratislava',
      post_number: '82107',
      country: 'Slovak Republic'
    },
    email: 'roman.moravcik1@gmail.com',
    phone: '0911-761-474'
  }


  // Wordmixer
  function getRandomArbitrary(min, max) {  return Math.floor(Math.random() * (max - min)) + min;  }
  $scope.wordmixer = {};
  $scope.wordmixer.result = 'Creativity Mixer';
  $scope.wordmixer.adj = [];
  $scope.wordmixer.noun = [];
  $scope.wordmixer.verb = []
  $scope.wordmixer.generate = function(){
    let pick_emo = getRandomArbitrary(0, wordmixer.emot.length );
    let pick_anim = getRandomArbitrary(0, wordmixer.animal.length );
    let pick_adj = getRandomArbitrary(0, wordmixer.adj.length );
    let pick_noun = getRandomArbitrary(0, wordmixer.noun.length);
    let pick_verb = getRandomArbitrary(0, wordmixer.verb.length);

    $scope.wordmixer.result =
    wordmixer.emot[pick_emo] +' ' +
    wordmixer.animal[pick_anim] + ' with ' +
    /*wordmixer.verb[pick_verb]+'ing ' +*/
    wordmixer.adj[pick_adj]+ ' '+
    wordmixer.noun[pick_noun];
  }

  // Psst
  const dots = '...';
  let used = [];
  let dotsPresent = false;
  let answers = 0;
  $scope.chat = { text: [] };
  $scope.chatInput = '';

  $scope.addChat = function(){
    if($scope.chatInput){
      if(dotsPresent){ $scope.chat.text.splice(-1,1); }
      $scope.chat.text.push( $scope.chatInput );
      if(dotsPresent){ $scope.chat.text.push( dots ); }
      $scope.chatInput = '';
      Answer();
    }
  }

  const Answer = function(){
    $scope.chat.text.push( dots );
    dotsPresent = true;
    setTimeout(function(){
      // remove dots
      $scope.chat.text.splice(-1,1);
      dotsPresent = false;
      // add answer
      if(answers == 0){
        $scope.chat.text.push( chatmixer.reaction[0] );
      }
      else if(answers == 1){
        $scope.chat.text.push( chatmixer.reaction[1] );
      }
      else if(used.length != chatmixer.questions.length){
        let n = getRandomArbitrary(0, chatmixer.questions.length);
        while(used.includes(n)){ n = getRandomArbitrary(0, chatmixer.questions.length); };
        $scope.chat.text.push(chatmixer.questions[n] );
        used.push(n);
      }
      else{
        let n = getRandomArbitrary(2, 12);
        $scope.chat.text.push( chatmixer.reaction[n] );
      }
      $scope.$apply();
      answers++;
    }, 700)
  }

  $scope.squares = {
    cards: [
      {
        image: 1,
        name: 'Agile frameworks',
      content:'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.',
      price:15,
      likes:21,
      author:'Michael Scott'
    },
    {
      image: 2,
      name: 'Survival strategies',
    content:'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.',
    price:80,
    likes:9,
    author:'Michael Scott'
  },
  {
    image: 3,
    name: 'Low hanging fruit',
  content:'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.',
  price:90,
  likes:16,
  author:'Michael Scott'
},
{
      image: 4,
      name: 'Operational change',
content:'Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail.',
price:46,
likes:4,
author:'Michael Scott'
},
{
  image: 5,
  name: 'Proactive domination',
content:'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.',
price:10,
likes:1,
author:'Michael Scott'
},
{
image: 6,
name: 'Ballpark value',
content:'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.',
price:115,
likes:3,
author:'Michael Scott'
},
{
  image: 7,
  name: 'Key performance',
content:'Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail.',
price:55,
likes:11,
author:'Michael Scott'
},
{
      image: 8,
      name: 'Empowered markets',
content:'Collaboratively administrate empowered markets via plug-and-play networks. Dramatically visualize customer directed convergence without revolutionary ROI.',
price:40,
likes:3,
author:'Michael Scott'
},
{
      image: 9,
      name: 'Installed base',
content:'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.',
price:14,
likes:23,
author:'Michael Scott'
}
]
}
$scope.squareColumns = 2;
$scope.getNumber = function(num) {
    return new Array(num);
}

});
