<?php
/***************************************************************************
 *   Copyright (C) 2005 by Steffen Lorch & Fabian Schorcht                 *
 *   steffen@web-modulized.org                                             *
 *   fabian@web-modulized.org                                              *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU General Public License as published by  *
 *   the Free Software Foundation; either version 2 of the License, or     *
 *   (at your option) any later version.                                   *
 *                                                                         *
 *   This program is distributed in the hope that it will be useful,       *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of        *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         *
 *   GNU General Public License for more details.                          *
 *                                                                         *
 *   You should have received a copy of the GNU General Public License     *
 *   along with this program; if not, write to the                         *
 *   Free Software Foundation, Inc.,                                       *
 *   59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.             *
 ***************************************************************************/
/*
 * Created on 06.11.2005
 *
 * This file must be called before you can use the frame work.
 * It also can be called for updating the frame work.
*/
 //loading required files
 //the core managing the whole system
 require_once("core/core.php");

$page = getPage();

echo $page;


//session_start();
/* modify $_SESSION */
//session_write_close();

/* begin general includes */
//include "./conf/MyConf.php";

/* end general includes   */

//$CURRENT_ID = session_id();
//$HEADER_DATA = printHeader($CURRENT_ID);
//$BODY_DATA = printBody();
//$FOOTER_DATA = printFooter();


/*function printBody($CURRENT_ID){
	$BODY_DATA = "<h1>Hello ".$CURRENT_ID."!</h1>\n";
/* build page */
//$PAGE = $HEADER_DATA.$BODY_DATA.$FOOTER_DATA;


/* send page */
//echo $PAGE;

/*function printHeader(){
	$HEADER_DATA = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \n \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">".
	"<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">\n".
	"<head>".
	"	<meta name=\"description\" content=\"\" />\n".
	"	<meta name=\"author\" content=\"\" />\n".
	"	<meta name=\"keywords\" content=\"\" />\n".
	"	<title>webmodulized</title>\n".
	"</head>\n".
	"<body>\n";
return $HEADER_DATA;

}*/

/*function printFooter(){
	$FOOTER_DATA = "</body>\n</html>\n";
	
	return $FOOTER_DATA;
	
}*/

?>
