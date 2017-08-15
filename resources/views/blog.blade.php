@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title truncate">Title asdfa blah blah ..</h3>
                    <!-- Watch Out: Here We must use the effect name in the data tag-->
                    <span class="pull-right">
                        <span class="clickable" data-effect="fadeOut"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                        <span class="clickable" data-effect="fadeOut"><i class="fa fa-times"></i></span>
                    </span>
                </div>
                <div class="panel-body">
                    Welcome to the world!
                </div>
                <div class="panel-footer">
                    boo@boo.bee
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title truncate">Title asdfa blah blah ..</h3>
                    <!-- Watch Out: Here We must use the effect name in the data tag-->
                    <span class="pull-right">
                        <span class="clickable" data-effect="fadeOut"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                        <span class="clickable" data-effect="fadeOut"><i class="fa fa-times"></i></span>
                    </span>
                </div>
                <div class="panel-body">
                    Welcome to the world!
                </div>
                <div class="panel-footer">
                    boo@boo.bee
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Create</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Title:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="message">Message:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="message" placeholer="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-offset-2 col-sm-10">
                                <!-- Split button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary">Select User</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">User1</a></li>
                                        <li><a href="#">User2</a></li>
                                        <li><a href="#">User3</a></li>
                                    </ul>
                                </div>
                                <button role="submit" type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
