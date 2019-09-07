<template lang="html">
    <div>


  <form @submit.prevent="add">
    <div :class="['form-group',allerrors.payment_type ? 'has-error' : '']">
      <label for="">Payment type</label>
      <input class="form-control" type="text" v-model="post.payment_type" value="">
      <span v-if="allerrors.payment_type" :class="['label label-danger']"><p style="color:red;">{{ allerrors.payment_type[0]}}</p></span>

    </div>


    <input type="submit"  class="btn btn-success" value="Save">
  </form>



  <div class="row mt-4">
    <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>#</th>

          <th>Payment Type</th>

          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        <tr v-for="(p,index) in posts" :key="index">
          <td>{{index+1}}</td>
          <td>{{p.payment_type}}</td>

          <td>
          <router-link :to="{name: 'payment_type_edit', params: { id: p.id }}" class="btn btn-primary btn-sm">Edit</router-link>

                <input type="submit" @click.prevent="disable(p.id)" class="btn btn-danger btn-sm" value="Delete">

          </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
      </div>
</template>

<script>
export default {

    data() {
        return {
            post: {
                payment_type:''
            },
            posts:[],
            allerrors: [],
        }
    },
    mounted: function() {
        this.fetchData();
    },

    methods: {
        add: function() {


            let self = this;
            form = new FormData();
            form.append('payment_type', self.post.payment_type);
            //let params = Object.assign({}, self.post);

            axios.post('/api/payment_type', form)
                .then((response) => {
                    self.allerrors = [];
                    self.post.payment_type = '';
                    toast.fire({
                        type: 'success',
                        title: 'Payment Type added Succesfully'
                    })
              //      window.location.reload();
                    //flash('payment_type added Succesfully','success');
                      this.fetchData();
                })

                .catch((error) => {
                    self.allerrors = error.response.data.errors;

                });
            return;
        },

                fetchData: function() {
                    console.log('Fetching data....');

                    this.axios.get('/api/payment_type').then((response) => {
                        //  console.log(response.data);
                        this.posts = response.data.data;
                    }).catch((error) => {
                        console.log(error);
                    })
                },
                disable(id) {
                    swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {

                        if (result.value) {
                          let uri = `/api/payment_type/${id}`;
                          this.axios.delete(uri).then(response => {
                              this.posts.splice(this.posts.indexOf(id), 1);
                              this.fetchData();
                          });
                            swal.fire(
                                'Deleted!',
                                'Payment type has been deleted.',
                                'success'
                            )
                        }
                    }).
                    catch(()=>{
                      swal("Failed","There was something wrong","warning");
                    })


                }

    }
  }
</script>

<style lang="css" scoped>
</style>
