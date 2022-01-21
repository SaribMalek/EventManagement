<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/index.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/wysiwyg.js"></script>
<script src="js/prepareUpload.js"></script>
</head>
<body onLoad="iFrameOn();">
<div id="container">
	<div class="content_wrapper">
    	<form method="post" action="insert.php" enctype="multipart/form-data" name="addform" id="addform">
    	<table>
        	<tr>
            	<th colspan="2" >Insert Ads</th>
     		</tr>
            <tr>
            	<td></td>
                <td style="color:red;">
					<?php 
						if(isset($_GET['message'])){ 
							echo $_GET['message']; 
						}
					?>
                </td>
            </tr>
            <tr>
            	<td>Subject:</td>
                <td><input type="text" name="subject" id="subject" placeholder="your subject here"></td>
            </tr>
            <tr>
            	<td></td>
                <td>
                	<select name="fontname" id="fontname" onChange="iFontName()">
                    	<option id="1">Verdana</option>
                        <option id="2">Arial</option>
                        <option id="3">Georgia</option>
                        <option id="4">Trebuchet MS</option>
                        <option id="5">Times New Roman</option>
                        <option id="6">Sans-serif</option>
                        <option id="7">Comic Sans MS</option>
                    <select>
                	<select name="fontsize" id="fontsize" onChange="iFontSize()">
                    	<option id="1">1</option>
                        <option id="2">2</option>
                        <option id="3">3</option>
                        <option id="4">4</option>
                        <option id="5">5</option>
                        <option id="6">6</option>
                        <option id="7">7</option>
                    <select>
                    <select name="forecolor" id="forecolor" onChange="iForeColor()" style="width:40px;">
                        <option id="2" style="background:#000; color:#000;" value="black">black</option>
                        <option id="1" style="background:#FFF; color:#FFF;" value="white">white</option>
                        <option id="3" style="background:green; color:green;" value="green">green</option>
                        <option id="4" style="background:red; color:red;" value="red">red</option>
                        <option id="5" style="background:blue; color:blue;" value="blue">blue</option>
                        <option id="6" style="background:yellow; color:yellow;" value="yellow">yellow</option>
                        <option id="7" style="background:violet; color:violet;" value="violet">violet</option>
                        <option id="8" style="background:pink; color:pink;" value="pink">pink</option>
                        <option id="9" style="background:orange; color:orange;" value="orange">orange</option>
                        <option id="10" style="background:brown; color:brown;" value="brown">brown</option>
                    <select>
                    <input type="button" onClick="iJustifyLeft()" value="Left"> 
                    <input type="button" onClick="iJustifyCenter()" value="Center">
                    <input type="button" onClick="iJustifyRight()" value="Right">
                </td>
            </tr>
            <tr>
            	<td></td>
            	<td>
                	<input type="button" onClick="iBold()" value="B"> 
  					<input type="button" onClick="iUnderline()" value="U">
  					<input type="button" onClick="iItalic()" value="I">
  					<input type="button" onClick="iHorizontalRule()" value="HR">
  					<input type="button" onClick="iUnorderedList()" value="UL">
  					<input type="button" onClick="iOrderedList()" value="OL">
  					<input type="button" id="btnImage" value="Image">
            	</td>
            </tr>
            <tr>
            	<td></td>
            	<td>
                	 <div id="image" style="display:none;">
    					<form enctype="multipart/form-data" method="post" action="image_upload.php" name="frmFile" id="frmFile">
                            <input name="file" type="file" id="file" />
                            <input readonly type="text" name="path" id="path" style="width:150px;">
                           	<input type="button" name="btnok" id="ok" value="Ok" onClick="iImage()">
    					</form>
					</div>
                </td>
            </tr>
            <tr>
            	<td>Body:</td>
                <textarea style="display:none;" name="body" id="body"></textarea>
                <td><iframe name="richTextField" id="richTextField" scrolling="no" style="border:#CCC 1px solid; width:800px; height:380px;"></iframe></td>
            </tr>
            <tr>
            	<td colspan="3"><input type="submit" id="submit" name="submit" value="Submit" onClick="submit_form();"></td>
            </tr>
        </table>
        </form>
    </div>
</div>
</body>
</html>