#!/usr/bin/env python
# -*- coding: utf-8 -*-

def gira(criancas):
	if list(criancas.values())[0] % 2 == 0:
		return list(criancas)[1]
	return list(criancas)[0]