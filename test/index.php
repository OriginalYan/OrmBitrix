<?
    require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
    $APPLICATION->SetTitle('Тестовая страница для задания');

    if (!CModule::IncludeModule('somemodule.productlist')) return;

    $result = \Somemodule\Productlist\ProductTable::getList(array(
        'select' => array('*')
    ));

    while ($row = $result->fetch()){
        debug($row);
    }

    require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');