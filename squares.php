<?php require 'head_squares.html'; ?>




<div ng-app="app" ng-controller="mainController">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-brand">
        <img src="asset/xpress.png" height="48px" alt="">
        Bootstrap
      </div>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active" ng-repeat="link in topLinks">
            <a class="nav-link" href="{{link.href}}">{{link.name}} <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
  </nav>

<div class="jumbotron mb-3 bg-clr-1 clr-white">
    <!-- CARDS -->
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 text-center">
          <h2 class="mb-4">Credibly reintermediate backend ideas for cross-platform models.</h2>
          <p class="lead">
          Synergistically evolve 2.0 technologies rather than just in time initiatives. <br>
          Quickly deploy strategic networks with compelling e-business. <br> Credibly pontificate highly efficient manufactured products and enabled data.
        </p>
          <button type="button" name="button" class="btn btn-primary">See Different Page</button>
          <button type="button" name="button" class="btn btn-secondary">See Contacts</button>
        </div>
      </div>
    </div>
</div>

<div class="container">
<h1 class="display-4 mt-4">About something Interesting</h1>
<p class="lead mt-4 mb-4">
The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled.
</p>



<div class="row mb-4">
  <div class="bg-clr-gray col-12 p-4">
    <form>
      <div class="row">
        <div class="col-sm-9 col-md-10">
          <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0"  placeholder="Search">
        </div>
        <div class="col-sm-3 col-md-2 text-right">
            <button type="submit" class="btn btn-primary pull-right">Search</button>
        </div>
      </div>
    </form>
  </div>
</div>

<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="">Previous</a></li>
    <li class="page-item"><a class="page-link" href="">1</a></li>
    <li class="page-item"><a class="page-link" href="">2</a></li>
    <li class="page-item"><a class="page-link" href="">3</a></li>
    <li class="page-item"><a class="page-link" href="">Next</a></li>
  </ul>
</nav>

<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-4" ng-repeat="data in squares.cards | orderBy:'-price'  track by $index">
      <div class="card mb-4">
      <img class="card-img-top" src="asset/squares/{{data.image}}.jpg" alt="Card image cap">
      <div class="card-block">
         <h3 class="card-title">{{data.name}}</h3>
        <p class="card-text ">
        {{data.content}}
        </p>
        <div>liked by {{data.likes}}</div>

      </div>
      <button class=" btn btn-primary text-right  clr-white ">prices from <b>{{data.price}} $</b></button>
      <div class="card-footer text-muted">
   by {{data.author}}
 </div>
 </div>
</div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="">Previous</a></li>
    <li class="page-item"><a class="page-link" href="">1</a></li>
    <li class="page-item"><a class="page-link" href="">2</a></li>
    <li class="page-item"><a class="page-link" href="">3</a></li>
    <li class="page-item"><a class="page-link" href="">Next</a></li>
  </ul>
</nav>

</div><!-- container -->

<div class="jumbotron clear-marg mt-4">
<!-- CARDS -->
<div class="container">
  <div class="row">
    <div class="col col-sm-12 text-center">
      <h1>Quickly deploy</h1>
      <p>
      Synergistically evolve 2.0 technologies rather than just in time initiatives. <br>
      Quickly deploy strategic networks with compelling e-business. <br> Credibly pontificate highly efficient manufactured products and enabled data.
    </p>
      <button type="button" name="button" class="btn btn-primary">Learn More</button>
    </div>
  </div>
</div>
</div>

<div class="jumbotron bg-clr-1 clear-marg">
<!-- CARDS -->
<div class="container">
  <div class="row">
    <div class="col col-sm-6 clr-white brdr-gray-b p-4">
      <h5>About</h5>
      <p class="clr-gray">
      Synergistically evolve 2.0 technologies rather than just in time initiatives. <br>
      Quickly deploy strategic networks with compelling e-business. <br> Credibly pontificate highly efficient manufactured products and enabled data.
      </p>
      <button type="button" name="button" class="btn btn-primary">Learn More</button>
    </div>
    <div class="col col-sm-6 clr-white brdr-gray-b p-4">
      <h5>Social Links</h5>
      <ul class="clr-gray custom-ul">
        <li>Tweet us on Twitter</li>
        <li>Like us on Facebook</li>
        <li>Fork us on Github</li>
    </ul>

    </div>
  </div>
  <div class="row">
    <div class="col col-sm-6 clr-white brdr-gray-b p-4">
      <h5>Recent Reviews</h5>
      <ul class="clr-gray custom-ul mb-4">
        <li>Credibly reintermediate backend ideas</li>
        <li>Dynamically target high-payoff intellectual capital for customized technologies.</li>
        <li>Quickly deploy strategic networks with compelling e-business.</li>
    </ul>
      <button type="button" name="button" class="btn btn-primary pull-right">Read More</button>
    </div>
    <div class="col col-sm-6  clr-white brdr-gray-b p-4">
      <h5>Address</h5>
      <p class="clr-gray">
        Roman Moravcik<br>
  Ipelska 5<br>
  82107 Bratislava<br>
  Slovak Republic<br><br>

  Phone:
  0911-761-474<br>
  E-mail:
  roman.moravcik1@gmail.com
      </p>

    </div>
  </div>
  <div class="row">
    <div class="col col-sm-6 clr-white brdr-gray p-4">
      <h5>Recent Posts</h5>
      <p class="clr-gray">
      Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.
      </p>
    </div>
    <div class="col col-sm-6  clr-white brdr-gray p-4">
      <h5>Subscribe</h5>
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary pull-right ">Subscribe</button>
</form>
    </div>
  </div>
</div>
</div>
</div>
<?php require 'footer.html'; ?>
