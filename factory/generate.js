app.factory('generate', function(){
  // generate bootstrap page

  /*
  first element : navHorizontal or jumbotronMain
  */

  // list of elements used

  const usingElements = {
    mainNav : {
      template : 'templates/mainNav.html',
    }
    mainJumbotron : {
      template : 'templates/mainJumbotron.html',
    }
    sideNav : {
      template : 'templates/sideNav.html',
    }
    jumbotronMain : {
      template : 'templates/sideNav.html',
    }
    mainContent : {
      template : 'templates/mainContent.html',
    }
    contentArticle : {
      template : 'templates/contentArticle',
    }
    footer: {
      template : 'templates/footer.html'
    }
  }



});
