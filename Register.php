<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Registerer</title>
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
          <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
         
    </head>
    <body>
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
              <li><a href="admin.php">Dashboard</a></li>
            <li class="active"><a href="pages.php">Pages</a></li>
           <!--<li><a href="posts.php">Posts</a></li>
             <li><a href="users.php">Users</a></li>--> 
          </ul>
             <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Guest side</a></li>
            <li><a href="loginSide.php">LoggInn</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <!-- End av nav-->
        <section id="breadcrumb" class="padding-top-10 dash-box"><!--Start of the first section right under the navbar-->
          <div class="container">
              <ol class="breadcrumb">
                  <li class="active">Her kan mann bestiller billet</li>
              </ol>
          </div>
      </section><!-- End of the first section-->
        
        <div class="container padding-top-10">
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    Registration form
                </div>
                <div class="panel-body">
                    <form action="" role="form" method="POST" name="regskjema">
                          <div class="row padding-top-10">
                            <div class="col-md-6">
                               <label for="fnavn" class="control-label padding-top-10">Fornavn:</label>
                            </div>
                             <div class="col-md-6">
                              <label for="enavn" class="control-label padding-top-10">Etternavn:</label>
                            </div>
                        </div>
                        
                        <div class="row padding-top-10">
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="fnavn" name="fornavn" onchange="valider_fornavn()" placeholder="fornavn"/>
                                <div id="fnavnfeil">*</div>
                            </div>
                             <div class="col-md-6">
                                 <input type="text" class="form-control padding-top-10" id="enavn" name="etternavn" onchange="valider_etternavn" placeholder="Etternavn"/>
                                 <div id="enavnfeil">*</div>
                            </div>
                        </div>
                        <label for="adress" class="control-label padding-top-10">Address:</label>
                        <div class="row padding-top-10">
                            <div class="col-md-12">
                                <input type="text" class="form-control padding-top-10" id="adress" name="address" placeholder="Adress"/>
                            </div>
                        </div>
                         <div class="row padding-top-10">
                            <div class="col-md-6">
                                <label for="postnr" class="control-label">Post Nummer:</label>
                            </div>
                            <div class="col-md-6">
                                 <label for="poststed" class="control-label">Poststed:</label>
                            </div>
                        </div>
                        <div class="row padding-top-10">
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="postnr" name="postnr" placeholder="Post Nummer"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="poststed" name="poststed" placeholder="Poststed"/>
                            </div>
                        </div>
                          <div class="row padding-top-10">
                            <div class="col-md-6">
                               <label for="telefonnr" class="control-label padding-top-10">Telefon Nummer:</label>
                            </div>
                             <div class="col-md-6">
                              <label for="idtype" class="control-label padding-top-10">Type:</label>
                            </div>
                        </div>
                       
                        <div class="row padding-top-10">
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="telefonnr" name="telefonnr" placeholder="Telefon Nummer"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="idtype"  name="type" placeholder="Type"/>
                            </div>
                        </div>
                           <div class="row padding-top-10">
                            <div class="col-md-6">
                                <label for="idsted" class="control-label">Sted:</label>
                            </div>
                            <div class="col-md-6">
                                 <label for="idantall" class="control-label">Antall billet:</label>
                            </div>
                        </div>
                          <div class="row padding-top-10">
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="idsted"  name="sted" placeholder="Sted"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control padding-top-10" id="idtype" name="antall" placeholder="Antall"/>
                            </div>
                        </div>
                        <div class="row padding-top-10">
                            <div class="col-md-6">
                                <button type="submit" name="regbillet" class="btn btn-primary" id="regbill">Reg Billet</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <?php
       if(isset($_POST["regbillet"])){
           
           //personopplisninger
           $fnavn = $_REQUEST["fornavn"];
           $enavn = $_REQUEST["etternavn"];
           $adress = $_REQUEST["address"];
           $postnr = $_REQUEST["postnr"];
           $poststed = $_REQUEST["poststed"];
           $telefonnr = $_REQUEST["telefonnr"];
           
           //billet opplsninger
           $type = $_REQUEST["type"];
           $antall = $_REQUEST["antall"];
           $sted = $_REQUEST["sted"];
           $dato = date("Y-m-d H:i");
           
           
            $dbconn = new mysqli("localhost","root","","skiVm");
            if($dbconn->connect_error){
                die("kunne ikke kyntte til databasen kino".$dbconn->connect_error);
            }

           
            $dbconn->autocommit(false);//turn off the auto commit "This helps to stop injections to the data base before all is ok"
           
            $sql = "Insert into person(Fornavn, Etternavn, Adress, Postnr, Poststed, Telefonnr)";
            $sql .= "Values('$fnavn','$enavn','$adress','$postnr','$poststed','$telefonnr')";
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
            $sql = "Insert into billettype(PersonId, Type, Sted, Antall, Dato)";
            $sql .= "Values ($idDb,'$type', '$sted', '$antall', '$dato')";
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
    </body>
      <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
