@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-8" style="vertical-align: center">
                            {{trans('messages.welcome')}}{{ Auth::user()->name }}
                        </div>
                        <div class="col-lg-4" align="right">
                            <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                Logout</button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection
