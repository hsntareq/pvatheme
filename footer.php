<footer>
    <div class="footer-top py-5">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <?php if (is_active_sidebar('footer-before-1')) { ?>
                        <?php dynamic_sidebar('footer-before-1'); ?>
                    <?php } ?>
                </div>
                <div class="col ">
                    <?php if (is_active_sidebar('footer-before-2')) { ?>
                        <?php dynamic_sidebar('footer-before-2'); ?>
                    <?php } ?>
                </div>
                <div class="col ">
                    <?php if (is_active_sidebar('footer-before-3')) { ?>
                        <?php dynamic_sidebar('footer-before-3'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-5">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <?php if (is_active_sidebar('footer-sidebar-1')) { ?>
                        <?php dynamic_sidebar('footer-sidebar-1'); ?>
                    <?php } ?>
                </div>
                <div class="col ">
                    <?php if (is_active_sidebar('footer-sidebar-2')) { ?>
                        <?php dynamic_sidebar('footer-sidebar-2'); ?>
                    <?php } ?>
                </div>
                <div class="col ">
                    <?php if (is_active_sidebar('footer-sidebar-3')) { ?>
                        <?php dynamic_sidebar('footer-sidebar-3'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>