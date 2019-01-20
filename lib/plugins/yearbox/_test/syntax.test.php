<?php


/**
 * Tests from syntax to html for the yearbox plugin
 *
 * @group plugin_yearbox
 * @group plugins
 */
class html_plugin_yearbox_test extends \DokuWikiTest
{
    protected $pluginsEnabled = array('yearbox');

    public function test_jan2018_siimple() {
        $syntax = '{{yearbox>year=2018;months=1}}';
        $ins = p_get_instructions($syntax);

        $actual_html = p_render('xhtml', $ins, $info);
        $expectedHTML= '<div class="yearbox" style="font-size:12px;"><table><tbody><tr class="yr-header"><th class="plain">2018</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th></tr><tr><th>Jan</th><td><a href="/./doku.php?id=2018-01:day-2018-01-01&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-01" rel="nofollow">01</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-02&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-02" rel="nofollow">02</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-03&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-03" rel="nofollow">03</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-04&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-04" rel="nofollow">04</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-05&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-05" rel="nofollow">05</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-06&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-06" rel="nofollow">06</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-07&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-07" rel="nofollow">07</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-08&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-08" rel="nofollow">08</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-09&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-09" rel="nofollow">09</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-10&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-10" rel="nofollow">10</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-11&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-11" rel="nofollow">11</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-12&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-12" rel="nofollow">12</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-13&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-13" rel="nofollow">13</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-14&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-14" rel="nofollow">14</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-15&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-15" rel="nofollow">15</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-16&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-16" rel="nofollow">16</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-17&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-17" rel="nofollow">17</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-18&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-18" rel="nofollow">18</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-19&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-19" rel="nofollow">19</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-20&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-20" rel="nofollow">20</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-21&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-21" rel="nofollow">21</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-22&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-22" rel="nofollow">22</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-23&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-23" rel="nofollow">23</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-24&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-24" rel="nofollow">24</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-25&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-25" rel="nofollow">25</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-26&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-26" rel="nofollow">26</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-27&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-27" rel="nofollow">27</a></td><td class="wkend"><a href="/./doku.php?id=2018-01:day-2018-01-28&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-28" rel="nofollow">28</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-29&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-29" rel="nofollow">29</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-30&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-30" rel="nofollow">30</a></td><td><a href="/./doku.php?id=2018-01:day-2018-01-31&amp;do=edit" class="wikilink2" title="2018-01:day-2018-01-31" rel="nofollow">31</a></td></tr></tbody></table></div><div class="clearer"></div>';

        $this->assertEquals($expectedHTML, $actual_html);
    }

    public function test_2ndQuarter2018_noMondays() {
        $syntax = '{{yearbox>year=2018;months=4,5,6;weekdays=0,2,3,4,5,6}}';
        $ins = p_get_instructions($syntax);

        $actual_html = p_render('xhtml', $ins, $info);
        $expectedHTML = '<div class="yearbox" style="font-size:12px;"><table><tbody><tr class="yr-header"><th class="plain">2018</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th></tr><tr><th class="alt">Apr</th><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-01&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-01" rel="nofollow">01</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-04:day-2018-04-03&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-03" rel="nofollow">03</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-04&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-04" rel="nofollow">04</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-05&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-05" rel="nofollow">05</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-06&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-06" rel="nofollow">06</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-07&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-07" rel="nofollow">07</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-08&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-08" rel="nofollow">08</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-04:day-2018-04-10&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-10" rel="nofollow">10</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-11&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-11" rel="nofollow">11</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-12&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-12" rel="nofollow">12</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-13&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-13" rel="nofollow">13</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-14&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-14" rel="nofollow">14</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-15&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-15" rel="nofollow">15</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-04:day-2018-04-17&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-17" rel="nofollow">17</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-18&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-18" rel="nofollow">18</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-19&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-19" rel="nofollow">19</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-20&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-20" rel="nofollow">20</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-21&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-21" rel="nofollow">21</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-22&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-22" rel="nofollow">22</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-04:day-2018-04-24&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-24" rel="nofollow">24</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-25&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-25" rel="nofollow">25</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-26&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-26" rel="nofollow">26</a></td><td><a href="/./doku.php?id=2018-04:day-2018-04-27&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-27" rel="nofollow">27</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-28&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-28" rel="nofollow">28</a></td><td class="wkend"><a href="/./doku.php?id=2018-04:day-2018-04-29&amp;do=edit" class="wikilink2" title="2018-04:day-2018-04-29" rel="nofollow">29</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td></tr><tr><th>May</th><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-05:day-2018-05-01&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-01" rel="nofollow">01</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-02&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-02" rel="nofollow">02</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-03&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-03" rel="nofollow">03</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-04&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-04" rel="nofollow">04</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-05&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-05" rel="nofollow">05</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-06&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-06" rel="nofollow">06</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-05:day-2018-05-08&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-08" rel="nofollow">08</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-09&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-09" rel="nofollow">09</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-10&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-10" rel="nofollow">10</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-11&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-11" rel="nofollow">11</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-12&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-12" rel="nofollow">12</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-13&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-13" rel="nofollow">13</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-05:day-2018-05-15&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-15" rel="nofollow">15</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-16&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-16" rel="nofollow">16</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-17&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-17" rel="nofollow">17</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-18&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-18" rel="nofollow">18</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-19&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-19" rel="nofollow">19</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-20&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-20" rel="nofollow">20</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-05:day-2018-05-22&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-22" rel="nofollow">22</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-23&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-23" rel="nofollow">23</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-24&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-24" rel="nofollow">24</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-25&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-25" rel="nofollow">25</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-26&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-26" rel="nofollow">26</a></td><td class="wkend"><a href="/./doku.php?id=2018-05:day-2018-05-27&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-27" rel="nofollow">27</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-05:day-2018-05-29&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-29" rel="nofollow">29</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-30&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-30" rel="nofollow">30</a></td><td><a href="/./doku.php?id=2018-05:day-2018-05-31&amp;do=edit" class="wikilink2" title="2018-05:day-2018-05-31" rel="nofollow">31</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td></tr><tr><th class="alt">Jun</th><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-06:day-2018-06-01&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-01" rel="nofollow">01</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-02&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-02" rel="nofollow">02</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-03&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-03" rel="nofollow">03</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-06:day-2018-06-05&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-05" rel="nofollow">05</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-06&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-06" rel="nofollow">06</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-07&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-07" rel="nofollow">07</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-08&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-08" rel="nofollow">08</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-09&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-09" rel="nofollow">09</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-10&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-10" rel="nofollow">10</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-06:day-2018-06-12&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-12" rel="nofollow">12</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-13&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-13" rel="nofollow">13</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-14&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-14" rel="nofollow">14</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-15&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-15" rel="nofollow">15</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-16&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-16" rel="nofollow">16</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-17&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-17" rel="nofollow">17</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-06:day-2018-06-19&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-19" rel="nofollow">19</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-20&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-20" rel="nofollow">20</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-21&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-21" rel="nofollow">21</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-22&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-22" rel="nofollow">22</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-23&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-23" rel="nofollow">23</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-24&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-24" rel="nofollow">24</a></td><td class="blank">&nbsp;&nbsp;&nbsp;</td><td><a href="/./doku.php?id=2018-06:day-2018-06-26&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-26" rel="nofollow">26</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-27&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-27" rel="nofollow">27</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-28&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-28" rel="nofollow">28</a></td><td><a href="/./doku.php?id=2018-06:day-2018-06-29&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-29" rel="nofollow">29</a></td><td class="wkend"><a href="/./doku.php?id=2018-06:day-2018-06-30&amp;do=edit" class="wikilink2" title="2018-06:day-2018-06-30" rel="nofollow">30</a></td></tr></tbody></table></div><div class="clearer"></div>';

        $this->assertEquals($expectedHTML, $actual_html);
    }
}
