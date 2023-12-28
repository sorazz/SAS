//$(document).ready(function () {
//    $('.tools a.delete-data').click(function (e) {
//        var con = confirm('Are you sure to delete ?');
//        if (con == true) {
//            var id = [$(this).attr('id')];
//            var title = $(this).attr('title');
//            $.ajaxSetup({
//            headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//            });
//            $.ajax({ 
//                type: "POST", 
//                url: title+"/delete", 
//                data: {ids:id},
//                success: function(result) {
//                    location.reload();
//                }
//            });
//        }
//    });
//});
//$(document).ready(function () {
//    $('.form-image a.delete_image').click(function (e) {
//        var con = confirm('Are you sure to delete this image ?');
//        if (con == true) {
//            var id = $(this).attr('id');
//            $.post(
//                "ajax/delete-image"
//                , {id: id, table: 'banners', _token: '{!! csrf_token() !!}'}
//            );
//        }
//    });
//});

