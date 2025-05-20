// Copyright (c) 2025 Adrina peighambarzadeh All rights reserved
//
// Created by: Adrina peighambarzadeh
// Created on: May 2025
// This file contains the JS functions for index.html

'use strict'

/**
* This function calculates using repeated subtraction (division)
*/
function doDivision () {
  let counter = 0

  // input
  let firstNumber = parseFloat(
  document.getElementById('first-number').value
  )
  const secondNumber = parseFloat(
  document.getElementById('second-number').value
  )

  // Save inputs to localStorage
  localStorage.setItem('savedFirstNumber', firstNumber)
  localStorage.setItem('savedSecondNumber', secondNumber)

  // process
  while (firstNumber >= counter) {
  firstNumber -= secondNumber
  counter++

  if (firstNumber < secondNumber) {
    break
    }
    }

    // output
    document.getElementById('answer').innerHTML='Your answer is: ' + counter + ' R ' + firstNumber
  }

  // Restore saved inputs on page load
  window.onload=function () {
  const savedFirst=localStorage.getItem('savedFirstNumber')
  const savedSecond=localStorage.getItem('savedSecondNumber')

  if (savedFirst !==null) {
  document.getElementById('first-number').value=savedFirst
  }

  if (savedSecond !==null) {
  document.getElementById('second-number').value=savedSecond
  }
  }