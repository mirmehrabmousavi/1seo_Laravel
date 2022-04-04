@extends('admin.layouts.app')


@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">تیکت ها</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        @if ($tickets->isEmpty())
                            <p>تیکت وجود ندارد</p>
                        @else
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">دسته بندی</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">آخرین ویرایش</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{ $ticket->category_id }}</td>
                                        <td><a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                                #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                            </a></td>
                                        <td>@if ($ticket->status === 'باز است')
                                                <div class="badge pill-badge badge-success">{{ $ticket->status }}</div>
                                            @else
                                                <div class="badge pill-badge badge-danger">{{ $ticket->status }}</div>
                                            @endif</td>
                                        <td>{{$ticket->updated_at->diffForHumans()}}</td>
                                        <td>
                                            @if($ticket->status === 'باز است')
                                                <a href="{{ url('tickets/' . $ticket->ticket_id) }}"
                                                   class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">کامنت</a>
                                                <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}"
                                                      method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">بستن</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket"> Tickets</i>
                </div>
                <div class="panel-body">
                    @if ($tickets->isEmpty())
                        <p>There are currently no tickets.</p>
                    @else
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Last Updated</th>
                                <th style="text-align:center" colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>
                                        {{ $ticket->category->name }}
                                    </td>
                                    <td>
                                        <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($ticket->status === 'Open')
                                            <span class="label label-success">{{ $ticket->status }}</span>
                                        @else
                                            <span class="label label-danger">{{ $ticket->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $ticket->updated_at }}</td>
                                    <td>
                                        @if($ticket->status === 'Open')
                                            <a href="{{ url('tickets/' . $ticket->ticket_id) }}"
                                               class="btn btn-primary">Comment</a>
                                            <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}"
                                                  method="POST">
                                                {!! csrf_field() !!}
                                                <button type="submit" class="btn btn-danger">Close</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tickets->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection--}}
