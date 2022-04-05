@extends('layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">اعلان ها</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        @if ($notif->isEmpty())
                            <p>اعلان وجود ندارد</p>
                        @else
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">متن پیام</th>
                                    <th scope="col">آخرین ویرایش</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notif as $val)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td> {{ $val->title }}</td>
                                        <td> {{ $val->desc }}</td>
                                        <td>{{$val->created_at->toJalali()->formatDifference()}}</td>
                                        <td>
                                            <a href="{{route('show.notif',['url' => $url,'id' => $val->id])}}"
                                               class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">نمایش</a>
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
