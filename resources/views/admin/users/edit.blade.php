
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Modifier utilisateur</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../vendors/feather/feather.css">
        <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
        <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="../../images/favicon.png" />
      </head>
      <body>
       
          <!-- partial:../../partials/_navbar.html -->
         
         
      
                <div class="row">
                 <div class="col-lg-6 grid-margin stretch-card">
                    
                      <div class="card-body">
                        <h4 class="card-title"></h4>
                        <form action= "{{url('users/'.$user->id)}}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field()}}
                        <div class="table-responsive">
                          <table class="table">
                            
                            <tbody>
                            
                              
                                <tr><td>photo</td><td><input type="text" name="photo" value="{{$user->photo}}"></td></tr>
                                <tr><td>nom</td><td><input type="text" name="nom" value="{{$user->nom}}"></td></tr>
                                <tr><td>prénom</td><td><input type="text" name="prenom" value="{{$user->prenom}}"></td></tr>
                                <tr><td>grade</td><td><input type="text" name="grade" value="{{$user->grade}}"></td></tr>
                                <tr><td>admin</td><td> <input class="form-check-input" type="checkbox" name="admin" ></td></tr>
                                <tr><td>date de naissance</td><td><input type="date" name="datenaissance" value="{{$user->date_naissance}}"></td></tr>
                                <tr><td>date de recrutement</td><td><input type="date" name="date" value="{{$user->dater}}"></td></tr>
                               
                              </tr>
                            </tbody>
                          </table>
                          <button type="submit" class="btn btn-primary me-2">Modifier</button>
                         </form>
                        </div>
                      </div>
                    
                  
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../js/off-canvas.js"></script>
        <script src="../../js/hoverable-collapse.js"></script>
        <script src="../../js/template.js"></script>
        <script src="../../js/settings.js"></script>
        <script src="../../js/todolist.js"></script>
        </body>
        </html>