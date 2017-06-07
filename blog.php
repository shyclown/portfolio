<?php require 'head_squares.html'; ?>

<style>
#toggleBtn{
  display: none;
}
.border-b{
  border-bottom: 1px solid #EAEAEA;
}
.clr-dark{ background-color: #333; color: white; }
@media (max-width: 768px) {
  #sideNav{
    position: absolute;
    z-index: 900;
    background-color: #eaeaea;
    padding: 1rem 2rem 1rem 0rem;

    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.55);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.55);
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.55);
  }
  #toggleBtn{
    line-height: 40px;
    display: block;
  }

}
#mainJumbo{
  background-color: #E91E63; color: white;
}
</style>

<div id="mainJumbo" class="jumbotron">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-1 col-sm-2">
        <img src="asset/xpress.png" class='img' width="64px" alt=""/>
      </div>
      <div class="col-md-11 col-sm-10" >
        <h3 class="lead-3">Blog Page<h3>
      </div>
    </div>

  </div>
</div>

<!-- Top Navigation -->
<div class="container">

<ul class="nav mb-4">
  <li id="toggleBtn" class="nav-item">
    <button  class="btn navbar-toggler" data-toggle="collapse"  data-target="#sideNav">
      <i class="fa fa-bars"></i>
    </button>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Homepage</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="squares.php">Book Page</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="brutesql.html">Another Page</a>
  </li>
</ul>
</div>
<!-- Main Container -->

<div class="container">
  <div class="row">
    <!-- Side Navigation Column-->
    <div class="col-sm-0 col-md-3">
    <nav class="navbar-toggleable-sm">

      <div id="sideNav" class="collapse navbar-collapse">

        <ul>
          <h5>Library</h5>
          <li class="active"><a href="">Data</a>
            <ul>
              <li><a href="">Link</a>
                <ul>
                  <li><a href="">Link</a></li>
                  <li><a href="">Link</a></li>
                </ul>
              </li>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
            </ul>
          </li>
          <li><a href="">Link</a></li>
          <li><a href="">Link</a></li>
          <li><a href="">Link</a>
            <ul>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
              <li><a href="">Link</a></li>
            </ul>
          </li>
          <li><a href="">Link</a></li>
        </ul>
      </div>
    </nav>
    </div>
    <!-- Main Content Column-->
    <div class="col-sm-12 col-md-8">

        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active">Data</li>
        </ol>

        <div class="pt-1">
        <div class="d-flex w-100 justify-content-between border-b pt-2 pb-2">
          by John Smith
          <small class="text muted">28th May 2017</small>
        </div>
        <div class="d-flex w-100 justify-content-between border-b pt-2 pb-2 mb-4">
          <small class="text muted">in Library</small>
          <small class="text muted">
            <i class="fa fa-comment"></i>
            <i class="fa fa-share"></i>
          </small>
        </div>
        </div>

        <h1>Single blog post</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p><p>
Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p><p>
Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p><p>
Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.

Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p><p>

Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>

<!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Author</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Sources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Share</a>
        </li>
      </ul>
<!-- Tab panes -->
      <div class="tab-content">
        <!-- Author -->
        <div class="tab-pane active" id="home" role="tabpanel">
          <div class="pt-4">
          <div class="d-flex w-100 justify-content-between">
            <h5>John Smith</h5>
            <small class="text muted">28th May 2017</small>
          </div>
          <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
          </div>
        </div>
        <!-- Links -->
        <div class="tab-pane" id="profile" role="tabpanel">
          <div class="pt-4">
            <ul>
              <li><a href="">Cras ornare tristique elit.</a></li>
              <li><a href="">Vivamus vestibulum nulla nec ante.</a></li>
              <li><a href="">Praesent placerat risus quis eros.</a></li>
              <li><a href="">Fusce pellentesque suscipit nibh.</a></li>
            </ul>
          </div>
        </div>
        <!-- Comments -->
        <div class="tab-pane" id="messages" role="tabpanel">
          <div class="media p-4">
  <img class="d-flex mr-3" src="asset/64def.svg" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

    <div class="media mt-3">
      <a class="d-flex pr-3" href="#">
        <img src="asset/64def.svg" alt="Generic placeholder image">
      </a>
      <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  </div>
</div>
        </div>
        <!-- Share -->
        <div class="tab-pane" id="settings" role="tabpanel">
          <div class="pt-4">
            <ul>
              <li><a href="">Cras ornare tristique elit.</a></li>
              <li><a href="">Vivamus vestibulum nulla nec ante.</a></li>
              <li><a href="">Praesent placerat risus quis eros.</a></li>
              <li><a href="">Fusce pellentesque suscipit nibh.</a></li>
            </ul>
          </div>
        </div>
      </div>
          <div class="card mt-4 mb-4 text-center p-4">
            <h4>Subscribe</h4>
          </div>
    </div>


  </div>
</div>
<!-- End Main Container -->

<!-- Jumbotron -->
<div class="jumbotron mb-0">
  <div class="container">
    <div class="row">
      <!-- CARD -->
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
      <!-- CARD -->
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
      <!-- CARD -->
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div id="footerJumbotron"  class="jumbotron clr-dark">
  <div class="container text-center">
    <div class=" lead mb-4">"It's not about the fight, it's about family!"</div>
    <button type="button" class="btn btn-primary" name="button">Subscribe for more!</button>
  </div>
    </div>
  </div>
</div>



<?php require 'footer.html'; ?>
