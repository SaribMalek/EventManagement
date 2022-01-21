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

if (empty($edit)) { return; }

ad_connect_db();
if ($B1 == "Cancel") {
    if ($new) {
        ad_query("delete from domains where domainid = '$edit'");
        $new = FALSE;
    }
    $edit = "";
    include "admin.ph"; return;
}

if (empty($B1)) {
    $qh = ad_query("select * from domains where domainid = '$edit'");
    if (ad_queryrows($qh) > 0)
        $r = ad_fetch($qh);
    else
        return;
} else {
    qpe(&$name,&$redir,&$logpath,&$notes);

    if (strtoupper($updmodifydate) == 'ON')
        $modifydate = strftime("%Y-%m-%d %H:%M:%S",time());

    $iq = "update domains set ".
        "name='$name',".
        "redir='$redir',".
        "logpath='$logpath',".
        "modifydate='$modifydate',".
        "notes='$notes',".
        "active='$active'".
        " where domainid='$edit'";

    $qh = ad_query($iq);
    print mysql_error();
    $new = FALSE;
    $edit = "";
    include "admin.ph";
    return;
}

?>

<B>Edit Domain</B>
<form method="POST" action="admin.ph">
<table width=600 border=0 cellspacing=1 cellpadding=1 class=edit>
	<tr>
		<td class="desc">Domain ID</td>
		<td>
        <input type="text" name="edit" value="<?php print $r[domainid];?>" readonly>
        <input type="hidden" name="view" value="editdomain">
        <input type="hidden" name="new" value="<?php print $new;?>">
		</td>
	</tr>
	<tr>
		<td class="desc">Name</td>
		<td><input type="text" name="name" size="50" value="<?php print $r[name];?>"></td>
	</tr>
	<tr>
		<td class="desc">Redir Script</td>
    	<td><input type="text" name="redir" size="60" value="<?php print $r[redir];?>"><br>
    	<font class="small"><i>Leave blank to use system default (<?php print $ad_redir_default;?>)</i></font></td>
	</tr>
	<tr>
		<td class="desc">Log Path</td>
		<td><input type="text" name="logpath" size="60" value="<?php print $r[logpath];?>"><br>
    	<font class="small"><i>Leave blank to use system default (<?php print $ad_logpath_default;?>)</i></font></td>
	</tr>
	<tr>
		<td class="desc">Modify Date</td>
		<td><input type="text" name="modifydate" size="20" value="<?php print $r[modifydate];?>">
		<font class="small"><i>2001-01-01 12:00:00</i></font></td>
	</tr>
	<tr>
		<td class="desc">Active</td>
		<td><input type="text" name="active" size="2" value="<?php print $r[active];?>"><font class="small"><i>[Y]es [N]o</i></font></td>
	</tr>
	<tr>
		<td class="desc">Notes</td>
		<td><textarea name="notes" rows=4 cols=50><?php print $r[notes];?></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
            <input type="checkbox" checked name="updmodifydate"> Update Modify Date<br>
			<input type="submit" value="Update" name="B1"> <input type="submit" value="Cancel" name="B1">
		</td>
	</tr>
</table>
</form>

