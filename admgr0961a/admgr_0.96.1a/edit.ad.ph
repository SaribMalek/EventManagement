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
        ad_query("delete from ads where adid = '$edit'");
        $new = FALSE;
    }
    $edit = "";
    include "admin.ph"; return;
}

if (empty($B1)) {
    $qh = ad_query("select * from ads where adid = '$edit'");
    if (ad_queryrows($qh) > 0)
        $r = ad_fetch($qh);
    else
        return;
} else {
    qpe(&$title,&$banner,&$url,&$trackingurl,&$logfile,&$textad,&$textadurl,&$notes);

    $domains = implode("|",$domains);
    if ($logtype != NULL)
        $logtype = join(",",$logtype);
    else
        $logtype = "";

    if (strtoupper($updmodifydate) == 'ON')
        $modifydate = strftime("%Y-%m-%d %H:%M:%S",time());

    $iq = "update ads set ".
        "domains='$domains',".
        "title='$title',".
        "banner='$banner',".
        "width='$width',".
        "height='$height',".
        "url='$url',".
        "logfile='$logfile',".
        "trackingurl='$trackingurl',".
        "textad='$textad',".
        "textadurl='$textadurl',".
        "hits='$hits',".
        "clicks='$clicks',".
        "adclass='$adclass',".
        "logtype='$logtype',".
        "createdate='$createdate',".
        "modifydate='$modifydate',".
        "expiredate='$expiredate',".
        "lastdisplay='$lastdisplay',".
        "statsreset='$statsreset',".
        "active='$active',".
        "notes='$notes'".
        " where adid='$edit'";

    $qh = ad_query($iq);
    print mysql_error();
    $edit = "";
    $new = FALSE;
    include "admin.ph";
    return;
}

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--

function getimagesize() {
    window.open("admin.ph?view=imgsize&img=" + editad.banner.value, "getimagesize",
           "height=70,width=250,resizable=1");
}
//-->
</SCRIPT>
<B>Edit Advertising Item</B>
<form method="POST" action="admin.ph" name="editad">
<table width=600 border=0 cellspacing=1 cellpadding=1 class=edittop>
	<tr>
		<td width="100" class="desc">AD ID</td>
		<td width="320">
        <input type="text" name="edit" value="<?php print $r[adid];?>" readonly>
        <input type="hidden" name="view" value="editad">
        <input type="hidden" name="new" value="<?php print $new;?>">
		</td>
        <td width="80" class="desc">Class</td>
        <td width="80"><select name="adclass">
            <?php   $ct = 0; while ($ct < count($ad_classes)) {
                        print "<option value=\"$ct\" "; issel($ct,$r[adclass]);
                        print ">$ad_classes[$ct]</option>\n"; $ct++; } ?>
            </select>
        </td>
	</tr>
	<tr>
		<td class="desc">Title</td>
		<td colspan=3><input type="text" name="title" size="30" value="<?php print $r[title];?>"></td>
	</tr>
    <tr>
    </tr>
	<tr>
		<td class="desc">Banner</td>
    	<td><input type="text" name="banner" size="60" value="<?php print $r[banner];?>"></td>
		<td class="desc"><a href="javascript:getimagesize()">Dimensions</a></td>
    	<td><input type="text" name="width" size="4" value="<?php print $r[width];?>"> x
        <input type="text" name="height" size="4" value="<?php print $r[height];?>">
    	</td>
	</tr>
	<tr>
		<td class="desc">URL</td>
		<td><input type="text" name="url" size="60" value="<?php print $r[url];?>"></td>
	</tr>
	<tr>
		<td class="desc">Tracking URL</td>
		<td><input type="text" name="trackingurl" size="60" value="<?php print $r[trackingurl];?>"></td>
	</tr>
	<tr>
        <td class="desc">Text Ad</td>
		<td><input type="text" name="textad" size="60" value="<?php print $r[textad];?>"></td>
	</tr>
	<tr>
		<td class="desc">Text Ad URL</td>
		<td><input type="text" name="textadurl" size="60" value="<?php print $r[textadurl];?>"><br>
		<font class="small"><i>If not defined, will use main URL<i></font></td>
	</tr>
	<tr>
		<td class="desc">Logfile</td>
		<td><input type="text" name="logfile" size="60" value="<?php print $r[logfile];?>"></td>
		<td colspan="2"><input type="checkbox" name="logtype[]" value="hits" <?php ischk("hits",$r[logtype]);?>> Hits &nbsp;
		<input type="checkbox" name="logtype[]" value="clicks" <?php ischk("clicks",$r[logtype]);?>> Clicks
		</td>
	</tr>
    <tr>
        <td class="desc">Domains</td>
        <td><?php $domains=explode("|",$r[domains]); listdomains($domains); ?></td>
    </tr>
    </table>

    <table width=600 border=0 cellspacing=1 cellpadding=1 class=editbottom>
	<tr>
		<td width="100" class="desc">Hits</td>
		<td width="190"><input type="text" name="hits" size="10" value="<?php print $r[hits];?>"></td>
		<td width="100" class="desc">Clicks</td>
		<td width="190"><input type="text" name="clicks" size="10" value="<?php print $r[clicks];?>"></td>
	</tr>
	<tr>
		<td class="desc">Create Date</td>
		<td><input type="text" name="createdate" size="20" value="<?php print $r[createdate];?>"></td>
		<td class="desc">Modify Date</td>
		<td><input type="text" name="modifydate" size="20" value="<?php print $r[modifydate];?>"></td>
	</tr>
	<tr>
		<td class="desc">Expire Date</td>
		<td><input type="text" name="expiredate" size="20" value="<?php print $r[expiredate];?>"></td>
		<td class="desc">Last Display</td>
		<td><input type="text" name="lastdisplay" size="20" value="<?php print $r[lastdisplay];?>"></td>
	</tr>
	<tr>
		<td class="desc">Active</td>
		<td><input type="text" name="active" size="2" value="<?php print $r[active];?>">
		<font class="small"><i>[Y]es [N]o</i></font></td>
		<td class="desc">Stats Reset</td>
		<td><input type="text" name="statsreset" size="20" value="<?php print $r[statsreset];?>"></td>
	</tr>
	<tr>
		<td class="desc">Notes</td>
		<td colspan="3"><textarea name="notes" rows=4 cols=60><?php print $r[notes];?></textarea></td>
	</tr>
	<tr>
		<td colspan="4" align=center>
            <input type="checkbox" checked name="updmodifydate"> Update Modify Date<br>
			<input type="submit" value="Update" name="B1"> <input type="submit" value="Cancel" name="B1">
		</td>
	</tr>
</table>
</form>

