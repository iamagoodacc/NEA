<!DOCTYPE html>
<html>
<head>
    <title>LINE COUNTER</title>
</head>
<body>
    <h2>LINE COUNTER</h2>
    <form method="POST">        
        <label for="extensions">File extensions:</label>
        <input type="text" name="extensions" id="extensions">
        <br>
        <label for="folderPath">Enter folder path:</label>
        <input type="text" name="folderPath" id="folderPath">
        <br>
        <button type="submit">Count Lines</button>
    </form>
</body>
</html>

<?php   
/**
 * Count the total lines of code in all descendant files within a given directory,
 * for specified file extensions.
 *
 * @param string $directory The path to the directory to traverse for counting lines of code.
 * @param string $extensions A comma-separated string of file extensions to include in the count.
 *                           Example: 'php,js,html'
 * @return int The total number of lines of code found in all descendant files.
 */
function countLinesOfCode($directory, $extensions) {
    $totalLines = 0;
    $extensions = explode(',', $extensions);

    $countLinesRecursive = function ($dir) use (&$countLinesRecursive, &$totalLines, $extensions) {
        $files = scandir($dir);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') { //useless back and forth folders
                continue;
                
            }

            $filePath = $dir . DIRECTORY_SEPARATOR . $file;

            if (is_dir($filePath)) {
                $countLinesRecursive($filePath);
            } elseif (is_file($filePath)) {
                $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                if (in_array($fileExtension, $extensions)) {
                    $totalLines += count(file($filePath));
                }
            }
        }
    };
    $countLinesRecursive($directory);

    return $totalLines;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $extensions = !empty($_POST['extensions']) ? $_POST['folderPath'] : "php,js,html,css";
    $folderPath = !empty($_POST['folderPath']) ? $_POST['folderPath'] : "C:/Web Development/NEA";

    $totalLines = countLinesOfCode($folderPath, $extensions);
    echo "<p>TOTAL LINES OF CODE: $totalLines</p>";
    echo "<p>for directory: <b>$folderPath</b></p>";
    echo "<p>of file extension(s): <b>$extensions</b></p>";
}
?>
