<?php 
  class CssJs_Util_digital_series
   {
      private static $cssStr = '.op_digital_series_price{color:#f80;font-weight:bold;}.op_digital_series_colorInfo{display:inline-block;width:9px;height:9px;vertical-align:middle;overflow:hidden;}.op_digital_series_white{width:7px;height:7px;border:1px solid #dcdcdc;}.op_digital_series_infotable{border-collapse:collapse;}.op_digital_series_infotable td{font-size:1em;line-height:1.54;}';  // css字串，不含<style>和</style>标签
      private static $jsStr  = '';   // js字串，不含<script标签
      private static $uiList = 'img,table';   // 包含的组件，以','分割的字符串，比如'input,text,button'这样
      
      public static function getHeadCss()
      {
         if (!is_string(self::$cssStr))
         {
            return '';
         }
         return self::$cssStr;
      }
      
      public static function getFootJs()
      {
         if (!is_string(self::$jsStr))
         {
            return '';
         }
         return self::$jsStr;
      }
      
      // 返回数组
      public static function getCssUI()
      {
		 if ( empty(self::$uiList) ) return array();

         $arr = @explode(',', self::$uiList);
         if (!is_array($arr))
         {
            $arr = array();
         }
         return $arr;
      }
   }