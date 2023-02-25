<html>

        <head>
                    <style>

                            #log
                            {
                                color:white;
                            }
                            
                            #btn_a
                            {
                                position: relative;
                                top: 150px;
                            }

                            #container
                            {
                                position: relative;
                                top: 290px;
                            }
                                
                            #lable
                            {
                                position: relative;
                                top: 280px;
                            }
                    </style>
        </head>
        <body background="images.jpeg">
       
            <center>
                <table border="1" id="btn_a">
	
   	            <form action="index.php" method="POST" >

                   <div>            
                   
                    <tr bgcolor="#7b50b9">
				    <th colspan="2" id="log">Login Page</th>
				    </tr>       

				    <tr>
			    	<td bgcolor="#E0FFFF"><b>Username</b></td>
				    <td><input type="text" name="name" placeholder="Username" name="uname" required></td>
			    	</tr>

                    <tr>
				    <td bgcolor="#E0FFFF"><b>Password</b></td>
				    <td><input type="password" placeholder=" Password" name="psw" required> </td>
				    </tr>
                    
                    <label style="background-color:#f1f1f1" id="lable">
                    <input type="checkbox" checked="checked" name="remember me"> Remember me
                    <span class="psw"> <a href="#">Forgot password?</a></span>
                    </label>
                    </div>

                    <div id="container" >
                    <input type="submit" value="Login" >
                    <button type="reset" value="reset">Cancel</button>
                    </div>
                

                        </form>   
                </table>
            </center>
                       
        </body>

        </html>