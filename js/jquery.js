$(function () {
    sort();
});

function sort() {

    $(document).on('click', '#rastuce', function () {

        $.ajax({
            url: 'sort.php',
            method: 'post',
            data: { sort: $(this).attr('value') },

            success: function (sortedRows) {
                $('tbody').html(sortedRows);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })

    });

    $(document).on('click', '#opadajuce', function () {

        $.ajax({
            url: 'sort.php',
            method: 'post',
            data: { sort: $(this).attr('value') },

            success: function (sortedRows) {
                $('tbody').html(sortedRows);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })

    })
} 
