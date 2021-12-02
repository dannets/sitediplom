<?
$action_catt= $_GET['catt'];
if ($action_catt == 'item_catt1') {
  $info = array('Техника для кухни', 'Техника для дома', 'Красота и здоровье');
  $info2 = array('1item_catt1', '1item_catt2', '1item_catt3');
}
if ($action_catt == 'item_catt2') {
  $info = array('Смартфоны и гаджеты', 'Планшеты, электронные книги', 'Фототехника');
  $info2 = array('2item_catt1', '2item_catt2', '2item_catt3');
}
if ($action_catt == 'item_catt3') {
  $info = array('Телевизоры и аксессуары', 'Консоли и видеоигры', 'Аудиотехника');
  $info2 = array('3item_catt1', '3item_catt2', '3item_catt3');
}
if ($action_catt == 'item_catt4') {
  $info = array('Компьютеры, ноутбуки и ПО', 'Комплектующие для ПК', 'Периферия и аксессуары');
  $info2 = array('4item_catt1', '4item_catt2', '4item_catt3');
}
if ($action_catt == 'item_catt5') {
  $info = array('Оргтехника и офисное оборудование', 'Wi-Fi роутеры и оборудование для малых сетей', 'Профессиональное сетевое оборудование');
  $info2 = array('5item_catt1', '5item_catt2', '5item_catt3');
}
if ($action_catt == 'item_catt6') {
  $info = array('Зарядки и провода', 'Чехлы, защитные пленки и стелка', 'Аксессуары для смарт-часов и браслетов');
  $info2 = array('6item_catt1', '6item_catt2', '6item_catt3');
}
?>

<?
list($a[0], $a[1], $a[2]) = $info;
list($a2[0], $a2[1], $a2[2]) = $info2;
for ($i = 0; $i <= 2; $i++) {
echo '<div id="p',$a2[$i],'">
	<a href="/?pcatt=',$a2[$i],'">
	<div class="item-card" id="block1_card">
			<div class="item-card-top-catt">
				<img src="files/img/',$a2[$i],'.png" alt="Товар">
				<h1>',$a[$i],'</h1>
			</div>
			</a>
			</div></div>';}
?>
