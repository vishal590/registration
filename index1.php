<?php


if(isset($_POST['btnS'])){
 //set conection variables  
    $server ="localhost";
    $username="root";
    $password="";
    $datab="trip";
    
    $con=mysqli_connect($server,$username,$password,$datab); 

  
   //collect post variables
   $trno=$_POST['trno'];
    $tname = $_POST['tname'];
    $tgender = $_POST['tgender'];
    $tage = $_POST['tage'];
    $temail = $_POST['temail'];
    $tphone = $_POST['tphone'];
    

    $sql="INSERT INTO college VALUES($trno,'$tname',$tage,'$tgender','$temail',
   '$tphone');";
	
	if(mysqli_query($con,$sql))
	{
		//echo "Record save";
	}
	else
	{
		echo "Failed to saved";
	}

}
?> 


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
function validate() {
	
    var tname = document.frm1.tname.value;

    var tage = document.frm1.tage.value;
	var tgender = document.frm1.tgender.value;
	var temail = document.frm1.temail.value;
    var tphone = document.frm1.tphone.value;



    if (tname == "") {
        alert("Please enter name");
        document.frm1.tname.focus();
        return false;
    }

	
    if (!tname.match(/^[a-z A-Z]+$/)) {
            alert("Enter alphabet name");
			document.frm1.tname.focus();
            return false;
        }
		

		if(tage=="") {
            alert("Enter age");
			document.frm1.tage.focus();
            return false;
        }
	
	//	if(age>="") {
     //       alert("Enter age");
	//		document.frm1.age.focus();
      //      return false;
		//}
      
       	 if(tgender=="") {
            alert("Enter gender");
			document.frm1.tgender.focus();
            return false;
	   }
		
      
		if(temail=="") {
            alert("Enter email");
			document.frm1.temail.focus();
            return false;
        }

         if (tphone == "") {
                alert("please enter mobile no");
                document.frm1.tphone.value = "";
                document.frm1.tphone.focus();
                return false;
            }

            if (isNaN(tphone)) {  //enter variable in in javascript
                alert("please enter digits only");
                document.frm1.tphone.value = "";
                document.frm1.tphone.focus();
                return false;
           }

           var a = tphone.charAt(0); //cant understand
            if(a != 7 && a != 8 && a != 9) {
                alert("Please enter 10 digits only and start as 7,8,9");
                document.frm1.tphone.value = "";
                document.frm1.tphone.focus();
                return false;
            }
			
            return true;
        }

	</script>
</head>
<body>
<img src="ds.jpg" alt="IIT Kharagpur" class="bg">     
<div class="container">
<h1>Welcome to IIT travel form</h1>
<p>Enter your details to confirm your participation in trip</p>

<form name="frm1" action="index1.php" method="post">
    <input type="text" name="trno" id="trno" placeholder="roll no"> 
    <input type="text" name="tname" id="tname" placeholder="your name">
    <input type="text" name="tage" id="tage" placeholder="your age"> 
    <input type="text" name="tgender" id="tgender" placeholder="your gender">
    <input type="email" name="temail" id="temail" placeholder="your email">
    <input type="phone" name="tphone" id="tphone" placeholder="your phone no">
	<input type="submit" name="btnS" value="submit" class="b" onclick="return validate()">
	<input type="submit" value="reset" class="b">
</form>

</div>

</body>
</html>

