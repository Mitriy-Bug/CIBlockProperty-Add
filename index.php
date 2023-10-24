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
    
      return '<input type="text" name="'.$strHTMLControlName["VALUE"].'" value="'.$value['VALUE'].'">';
   }

   static function GetPublicViewHTML($arProperty, $value, $strHTMLControlName)
   {
      if(strlen($value["VALUE"])>0)
         return $strHTMLControlName["DESCRIPTION"].' '.$value["VALUE"];
      else
         return '';
   }
}
?>
