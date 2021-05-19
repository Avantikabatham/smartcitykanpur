<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	  *{ 
	 margin:0px;
	 padding: 0px; box-sizing: border-box;
	 font-family: 'Open Sans', sans-serif;
    
}
.header{
	width: 100%;
	height: 100px;
	background-color: rgba(0, 0, 0, 0.3);

	 
}
 .bgimage{
 	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,50,0.6)), url('images/city1.jpg');
     width:100%;
     height:100vh;
     background-size: 100% 100%;
     position: relative;
     border-radius: 0 0 85% 85% /30%;
     overflow: hidden;
    }

.menu{

	width: 100%;
	height: 80px;
	background-color: rgba(0, 0, 0, 0.2);
}

.menu ul li a{
	text-decoration: none;
}
/*links*/
a:link{
	color:green;
	background-color: transparent ;
	text-decoration: none;
}

a:visited{
	color:#fff;
	background-color: transparent ; 
	text-decoration: none;
}
a:hover{
	color:#85C1F9;
	 background-color: transparent ; 
	text-decoration: none;
}
a:active{
	color:#8E44AD;
	background-color: transparent ;
	text-decoration: none;
}

.leftmenu{
	width: 15%;
	line-height:80px;
     float:left ;
}

.leftmenu p{
	 padding-left: 50px;
	 color: #fff;
	 font-weight: bold;
	 font-size: 23px;
	 font-family: 'Open Sans', sans-serif;
	 text-transform: uppercase;	 
}
 /* RIGHT=> MENU-BAR */
.rightmenu{
	width:85%;
	height:90px;
	float:right;
}
.rightmenu ul{
	margin-left: 100px;

}
.rightmenu ul li{	
	display: inline-block; 
	list-style: none;
	font-size: 20px;
	color: #fff;
	font-weight: bold;
	line-height: 25px;
	margin: 20px 0px 0px 0px;
	text-transform: uppercase;
	border-radius: 98px;
	border: 2px solid /* #8E44AD */ #00b894 ;
	text-align: center;
	float:left; 
	width: 200px;
	height: 30px;
	position: relative;
  }

 .rightmenu ul ul{
	display: none;
	position: absolute;
  }
.rightmenu ul li:hover >ul {
	display: block;
	position: absolute;
  }
#ser{
	position: absolute;
	top: 10px;
	right: 0px;
  }
.text{
    margin-top: 190px;
	text-transform: uppercase;
	text-align: center;
	color: white;
}

.text h1{
	font-size: 50px;
	margin: 20px 20px;
	font-weight: lighter;
	font-family: 'Open Sans', sans-serif;

}

.change_content::after{
	content:'';
	animation: changetext 5s infinite linear;
	color:#00b894;
}
@keyframes changetext{
	
	 100%{content:"Kanpur";}
	
}
.text h6{
	font-weight: lighter;
	margin: 20px 20px;
	font-size:20px; 
}

	/*  Contact-form*/
     .contact_section{
     	background-color:pink ;
     	width: 500px;
     	height: 550px;
     	margin: 40px auto;
     	padding: 40px 0px;
     	background-size: cover;
     }
     .contact_section h1{
     	text-align: center;
     	color:#fff ;
     	font-size: 40px;
     }
   
    .contact-form{
         max-width: 600px;
         margin: auto;
         padding: 0 10px;
         overflow: hidden;
    }
    .contact-form-class{
    	display: block;
    	width: 100%;
    	box-sizing: border-box;
    	margin: 15px 0px;
    	padding: 10px 20px;
    }
    /*  .contact-form-class:focus{
     	box-shadow: 0 0 10px 4px #b00894;
     } */
    textarea.contact-form-class{
    	resize: none;
        height: 120px;

    }

    .conatct-form-btn{
        margin:0px 160px;
    	background: hotpink;
    	padding: 12px  50px;
    	border-radius: 20px;
    	color: white;
    	cursor: pointer;
    	transition: 0.5s;
    }
    . .conatct-form-btn: hover{
    	color: red;
    }


     /* Footer */
       .main_footer{
       	width: 100%;
       	background-color:blue;
       	overflow: auto;
       }
       .footer1{
       	float: left;
       	width: 390px;
       	margin: 30px 0px 30px 42px;
       	color: white;
       	text-align: center;
        
        }
        .footer h3{
        	font-size: 22px;
        }
       .footer1 a{
       	color: white;
       	text-decoration: none;
       }
       .footer a:hover{
       	 color: #00b894;
       	 text-decoration: underline;
       }
       .footer1 ul li{
       	list-style: none;
        margin: 9px;
       }
      .footer1 p{
      	margin: 6px;
      	line-height: 1.6em;   
      }

	</style>
</head>
<body>
 <header>
 	 <div class="bgimage">
     <div class="menu">
       	<div class="leftmenu">
       		 <p class="animated infinite bounce">Smart City</p> 
       	</div>
       	
        <div class="rightmenu">
        	<ul>
       	 	 <li><a href="index.html">Home</a></li>
           
       	 	 <li ><a href="#">Services</a>
                 <ul id="ser">
                    <li><a href="student.html">Student</a></li>
                    <li><a href="tourist.html">Tourist</a></li>
                    <li>Job-Seeker</li>
                 </ul>
           </li>
       	 	 <li><a href="about.html">About</a> </li>
           <li><a href="#">Gallery</li>
       	 	 <li><a href="#">Contact</a></li>
       	 </ul>
        </div>
      </div>

            <div class="text">
        	      <h1 >Welcome to Smart City<span class="change_content"></span></h1>
                <h6>with map group</h6>
            </div>
  </div>
 </header>


 <!-- Contact Form -->

 <section>
 <div class="contact_section">
 	 <h1>Contact-us</h1>
 	 <form class="contact-form" action="contact.php" method="post" accept-charset="utf-8">
 	 	<input type="text" class="contact-form-class" name="name" placeholder="Enter your name">
 	 	<input type="email" class="contact-form-class" name="email"  placeholder="Enter your email">
 	 	<input type="text" class="contact-form-class" name="mobile" placeholder="Enter your phone">
 	 	<textarea class="contact-form-class" name="message" placeholder="Enter your Message"></textarea>
 	    <input  class="conatct-form-btn" type="submit">
 	 </form>
 </div>  	
 </section>

 <!-- FOOTER -->
 <div class="main_footer">
  <div class="footer">
  <div class="footer1">
      <h3>Important Links</h3>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </div> 
    <div class="footer1">
      <h3>Contact Us</h3>
          <p>Kakadeo,Kanpur <br/>
            Uttar pradesh 208001 <br> 
            Phone: 0512 240 010<br>
            Email: mapgroup@gmail.com
          </p> 
          <ul>
            <li><a href=""></a></li>
          </ul>
    </div>

      
  <div class="footer1">
  <h3>Visit Links</h3>  
      <ul>
        <li><a href=" https://threebestrated.in/businesses-in-kanpur-up"><u>Who is the best in</u> 
        <i>Kanpur, Uttar Pradesh</i></a></li>
      </ul> 
   </div>   
  </div> 
 </div>




 <!-- PHP -->
  <?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['mobile'];
    $message= $_POST['message'];

    $to ="avantikabatham853@gmail.com";


    $subject="mail to smart city";
    $txt="Name = ". $name. "\r\n Email=".$email."\r\n Mobile number= ".$number ." \r\n Message=".4message.";

    $headers= "From:noreply@avantikabatham853.com" . " \r\n". "CC:somebodyelse@example.com";

    if($email!=NULL)
    {
    	mail($to,$subject ,$txt ,$headers);
    }
    #redirect
    header("Location.html");
    ?>
  

</body>
</html>