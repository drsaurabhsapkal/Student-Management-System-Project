<?php
session_start(); 
include('../navbar.html');
include('../connection/index.php');                                                                                
?> 
<html>
    <body>
        <div class="row no-gutters">
            <div class="col-2 bg-white" style='border:1px solid #008080; height:39rem;'>
                <!-- active button -->
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link p-3 h6" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home"></i> Home </a>
                    <a class="nav-link p-3  h6" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a class="nav-link p-3  h6" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-th-large"></i> Student</a>
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
                    <!-- purchase details -->
                    <div class="tab-pane fade" id="v-pills-purchase" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="col">
                                    <span class="navbar navbar-light bg-light text-center">
                                        <a class="navbar-brand text-center">Registered Student Report</a> 
                                        <p class='text-right'>Date : <span class="date"></span> Time : <span id='time' class="time"></span></p> 
                                    </span>
                                </div>
                                    <form action="#" method="post">
                                        <?php
                                            $i=1;
                                                $sql = "SELECT * FROM reg";
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
