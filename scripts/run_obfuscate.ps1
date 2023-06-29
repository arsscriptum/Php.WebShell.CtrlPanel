[CmdletBinding(SupportsShouldProcess)]
param()

$Src = "$PSScriptRoot\..\index.php"
$Dst = "$PSScriptRoot\..\obfuscated\index.php"

$Src = (Resolve-Path "$Src").Path
$Dst = (Resolve-Path "$Dst").Path
$OutDir = (Get-Item $Dst).DirectoryName

$ObfuscateScript = "$PSScriptRoot\obfuscate.ps1"
$ObfuscateScript = (Resolve-Path "$ObfuscateScript").Path

. "$ObfuscateScript"

$Out = Invoke-PhpObfuscator $Src $Dst -Test -RenameFunctions -RemoveComments -RenamingMethod "MD5" -ObfuscateVariables -EncodeStrings -UseHexValuesForNames -RemoveWhitespaces -Md5Length 24 -PrefixLength 8

Write-Host "Done Obfuscated PHP file: $Out" -f DarkGreen