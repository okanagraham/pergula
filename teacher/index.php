<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Pergula | Teacher Dashboard </title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../dist/css/teacher.css" rel="stylesheet">
	<!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<!-- Custom CSS -->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle" id="unread-notices"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark" id="student-name"></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:logout()"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">Main</span></li>
                        <li class="sidebar-item selected"> <a class="sidebar-link sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <!-- ============================= if virtual classrooms enabled ================================= -->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html"
                                    aria-expanded="false"><i data-feather="video" class="feather-icon"></i>
                          <span class="hide-menu">Virtual Classroom</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html"
                                    aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i>
                          <span class="hide-menu">My Calendar</span></a>
                        </li>
            						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html"
                                    aria-expanded="false"><i data-feather="book" class="feather-icon"></i>
            							<span class="hide-menu">Courses</span></a>
            						</li>
                        <!-- ============================= if form teacher ================================= -->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="attendance.html"
                                    aria-expanded="false"><i data-feather="activity" class="feather-icon"></i>
                          <span class="hide-menu">Attendance</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html"
                                    aria-expanded="false"><i data-feather="mail" class="feather-icon"></i>
                          <span class="hide-menu">Inbox</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html"
                                    aria-expanded="false"><i data-feather="award" class="feather-icon"></i>
                          <span class="hide-menu">Manage Grades</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="folder" class="feather-icon"></i><span
                                    class="hide-menu">Assessments </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="chart-morris.html" class="sidebar-link"><span
                                            class="hide-menu"> Create
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="chart-knob.html" class="sidebar-link"><span
                                            class="hide-menu">
                                            Manage
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs-start.html"
                                    aria-expanded="false"><i data-feather="users" class="feather-icon"></i>
                          <span class="hide-menu">Students</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1" id="greeting"></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- *************************************************************** -->
            <!-- Start First Cards -->
            <!-- *************************************************************** -->
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium" id="course-count"></h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Courses</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium" id="assessment-count"></h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Unmarked Assessments
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium" id="unread-messages"></h2>
                                    <span class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">New</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Unread Messages</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                              <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium" id="tasks-count"></h2>
                                <span class="badge bg-warning font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">Pending</span>
                              </div>
                              <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Tasks</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Attendance Records</h4>
                    <h6 class="card-subtitle">View attendance records for students in your class</h6>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                          <tbody>

                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- *************************************************************** -->
            <!-- End First Cards -->
            <!-- *************************************************************** -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
            </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Page -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
    <!-- End JS -->
    <?php include('../dist/js/common_footer.php'); ?>
    <script>

      var db = firebase.firestore();

      //get the current user, display name etc
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
          if(user.emailVerified){
            console.log("emailVerified");
          }else{
            /*user.sendEmailVerification().then(function() {
              // Email sent.
            }).catch(function(error) {
              // An error happened.
            });*/
          }
          //document.getElementById("gamification-item").style.display = "none";
          document.getElementById("student-name").textContent = user.displayName;
          document.getElementById("greeting").innerHTML = 'Hello ' + user.displayName + '!';
          buildTableHead();
          newAttendance(0, 2021);
          //feature access based on firebase remote config,
          //if overall features get turned on/off, this will take effect after next login
          let sessionStorage = window.sessionStorage;

          const basic_features = sessionStorage.getItem("basic_features");
          const gamification = sessionStorage.getItem("gamification");
          const virtual_classrooms = sessionStorage.getItem("virtual_classrooms");

          //update the ui based on the value

          updateUi("basic_features", basic_features);
          updateUi("gamification", gamification);
          updateUi("virtual_classrooms", virtual_classrooms);


        } else {
          // No user is signed in.
          window.location.replace("../index.php");
        }
      });

      function updateUi(element, state){
        //update ui based on variables
      }

      function logout(){
        firebase.auth().signOut().then(() => {
          // Sign-out successful.
          window.location.replace("../index.php");
        }).catch((error) => {
          // An error happened.
        });
      }

      function daysInMonth(month, year){
        return new Date(year, month, 0).getDate();
      }

      function buildTableHead(){
        let thisMonthCount = daysInMonth(1,2021);
        let thead = document.getElementById("zero_config").createTHead();
        let row = thead.insertRow();
        var i;

        var nameCell = document.createElement("td");
        var nameText = document.createTextNode("Student Name");
        nameCell.appendChild(nameText);
        row.appendChild(nameCell);

        for(i = 1; i <= thisMonthCount; i++){
          var cell = document.createElement("td");
          var cellText = document.createTextNode(i);
          cell.appendChild(cellText);
          row.appendChild(cell);
        }
        thead.appendChild(row);
      }

      function newAttendance(month, year){
        let dayCount = daysInMonth(month, year);
        var firstDay = new Date(year, month, 1);
        var lastDay = new Date(year, month + 1, 0);

        let tbody = document.getElementById("zero_config").getElementsByTagName("tbody")[0];

        var attendanceRef = db.collection("classroom_students").doc("classrom_id").collection("students"); //get based on selected class id

        attendanceRef.get()
        .then(function(querySnapshot){//querySnapshot contains collection of attendance items for each user
          querySnapshot.forEach(function(doc){
            console.log(doc.data().displayName); //this is the user name
            let row = tbody.insertRow();
            let thisUsersDates = [];
            var nameCellValue = document.createElement("td");
            var nameCellValueText = document.createTextNode(doc.data().displayName);

            nameCellValue.appendChild(nameCellValueText);
            row.appendChild(nameCellValue);

            doc.ref.collection("attendance").where("date", ">=", firstDay).where("date", "<=", lastDay)
            .get()
            .then(function(thisSnapshot){
              thisSnapshot.forEach(function(doc){
                thisUsersDates.push(doc.data());
              });

              var index;
              var subindex;
              for(index = 1; index <= dayCount; index++){

                var tempCellValue = document.createElement("td");
                var tempCellValueText;

                var count = 0;
                for(subindex = 0; subindex < thisUsersDates.length; subindex++){
                  if(thisUsersDates[subindex].date.toDate().getDate() == index){
                    if(thisUsersDates[subindex].am == true && thisUsersDates[subindex].pm == true){
                      tempCellValue.innerHTML = "<i data-toggle=\"tooltip\" data-placement=\"top\" title=\"AM: Present, PM: Present\" class=\"icon-check present-allday\">";
                    }
                    if(thisUsersDates[subindex].am != true || thisUsersDates[subindex].pm != true){
                      var am = (thisUsersDates[subindex].am) ? "AM: Present " : "AM: Absent ";
                      var pm = (thisUsersDates[subindex].pm) ? "PM: Present" : "PM: Absent";
                      tempCellValue.innerHTML = "<i data-toggle=\"tooltip\" data-placement=\"top\" title=\""+ am + pm +"\" class=\"icon-check present-halfday\">";
                    }
                    if(thisUsersDates[subindex].am == false && thisUsersDates[subindex].pm == false){
                      tempCellValue.innerHTML = "<i class=\"icon-close absent\">";
                    }
                    count++;
                  }
                }
                if(count == 0){
                  tempCellValue.innerHTML = "-";
                }
                row.appendChild(tempCellValue);
              }
              tbody.appendChild(row);
            });
          });
        })
        .catch(function(error){
          console.log(error);
        });
      }

      function getAttendance(month, year){
        //var startDate = new Date("2020-12-01");
        //var endDate = new Date("2020-12-31");
        let dayCount = daysInMonth(month, year);
        var firstDay = new Date(year, month, 1);
        var lastDay = new Date(year, month + 1, 0);
        var attendanceRef = db.collection("attendance");

        let tbody = document.getElementById("zero_config").getElementsByTagName("tbody")[0];

        attendanceRef.where("date", ">=", firstDay).where("date", "<=", lastDay)
        .get()
        .then(function(querySnapshot){
          querySnapshot.forEach(function(doc){
            let row = tbody.insertRow();

            var nameCellValue = document.createElement("td");
            var nameCellValueText = document.createTextNode(doc.data().displayName);

            nameCellValue.appendChild(nameCellValueText);
            row.appendChild(nameCellValue);

            var date = doc.data().date.toDate();
            var index;

            for(index = 1; index <= dayCount; index++){
              var tempCellValue = document.createElement("td");
              var tempCellValueText;
              if(date.getDate() == index){
                //console.log("same");
                tempCellValue.innerHTML = "<i class=\"icon-check present-halfday\">";
                //tempCellValueText = document.createTextNode("<i data-feather=\"check\" class=\"feather-icon\"></i>");
              }else{
                //console.log("not same");
                tempCellValue.innerHTML = "-";
                //tempCellValueText =  document.createTextNode("-");
              }
              //tempCellValue.appendChild(tempCellValueText);
              row.appendChild(tempCellValue);
            }
            tbody.appendChild(row);
          });
        })
        .catch(function(error){
          console.log(error);
        });
      }
    </script>
</body>

</html>
