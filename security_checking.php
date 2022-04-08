<?php
// Current Path
echo "Current File Path :&nbsp;".$_SERVER['SCRIPT_FILENAME'];
// Remove File
if(isset($_POST['file']))
{
  if(file_exists($_POST['file_name']))
  {
    unlink($_POST['file_name']);
    $msg = "Thankyou, Your Delete Request Has Been Successfully Done"; 
  } 
  else
  { 
    $msg = "Your Path is Invalid, Please Enter Valid Path";
  } 
 
}

// Remove Folder
if(isset($_POST['folder']))
{
   delete_dir($_POST['folder_name']);
 
}

function delete_dir($src) { 
    $dir = opendir($src);
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                delete_dir($src . '/' . $file); 
                $msg = "Thankyou, Your Delete Request Has Been Successfully Done"; 
            } 
            else { 
                unlink($src . '/' . $file);
                $msg = "Thankyou, Your Delete Request Has Been Successfully Done"; 
            } 
        }
        else
        {
           $msg = "Your Path is Invalid, Please Enter Valid Path";
        }
    } 
    closedir($dir); 
    rmdir($src);

}

?>
<!doctype html> <html lang="en"> <head> 
  <!-- Required meta tags --> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <title>Security</title> 
</head> 
<body> 
  <div class="container col-md-4 mt-5"> 
    <div class="row"> 
      <div class="col-md-12"> 
        <div class="card"> 
          <div class="card-header"> 
            <h5 class="card-title">Security for All Project</h5> </div> 
            <div class="card-body"> 
              <div class="row"> 
                <div class="col-md-12"> 
                  <form method="POST" action=""> 
                     <p>
                       <?php
                        if (isset($msg)) {
                          echo $msg;
                        }
                       ?>
                     </p> 
                     <h4>Remove Folder</h4>
                       <label>Folder Name*
                         <input type="text" name="folder_name" id="folder_name" class="form-control" required placeholder="security.php">
                         
                        </label>
                        <label>
                         <input type="submit" name="folder" id="folder" class="btn btn-success">
                        </label>
                      </form>
                        <form method="POST" action=""> 
                       <p>
                         <?php
                          if (isset($msg)) {
                            echo $msg;
                          }
                         ?>
                       </p> 
                       <h4>Remove File</h4>
                         <label>File Name*
                           <input type="text" name="file_name" id="file_name" class="form-control" required placeholder="OOP_CLASS/security.php">
                           
                          </label>
                          <label>
                           <input type="submit" name="file" id="file" class="btn btn-success">
                          </label>
                        </form>
                       </div> 
                     </div> 
                   </div> 
                 </div> 
               </div> 
             </div> 
           </div> 
           <!-- jQuery library --> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
           <!-- Optional JavaScript --> 
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
         </body>
      </html>