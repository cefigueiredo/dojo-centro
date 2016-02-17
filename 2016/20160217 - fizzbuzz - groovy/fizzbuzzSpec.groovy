import spock.lang.*
import fizzbuzz

class fizzbuzzSpec extends spock.lang.Specification {
    def "test"() {
        expect:
        fizzbuzz.calcula(num) == result

    	where:
        num  | result
	    0    | 0
        3    | "fizz"
        5    | "buzz"

    }
}  