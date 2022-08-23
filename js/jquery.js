$(function () {
    sort();
    search();
    save();
    deletePlayer();
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

function save() {

    $(document).on('click', '#button-save-player', function () {

        $.ajax({
            url: '../save.php',
            method: 'post',
            data: {
                ime: $('#ime').val(),
                prezime: $('#prezime').val(),
                godine: $('#godine').val(),
                broj: $('#broj').val(),
                klub: $('#klub').val(),
                broj_golova: $('#broj_golova').val()
            },
            success: function () {
                alert("New player added!");
                window.history.back();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })
    })

}

function deletePlayer() {

    $(document).on('click', '#delete_player', function () {

        $.ajax({
            url: 'delete.php',
            method: 'post',
            data: {
                ID: $(this).attr('value')
            },
            success: function (data) {
                alert("Player deleted!");
                window.location.href = "index.php";
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })
    })
}