<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> {{ App::VERSION() }}
    </div>
    <strong>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} <a href="{{url('/')}}" target="_blank">SAS</a>.</strong> All rights
    reserved.
</footer>