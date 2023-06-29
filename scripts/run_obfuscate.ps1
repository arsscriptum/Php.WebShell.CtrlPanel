
$Src = "$PSScriptRoot\..\index.php"
$Dst = "$PSScriptRoot\obfuscated\index.php"

$Src = (Resolve-Path "$Src").Path
$Dst = (Resolve-Path "$Dst").Path
$OutDir = (Get-Item $Dst).DirectoryName

$ObfuscateScripts = "$PSScriptRoot\obfuscate.php"
$ObfuscateScripts = (Resolve-Path "$ObfuscateScripts").Path

. "$ObfuscateScripts"

Invoke-PhpObfuscator $Src $Dst -Test -ChangeFunctionNames -RemoveComments -RenamingMethod "MD5" -ObfuscateVariables -EncodeStrings -UseHexValuesForNames -RemoveWhitespaces -Md5Length 24 -PrefixLength 8 -Verbose

