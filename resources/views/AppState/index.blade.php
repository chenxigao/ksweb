@extends('AppState.StateIndex')
@section('content')

    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>AppState 后台管理系统</h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('play.update') }}" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 同时播放
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <table id="tags-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="hidden-md">设备编号</th>
                        <th class="hidden-md">APP 名称</th>
                        <th class="hidden-md">状态</th>
                        <th class="hidden-md">音量</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appStates as $appState)
                        <tr>
                            <td class="hidden-md">{{ $appState->device->device_code }}</td>
                            <td class="hidden-md">{{ $appState->app_name }}</td>
                            <td class="hidden-md">{{ ($appState->current_state) }}</td>
                            <td class="hidden-md">{{ $appState->request_volumn }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

@endsection
