@extends('layouts.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Employee</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                <tr>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Half Day</th>
                    <th>Reason</th>
                    <th>Approved</th>
                    <th>Canceled</th>
                    <th>Status</th>
                    <th>Approved By</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @if(count($leaves))
                    @foreach($leaves as $value)
                        <tr>
                            <td>{{$value->leave_type}}</td>
                            <td>{{$value->start_date}}</td>
                            <td>{{$value->end_date}}</td>
                            @if($value->half_day == 1)
                                <td>Half day leave</td>
                            @else
                                <td>Full day leave</td>
                            @endif
                            <td>{{$value->text}}</td>
                            @if($value->is_approved == 1 )
                                <td>Approved</td>
                            @else
                                <td>Not Approved</td>
                            @endif
                            @if($value->is_canceled == 1)
                              <td>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-{{$value->id}}">Reason</button>

                                  <div class="modal fade bs-example-modal-sm" id="modal-{{$value->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Reason of rejection</h4>
                                                <p>{{$value->reject_notes}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                              </td>
                            @else
                                <td></td>
                            @endif
                            @if($value->status == 0)
                                <td>Team Lead</td>
                            @elseif($value->status == 1)
                                <td>Project Manager</td>
                            @else
                                <td>HR Manager</td>
                            @endif
                            <td>{{$value->approved_by}}</td>




                        </tr>

                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>



@endsection