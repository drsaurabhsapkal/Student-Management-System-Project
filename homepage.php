<?php
session_start(); 
include('../student/navbar.html');
include('../student/connection/index.php');                                        
    $sql = "SELECT * FROM user WHERE uname='{$_SESSION['username']}'";
    $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){
                $e = "{$row['email']}";
                $m = "{$row['mobile']}";
                $a = "{$row['address']}";
            }
        }                                           
?> 

<html>
    <body>
        <div class="row no-gutters">
            <div class="col-2 bg-white" style='border:1px solid #008080; height:39rem;'>
                <!-- active button -->
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link p-3 h6" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home"></i> Home </a>
                    <a class="nav-link p-3  h6" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a class="nav-link p-3  h6" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="far fa-calendar-alt"></i> Student </a>
                    <a class="nav-link p-3  h6" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-th-large"></i> Student Details</a>
                </div>
            </div>
            <div class="col-10">
                <!-- toggle data -->
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- home -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class=" mt-5 row justify-content-center" style='img'>
                                <img src="http://127.0.0.1/student/img/icons/Student-Management-System-Guide-min.png" class='img-fluid img-thumbnail' alt="Responsive image">
                            </div>
                    </div>
                    <!-- dashboard -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <!-- first card -->
                        <p class='text-center h3 p-3'>TOP RANKED STUDENTS</p>
                        <div class="row">
                            <div class="col-sm-5 ml-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                        <img src="http://127.0.0.1/student/img/icons/images.bmp" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Samir Shaha</h5>
                                            <p class="card-text">99.20%</p>
                                            <p class="card-text"><small class="text-muted">FYBCA 2021</small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                            <img src="http://127.0.0.1/student/img/icons/images.bmp" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Rahul Trevedi</h5>
                                                <p class="card-text">98.47%</p>
                                                <p class="card-text"><small class="text-muted">SYBCA 2021</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 ml-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                            <img src="http://127.0.0.1/student/img/icons/images.bmp" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Sara Solankhi</h5>
                                                <p class="card-text">97.20%</p>
                                                <p class="card-text"><small class="text-muted">SYBCA 2021</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-2">
                                <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                            <img src="http://127.0.0.1/student/img/icons/images.bmp" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Priya Salunkhe</h5>
                                                <p class="card-text">99.40%</p>
                                                <p class="card-text"><small class="text-muted">TYBCA 2021</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- patient -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <form action='#' method='post' enctype="multipart/form-data">
                            <div class="col">
                                <div class="col-10 ml-5">
                                    <h4>Fill Form</h4>
                                    <hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">
                                    <p class='h4'>Personal Details</p>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name='fname' placeholder="Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" name='mname' placeholder="Middle Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name='lname' placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mother Name</label>
                                            <input type="text" class="form-control" name='moname' placeholder="Mother Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name='bdate'>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>E-Mail ID</label>
                                            <input type="text" class="form-control" value='<?php echo "$e"; ?>'disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" value='<?php echo "$m"; ?>'disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Domicile State</label>
                                            <select name='dsate' class="form-control">
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 custom-file ml-1">
                                            <input type="file" class="custom-file-input" name='img' id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose Photo</label>
                                        </div>
                                        <div class="form-group col-md-3 offset-md-1">
                                            <input type="radio" name="gender" value="male" checked>
                                            <label class="form-check-label"> Male </label>
                                            <input type="radio" name="gender" value="female">
                                            <label class="form-check-label"> Female </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Address line 1</label>
                                            <input type="text" class="form-control" value='<?php echo "$a"; ?>'disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Address line 2</label>
                                            <input type="text" class="form-control" name='a2' placeholder="Last Name">
                                        </div>
                                        <div class="form-row ml-1">
                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" name='city'>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>State</label>
                                            <select name='state1' class="form-control">
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 mt-1">
                                            <labe>PIN</label>
                                            <input type="number" class="form-control" name='pin'>
                                        </div>
                                        <hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">
                                        <p class='h4 w-100'>Educational Details</p><br><br>

                                        <div class="form-group col-md-6">
                                            <label>Class</label>
                                            <select name='class' class="form-control">
                                                <option value="10th">10th</option>
                                                <option value="11th">11th</option>
                                                <option value="12th">12th</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Faculty</label>
                                            <select name='faculty' class="form-control">
                                                <option value="Science ">Science</option>
                                                <option value="Commerce ">Commerce </option>
                                                <option value="Arts">Arts</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Obtained Marks</label>
                                            <input type="text" class="form-control" name='omark'>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Total Marks</label>
                                            <input type="text" class="form-control" name='tmark'>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Percentage/Grade</label>
                                            <input type="text" class="form-control" name='pmark'>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last College Name</label>
                                            <input type="text" class="form-control" name='lcname' placeholder="Last College Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Universtiy/Board Name</label>
                                            <input type="text" class="form-control" name='uname' placeholder="Universtiy/Board Name">
                                        </div>
                                        <hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">
                                        <p class='h4 w-100'>Course</p><br><br>
                                        <div class="form-group col-md-6">
                                            <label>Faculty</label>
                                            <select name='nfaculty' class="form-control">
                                                <option value="BBA ">BBA</option>
                                                <option value="BCA ">BCA </option>
                                                <option value="BBA(CA)">BBA(CA)</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Class</label>
                                            <select name='nclass' class="form-control">
                                                <option value="FY ">FY</option>
                                                <option value="SY ">SY </option>
                                                <option value="TY">TY</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Section</label>
                                            <select name='section' class="form-control">
                                                <option value="U.G ">U.G</option>
                                                <option value="P.G ">P.G </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Division</label>
                                            <select name='division' class="form-control">
                                                <option value="Non-Grant ">NON-GRANT</option>
                                                <option value="Grant ">GRANT</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-md-4 offset-md-8">
                                            <button type="submit" name ='pati'class="btn btn-primary">SUBMIT</button>
                                            <button type="reset" class="btn btn-danger">RESET</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                        if(isset($_POST['pati'])){
                            $fid = uniqid();
                            $verify = "Not Verify";
                            $adate =date("Y/m/d");
                            $img= 'http://127.0.0.1/student/img/';
                            $file_name = $_FILES['img']['name'];
                            $file_tmp = $_FILES['img']['tmp_name'];
                            move_uploaded_file($file_tmp,"../student/img/".$file_name);
                            $query = "INSERT INTO reg values('default','{$_SESSION['username']}','{$_POST['fname']}','{$_POST['mname']}','{$_POST['lname']}','{$_POST['moname']}','{$_POST['bdate']}','{$_POST['dsate']}','$img$file_name','{$_POST['gender']}','{$_POST['a2']}','{$_POST['city']}','{$_POST['state1']}','{$_POST['pin']}','{$_POST['class']}','{$_POST['faculty']}','{$_POST['omark']}','{$_POST['tmark']}','{$_POST['pmark']}','{$_POST['lcname']}','{$_POST['uname']}','{$_POST['nfaculty']}','{$_POST['nclass']}','{$_POST['section']}','{$_POST['division']}','$fid','$verify','$adate')";
						    $result = mysqli_query($conn,$query);
						    if($result){
							    echo  "<script>swal('Good job!', 'User Registered Successfully..!', 'success');</script>";
						    }else{
                                echo "<script>swal('All Fields Are Required..!')</script>";
                            }
                        }
                    ?>
                    <!-- purchase details -->
                    <div class="tab-pane fade" id="v-pills-purchase" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="col">
                                    <span class="navbar navbar-light bg-light text-center">
                                        <a class="navbar-brand text-center">Student  Report</a> 
                                        <p class='text-right'>Date : <span class="date"></span> Time : <span id='time' class="time"></span></p> 
                                    </span>
                                </div>
                                    <form action="#" method="post">
                                        <?php
                                            $i=1;
                                                $sql = "SELECT * FROM reg,user WHERE reg.un=user.uname AND user.uname='{$_SESSION['username']}'";
                                                $res = mysqli_query($conn,$sql);
                                                    echo"
                                                        <table class='mt-2 tabel-resposive table-responsive-md table table-hover table-bordered text-center'>
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Student Name</th>
                                                                        <th>Course</th>
                                                                        <th>Faculty</th>
                                                                        <th>Section</th>
                                                                        <th>Division</th>
                                                                        <th>Admission Date</th>
                                                                        <th>Form ID</th>
                                                                        <th>Photo</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>";
                                                if(mysqli_num_rows($res)>0){
                                                    while($row = mysqli_fetch_assoc($res)){

                                                        echo"
                                                            <tbody>
                                                                <tr>
                                                                    <td>".$i++."</td>
                                                                    <td>{$row['fname']} {$row['mname']} {$row['lname']}</td>
                                                                    <td>{$row['nclass']}</td>
                                                                    <td>{$row['nfaculty']}</td>
                                                                    <td>{$row['section']}</td>
                                                                    <td>{$row['division']}</td>
                                                                    <td>{$row['adate']}</td>
                                                                    <td>{$row['fid']}</td>
                                                                    <td><img src='{$row['photo']}' style='width='50'; height='60''></td>
                                                                    <td>{$row['verify']}</td>
                                                                </tr>
                                                            </tbody>";
                                                        }
                                                    }
                                                echo "</table>";    
                                        ?> 
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
$(document).ready(function(){
    let today = new Date().toLocaleDateString()
    $('.date').text(today);
    function livetime(){
        var d = new Date();
        var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
        $('.time').text(time);
    }setInterval(livetime, 1000);
   
});
</script>
