<?
//добавление нового свойства
       $arFields = Array(
        "NAME" => "Новое свойство",
        "IBLOCK_ID" => 1,
        "ACTIVE" => "Y",
        "USER_TYPE" => "HTML",
        "SORT" => "100",
        "CODE" => "MY_PROPERTY",
        "PROPERTY_TYPE" => "L",
        "MULTIPLE" => "Y",
        "SEARCHABLE" => "N",
        "FILTRABLE" => "N"
        );
      
      $ibp = new CIBlockProperty;
      $PropID = $ibp->Add($arFields);
?>
