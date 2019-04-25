@extends('layouts.app')

@section('title', 'Visa page')

@section('content')
    <div class="alert alert-success">
        Your current visa status is <a class="alert-link" href="#">Active</a>.
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Apply for a new visa</h5>
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
                        <h2>
                            New Visa Applying Form
                        </h2>
                        <p>
                            Fill all fields and follow the steps
                        </p>

                        <form id="form" action="#" class="wizard-big">
                            <h1>Account</h1>
                            <fieldset>
                                <h2>Verification</h2>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Username *</label>
                                            <input id="userName" name="userName" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input id="password" name="password" type="password" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password *</label>
                                            <input id="confirm" name="confirm" type="password" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <div style="margin-top: 20px">
                                                <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <h1>Profile</h1>
                            <fieldset>
                                <h2>Profile Information</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>First name *</label>
                                            <input id="name" name="name" type="text" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Last name *</label>
                                            <input id="surname" name="surname" type="text" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input id="email" name="email" type="text" class="form-control required email">
                                        </div>
                                        <div class="form-group">
                                            <label>Address *</label>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h1>Warning</h1>
                            <fieldset>
                                <div class="text-center" style="margin-top: 120px">
                                    <h2>You did it Man :-)</h2>
                                </div>
                            </fieldset>

                            <h1>Finish</h1>
                            <fieldset>
                                <h2>Terms and Conditions</h2>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
