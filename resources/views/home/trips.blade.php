@extends('layouts.app')

@section('title', 'Minor page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Airline Bookings</h5>

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
                        <a href="https://www.altayyargroup.com/" target=_blank class="btn btn-primary btn-sm btn-block" style="margin-top:5px;width:150px;">
                            <i class="fa fa-plane"></i> Reserve New Flight
                        </a>
                    </div>
                    <div class="ibox-content">
                        <table class="footable table table-stripped toggle-arrow-tiny">
                            <thead>
                            <tr>

                                <th data-toggle="true">Destination</th>
                                <th>Airport</th>
                                <th>Flight Date</th>
                                <th data-hide="all">Company</th>
                                <th data-hide="all">Duration</th>
                                <th data-hide="all">Price</th>
                                <th data-hide="all">Book Date</th>
                                <th>Success</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>New York - Amsterdam</td>
                                <td>John F. Kennedy International Airport</td>
                                <td>05.04.2019</td>
                                <td>Air Arabia</td>
                                <td><span class="pie">6:45</span></td>
                                <td>$916</td>
                                <td>24.03.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Amsterdam - Munich</td>
                                <td>Amsterdam Airport Schiphol</td>
                                <td>09.04.2019</td>
                                <td>Lufthansa</td>
                                <td><span class="pie">1:55</span></td>
                                <td>$180</td>
                                <td>24.03.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Munich - Moscow</td>
                                <td>Franz Josef Strauss International Airport</td>
                                <td>24.04.2019</td>
                                <td>Lufthansa</td>
                                <td><span class="pie">4:20</span></td>
                                <td>$290</td>
                                <td>01.04.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Moscow - Abu Dhabi</td>
                                <td>Sheremetevo International Airport</td>
                                <td>05.05.2019</td>
                                <td>Etihad Airways</td>
                                <td><span class="pie">4:10</span></td>
                                <td>$300</td>
                                <td>01.05.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Abu Dhabi - New York</td>
                                <td>Abu Dhabi International Airport</td>
                                <td>10.05.2019</td>
                                <td>Etihad Airways</td>
                                <td><span class="pie">12:40</span></td>
                                <td>$1100</td>
                                <td>09.05.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>New York - Amsterdam</td>
                                <td>John F. Kennedy International Airport</td>
                                <td>05.04.2019</td>
                                <td>Air Arabia</td>
                                <td><span class="pie">6:45</span></td>
                                <td>$916</td>
                                <td>24.03.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Amsterdam - Munich</td>
                                <td>Amsterdam Airport Schiphol</td>
                                <td>09.04.2019</td>
                                <td>Lufthansa</td>
                                <td><span class="pie">1:55</span></td>
                                <td>$180</td>
                                <td>24.03.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Munich - Moscow</td>
                                <td>Franz Josef Strauss International Airport</td>
                                <td>24.04.2019</td>
                                <td>Lufthansa</td>
                                <td><span class="pie">4:20</span></td>
                                <td>$290</td>
                                <td>01.04.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Moscow - Abu Dhabi</td>
                                <td>Sheremetevo International Airport</td>
                                <td>05.05.2019</td>
                                <td>Etihad Airways</td>
                                <td><span class="pie">4:10</span></td>
                                <td>$300</td>
                                <td>01.05.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Abu Dhabi - New York</td>
                                <td>Abu Dhabi International Airport</td>
                                <td>10.05.2019</td>
                                <td>Etihad Airways</td>
                                <td><span class="pie">12:40</span></td>
                                <td>$1100</td>
                                <td>09.05.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>New York - Amsterdam</td>
                                <td>John F. Kennedy International Airport</td>
                                <td>05.04.2019</td>
                                <td>Air Arabia</td>
                                <td><span class="pie">6:45</span></td>
                                <td>$916</td>
                                <td>24.03.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Amsterdam - Munich</td>
                                <td>Amsterdam Airport Schiphol</td>
                                <td>09.04.2019</td>
                                <td>Lufthansa</td>
                                <td><span class="pie">1:55</span></td>
                                <td>$180</td>
                                <td>24.03.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Munich - Moscow</td>
                                <td>Franz Josef Strauss International Airport</td>
                                <td>24.04.2019</td>
                                <td>Lufthansa</td>
                                <td><span class="pie">4:20</span></td>
                                <td>$290</td>
                                <td>01.04.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Moscow - Abu Dhabi</td>
                                <td>Sheremetevo International Airport</td>
                                <td>05.05.2019</td>
                                <td>Etihad Airways</td>
                                <td><span class="pie">4:10</span></td>
                                <td>$300</td>
                                <td>01.05.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            <tr>
                                <td>Abu Dhabi - New York</td>
                                <td>Abu Dhabi International Airport</td>
                                <td>10.05.2019</td>
                                <td>Etihad Airways</td>
                                <td><span class="pie">12:40</span></td>
                                <td>$1100</td>
                                <td>09.05.2019</td>
                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Ground transport</h5>

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
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                               placeholder="Search in table">

                        <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
                            <thead>
                            <tr>
                                <th>City</th>
                                <th>Transport type</th>
                                <th data-hide="phone,tablet">Duration</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Bus</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Train</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Bus</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Train</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Bus</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Train</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Internal Shuttle</h5>

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
                        <input type="text" class="form-control input-sm m-b-xs" id="filterShuttle"
                               placeholder="Search in table">

                        <table class="footable table table-stripped" data-page-size="5" data-filter=#filterShuttle>
                            <thead>
                            <tr>
                                <th>City</th>
                                <th>Transport type</th>
                                <th data-hide="phone,tablet">Duration</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Bus</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Train</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Bus</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Train</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Bus</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Train</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Bus</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Train</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Subway</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Uber/Careem</h5>

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
                        <input type="text" class="form-control input-sm m-b-xs" id="filterTaxi"
                               placeholder="Search in table">

                        <table class="footable table table-stripped" data-page-size="4" data-filter=#filterTaxi>
                            <thead>
                            <tr>
                                <th>City</th>
                                <th>Transport type</th>
                                <th data-hide="phone,tablet">Duration</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Uber</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Uber</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Careem</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Uber</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Uber</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Careem</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Careem</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Uber</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Uber</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Uber</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Careem</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Uber</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Uber</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Careem</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Careem</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Uber</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Uber</td>
                                <td>0:45</td>
                                <td class="center">$5</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Uber</td>
                                <td>1:20</td>
                                <td class="center">$8</td>
                                <td class="center">04.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>New York</td>
                                <td>Careem</td>
                                <td>0:15</td>
                                <td class="center">$1.5</td>
                                <td class="center">06.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Uber</td>
                                <td>0:20</td>
                                <td class="center">$3</td>
                                <td class="center">08.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Amsterdam</td>
                                <td>Uber</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">09.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Careem</td>
                                <td>0:30</td>
                                <td class="center">$5</td>
                                <td class="center">11.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Careem</td>
                                <td>0:55</td>
                                <td class="center">$7</td>
                                <td class="center">12.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Munich</td>
                                <td>Uber</td>
                                <td>0:35</td>
                                <td class="center">$3</td>
                                <td class="center">13.04.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>1:20</td>
                                <td class="center">$2</td>
                                <td class="center">09.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>0:35</td>
                                <td class="center">$1</td>
                                <td class="center">13.05.2019</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Moscow</td>
                                <td>Uber</td>
                                <td>1:00</td>
                                <td class="center">$4</td>
                                <td class="center">15.05.2019</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
