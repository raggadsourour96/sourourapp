<?php
$_SERVER['BASE_PAGE'] = 'releases/7_4_33.php';
include_once __DIR__ . '/../include/prepend.inc';
site_header('PHP 7.4.33 Release Announcement');
?>
<h1>PHP 7.4.33 Release Announcement</h1>

<p>The PHP development team announces the immediate availability of PHP 7.4.33.</p>

<p>This is security release that fixes an OOB read due to insufficient
input validation in imageloadfont(), and a buffer overflow in
hash_update() on long parameter.</p>

<p>All PHP 7.4 users are encouraged to upgrade to this version.</p>

<p>For source downloads of PHP 7.4.33 please visit our <a href="https://www.php.net/downloads.php">downloads page</a>,
Windows source and binaries can be found on <a href="https://windows.php.net/download/">windows.php.net/download/</a>.
The list of changes is recorded in the <a href="https://www.php.net/ChangeLog-7.php#7.4.33">ChangeLog</a>.
</p>
<?php site_footer();
