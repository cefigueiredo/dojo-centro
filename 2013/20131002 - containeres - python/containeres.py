def add(a, b):
    return a+b

def whatever(patio):
    gabarito = sorted(patio)
    movimentos = 0

    for i, container in enumerate(patio):
        certo = gabarito[i]
        if container != certo:
            movimentos += 1
            i_do_certo = patio.index(certo)
            patio[i], patio[i_do_certo] = patio[i_do_certo], patio[i]

    return movimentos

def quantos_movimentos(patio):
    return whatever(patio) + whatever(patio[0])    

