$(document).ready(function () {
    $('.delete-image').on('click', function () {
        var parent_tr = $(this).closest('tr');
        var image_id = $(this).attr('data-image_id');
        var param = $('meta[name=csrf-param]').attr("content");
        var token = $('meta[name=csrf-token]').attr("content");
        var data = {};
        data[param] = token;
        data['image_id'] = image_id;

        $.ajax({
            url: '/news/delete-image',
            type: 'POST',
            data: data,
            error: function (error) {
            }
        }).done(function (result) {
            window.console.log(parent_tr);
            parent_tr.fadeOut();
        });
    });


    $('.set-main-image').on('click', function () {
        var parent_tr = $(this).closest('tr');
        var main_image_id = $(this).attr('data-main_image_id');
        var model_id = $(this).attr('data-model_id');
        var param = $('meta[name=csrf-param]').attr("content");
        var token = $('meta[name=csrf-token]').attr("content");
        var data = {};
        data[param] = token;
        data['main_image_id'] = main_image_id;
        data['model_id'] = model_id;

        $.ajax({
            url: '/news/set-main-image',
            type: 'POST',
            data: data,
            error: function (error) {
            }
        }).done(function (result) {
            window.location.reload();
        });
    });

});