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
 
/****************************************************************************
 *  this file includes the main configuration parameters concerning this 
 * spezific installtion of WEB-MODULIZED.ORG.
 * you will have to modify this parameters ether by your favourite editor
 * or in the administration menu of your side
****************************************************************************/

/*  installation configuration  */
  
/* dont't know if we neet that one:
 * 
 * $WEB_MODULIZED_ROOTPATH="";
 * */


/* sidespezific configuration */
$WEB_MODULIZED_DNSDOMAINNAME="webmodulized.org";
$WEB_MODULIZED_SIDENAME="Web-Modulized.org";
$WEB_MODULIZED_TOPIC="a modular homepage configuration toolkit";

/* mysql configuration */
$MYSQL_SERVER_DNS="localhost"; // use localhost for 172.0.0.1
$MYSQL_SERVER_USER="webmodulized"; // database user of web-modulized
$MYSQL_SERVER_PWD="<your password>"; // password on mysql server for $MYSQL_SERVER_USER
$MYSQL_SERVER_DBNAME="webmodulized"; // name of database on mysql server
$WEB_MODULIZED_DB_PREFIX="alpha"; // prefix for simultaniour installations

/* style configuration */
$MY_STYLE="default";

/***************************************************************************
	meta tag configuration:
	here you can state your meta tags. I will modify them in future


/* Section name */
# $META_CONTENT="Test User";

/* Section description */
#$META_DESCRIPTION="Yet anouther php homepage";


/* ----------------------------------------------------------------------- */
/*                  DO NOT EDIT BELOW THERE SECTION                        */
/* ----------------------------------------------------------------------- */
$MYSQL_SERVER_DB=$MYSQL_SERVER_DBNAME.'-'.$WEB_MODULIZED_DB_PREFIX;

?>