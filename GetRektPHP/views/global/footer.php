        </section>
        <footer class="foot">
<!--            <div>
                <div class="faq"><a href="#">FAQ</a></div>
                <div class="faq"><a href="#">Contactez nous</a></div>
            </div>-->
        </footer>
        <div class="bpopup-container">
            <div class="img-container"></div>
        </div>
        <script src="<?php echo $globals['base_path']; ?>vendor/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $globals['base_path']; ?>vendor/js/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="<?php echo $globals['base_path']; ?>vendor/js/bpopup/jquery.bpopup.min.js"></script>             
        <?php if (isset($_GET['page']) && $_GET['page'] == 'admin' && isset($_GET['section']) && $_GET['section'] == 'statistique') { ?>
            <script src="<?php echo $globals['base_path']; ?>vendor/js/Chartjs/Chart.min.js"></script>            
            <script src="<?php echo $globals['base_path']; ?>vendor/js/stat.js"></script>
        <?php } ?>
        <script src="<?php echo $globals['base_path']; ?>js/app.js"></script>
    </body>
</html>
