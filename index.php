<?php
session_start();
    include("../student/navbar.html");
    include("../student/connection/index.php");
?>
<html>
    <head>
        <title>STUDENT REGISTRATION SYSTEM</title>
    </head>
    <body>
        <div class="container">
                <p class='pt-5 text-center font-weight-bold h4 pb-2'>Online Registration</p>
            <div class="row">
                <div class="col">
                    <div class="col p-3 bg-white col shadow-lg">
                        <p class='h5 m-3'>NOTICE</p><hr>
                        <marquee direction="up" >
                            <p class='text-danger p-2 text-justify'>Eligibility Numbers List for Academic Year : 2020-2021</p>
                            <p class='text-danger p-2 text-justify'>Senior & Junior College Scholarship Notices 2020-21 for Students</p>
                            <p class='p-2 text-justify'>List of Pending Scholarship Student -Academic Year 2019-20 Rajashree Chatrapati Shahu Maharaj Shikshan Shulka Yojna Senior College</p>
                            <p class='text-danger p-2 text-justify'>Academic Year 2018-19 NT, OBC & SBC PFMS Pending List</p>
                        </marquee>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded col-10 p-1 rounded text-black shadow-lg" >
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Student Login</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Institute Login</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- student login form -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <form action="#" method="post" >
                                    <div class="col mt-2">
                                        <div class="col-md-8 pt-3">
                                            <label for="username"><i class="fas fa-user"></i> USERNAME </label>
                                        </div>
                                        <div class="col pt-3">
                                            <input type="text" name="username" id="username" class="form-control" placeholder='Student User ID'>
                                        </div>
                                    </div>
                                    <div class="col pt-3">
                                        <div class="col-md-8">
                                            <label for="password"><i class="fas fa-unlock-alt"></i> PASSWORD </label>
                                        </div>
                                        <div class="col pt-3">
                                            <input type="password" name="password" id="password" class="form-control" placeholder='Password'>
                                        </div>
                                    </div>
                                    <div class="form-check ml-4 pt-3">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="col pt-3">
                                        <a href="register.php"><p class="text-right">Create Account</p></a>
                                    </div>
                                    <div class="col">
                                        <input type="submit" value="LOGIN"  name="submit" class=" btn btn-primary">
                                        <input type="reset" value="RESET" class="btn btn-danger">
                                    </div> 
                                </form>
                            </div>
                            <!-- institute login form -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <form action="#" method="post" >
                                    <div class="col mt-2">
                                        <div class="col-md-8 pt-3">
                                            <label for="username"><i class="fas fa-user"></i> USERNAME </label>
                                        </div>
                                        <div class="col pt-3">
                                            <input type="text" name="username" id="username" class="form-control" placeholder='Institute User ID'>
                                        </div>
                                    </div>
                                    <div class="col pt-3">
                                        <div class="col-md-8">
                                            <label for="password"><i class="fas fa-unlock-alt"></i> PASSWORD </label>
                                        </div>
                                        <div class="col pt-3">
                                            <input type="password" name="password" id="password" class="form-control" placeholder='Password'>
                                        </div>
                                    </div>
                                    <div class="form-check ml-4 pt-3">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="col pt-3">
                                        <a href="#"><p class="text-right">forgot password</p></a>
                                    </div>
                                    <div class="col">
                                        <input type="submit" value="LOGIN"  name="institute" class=" btn btn-primary">
                                        <input type="reset" value="RESET" class="btn btn-danger">
                                    </div> 
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../medical/javascript/sweet.js"></script>
</html>
<?php
if(isset($_POST['submit'])){
    $u=$_POST['username'];
    $p=$_POST['password'];

    if(!$conn){
        die("An error occured...");
    }else{
        $sql = "SELECT * FROM user WHERE uname='".$u."' AND pass ='".$p."'";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        if($result){
            if(mysqli_num_rows($result)<=0){
                echo "<script>swal('User Name or Password is Incorrect');</script>";
            }
        }
        $new = mysqli_num_rows($result);
        if($new==1){
            $_SESSION['username'] = $u;
            echo "<script> location.href='http://127.0.0.1/student/homepage.php'</script>";
        }
    }
}
if(isset($_POST['institute'])){
    $u=$_POST['username'];
    $p=$_POST['password'];

    if(!$conn){
        die("An error occured...");
    }else{
        $sql = "SELECT * FROM i_id WHERE uname='".$u."' AND password ='".$p."'";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
        if($result){
            if(mysqli_num_rows($result)<=0){
                echo "<script>swal('User Name or Password is Incorrect');</script>";
            }
        }
        $new = mysqli_num_rows($result);
        if($new==1){
            session_unset();
            session_destroy();
            $_SESSION['username'] = $u;
            echo "<script> location.href='http://127.0.0.1/student/home/index.php'</script>";
        }
    }
}
?>  