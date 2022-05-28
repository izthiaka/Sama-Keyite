@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Liste utilisateurs</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-sm-6 col-md-6">
                                <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                        <div class="form-group mb-0">
                                            <input type="search" class="form-control" id="exampleInputSearch"
                                                placeholder="Search" aria-controls="user-list-table">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="user-list-files d-flex">
                                    <a class="bg-primary" href="javascript:void();">
                                        Print
                                    </a>
                                    <a class="bg-primary" href="javascript:void();">
                                        Excel
                                    </a>
                                    <a class="bg-primary" href="javascript:void();">
                                        Pdf
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="user-list-table" class="table table-striped table-bordered mt-4 " role="grid"
                                aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Prenom Nom</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date inscription</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td class="text-center"><img class="rounded img-fluid avatar-40"
                                                    src="{{asset('assets/images/user/01.jpg')}}" alt="profile"></td>
                                            <td>{{$item->prenom}} {{$item->nom}}</td>
                                            <td>{{$item->telephone}}</td>
                                            <td>{{$item->email}}</td>
                                            <td><span class="badge iq-bg-primary">Active</span></td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Voir" href="#"><i
                                                            class="ri-user-add-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Modifier" href="{{route('users.edit', $item->id)}}"><i
                                                            class="ri-pencil-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Supprimer" href="{{route('users.destroy', $item->id)}}"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-between mt-3">
                            <div id="user-list-page-info" class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation example">
                                    {{$users->links()}}
                                    {{-- <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul> --}}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
