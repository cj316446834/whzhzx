<?php
try {
    if (basename(strtok($_SERVER['REQUEST_URI'], '?')) == basename(__FILE__)) {
?>
<script>
    setTimeout(function() {
        if (document.body.childNodes.length == 0) {
            location.href="http://aegis.aliyun.com/aegis_error404.html";
        }
    }, 1000);
</script>
<?php }} catch (Exception $e) {} ?>