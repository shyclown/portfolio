<?php require 'head.html'; ?>

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


<div class="jumbotron image-bg bg-img6 mb-0">
  <div class="container  ">
    <h1 class="display-1 clr-white">Bootstrap</h1>
    <p class="lead clr-white p-2 pb-4 mb-4">Express ample bootstrap example!</p>

    <div class="row justify-content-between pt-4">
      <div class="col-sm-4">
        <div class="cust-card bdr-gray p-4">
        <h3>Book Page!</h3>
        <p>Simple Bootstrap page.</p>
        <a href="squares.php">see more</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="cust-card bdr-gray p-4">
        <h3>Blog Page!</h3>
        <p>Bootstrap example page.</p>
        <a href="blog.php">see more</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="cust-card bdr-gray p-4">
        <h3>Another Page!</h3>
        <p>Bootstrap example page.</p>
        <a href="brutesql.html">see more</a>
      </div>
      </div>
  </div>
  </div>
</div>

<div id="jumbotronSellText" class="jumbotron mb-0">
  <div class="container text-center">
    <h3 class="lead-4 ">You can do something on this page!</h1>
      <p class="lead"> Not much but other 3 pages above have no functionality at all <br> or </p>
      <button class="btn btn-primary">Just do Nothing</button>
  </div>
</div>
  <div class="jumbotron bg-col2">
    <!-- CARDS -->
    <div class="container">

      <div class="row justify-content-between">

        <div class="col-sm-6 col-md-9 pb-4">

                <div class="shadow">
                  <div class="nopadding" id="chatForm">
                    <img src="asset/5.jpg" alt="Responsive image" class="img-fluid"/>
                  </div>
                </div>
        </div>

        <div class="col-sm-6 col-md-3 ">
          <h4>Gallery</h4>
          <p>Few nice images I made.</p>
          <button type="button" class="btn align-self-end" name="button">Visit Gallery</button>
        </div>
      </div>
    </div>
  </div>

  <!-- TEXT -->
  <div class="container mt-4">
      <h3 class="mb-4">{{wordmixer.result}}</h3>
      <p>When you do not know what to draw <button type="button" class="btn" ng-click="wordmixer.generate()" name="button">Generate</button> words!</p>
  </div>



<div class="jumbotron mt-3 bg-col2">
  <!-- CARDS -->
  <div class="container">

    <div class="row">

      <div class="col-sm-6 col-md-9 pb-4 ">
          <div class="row">
            <div class="col-12 pb-2">
              <div class="card">
                <div class="card-block" id="chatRoom">
                  <div ng-repeat="chatline in chat.text | limitTo:-7 track by $index ">{{chatline}}</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-block" id="chatForm">
                  <h5>Chat form</h5>
                  <form>
                    <div class="form-group row">
                      <label for="smFormGroupInput" class="col-md-2 col-form-label col-form-label-md">Psst...</label>
                      <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" ng-model="chatInput" placeholder="your text">
                      </div>
                      <div class="col-md-12 text-right mt-2">
                      <button type="submit" ng-click="addChat()" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="col-sm-6 col-md-3">
        <h4>Psst... Chat room!</h4>
        <p> Simple chatroom</p>

      </div>
    </div>
  </div>
</div>

<!-- TEXT -->
<div class="container mt-4" id="About">
  <div class="row ">
    <div class="col-12 text-center">
      <h3 class="mb-4">About this page.</h3>
      <button type="button" class="btn" name="button">Github</button>
    </div>
  </div>
</div>
<div class="jumbotron mt-3 bg-col2">
<!-- CARDS -->
<div class="container">
  <div class="row">
    <div class="col col-sm-9">

        <div class="row">
          <!-- CARD -->
          <div class="col-sm-6 mb-4" ng-repeat="card in cards">
            <div class="card">
              <div class="card-block">
                <h4>{{card.header}}</h4>
                <p>{{card.content}}</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{card.modal}}">{{card.button}}</button>
              </div>
            </div>
          </div>
        </div>

    </div>
    <div class="col col-sm-3">
      <h4>About me.</h4>
      <p> About bio,
        Bacon ipsum dolor amet bacon picanha andouille pork chop turducken leberkas sirloin frankfurter beef burgdoggen meatloaf. Tongue ball tip ribeye tenderloin flank spare ribs. </p>
      <ul class="nav flex-column">
        <li class="nav-item" ng-repeat="link in cards">
          <a class="nav-link" href="#">{{link.header}}</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

<!-- TEXT -->
<div class="container pb-2">
    <h2>Be Excellent To Each Other!</h2>
</div>



<!-- Main Container -->

<!-- FOOTER -->
<div class="jumbotron mt-3 bg-col1" id="Contacts">
  <div class="container">
    <div class="row justify-content-between ">
      <div class="col-sm-7 p-2">


        <div class="card">
          <div class="card-header">
              Contact Form
            </div>
          <div class="card-block">

            <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleTextarea">Message</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" disabled>Send Message</button>
</form>
          </div>
        </div>
      </div>
      <div class="col-sm-4 p-2 clr-white" >
            <p>
              <b>Adress:</b></br>
              {{contact.firstname}} {{contact.surname}}</br>
              {{contact.adress.street}}</br>
              {{contact.adress.post_number}}
              {{contact.adress.city}}</br>
              {{contact.adress.country}}</br>
            </br>
              <b>Phone:</b></br>
              {{contact.phone}}</br>
              <b>E-mail:</b></br>
              {{contact.email}}</br>
            </p>
      </div>
    </div>
  </div>
</div>

<!-- Modals -->
<div id="AboutMotivation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card">
        <div class="card-header">Motivation</div>
        <div class="card-block">Comming Soon...</div>
      </div>
    </div>
  </div>
</div>
<div id="AboutCV" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card">
        <div class="card-header">Curicullum Vitae</div>
        <div class="card-block">Comming Soon...</div>
      </div>
    </div>
  </div>
</div>
<div id="AboutBlog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="card">
        <div class="card-header">Blog</div>
        <div class="card-block">Comming Soon...</div>
      </div>
    </div>
  </div>
</div>
<div id="AboutGallery" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="card">
        <div class="card-header">Gallery</div>
        <div class="card-block">Comming Soon...</div>
      </div>
    </div>
  </div>
</div>



</div><!--App & mainController -->
<?php include "footer.html"; ?>
