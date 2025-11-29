# Project Restructuring Commands (PowerShell)
# Run these commands ONE BY ONE and show output after each

## Step 1: Create Frontend Folder Structure
```powershell
New-Item -ItemType Directory -Path "frontend\pages" -Force
New-Item -ItemType Directory -Path "frontend\assets\css" -Force
New-Item -ItemType Directory -Path "frontend\assets\js" -Force
New-Item -ItemType Directory -Path "frontend\assets\img" -Force
```

## Step 2: Create Docs Folder
```powershell
New-Item -ItemType Directory -Path "docs" -Force
```

## Step 3: Move HTML Files to Frontend/Pages
```powershell
Move-Item -Path "*.html" -Destination "frontend\pages\" -Force
```

## Step 4: Move CSS Files
```powershell
Move-Item -Path "css\*" -Destination "frontend\assets\css\" -Force
```

## Step 5: Move JS Files
```powershell
Move-Item -Path "js\*" -Destination "frontend\assets\js\" -Force
```

## Step 6: Move Image Files
```powershell
Move-Item -Path "img\*" -Destination "frontend\assets\img\" -Force
```

## Step 7: Rename Laravel Section to Backend
```powershell
Rename-Item -Path "Laravel Section" -NewName "backend"
```

## Step 8: Move Documentation Files
```powershell
Move-Item -Path "README.md" -Destination "docs\README.md" -Force
Move-Item -Path "backend\README.md" -Destination "docs\BACKEND_README.md" -Force -ErrorAction SilentlyContinue
Move-Item -Path "backend\SETUP_GUIDE.md" -Destination "docs\SETUP_GUIDE.md" -Force -ErrorAction SilentlyContinue
```

## Step 9: Remove Empty Folders
```powershell
Remove-Item -Path "css" -Force -ErrorAction SilentlyContinue
Remove-Item -Path "js" -Force -ErrorAction SilentlyContinue
Remove-Item -Path "img" -Force -ErrorAction SilentlyContinue
```

## Step 10: Verify Structure
```powershell
Get-ChildItem -Directory | Select-Object Name
```

