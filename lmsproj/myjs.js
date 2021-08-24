function get_record() {
    $(document).on('click', '#btn_edit', function () {
        var t_ID = $(this).attr('data-id');
        console.log(t_ID);
    })
}