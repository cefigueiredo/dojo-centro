import spock.lang.*
import ocr


class ProblemSpec extends Specification {
    @Unroll
    def "corrida de pinocchio"() {
        expect:
        ocr.problem(pinocchio1, pinocchio2, pista) == ganhador

        where:
        pinocchio1  |  pinocchio2  |  pista  |  ganhador
        [1, 0.1]    |  [1, 0.1]    |  5      |  "empate"
        [1, 0.2]    |  [1, 0.1]    |  5      |  "pinocchio1"
        [1, 0.1]    |  [1, 0.2]    |  5      |  "pinocchio2"
        [1, 0.1]    |  [1, 0.3]    |  5      |  "pinocchio2"
    }
}
