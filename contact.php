<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome to aDiscuss - Heaven for Programmers</title>
</head>

<body>
    <?php include 'partial/_dbconnect.php';?>
    <?php include 'partial/_header.php';?>
    <div class="container-fluid pt-5 pb-5" id="contact">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact Us </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="username" placeholder="Your full name"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="tel" class="form-control" name="contact" placeholder="Your Conttact No"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="userEmail" placeholder="Email adress"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label>Select your QUery Type</label><br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox1" name="choice[]"
                                    value="Default">
                                <label class="custom-control-label" for="customchekbox1">Default</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox2" name="choice[]"
                                    value="Web Development">
                                <label class="custom-control-label" for="customchekbox2">Web Development</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox3" name="choice[]"
                                    value="Java Programming">
                                <label class="custom-control-label" for="customchekbox3">Java Programming
                                </label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox4" name="choice[]"
                                    value="Web Programming with Python">
                                <label class="custom-control-label" for="customchekbox4">Web Programming with
                                    Python</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customchekbox5" name="choice[]"
                                    value="Back-End Development with Php">
                                <label class="custom-control-label" for="customchekbox5">Back-End Development with
                                    Php</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Eleborate Your Concern</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $userEmail = $_POST['userEmail'];
    $choice = $_POST['choice'];
    $message = $_POST['msg'];


    $chc = "";

    foreach($choice as $chc1){
        $chc.= $chc1.",";
    }

    $insertQuery = " insert into  contact (username,email,mobile,choice,message) values ('$username', '$contact', '$userEmail', '$chc', '$message')";
    
    $query = mysqli_query($conn, $insertQuery);

    if($query){
        ?>

    <script type="text/javascript">
    alert("Form has been submitted");
    </script>
    <?php
    }else{
        ?>

    <script type="text/javascript">
    alert("Failed to Submit the form");
    </script>


    <?php
    }


}

?>


    <?php include 'partial/_footer.php';?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>