<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package ZeroGravity
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->
<a class="popmake-4393 new-rukovod-text">Написать, позвонить руководителю</a>
<footer id="colophon" role="contentinfo">
  <div class="site-info flex-container">
    <div class="logo-footer"><img src="/wp-content/themes/zerogravity/img/logo-bottom.png" alt=""></div>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    <address></address>
    <address>г. Ставрополь, ул Доваторцев, 183В</address>
    <div class="head-tel"><a href="tel:+79624410220">8 962 441 02 20</a>
    <a href="tel:+78652467878">8 (8652) 46 78 78</a>
    <span>8 962 441 02 20<br>8 (8652) 46 78 78</span></div>
    <!-- <div class="credits credits-left"><?php /*echo wp_kses_post(get_theme_mod('zerogravity_footer_text_left', __('Copyright 2016', 'zerogravity')));*/ ?></div>
    <div class="credits credits-center">г. Ставрополь, ул. Доваторцев 183в</div>
    <div class="credits credits-right">
    <a href="<?php echo ZEROGRAVITY_AUTHOR_URI; ?>/wordpress-themes/zerogravity">ZeroGravity</a> <?php _e('by', 'zerogravity'); ?> GalussoThemes.com<br />
    <?php _e('Powered by', 'zerogravity'); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'zerogravity' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'zerogravity' ); ?>"> WordPress</a>
    </div> -->
  </div><!-- .site-info -->
</footer><!-- #colophon -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32073601 = new Ya.Metrika({
                    id:32073601,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32073601" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67468591-1', 'auto');
  ga('send', 'pageview');
</script>
<?php if (get_theme_mod('zerogravity_boton_ir_arriba', 1) == 1){ ?>
		<a href='#inicio_pagina' title='<?php echo __('Back to top', 'zerogravity'); ?>'><div class="ir-arriba"><i class="fa fa-chevron-up"></i></div></a>
	<?php } 
	
wp_footer(); ?>
<!-- Google Code for &#1050;&#1057;&#1058;&#1041; Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 944187921;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "aUMVCPqOxGcQkdScwgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript><div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/944187921/?label=aUMVCPqOxGcQkdScwgM&amp;guid=ON&amp;script=0"/>
</div></noscript>
<!--[contact-form-7 id="4308" title="обратный звонок"]-->

</body>
</html>