#-*- coding: utf-8 -*-
import unittest
from formiga import formiga

class FormigaTestCase(unittest.TestCase):

	# coluna, linha = (x, y)

	def test_0_segundos(self):
		self.assertEqual((0, 0), formiga(0))

	def test_1_segundo(self):
		self.assertEqual((1, 0), formiga(1))

	def test_2_segundos(self):
		self.assertEqual((1, 1), formiga(2))

	def test_3_segundos(self):
		self.assertEqual((0, 1), formiga(3))

	def test_4_segundos(self):
		self.assertEqual((0, 2), formiga(4))

	def test_5_segundos(self):
		self.assertEqual((1, 2), formiga(5))

	def test_6_segundos(self):
		self.assertEqual((2, 2), formiga(6))

	def test_7_segundos(self):
		self.assertEqual((2, 1), formiga(7))

	def test_8_segundos(self):
		self.assertEqual((2, 0), formiga(8))

	def test_9_segundos(self):
		self.assertEqual((3, 0), formiga(9))


unittest.main()

