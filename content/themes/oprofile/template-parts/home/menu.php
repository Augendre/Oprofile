<div class="menu">
    <a href="#" class="ui-button close-menu" <?php if (is_admin_bar_showing()) : ?> style="top:50px;" <?php endif; ?>>
        <i class="fa fa-close" aria-hidden="true"></i>
    </a>

    <?php 
    
    $menu = wp_nav_menu([
        'theme-location' => 'main-menu',
        'container_class' => 'main-nav',
        'echo' => false
    ]); 
    
    $menu = str_replace(['menu-item', 'class="menu"'], ['main-nav__item', ''], $menu);

    echo $menu;

    ?>
    
    <div class="social-nav">
        <ul>
            <li>
                <a href="https://twitter.com/explore">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://fr-fr.facebook.com/">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.google.fr/">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/?hl=fr">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/">
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>