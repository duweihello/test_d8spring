use strict;
use utf8;
use warnings;
use Test::More;

use_ok 'MyGreeter::Client';

subtest 'Test instance' => sub {
    my $res = MyGreeter::Client->new;

    isa_ok $res, 'MyGreeter::Client';
};

subtest 'Test get_greeting' => sub {
    my $res = MyGreeter::Client->new;
    my ($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime(time);
    my $geeting = $res->get_greeting;
    if($hour>=0 && $hour<12){
        is $geeting, 'Good morning';
    }elsif($hour>=12 && $hour<18){
        is $geeting, 'Good afternoon';
    }elsif($hour>=18 && $hour<24){
        is $geeting, 'Good evening';
    }
};

done_testing;
