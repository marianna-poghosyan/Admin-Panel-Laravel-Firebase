@extends('layouts.app')

@section('title', 'Visa page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover guestsTables" >
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Table</th>
                                        <th>Category</th>
                                        <th>Attended</th>
                                    </tr>
                                </thead>
                                <tbody id="guestsBody"></tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Table</th>
                                        <th>Category</th>
                                        <th>Attended</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tables"></div>
        </div>
    </div>
@endsection
