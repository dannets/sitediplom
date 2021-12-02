
/*
    Добавление товара в корзину
 */

$('.add-item-cart-btn').click(function (e) {
    e.preventDefault();

	   let name_itemcart = e.target.name;
     let id_itemdel2 = e.target.id;
     let url_func2;

     if (id_itemdel2 == "add-item-cart-btn") {
       url_func2 = "vendor/addcart.php";
     } else {
       url_func2 = "vendor/addcartsession.php";
     }

    let formItems_cart = new FormData();
    formItems_cart.append('name_itemcart', name_itemcart);

    $.ajax({
        url: url_func2,
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formItems_cart,
        success (data) {

            if (data.status) {
              Showbutton_cart();
				alert("Товар добавлен");
            } else {
				alert('sdds');
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

            }

        }
    });

});



function Showbutton_cart() {
  $('.add-item-cart-btn').hide();
  $('.link-item-cart-btn').show();
}


/*
    Удаление товара из корзины
 */

$('.delete-item-cart-btn').click(function (e) {
    e.preventDefault();

	let name_itemdel = e.target.name;
  let id_itemdel = e.target.id;
  let url_func;

  if (id_itemdel == "delete-item-cart-btn-session") {
    url_func = "vendor/deleteitem_cartsession.php";
  } else {
    url_func = "vendor/deleteitem_cart.php";
  }
    let formItems_del = new FormData();
    formItems_del.append('name_itemdel', name_itemdel);

    $.ajax({
        url: url_func,
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formItems_del,
        success (data) {
            if (data.status) {
				document.location.href = 'cart.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                    });
                }

            }

        }
    });

});



/*
    Добавление одного товара в корзине
 */

 $('.one-item-cart-btn-add').click(function (e) {
     e.preventDefault();

 	   let name_itemcart = e.target.name;
      let id_itemdel2 = e.target.id;
      let url_func2;

      if (id_itemdel2 == "one-item-cart-btn-add-sess") {
        url_func2 = "vendor/addcartsession.php";
      } else {
        url_func2 = "vendor/addcart.php";
      }

     let formItems_cart = new FormData();
     formItems_cart.append('name_itemcart', name_itemcart);
     $.ajax({
         url: url_func2,
         type: 'POST',
         dataType: 'json',
         processData: false,
         contentType: false,
         cache: false,
         data: formItems_cart,
         success (data) {

             if (data.status) {
 				alert("Товар добавлен");
        document.location.href = 'cart.php';
             } else {
               alert(data["message"]);
                 if (data.type === 1) {
                     data.fields.forEach(function (field) {
                     });
                 }

             }

         }
     });

 });


 /*
     Удаление товара из корзины по одному
  */

 $('.one-item-cart-btn-del').click(function (e) {
     e.preventDefault();

 	let name_itemdel = e.target.name;
   let id_itemdel = e.target.id;
   let url_func;

   if (id_itemdel == "one-item-cart-btn-del-sess") {
     url_func = "vendor/deleteitem_cartsess_one.php";
   } else {
     url_func = "vendor/deleteitem_cart_one.php";
   }
     let formItems_del = new FormData();
     formItems_del.append('name_itemdel', name_itemdel);

     $.ajax({
         url: url_func,
         type: 'POST',
         dataType: 'json',
         processData: false,
         contentType: false,
         cache: false,
         data: formItems_del,
         success (data) {
             if (data.status) {
               alert(data['message']);
               alert("Товар удален");
 				       document.location.href = 'cart.php';
             } else {
                 if (data.type === 1) {
                     data.fields.forEach(function (field) {
                     });
                 }

             }

         }
     });

 });
