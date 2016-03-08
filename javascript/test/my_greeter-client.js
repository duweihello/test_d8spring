'use strict';

var assert = require('assert');
var MyGreeter = require('../src/MyGreeter.js');

it('instance', function() {
    var greeter = new MyGreeter.Client();
    assert.ok(greeter instanceof MyGreeter.Client);
});

it('getGreeting', function() {
    var greeter = new MyGreeter.Client();
    var h = new Date().getHours();
    if(h>=0 && h<12){
        assert.strictEqual(greeter.getGreeting(), 'Good morning');
    }else if(h>=12 && h<18){
        assert.strictEqual(greeter.getGreeting(), 'Good afternoon');
    }else if(h>=18 && h<24){
        assert.strictEqual(greeter.getGreeting(), 'Good evening');
    }
    
});
