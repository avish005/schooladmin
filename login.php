<?php if(!isset($Translation)){ @header('Location: index.php?signIn=1'); exit; } ?>
<?php include_once("$currDir/header.php"); ?>

<?php if($_GET['loginFailed']){ ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>

<div class="row" style="margin-top:150px;">
	<div class="col-sm-4 col-lg-4" id="login_splash">
		<!-- customized splash content here -->
	</div>
	<div class="col-sm-4 col-lg-4">
		<div class="" style="color:#ffffff;">

			

			<div class="panel-body" style="">
				<form id="main_form" method="post" action="index.php">
					<div class="form-group">
						<!--<label class="control-label" for="username"><?php echo $Translation['username']; ?></label>-->
						<input class="form-control" name="username" id="username" type="text" size="40" placeholder="<?php echo $Translation['username']; ?>" required>
					</div>
					<div class="form-group">
						<!--<label class="control-label" for="password"><?php echo $Translation['password']; ?></label>-->
						<input class="form-control" name="password" id="password" size="24" type="password" placeholder="<?php echo $Translation['password']; ?>" required>
						<span class="help-block" style="font-size:16px;color:#ffffff;margin-left:2px;"><?php echo $Translation['forgot password']; ?></span>
					</div>
					<!--
					<div class="checkbox">
						<label class="control-label" for="rememberMe">
							<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
							<?php echo $Translation['remember me']; ?>
						</label>
					</div>
				-->
					<div class="row">
						<div class="col-sm-offset-3 col-sm-6">
							<button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block" style="border-radius:5px;margin-top:20px;"><?php echo $Translation['sign in']; ?></button>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-heading" style="">				
			<?php if(sqlValue("select count(1) from membership_groups where allowSignup=1")){ ?>
			<span style="font-size:16px;margin-left:60%;">New User?</span> 
					<a class="" href="membership_signup.php" style="font-size:16px;text-decoration:underline;margin-left:2px;"><?php echo $Translation['sign up']; ?></a>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
			<?php if(is_array(getTableList()) && count(getTableList())){ /* if anon. users can see any tables ... */ ?>
				<div class="panel-footer">
					<?php echo $Translation['browse as guest']; ?>
				</div>
			<?php } ?>

		</div>
	</div>
</div>

<script>document.getElementById('username').focus();</script>
<?php include_once("$currDir/footer.php"); ?>
</>			