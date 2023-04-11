
 <?php 

    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $phone= $_POST['phone'];
       $Msg = $_POST['text'];

       if(empty($UserName) || empty($Email) || empty($phone) || empty($Msg))
       {
           header('location:index.php?error');
       }
   else
       {
           $to ="jbanerjee855@gmail.com";

           if(mail($to,$UserName,$phone,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>