<?php


$_config = array();

// ----------------------------  CONFIG DB  ----------------------------- //
$_config['db']['1']['dbhost'] = 'localhost';
$_config['db']['1']['dbuser'] = 'root';
$_config['db']['1']['dbpw'] = 'root';
$_config['db']['1']['dbcharset'] = 'utf8';
$_config['db']['1']['pconnect'] = '0';
$_config['db']['1']['dbname'] = 'mlinked123';
$_config['db']['1']['tablepre'] = 'pre_';
$_config['db']['slave'] = '';
$_config['db']['common']['slave_except_table'] = '';

// --------------------------  CONFIG MEMORY  --------------------------- //
$_config['memory']['prefix'] = 'GVSyl6_';
$_config['memory']['redis']['server'] = '';
$_config['memory']['redis']['port'] = 6379;
$_config['memory']['redis']['pconnect'] = 1;
$_config['memory']['redis']['timeout'] = '0';
$_config['memory']['redis']['requirepass'] = '';
$_config['memory']['redis']['serializer'] = 1;
$_config['memory']['memcache']['server'] = '';
$_config['memory']['memcache']['port'] = 11211;
$_config['memory']['memcache']['pconnect'] = 1;
$_config['memory']['memcache']['timeout'] = 1;
$_config['memory']['apc'] = 1;
$_config['memory']['xcache'] = 1;
$_config['memory']['eaccelerator'] = 1;
$_config['memory']['wincache'] = 1;

// --------------------------  CONFIG SERVER  --------------------------- //
$_config['server']['id'] = 1;

// -------------------------  CONFIG DOWNLOAD  -------------------------- //
$_config['download']['readmod'] = 2;
$_config['download']['xsendfile']['type'] = '0';
$_config['download']['xsendfile']['dir'] = '/down/';

// ---------------------------  CONFIG CACHE  --------------------------- //
$_config['cache']['type'] = 'file';

// --------------------------  CONFIG OUTPUT  --------------------------- //
$_config['output']['charset'] = 'utf-8';
$_config['output']['forceheader'] = 1;
$_config['output']['gzip'] = '0';
$_config['output']['tplrefresh'] = 1;
$_config['output']['language'] = 'en';
$_config['output']['staticurl'] = 'static/';
$_config['output']['ajaxvalidate'] = '0';
$_config['output']['iecompatible'] = '0';

// --------------------------  CONFIG COOKIE  --------------------------- //
$_config['cookie']['cookiepre'] = '2tAh_';
$_config['cookie']['cookiedomain'] = '';
$_config['cookie']['cookiepath'] = '/';

// -------------------------  CONFIG SECURITY  -------------------------- //
$_config['security']['authkey'] = '0cde0b4QH2noPxNG';
$_config['security']['urlxssdefend'] = 1;
$_config['security']['attackevasive'] = '0';
$_config['security']['querysafe']['status'] = 1;
$_config['security']['querysafe']['dfunction']['0'] = 'load_file';
$_config['security']['querysafe']['dfunction']['1'] = 'hex';
$_config['security']['querysafe']['dfunction']['2'] = 'substring';
$_config['security']['querysafe']['dfunction']['3'] = 'if';
$_config['security']['querysafe']['dfunction']['4'] = 'ord';
$_config['security']['querysafe']['dfunction']['5'] = 'char';
$_config['security']['querysafe']['daction']['0'] = '@';
$_config['security']['querysafe']['daction']['1'] = 'intooutfile';
$_config['security']['querysafe']['daction']['2'] = 'intodumpfile';
$_config['security']['querysafe']['daction']['3'] = 'unionselect';
$_config['security']['querysafe']['daction']['4'] = '(select';
$_config['security']['querysafe']['daction']['5'] = 'unionall';
$_config['security']['querysafe']['daction']['6'] = 'uniondistinct';
$_config['security']['querysafe']['dnote']['0'] = '/*';
$_config['security']['querysafe']['dnote']['1'] = '*/';
$_config['security']['querysafe']['dnote']['2'] = '#';
$_config['security']['querysafe']['dnote']['3'] = '--';
$_config['security']['querysafe']['dnote']['4'] = '"';
$_config['security']['querysafe']['dlikehex'] = 1;
$_config['security']['querysafe']['afullnote'] = '0';

// --------------------------  CONFIG ADMINCP  -------------------------- //
// -------- Founders: $_config['admincp']['founder'] = '1,2,3'; --------- //
$_config['admincp']['founder'] = '1';
$_config['admincp']['forcesecques'] = '0';
$_config['admincp']['checkip'] = 1;
$_config['admincp']['runquery'] = '0';
$_config['admincp']['dbimport'] = 1;

// --------------------------  CONFIG REMOTE  --------------------------- //
$_config['remote']['on'] = '0';
$_config['remote']['dir'] = 'remote';
$_config['remote']['appkey'] = '62cf0b3c3e6a4c9468e7216839721d8e';
$_config['remote']['cron'] = '0';

// ---------------------------  CONFIG INPUT  --------------------------- //
$_config['input']['compatible'] = 1;

// -------------------------  CONFIG LANGUAGES  ------------------------- //
$_config['languages']['ar']['icon'] = 'ar.gif';
$_config['languages']['ar']['name'] = 'العربية';
$_config['languages']['ar']['title'] = 'Arabic';
$_config['languages']['ar']['dir'] = 'rtl';
$_config['languages']['ar']['code'] = 'ar-AE';
$_config['languages']['de']['icon'] = 'de.gif';
$_config['languages']['de']['name'] = 'Deutsch';
$_config['languages']['de']['title'] = 'German';
$_config['languages']['de']['dir'] = 'ltr';
$_config['languages']['de']['code'] = 'de-DE';
$_config['languages']['en']['icon'] = 'en.gif';
$_config['languages']['en']['name'] = 'English';
$_config['languages']['en']['title'] = 'English';
$_config['languages']['en']['dir'] = 'ltr';
$_config['languages']['en']['code'] = 'en-GB';
$_config['languages']['es']['icon'] = 'es.gif';
$_config['languages']['es']['name'] = 'Español';
$_config['languages']['es']['title'] = 'Spanish';
$_config['languages']['es']['dir'] = 'ltr';
$_config['languages']['es']['code'] = 'es-ES';
$_config['languages']['fr']['icon'] = 'fr.gif';
$_config['languages']['fr']['name'] = 'Français';
$_config['languages']['fr']['title'] = 'French';
$_config['languages']['fr']['dir'] = 'ltr';
$_config['languages']['fr']['code'] = 'fr-FR';
$_config['languages']['kr']['icon'] = 'kr.gif';
$_config['languages']['kr']['name'] = '한국어';
$_config['languages']['kr']['title'] = 'Korean';
$_config['languages']['kr']['dir'] = 'ltr';
$_config['languages']['kr']['code'] = 'ko-KO';
$_config['languages']['pl']['icon'] = 'pl.gif';
$_config['languages']['pl']['name'] = 'Polski';
$_config['languages']['pl']['title'] = 'Polish';
$_config['languages']['pl']['dir'] = 'ltr';
$_config['languages']['pl']['code'] = 'pl-PL';
$_config['languages']['ru']['icon'] = 'ru.gif';
$_config['languages']['ru']['name'] = 'Русский';
$_config['languages']['ru']['title'] = 'Russian';
$_config['languages']['ru']['dir'] = 'ltr';
$_config['languages']['ru']['code'] = 'ru-RU';
$_config['languages']['sc']['icon'] = 'zh.gif';
$_config['languages']['sc']['name'] = '简体中文';
$_config['languages']['sc']['title'] = 'Simplified Chinese';
$_config['languages']['sc']['dir'] = 'ltr';
$_config['languages']['sc']['code'] = 'zh-CN';
$_config['languages']['tc']['icon'] = 'tw.gif';
$_config['languages']['tc']['name'] = '繁體中文';
$_config['languages']['tc']['title'] = 'Traditional Chinese';
$_config['languages']['tc']['dir'] = 'ltr';
$_config['languages']['tc']['code'] = 'zh-TW';
$_config['languages']['th']['icon'] = 'th.gif';
$_config['languages']['th']['name'] = 'ภาษาไทย';
$_config['languages']['th']['title'] = 'Thai';
$_config['languages']['th']['dir'] = 'ltr';
$_config['languages']['th']['code'] = 'th-TH';
$_config['languages']['tr']['icon'] = 'tr.gif';
$_config['languages']['tr']['name'] = 'Türkçe';
$_config['languages']['tr']['title'] = 'Turkish';
$_config['languages']['tr']['dir'] = 'ltr';
$_config['languages']['tr']['code'] = 'tr-TR';
$_config['languages']['vn']['icon'] = 'vn.gif';
$_config['languages']['vn']['name'] = 'Tiếng Việt';
$_config['languages']['vn']['title'] = 'Vietnamese';
$_config['languages']['vn']['dir'] = 'ltr';
$_config['languages']['vn']['code'] = 'vi-VN';

// ----------------------  CONFIG DETECT_LANGUAGE  ---------------------- //
$_config['detect_language'] = 1;

// --------------------  CONFIG ENABLE_MULTILINGUAL  -------------------- //
$_config['enable_multilingual'] = 1;


// -------------------  THE END  -------------------- //

?>