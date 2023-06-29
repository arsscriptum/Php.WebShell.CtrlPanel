

function SendDelayedPasswdKeys{
    [CmdletBinding(SupportsShouldProcess)]
    param(
        [Parameter(Mandatory=$True, Position=0)]
        [string]$Keys,
        [Parameter(Mandatory=$False)]
        [int]$Delay=50
    ) 
    try{

        [void] [Reflection.Assembly]::LoadWithPartialName("System.Windows.Forms")

        [char[]]$MyChars = $Keys.ToCharArray()

        ForEach($c in $MyChars){
            [System.Windows.Forms.SendKeys]::SendWait($c)
            Start-Sleep -Milliseconds $Delay
        }
    }catch{
        Write-Error $_
    }
}


function Invoke-UploadHtDocs{
    [CmdletBinding(SupportsShouldProcess)]
    param() 
    try{
        [void] [Reflection.Assembly]::LoadWithPartialName("System.Windows.Forms")

        $ScpExe = (Get-Command 'scp.exe').Source

        $CodedFilePath = (Resolve-Path "$PSScriptRoot\..\coded.php").Path
        $Username = "tigui"
        $Hostname = "desktop-jirmi11"
        $RemotePath = "c:/xampp/htdocs"

        <#
        $Username = "gp"
        $Hostname = "localhost"
        $RemotePath = "c:/temp"
        #>

        $Where = "{0}@{1}:{2}" -f $Username,$Hostname,$RemotePath
        #&"$ScpExe" "$CodedFilePath" "$Where"

        Start-Process -FilePath "$ScpExe" -ArgumentList @("$CodedFilePath","$Where")
        Start-Sleep 2

        Invoke-SendDelayedKeysToWindow -WindowTitle "$ScpExe" -Keys "Born33ToFrag" -Delay 30
        Start-Sleep 2

        [System.Windows.Forms.SendKeys]::SendWait("{ENTER}")

    }catch{
        Write-Error $_
    }
}



Invoke-UploadHtDocs