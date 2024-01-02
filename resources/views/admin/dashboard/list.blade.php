@foreach ($models as $m)
<tr id="{{ $m->id }}">
    <td class="move">
        <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
        </span>
    </td>
    <td class="item-title">{{ $m->fname }} </td>
    <td class="item-title">{{ $m->lname }} </td>
    <td class="item-title">{{ $m->email }} </td>
    <td class="item-title">{{ $m->phone }} </td>
    <td class="item-title">{{ $m->address }} </td>
    <td>{{ $m->updated_at->format('y-m-d') }}</td>
    <td>
        <a href="javascript:void(0);" id="{{ $m->id }}" class="delete-data"><i class="fa fa-trash-o"></i>Delete</a>
    </td>
</tr>
@endforeach