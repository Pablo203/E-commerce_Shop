JSC.Chart('chartDivFirst', {
    type: 'pie',
    series: [
        {
            points: [
                {x: 'January', y: 53},
                {x: 'February', y: 72},
                {x: 'March', y: 123},
                {x: 'April', y: 116},
                {x: 'May', y: 142},
                {x: 'June', y: 257}
            ]
        }
    ]
});
JSC.Chart('chartDivSecond', {
    type: 'column',
    series: [
        {
            name: 'Number of products sold',
            points: [
                {x: 'January', y: 53},
                {x: 'February', y: 72},
                {x: 'March', y: 123},
                {x: 'April', y: 116},
                {x: 'May', y: 142},
                {x: 'June', y: 257}
            ]
        }
    ]
});