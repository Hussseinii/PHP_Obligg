<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Post Area</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  </head>

  <body>

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
            <li><a href="#">Dashboard</a></li>
            <li class="active"><a href="pages.php">Pages</a></li>
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

      <header id="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-10">
                      <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <small>Mange Site Pages</small></h1>
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
                  <li><a href="admin.php">Dashboard</a></li>
                  <li class="active"> Pages</li>
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
                    
                    <!--Registering form for partispants-->
                
                    <div class="col-md-9">
                     <div class="panel panel-default">
                         <!-- registering overview's -->
                        <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Registrering Øverl</h3>
                            </div>
                            <div class="panael-body">
                            <br>    
                        <div class="row">
                        <div class="col-lg-9">
                            <form class="form-horizontal" action="" method="POST">
                                <div class="form-group">
                                  <label for="fnavn" class="col-sm-2 control-label">Fornavn</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="fnavn" name="fornavn" placeholder="Fornavn">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="enavn" class="col-sm-2 control-label">Etternavn</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="enavn" name="etternavn" placeholder="Etternavn">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="nation" class="col-sm-2 control-label">Nationality</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="nation" name="nationality" placeholder="Nasjonalitet">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="idsted" class="col-sm-2 control-label">Sted</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="idsted" name="sted" placeholder="Sted">
                                  </div>
                                </div>
                                  <div class="form-group">
                                  <label for="idtid" class="col-sm-2 control-label">Dato/Tid</label>
                                  <div class="col-md-6">
                                      <input type="text"  dat-format="Y-m-d H:i" class="form-control" id="idtid" name="datoogtid" placeholder="Tid Og Dato">
                                     
                                  </div>
                                </div>
                                  <div class="form-group">
                                  <label for="idage" class="col-sm-2 control-label">Alder</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="idage" name="alder" placeholder="Alder">
                                  </div>
                                </div>
                                  <div class="form-group">
                                  <label for="idtype" class="col-sm-2 control-label">Type</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="idtype" name="type" placeholder="Type overesle">
                                  </div>
                                </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit"  name="regutover" class="btn btn-primary">Reg Øverer</button>
                                </div>
                              </div>
                           </form>
                        </div>
                         </div>
                            
                       </div>
                        </div>  
                        
                    </div>
                    <?php
                      if(isset($_REQUEST["regutover"])){
                        //utøver opplsninger
                        $fornavn = $_REQUEST["fornavn"];
                        $etternavn = $_REQUEST["etternavn"];
                        $nationality = $_REQUEST["nationality"];
                         $aldre = $_REQUEST["alder"];

                        //overesle opplsninger
                        $stedbarn = $_REQUEST["sted"];
                        $datoogtid = date("Y-m-d H:i");
                        $type = $_REQUEST["type"];
                          
                          
                          
                        $dbconn = new mysqli("localhost","root","","skiVm");
                        if($dbconn->connect_error){
                            die("kunne ikke kyntte til databasen kino".$dbconn->connect_error);
                        }


                        $dbconn->autocommit(false);//turn off the auto commit "This helps to stop injections to the data base before all is ok"

                        $sql = "Insert into utover(Fornavn, Etternavn, Nationality, Aldre)";
                        $sql .= "Values('$fornavn','$etternavn','$nationality','$aldre')";
                        $dbconnOKResultat = $dbconn->query($sql);

                         $dbconnOK = true;
                        //echo "$sql";//test på sql
                        if(!$dbconnOKResultat){
                            $dbconnOK = false;
                        }            
                        else
                        {
                           if($dbconn->affected_rows==0){//check if the values have been add to the table CHECK THE AFFECTED ROWS
                                  trigger_error($dbconn->error);
                                 $dbconnOK = false;

                             }                
                             else
                             {
                                 $idDb = $dbconn->insert_id; 
                             }
                        }                
                        $sql = "Insert into ovels(UtoverId, DatoTid, Type, Sted)";
                        $sql .= "Values ($idDb,'$datoogtid', '$type', '$stedbarn')";
                           // echo "$sql";
                         $dbconnOKResultat = $dbconn->query($sql);
                         if(!$dbconnOKResultat){
                               trigger_error($dbconn->error);
                           $dbconnOK = false;
                        }           
                        else
                        {
                             if($dbconn->affected_rows==0){// this will test if the rows have gotten any injections
                                 trigger_error($dbconn->error);
                                $dbconnOK = false;// puting it to fasle means all did not go well
                            }
                        }
                        if($dbconnOK){
                            $dbconn->commit();
                            echo "Registreringen i database Kino gikk ok!";
                        }
                        else
                        {
                            $dbconn->rollback();
                            echo "Registreringen i database Kino gikk ikke bra!";
                        }

                     $dbconn->close(); 

                      }
                    ?>
                    <!--End of pastispants-->
                    <div class="col-md-9">
                     <div class="panel panel-default">
                         <!-- Pages overview's -->
                        <div class="panel-heading main-color-bg">
                          <h3 class="panel-title">Pages</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" placeholder="Filter Pages...."/>
                            </div>
                        </div>
                         <br>
                         <table class="table table-striped table-hover table-bordered">
                             <tr>
                                 <td>Title</td>
                                 <td>Published</td>
                                 <td>created</td>
                                 <td></td>
                             </tr>
                             <tr>
                                 <td>Home</td>
                                 <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                 <td>Dec 12, 2016</td>
                                 <td><a class="btn btn-primary" href="edit.php">Edit</a>  <a class="btn btn-danger" href="#"> Delete</a></td>
                             </tr>
                             <tr>
                                 <td>About</td>
                                 <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                 <td>Dec 13, 2016</td>
                                 <td><a class="btn btn-primary" href="edit.php">Edit</a>  <a class="btn btn-danger" href="#"> Delete</a></td>
                             </tr>
                               <tr>
                                 <td>Services</td>
                                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                                 <td>Dec 13, 2016</td>
                                 <td><a class="btn btn-primary" href="edit.php">Edit</a>  <a class="btn btn-danger" href="#"> Delete</a></td>
                             </tr>
                               <tr>
                                 <td>Contacts</td>
                                 <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                 <td>Dec 14, 2016</td>
                                 <td><a class="btn btn-primary" href="edit.php">Edit</a>  <a class="btn btn-danger" href="#"> Delete</a></td>
                             </tr>
                         </table>
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
      
  </body>   
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  

