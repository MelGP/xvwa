 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">File Inclusion</a></h4>
        
        <p align="justify">
        File inclusion is an attack that would allow an attacker to access unintended files on the server. This vulnerability exploits application’s functionality to include dynamic files. Two categories in this attack are Local File Inclusion (LFI) and Remote File Inclusion (RFI). 
        </p>
        <p>Read more about File Inclusions <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion</a></strong>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion">https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion</a></strong>

        </p>

    </div>

</div>

<?php
$INCLUDE_ALLOW_LIST = [
    "home.php",
    "dashboard.php",
    "profile.php",
    "settings.php"
];

if (isset($_GET['file'])) {
    $requestedFile = $_GET['file'];
    if (in_array($requestedFile, $INCLUDE_ALLOW_LIST)) {
        $fileMapping = [
            "home.php" => "path/to/home.php",
            "dashboard.php" => "path/to/dashboard.php",
            "profile.php" => "path/to/profile.php",
            "settings.php" => "path/to/settings.php"
        ];

        if (isset($fileMapping[$requestedFile])) {
            $filePath = $fileMapping[$requestedFile];

            include($filePath);
        } else {
            echo "Invalid file request.";
        }
    } else {
        echo "Invalid file request.";
    }
}
?>

<?php include_once('../../about.html'); ?>
