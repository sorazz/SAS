$(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.box-body input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
        var clicks = $(this).data('clicks');
        if (clicks) {
            //Uncheck all checkboxes
            $(".box-body input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
        } else {
            //Check all checkboxes
            $(".box-body input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
        }
        $(this).data("clicks", !clicks);
    });
});

checked = false;
function toggleSelect()
{
    var frm = document.getElementById('frmListing');
    if (checked == false)
    {
        checked = true
    } else
    {
        checked = false
    }
    for (var i = 0; i < frm.elements.length; i++)
    {
        if (frm.elements[i].disabled != true)
        {
            frm.elements[i].checked = checked;
        }
    }
}

function actionConfirm(action, task)
{
    if (count_checked() == 0)
    {
        alert('Please select data.');
        return false;
    }

    job = confirm("Are you sure to " + task + "?");
    if (job == true)
    {
        document.getElementById('frmListing').action = action;
        document.getElementById('frmListing').submit();
    } else
    {
        return false;
    }
}

function actionSubmit(action)
{

    if (count_checked() == 0)
    {
        alert('Please select data.');
        return false;
    }
    document.getElementById('frmListing').action = action;
    document.getElementById('frmListing').submit();
}

function count_checked()
{
    return [].slice.call(document.querySelectorAll("[name='ids[]']")).filter(function (e) {
        return e.checked;
    }).length;
}

function updateAction(action)
{
    document.getElementById('frm').action = action;
    document.getElementById('frm').submit();
}