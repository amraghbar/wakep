<!doctype html>
<html>
<head>
<meta charset="utf-8">
          <link rel="stylesheet" href="styles.css">

<title> Login-Apple</title>
	<script language="javascript">
	function check()
		{
                       var pass_word=document.myform.ps.value;
                       var email      =document.myform.email.value; 
                       var at_loc     = email.indexOf("@")
                       var dot_loc    = email.indexOf(".")
                    if (pass_word.length <8 )
			{
						alert("Password must be at least 8characters at least ")	

			}
                              else if ( email ==""||at_loc==-1||dot_loc==-1||at_loc==0||dot_loc==0)
                     {
                              alert("please fill a valid email addrees ")
                    } 
			else
			    {
			   document.myform.submit();	
			    }
		}
	</script>
          
          
</head>

<body>
          
<div align="center" style="z-index: 1000; position: fixed; top:0; left:0; width: 100%;background: #5E5E60"  > 
          
<ul class="nav">
          <li> 
                    <div style="float: left"> <a class="no-padding" href="index.html" style="text-decoration: none" > <img src="9d73d9fb-0001-0004-0000-000001021121_w920_r1.778_fpx57.92_fpy49.98 copy.png"/> </a> 
                    </div>
          </li>
          <li> 
                    <font size="+2" style="color: #FF0509;"  > <a href="store.php"  style="text-decoration: none; color: #FF0004 " >   Store </a></font>
          </li> 
          <li> 
                    <font size="+2" style="color: #FF0509" ><a href="mac.php"  style="text-decoration: none; color: #FF0004 " > Mac</a></font>
          </li> 
           <li> 
                     <font size="+2" style="color: #FF0509" > <a href="https://www.apple.com/ipad/"  style="text-decoration: none; color: #FF0004 " >ipad</a></font>
          </li>
           
          <li> 
                    <font size="+2" style="color: #FF0509" > <a href="call.php"  style="text-decoration: none; color: #FF0004 " >call us</a></font>
          </li> 
          <li> 
                    <font size="+2" style="color: #FF0509" ><a href="sin.php"  style="text-decoration: none; color: #FF0004 " > Sign in</a></font>
          </li>
          <li> 
                    <font size="+2" style="color: #FF0509" ><a href="Login.php"  style="text-decoration: none; color: #FF0004 " > Login</a></font>
          </li>
          <li>
                    <font size="+2" style="color: #FF0509" ><a href="abs.php"  style="text-decoration: none; color: #FF0004 " > About us</a></font>
          </li> 
</ul>
		
	</div>
          <br>
          <br>
          <br>
          <br>
          <img src="ipad/iPad Pro 11-inch.jpeg"
          <div style="width: 100%; padding-top: 1%; background: #5E5E60"> 
		<marquee onMouseOver="stop()" onMouseOut="start()">
			<div style="float: left"> <img src="New folder/apple_logo_1988.png" width="50" height="50" style="padding-right: : 3%" /></div> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; 
		<div style="float: left;padding-top: 1%">Welcome to Apple </div> &nbsp;&nbsp; 
		<div style="float: left"> <img  src="New folder/apple_logo_1988.png" width="50" height="50" /></div>  &nbsp;&nbsp; 
		</marquee>
	</div>
        <form name="myform" method="post" action="reg4.php">
          <table width="452"  align="center" style="padding-top: 20%">
            <tr>
              <td colspan="2" align="center">Admin  Login Area</td>
            </tr>
            <tr>
              <td width="175">Email</td>
              <td width="229"><input type="email" name="email" /></td>
            </tr>
            <tr>
              <td> Password </td>
              <td><input type="password" name="ps" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="button" value="Sign in" style="width: 100px;border-radius: 15px" onClick="check()" />
                <input type="reset" value="Clear" style="width: 100px;border-radius: 15px" /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
</body>
</html>