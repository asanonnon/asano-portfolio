<?php
    $news = get_term_by("slug","news","category");
    $news_link = get_term_link($news,"category");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Rubik:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header-icon">
            <a href="<?php echo home_url(); ?>"><i class="fa-brands fa-freebsd"></i></a>
        </div>
        
        <div class="menu-bar"><i class="fa-solid fa-ellipsis-vertical decoration"></i></div>        
        <div class="menu">
            <ul>
            <li><a href="<?php echo home_url();?>">top</a></li>
            <li><a href="<?php echo $news_link;?>">blog</a></li>
            <li><a href="<?php echo home_url("/about/"); ?>">about</a></li>
            <li><a href="<?php echo home_url('/contact/'); ?>">contact</a></li>
            </ul>
        </div>
    </header>