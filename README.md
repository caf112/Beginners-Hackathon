# Start-Up-Carrier
## git commands
### 初回
```
git init
git status
git add .
git status
git commit -m "add:first commit"
git branch -M main
git remote add origin {url}
git push -u　origin main
```
### ２回目以降
```
git status
git add .
git status
git commit -m "modify:変更内容を記述"
git push
```
### チームの代表者一名が
```
git remote -v
git branch -M <teamname>
git remote set-url origin https://github.com/caf112/Start-Up-Career.git
git remote -v
git push -u　origin <teamname>
```
