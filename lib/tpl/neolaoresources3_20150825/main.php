<?php
/**
 * @link   http://resources.neolao.com/php/dokuwiki/templates
 * @author neolao <neo@neolao.com>
 */

// Must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

/**
 * Fork inc/template.php
 */
function custom_toc()
{
    global $TOC;
    global $ACT;
    global $ID;
    global $REV;
    global $INFO;
    global $conf;
    global $lang;
    $toc = array();

    if(is_array($TOC)){
        // if a TOC was prepared in global scope, always use it
        $toc = $TOC;
    }elseif(($ACT == 'show' || substr($ACT,0,6) == 'export') && !$REV && $INFO['exists']){
        // get TOC from metadata, render if neccessary
        $meta = p_get_metadata($ID, false, true);
        if(isset($meta['internal']['toc'])){
            $tocok = $meta['internal']['toc'];
        }else{
            $tocok = true;
        }
        $toc   = $meta['description']['tableofcontents'];
        if(!$tocok || !is_array($toc) || !$conf['tocminheads'] || count($toc) < $conf['tocminheads']){
            $toc = array();
        }
    }elseif($ACT == 'admin'){
        // try to load admin plugin TOC FIXME: duplicates code from tpl_admin
        $plugin = null;
        if (!empty($_REQUEST['page'])) {
            $pluginlist = plugin_list('admin');
            if (in_array($_REQUEST['page'], $pluginlist)) {
                // attempt to load the plugin
                $plugin =& plugin_load('admin',$_REQUEST['page']);
            }
        }
        if ( ($plugin !== null) &&
             (!$plugin->forAdminOnly() || $INFO['isadmin']) ){
            $toc = $plugin->getTOC();
            $TOC = $toc; // avoid later rebuild
        }
    }

    trigger_event('TPL_TOC_RENDER', $toc, NULL, false);

    if( !empty( $toc ) ){
        echo DOKU_LF, '<section>', DOKU_LF;
        echo '<h1>', $lang['toc'], '</h1>';

        $level = 0;
        foreach( $toc as $item )
        {
            if( $item['level'] > $level ){
                //open new list
                for($i=0; $i<($item['level'] - $level); $i++){
                    if ($i) echo "<li class=\"clear\">\n";
                    echo "\n<ul class=\"$class\">\n";
                }
            }elseif( $item['level'] < $level ){
                //close last item
                echo "</li>\n";
                for ($i=0; $i<($level - $item['level']); $i++){
                    //close higher lists
                    echo "</ul>\n</li>\n";
                }
            }else{
                //close last item
                echo "</li>\n";
            }

            //remember current level
            $level = $item['level'];

            //print item
            echo '<li>';
            if( isset( $item['hid'] ) ){
                $link = '#'.$item['hid'];
            }else{
                $link = $item['link'];
            }
            echo '<a href="'.$link.'" class="toc">'.hsc($item['title']).'</a>';
        }

        //close remaining items and lists
        for ($i=0; $i < $level; $i++){
            echo "</li></ul>\n";
        }


        //print_r( $toc );
        echo '</section>', DOKU_LF;
    }
}


/**
 * Fork inc/template.php
 */
function custom_youarehere( $sep = '&raquo;' )
{
  global $conf;
  global $ID;
  global $lang;

  // check if enabled
  if(!$conf['youarehere']) return false;

  $parts = explode(':', $ID);
  $count = count($parts);

  if($GLOBALS['ACT'] == 'search')
  {
    $parts = array($conf['start']);
    $count = 1;
  }


  // always print the startpage
  $title = useHeading('navigation') ? p_get_first_heading($conf['start']) : $conf['start'];
  if(!$title) $title = $conf['start'];
  tpl_link(wl($conf['start']),hsc($title),'title="'.$conf['start'].'"');

  // print intermediate namespace links
  $part = '';
  for($i=0; $i<$count - 1; $i++){
    $part .= $parts[$i].':';
    $page = $part;
    resolve_pageid('',$page,$exists);
    if ($page == $conf['start']) continue; // Skip startpage

    // output
    echo $sep;
    if($exists){
      $title = useHeading('navigation') ? p_get_first_heading($page) : $parts[$i];
      tpl_link(wl($page),hsc($title),'title="'.$page.'"');
    }else{
      tpl_link(wl($page),$parts[$i],'title="'.$page.'" class="wikilink2" rel="nofollow"');
    }
  }

  // print current page, skipping start page, skipping for namespace index
  if(isset($page) && $page==$part.$parts[$i]) return;
  $page = $part.$parts[$i];
  if($page == $conf['start']) return;
  echo $sep;
  if(page_exists($page)){
    $title = useHeading('navigation') ? p_get_first_heading($page) : $parts[$i];
    tpl_link(wl($page),hsc($title),'title="'.$page.'"');
  }else{
    tpl_link(wl($page),$parts[$i],'title="'.$page.'" class="wikilink2" rel="nofollow"');
  }
  return true;
}



?><!DOCTYPE html>
<html lang="<?php echo $conf['lang']; ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="verify-v1" content="qgh3TZHu+ZRSRFmOPCG031BS0KO9MW4XtDnBtjMUfSk=" />
        <?php tpl_metaheaders(); ?>
        <title><?php tpl_pagetitle(); ?> - <?php echo strip_tags($conf['title']); ?></title>
    </head>
    <body>
        <header role="banner">
            <h1><?php tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"'); ?></h1>
        </header>
        <nav role="primary navigation">
            <ul>
                <li>Empowering Communities</li>
            </ul>
            <!--ul>
                <li><a href="<?php $conf['baseurl'] ?>/doku.php?id=services">HOME</a></li>
                <li><a href="<?php $conf['baseurl'] ?>/doku.php?id=services">SERVICES</a></li>
                <li><a href="<?php $conf['baseurl'] ?>/doku.php?id=customers">CUSTOMERS</a></li>
            </ul-->
        </nav>
        <nav role="secondary navigation">
            <ul>
            <!--?php custom_youarehere(); ?-->
                <li><a href="start">INTRODUCTION</a></li>
                <li><a href="services">WEB SITES</a></li>
                <li><a href="support">SUPPORT</a></li>
            </ul>
        </nav>
        <aside>
            <section>
                <h1>Search</h1>
                <?php tpl_searchform() ?>
            </section>
            <?php custom_toc(); ?>
            <?php
            if( $INFO['ismanager'] ){
                echo '<section><h1>ADMIN</h1>';
                tpl_button('edit');
                tpl_button('history');
                tpl_button('revert');
                tpl_button('admin');
                tpl_button('profile');
                tpl_button('login');
                echo '</section>';
            }
            ?>
        </aside>
        <section id="body" role="main">
            <?php html_msgarea()?>

            <article>
            <?php flush()?>
            <?php tpl_content(false)?>
            <?php flush()?>
            </article>

            <hr class="clear"/>
        </section>
        <footer role="contentinfo">
                <Div Align="right"><a href="doku.php?id=start&do=login">admin</a></Div>
            <!-- ?php tpl_license(false); ? -->
            Copyright (c) 2017 coauthoring.org All Rights Reserved.
            <!-- address>Contact&nbsp;: <a href="mailto:webmaster[at]emcot.com">webmaster[at]emcot.com</a></address-->
            <p><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?>
            </p>
        </footer>
   </body>
</html>
