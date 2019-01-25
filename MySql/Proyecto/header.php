<nav class="navbar navbar-expand-sm navbar-dark bg-success">
    <a class="navbar-brand" href="welcome.php">
        <img src="img/lock-2.png" width="25" height="25">
        Mi diario
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="acerca.php">Acerca de</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <span class="navbar-text">
                    <?php echo $login_session?>
                </span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>