/* globals Chart:false, feather:false */

(() => {
    'use strict';
  
    feather.replace({ 'aria-hidden': 'true' });
  
    // Gráficos
    const ctx = document.getElementById('myChart');
    // eslint-disable-next-line no-unused-vars
    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          'Sunday',
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday',
        ],
        datasets: [
          {
            data: [
              15339,
              21345,
              18483,
              24003,
              23489,
              24092,
              12034,
            ],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#ff0066', // Cor rosa vibrante
            borderWidth: 4,
            pointBackgroundColor: '#ff0066', // Cor rosa vibrante
          },
        ],
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: false,
              },
            },
          ],
        },
        legend: {
          display: false,
        },
      },
    });
  
    
    const catAnimations = [
      'cat-walk-animation',
      'cat-jump-animation',
      'cat-meow-animation',
    ];
  
    const randomCatAnimation =
      catAnimations[Math.floor(Math.random() * catAnimations.length)];
  
    const catAnimationElement = document.getElementById('cat-animation');
    if (catAnimationElement) {
      catAnimationElement.classList.add(randomCatAnimation);
    }
  })();
  