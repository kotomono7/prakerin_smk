<?php

class CnnNav {
    var $_navTable;
    var $_navStrFieldSelect;
    var $_navTableId;
    var $_navStrOffset;

    var $_navMaxRows;
    var $_navOffset;
    var $_navTotalRows;
    var $_navTotalPages;
    var $_navNumShow;
    var $_navInterval;
    var $_navIntervalShow;
    var $_navCurrentUri;

    var $_navStrPrev;
    var $_navStrNext;
    var $_navStrSeparator;
    var $_navCss;
    var $_navStrFirst;
    var $_navStrLast;

     /*
	 
     * CnnNav::CnnNav()
     * Constructor of the class CnnNav.
 
     * @param string $maxRows number of maximum rows display for each page.
     * @param string $table database table name. 
     * @param string $strFieldSelect selected table field names, "*" by default. 
     * @param string $tableId table id name. Usually the name of the primary key.
     * If $tableId is empty, it will be set to $table . "_id".

     * @param string $numShow number of decimal to show for navigating, "10" by default.
     * @param string $interval interval for the interval navigation, "10" by default.
     * @param string $intervalShow number of decimal to show for interval navigating, "3" by default.
     * @param string $prev previous navigation text, "&laquo;prev" by default.
     * @param string $next next navigation text, "next&raquo;" by default.
     * @param string $separator separator, " " by default.

     * @param string $css html css style for the navigation.
     * @param string $first first navigation text, "&laquo;&laquo;" by default.
     * @param string $last last navigation text, "&raquo;&raquo;" by default.
     * @access public.
     * @see CnnNav::setNumShow() and CnnNav::setNavString() to set the navigation option.

     */

    function CnnNav ($maxRows, $table, $strFieldSelect = "*", $tableId = "", $numShow = "5", $interval = "10", $intervalShow = "5", $prev = "&lt;", $next = "&gt;", $separator = " | ", $css = "", $first = "&nbsp;&lt;&lt;&nbsp;", $last = "&nbsp;&gt;&gt;&nbsp;", $strOffset = "offset") {

        $this->_navTable = $table;
        $this->_navStrFieldSelect = $strFieldSelect;

        if (empty($tableId) ) {
            $this->_navTableId = $table ."_id";
        } else {
            $this->_navTableId = $tableId;
        }

        $this->_navStrOffset = $strOffset;
        $this->_navMaxRows = $maxRows;

        if (!isset($_GET[$this->_navStrOffset])) {
            $this->_navOffset = 0;
        } else {
            $this->_navOffset = $_GET[$this->_navStrOffset];
        }

        $queryTotalRows = "SELECT COUNT(`". $this->_navTableId ."`) FROM ". $table;
        $resultTotalRows = mysql_query($queryTotalRows) or die ("Class CnnNav Error on constructor method: Failed to execute query to fetch total rows.".  mysql_error());

        list($this->_navTotalRows) = mysql_fetch_row($resultTotalRows);
        $this->_navTotalPages = ceil($this->_navTotalRows / $maxRows);
        $this->_navNumShow = $numShow;
        $this->_navInterval = $interval;
        $this->_navIntervalShow = $intervalShow;

        $this->_navStrPrev = $prev;
        $this->_navStrNext = $next;
        $this->_navStrSeparator = $separator;
        $this->_navCss = $css;

        $this->_navStrFirst = $first;
        $this->_navStrLast = $last;

        if (empty($_SERVER['QUERY_STRING']) ) {
            $current_page = $_SERVER['PHP_SELF'] ."?";
        } else {
            $current_page = $_SERVER['PHP_SELF'] ."?". $_SERVER['QUERY_STRING'] ."&";
        }

        $this->_navCurrentUri = preg_replace("/&{0,1}". $this->_navStrOffset ."=\d+/", "", $current_page);

        if ($this->_navOffset > ($this->_navTotalPages - 1) && ($this->_navOffset > 0) ) {
            $this->_navOffset = $this->_navTotalPages - 1;
        }
    }

	function getCount(){
        return $this->_totalRows;
    }

	function getPages(){
        return $this->_navTotalPages;
    }    

     /*

     * CnnNav::setNumShow()
     * Set decimal navigation properties.

     * @param string $numShow number of decimal to show for navigating.
     * @param string $interval interval for the interval navigation.
     * @param string $numIntervalShow number of decimal to show for interval navigating.
     * @access public.
     
	 */

    function setNumShow($numShow = "", $interval = "", $numIntervalShow = "") {
	    if (!empty($numShow) ) {
            $this->_navNumShow = $numShow;
        }

        if (!empty($interval) ) {
            $this->_navInterval = $interval;
        }

        if (!empty($numIntervalShow) ) {
            $this->_navIntervalShow = $numIntervalShow;
        }
    }

     /*
	 
     * CnnNav::setNavText()
     * Set text navigation properties.

     * @param string $prev previous navigation text.
     * @param string $next next navigation text.
     * @param string $separator separator.
     * @param string $css html css style for the navigation.
     * @param string $first first navigation text.
     * @param string $last last navigation text.
     * @access public.

     */

    function setNavText($prev = "", $next = "", $separator = "", $css = "", $first = "", $last = "") {
        if (!empty($prev) ) {
            $this->_navStrPrev = $prev;
        }

        if (!empty($next) ) {
            $this->_navStrNext = $next;
        }

        if (!empty($separator) ) {
            $this->_navStrSeparator = $separator;
        }

        if (!empty($css) ) {

            $this->_navCss = $css;
        }

        if (!empty($first) ) {
            $this->_navStrFirst = $first;
        }

        if ((!empty($last)) ) {
            $this->_navStrLast = $last;
        }

    }

     /*

     * CnnNav::_retSpanTag()

     * @param string $text input.
     * @return $text with span html tag with css style.
     * @access private.

     */

    function _retSpanTag($text) {

        if (!empty($this->_navCss) ) {
            return "<span class=\"". $this->_navCss ."\">". $text ."</span>";
        } else {
            return $text;
        }
    }

     /*
     * CnnNav::getFirst()

     * @return html tag for first navigation text.
     * @access public.

     */

    function getFirst() {
        return "<a href=\"". $this->_navCurrentUri . $this->_navStrOffset . "=0\">". $this->_retSpanTag($this->_navStrFirst) ."</a>\n";    
    }
  
     /*

     * CnnNav::getPrev()

     * @return html tag for previous navigation text.
     * @access public.

     */

    function getPrev() {
        if ($this->_navOffset > 0) {
            return "<a href=\"". $this->_navCurrentUri . $this->_navStrOffset ."=". ($this->_navOffset - 1) ."\">". $this->_retSpanTag($this->_navStrPrev) ."</a>\n"; 
        }
    }

     /*
     * CnnNav::getNum()

     * @return html tag for number navigation text.
     * @access public.

     */

    function getNum() {
        if ($this->_navTotalPages > 1) {
            if ($this->_navOffset < ceil($this->_navNumShow / 2) ) {
                $numPos = ($this->_navOffset + 1);
            } else {
                $numPos = ceil($this->_navNumShow / 2);

                if (($this->_navTotalPages -  $this->_navOffset) <= ceil($this->_navNumShow / 2) ) {
                    $numPos = $this->_navNumShow - ($this->_navTotalPages - $this->_navOffset) + 1;
                }
            }

            $strNumBefore = "";
            $numBeforePos = $this->_navOffset - $numPos + 2;

            for($i = $numBeforePos; $i <= $this->_navOffset; $i++) {

                if ($i > 0) {
                    $strNumBefore .= "<a href=\"". $this->_navCurrentUri . $this->_navStrOffset . "=". ($i - 1) ."\">". $this->_retSpanTag($i) ."</a>\n";
                    $strNumBefore .= $this->_retSpanTag($this->_navStrSeparator);                
                }
            }         

            $strNumAfter = "";
            $numAfterPos = $this->_navOffset + 1 + $this->_navNumShow - $numPos;

            for($i = ($this->_navOffset + 2); $i <= $numAfterPos; $i++) {

                if ($i <= $this->_navTotalPages) {
                    $strNumAfter .= $this->_retSpanTag($this->_navStrSeparator);
                    $strNumAfter .= "<a href=\"". $this->_navCurrentUri . $this->_navStrOffset . "=". ($i - 1) ."\">". $this->_retSpanTag($i) ."</a>\n";                
                }
            }

            $strIntBefore = "";

            for($i = ($numBeforePos - ($this->_navInterval * $this->_navIntervalShow)); $i < $numBeforePos; $i++) {

                if ((($i % $this->_navInterval) == 0) && ($i > 0)) {
                    $strIntBefore .= "&nbsp;<a href=\"". $this->_navCurrentUri . $this->_navStrOffset ."=". ($i - 1) ."\">". $this->_retSpanTag($i) ."</a>&nbsp;\n";
                    $strIntBefore .= $this->_retSpanTag($this->_navStrSeparator);
                }
            }
     
            $strIntAfter = "";

            for ($i = ($numAfterPos + 1); $i < (($numAfterPos + 1) + ($this->_navInterval * $this->_navIntervalShow)); $i++) {

                if ((($i % $this->_navInterval) == 0) && ($i <= $this->_navTotalPages)) {
                    $strIntAfter .= $this->_retSpanTag($this->_navStrSeparator);
                    $strIntAfter .= "&nbsp;<a href=\"". $this->_navCurrentUri . $this->_navStrOffset . "=". ($i - 1) ."\">". $this->_retSpanTag($i) ."</a>&nbsp;\n";
                }
            }
           
            return $strIntBefore . $strNumBefore . $this->_retSpanTag($this->_navOffset + 1) . $strNumAfter . $strIntAfter;

        } else return "";
    }
  
     /*

     * CnnNav::getNext()

     * @return html tag for next navigation text.
     * @access public. 

     */

    function getNext() {

        if ($this->_navOffset < ($this->_navTotalPages - 1) ) {
            return "<a href=\"". $this->_navCurrentUri . $this->_navStrOffset . "=". ($this->_navOffset + 1) ."\">". $this->_retSpanTag($this->_navStrNext) ."</a>";
        }
    }
  
     /*

     * CnnNav::getLast()

     * @return html tag for last navigation text.
     * @access public. 

     */

    function getLast() {
        return "<a href=\"". $this->_navCurrentUri . $this->_navStrOffset . "=". $this->_navTotalPages ."\">". $this->_retSpanTag($this->_navStrLast) ."</a>";    
    }
 

     /*

     * CnnNav::getNav()

     * @param boolean $showPrevNext. 
     * @param boolean $showNum.
     * @param boolean $showFirstLast.
     * @return html tag for all navigation text. 

     */

    function getNav($showPrevNext = true, $showNum = true, $showFirstLast = false) {

        $strNav = "";

        if ($showFirstLast) {
            $strNav .= $this->getFirst();
        }

        if ($showPrevNext) {
            $strNav .= $this->getPrev();
        }

        if ($showNum) {
            $strNav .= $this->getNum();
        }

        if ($showPrevNext) {
            $strNav .= $this->getNext();
        }

        if ($showFirstLast) {
            $strNav .= $this->getLast();
        }

        return $strNav;        
    }

     /*

     * CnnNav::printNav()
     * Print or show the page navigation.

     * @param string $showPrevNext.
     * @param string $showNum.
     * @param string $showFirstLast.
     * @access public.
     * @see CnnNav::getNav().

     */

    function printNav($showPrevNext = "1", $showNum = "1", $showFirstLast = "0") {
        echo $this->getNav($showPrevNext, $showNum, $showFirstLast);
    }
   
     /*

     * CnnNav::getResult()
     * Get the SQL result after pagination. Needs when we want to fetch data from database.

     * @return SQL result. 

     */

    function getResult(){
        $queryData = "SELECT ". $this->_navStrFieldSelect ." FROM ". $this->_navTable ." LIMIT ". ($this->_navOffset * $this->_navMaxRows) .", ". $this->_navMaxRows;
        $resultData = mysql_query($queryData) or die ("Class CnnNav Error on getResult method: Failed to execute query to fetch data.");
        return $resultData;
    }
}

?> 