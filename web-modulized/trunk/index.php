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
 
$HEADER_DATA = printHeader();
$BODY_DATA = printBody();
$FOOTER_DATA = printFooter();

function printBody(){
	$BODY_DATA = "<h1>Hello World!</h1>\n";
	
	return $BODY_DATA;
	
} 

function printHeader(){
	$HEADER_DATA = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">".
"<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">".
"<head>".
"	<meta name=\"description\" content=\"\" />".
"	<meta name=\"author\" content=\"\" />".
"	<meta name=\"keywords\" content=\"\" />".
"	<title>webmodulized</title>".
"</head>".
"<body>";

return $HEADER_DATA;

}

function printFooter(){
	$FOOTER_DATA = "</body>\n</html>";
	
	return $FOOTER_DATA;
	
}

?>
