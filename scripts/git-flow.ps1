param(
    [Parameter(Mandatory = $true)]
    [ValidateSet('start', 'publish', 'status')]
    [string]$Action,

    [ValidateSet('feature', 'fix', 'hotfix')]
    [string]$Type = 'feature',

    [string]$Name
)

Set-StrictMode -Version Latest
$ErrorActionPreference = 'Stop'

function Invoke-Git {
    param([string[]]$Arguments)

    & git @Arguments
    if ($LASTEXITCODE -ne 0) {
        throw "git $($Arguments -join ' ') failed"
    }
}

switch ($Action) {
    'start' {
        if (-not $Name) {
            throw 'Provide -Name when using start.'
        }

        $baseBranch = if ($Type -eq 'hotfix') { 'main' } else { 'develop' }
        Invoke-Git -Arguments @('checkout', $baseBranch)
        Invoke-Git -Arguments @('pull', 'origin', $baseBranch)
        Invoke-Git -Arguments @('checkout', '-b', "$Type/$Name")
        Write-Host "Branch created: $Type/$Name"
    }
    'publish' {
        $branch = (git branch --show-current).Trim()
        if (-not $branch) {
            throw 'Unable to determine current branch.'
        }

        Invoke-Git -Arguments @('push', '-u', 'origin', $branch)
        Write-Host "Branch published: $branch"
    }
    'status' {
        $branch = (git branch --show-current).Trim()
        Write-Host "Current branch: $branch"
        Invoke-Git -Arguments @('status', '--short', '--branch')
    }
}