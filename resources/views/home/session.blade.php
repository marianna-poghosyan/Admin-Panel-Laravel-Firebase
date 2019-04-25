@extends('layouts.app')

@section('title', 'Minor page')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Past and Future Events</h5>
                        <div class="ibox-tools">
                            <a href="" class="btn btn-primary btn-xs">Create new event</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-1">
                                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm" ><i class="fa fa-refresh"></i> Refresh</button>
                            </div>
                            <div class="col-md-11">
                                <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                            </div>
                        </div>

                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Contract with Zender Company</a>
                                        <br/>
                                        <small>Date 14.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">There are many variations of passages</a>
                                        <br/>
                                        <small>Date 11.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">Upcoming</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Many desktop publishing packages and web</a>
                                        <br/>
                                        <small>Date 10.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 8%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Letraset sheets containing</a>
                                        <br/>
                                        <small>Date 22.07.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 83%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 83%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Contrary to popular belief</a>
                                        <br/>
                                        <small>Date 14.07.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 97%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 97%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Contract with Zender Company</a>
                                        <br/>
                                        <small>Date 14.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">There are many variations of passages</a>
                                        <br/>
                                        <small>Date 11.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">Upcoming</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Many desktop publishing packages and web</a>
                                        <br/>
                                        <small>Date 10.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 8%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Letraset sheets containing</a>
                                        <br/>
                                        <small>Date 22.07.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 83%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 83%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">Contrary to popular belief</a>
                                        <br/>
                                        <small>Date 14.07.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 97%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 97%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-success">Passed</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">There are many variations of passages</a>
                                        <br/>
                                        <small>Date 11.08.2019</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>Success: 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
