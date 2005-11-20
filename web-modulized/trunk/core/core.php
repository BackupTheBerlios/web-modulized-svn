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
 * This is the core file containing the management of all
 * modules. All the core modules have to be loaded hardcoded. For more details see 
 * software structure documentation on http://www.web-modulized.org
 * @todo there need to be an error message if a core module couldn't be loaded
 */
 require_once("../coremodules/core_module_systemmessagemanagement.php"); //managing the Errormessages, warnings, all the messages
 require_once("../coremodules/core_module_layoutmanager.php"); //arranges the outputs of all the (core-)modules
 require_once("../coremodules/core_module_usermanagement.php"); //manages the users and their privileges
 
function getPage()
{
 return generatePage();	
}
 
 /*
  * requireingOptionalCoreModules()
  * this function generates a list of all optional core modules in optional_coremodules and requires them
  */
function requireingOptionalCoreModules($require_path)
{
	//if no path was given
	if ($require_path==null) 
	{
	    $require_path="optional_coremodules";
	}
	//getting the list of modules to be required
	$array_list_of_core_modules = getListOfCoreModules($require_path);
	
  	//requiring the modules
	while ($current_coreModule_Element = array_pop($array_list_of_core_modules)) 
	{
  		if (!requireCoreModule($require_path,$current_coreModule_Element )) 
		{
			//echo "<p><font color=\"#ff0000\">Das Modul ".$current_element."konnte nicht geladen werden.Bitte wenden sie sich an den Webmaster</font></p>\n";
  		   	break; 
  		}
  	} 
} 
  
/**
 * getListOfCoreModules()
 * 
 * Returns a list of all available modules in directory modules. A Module is added if
 * its main file (Which is named as the modulename .php) exists. 
 * This list is created by reading the directory modules and taking every valid module.
 * A valid module owns a subdirectory in the modules path with the name of the module
 * and a file in it with the modulename.php. I.e. if the modules dir name is foo the files
 * name is foo.php (modules/foo/foo.php).
 * The list of modules can further be altered by using flags which can be set in the modules.
 * I.e. every module that should be displayed in the navigation has the following line:
 * 'ShowInNavbar=true'. To receive a list of all modules in the modules directory the function
 * must be called with the $modules_flag containing the string 'ALL'.
 * 
 * @param $pathToModules has the path to the Modules standard value is modules
 *
 * example for pathToModules : ../modules (relative to the library dir)
 * 
 * @return $array_module_directories
 **/

function getListOfCoreModules ($pathToCoreModules)
{	
	if ($pathToCoreModules=="" || $pathToCoreModules==NULL) 
	{
	    $coreModules_path = "coremodules";
	}
	else
	{
		$coreModules_path = $pathToCoreModules;
	}
	
	//Array where the modules are saved in
	$array_coreModules[] = null; 
	$indexModule = 0;

  	//getting a list of elements in the required path
  	$dir_handle = opendir($coreModules_path);

	$indexCoreModules=0;

	//durchlaufen aller Verzeichnisse im Required Path
  	while (false !== ($current_element = readdir($dir_handle))) 
	{
		//excluding files and dirs "." and ".."
  		if (filetype($coreModules_path."/".$current_element) == 'file' and $current_element != '.' and $current_element != '..') 
		{
			//adding the core module to the list of core modules
      		$array_module_directories[$indexCoreModules] = $current_element; 
			$indexCoreModules++; 
    	} 
  	} 
	closedir($dir_handle);
	return $array_coreModules;
} 

function RequireModule ($require_path,$listOfModulenames)
{
	$module_exists = true;
	$intCountOfModules = sizeof($listOfModulenames);
		
		
	//wenn kein require_path übergeben wurde
	if ($require_path==null||$require_path == "") 
	{
	    $require_path="modules";
	}
	
	for ($index=0;$index<=$intCountOfModules-1;$index++)
	{
		if (file_exists($require_path."/".$listOfModulenames[$index]."/".$listOfModulenames[$index].".php")) 
		{
	    			require_once ($require_path."/".$listOfModulenames[$index]."/".$listOfModulenames[$index].".php");
	    }
		else
		{
			echo "Pfad".$index." :".$require_path."/".$listOfModulenames[$index]."/".$listOfModulenames[$index].".php <br>";
		
			//Fehlermeldung ausgeben, dass das Modul nicht geladen werden konnte
			echo "<p><font color=\"#ff0000\">Das Modul ".$listOfModulenames[$index]." konnte nicht geladen werden.Bitte wenden sie sich an den Webmaster</font></p>\n"; 
			$module_exists = false;
		}
	}
	return $module_exists;
}
?>
  
 
 /*
  * show_page ()
  * 
  * This function collects all the data from the core moduls
  * and sends it to the browser
  */
 
 function show_page ()
 {
 	
 }
 
 /*
  * update ()
  * 
  * This function calls all the core moduls for notice them 
  * that there has been made changes to data
  */
  
  function update ()
  {
  }
  
  /*
   * initialize ()
   * 
   * If the frame work is called for the first time (not
   * for setting up) this function will be called first, to
   * initialize all variables and enviroment settings
   */
   
   function initialize ()
   {
   }
?>
