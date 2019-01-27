<?php require_once("../../includes/header.php"); ?>
<?php require_once("../../includes/nav.php"); ?>

<main id="main">
    <div id="post_wrapper" style="margin-top: 50px;">
        <?php
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

            $filename = __DIR__. "/../../storage/posts.csv";
            $fh = fopen($filename, "r");
            if(file_exists($filename)):
                while(!feof($fh) && ($row = fgetcsv($fh))):
                    
                    /** 
                     * CSV 파일에 저장된 데이터 필드입니다.
                     * 키값이 없으므로 구분을 위해 따로 변수를 선언해둡니다.
                     */
                    $_id = $row[0];
                    $_title = $row[2];
                    $_content = $row[3];

                    if($id == $_id): 
        ?>
            <h1 class="ui header"><?=$_title?></h1>
            <div class="content">
                <?=$_content?>
            </div>
        <?php
                    endif;
                endwhile;
            endif;
        ?>
    </div>
</main>

<?php require_once("../../includes/footer.php"); ?>