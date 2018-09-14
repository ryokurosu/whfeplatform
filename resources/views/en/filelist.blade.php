@extends('en.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">[管理者]FILE MANAGE</div>

                <div class="panel-body">
                 <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">FILE NAME</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    @php
                    $temp = explode('/',$file);
                    $filename = $temp[count($temp) - 1];
                    @endphp
                    <tr>
                        <td>{{$filename}}</td>
                        <td><a class="btn btn-danger" href="{{url('file/delete/'.$filename)}}" onclick="return confirm('this file will be deleted.confirm.')">DELETE</a></td>
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
