<!DOCTYPE html>
<html lang="en">
    <?php include "../controller/doctor_panel.php" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .nav-link {
            color: #333;
        }
        .nav-link:hover {
            color: #337ab7;
        }
        .nav-link.active {
            color: #337ab7;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .card-body .fa {
            font-size: 24px;
            margin-right: 10px;
        }
        .card-body .fa-circle {
            color: #337ab7;
        }
        .card-body .fa-square {
            color: #337ab7;
        }
        .card-body .fa-check-circle {
            color: #337ab7;
        }
        .card-body .fa-times-circle {
            color: #337ab7;
        }
        .card-body .fa-exclamation-circle {
            color: #337ab7;
        }
        .card-body .fa-info-circle {
            color: #337ab7;
        }
        .card-body .fa-question-circle {
            color: #337ab7;
        }
        .card-body .fa-arrow-alt-circle-right {
            color: #337ab7;
        }
        .card-body .fa-arrow-alt-circle-left {
            color: #337ab7;
        }
        .card-body .fa-arrow-alt-circle-up {
            color: #337ab7;
        }
        .card-body .fa-arrow-alt-circle-down {
            color: #337ab7;
        }
    </style>
</head>
<body style="background-color:rgb(144, 255, 255);">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 mb-4">
        <a class="navbar-brand" href="#">Doctor Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../view/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prescriptions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-users fa-2x"></i>
                        <h5 class="card-title">Patients</h5>
                        <p class="card-text">Total Patients: <?= $patientsCount ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-calendar-alt fa-2x"></i>
                        <h5 class="card-title">Appointments</h5>
                        <p class="card-text">Total Appointments: 50</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-prescription fa-2x"></i>
                        <h5 class="card-title">Prescriptions</h5>
                        <p class="card-text">Total Prescriptions: 20</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-file-alt fa-2x"></i>
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">Total Reports: 30</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Appointments</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Patient Name</th>
                                    <th>Appointment Date</th>
                                    <th>Time</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($patients as $patient): ?>
                                <tr>
                                    <td><?= $patient["fullname"] ?></td>
                                    <td><?= $patient["date"] ?></td>
                                    <td><?= $patient["time"] ?></td>
                                    <td><?= $patient["gender"] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Doctor's Abilities</h5>
            </div>
            <div class="card-body">
                <p>Dr. Smith is a highly skilled and experienced doctor with expertise in:</p>
                <ul>
                    <?php foreach($doctor_skills as $doctor_skill): ?>
                    <li><?= $doctor_skill["bio"] ?></li>
                    <?php endforeach; ?>
                </ul>
                    <center>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#editAbilitiesModal">Edit Abilities</button>

                    </center>
                </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editAbilitiesModal" tabindex="-1" role="dialog" aria-labelledby="editAbilitiesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAbilitiesModalLabel">Edit Doctor's Abilities</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" method="post" action="../controller/doctor_edit_prossess.php">
                    <div class="form-group">
                        <label for="abilities">Abilities:</label>
                        <textarea name="skills" class="form-control" id="abilities" rows="5">
                        <?php foreach($doctor_skills as $doctor_skill): ?>
                           
                          *  <?=  $doctor_skill["bio"] ;  ?>
                          
                        
                            <?php endforeach;   ?>
                  
                        </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button form="form" type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>