@foreach ($models as $m)
<tr id="{{ $m->id }}">
    <td class="move">
        <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
        </span>
    </td>
    <td class="item-title"><a href="{{ URL::to('admin/project', ['id'=>$m->id,'edit']) }}">{{ $m->name }}</a>

    </td>
    <td>{{ $m->updated_at->format('y-m-d') }}</td>
    <td>{!! $status[$m->status] !!}</td>
    <td>
        <a style="margin-right:10px ;" href="{{ URL::to('admin/project', ['id'=>$m->id, 'edit']) }}"><i class="fa fa-edit"></i>Edit</a>
        <a href="javascript:void(0);" id="{{ $m->id }}" class="delete-data delete-list"><i class="fa fa-trash-o"></i>Delete</a>
    </td>
</tr>
@endforeach
