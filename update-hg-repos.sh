#! /bin/bash
cd ~/vimwiki
hg add
hg commit -m "regular update"
hg push
cd ~/.dotfiles
hg add
hg commit -m "regular update"
hg push

