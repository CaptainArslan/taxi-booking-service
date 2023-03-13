@extends('layouts.app')
@section('title', 'Routes')
<!-- start page title -->
@section('page_css')
@include('partials.datatable_css')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">All Routes</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12 table-responsive">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Add </button>
            </div>
            <div class="card-body">
                <h4 class="header-title">Routes</h4>
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Organization Name</th>
                            <th>Route Name</th>
                            <th>To</th>
                            <th>From</th>
                            <th>Route No</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td><b><a href="#">Tiger Nixon</a></b></td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td><a href="#" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Add Route</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Organization Name</label>
                        <select class="form-select" id="example-select">
                            <option>School</option>
                            <option>college</option>
                            <option>University</option>
                            <!-- <option>Org</option> -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Route No</label>
                        <input type="number" id="simpleinput" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">To</label>
                        <input type="text" id="simpleinput" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">From</label>
                        <input type="text" id="simpleinput" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Route Name</label>
                        <input type="text" id="simpleinput" class="form-control" readonly>
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('page_js')
@include('partials.datatable_js')
<!-- Plugins js-->
<script src="/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- Init js-->
<script src="/js/pages/form-wizard.init.js"></script>
<script>
    $(document).ready(function() {

    });
</script>
@endsection