#!/usr/bin/env python
# -*- coding: utf-8 -*-

# https://www.urionlinejudge.com.br/judge/pt/problems/view/1167

import unittest
from problem import *

class TestProblem(unittest.TestCase):
    def test_criancas_1_2(self):
        criancas = {
            'Jose': 1,
            'Joao': 2
        }
        self.assertEqual('Jose', gira(criancas))

    def test_criancas_1_2_trocado(self):
        criancas = {
            'Joao': 1,
            'Jose': 2
        }
        self.assertEqual('Joao', gira(criancas))

if __name__ == "__main__":
    unittest.main()
