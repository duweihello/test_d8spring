#!/usr/bin/perl
#
# @File Client.pm
# @Author E471828
# @Created 2016-3-6 14:53:38
#

package MyGreeter::Client;

sub new {
    my $class = shift;
    return bless {}, $class;
}

sub get_greeting{
    my $return = 'Good evening';
    ($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime(time);
    if($hour>=0 && $hour<12){
        $return = 'Good morning';
    }elsif($hour>=12 && $hour<18){
        $return = 'Good afternoon';
    }elsif($hour>=18 && $hour<24){
        $return = 'Good evening';
    }
    return $return;
}

1;