@extends('layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row m-b-lg m-t-lg">
            <div class="col-md-6">

                <div class="profile-image">
                    <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="profile-info">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                Abdullah Alaudah
                            </h2>
                            <h4>Founder of Groupeq</h4>
                            <small>
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form Ipsum available.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table small m-b-xs">
                    <tbody>
                    <tr>
                        <td>
                            <strong>8</strong> Airline Bookings
                        </td>
                        <td>
                            <strong>12</strong> Hotel Booking
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <strong>14</strong> Internal Shuttle
                        </td>
                        <td>
                            <strong>54</strong> Uber/Careem
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>6</strong> Tours
                        </td>
                        <td>
                            <strong>32</strong> Friends
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <small>Total Spent</small>
                <h2 class="no-margins">206 480</h2>
                <div id="sparkline1"></div>
            </div>


        </div>
        <div class="row">

            <div class="col-lg-3">

                <div class="ibox">
                    <div class="ibox-content">
                        <h3>About Abdullah Alaudah</h3>

                        <p class="small">
                            Country - USA
                            <br/>
                            Nationality - Armenian
                            <br/>
                            Birthday - 01.01.1984
                            <br/>
                        </p>

                        <p class="small font-bold">
                            Status - <span><i class="fa fa-circle text-navy"></i> Active</span>
                        </p>

                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-content">
                        <h3>Friends and Contacts</h3>
                        <div class="user-friends">
                            <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a8.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                            <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                        </div>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-content">
                        <h3>Documents</h3>
                        <ul class="list-unstyled file-list">
                            <li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
                            <li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                            <li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                            <li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                            <li><a href=""><i class="fa fa-file-powerpoint-o"></i> Presentation.pptx</a></li>
                            <li><a href=""><i class="fa fa-file"></i> 10_08_2015.docx</a></li>
                        </ul>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-content">
                        <h3>Private message</h3>

                        <p class="small">
                            Send private message to Abdullah Alaudah
                        </p>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="email" class="form-control" placeholder="Message subject">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary btn-block">Send</button>

                    </div>
                </div>

            </div>

            <div class="col-lg-5">

                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Sector of interests</h5>
                    </div>

                    <div class="ibox-content">

                        <div class="stream-small">
                            <span class="label label-primary"> Airline Book</span>
                            <span class="text-muted"> Today at 10:30:50 pm </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-success"> Food reservation</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-success"> Food reservation</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-success"> Food reservation</span>
                            <span class="text-muted"> Today at 11:43:59 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-primary"> Airline Book</span>
                            <span class="text-muted"> Yesterday at 10:02:33 pm </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Yesterday at 10:32:12 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 11:43:59 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Yesterday at 10:32:12 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Yesterday at 10:32:12 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-success"> Food reservation</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-success"> Food reservation</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-success"> Food reservation</span>
                            <span class="text-muted"> Today at 11:43:59 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Yesterday at 10:32:12 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-warning"> Tours</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 11:43:59 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Yesterday at 10:32:12 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 04:30:33 am </span> - <strong>$865</strong>
                        </div>
                        <div class="stream-small">
                            <span class="label label-default"> Uber/Careem</span>
                            <span class="text-muted"> Today at 08:10:50 am </span> - <strong>$865</strong>
                        </div>

                    </div>
                </div>




            </div>
            <div class="col-lg-4 m-b-lg">
                <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Meeting</h2>
                            <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the sale.
                            </p>
                            <a href="#" class="btn btn-sm btn-primary"> More info</a>
                            <span class="vertical-date">
                                        Today <br>
                                        <small>Dec 24</small>
                                    </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon blue-bg">
                            <i class="fa fa-file-text"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Send documents to Mike</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            <a href="#" class="btn btn-sm btn-success"> Download document </a>
                            <span class="vertical-date">
                                        Today <br>
                                        <small>Dec 24</small>
                                    </span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon lazur-bg">
                            <i class="fa fa-coffee"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Coffee Break</h2>
                            <p>Go to shop and find some products. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. </p>
                            <a href="#" class="btn btn-sm btn-info">Read more</a>
                            <span class="vertical-date"> Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon yellow-bg">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Phone with Jeronimo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div>

                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-comments"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Chat with Monica and Sandra</h2>
                            <p>Web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                            <span class="vertical-date">Yesterday <br><small>Dec 23</small></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="wrapper wrapper-content animated fadeInRight">


                <div class="row">
                    <div class="col-md-4">
                        <div class="payment-card">
                            <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                            <h2>
                                **** **** **** 1060
                            </h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <small>
                                        <strong>Expiry date:</strong> 10/16
                                    </small>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <small>
                                        <strong>Name:</strong> David Williams
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-card">
                            <i class="fa fa-cc-mastercard payment-icon-big text-warning"></i>
                            <h2>
                                **** **** **** 7002
                            </h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <small>
                                        <strong>Expiry date:</strong> 10/16
                                    </small>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <small>
                                        <strong>Name:</strong> Anna Smith
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="payment-card">
                            <i class="fa fa-cc-discover payment-icon-big text-danger"></i>
                            <h2>
                                **** **** **** 3466
                            </h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <small>
                                        <strong>Expiry date:</strong> 10/16
                                    </small>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <small>
                                        <strong>Name:</strong> Morgan Stanch
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-12">

                        <div class="ibox">
                            <div class="ibox-title">
                                Payment method
                            </div>
                            <div class="ibox-content">

                                <div class="panel-group payments-method" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="pull-right">
                                                <i class="fa fa-cc-paypal text-success"></i>
                                            </div>
                                            <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">PayPal</a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <h2>Summary</h2>
                                                        <strong>Product:</strong>: Name of product <br/>
                                                        <strong>Price:</strong>: <span class="text-navy">$452.90</span>

                                                        <p class="m-t">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                            nisi ut aliquip ex ea commodo consequat.

                                                        </p>

                                                        <a class="btn btn-success">
                                                            <i class="fa fa-cc-paypal">
                                                                Purchase via PayPal
                                                            </i>
                                                        </a>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="pull-right">
                                                <i class="fa fa-cc-amex text-success"></i>
                                                <i class="fa fa-cc-mastercard text-warning"></i>
                                                <i class="fa fa-cc-discover text-danger"></i>
                                            </div>
                                            <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Credit Card</a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in">
                                            <div class="panel-body">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h2>Summary</h2>
                                                        <strong>Product:</strong>: Name of product <br/>
                                                        <strong>Price:</strong>: <span class="text-navy">$452.90</span>

                                                        <p class="m-t">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                            nisi ut aliquip ex ea commodo consequat.

                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor
                                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                            nulla pariatur. Excepteur sint occaecat cupidatat.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-8">

                                                        <form role="form" id="payment-form">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>CARD NUMBER</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" name="Number" placeholder="Valid Card Number" required />
                                                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-7 col-md-7">
                                                                    <div class="form-group">
                                                                        <label>EXPIRATION DATE</label>
                                                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY"  required/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5 col-md-5 pull-right">
                                                                    <div class="form-group">
                                                                        <label>CV CODE</label>
                                                                        <input type="text" class="form-control" name="CVC" placeholder="CVC"  required/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>NAME OF CARD</label>
                                                                        <input type="text" class="form-control" name="nameCard" placeholder="NAME AND SURNAME"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <button class="btn btn-primary" type="submit">Make a payment!</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>






                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        {{--</div>--}}
        {{--<div class="wrapper wrapper-content">--}}
            {{--<div class="row">--}}
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content">

                            <h2>Gallery of your activity</h2>

                            <div class="lightBoxGallery">
                                <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/1s.jpg"></a>
                                <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/2s.jpg"></a>
                                <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/3s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/6s.jpg"></a>
                                <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/7s.jpg"></a>
                                <a href="img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/8s.jpg"></a>
                                <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/9s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/6s.jpg"></a>
                                <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/7s.jpg"></a>
                                <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/2s.jpg"></a>
                                <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/3s.jpg"></a>
                                <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/1s.jpg"></a>
                                <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/9s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/11s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/6s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/1s.jpg"></a>
                                <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/2s.jpg"></a>
                                <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/3s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/6s.jpg"></a>
                                <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/7s.jpg"></a>
                                <a href="img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/8s.jpg"></a>
                                <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/9s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/11s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/6s.jpg"></a>
                                <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/7s.jpg"></a>
                                <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/2s.jpg"></a>
                                <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/3s.jpg"></a>
                                <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/1s.jpg"></a>
                                <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/9s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/11s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/7s.jpg"></a>
                                <a href="img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/8s.jpg"></a>
                                <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/9s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/11s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/6s.jpg"></a>
                                <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/12s.jpg"></a>
                                <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/4s.jpg"></a>
                                <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/5s.jpg"></a>
                                <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/10s.jpg"></a>
                                <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img src="img/gallery/11s.jpg"></a>

                                <!-- The Gallery as lightbox dialog, should be a child element of the document body -->


                            </div>

                        </div>
                    </div>
                </div>

            {{--</div>--}}
        </div>

    </div>
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
@endsection
