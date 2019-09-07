<template lang="html">

</template>

<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   mounted() {
         let uri = '/api/monthly';
         let Months = new Array();
         let Labels = new Array();
         let Prices = new Array();
         this.axios.get(uri).then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               Months.push(element.month);
               Labels.push(element.name);
               Prices.push(element.total_amount);
               });
               this.renderChart({
               labels: Months,
               datasets: [{
                  label: 'Bitcoin',
                  backgroundColor: '#FC2525',
                  data: Prices
            }]
         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   }
}
</script>

<style lang="css" scoped>
</style>
