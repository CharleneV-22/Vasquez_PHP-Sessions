<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>
<h2>You have visited this page <?php echo $_SESSION['count']; ?> time(s) this session.</h2>
<a href="counter.php">Refresh</a>
<br><br>
<a href="reset.php">Reset Counter</a>
