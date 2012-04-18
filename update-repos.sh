#! /bin/bash
cd ~/vimwiki
git add .
git commit -m "regular update"
git push

cd ~/.vim
git add .
git commit -m "regular update"
git push

cd ~/.dotfiles
git add .
git commit -m "regular update"
git push

