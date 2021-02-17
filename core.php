
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thanks!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .coreHeading{
            margin: 0 auto;
            margin-top: 300px;
            height: 300px;
            padding-top: 100px;
            color: white;
        }
    </style>
</head>
<body class="badge-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 coreHeading bg-warning">
                <h1 class="text-center">
                    <?php
                    if(!isset($_REQUEST['submit'])){

                    }
                    else{
                        $name=$_REQUEST['name'];
                        $email=$_REQUEST['email'];
                        $subject=$_REQUEST['subject'];
                        $message=$_REQUEST['message'];

                        $servername="localhost";
                        $dbuser="root";
                        $dbpass="";
                        $dbname="m1";

                        $con=mysqli_connect($servername,$dbuser,$dbpass,$dbname);

                        $sql = "INSERT INTO contact_form(Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject', '$message')";
                        $conferm=mysqli_query($con,$sql);
                        mysqli_close($con);


                        // header("Location:index.php");
                        header( "refresh:1;url=index.php");

                        if($con){
                         echo "Your message has been sent. Thank you!";
                     }
                     else{
                         echo "Not connect";
                     };
                 }
                 ?>
                </h1>
                <h1 name="coreHeading1"></h1>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>