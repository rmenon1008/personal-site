<?php

/**
 *
 * @package Rohan_Menon
 */

?>

<div id="path">
    <h1 id="pathString">/</h1>
    <div id="haze"></div>
</div>
<?php
    $title_string = get_the_title();

?>
<h1 id="title"><?php echo $title_string; ?></h1>
<script>
    var path = (window.location.pathname).split("/");
    var elem = document.getElementById("pathString")
    var haze = document.getElementById("haze")
    var sliced = path.slice(0, path.length - 2).join("/")
    var string = sliced.split("-").join(" ")
    elem.innerHTML = string + "/"
    elem.addEventListener("mouseover", function(event) {
        // haze.style.background = "linear-gradient(90deg, white 10%, rgba(255, 255, 255, 0.4) 100%)"
        haze.style.filter = "opacity(0.5)"
    });
    elem.addEventListener("mouseleave", function(event) {
        // haze.style.background = ""
        haze.style.filter = ""
    });
    elem.addEventListener("click", function(event) {
        window.location.href = sliced + "/"
    });
</script>