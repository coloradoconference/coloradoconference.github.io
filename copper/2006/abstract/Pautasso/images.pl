# LaTeX2HTML 2002-2-1 (1.70)
# Associate images original text with physical files.


$key = q/{bfx}^{*};MSF=1.6;AAT/;
$cached_env_img{$key} = q|<IMG
 WIDTH="20" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="|."$dir".q|img3.png"
 ALT="$ {\bf x}^{*}$">|; 

$key = q/{bfx}^{1};MSF=1.6;AAT/;
$cached_env_img{$key} = q|<IMG
 WIDTH="20" HEIGHT="16" ALIGN="BOTTOM" BORDER="0"
 SRC="|."$dir".q|img1.png"
 ALT="$ {\bf x}^{1}$">|; 

$key = q/{bfx}^0;MSF=1.6;AAT/;
$cached_env_img{$key} = q|<IMG
 WIDTH="20" HEIGHT="16" ALIGN="BOTTOM" BORDER="0"
 SRC="|."$dir".q|img2.png"
 ALT="$ {\bf x}^0$">|; 

1;

