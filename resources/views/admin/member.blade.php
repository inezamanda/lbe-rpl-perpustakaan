@extends('admin.app')
@section('title', 'Member - Library App')
@section('content')
    <h2 class="text-uppercase mb-4">Member</h2>
    <div class="row justify-content-left">
    <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tanggal Registrasi</th>
                                        </tr>
                                    </thead>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </div>
@endsection
