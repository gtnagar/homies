<x-tenant-app-layout>
     <x-slot name="header">
        <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 text-dark"><span class="fa fa-user-tie"></span> Tenants</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tenants</li>
                     </ol>
                  </div>
                  {{-- <a class="btn btn-sm elevation-2" href="add-tenants.html" style="margin-top: 20px;margin-left: 10px;background-color: #05445E;color: #ddd;"><i
                        class="fa fa-user-plus"></i>
                     Add New</a> --}}
               </div>
            </div>
     </x-slot>
     
     <div class="container-fluid">
        <div class="card card-info elevation-2">
           <br>
           <div class="col-md-12 table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                 <thead class="btn-cancel">
                    <tr>
                       <th>Profile</th>
                       <th>Tenant Info</th>
                       <th>Address</th>
                       <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td><img src="../assets/img/profile.png" width="50" alt="User Image"></td>
                       <td>
                          <p class="info">Name: <b>James Andress</b></p>
                          <p class="info"><small>Contact: <b>098733526171</b></small></p>
                          <p class="info"><small>Email: <b>james@gmail.com</b></small></p>
                       </td>
                       <td>Pasig, Metro Manila</td>
                       <td class="text-right">
                          <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                class="fa fa-user-edit"></i></a>
                          <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                class="fa fa-trash-alt"></i></a>
                       </td>
                    </tr>
                    <tr>
                       <td><img src="../assets/img/profile.png" width="50" alt="User Image"></td>
                       <td>
                          <p class="info">Name: <b>John Doe</b></p>
                          <p class="info"><small>Contact: <b>098733526171</b></small></p>
                          <p class="info"><small>Email: <b>john@gmail.com</b></small></p>
                       </td>
                       <td>Makati, Metro Manila</td>
                       <td class="text-right">
                          <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                class="fa fa-user-edit"></i></a>
                          <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                class="fa fa-trash-alt"></i></a>
                       </td>
                    </tr>
                    <tr>
                       <td><img src="../assets/img/profile.png" width="50" alt="User Image"></td>
                       <td>
                          <p class="info">Name: <b>Juan Luna</b></p>
                          <p class="info"><small>Contact: <b>098733526171</b></small></p>
                          <p class="info"><small>Email: <b>juan@gmail.com</b></small></p>
                       </td>
                       <td>Mandaluyong, Metro Manila</td>
                       <td class="text-right">
                          <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                class="fa fa-user-edit"></i></a>
                          <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                class="fa fa-trash-alt"></i></a>
                       </td>
                    </tr>
                 </tbody>
              </table>
           </div>
        </div>
     </div>
</div>
</div>
 
 </x-tenant-app-layout>
 