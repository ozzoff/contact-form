<?

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $emailFrom=$_POST["email"];
    $message=$_POST["message"];


    $emailTo="ozzoff20007@gmail.com";

    $headers= "From: ".$emailFrom;
    
    $txt="You have received an e-mail from".$name.".\n\n".$message;




    mail($emailTo,$txt,$headers);

    header("Location: webflow.php?mailsend");
}





?>