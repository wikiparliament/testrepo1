<?php
/**
 * DokuWiki Plugin showphperrors (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Michael <mic.grosse@posteo.de>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class action_plugin_showphperrors extends DokuWiki_Action_Plugin {

    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     * @return void
     */
    public function register(Doku_Event_Handler $controller) {

       $controller->register_hook('INIT_LANG_LOAD', 'AFTER', $this, 'handle_dokuwiki_started');

    }

    /**
     * [Custom event handler which performs action]
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     * @return void
     */
    public function handle_dokuwiki_started(Doku_Event &$event, $param) {
        $errorsToReport = error_reporting();
        if ($this->getConf('deprecated')) {
            $errorsToReport |= E_DEPRECATED;
        }
        if ($this->getConf('strict')) {
            $errorsToReport |= E_STRICT;
        }
        if ($this->getConf('notices')) {
            $errorsToReport |= E_NOTICE;
        }
        error_reporting($errorsToReport);
        ini_set('display_errors', $this->getConf('showphperros'));
    }

}

// vim:ts=4:sw=4:et:
