var MyGreeter = MyGreeter|| {};

MyGreeter.Client = function(){
    
    /**
     * getGreeting
     * @description say greetings based on local time
     *      1. "Good morning" if it is after 12am and just before 12pm
     *      2. "Good afternoon" if it is after 12pm and just before 6pm
     *      3. "Good evening" if it is after 6pm and just before 12am
     * @return string
     */
    this.getGreeting = function(){
        var greeting = 'Good morning';
        var h = new Date().getHours();
        if(h>=0 && h<12){
            greeting = 'Good morning';
        }else if(h>=12 && h<18){
            greeting = 'Good afternoon';
        }else if(h>=18 && h<24){
            greeting = 'Good evening';
        }
        return greeting;
    };
};

module.exports = MyGreeter;