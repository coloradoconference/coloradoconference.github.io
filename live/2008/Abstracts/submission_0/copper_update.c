/******************************************************************************
 * @(#) copper_update.c
 *      Marian Brezina
 * 
 * Keeps the files in ~copper/public_html/2008/Abstracts/submission/
 * synced with the true submissions deposited in 
 * /srv/www/cgi-bin/copper2008/Abstracts/submission/ 
 * This is performed every TIME_STEP seconds.
 * 
 * Run this as a daemon from /etc/rc.d/boot.local as:
 * /usr/local/bin/copper_update 2> /dev/null &
 ******************************************************************************/
#include <signal.h>
#include <stdio.h>
#include <stdlib.h> /* system() */
#include <time.h>
#include <unistd.h> /* unsigned int alarm(unsigned int seconds); */


/*
#include <signal.h>

typedef void (*sighandler_t)(int);

sighandler_t signal(int signum, sighandler_t handler);
*/

#define TIME_STEP 900 

void int_time(int dummy)
{
  long t;

  signal(SIGALRM,int_time);
  alarm(TIME_STEP);
//  t=time(&t);
//  fprintf(stderr,"%s",ctime(&t));
  fprintf(stderr,"Updating copper abstracts from master\n");
//  system("cp /srv/www/htdocs/2008/Abstracts/submission/* /home/copper/public_html/2008/Abstracts/submission/");
//  printf("rsync -avzb --exclude '*~' --exclude '*.o' --exclude '*.cxx' --exclude '*.a' --exclude 'autom4te.cache/' -e ssh /srv/www/htdocs/2008/Abstracts/submission/* /home/copper/public_html/2008/Abstracts/submission/\n");

//  system("rsync -avzb --exclude '*~' --exclude '*.o' --exclude '*.cxx' --exclude '*.a' --exclude 'autom4te.cache/' -e ssh /srv/www/htdocs/2008/Abstracts/submission/* /home/copper/public_html/2008/Abstracts/submission/");

  system("rsync -avzb --exclude '*~' --exclude '*.o' --exclude '*.cxx' --exclude '*.a' --exclude 'autom4te.cache/' -e ssh /srv/www/htdocs/2008/Abstracts/submission/ /home/copper/public_html/2008/Abstracts/");
}

int main(void)
{
  setuid(geteuid());
  int_time(3600);
  for(;;) pause();
  return 0;
}

