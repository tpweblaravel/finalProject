@extends('layouts.master')

@section('content')
 <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
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

  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
    
           
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>
                            photo
                          </th>
                          <th>
                            date de recrutement
                          </th>
                          <th>
                            Nom
                          </th>
                          <th>
                            Prénom
                          </th>
                          <th>
                            grade
                          </th>
                          <th>
                           Date de naissance
                          </th>
                         
                          <th>
                            <a type="button" href="{{url('users/create')}}"class="btn btn-outline-secondary btn-icon-text">
                                ajouter
                                <i class="ti-file btn-icon-append"></i>                          
                            </a>
                          </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ( $users as $user )
                        <tr>
                          <td>{{$user->photo}}</td>
                          <td>{{$user->dateR}}</td>
                          <td>{{$user->nom}}</td>
                          <td>{{$user->prenom}}</td>
                          <td>{{$user->grade}}</td>
                          <td>{{$user->date_naissance}}</td>
                          <td>
                            <form action ="{{url('users/'.$user->id)}}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                         <a type="button"  href=""class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                      <a type="button" href="{{url('users/'.$user->id.'/edit')}}"class="btn btn-outline-secondary btn-icon-text">
                        modifier
                        <i class="ti-file btn-icon-append"></i>                          
                      </a>
                       <button type="submit" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                     
                      </td>
                    </tr>
                    @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
