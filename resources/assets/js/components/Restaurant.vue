<template lang="html">

            <div class="media media-dashboard-one mg-b-20">

                <div class="col-md-7">


                <div class="card card-minimal-two">
                  <div class="card-header">
                    <nav class="nav nav-pills" v-for="c in category" :key="c.id">
                      <!-- <a class="nav-link active" data-toggle="tab" href="#">FOOD</a> -->
                      <a class="nav-link" data-toggle="tab" href="#">{{c.category |capitalize}}</a>
                      <!-- <a class="nav-link" data-toggle="tab" href="#">ALL</a>
                      <a class="nav-link" data-toggle="tab" href="#">BTG</a> -->
                    </nav>
                    <div class="card-header-right">
                      <nav class="nav nav-pills">
                        <!-- <a href="#" class="nav-link"><span>hour</span><span>h</span></a>
                        <a href="#" class="nav-link active"><span>day</span><span>d</span></a>
                        <a href="#" class="nav-link"><span>week</span><span>w</span></a>
                        <a href="#" class="nav-link"><span>month</span><span>m</span></a>
                        <a href="#" class="nav-link"><span>year</span><span>y</span></a>
                        <a href="#" class="nav-link">All</a> -->
                        <input type="text" class="form-control" v-model="search" placeholder="Search item...">
                      </nav>
                    </div><!-- card-header-right -->
                  </div>
                  <div class="card-body" id="product-details">
                    <div class="row mt-4" id="parent" style="height: 600px;">
                              <div v-for="product in filteredProduct"  class="item col-lg-2 box" id="products" style="display: block;">
                            <div class="widget-panel widget-style-2 ">
                                <center>
                                        <img :src="'/images/' +product.image" class="img-responsive rounded"  height="100" width="100" alt="">
                                </center>
                                <div class="m-t-5 text-center" style="height: 70px"><span class="name"><b>{{product.product_name |capitalize}} ({{product.quantity}})</b></span> <br>
                                  <button type="button" class="btn btn-info btn-sm" @click="addToCart(product)" >Add</button>
                                    <!-- <span class="sku">fried_rice</span>-->

                                  </div>
                                </h4>
                            </div>
                        </div>

                </div>
                  </div><!-- card-body -->
                  <div class="card-footer">
                    <div class="media">

                      <div class="media-body">
                        <!--div class="row row-sm">
                          <div class="col">
                            <label>Symbol</label>
                            <p>BTC</p>
                          </div>
                          <div class="col-3">
                            <label>Price Benchmark</label>
                            <p>100.00%</p>
                          </div>
                          <div class="col">
                            <label>Price (USD)</label>
                            <p>$6,316.88</p>
                          </div>
                          <div class="col">
                            <label>Change (24H)</label>
                            <p>-0.54%</p>
                          </div>
                          <div class="col">
                            <label>Market Cap</label>
                            <p>$109.04B</p>
                          </div>
                        </div> row -->
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- card-footer -->
                </div><!-- card -->
                  </div>
              <!-- media-body -->
              <div class="col-md-5">
                <form class="">

                <div class="card card-minimal-one">
                  <div class="card-header">

                    <div class="card-header-right">


                      <label style="color:red;"><b>Waiter name: (Please Choose Your name)</b></label>
                       <select v-model="form.waiter" name="waiter" class="form-control">
                          <option value="">Served by.....</option>
                        <option v-for="w in waiters" v-bind:value="w.id" >{{w.waiters_name}}</option>
                        </select>



                    </div><!-- card-header-right -->
                  </div>
                  <div class="card-body" id="card-details">
                      <div class="row">

                    <table v-if="cart.length > 0" class="table table-hover table-condensed table-striped">
          				<thead>
      						<tr>
      							<th style="width:25%">Product</th>
      							<th style="width:10%">Price</th>
      							<th  style="width:8%">Quantity</th>
      							<th style="width:22%" class="text-center">Subtotal</th>
      							<th style="width:10%"></th>
      						</tr>
      					</thead>
      					<tbody>
                  <!-- <p v-if="total==0">Your cart is empty</p> -->
      						<tr v-for="item in cart">
      							<td data-th="Product">

      										<h6 class="nomargin">{{item.product.product_name |capitalize}}</h6>
      							</td>
      							<td data-th="Price">{{item.product.price}}</td>



                      <!--<td>	<button class="btn btn-info btn-xs"><i class="typcn typcn-plus"></i></button></td>-->
      								<td data-th="Quantity">	<input type="number" class="form-control text-center" name="quantity[]" v-model="item.quantity"></td>
                      <!-- <td>	<button class="btn btn-info btn-xs"><i class="typcn typcn-minus"></i></button></td> -->

      							<td data-th="Subtotal" class="text-center">{{item.product.price * item.quantity}} /=</td>
      							<td class="actions" data-th="">
      								<button class="btn btn-danger btn-xs" @click="removeFromCart(item)"><i class="typcn typcn-trash"></i></button>
      							</td>
      						</tr>
      					</tbody>

      				</table>

 <div class="messageVide" v-else>Empty List <span>(Select Product)</span></div>
    </div>

                          </div>

    <div class="card-footer">

      <div class="media">
        <div class="media-body">
          <div class="row row-sm">
                <!-- <div class="col-md-4">
                  <h4>Subtotal:Ksh . 600</h4>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                  <button class="btn btn-success btn-xs"><i class="typcn typcn-trash"></i>PAY</button>

                </div> -->
                <div class="table-responsive col-sm-12 totalTab">
               <table class="table">
                  <tbody><tr>
                     <td class="active" width="40%">SubTotal</td>
                     <td class="whiteBg" width="60%"><span id="Subtot">{{ cartTotal }} </span> KSH
                    <span class="float-right"><b id="ItemsNum"><span>{{cartQuantity}}</span> items</b></span>
                     </td>
                  </tr>

                  <tr>
                     <td class="active">Grand total</td>
                     <td class="whiteBg light-blue text-bold"><span id="total">{{ cartTotal }}</span> KSH</td>
                  </tr>
               </tbody></table>
            </div>

            <button type="button" @click="cancel()" class="btn btn-danger col-md-6 flat-box-btn waves-effect waves-button"><h5 class="text-bold">CANCEL</h5></button>
            <button type="button" @click.prevent="checkout()" class="btn btn-success col-md-6 flat-box-btn waves-effect waves-button"><h5 class="text-bold">PAYMENT</h5></button>
          </div><!-- row -->

          </div>
        </div><!-- media-body -->
      </div><!-- media -->
      <div v-if="showModal">
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">

      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Checkout</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" @click="showModal = false">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <h2>Walk in Customer</h2>
                <h2>Served by:{{this.form.waiter}}</h2>
                <h3>{{cartQuantity}} items</h3>
                <h2>Total: Ksh. {{cartTotal}}</h2>
                <label style="color:blue;"><b>Choose Payment type</b></label>
                 <select v-model="form.pay_type" name="pay_type" class="form-control">
                  <option value="">Choose payment</option>
                  <option v-for="w in payment_type" v-bind:value="w.id" >{{w.payment_type}}</option>
                  </select>
                  <div class="form-group">
             <label for="Paid">Paid</label>
             <input type="text" value="0" v-model="form.amount" name="paid" class="form-control paidk" id="Paid" placeholder="Paid">
           </div>

           <h2 v-if="cartAmount < 0" >Change: Ksh. <p style="color:red;">{{cartAmount}} </p></h2>
           <h2 v-else >Change: Ksh. <p style="color:blue;">{{cartAmount}}</p> </h2>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
                  <button type="button" @click.prevent="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
      </div>

      </div>
    </div>
  </transition>
</div>
<div v-if="showReciept">
<transition name="modal">
<div class="modal-mask">
<div class="modal-wrapper">

<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Reciept</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" @click="showReciept = false">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="modal-body">
               <div id="printSection">
                 <div class="col-md-12">
                   <div class="text-center">
                     <p><span style="font-family: Tahoma, 'Lucida Grande', 'Trebuchet MS', Verdana, Helvetica, sans-serif; font-size: 15.4px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">Kamau rest </span>
                       <br style="position: relative; font-family: Tahoma, 'Lucida Grande', 'Trebuchet MS', Verdana, Helvetica, sans-serif; font-size: 15.4px; line-height: normal;">
                       <span style="font-family: Tahoma, 'Lucida Grande', 'Trebuchet MS', Verdana, Helvetica, sans-serif; font-size: 15.4px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">Kajiado</span>
                       <br></p></div><div style="clear:both;">
                         <h4 class="text-center">Sale No.: 00144</h4> <div style="clear:both;">

                       </div>
                       <span class="float-left">Date: {{myDate}}</span><br>
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

                           <tr v-for="(i,index) in cart" @key="index">

                           <td style="text-align:center; width:30px;">{{index+1}}</td>
                           <td  style="text-align:center; width:180px;">{{i.product.product_name |capitalize}}</td>
                           <td style="text-align:center; width:50px;">{{i.quantity}}</td>
                           <td  style="text-align:center; width:180px;">{{i.product.price}}</td>

                           <td  style="text-align:right; width:70px; ">Ksh.{{i.product.price * i.quantity }}</td>

                         </tr>
                         </tbody>
                       </table>
                       <table class="table" cellspacing="0" border="0" style="margin-bottom:8px;">
                           <tbody>
                             <tr>
                               <td style="text-align:left;">Total Items</td>
                               <td style="text-align:right; padding-right:1.5%;">{{cartQuantity}}</td>
                             <td style="text-align:left; padding-left:1.5%;">Total</td>
                             <td  style="text-align:right;font-weight:bold;">Ksh. {{cartTotal}}</td></tr>
                             <tr><td style="text-align:left;"></td>
                               <td style="text-align:right; padding-right:1.5%;font-weight:bold;">

                               </td>
                               <tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">Grand Total</td>
                                 <td colspan="2" style="border-top:1px dashed #000; padding-top:5px; text-align:right; font-weight:bold;">Ksh. {{cartTotal}}</td>
                               </tr>
                               <tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">Paid</td>
                                 <td colspan="2" style="border-top:1px dashed #000; padding-top:5px; text-align:right; font-weight:bold;">Ksh. {{form.amount}}</td>
                               </tr>
                               <tr><td colspan="2" style="text-align:left; font-weight:bold; padding-top:5px;">Due</td>
                                 <td colspan="2" style="border-top:1px dashed #000; padding-top:5px; text-align:right; font-weight:bold;">Ksh. {{cartAmount}}</td>
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
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="closeReciept">Close</button>
            <button type="button" @click="print()" class="btn btn-primary">Print</button>
        </div>
    </div>
</div>

</div>
</div>
</transition>
</div>

    </div>

  </form>
                  </div><!-- card-body -->
                <!-- chart-wrapper -->
                </div><!-- card -->


</template>

<script>
export default {

    data() {
        return {
            myDate: new Date().toDateString().slice(3, 15),
            products: [],
            category: [],
            waiters: [],
            cart: [],
            payment_type: [],
            form: {
                waiter: '',
                total: null,
                quantity: null,
                due: null,
                amount: '',
                pay_type: '',


            },

            showModal: false,
            showReciept: false,
            search: '',
            showSearch: false,
            caris: [],
            search: []
        }
    },
    mounted: function() {
        this.fetchData();
        this.fetchCategory();
        this.fetchWaiter();
        this.fetchPaymentType();



    },
    computed: {
        cartTotal: function() {
            var total = 0;
            this.cart.forEach(function(item) {
                total += item.quantity * item.product.price;

            });
            this.form.total = total;
            return total;

        },
        cartQuantity: function() {
            var quantity = 0;
            this.cart.forEach(function(item) {
                quantity += item.quantity;
            });
            this.form.quantity = quantity;
            return quantity;
        },
        cartAmount: function() {
            var amount = this.form.amount;
            var due;
            var total = 0;
            this.cart.forEach(function(item) {
                total += item.quantity * item.product.price;

            });
            due = amount - total;
            this.form.due = due;
            return due;

        },
        filteredProduct: function() { // filter search
            var search = this.search;
            return _.filter(this.products, (function(data) {
                if ((_.isNull(search))) {
                    return true
                } else {
                    var pr = data.product_name;
                    return pr.match(search);
                }
            }));


            // return this.products.filter((item) => {
            //     return item.product_name.match(this.search);
            // });
        },
        displayQuantity:function(){
          this.cart.forEach(function(item){
            item.product.quantity+= item.quantity;
          });
        }
    },

    methods: {
        fetchData: function() {
            console.log('Fetch....');
            axios.get('/api/products').then((response) => {
                //  console.log(response.data);
                this.products = response.data;

            }).catch((error) => {
                console.log(error);
            })
        },
        fetchWaiter: function() {
            console.log('Fetch....');
            axios.get('/api/waiter').then((response) => {
                //  console.log(response.data);
                this.waiters = response.data.data;

            }).catch((error) => {
                console.log(error);
            })
        },
        fetchCategory: function() {
            console.log('Fetch....');

            axios.get('/api/category').then((response) => {
                //  console.log(response.data);
                this.category = response.data.data;

            }).catch((error) => {
                console.log(error);
            })
        },
        fetchPaymentType: function() {
            console.log('Fetch....');

            axios.get('/api/payment_type').then((response) => {
                //  console.log(response.data);
                this.payment_type = response.data.data;

            }).catch((error) => {
                console.log(error);
            })
        },
        addToCart: function(product) {
            var cartItem = this.getCartItem(product);

            if (cartItem != null) {
                cartItem.quantity++;
            } else {
                this.cart.push({
                    product: product,
                    quantity: 1,

                });

            }
            product.quantity--;

        },


        getCartItem: function(product) {
            for (var i = 0; i < this.cart.length; i++) {
                if (this.cart[i].product.id === product.id) {
                    return this.cart[i];
                }
            }

            return null;
        },
        removeFromCart: function(cartItem) {
          // this.cart.forEach(function(item){
          //   item.product.quantity+= item.quantity;
          // });
          cartItem.product.quantity += cartItem.quantity;
            var index = this.cart.indexOf(cartItem);

            this.cart.splice(index, 1);


      },

        cancel: function() {
            this.cart = [];
        },
        checkout: function() {
            if (this.cart == 0) {
                this.showModal;
                swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Cannot make order if cart is empty!',
                    //footer: '<a href>Why do I have this issue?</a>'
                })
            } else {
                // let client = {
                //     cli: this.form
                // }
                if (this.form.waiter == '') {
                    swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Please enter your name!',
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
                } else {
                    this.showModal = true;


                }
            }
        },
        submit: function() {

            let details = {
                cli: this.form
            }

            let data = {
                carts: this.cart
            }

            axios.post('/api/checkout', {
                data,
                details,

            }).then(res => {

                this.showModal = false;
                this.showReciept = true;

                // this.cart = [];
                // this.form.waiter = '';
                // this.form.total = '';
                // this.form.quantity = '';
                //
                // this.form.due = '';
                // this.form.pay_type = '';
                // this.form.amount = '';
            }).catch(e => {
                console.log(e);
            })
        },
        print: function() {

            this.showReciept = false;
            this.cart = [];
            this.form.waiter = '';
            this.form.total = '';
            this.form.quantity = '';
            this.form.due = '';
            this.form.pay_type = '';
            this.form.amount = '';
            toast.fire({
                type: 'success',
                title: 'Printing .....'
            })

        },
        closeReciept: function() {
            this.showReciept = false;
            this.cart = [];
            this.form.waiter = '';
            this.form.total = '';
            this.form.quantity = '';
            this.form.due = '';
            this.form.pay_type = '';
            this.form.amount = '';
              this.displayQuantity();
        },
        closeModal: function() {
            this.showModal = false;
            this.cart = [];
            this.form.waiter = '';
            this.form.total = '';
            this.form.quantity = '';
            this.form.due = '';
            this.form.pay_type = '';
            this.form.amount = '';
              this.displayQuantity();
        },
    }
}
</script>

<style lang="css" scoped>
.table>tbody>tr>td, .table>tfoot>tr>td{
vertical-align: middle;
}
@media screen and (max-width: 600px) {
table#cart tbody td .form-control{
width:20%;
display: inline !important;
}
.actions .btn{
width:36%;
margin:1.5em 0;
}

.actions .btn-info{
float:left;
}
.actions .btn-danger{
float:right;
}

table#cart thead { display: none; }
table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
table#cart tbody tr td:first-child { background: #333; color: #fff; }
table#cart tbody td:before {
content: attr(data-th); font-weight: bold;
display: inline-block; width: 8rem;




}
}



table#cart tfoot td{display:block; }
table#cart tfoot td .btn{display:block;}
.messageVide {
    font-size: 25px;
    width: 100%;
    background-color: #c2dae8;
    padding: 1.5em 0;
    border-radius: 5px;
    font-weight: lighter;
    display: inline-block;
    text-align: center;
}
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}
.modal-header {
    background-color: #34373d;
}
.modal-title {
    color: #fff;
}
.close {
    color: #fff;
}
.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}
.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}
#card-details {
  max-height: calc(100vh - 210px);
    overflow-y: auto;
}
#product-details {
  max-height: calc(100vh - 210px);
    overflow-y: auto;
}
</style>
