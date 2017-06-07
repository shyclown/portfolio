app.directive('bootstrapPage', function() {

  // generate template
  function getRandomArbitrary(min, max) { return Math.ceil(Math.random() * (max - min + 1)) + min; }

  let pageOrder = [];

  //BUILD

  // create parts
  // requires button in jumbotron
  let reqAltToggler = false;


  let col = getRandomArbitrary(2, 4);
  let test = '<nav-main bs-links="4"></nav-main>';
  test += '<jumbotron-main lorem=lorem bs-toggle='+true+'></jumbotron-main>';
  test += '<checkers></checkers>'
  test += '<cards-row lorem=lorem data-maxsize ="'+col+'"></cards-row>';
  test += '<breadcrumb lorem=lorem></breadcrumb>';
  test += '<article-info-top lorem=lorem></article-info-top>';
  test += '<article-full lorem=lorem></article-full>';
  test += '<article-footer-tabs></article-footer-tabs>';

  test += '<footer-site-map></footer-site-map>';
  test += '<footer-partners></footer-partners>'
  test += '<footer-copyright></footer-copyright>';




  return {
    template: test
  };
});
