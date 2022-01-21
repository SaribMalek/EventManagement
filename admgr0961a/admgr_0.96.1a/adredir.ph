<?php

/////////////////////////////////////////////////////////////////////////////////
//
//  PHP Ad Manager
//  Copyright (c) 2001, Digitek Design/Chris Allen
//  http://www.digitekdesign.com/software/
//  http://admgr.sourceforge.net/
//  Email: development@digitekdesign.com
//
//  This program is free software; you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation; either version 2 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program; if not, write to the Free Software
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
/////////////////////////////////////////////////////////////////////////////////

// Change this to reflect the location of your 'ads.lib' file
include "/web/com/digitekdesign/www/ads/ads.lib";

// Abort if no ad ID was passed
if (empty($ad)) {
    echo "<HTML><HEAD><TITLE>Error</TITLE></HEAD><BODY><H1>Error</H1>";
    echo "<H4>This script cannot be accessed directly.</H4></BODY></HTML>";
    return;
}

$dt = strftime("%Y-%m-%d %H:%M:%S",time());
$site = ad_getsite($p);

ad_connect_db();
$qh = ad_query("select * from ads where adid = '$ad'");
$nr = ad_queryrows($qh);

if($nr > 0) { $r = ad_fetch($qh); } else { return; }

// Add entry to mysql log
$qh = ad_query("insert into adlog SET ".
    "adid = '$r[adid]',".
    "type = 'click',".
    "remotehost = '$REMOTE_HOST',".
    "remoteaddr = '$REMOTE_ADDR',".
    "site = '$site[name]',".
    "entrydate = '$dt'");

// Update Information (unless localhost)
if (!ad_is_localhost()) {

    // Update click count
    $r[clicks] = $r[clicks] + 1;
    $qh = ad_query("update ads SET clicks = '$r[clicks]' WHERE adid = '$ad'");

    // If logfile is not empty, make an entry
    // Format: YYYY-MM-DD HH:MM:SS CLICK|HIT domain clientaddress
    if (!empty($r[logfile])) {
        if($fp = fopen($site[logpath]."/".$r[logfile],"a+")) {
            $ca = getenv("REMOTE_HOST");
            if(empty($ca)) { $ca = getenv("REMOTE_ADDR"); }
            fputs($fp,"$dt CLICK $site[name] $ca\n");
            fclose($fp);
        }
    }
}

// Redirect to URL
header ("Location: $r[url]");

?>
