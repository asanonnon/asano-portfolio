<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header-icon">
            <a href="index.html"><i class="fa-brands fa-freebsd"></i></a>
        </div>
        
        <div class="menu-bar"><i class="fa-solid fa-ellipsis-vertical decoration"></i></div>        
        <div class="menu">
            <ul>
                <li><a href="">about</a></li>
                <li><a href="">blog</a></li>
                <li><a href="">contact</a></li>
            </ul>
        </div>
    </header>