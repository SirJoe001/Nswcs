<?php include("header.php"); ?>
  <body style=" background:url(img/waterfall-water.gif); background-size:cover;">

    <div class="container">    
            <div id="loginbox" style="margin-top:200px; margin-right:800px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info"  style=" background:url(img/beauty-aww.gif); background-size:cover;">
                <h1 class="mx-auto text-white text-center" style="color: orange; font-style: italic;">
                    Welcome to<br>
                    <span class="auto-type" style="color: white;"></span>
                </h1>
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                    <script>
                        var typed = new Typed('.auto-type', {
                            strings: ["Nassarawa State", "Water Board", "System"],
                            typeSpeed: 150,
                            backSpeed: 150,
                            loop: true 
                        })
                    </script>

                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                      
                    </div>     

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="process.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="username" value="" placeholder="username"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                            </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                                    </div>
                                </div>
							</form>
                         </div>
					</div>
                    
				</div> 
			</div> <!-- /container -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


<?php
$file = "Ding-dong-intercom.mp3";
 if(isset($_GET['err'])){
	 
	echo "<embed src=\"Ding-dong-intercom.mp3\" autostart=\"false\" loop=\"false\" />";
	} ?>
</div>


</body>
</html>