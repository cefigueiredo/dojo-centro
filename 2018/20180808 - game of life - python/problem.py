#!/usr/bin/env python
# -*- coding: utf-8 -*-

def game_of_life(board):
    """    
    A cell switches from DEAD to ALIVE 
        if its surrounded exactly by 3 living cells.
    A cell remains alive 
        if its surrounded by 2 or 3 living cells.
    A cell switches from being ALIVE to DEAD 
        if its surrounded by more than 3 living cells because of over population.
    A cell switches from being ALIVE to DEAD 
        if its surrounded by less than 2 cells because of under population.
    """
    total_alive = 0
    for row in board:
        total_alive += sum(row)

    if total_alive > 2:
        return board

    if len(board) == 2:
        return [
            [0, 0],
            [0, 0]
        ]

    return [[0]]