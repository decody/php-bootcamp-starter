<?php require_once("../../includes/header.php"); ?>
<?php require_once("../../includes/nav.php"); ?>

<main id="main">
    <div id="post_wrapper" style="margin-top: 50px;">
        <?php
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if($id):
                $sql = "SELECT * FROM posts where id = '$id'";
                if($result = mysqli_query($conn, $sql)):
                    while($row = mysqli_fetch_array($result)):
        ?>
            <h1 class="ui header"><?=$row['title']?></h1>
            <div class="content">
                <?=$row['content']?>
            </div>
        <?php    
                    endwhile;
                endif;
            endif;
        ?>
    </div>
</main>

<?php require_once("../../includes/footer.php"); ?>