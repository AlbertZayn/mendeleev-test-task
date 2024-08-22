<?
global $SiteExpireDate;
if (DEMO && ($SiteExpireDate < time())) {
    $SiteExpireDate = time() * 1.5;
}
?> 