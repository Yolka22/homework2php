<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $text = isset($_GET["text"]) ? $_GET["text"] : "";
    $fontFamily = isset($_GET["font-family"]) ? $_GET["font-family"] : "";
    $fontSize = isset($_GET["font-size"]) ? $_GET["font-size"] : "";
    $bold = isset($_GET["bold"]) ? "bold" : "No";
    $italic = isset($_GET["italic"]) ? "italic" : "No";
    $underline = isset($_GET["underline"]) ? "underline" : "No";
    $textColor = isset($_GET["text-color"]) ? $_GET["text-color"] : "";
}
?>
<style>
        .styled-text {
            font-family: <?php echo $fontFamily; ?>;
            font-size: <?php echo $fontSize; ?>;
            color: <?php echo $textColor; ?>;
            font-weight: <?php echo $bold; ?>;
            font-style: <?php echo $italic; ?>;
            text-decoration: <?php echo $underline; ?>;
        }
    </style>

    <div class="styled-text">
    <?php echo $text; ?>
    </div>