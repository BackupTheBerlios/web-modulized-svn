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

/*******************************************************************************************************************
* html.php
*
* This file provides the functions to display a proper html page, including the css references
*******************************************************************************************************************/


/*******************************************************************************************************************
* htmlStart()
*
* This function adds an standard html header to every webpage created.
*******************************************************************************************************************/

function htmlStart()
{
	echo 	"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">".
			"<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">".
			"<head>\n".
			"	<meta name=\"description\" content=\"\" />\n".
			"	<meta name=\"author\" content=\"\" />\n".
			"	<meta name=\"keywords\" content=\"\" />\n".
			"	<title>webmodulized</title>\n".
			"</head>\n".
			"<body>\n";
}


/*******************************************************************************************************************
* htmlStop()
*
* This function adds html endtags to every webpage created.
*******************************************************************************************************************/

function htmlStop()
{
	echo "	</body>\n";
	echo "</html>\n";
}
?>
 
?>
