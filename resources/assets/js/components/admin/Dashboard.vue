<template lang="html">
  <div>
          <div class="row">
          <div class="col-sm-12">
              <div class="page-title-box">
                  <h4 class="page-title">Dashboard</h4>


              </div>
          </div>
      </div>

      <div class="row">
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="mdi mdi-cube-outline float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Products</h6>
                              <h4 class="mb-4">{{products.length}}</h4>
                              <!-- <span class="badge badge-info"> +11% </span> <span class="ml-2"></span> -->
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="mdi mdi-buffer float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Revenue</h6>
                              <h4 class="mb-4">{{amount}}</h4>
                              <!-- <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span> -->
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="mdi mdi-tag-text-outline float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Reciepts</h6>
                              <h4 class="mb-4">{{reciepts.length}}</h4>
                              <!-- <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span> -->
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="mdi mdi-briefcase-check float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Product Sold</h6>
                              <h4 class="mb-4">{{quantity}}</h4>
                              <!-- <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row">
            <div class="col-xl-3">
                  <div class="card widget-user m-b-20">
                      <div class="widget-user-desc p-4 text-center bg-primary position-relative">
                          <h3 class="text-white mb-0">{{today}} /=</h3>
                      </div>
                      <div class="p-4">
                          <div class="float-left mt-2 mr-3">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-buffer float-right"></i>
                            </div>
                          </div>
                          <h6 class="mb-1">Todays Report</h6>
                      </div>
                  </div>
                  <div class="card widget-user m-b-20">
                      <div class="widget-user-desc p-4 text-center bg-primary position-relative">
                          <h3 class="text-white mb-0">{{month}} /=</h3>
                      </div>
                      <div class="p-4">
                          <div class="float-left mt-2 mr-3">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-buffer float-right"></i>
                            </div>
                          </div>
                          <h6 class="mb-1">Monthly Report</h6>
                      </div>
                  </div>

            </div>

              <div class="col-xl-4">
                  <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-30 header-title"><b>Performing waiters</b></h4>

                        <div class="table-responsive">
                            <table class="table table-vertical">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Order count</th>
                              </tr>
                              </thead>
                                <tbody>
                                <tr v-for="(i,index) in waiter_count" @key="index">
                                  <td>{{index+1}}</td>
                                    <td>
                                        <img src="/img/admin2.png" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                        {{i.waiters_name | capitalize}}
                                    </td>
                                    <!-- <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td> -->
                                    <td style="text-align:center;">
                                      <b>{{i.ref_count}}</b>
                                        <!-- <p class="m-0 text-muted font-14">Amount</p> -->
                                    </td>
                                    <!-- <td>
                                        5/12/2016
                                        <p class="m-0 text-muted font-14">Date</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                    </td> -->
                                </tr>


                                </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>

                        </div>
              </div>

              <div class="col-xl-5">
                  <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-30 header-title"><b>Yearly income ({{myYear}})</b></h4>

                        <div class="table-responsive">
                            <table class="table table-vertical">
                              <thead>
                                <tr>
                                  <th>Month</th>
                                  <th>Total</th>
                                  <th>Quantity</th>
                              </tr>
                              </thead>
                                <tbody>
                                <tr v-for="(i,index) in statistics" @key="index">
                                    <td>
                                        <img src="/img/calendar.png" alt="calendar-image" class="thumb-sm rounded-circle mr-2"/>
                                        {{i.month}}
                                    </td>
                                    <!-- <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td> -->
                                    <td style="text-align:center;">
                                      <b>{{i.total_amount}}</b>
                                        <!-- <p class="m-0 text-muted font-14">Amount</p> -->
                                    </td>
                                    <td style="text-align:center;">
                                      <b>{{i.total_quantity}}</b>
                                        <!-- <p class="m-0 text-muted font-14">Amount</p> -->
                                    </td>

                                </tr>
                                <tr>
                                  
                                <td  rowspan="1"><b>Grand Total</b></td>
                                <td style="color:red; text-align:center;" rowspan="1" ><b>{{yearTotal}}</b></td>
                                <td style="color:red; text-align:center;" rowspan="1"><b> {{yearQuantity}}</b></td>


                                </tr>



                                </tbody>


                            </table>
                        </div>
                    </div>

                  </div>
              </div>






          </div>

          <!-- end row -->

          <!-- end row -->
        </div>

</template>

<script>
export default {
  data(){
    return{
      myYear : new Date().getFullYear(),
      products:null,
      amount:null,
      quantity:null,
      reciepts:null,
      today:null,
      month:null,
      statistics:[],
      waiter_count:[]
    }
  },
  mounted:function(){
    this.fetchProduct(); // no of products in the system
    this.fetchAmount(); // total amount sold
    this.fetchQuantity(); // quantity sold
    this.fetchReciept(); // no of reciepts
    this.fetchToday(); //fetch today income
    this.fetchMonth(); // fetch monthly income
    this.fetchWaiterCount(); //fetch waiters records Monthly (order count)
    this.fetchMonthly();


  },
  computed: {
      yearTotal: function() {
          var total = 0;
          this.statistics.forEach(function(item) {
            total += parseInt(item.total_amount);

          });
        //  this.form.total = total;
          return total;

      },
      yearQuantity: function(){
        var quantity = 0;
        this.statistics.forEach(function(item) {
          quantity += parseInt(item.total_quantity);
        });
        //this.form.quantity = quantity;
        return quantity;
      }
  },
  methods:{
    fetchProduct: function() {

        this.axios.get('/api/products').then((response) => {
            //  console.log(response.data);
            this.products = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchMonthly: function() {

        this.axios.get('/api/monthly').then((response) => {
            //  console.log(response.data);
            this.statistics = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchAmount: function() {

        this.axios.get('/api/amount').then((response) => {
            //  console.log(response.data);
            this.amount = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchReciept: function() {

        this.axios.get('/api/reciept').then((response) => {
            //  console.log(response.data);
            this.reciepts = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchQuantity: function() {

        this.axios.get('/api/quantity').then((response) => {
            //  console.log(response.data);
            this.quantity = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchWaiterCount: function() {

        this.axios.get('/api/waiter_count').then((response) => {
            //  console.log(response.data);
            this.waiter_count = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchToday: function() {

        this.axios.get('/api/today').then((response) => {
            //  console.log(response.data);
            this.today = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
    fetchMonth: function() {

        this.axios.get('/api/month').then((response) => {
            //  console.log(response.data);
            this.month = response.data;
        }).catch((error) => {
            console.log(error);
        })
    },
  }
}
</script>

<style lang="css" scoped>
</style>
