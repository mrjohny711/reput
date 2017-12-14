<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
@show
<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">
        @include('layouts.partials.mainheader')
    </div>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @include('flash::message')
            @yield('content')
        </section>
    </div>

</div>

@section('scripts')
    <!-- Scripts -->
    @include('layouts.partials.scripts')

@endsection


</body>
</html>
