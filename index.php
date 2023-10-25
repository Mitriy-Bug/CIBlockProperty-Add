<?
AddEventHandler("iblock", "OnIBlockPropertyBuildList", array("CIBlockPropertyExample", "GetUserTypeDescription"));
class CIBlockPropertyExample
{
   static function GetUserTypeDescription()
   {
      return array(
         "PROPERTY_TYPE"   =>"L",
         "USER_TYPE"       =>"HEAD",
         "DESCRIPTION"     =>"Заголовок",
         //"GetPropertyFieldHtmlMulty" =>array("CIBlockPropertyExample", "GetPropertyFieldHtmlMulty"),
         "GetPropertyFieldHtml" =>array("CIBlockPropertyExample", "GetPropertyFieldHtml"),
         "GetPublicViewHTML" =>array("CIBlockPropertyExample", "GetPublicViewHTML"),
         "MULTIPLE"        =>"Y",
      );
   }
   static function GetPropertyFieldHtml ($arProperty, $value, $strHTMLControlName) 
   {
      return '<input type="text" name="'.$strHTMLControlName["VALUE"].'" value="'.$value["VALUE"].'"><br><textarea name="'.$strHTMLControlName["DESCRIPTION"].'">'.$value["DESCRIPTION"].'</textarea>';
   }

   static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
   {
         return $arProperty["VALUE"].', '.$arProperty["DESCRIPTION"];

   }
}
?>
