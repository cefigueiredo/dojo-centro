var assert = require ('assert'),
	bye = 'tchau, querida!',
	stay = 'não vai ter golpe!',
    dilma_boolean = require('./dilma_boolean').dilma_boolean

describe('Dilma boolean case', function() {
    it('one for yes', function () {
        var intentions = 's'
        assert.equal(dilma_boolean(intentions), bye)
    })

    it('one for no', function () {
        var intentions = 'n'
        assert.equal(dilma_boolean(intentions), stay)
    })

    it('one influent for no', function () {
        var intentions = 'N'
        assert.equal(dilma_boolean(intentions), stay)
    })

    it('two for no', function () {
        var intentions = 'nn'
        assert.equal(dilma_boolean(intentions), stay)
    })
})