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
 * This file manages the database communication
 */

function connect()
{
/* here use the configuration of the MyConf.php file in the "conf"
 * directory.
 * This file is loaded in den core file at the start of all parsings
 */
 
 $host=$MYSQL_SERVER_DNS;
 $user=$MYSQL_SERVER_USER;
 $pwd=$MYSQL_SERVER_PWD;
 $database=$MYSQL_SERVER_DB;
 
 //create connection to the database
 $server=mysql_connect($host,$user,$pwd);
 if ($server)
 {
   //choose the database an return the connection handler
   $db_connection=mysql_select_db($database,$server);
   if ($db_connection)
   {
      return $server;
   }
   else
   {
     //If the database isn't existing or could not be reached
     echo "Please check the name of the database";
     echo mysql_errno()." : ".mysql_error()."<br>\n";
     return 0;
   }
 }
 else
 {
   //if no a connection couldn't be astablished 0 will be return and an Error message will be given
   echo "A connection to the database couldn\'t be astablished";
   echo mysql_errno()." : ". mysql_error()."<br>\n";
   return 0;
 }
}

?>