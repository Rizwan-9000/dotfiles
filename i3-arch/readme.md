# regarding i3 configs

after installing  i3-wm isntall i3-gaps
pacman -S i3-gaps

pacman -S network-manager-nmapplet

pacman -S terminus-font

# install yay for aur 

yay -S autotiling

pacman -S arc-gtk-theme

pacman -S ranger

# install i3blocks-gaps from github

# in .config folders mkdir i3blocks and put i3blocks scripts there + copy the config file from the scripts and put the in the pervious folder ( i3blocks one ) - your scripts should mentioned in config file to run

install font awesome from github and put the ttf files on ~/.fonts 

pacman -S lxappearance

pacman -S papirus-dark

https://gist.github.com/fjpalacios/441f2f6d27f25ee238b9bfcb068865db
https://github.com/Airblader/i3blocks-gaps
https://github.com/vivien/i3blocks-contrib

custom neofetch -> acenoster one with little tweaks
jp2a -> for converting images to ascii

# installing oh-my-posh prompt

install the prompt on ~/bin ( usr/local/bin is the default path but no permission to write on it )
then add this into .bashrc file: 
export TERM=xterm-256color
export PATH=~/bin:PATH
eval "$(oh-my-posh init bash --config ~/.cache/oh-my-posh/themes/aliens.omp.json)"

replace the aliens.omp.json file content with poshtheme one
