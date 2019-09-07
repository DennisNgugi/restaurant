<template lang="html">
<div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-body">
          <form>

            <div class="row">
                <div class="col-md-5">
                <div class="form-group">
                <label for="">Start Date</label>

                    <!-- <v2-datepicker v-model="startDate" lang="en" format="MM/DD/YYYY"></v2-datepicker> -->
                  <input type="date" class="form-control" name="start" v-model="startDate" value="">
                    </div>

              </div>
              <div class="col-md-5">
                <div class="form-group">
                <label for="">End Date</label>

                    <!-- <v2-datepicker v-model="endDate" lang="en" format="MM/DD/YYYY"></v2-datepicker> -->

                <input type="date" class="form-control" name="end" v-model="endDate" value="">
                    </div>

                </div>
                <!-- <div class="col-md-2 mt-4">
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Search">
                  </div>
                </div> -->

            </div>
          </form>
        </div>
          </div>
      </div>
  </div>

    <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Date</th>
          <th>Ref</th>
            <th>Served by</th>
              <th>Total items</th>
            <th>Total Price</th>
            <th>Amount recieved</th>
            <th>Due amount</th>
            <th>Payment</th>

        </tr>
      </thead>
      <tbody>

        <tr v-for="(p,index) in filteredReport" @key="index">
          <td>{{index+1}}</td>
          <td>{{p.created_at | date}}</td>
          <td>{{p.reference_code}}</td>
          <td>{{p.waiters_name | capitalize}}</td>
          <td>{{p.total_quantity}}</td>
          <td>Ksh. {{p.grand_total}}</td>
          <td>Ksh. {{p.amount_recieved}}</td>
          <td>Ksh. {{p.due}}</td>
          <td><span class="badge badge-primary">{{p.payment_type |capitalize}}</span></td>
        <!-- <td>{{p.waiters_name}}</td> -->
          <!-- <td>{{p.checkout_total}}</td>
          <!-- <td>{{p.quantity}} </td> -->


        </tr>
<!--
        <td  rowspan="1" colspan="4"><b>Grand Total</b></td>
        <td style="color:red; text-align:center;" rowspan="1" ><b>{{reportTotal}}</b></td>
        <td style="color:red; text-align:center;" rowspan="1"><b> {{reportQuantity}}</b></td> -->


      </tbody>
    </table>
    </div>
  </div>
</template>

<script>
import { Line } from 'vue-chartjs';
export default {

  data() {
      return {
          posts: [],
          startDate:null,
          endDate:null

      }
  },

  mounted:function(){
    this.send();

  },
  computed:{
    // reportTotal: function() {
    //     var total = 0;
    //     this.posts.forEach(function(item) {
    //       total += parseInt(item.grand_total);
    //
    //     });
    //   //  this.form.total = total;
    //     return total;
    //
    // },
    // reportQuantity: function(){
    //   var quantity = 0;
    //   this.posts.forEach(function(item) {
    //     quantity += parseInt(item.total_quantity);
    //   });
    //   //this.form.quantity = quantity;
    //   return quantity;
    // },
    filteredReport(){

      var endDate = this.endDate;
      var startDate = this.startDate;

      return _.filter(this.posts,(function(data){
        if((_.isNull(startDate) || _.isNull(endDate))){
          return true
        }
        else{
          var date = data.created_at;
          return(date>=startDate && date <= endDate);

        }
      }));
}

},
methods:{
  send: function() {

      this.axios.get('/api/checkout').then((response) => {
            this.posts = response.data;
      }).catch((error) => {
          console.log(error);
      })
},

}
}
</script>

<style lang="css" scoped>
</style>
