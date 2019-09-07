<template lang="html">


  <form class="" @submit.prevent="add"  enctype="multipart/form-data">

    <div :class="['form-group',allerrors.product_name ? 'has-error' : '']">
      <label for="">Product name</label>
      <input class="form-control" type="text" v-model="post.product_name" value="">
      <span v-if="allerrors.product_name" :class="['label label-danger']"><p style="color:red;">{{ allerrors.product_name[0]}}</p></span>

    </div>


        <div :class="['form-group',allerrors.quantity ? 'has-error' : '']">
          <label for="">Product quantity</label>
          <input class="form-control" type="text" v-model="post.quantity" value="">
          <span v-if="allerrors.quantity" :class="['label label-danger']"><p style="color:red;">{{ allerrors.quantity[0]}}</p></span>

        </div>
    <div :class="['form-group',allerrors.category ? 'has-error' : '']">
      <label for="">Product Category</label>
  <select class="form-control" v-model="post.category">
  <option value="">Choose category</option>
  <option v-for="p in category"v-bind:value="p.id" >{{p.category}}</option>
  </select>
  <span v-if="allerrors.category" :class="['label label-danger']"><p style="color:red;">{{ allerrors.category[0]}}</p></span>

   </div>

    <div :class="['form-group',allerrors.price ? 'has-error' : '']">
      <label for="">Price(Ksh.)</label>
      <input class="form-control" type="text" v-model="post.price" value="">
      <span v-if="allerrors.price" :class="['label label-danger']"><p style="color:red;">{{ allerrors.price[0]}}</p></span>

    </div>

        <div :class="['form-group',allerrors.image ? 'has-error' : '']">
          <label for="">Featured image</label>
          <div class="col-md-3" v-if="post.image">
          </div>
          <input type="file" v-on:change="onImageChange" class="form-control"  aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">Image to be displayed as featured in the home page.</small>
          <span v-if="allerrors.image" :class="['label label-danger']"><p style="color:red;">{{ allerrors.image[0]}}</p></span>

          <img :src="post.image" class="img-responsive" height="100" width="100" alt="">

        </div>

    <input type="submit"  class="btn btn-success" value="Save">
  </form>


</template>

<script>
export default {

    data() {
        return {

            category: [],

            post: {
                product_name: '',
                quantity:'',
                category: '',
                price: '',
                image: '',


            },
            allerrors: [],
        }
    },
    mounted: function() {
        this.fetchCategory();

    },

    methods: {
        onImageChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.post.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        fetchCategory: function() {
            console.log('Fetching data....');

            this.axios.get('/api/category').then((response) => {
                //  console.log(response.data);
                this.category = response.data.data;
            }).catch((error) => {
                console.log(error);
            })
        },
        add: function() {

            let self = this;
            form = new FormData();

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            form.append('product_name', self.post.product_name);
            form.append('quantity', self.post.quantity);

            form.append('category', self.post.category);
            form.append('price', self.post.price);
            form.append('image', self.post.image);


            //let params = Object.assign({}, self.post);
            axios.post('/api/products', form, config)
                .then((response) => {
                    self.allerrors = [];
                    self.post.product_name = '';
                    self.post.quantity = '';
                    self.post.category = '';
                    self.post.price = '';
                    self.post.image = '';

                    toast.fire({
                        type: 'success',
                        title: 'Product added successfully'
                    })
                    //flash('post added Succesfully', 'success');
                })
                .catch((error) => {
                    self.allerrors = error.response.data.errors;
                });
            return;
        },
    }
}
</script>

<style lang="css" scoped>
</style>
