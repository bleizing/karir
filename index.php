<?php
session_start();
if(isset($_SESSION['level'])){
    if($_SESSION['level']=="Administrator") {
        header("Location: admin.php");
    } elseif($_SESSION['level']=="Jobseeker") {
        header("Location: jobseeker.php");
    } elseif($_SESSION['level']=="Prodi") {
        header("Location: prodi.php");
    } elseif($_SESSION['level']=="Employer") {
        header("Location: employer.php");
    }
}
include('header.php');
include('menu_index.php');

?>

	<div class="container-fluid kerangka_artikel_1">
		<div class="container kerangka_artikel_2">
            <div class="col-md-9 bagian_artikel">
                <h3>Article</h3>
            </div>

            <div class="col-md-3">
                <div class="col-md-9 bagian_login">
                    <h3>Login Member</h3>
                </div>

                <div class="form-bottom">
                    <form role="form" action="login.php" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                        </div>

                        <?php if (isset($_SESSION['error'])) echo $_SESSION['error']; ?>

                        <button type="submit" name="submit" class="btn">Sign in!</button>
                    </form>
                </div>
            </div>
		</div>
	</div>
	
<?php
include('footer.php');
?>