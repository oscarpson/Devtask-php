<?php
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
    $id=$_GET['rs_id'];
    
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<title>::.Developer Task.::</title>
</head>
<body>
<div id="top_style">
        <div id="top_style_text">
       Fee </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="4">
        <td>Fees Item:</td>
            	<td>
                	<input type="text" name="fnametxt" id="textbox" value=""/>
                </td>
                <td>Amount:</td>
            	<td>
                	<input type="text" name="fnametxt" id="textbox" value=""/>
                </td>
            </tr>
            <tr><br></tr>
            <tr><br></tr>
            <td></td><td></td>
                <td>
                <button style="height:30px;width:100px" type="button" title="view">Save</button>
                </td>
            </tr>
         </table>
         </div>
        
         
       </form>
       </div>
       <body>
       </html>  