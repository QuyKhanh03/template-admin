@extends('admin.layout.main')
@push('css')
    <style>
        {{--    style here!    --}}
    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">DataTables /</span> Basic
            </h4>

            <!-- DataTable with Buttons -->
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="table table-bordered" id="dataTableExample">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>Garrett Winters</td>
                                <td>garrent@gmail.com </td>
                                <td>2021/04/25</td>
                                <td>$170,750</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>Garrett Winters</td>
                                <td>garrent@gmail.com </td>
                                <td>2021/04/25</td>
                                <td>$170,750</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>Garrett Winters</td>
                                <td>garrent@gmail.com </td>
                                <td>2021/04/25</td>
                                <td>$170,750</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>Garrett Winters</td>
                                <td>garrent@gmail.com </td>
                                <td>2021/04/25</td>
                                <td>$170,750</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>Garrett Winters</td>
                                <td>garrent@gmail.com </td>
                                <td>2021/04/25</td>
                                <td>$170,750</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>Garrett Winters</td>
                                <td>garrent@gmail.com </td>
                                <td>2021/04/25</td>
                                <td>$170,750</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-outline-primary">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-5" />

        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div
                class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column"
            >
                <div class="mb-2 mb-md-0">

                </div>
                <div>

                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection


@push('script')
    <script>
        $(document).ready(function (){
            $('#dataTableExample').DataTable({

            });
        })
    </script>
@endpush
