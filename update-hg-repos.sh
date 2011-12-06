#! /bin/bash
cd ~/vimwiki
git add .
git commit -m "regular update"
git push
cd ~/.dotfiles
hg add
hg commit -m "regular update"
hg push

