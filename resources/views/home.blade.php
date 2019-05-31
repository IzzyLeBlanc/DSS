@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::check())
                    <!--<iframe width="1050" height="700" src="https://app.powerbi.com/view?r=eyJrIjoiM2UxZTJjMzEtZTAyZC00YWNlLTgxNzItNjZkNjVlYTcwMTc1IiwidCI6IjdhODU3ZTA5LWQ5YWQtNDNkMi04OTNlLTMyMTVkZGRkM2EzYiIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>-->
                    <iframe width="1070" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=ad72f088-e960-4f25-a996-8a50c037f283&groupId=1e6940c0-61d9-4371-b464-fc2d0cb8a2f6&autoAuth=true&ctid=7a857e09-d9ad-43d2-893e-3215dddd3a3b" frameborder="0" allowFullScreen="true"></iframe>
                    @else
                        Not logged in
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
