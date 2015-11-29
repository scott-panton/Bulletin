<?php

/**
 * 
 * The database connection script.
 * Use config.php to change settings.
 * 
 * Copyright (c) 2003-2005 Chris Goerner
 * Copyright (c) 2012-2013 Daniel Jolly
 * Copyright (c) 2015 Scott Panton
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2 as published by
 * the Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 **/

include 'config.php';

$dbcx = mysql_connect($db_server, $db_user, $db_password);

if (!$dbcx) {
    echo "Error connecting to database server: <b>$db_server</b> <BR>";
    exit();
} 
if (! @mysql_select_db($db_database, $dbcx)) {
	echo "Error selecting database: <b>$db_database</b> <BR>" . mysql_error();
    exit();
} 

?>