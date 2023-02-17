
<header>
  <!-- Navigation -->












  <nav id="navigation_bar" class=" navbar-default">
    <div class="container">
            
      <div class="header_wrap">
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav " id="nave">
          <li class="nav-item ">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customer<?php   if(strlen($_SESSION['login'])==0)
	{
?>
 Login<?php }?>
<?php   if(strlen($_SESSION['login'])!=0)
	{
?> Logout
<?php }?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>   <?php   if(strlen($_SESSION['login'])==0)
	{
?><a class="dropdown-item" href="#loginform" data-toggle="modal" data-dismiss="modal">Login</a>
<?php }?></li>
<li>
<?php   if(strlen($_SESSION['login'])!=0)
	{
?><a class="dropdown-item" href="logout.php" >Logout</a>
<?php }?></li>


            <li>
            <?php   if(strlen($_SESSION['login'])==0)
	{
?>    
<a class="dropdown-item" href="#signupform" data-toggle="modal" data-dismiss="modal">Register</a>
<?php }?>
          </li>
           
            
          </ul>
        </li>
        <?php   if(strlen($_SESSION['login'])==0)
	{
?>    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Agent Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li> <a class="dropdown-item  " href="admin/index.php" >Login</a>
</li>
            <li><a class="dropdown-item" href="admin/adminreg.php" >Register</a></li>
           
            
          </ul>
        </li>
        <?php }?>



         
          
          
        </ul>
      
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>


