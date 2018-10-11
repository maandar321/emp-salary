@extends('layouts.master')
@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form method="post" action="{{url('leave/submit')}}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Leave Type</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="leaveType" value="medical" data-parsley-multiple="gender"> &nbsp; Medical &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="leaveType" value="casual" data-parsley-multiple="gender"> Casual
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Start Date <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker2">
                            <input type="text" class="form-control" name="start date">
                            <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">End Date <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker3">
                            <input type="text" class="form-control" name="end date">
                            <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                        <div class="checkbox  ">
                            <label class="col-md-6 col-sm-6 col-xs-12">
                                <input name="half_day"  type="checkbox" value="1"> Half Day
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reason <span class="required">*</span>
                    </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="form-control" rows="10" name="text" ></textarea>
                </div>
                </div>



                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('scripts')

    <script>

        $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        $('#myDatepicker3').datetimepicker({
            format: 'DD.MM.YYYY'
        });


    </script>

@endsection