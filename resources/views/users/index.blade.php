@extends('layouts.main')
<<<<<<< HEAD

@section('title', 'Users')
@section('content')
=======
 
@section('title', 'Users')
@section('content')

>>>>>>> ac37d0b2 (pertemuan-12)
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <span class="ml-1">Users</span>
                </div>
            </div>
<<<<<<< HEAD
            {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Index</a></li>
                </ol>
            </div> --}}
        </div>
        <!-- row -->
=======
                        <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                            </ol>
                        </div> --> 
        </div>
                    <!-- row -->
>>>>>>> ac37d0b2 (pertemuan-12)

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table-users" class="display nowrap text-dark" style="width:100%">
                                <thead>
                                    <tr>
<<<<<<< HEAD
                                        <th>No.</th>
                                        <th>Username</th>
=======
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Roles</th>
                                        <th>Aksi</th>
>>>>>>> ac37d0b2 (pertemuan-12)
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
<<<<<<< HEAD
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->username}}</td>
                                        </tr>
=======
                                        
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($user->roles as $item)
                                                        <li>{{$item->nama_role}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <a href="{{ route('users.profile', $user->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </td>
                                        </tr> 
>>>>>>> ac37d0b2 (pertemuan-12)
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        new DataTable('#table-users', {
            responsive: true,
            rowReorder: {
                selector: 'td:nth-child(2)'
            }
        });
    </script>
<<<<<<< HEAD
@endpush
=======
@endpush
>>>>>>> ac37d0b2 (pertemuan-12)
