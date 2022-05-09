<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ajouter promotion</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
<div class="main-panel">
<div class="container">
        
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="{{ url('promotions')}}" method="POST">
                  	{{ csrf_field()}}

                    <div class="form-group">
                      <label for="exampleInputUsername1">libelle</label>
                      <input type="text" name="libelle" class="form-control" id="exampleInputUsername1" placeholder="premiere">
                    </div>
                     <div class="form-group">
                      <label for="exampleSelectGender">option</label>
                      <select name="option">

                        @foreach($options as $option)
                    
                        <option value="{{$option->id}}"> {{$option->libelle}} </option>
                    
                        @endforeach
                    
                    </select>
                      </div>
                     <div class="form-group row">
                          <label class="col-sm-5 col-form-label">année</label>
                          <div class="col-sm-7">
                            <input name="annee" class="form-control" placeholder="yyyy/yyyy"/>
                          </div>
                     
                    <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                    <button class="btn btn-light">Supprimer</button>
                  </form>
                </div>
              </div>
             </div>
            </div>
        </div>







  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
