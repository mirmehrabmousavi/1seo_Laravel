@extends('admin.layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">اعلان #{{$notif->id}}</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <tbody>
                            <tr>
                                <td>{{$notif->title}}</td>
                            </tr>
                            <tr>
                                <td>{{$notif->desc}}</td>
                            </tr>
                            <tr>
                                <td>{{$notif->created_at->toJalali()->formatDifference()}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light" onclick="window.location='{{ route('admin.notification') }}'">بازگشت</button>
@endsection
