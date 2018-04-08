<?php
session_start();
if (isset($_POST['submit']))
  {
    include_once 'dbh.inc.php';
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed))
      {
        if($fileError === 0)
            {
              if ($fileSize < 1000000)
                {
                  $fileNameNew = uniqid('', true).".".$fileActualExt;
                  $fileDestination = '../PrototypeImages/'.$fileNameNew;
                  $fileDataBaseLoc = "PrototypeImages\\\\".$fileNameNew;
                  //echo $fileDataBaseLoc;
                  //echo '<br/>';
                  move_uploaded_file($fileTmpName, $fileDestination);
                  $sql = "UPDATE users SET UserCoverPhotoFileLocation='".$fileDataBaseLoc."' WHERE UserId ='".$_SESSION['u_id']."';";
                  mysqli_query($conn, $sql);
                  mysqli_close($conn);
                  header("Location: ../UserAccountPage.php?upload=success");
                } else{
                        echo "Your file is too big. Hit Back!";
                        echo $fileSize;
                        //header("Location: ../UserAccountPage.php?filetoobig=fail");
                        }
            }else {
                   echo "There was an error uploading the file. Hit Back!";
                   //header("Location: ../UserAccountPage.php?erroruploadfile=fail");
                  }
      }else{
            echo "You cannot upload files of this type! Hit Back!";
            //header("Location: ../UserAccountPage.php?cannotuploadfiletype=fail");
            }

  }else{
    header("Location: ../UserAccountPage.php?postempty=fail");
  }

?>
