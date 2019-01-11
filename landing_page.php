<?php
	session_start();
	
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::.Developer Task.::</title>
<link rel="stylesheet" type="text/css" href="css/everyone_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>

</head>

<body>

   
</div>
<br /><br />
<div id="admin">
	
        <div id="lmain">
                <a href="#" title="logo" ><img src="picture/logo.png" /></a>
                <div id="leftmanu">
                    <div>
                    <font size="5" face="sans-serif"><marquee>WELCOME! WELCOME!</marquee></font>
                    <br>
                    <br>
                    </div>
                	<div >
                    
                        <a href="?tag=student_entry" title="HOME (Shift+Ctrl+H)"><strong>&nbsp;HOME</strong></a><br />
                	</div>
                    
                
                    
                    
                 <div>
                    	<a href="landing_page.php?tag=student_entry" title="Shift+1"> &nbsp;<strong>Students Admission </strong></a><br />
                    </div>
                    
                    <div>
                        <a href="landing_page.php?tag=fee_item" title="Shift+2">&nbsp;<strong>Create Fee Items</strong></a>
                    </div>
                    
                     <div>
                    	<a href="#" class="customer" title="Shift+3">&nbsp;<strong>Create Invoice</strong></a>
                    </div>
                    
                     <div>
                    	<a href="#" class="customer" title="Shift+4">&nbsp;<strong>Enter School Fees</strong></a>
                    </div>
                    
                     
                    
                     <div>
                    	<a href="landing_page.php?tag=view_report" class="customer" title="Shift+Ctrl+T">&nbsp;<strong>Report</strong></a>
                    </div>
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    		<a href="#" title="Student"><img src="picture/student.png" hspace="10px" /></a>
            <a href="#" title="Teacher"><img src="picture/teacher.png" hspace="20px" /></a>
            <a href="#" title="Faculties"><img src="picture/faculties.png" hspace="15px" /></a>
            <a href="#" title="Subject"><img src="picture/subject.png" hspace="10px" /></a>
            <a href="#" title="Score"><img src="picture/score.png" hspace="20px" /></a>
            <a href="#" title="User"><img src="picture/user.png" hspace="10px" /></a>
            <a href="#" title="Location"><img src="picture/location.png" hspace="10px" /></a>
            <a href="#" title="Article"><img src="picture/article.png" hspace="10px" /></a>
            <a href="#" title="About us"><img src="picture/logo2.jpg" hspace="15px" /></a>
            
         </div><!--end of pic_manu -->
        
        
        
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                <li id="li_menu"><a href="landing_page.php?tag=student_entry">Students</a>
                
                </li>
                <li id="li_menu"><a href="#">Schools</a>
                 </li>
                <li id="li_menu"><a href="">Courses</a>
                </li>
                <li id="li_menu"><a href="#">Fees</a>
                 
                </li>
           <li id="li_menu"><a href="">Exams</a>
                
                  </li>
                <li id="li_menu"><a href="">HR</a>
               
            </li>
            <li id="li_menu"><a href="">Expenses</a>
            </li>
                <li id="li_menu" style="border-right:#CCC"><a href="">Users</a>
               </li>
                <li id="li_menu"><a href="">Logout</a>             
                  </li>
               
                           
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("Students_Entry.php");
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        elseif($tag=="fee_item")
                            include("Fee_Items.php");
						elseif($tag="view_report")
                            include("Report.php");

                        
                           
							
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->

</body>
</html>