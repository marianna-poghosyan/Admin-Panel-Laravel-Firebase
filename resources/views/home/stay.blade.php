@extends('layouts.app')

@section('title', 'Minor page')

@section('content')
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-content">
                        <h3>Hotel Bookings</h3>

                        <div class="input-group">
                            <input type="text" placeholder="Add new hotel booking" class="input input-sm form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add Booking</button>
                            </span>
                        </div>

                        <ul class="sortable-list connectList agile-list" id="todo">
                            <li class="warning-element" id="task0">
                                Country - Canada
                                <br />
                                City - Ontario
                                <br />
                                Hotel - Ontario Plaza
                                <br />
                                Stars - 4
                                <br />
                                Room Type - Single deluxe
                                <br />
                                Cost - $360
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-danger">Expired</a>
                                    <i class="fa fa-clock-o"></i> 12.03.2019 - 17.03.2019
                                </div>
                            </li>
                            <li class="warning-element" id="task1">
                                Country - USA
                                <br />
                                City - New York
                                <br />
                                Hotel - Grand Canyon Hotel
                                <br />
                                Stars - 5
                                <br />
                                Room Type - Double standard
                                <br />
                                Cost - $540
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-primary">Done</a>
                                    <i class="fa fa-clock-o"></i> 04.04.2019 - 11.04.2019
                                </div>
                            </li>
                            <li class="success-element" id="task2">
                                Country - Netherlands
                                <br />
                                City - Amsterdam
                                <br />
                                Hotel - Cannabis Grand Resort Hotel
                                <br />
                                Stars - 5+
                                <br />
                                Room Type - President Lux
                                <br />
                                Cost - $2450
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-primary">Done</a>
                                    <i class="fa fa-clock-o"></i> 15.04.2019 - 18.04.2019
                                </div>
                            </li>
                            <li class="info-element" id="task3">
                                Country - Germany
                                <br />
                                City - Munich
                                <br />
                                Hotel - Ritz Carlton Munich
                                <br />
                                Stars - 5
                                <br />
                                Room Type - Appartment Lux
                                <br />
                                Cost - $1790
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-white">Waiting</a>
                                    <i class="fa fa-clock-o"></i> 03.05.2019 - 10.05.2019
                                </div>
                            </li>
                            <li class="danger-element" id="task4">
                                Country - Russia
                                <br />
                                City - Moscow
                                <br />
                                Hotel - Hyatt Place Ararat
                                <br />
                                Stars - 5
                                <br />
                                Room Type - Penthouse
                                <br />
                                Cost - $2499
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-white">Waiting</a>
                                    <i class="fa fa-clock-o"></i> 15.05.2019 - 18.05.2019
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-content">
                        <h3>Tours</h3>

                        <div class="input-group">
                            <input type="text" placeholder="Add new tour" class="input input-sm form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add Tour</button>
                            </span>
                        </div>

                        <ul class="sortable-list connectList agile-list" id="inprogress">
                            <li class="success-element" id="task0">
                                Country - Canada
                                <br />
                                City - Ontario
                                <br />
                                Agency - Canada Tour
                                <br />
                                Tour - Big Lakes
                                <br />
                                Cost - $160
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-danger">Expired</a>
                                    <i class="fa fa-clock-o"></i> 09:00 15.03.2019
                                </div>
                            </li>
                            <li class="warning-element" id="task1">
                                Country - USA
                                <br />
                                City - New York
                                <br />
                                Agency - Clinton service+
                                <br />
                                Tour - Old and Young NY
                                <br />
                                Cost - $200
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-primary">Done</a>
                                    <i class="fa fa-clock-o"></i> 10:00 05.04.2019
                                </div>
                            </li>
                            <li class="warning-element" id="task2">
                                Country - Netherlands
                                <br />
                                City - Amsterdam
                                <br />
                                Agency - Amsterdam with pleasure
                                <br />
                                Tour - Tour with clubs and shops:)
                                <br />
                                Cost - $700 (all inclusive)
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-primary">Done</a>
                                    <i class="fa fa-clock-o"></i> 13:00 16.04.2019 - 17.04.2019
                                </div>
                            </li>
                            <li class="danger-element" id="task3">
                                Country - Germany
                                <br />
                                City - Munich
                                <br />
                                Agency - Smile
                                <br />
                                Tour - Beer Tour
                                <br />
                                Cost - $90
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-white">Waiting</a>
                                    <i class="fa fa-clock-o"></i> 18:00 08.05.2019
                                </div>
                            </li>
                            <li class="info-element" id="task4">
                                Country - Russia
                                <br />
                                City - Moscow
                                <br />
                                Agency - Chay-Kofe-Potancuem
                                <br />
                                Tour - Kremlin
                                <br />
                                Cost - $40
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-white">Waiting</a>
                                    <i class="fa fa-clock-o"></i> 10:00 17.05.2019
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-content">
                        <h3>Concierge Service</h3>

                        <div class="input-group">
                            <input type="text" placeholder="Add new concierge service" class="input input-sm form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add Concierge</button>
                            </span>
                        </div>

                        <ul class="sortable-list connectList agile-list" id="completed">
                            <li class="danger-element" id="task4">
                                Country - Russia
                                <br />
                                City - Moscow
                                <br />
                                Service - Transfer from airport
                                <br />
                                Cost - $120
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-white">Waiting</a>
                                    <i class="fa fa-clock-o"></i> 03:00 15.05.2019
                                </div>
                            </li>
                            <li class="info-element" id="task16">
                                Country - Germany
                                <br />
                                City - Munich
                                <br />
                                Service - Flowers for Anna at her birthday
                                <br />
                                Cost - $160
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-primary">Done</a>
                                    <i class="fa fa-clock-o"></i> 09.05.2019
                                </div>
                            </li>
                            <li class="success-element" id="task20">
                                Country - USA
                                <br />
                                City - New York
                                <br />
                                Service - Table in best restaurant
                                <br />
                                Cost - $700
                                <div class="agile-detail">
                                    <a href="#" class="pull-right btn btn-xs btn-primary">Done</a>
                                    <i class="fa fa-clock-o"></i> 20:00 07.04.2019
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
