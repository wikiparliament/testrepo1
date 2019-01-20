<?php
/**
 * DokuWiki Plugin facebook (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <andi@splitbrain.org>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

if (!defined('DOKU_LF')) define('DOKU_LF', "\n");
if (!defined('DOKU_TAB')) define('DOKU_TAB', "\t");
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

require_once(DOKU_PLUGIN.'action.php');

class action_plugin_facebook extends DokuWiki_Action_Plugin {

    function getInfo() {
        return confToHash(dirname(__FILE__).'/plugin.info.txt');
    }

    function register(Doku_Event_Handler $controller) {

       $controller->register_hook('TPL_METAHEADER_OUTPUT', 'BEFORE', $this, 'handle_tpl_metaheader_output');

    }

    function handle_tpl_metaheader_output(&$event, $param) {
        global $conf;

        // match our language against available FaceBook languages
        $fblocales =  ' af_ZA sq_AL ar_AR az_AZ eu_ES bn_IN bs_BA bg_BG ca_ES'.
                      ' zh_CN zh_HK zh_TW hr_HR cs_CZ kw_GB da_DK nl_NL en_US'.
                      ' en_GB en_PI eo_EO et_EE fo_FO tl_PH fi_FI fr_FR fr_CA'.
                      ' gl_ES ka_GE de_DE el_GR he_IL hi_IN hu_HU is_IS id_ID'.
                      ' ga_IE it_IT ja_JP ko_KR la_VA lv_LV lt_LT mk_MK ms_MY'.
                      ' ml_IN ne_NP nb_NO nn_NO fa_IR pl_PL pt_PT pt_BR pa_IN'.
                      ' ro_RO ru_RU sr_RS sk_SK sl_SI es_LA es_ES sw_KE sv_SE'.
                      ' ta_IN te_IN th_TH tr_TR uk_UA vi_VN cy_GB ';

        $lc = $conf['lang'];
        $lc = str_replace('-','_',$lc);
        $lc = str_replace('_pirate','_PI',$lc);

        if(preg_match('/ ('.$lc.') /i',$fblocales,$match)){
            $loc = $match[1];
        }elseif(preg_match('/ ('.$lc.'_..) /i',$fblocales,$match)){
            $loc = $match[1];
        }else{
            $loc = 'en_US';
        }


        $event->data['script'][] = array(
              'type'  => 'text/javascript',
              'src'   => 'http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/'.$loc,
              '_data' => '',
        );
        $event->data['script'][] = array(
              'type'  => 'text/javascript',
              '_data' => 'FB.init("9ec02de6127d88bbcc6103da6a44a6b0");',
        );

    }

}

// vim:ts=4:sw=4:et:enc=utf-8:
