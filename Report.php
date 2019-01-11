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
        Report </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0" bgcolor="#5378e0">
            <tr>
                <td>All fee Balances
                </td>
            </tr>
        	<tr>
            	<td>Select Term:</td>
            	<td>
                	<select name='balance_period'>
                        <option>Jan-April</option>
                        <option>Jan-April</option>
                        <option>Jan-April</option>
                    </select>
                </td>
            </tr>
            
            <tr>
            	
            	<td>
                <select name='Year'>
                        <option>Year</option>
                       
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <button type="button" title="view">view</button>
                </td>
                <td>
                <button type="button" title="view">cancel</button>
                </td>
            </tr>
         </table>
         <div>
         <br>
         <table border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFF00">
            <tr>
                <td>Summary Fees Paid and Balances(GLANCE)
                </td>
            </tr>
        	<tr>
            	<td>Select Term Session:</td>
            	<td>
                	<select name='session'>
                        <option>Session Year</option>
                        <option>Session Year</option>
                        <option>Session Year</option>
                    </select>
                </td>
            </tr>
            
            <tr>
            	
            	<td>
                <select name='Year'>
                        <option>Year</option>
                       
                    </select>
                </td>
                <td><button type="button" title="view">view</button></td>
            </tr>
         </table>
         </div>
        </div>
        <div>
    	<table border="0" cellpadding="4" cellspacing="0" bgcolor="#008000">
            <tr>
                <td>Fees Report(all fees paid)
                </td>
            </tr>
        	<tr>
            	<td>Select Term:</td>
            	<td>
                	<select name='balance_period'>
                        <option>Jan-April</option>
                        <option>Jan-April</option>
                        <option>Jan-April</option>
                    </select>
                </td>
            </tr>
            
            <tr>            	
            	<td>
                <select name='Year'>
                        <option>Year</option>
                       
                    </select>
                </td>                
              
            </tr>
            <tr>
           
                <td>
                <button type="button" title="view">view</button>
               
                </td>                
            </tr>
         </table>
         <div>   
         <table border="0" cellpadding="4" cellspacing="0" bgcolor="#800000">
            <tr>
                <td>Fees Report(all fees paid)
                </td>
            </tr>
        	<tr>
            	<td>Select Term:</td>
            	<td>
                	<select name='balance_period'>
                        <option>Jan-April</option>
                        <option>Jan-April</option>
                        <option>Jan-April</option>
                    </select>
                </td>
            </tr>
            
            <tr>            	
            	<td>
                <select name='Year'>
                        <option>Year</option>
                       
                    </select>
                </td>                
              
            </tr>
            <tr>
           
                <td>
                <button type="button" title="view">view</button>
               
                </td>                
            </tr>
         </table> 
         </div>       
        </div>
        
     </form>
</div>   
  
</body>
</html>       