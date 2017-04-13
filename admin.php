<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  </head>

<!-------    Start av nav bar--------->
    <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">VM SKI ADMIN</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="admin.php">Dashboard</a></li>
            <li><a href="pages.php">Pages</a></li>
            <li><a href="posts.php">Posts</a></li>
             <li><a href="users.php">Users</a></li>
          </ul>
             <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">WELLCOME, BRAD</a></li>
            <li><a href="loginSide.php">LoggUt</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!--    End of nav bar-->
      <header id="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-10">
                      <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Mange Tour Site</small></h1>
                  </div>
                  <div class="col-md-2">
                      <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Create Content
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                          <li><a href="#">Add Post</a></li>
                          <li><a href="#">Add user</a></li>
                        </ul>
                      </div>
                  </div>              
              </div>
          </div>
      </header><!--End of Header-->
      
      <section id="breadcrumb"><!--Start of the first section right under the navbar-->
          <div class="container">
              <ol class="breadcrumb">
                  <li class="active">Dashboard</li>
              </ol>
          </div>
      </section><!-- End of the first section-->
      
      <!-- Start of the Main body with a section html5 section-->
      
      <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                      <!--List group from bootstrap-->
                        <div class="list-group">
                            <a href="admin.php" class="list-group-item active main-color-bg">
                             <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                            </a>
                            <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">30</span></a>
                            <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">90</span></a>
                            <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">150</span></a> 
                        </div>
                      <!--Progress bar for list group-->
                      <div class="well">
                             <h4> Disk Space Used</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              60%
                            </div>
                        </div>
                        <h4>Bandwidth used</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                              40%
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-9">
                     <div class="panel panel-default">
                         <!-- WEbsite overview -->
                        <div class="panel-heading main-color-bg">
                          <h3 class="panel-title">Website Overview</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 60</h3>
                                    <h4>Users</h4>
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="well dash-box">
                                    <h3><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 30</h3>
                                    <h4>Pages</h4>
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 30</h2>
                                    <h4>Posts</h4>
                                </div>
                            </div>
                              <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 230</h2>
                                    <h4>Visitors</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!--Panal for the table of usere-->
                       <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                          <h3 class="panel-title">Latest Users</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover" border="1">
                                <tr class="main-tr-color-bg">
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Joined</td>
                                </tr>
                                <tr>
                                    <td>Jill smith</td>
                                    <td>jillsmith@gmail.com</td>
                                    <td>Dec 12, 2016</td>
                                </tr>
                                  <tr>
                                    <td>Lunga majola</td>
                                    <td>lungamajola@gmail.com</td>
                                    <td>Jan 30, 1990</td>
                                </tr>
                                  <tr>
                                    <td>Anette Martinsen</td>
                                    <td>anettemartinden@mail.com</td>
                                    <td>March 3, 2013</td>
                                </tr>
                                  <tr>
                                    <td>Marie Thembiso</td>
                                    <td>mariethembiso@hotmail.com</td>
                                    <td>March 22, 2014</td>
                                </tr>
                            </table>
                        </div>
                      </div> 
                   </div>
                </div>
              
            </div>
      </section>
      
      <footer id="footer">
          <p>Copyright Admin VM, &COPY; 2017</p>
      </footer>
      
      <!-- Modals -->
      
      <!-- Add page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label>Page Tittle </label>
                    <input type="text" class="form-control" placeholder="Page Tittle"/>
                </div>
                <div class="form-group">
                    <label>Page Body</label>
                    <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"/> Published
                    </label>
                </div>
                <div class="form-group">
                    <label>Meta Tags</label>
                    <input type="text" class="form-control" placeholder="Add Some Tags....."/>
                </div>
                <div class="form-group">
                    <label>Meat Description</label>
                    <input type="text" class="form-control" placeholder="Add Meta Description"/>
                </div>
               </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>   
            </div>
        </div>
    </div>
      
     
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  

