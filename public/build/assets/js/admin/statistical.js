$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
const statisticalApp = {
    initializationChart: function(labels, data){
        const myChartStatistical = document.getElementById('myChart');
        new Chart(myChartStatistical, {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: 'Biểu Đồ Doanh Thu Theo Ngày (VNĐ)',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
    },
    getDataForStatisticalChart: function(){
         const statisticalFormData = document.querySelector('#statisticalFormData');
         statisticalFormData.onsubmit = (event) =>{
            event.preventDefault();
            let startDay = document.getElementById('startDay').value;
            let endDay = document.getElementById('endDay').value;
            $.ajax({
                type: "POST",
                url: '/admin/statistical',
                data: {
                    'startDay': startDay,
                    'endDay': endDay
                },
                dataType: "JSON",
                success: function (response) {
                    if (response.success == true) {
                        statisticalApp.initializationChart(response.arrDays, response.arrTotalInDay);
                    }else{
                        alert('Doanh trong khoảng thời gian đó không khả dụng')
                    }
                }
            });
         }
    },

    start: function(){
        this.initializationChart();
        this.getDataForStatisticalChart();
    }
}
statisticalApp.start();
