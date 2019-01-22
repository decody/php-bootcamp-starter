<?php require_once("../includes/header.php"); ?>
<?php require_once("../includes/nav.php"); ?>

<main id="main">
    <div id="post_wrapper" style="margin-top: 50px;">
    <?php
        $sql = "SELECT * FROM posts LIMIT 10";

        if($result = mysqli_query($conn, $sql)):
            while($row = mysqli_fetch_array($result)):
                $content = iconv_substr($row['content'], 0, 180, "utf-8");
echo <<<HTML
    <div class="ui items">
        <div class="item" style="margin-top: 35px;">
            <div class="content">
                <a class="header" href="/board/read.php?id={$row['id']}">{$row['title']}</a>
            <div class="description">
                <p>$content</p>
            </div>
        </div>
    </div>
HTML;
            endwhile;
            mysqli_free_result($result);
        endif;
        mysqli_close($conn);
    ?>
    </div>
</main>

<?php require_once("../includes/footer.php"); ?>