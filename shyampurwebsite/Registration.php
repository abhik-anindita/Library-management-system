<?php
include('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Old Blog Template - Free CSS Layout</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<link rel="stylesheet" type="text/css" href="tabcontent.css" />
<script type="text/javascript" src="tabcontent.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
</head>
<body>

<div id="templatemo_header_panel">
    	<div id="templatemo_title_section">
				<h1 style="font-size:35px;font-weight: bold; color: #000;;  text-shadow:#fff 1px 3px 3px; padding-bottom:5px; padding-top:0px; vertical-align:top; "><b>Shyampur Siddheswari Mahavidyalaya </b></h1><br>
          <h1 style="font-size:30px;font-weight: bold; color: #000;;  text-shadow:#fff 1px 3px 3px; padding-bottom:2px; padding-top:5px; vertical-align:top; " ><b> LIBRARY</b></h1><br>
	 <h1 style="font-family: 'Comic Sans MS';font-size:10px; color: #fff;;  text-shadow:#000 20px 20px 20px; padding-bottom:5px; padding-top:10px; vertical-align:top;"> Increase your knowledge</h1>
  </div>
    </div> <!-- end of templatemo header panel -->
    
    <div id="templatemo_menu_panel">
    	<div id="templatemo_menu_section">
            <ul>
                <li><a href="index.html" >Home</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="Rule.php">Rules</a></li>
                <li class="active"><a href="Registration.html">Registration</a></li>
                <li><a href="Login.php">Login</a></li>  
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="About.php">About</a></li> 
                <li><a href="Feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact Us</a></li>                     
            </ul> 
		</div>
    </div> <!-- end of menu -->
    
	<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                    <div class="post_title">
                    	Registration</div>
                    <div class="post_info">
                    	Posted by <a href="#">Admin</a>, October 12, 2021 at 10:12 am, in <a href="#">Class Room.</a>
                    </div>
                    <div class="post_body">
                    <div class="clr"></div>
                    <?php     //start php tag
//include connect.php page for database connection

//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['Submit'])!='')
{
If($_REQUEST['username']=='' || $_REQUEST['emailid']=='' || $_REQUEST['phonenumber']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']==''|| $_REQUEST['subject']=='' || $_REQUEST['gender']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into `users`(`username`,`emailid`,`phonenumber`,`password`,`repassword`,`subject`,`gender`) values('".$_REQUEST['username']."', '".$_REQUEST['emailid']."', '".$_REQUEST['phonenumber']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."', '".$_REQUEST['subject']."', '".$_REQUEST['gender']."')";
//print_r($sql);die;
$res=mysqli_query($con,$sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>
            
                </div>
              
                </div>
                
                </div> <!-- End of a post-->
                
                
            </div> <!-- end of content left -->
            
        
            <div id="templatemo_content_right">
            
            	<div class="templatemo_right_section">
					<div class="tag_section">
                        <ul id="countrytabs" class="shadetabs">
                            <li><a href="#" rel="search" class="selected">Search</a></li>                
                            <li><a href="#" rel="Topics">Topics</a></li>
                            <li><a href="#" rel="Session">Session</a></li>
                        </ul>
					</div>
				
                    <div class="tabcontent_section">
                        <div id="search" class="tabcontent">
                            <form method="get" action="#">
                                <input class="inputfield" name="searchkeyword" type="text" id="searchkeyword"/>
                                <input type="submit" name="submit" class="button" value="Search" />
                            </form>                    
                        </div>
					
                        <div id="Topics" class="tabcontent">
                          <ul>
                            <li><a href="#">Science</a>
                          <ul>
                              <li><a href="#">Math</a> </li>
                              <li><a href="#">Physics</a></li>
                              <li><a href="#">cemistry</a></li>
                              <li><a href="#">Zoology</a> </li>
                              <li><a href="#">Botany</a> </li>
                              <li><a href="#">Anthropology</a> </li>
                              <li><a href="#">Computer science</a></li>
                              <li><a href="#">Food & Nutrition</a> </li>
                              <li><a href="#">Economics</a> </li>
                           </ul>       
                           </li>
                             <li><a href="#">Arts</a>
                             <ul>
                              <li><a href="#">Bengali</a> </li>
                              <li><a href="#">English</a></li>
                              <li><a href="#">sanskrit</a></li>
                              <li><a href="#">Political Science</a> </li>
                              <li><a href="#">Philosophy</a> </li>
                              <li><a href="#">Education</a> </li>
                              <li><a href="#">History</a> </li>
                              <li><a href="#">Geography</a> </li>
                              <li><a href="#">Sociology</a> </li>
                              <li><a href="#">Music</a> </li>
                             </ul>
                             </li>
                             <li><a href="#">Commerce</a>
                            <ul>
                              <li><a href="#">Accountent</a> </li>
                            </ul>
                            </li>
                            </ul>                        
                        </div>
		            
                        <div id="Session" class="tabcontent">
                            <ul>
                                <li><a href="#">January 2009</a></li>
                                <li><a href="#">December 2008</a></li>
                                <li><a href="#">November 2008</a></li>
                                <li><a href="#">October 2008</a></li>
                                <li><a href="#">September 2008</a></li>
                            </ul>                         
                        </div>
					</div>

					<script type="text/javascript">
                    
                    var countries=new ddtabcontent("countrytabs")
                    countries.setpersist(true)
                    countries.setselectedClassTarget("link") //"link" or "linkparent"
                    countries.init()
                    
                    </script> <!--- end of tag -->
                </div>
            	
                
                <div class="templatemo_right_section">
                	<h2>Notification</h2>
                    <h5 style="background-color: aliceblue;">
					<ul>
                        <marquee direction="up" behavior="scroll" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" style="height:241px;">
                            <div class=" ">
                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/5th-Chance-Admission-Notice-.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 2021-2022 শিক্ষাবর্ষে অনলাইনে ভর্তির বিজ্ঞপ্তি (All Category Few Seats) (5th Phase) – 27/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/8th-List-1.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 8th List of General Courses Online Admission 2021-2022 – 27/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/11th-List.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 11th List of Honours Courses Online Admission 2021-2022 – 27/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/3rd-Chance-Admission-Notice-Copy.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 2021-2022 শিক্ষাবর্ষে অনলাইনে ভর্তির বিজ্ঞপ্তি (Only for SC/ST/OBC-A/OBC-B Category) (3rd Phase) – 16/09/2021</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/Semester-Admission-Notice-23-2.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Admission Notice for 3rd &amp; 5th Semester – 15/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/pdfjoiner-13.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 1st List of Honours &amp; General Courses (Phase – II) – 14/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/3rd-List-General.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 3rd List of General Courses Online Admission 2021-2022 – 14/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/2nd-Chance-Admission-Notice-.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 2021-2022 শিক্ষাবর্ষে অনলাইনে ভর্তির বিজ্ঞপ্তি (2nd Phase) – 11/09/2021</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/Marksheet-Notice-III-I.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Marksheet Distribution Notice for Semester I/III Honours &amp; General – 11/09/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/09/3rd-List-1.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 3rd List of Honours Courses Online Admission 2021-2022 – 06/09/2021</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/08/list.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> B.A./B.Sc./B.Com. Honours &amp; General Online Admission 2021-22 Merit List Link – 28.08.2021</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/08/Semester-Admission-Notice-22-1.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Admission Notice for B.A./B.Sc./B.Com. Honours &amp; General 3rd Semester 2021-2022 Session – 26/08/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/08/Notice-Admission.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Reschedule of Online Admission Process  2021-2022 – 21/01/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/08/Semester-Admission-Notice-21-2.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Admission Notice for B.A./B.Sc./B.Com. Honours &amp; General 5th Semester 2021-2022 Session – 11/08/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/08/Admit-Card-Seme-II-2021.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> B.A./B.Sc./B.Com. Semester – II, Admit Card &amp; Instruction- 09/08/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/08/Admi.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> B. A., B. Sc. Semester – IV (Honours &amp; General) Admit Cards              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/BCOM-Admit-Card-4th-Sem.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> B.Com. Semester – IV Admit Card &amp; Instruction- 30/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Internal-Assesment-Student-LIst-1.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> পরিবেশবিদ‍্যার ইন্টারনাল পরীক্ষার খাতা জমা দেওয়ার তালিকা – 27/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Online-Admission-Notice-2021-2022.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> 2021-2022 শিক্ষাবর্ষে অনলাইনে ভর্তির বিজ্ঞপ্তি – 27/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Admit-Card-Part-III-2021.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> B.A./B.Sc./B.Com. Part – III Honours &amp; General Admit Card &amp; Instruction- 27/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Admit-Card-2021-Semester-VI.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> B.A./B.Sc./B.Com. Semester – VI Admit Card &amp; Instruction- 27/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/dates-revised-_BA_BSc_SEMESTER-_VI_HONOURS_2021.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Revised Theoretical Programme Schedule for BA/BSc Semester VI (Honours) Examination, 2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Notice6.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Student Credit Card Fees Related Notice – 17/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/SCHEDULE_doc-2.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Theoretical Programme Schedule for U.G.Even Semester / U.G.Part Examination,2021 – 14/07/2021              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Check-List-2021.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Uploading of Checklist – 09/07/21              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2021/07/Image-2021-06-30-converted.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Student Credit Card – 30.06.21              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2020/12/HOD.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> কেবলমাত্র অনলাইন ক্লাস ও পড়াশুনা সংক্রান্ত বিষয়ে জরুরী প্রয়োজনে যোগাযোগ করার জন্য সংশ্লিষ্ট বিভাগের বিভাগীয় প্রধানের ফোন নম্বর – 27/12/2020              <img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/new.gif">
                                </a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                          <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td class="news_right"><a href="https://ssmahavidyalaya.edu.in/wp-content/uploads/2020/05/Grievance-Redressal-Cell-1.pdf" target="_blank"><img src="https://ssmahavidyalaya.edu.in/wp-content/themes/shyampur-collage/images/doth.png" width="8" height="8" alt=""> Grievance Redressal Cell regarding Examination and Academic matters of COVID-19 pandemic.</a></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="clear"></div>
                                        </div>
                            </marquee>
                    </ul>  
                    </h5>  
                </div>
                
                <div class="templatemo_right_section">
                	<h2>Archives</h2>
					<ul>
                        <li><a href="#">January 2024</a></li>
                        <li><a href="#">December 2023</a></li>
                        <li><a href="#">November 2023</a></li>
                        <li><a href="#">October 2023</a></li>
                        <li><a href="#">September 2023</a></li>
                    </ul>  
                </div>
                
                <div class="templatemo_right_section">
	                <h2>Recent Comments</h2>
                	<ul>	
                        <li>Lorem Ipsum on <a href="#">Donec mollis aliquet</a></li>
                        <li>Consectetuer on <a href="#">Suspendisse a nibh</a></li>
                        <li>Sed on <a href="#">Pellentesque vitae magna</a></li>
                        <li>Vitae Neque on <a href="#">Nunc blandit orci sit amet</a></li>
                      <li>Donec Mollis on <a href="#">Maecenas adipiscing</a></li>
                  </ul>
                </div>
                
                <div class="templatemo_right_section">
                	<h2>Search</h2>
					<form method="get" action="#">
                        <input class="inputfield" name="keyword" type="text" id="keyword"/>
                        <input type="submit" name="submit" class="button" value="Search" />
                    </form>
                </div>
                
            </div> <!-- end of right content -->
	    </div> <!-- end of content -->
    </div> <!-- end of content container -->

	<div id="templatemo_bottom_panel">
    	<div id="templatemo_bottom_section">
            <div class="templatemo_bottom_section_content">
                <h3>Partner Links</h3>
                <ul>
                    <li><a href="#">Mauris congue felis at nisi</a></li>
                    <li><a href="#">Donec mattis rhoncus mi</a></li>
                    <li><a href="#">Maecenas adipiscing</a></li>
                    <li><a href="#">Nunc blandit orci</a></li>
                    <li><a href="#">Cum sociis natoque</a></li>
                </ul>
            </div>
            
            <div class="templatemo_bottom_section_content">
                <h3>Other Links</h3>
                 <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">About</a></li>                 
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
            <div class="templatemo_bottom_section_content">
            <h3>Find us on the Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59061.9307555252!2d88.00011105303957!3d22.301816954794543!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa096f852795b539c!2sShyampur%20Siddheswari%20Mahavidyalaya!5e0!3m2!1sen!2sin!4v1650082477222!5m2!1sen!2sin" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
            
        </div>
    </div> <!-- end of templatemo bottom panel -->
    
    <div id="templatemo_footer_panel">
    	<div id="templatemo_footer_section">
			Copyright © 2024 <a href="#">Your Company Name</a> | Design By TemplateMo
        </div>
    </div>
<!-- templatemo 058 old blog -->
<!-- 
Old Blog Template 
http://www.templatemo.com/preview/templatemo_058_old_blog 
-->
</body>
</html>