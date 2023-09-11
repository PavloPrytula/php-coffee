<?php

switch (getUrl()) {
    case '':
        require PAGE_DIR . '/home.php';
        break;
    case 'register':
        conditionRedirect(isAuth());
        require_once PAGE_DIR . '/auth/register.php';
        break;
    case 'login':
        conditionRedirect(isAuth());
        require_once PAGE_DIR . '/auth/login.php';
        break;
    case 'logout':
        conditionRedirect(!isAuth());
        removeUser();
        redirect();
        break;
    case 'admin/dashboard':
        conditionRedirect(!isAdmin());
        require ADMIN_PAGE_DIR . '/dashboard.php';
        break;
    default:
        throw new Exception(getUrl() . ' - not found', 404);
}