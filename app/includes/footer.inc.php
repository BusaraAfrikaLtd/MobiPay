        <div id="footer" class="container">
            <hr>
            <p>&copy; 
                <?php  echo date('Y'); ?> Busara Afrika Ltd. &middot;
                <a href="#">Privacy</a>&emsp;
                <a href="#">Terms</a>&emsp;
                <a href="#">API</a>&emsp;
                <a href="#">Support</a>
                <span class="pull-right">
                    <a href="http://www.facebook.com">
                        <img src="images/facebook.png" height="30em">
                    </a>
                    <a href="http://twitter.com">
                        <img src="images/twitter.png" height="30em">
                    </a>
                </span>
            </p>
            <hr>
        </div>
        <!-- END WRAPPED CONTENT-->
        <script src="scripts/jquery.js"></script>
        <script src="scripts/bodyotstrap.min.js"></script>
        <script src="scripts/main.js"></script>
        <script src="scripts/holder.js"></script>
        <script src="scripts/carousel.js"></script>
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    </body>

</html>
<?php
    //Closing DB connection.
   if (isset($dbconnect)) {
    	mysqli_close($dbconnect);
    } 
?>