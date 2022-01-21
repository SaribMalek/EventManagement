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

include_once "ads.cfg";
include_once "ads.lib";
include_once "admin.lib";

if (!$sentheader) {

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
    <TITLE>PHP Ad Manager</TITLE>
    <link rel="stylesheet" href="admin.css">
</HEAD>
<BODY BGCOLOR="black" TEXT="gray" LINK="white" VLINK="white">
<table border="0"><tr><td width="620" align="center">

<font class="large">Advertising Administration</font><br>
<!-- End of Header -->
<?php

        $sentheader = TRUE;
    }

    switch($view) {
        case "":
            show_menu();
            break;
        case "newad":
            ad_connect_db();
            $dt = strftime("%Y-%m-%d %H:%M:%S",time());
            $ex = strftime("%Y-%m-%d %H:%M:%S",strtotime($ad_expire_default));
            ad_query("insert into ads set active = 'N',createdate = '$dt',".
                "expiredate = '$ex',title='-New Undefined Ad-'");
            $qh = ad_query("select last_insert_id() from ads");
            list($edit) = ad_fetch($qh);
            $new = TRUE;
            include "edit.ad.ph";
            break;
        case "editad":
            if (!empty($delete)) {
                delete("ads","adid",$delete);
            }
            if (!empty($activate)) {
                toggle_active("ads","adid",$activate);
            }
            if (!empty($edit)) {
                include "edit.ad.ph";
            } else {
                show_ads();
            }
            break;
        case "newdomain":
            ad_connect_db();
            ad_query("insert into domains set active = 'N'");
            $qh = ad_query("select last_insert_id() from domains");
            list($edit) = ad_fetch($qh);
            $new = TRUE;
            include "edit.domain.ph";
            break;
        case "editdomain":
            if (!empty($delete)) {
                delete("domains","domainid",$delete);
            }
            if (!empty($activate)) {
                toggle_active("domains","domainid",$activate);
            }
            if (!empty($edit)) {
                include "edit.domain.ph";
            } else {
                show_domains();
            }
            break;
        case "log":
            viewlog($id,$size);
            break;
        case "resetstats":
            $dt = strftime("%Y-%m-%d %H:%M:%S",time());
            ad_connect_db();
            if (!empty($id))
                ad_query("update ads set hits=0,clicks=0,statsreset='$dt' where adid = '$id'");
            else
                ad_query("update ads set hits=0,clicks=0,statsreset='$dt'");

            if (!empty($rp))
                include "$rp";
            else
                include "admin.editad.ph";
            break;
        case "optdb":
            optdb();
            break;
        case "buildhc":
            buildhc();
            break;
        case "imgsize":
            getimgsize($img);
            return;
            break;
        default:
            print "<p><font class=\"large\">Module '$view' not implemented</font></p>";
            print "<FORM ACTION=\"admin.ph\"><DIV ALIGN=\"CENTER\"><INPUT TYPE=\"SUBMIT\" VALUE=\"Main Menu\"></DIV></FORM>";
            break;
    }

    if (!$sentfooter) {
?>
<!-- Footer -->
</td></tr></TABLE>
<TABLE CELLPADDING="5" CELLSPACING="0" BORDER="0" WIDTH="620"><TR>
	<TD ALIGN="CENTER">
      <BR>
		<FONT CLASS="small"><I>Copyright &copy; 2001, Digitek Design</I></FONT>
	</TD>
</TR></TABLE>

<!-- End of Footer -->
</BODY>
</HTML><?php $sentfooter = TRUE;} ?>
