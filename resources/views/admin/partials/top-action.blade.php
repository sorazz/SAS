<div class="pull-right">
    <a href="{{ URL::to('admin/'.Request::segment(2).'/create') }}">
        <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Create</button>
    </a>
    <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm">Action</button>
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="javascript:void(0);" onclick="return actionSubmit('{!! Request::segment(2) !!}/update-status/1');"><i class="fa fa-circle-o text-green"></i>Active</a></li>
            <li><a href="javascript:void(0);" onclick="return actionSubmit('{!! Request::segment(2) !!}/update-status/0');"><i class="fa fa-circle-o text-gray"></i>Inactive</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0);" onclick="return actionConfirm('{!! Request::segment(2) !!}/delete', 'Delete');"><i class="fa fa-trash-o text-red"></i>Delete</a></li>
        </ul>
    </div>
</div>
