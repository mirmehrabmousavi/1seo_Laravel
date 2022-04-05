@extends('admin.layouts.app')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">اعلان ها</h4>
                    <button type="button" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light" onclick="window.location='{{route('admin.notif.create')}}'">افزودن</button>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">متن</th>
                                <th scope="col">تاریخ</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notification as $val)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$val->title}}</td>
                                    <td>{{$val->desc}}</td>
                                    <td>{{$val->created_at->toJalali()->formatDifference()}}</td>
                                    <td>
                                        <a href="{{route('admin.notif.show',['id' => $val->id])}}" class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light">نمایش</a>
                                        <a href="{{route('admin.notif.edit',['id' => $val->id])}}" class="btn bg-gradient-warning mr-1 mb-1 waves-effect waves-light">ویرایش</a>
                                        <a class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light" href="{{ route('admin.notif.delete',['id' => $val->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del').submit();">حذف</a>
                                        <form id="del" action="{{ route('admin.notif.delete',['id' => $val->id]) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
