	<div class="current_url_app">
        <?php
        $current_url_app = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        echo "Current URL: ".$current_url_app;
        ?>
    </div>
    <div id="copyright">
        <p>
        	<a href="https://app.phankimngan.com/"><b>APP.PHANKIMNGAN.COM</b></a>
        </p>
        <p>
        	<?php if($version!="")echo "Phiên bản: $version – "; ?> Copyright &copy; 2015 - <?php echo date( 'Y' ); ?> by <a href="https://info.phankimngan.com/" title="Phan Kim Ngân" target="_blank">Phan Kim Ngân</a>
        </p>
        <p>
        	<a href="https://zalo.me/chincucarot" target="_blank">Zalo Kim Ngân</a> – 
            <a href="https://www.facebook.com/msngan.beauty/" target="_blank">Facebook Kim Ngân</a> – 
            <a href="mailto:msngan.website@gmail.com" target="_blank">Email Dev Support</a> – 
            <a href="https://info.phankimngan.com" target="_blank">My Info</a> – 
            <a href="https://github.com/msnganwebsite/" target="_blank">Github.com</a>
        </p>
        <p>Đây là nội dung mẫu demo. Bạn có thể chỉnh sửa các nội dung tại chân trang này để phù hợp với mong muốn.</p>
    </div>
    <?php echo $insert_foot; ?>
</body>
</html>