    <div class="push"></div>
</div> <!-- end wrapper -->

<footer class="site-footer">
    <div class="container footer-container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
        </div>

        <div class="contact-details">
            <h3>Templater Company</h3>
            <span> Adress 12 </span> <br>
            <span> 0900912 San Francisco </span> <br>
            <span> 030 3887 889 </span> <br>
            <span> info@templater.nl </span>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    $('.hamburger-menu').click(function() {
        $('nav').fadeIn();
    });

    $('.close-menu').click(function() {
        $('nav').fadeOut();
    });
</script>

<?php wp_footer(); ?>
</body>
</html>