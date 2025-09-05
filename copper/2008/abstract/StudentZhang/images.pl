# LaTeX2HTML 2002-2-1 (1.70)
# Associate images original text with physical files.


$key = q/n;MSF=1.6;AAT/;
$cached_env_img{$key} = q|<IMG
 WIDTH="14" HEIGHT="13" ALIGN="BOTTOM" BORDER="0"
 SRC="|."$dir".q|img1.png"
 ALT="$ n$">|; 

$key = q/N;MSF=1.6;AAT/;
$cached_env_img{$key} = q|<IMG
 WIDTH="19" HEIGHT="14" ALIGN="BOTTOM" BORDER="0"
 SRC="|."$dir".q|img2.png"
 ALT="$ N$">|; 

$key = q/(N>n);MSF=1.6;AAT/;
$cached_env_img{$key} = q|<IMG
 WIDTH="62" HEIGHT="32" ALIGN="MIDDLE" BORDER="0"
 SRC="|."$dir".q|img3.png"
 ALT="$ (N&gt; n)$">|; 

1;

