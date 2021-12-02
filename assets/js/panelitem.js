/*
    Получение аватарки с поля
 */

let image_item = false;

$('input[name="image_item"]').change(function (e) {
    image_item = e.target.files[0];
});

/*
    Добавление товара
 */

$('.panel-btn').click(function (e) {
    e.preventDefault();

    let name_item = $('input[name="name_item"]').val(),
        price = $('input[name="price"]').val(),
        catt = $('select[name="catt"]').val(),
        catt2 = $('select[name="catt2"]').val(),
		info_item = $('input[name="info_item"]').val();

    let formItems = new FormData();
    formItems.append('name_item', name_item);
    formItems.append('price', price);
    formItems.append('catt', catt);
    formItems.append('catt2', catt2);
	formItems.append('info_item', info_item);
	formItems.append('image_item', image_item);


    $.ajax({
        url: 'vendor/additem.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formItems,
        success (data) {

            if (data.status) {
				$('input[name="name_item"]').val("");
				$('input[name="price"]').val("");
				$('input[name="catt"]').val("");
        $('input[name="catt2"]').val("");
				$('input[name="info_item"]').val("");
				$('input[name="image_item"]').val("");
                /*document.location.href = 'panel.php';*/
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg-prov').removeClass('none').text(data.message);
				$('.msg-prov').show()

            }

        }
    });

});

$it = 1;

/*
    Переключение таблицы далее
 */

$('.table-btn-next').click(function (e) {
    e.preventDefault();

	if($(".list-table"+($it+1)).is(":hidden") && $(".list-table"+$it).is(":visible")){
      $(".list-table"+$it).hide();
      $(".list-table"+($it+1)).show();
	  $it = $it + 1;
    }


});

/*
    Переключение таблицы назад
 */

$('.table-btn-back').click(function (e) {
    e.preventDefault();

	if($(".list-table"+($it-1)).is(":hidden") && $(".list-table"+$it).is(":visible")){
      $(".list-table"+$it).hide();
      $(".list-table"+($it-1)).show();
	  $it = $it - 1;
    }

});

/*
    Удаление товара в таблице
 */

$('.delete-item-tab').click(function (e) {
    e.preventDefault();

	let name_citem = e.target.name;

    let formItems_name = new FormData();
    formItems_name.append('name_citem', name_citem);

    $.ajax({
        url: 'vendor/deleteitem.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formItems_name,
        success (data) {

            if (data.status) {
				document.location.href = 'panel.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

            }

        }
    });

});
