<#
#̷𝓍   𝓐𝓡𝓢 𝓢𝓒𝓡𝓘𝓟𝓣𝓤𝓜
#̷𝓍   🇵​​​​​🇴​​​​​🇼​​​​​🇪​​​​​🇷​​​​​🇸​​​​​🇭​​​​​🇪​​​​​🇱​​​​​🇱​​​​​ 🇸​​​​​🇨​​​​​🇷​​​​​🇮​​​​​🇵​​​​​🇹​​​​​ 🇧​​​​​🇾​​​​​ 🇬​​​​​🇺​​​​​🇮​​​​​🇱​​​​​🇱​​​​​🇦​​​​​🇺​​​​​🇲​​​​​🇪​​​​​🇵​​​​​🇱​​​​​🇦​​​​​🇳​​​​​🇹​​​​​🇪​​​​​.🇶​​​​​🇨​​​​​@🇬​​​​​🇲​​​​​🇦​​​​​🇮​​​​​🇱​​​​​.🇨​​​​​🇴​​​​​🇲​​​​​
#>

[CmdletBinding(SupportsShouldProcess)]
param()

$Src = "$PSScriptRoot\..\index.php"
$ObfuscatedPath = "$PSScriptRoot\..\obfuscated"
$Dst = "$PSScriptRoot\..\obfuscated\index.php"
$Src = (Resolve-Path "$Src").Path
$Dst = (Resolve-Path "$Dst").Path
$ObfuscatedPath = (Resolve-Path "$ObfuscatedPath").Path
New-Item -Path "$ObfuscatedPath\test" -ItemType Directory -Force -ErrorAction Ignore | Out-Null

$OutDir = (Resolve-Path "$ObfuscatedPath\test").Path

$ObfuscateScripts = "$PSScriptRoot\obfuscate.ps1"
$ObfuscateScripts = (Resolve-Path "$ObfuscateScripts").Path

. "$ObfuscateScripts"

$Dst = Join-Path "$OutDir" "Level1.php"

$Out = Invoke-PhpObfuscator $Src $Dst -RemoveComments -ObfuscateVariables 

Write-Host "Done Obfuscated PHP file: $Out" -f DarkGreen

$Dst = Join-Path "$OutDir" "Level2.php"

$Out = Invoke-PhpObfuscator $Src $Dst -RemoveComments -ObfuscateVariables -EncodeStrings 
Write-Host "Done Obfuscated PHP file: $Out" -f DarkGreen
$Dst = Join-Path "$OutDir" "Level3.php"

$Out = Invoke-PhpObfuscator $Src $Dst -RemoveComments -ObfuscateVariables -EncodeStrings -UseHexValuesForNames -RemoveWhitespaces 
Write-Host "Done Obfuscated PHP file: $Out" -f DarkGreen
$Dst = Join-Path "$OutDir" "Level4.php"

$Out = Invoke-PhpObfuscator $Src $Dst -RemoveComments -ObfuscateVariables -EncodeStrings -UseHexValuesForNames -RemoveWhitespaces -RenameFunctions -RenamingMethod "MD5" -Md5Length 24 -PrefixLength 8

Write-Host "Done Obfuscated PHP file: $Out" -f DarkGreen
