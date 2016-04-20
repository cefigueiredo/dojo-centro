//https://www.urionlinejudge.com.br/judge/en/problems/view/1428

var assert = require('assert'), 
    nessie = require('./nessie');

describe('Nessie', function() {
    it('3x3', function() {
    	assert.equal(nessie.sonar([3,3]), 1); 
    })

    it('3x6', function() {
    	assert.equal(nessie.sonar([3,6]), 2); 
    })

    it('3x4', function() {
    	assert.equal(nessie.sonar([3,4]), 1); 
    })

    it('6x3', function() {
    	assert.equal(nessie.sonar([6,3]), 2); 
    })

    it('7x3', function() {
    	assert.equal(nessie.sonar([7,3]), 2); 
    })

    it('3x7', function() {
    	assert.equal(nessie.sonar([3,7]), 2); 
    })

    it('4x3', function() {
    	assert.equal(nessie.sonar([4,3]), 1); 
    })

    it('8x3', function() {
    	assert.equal(nessie.sonar([8,3]), 2); 
    })

    it('3x8', function() {
    	assert.equal(nessie.sonar([3,8]), 2); 
    })

    it('3x9', function() {
    	assert.equal(nessie.sonar([3,9]), 3); 
    })
})

