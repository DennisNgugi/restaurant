<template lang="html">
  <div>
  <!-- <div class="card">
    <div class="card-body">
						<h4> <span style="font-weight:normal;">Reference Code: </span><span style="color:#005580;"></span></h4>
						<h4> <span style="font-weight:normal;">Served by:</span> <span style="color:#005580;">DE453</span></h4>
						<h4> <span style="font-weight:normal;">Date:</span> <span style="color:#005580;">
						Rs 500</span></h4>
						<table class="table">
							<tbody><tr>
								<th>Total price = <span style="color:#ff0000;">500</span></th>
								<th>Total quantity = <span style="color:#ff0000;"> 5</span></th>
							</tr>
						</tbody>
          </table>
		            </div>
  </div> -->

  <div class="row">
		    <div class="col-sm-12">
		        <div class="card">
		            <div class="card-header">
		                <div class="card-title">
		                    <h6>Sales Details </h6>
		                </div>
		            </div>
		            <div class="card-body">
		                <div class="table-responsive">
		                    <div id="dataTableExample2_wrapper" class="table-responsive form-inline dt-bootstrap">
                          <table id="dataTableExample2" class="table table-bordered table-striped table-hover dataTable" role="grid">
				            	<thead>
									<tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTableExample2" rowspan="1" colspan="1" aria-sort="ascending" style="width: 102px;">#</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTableExample2" rowspan="1" colspan="1"style="width: 105px;">Product</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTableExample2" rowspan="1" colspan="1" style="width: 143px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTableExample2" rowspan="1" colspan="1"  style="width: 72px;">Quantity</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTableExample2" rowspan="1" colspan="1"  style="width: 91px;">Total</th>
                  </tr>
								</thead>
								<tbody>



																<tr role="row" class="odd"  v-for="(p,index) in post" @key="index">
										<td>{{index+1}}</td>
										<td>
												{{p.product_name}}
										</td>
										<td>Ksh.{{p.price}}</td>
										<td>{{p.quantity}}</td>
										<td>Ksh.{{p.total}}</td>

									</tr></tbody>
								<tfoot>
									<tr>
                    <!-- <td colspan="1" style="text-align:right;" rowspan="1"><b>Total Cartoon</b></td>
                    <td rowspan="1" colspan="1"> 500</td><td rowspan="1" colspan="1"></td> -->

                    <td style="text-align:right;" rowspan="1" colspan="3"><b>Grand Total</b></td>
                    <td style="text-align:right;" rowspan="1" ><b>{{cartQuantity}}</b></td>
                    <td style="text-align:right;" rowspan="1"><b> Ksh.{{cartTotal}}</b></td>
                  </tr>
								</tfoot>
		                    </table></div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

    <div class="row">
      <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Reciept</h4>
        </div>


        <div class="card-body">


                 <div id="printSection">
                   <div class="col-md-12">
                     <div class="text-center">
                       <p><span style="font-family: Tahoma, 'Lucida Grande', 'Trebuchet MS', Verdana, Helvetica, sans-serif; font-size: 15.4px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">Kamau rest </span>
                         <br style="position: relative; font-family: Tahoma, 'Lucida Grande', 'Trebuchet MS', Verdana, Helvetica, sans-serif; font-size: 15.4px; line-height: normal;">
                         <span style="font-family: Tahoma, 'Lucida Grande', 'Trebuchet MS', Verdana, Helvetica, sans-serif; font-size: 15.4px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">Kajiado</span>
                         <br></p></div><div style="clear:both;">
                           <h4 class="text-center">Sale No.: 00144</h4> <div style="clear:both;">

                         </div>
                         <span class="float-left">Date: date(Y-m-d)</span><br>
                         <div style="clear:both;">
                           <span class="float-left">Customer: Walk in Customer</span>
                           <div style="clear:both;">
                             <table class="table" cellspacing="0" border="0">
                               <thead>
                                 <tr>
                                   <th>
                                     <em>#</em>
                                     <th>Product</th>
                                     <th>Quantity</th>
                                     <th>Price</th>
                                     <th>SubTotal</th>
                                   </tr>
                                 </thead>
                           <tbody>

                             <tr v-for="(i,index) in post" @key="index">

                             <td style="text-align:center; width:30px;">{{index+1}}</td>
                             <td  style="text-align:center; width:180px;">{{i.product_name}}</td>
                             <td style="text-align:center; width:50px;">{{i.quantity}}</td>
                             <td  style="text-align:center; width:180px;">{{i.price}}</td>

                             <td  style="text-align:right; width:70px; ">Ksh.{{i.price * i.quantity }}</td>

                           </tr>
                           </tbody>
                         </table>
                         <table class="table" cellspacing="0" border="0" style="margin-bottom:8px;">
                             <tbody>
                               <tr>
                                 <td style="text-align:left;">Total Items</td>
                                 <td style="text-align:right; padding-right:1.5%;">{{cartQuantity}}</td>
                               <td style="text-align:left; padding-left:1.5%;">Total</td>
                               <td  style="text-align:right;font-weight:bold;">Ksh.{{cartTotal}} </td></tr>
                               <tr><td style="text-align:left;"></td>
                                 <td style="text-align:right; padding-right:1.5%;font-weight:bold;">

                                 </td>
                                 <tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">Grand Total</td>
                                   <td colspan="2" style="border-top:1px dashed #000; padding-top:5px; text-align:right; font-weight:bold;">Ksh.{{cartTotal}}</td>
                                 </tr>
                                    <!--<tr>
                                 <td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">Paid</td>
                                   <td colspan="2" style="padding-top:5px; text-align:right; font-weight:bold;">Ksh. {{cartTotal}}</td>
                                 </tr><tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">Change</td>
                                   <td colspan="2" style="padding-top:5px; text-align:right; font-weight:bold;">Ksh. 0.000 </td></tr>--></tbody>
                                 </table><div style="border-top:1px solid #000; padding-top:10px;">
                                   <span class="float-left">Restaurant store</span><span class="float-right">Tel: +12345678</span>
                                   <div style="clear:both;"><center></center>
                                     <p class="text-center" style="margin:0 auto;margin-top:20px;"></p>
                                     <div class="text-center" style="padding:5px;width:85%;color:#fff;margin:0 auto;border-radius:3px;margin-top:20px;">Thank you for your business</div></div>
                                   </div></div></div></div></div></div>
        </div>
      </div>
        </div>

    </div>
</div>
</template>

<script>
export default {
  data() {
      return {
          post: {}
      }
  },
  computed: {
      cartTotal: function() {
          var total = 0;
          this.post.forEach(function(item) {
            total += item.quantity * item.price;

          });
        //  this.form.total = total;
          return total;

      },
      cartQuantity: function(){
        var quantity = 0;
        this.post.forEach(function(item) {
          quantity += item.quantity;
        });
        //this.form.quantity = quantity;
        return quantity;
      }
  },
  created() {
      let url = `/api/reciept/${this.$route.params.id}`;
      this.axios.get(url)
          .then((response) => {
              this.post = response.data;
          });
  },

}
</script>

<style lang="css" scoped>
</style>
