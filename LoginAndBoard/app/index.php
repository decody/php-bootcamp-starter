<?php require_once("../includes/header.php"); ?>
<?php require_once("../includes/nav.php"); ?>

<main id="main">
    <div id="post_wrapper" style="margin-top: 50px;">
    <?php
        $filename = __DIR__. "/../storage/posts.csv";
        $fh = fopen($filename, "r");
        if(file_exists($filename)):
            while(!feof($fh) && ($row = fgetcsv($fh))):

                /** 
                 * CSV 파일에 저장된 데이터 필드입니다.
                 * 키값이 없으므로 구분을 위해 따로 변수를 선언해둡니다.
                 */
                $_title = $row[2];
                $_content = mb_substr($row[3], 0, 180, "utf-8");
echo <<<HTML
    <div class="ui items">
        <div class="item" style="margin-top: 35px;">
            <div class="content">
                <a class="header" href="/board/read.php?id={$row[0]}">$_title</a>
            <div class="description">
                <p>$_content</p>
            </div>
        </div>
    </div>
HTML;
            endwhile;
        endif;
    ?>
    </div>
</main>

<?php require_once("../includes/footer.php"); ?>