<?php
/**
 * DokuWiki Plugin facebook (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <andi@splitbrain.org>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

if (!defined('DOKU_LF')) define('DOKU_LF', "\n");
if (!defined('DOKU_TAB')) define('DOKU_TAB', "\t");
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

require_once(DOKU_PLUGIN.'syntax.php');

class syntax_plugin_facebook extends DokuWiki_Syntax_Plugin {

    function getInfo() {
        return confToHash(dirname(__FILE__).'/plugin.info.txt');
    }

    function getType() {
        return 'substition';
    }

    function getPType() {
        return 'block';
    }

    function getSort() {
        return 155;
    }


    function connectTo($mode) {
        $this->Lexer->addSpecialPattern('{{fbfanbox>[0-9]+.*?}}',$mode,'plugin_facebook');
    }

    function handle($match, $state, $pos, Doku_Handler $handler){

        $data = array(
            'type'    => 'fanbox',
            'profile' => '52877633616',
            'width'   => 300,
            'height'  => 250,
            'status'  => false,
            'logo'    => true,
            'fans'    => 10,
            'align'   => 'right',
        );

        $params = explode(' ',substr(strtolower($match),4,-2));
        list($type,$profile) = explode('>',array_shift($params));
        $data['type']    = $type;
        $data['profile'] = $profile;

        foreach($params as $param){
            $param = trim($param);
            if($param === '') continue;

            if($param == 'status'){
                $data['status'] = true;
            }elseif($param == 'nologo'){
                $data['logo'] = false;
            }elseif($param == 'right'){
                $data['align'] = 'right';
            }elseif($param == 'left'){
                $data['align'] = 'left';
            }elseif($param == 'center'){
                $data['align'] = 'center';
            }elseif(preg_match('/^\d+f$/',$param)){
                $data['fans'] = substr($param,0,-1);
            }elseif(preg_match('/^(\d+)x(\d+)$/',$param,$match)){
                $data['width']  = $match[1];
                $data['height'] = $match[2];
            }
        }



        return $data;
    }

    function render($mode, Doku_Renderer $R, $data) {
        if($mode != 'xhtml') return false;

        if($data['align'] == 'center'){
            $R->doc .= '<div style="width:'.$data['width'].'px; padding: 0; margin: 0.5em auto">';
        }else{
            $R->doc .= '<div style="width:'.$data['width'].'px; padding: 0; margin: 0.5em; float: '.$data['align'].'">';
        }
        $R->doc .= '<fb:fan profile_id="'.$data['profile'].'"
                            stream="'.(($data['status'])?1:0).'"
                            connections="'.$data['fans'].'"
                            logobar="'.(($data['logo'])?1:0).'"
                            width="'.$data['width'].'"
                            height="'.$data['height'].'"></fb:fan>';
        $R->doc .= '</div>';


        return true;
    }
}

// vim:ts=4:sw=4:et:enc=utf-8:
