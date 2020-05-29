<p style="text-align: center;"> 
    <a href="index.php?task=seed">Data Seeding</a> /
    <a href="index.php?task=report">All Friends</a> /
    <a href="index.php?task=add">Add Friend</a> 
</p>

<p style="text-align: right;"> 
    <?php if(isLoggedIn()) : ?>
        <a href="auth.php">Logout</a>
    <?php else :  ?>
    <a href="auth.php">Login</a> 
    <?php endif; ?>
</p>