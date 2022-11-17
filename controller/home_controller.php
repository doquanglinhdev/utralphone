<?php

function show_home()
{
    render("home");
}
function show_homeadmin()
{
    if (isset($_SESSION['admin'])) {
        renderadmin("index");
    } else {
        header("location: index.php?ctr=admin_login");
        exit;
    }
    
}
