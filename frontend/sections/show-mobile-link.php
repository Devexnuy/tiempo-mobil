<?php
//if ( ! class_exists( 'TMOBIL_Export' ) ) {
//    require_once(WPMP_PRO_PLUGIN_PATH.'frontend/export/class-export.php');
//}
//
//$wpmp_pro_export = new WPMP_Pro_Export();
//$wpmp_texts_json = $wpmp_pro_export->load_language(get_locale(), 'list');
//
//$wpmp_footer_text = 'Switch to mobile version';
//if ($wpmp_texts_json !== false && isset($wpmp_texts_json['APP_TEXTS']['LINKS']) && isset($wpmp_texts_json['APP_TEXTS']['LINKS']['VISIT_APP'])){
//    $wpmp_footer_text = $wpmp_texts_json['APP_TEXTS']['LINKS']['VISIT_APP'];
//}
?>
<div id="show-mobile" style="width:100%; text-align: center;">
    <a href="<?php echo home_url(); echo parse_url(home_url(), PHP_URL_QUERY) ? '&' : '?'; echo 'tmobil_'; ?>theme_mode=mobile" title="<?php echo 'app_test';?>"><?php echo 'app_test';?></a>
</div>
