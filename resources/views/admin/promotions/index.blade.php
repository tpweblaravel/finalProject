@extends('layouts.master')

@section('content')
 <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
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
   
   
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <!-- <div class="col-lg-6 grid-margin stretch-card">-->
              
                <div class="card-body">
                  <h4 class="card-title"></h4>
                
  
                  <div class="table-responsive">
                     <table class="table">
                      <thead>
                        <tr>
                          <th>libelle</th>
                          <th>option</th>
                          <th>année</th>
                          <th> <a type="button" href="{{url('promotions/create')}}" class="btn btn-outline-secondary btn-icon-text">
                          ajouter
                          <i class="ti-file btn-icon-append"></i>                          
                        </a></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($promotions as $promotion)
                        <tr>
                          <td> {{$promotion->libelle}}</td>
                      
                          <td> {{($promotion->option)? $promotion->option->libelle : ''}}</td>
                          <td> {{$promotion->annee}}</td>
                         
                          <td>
                            <form action ="{{url('promotions/'.$promotion->id)}}" method="post">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                                <i class="ti-eye"></i>
                                </a>
                                 <a type="button" href="{{url('promotions/'.$promotion->id.'/edit')}} " class="btn btn-outline-secondary btn-icon-text">modifier
                                  <i class="ti-file btn-icon-append"></i>  
                                </a>
                              
                             <button type=" submi" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                             </button>
                            </form>
                     
                      </td>
                        </tr>
                        @endforeach
                        
                      

                      </tbody>
                    </table>
                    
                  </div>
                </div>
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
@endsection
