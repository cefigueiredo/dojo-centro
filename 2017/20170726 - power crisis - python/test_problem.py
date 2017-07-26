#!/usr/bin/env python
# -*- coding: utf-8 -*-
# https://www.urionlinejudge.com.br/judge/en/problems/view/1031

import unittest
from problem import *

class TestProblem(unittest.TestCase):
    def test_13(self):
        self.assertEqual(1, power_crisis(13))

    def test_17(self):
        self.assertEqual(7, power_crisis(17))

    def test_21(self):
        self.assertEqual(13, power_crisis(21))

if __name__ == "__main__":
    unittest.main()
