#include <signal.h>
#include <stdio.h>
#include <time.h>

#define TIME_STEP 30

void int_time(void)
{
  long t;

  signal(SIGALRM,int_time);
  alarm(TIME_STEP);
  t=time();
  fprintf(stderr,"%s",ctime(&t));
  fprintf(stderr,"Updating copper abstracts from master\n");
}

void main(void)
{
  int_time();
  for(;;) pause();
}

