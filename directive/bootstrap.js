app.directive('bootstrapPage', ['loremIpsum', 'randomNumber', function(loremIpsum, randomNumber) {

  // generate template
  function getRandomArbitrary(min, max) { return Math.ceil(Math.random() * (max - min + 1)) + min; }

  let pageOrder = [];

  //BUILD

  // create parts
  // requires button in jumbotron
  let reqAltToggler = false;


  let col = randomNumber.get(2, 4);

  let row = function(str){ return '<div class="row">'+ str +'</div>'; }
  let column = function(size, str){ return '<div class="col-'+size+'">'+str+"</div>"; }
  let container = function(str){ return '<div class="container">'+str+"</div>"; }



  let test = '';
  test += '<nav-sub-main></nav-sub-main>';
  // header

  test += '<jumbotron-main lorem=lorem bs-toggle='+true+'></jumbotron-main>';
  test += '<shop-search-big></shop-search-big>';
  // create cards row as seen on ryanair
  test += '<specific-card-panel-one></specific-card-panel-one>';
  // 1t + 2span + 1simple
  test += '<specific-card-panel-two></specific-card-panel-two>';
    // 1text + 3 simple
  test += '<specific-card-panel-three></specific-card-panel-three>';


  test += '<checkers></checkers>';
  // main content

  // cards-row





  test += '<cards-row lorem=lorem data-maxsize ="'+col+'"></cards-row>';
  test += '<breadcrumb lorem=lorem></breadcrumb>';
  test += '<article-info-top lorem=lorem></article-info-top>';
  test += '<article-full lorem=lorem></article-full>';
  test += '<article-footer-tabs></article-footer-tabs>';
  test += '<image-tiles></image-tiles>'
  // footer
  test += '<footer-site-map></footer-site-map>';
  test += '<footer-partners></footer-partners>'
  test += '<footer-copyright></footer-copyright>';

  test = container(row(column(12,test)));
  console.log(test);
  let top = '<nav-main bs-links="4"></nav-main>';
  top += test;



  return {
    template: top
  };
}]);
