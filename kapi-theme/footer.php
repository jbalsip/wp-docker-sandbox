            <footer>
                <p>Blog template built for Kapibara and Kuma.</p>
            </footer>
        </div>
 
            <script>
            (function () {
                //  Hamburger Button
                document.getElementById("click").onclick = myFunction;
                
                function myFunction() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
                
                //  Back To Top Button
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = scrollFunction;

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("myBtn").style.display = "block";
                    } else {
                        document.getElementById("myBtn").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                document.getElementById("myBtn").onclick = topFunction;
                
                function topFunction() {
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                }
            })();
            </script>

    <?php wp_footer(); ?>
    </body>
    
</html>
