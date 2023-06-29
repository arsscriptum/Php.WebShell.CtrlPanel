
$Src = "$PSScriptRoot\..\index.php"
$Dst = "$PSScriptRoot\obfuscated\index.php"

$Src = (Resolve-Path "$Src").Path
$Dst = (Resolve-Path "$Dst").Path
$OutDir = (Get-Item $Dst).DirectoryName

$ObfuscateScripts = "$PSScriptRoot\obfuscate.php"
$ObfuscateScripts = (Resolve-Path "$ObfuscateScripts").Path

. "$ObfuscateScripts"

$Dst = Join-Path "$OutDir" "Level1.php"

Invoke-PhpObfuscator $Src $Dst -Test -RemoveComments -ObfuscateVariables -Verbose


$Dst = Join-Path "$OutDir" "Level2.php"

Invoke-PhpObfuscator $Src $Dst -Test -RemoveComments -ObfuscateVariables -EncodeStrings -Verbose

$Dst = Join-Path "$OutDir" "Level3.php"

Invoke-PhpObfuscator $Src $Dst -Test -RemoveComments -ObfuscateVariables -EncodeStrings -UseHexValuesForNames -RemoveWhitespaces -Verbose

$Dst = Join-Path "$OutDir" "Level4.php"
Invoke-PhpObfuscator $Src $Dst -Test -ChangeFunctionNames -RemoveComments -RenamingMethod "MD5" -ObfuscateVariables -EncodeStrings -UseHexValuesForNames -RemoveWhitespaces -Md5Length 24 -PrefixLength 8 -Verbose

