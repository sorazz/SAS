@extends('admin.layouts.master')

@section('search')
@include('admin.partials.search')
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="btn-group">
                    <form>
                        <input type="text" name="search" id="search" placeholder="Search">
                    </form>
                </div>
               
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header pagination-wrap">
                            <div class="pull-right page-status">
                                [ @if($models->total() > 0){{ $models->firstItem() }} to {{ $models->lastItem() }} @endif ] {{ $models->total() }} Total Records
                            </div>
                            <div class="pull-left">
                                <div class="btn-group">
                                    {{ $models->render() }}
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="sortable" class="table table-striped table-hover todo-list ui-sortable">
                                <thead>
                                    <tr class="nodrag nodrop">
                                        <th><span class="handle"><i class="fa fa-arrows"></i></span></th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="itemList">
                                    @include('admin.dashboard.list', ['models' => $models])
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="box-tools">
                                <div class="pull-right page-status">
                                    [ @if($models->total() > 0){{ $models->firstItem() }} to {{ $models->lastItem() }} @endif ] {{ $models->total() }} Total Records
                                </div>
                                <div class="pull-left">
                                    <div class="btn-group">
                                        @if(sizeof($models) == 0)
                                        No records found
                                        @endif
                                        {{ $models->render() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')

<script>
    $(document).ready(function() {
        $("#search").keyup(function() {
            var $value = $(this).val();
            $.ajax({
                type: 'get',
                url: "{{ URL::to('admin/contact') }}",
                data: {
                    'search': $value
                },
                success: function(data) {
                    if (data.success) {
                        console.log('apple')
                        updateTable(data.data.models.data);
                        // Update pagination and status information
                        var pageStatus = $('.page-status');
                        var btnGroup = $('.btn-group');
                         console.log('data.data.models.total',data.data.models.total)
                        if (data.data.models.total > 0) {
                            pageStatus.html('[ ' + data.data.models.data[0].id + ' to ' + data.data.models.data[data.data.models.data.length - 1].id + ' ] ' + data.data.models.total + ' Total Records');

                            btnGroup.html(data.pagination);
                        } else {
                            pageStatus.html('No records found');
                        }
                    }
                }
            });
        });

        function updateTable(items) {
            var tableBody = $('#itemList');
            tableBody.empty(); // Clear existing table rows


            $.each(items, function(index, item) {
                console.log('0items', item.title);

                var row = $('<tr id="' + item.id + '">');
                row.append('<td class="move"><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span></td>');
                row.append('<td class="item-title"><a href="/admin/service/' + item.id + '/edit">' + item.title + '</a></td>');
                row.append('<td>' + item.updated_at + '</td>');
                row.append('<td>' + (item.status === 1 ? 'Active' : 'Inactive') + '</td>');
                row.append('<td><a style="margin-right:10px;" href="/admin/service/' + item.id + '/edit"><i class="fa fa-edit"></i>Edit</a><a href="javascript:void(0);" id="' + item.id + '" class="delete-data delete-item"><i class="fa fa-trash-o"></i>Delete</a></td>');

                tableBody.append(row);
            });

        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.delete-data').click(function(e) {
            var con = confirm('Are you sure to delete ?');
            if (con == true) {
                var id = $(this).attr('id');
                $.get(
                    'contact/delete', {
                        id: id,
                        _token: '{!! csrf_token() !!}'
                    },
                    function(result) {
                        location.reload();
                    }
                );
            }
        });
    });
    $(document).on('click', '.delete-item', function(e) {
        var con = confirm('Are you sure to delete?');
        if (con == true) {
            var id = $(this).attr('id');
            $.post(
                'contact/delete', {
                    id: id,
                    _token: '{!! csrf_token() !!}'
                },
                function(result) {
                    location.reload();
                }
            );
        }
    });
</script>
@endpush