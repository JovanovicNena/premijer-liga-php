$(function () {
    sort();
    search();
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


function search() {

    $(document).on('keyup', '#i-search', function () {

        $.ajax({
            url: 'search.php',
            method: 'post',
            data: { ime: this.value },

            success: function (searchResult) {
                $('tbody').html(searchResult);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })

    });


}
