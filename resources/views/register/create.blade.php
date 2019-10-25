@extends('layouts.app')
@section('title', '注册')

@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card ">
        <div class="card-header">
            <h5>注册</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="device_code">手机编号：</label>
                    <input type="text" name="device_code" class="form-control" value="{{ old('device_code') }}"/>
                </div>

                <div class="form-group">
                    <label for="device_sn">手机 SN ：</label>
                    <input type="text" name="device_sn" class="form-control" value="{{ old('device_sn') }}"/>
                </div>

                <button type="submit" class="btn btn-primary">注册</button>
            </form>
        </div>
    </div>
</div>
@stop
