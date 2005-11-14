<?php
/*
 * Created on 06.11.2005
 *
 * This file does all the requests on the data base. For the
 * reason that there ist just only one connection per session
 * on to the data base. So controll on none closed connection
 * is reduce to a minimum. 
 * Non closed connection could be critical due to locked tables.
 */
?>
