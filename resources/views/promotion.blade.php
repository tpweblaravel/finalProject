@extends('layouts.master')

@section('content')
 

 
    <!-- partial:../../partials/_navbar.html -->
    <!-- @foreach($etu as $etud)
    {{$etud -> nom}}

    @endforeach-->
   
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
                          <th>Promotion</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1er année L1</td>
                          <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button>
                      </td>
                        </tr>
                        <tr>
                          <td>2eme année L2</td>
                            <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                          
                        </tr>
                        <tr>
                          <td>3eme année L3</td>
                          <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                       
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                        </tr>
                        <tr>
                          <td>master 1 GL</td>
                            <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                        </tr>
                        <tr>
                          <td>master 1 SIC</td>
                            <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                        </tr>
                        <tr>
                          <td>master 1 MID</td>
                            <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                          
                        </tr>
                        <tr>
                          <td>master 1 RSD</td>
                           <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                          
                        </tr>
                        <tr>
                          <td>master 2 GL</td>
                           <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                          
                        </tr>
                        <tr>
                          <td>master 2 MID</td>
                            <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                          
                        </tr>
                        <tr>
                          <td>master 2 SIC</td>
                            <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                          
                          
                        </tr>
                        <tr>
                          <td>master 2 RSD</td>
                          <td><a type="button"  href="master-details"class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-eye"></i>
                      </a>
                       <button type="button" class="btn btn-inverse-primary btn-rounded btn-icon">
                        <i class="ti-trash"></i>
                      </button>
                      <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </button></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
  
@endsection
