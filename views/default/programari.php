<link href="public/css/progr.css" rel="stylesheet">

<table class="styled-table">
    <?php
    include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
    showProgramari($dbC);
    ?>
    </tbody>
</table>