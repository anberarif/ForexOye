var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/ForexOye/data.json";
xmlhttp.open("GET", url, true);
xmlhttp.send();
xmlhttp.onreadystatechange = function(){
    if(this.readystate == 4 && this.status == 200){
        var data = JSON.parse(this.responseText);
        //console.log(data);
        var time = data.map(function(elem){
            return elem.snapshot_date;
        });
        //console.log(time);

        var forex_symbol = data.map(function(elem){
            return elem.forex_symbol;
        });

        var currency_name = data.map(function(elem){
            return elem.currency_name;
        });
        //console.log(currency_name);

        var symbol = data.map(function(elem){
            return elem.symbol;
        });

        var close = data.map(function(elem){
            return elem.close;
        });

        var open = data.map(function(elem){
            return elem.open;
        });

        var high = data.map(function(elem){
            return elem.high;
        });

        var low = data.map(function(elem){
            return elem.low;
        });

        var s_date = data.map(function(elem){
            return elem.s_date;
        });

         var s_close = data.map(function(elem){
            return elem.s_close;
        });

        var ctx = document.getElementById('canvas').getContext('1d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: time,
                datasets: [{
                label: 'Snapshot Date',
                data: snapshot_date,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4
        },
            {
                label: 'Forex Symbol',
                data: forex_symbol,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'Currency Name',
                data: currency_name,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },


        {
                label: 'Symbol',
                data: symbol,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'CLose',
                data: close,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'Open',
                data: open,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'High',
                data: high,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'Low',
                data: low,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'S_date',
                data: s_date,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },

        {
                label: 'S_close',
                data: s_close,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            
        },


        {
                label: 'Currency Rates',
                data: forex_symbol,
                backgroundColor: 'transparent',
                borderColor: 'Blue',
                borderWidth: 4   

            }]
        },
         

            options: {
            elements:{
                line:{
                    tension:0   
            }
        },
            scales: {
                y: {
                    beginAtZero: true
            }
        }
    }
});


    }
}



