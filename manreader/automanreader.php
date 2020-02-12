<?php
	$mannum = 1;
	while(file_exists("manreader/" . basename($_SERVER["SCRIPT_FILENAME"], ".php") . $mannum . ".png")){
		echo "<div style='display:inline-block;'>";
		echo "<input type='range' min='1' max='100' value='50' style='width:calc(100% - 50px); height:50px; display:block; margin-left: 50px; border: 1px solid black;' class='slider' id='widthRange" . $mannum. "'>";
		echo "<div style='display:inline-block;'>";
		echo "<input type='range' min='1' max='100' value='50' orient='vertical' style='height:" . getimagesize( "manreader/" . basename($_SERVER["SCRIPT_FILENAME"], ".php") . $mannum . ".png" )[1] . "px;float:left;writing-mode: bt-lr;-webkit-appearance: slider-vertical; width: 50px; border: 1px solid black;' class='slider' id='hightRange" . $mannum . "'>";
		echo "<div class='outerdiv' style='width:" . getimagesize("manreader/" . basename($_SERVER["SCRIPT_FILENAME"], '.php') . $mannum . ".png")[0] . "px; height:" . getimagesize("manreader/" . basename($_SERVER["SCRIPT_FILENAME"], '.php') . $mannum . ".png")[1] .  "px'>";
		echo "<img src='manreader/" . basename($_SERVER["SCRIPT_FILENAME"], '.php') . $mannum . ".jpg' class='test'></img>" ;
		echo "<div class='inner' id='topimgdiv" . $mannum . "'>";
		echo "<img src='manreader/" . basename($_SERVER["SCRIPT_FILENAME"], '.php') . $mannum . ".png' style = 'position: absolute; top: 0px; left: 0px;'></img>" ;
		echo "</div></div></div></div><br>";
		echo "<script>";
		echo "var heightslider" . $mannum . " = document.getElementById('hightRange" . $mannum . "'); ";
		echo "var widthslider" . $mannum . " = document.getElementById('widthRange" . $mannum . "'); ";
		echo "var topimgdiv" . $mannum . " = document.getElementById('topimgdiv" . $mannum . "'); ";
		echo "heightslider" . $mannum . ".oninput = function() { ";
		echo "topimgdiv" . $mannum . ".style.height = String(100-this.value) + '%' }; ";
		echo "widthslider" . $mannum . ".oninput = function() { ";
		echo "topimgdiv" . $mannum . ".style.width = String(this.value) + '%'};";
		echo "</script>";
		$mannum++;
	}
?>
