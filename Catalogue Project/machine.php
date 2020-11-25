<!DOCTYPE html>
<html>

<body>
	<p>DETAILS/FILES RELATED TO MACHINE1</p>
	<?php
		if ($handle = opendir('./Machine1')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<ul><a href='./Machine1/$entry'> $entry </a></ul>";
        }
    }

    closedir($handle);
}
	?>
<button>Upload file</button>


<!-- + Display MySQL Table with chronological record of past maintenance. Date/Maintenance record
+ Have "Machine1" as a passed in as POST variable!
-->

</body>
</html>