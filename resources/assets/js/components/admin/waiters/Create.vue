`<template lang="html">

  <form class="" @submit.prevent="add" >

    <div :class="['form-group',allerrors.name ? 'has-error' : '']">
      <label for="">Waiter name</label>
      <input class="form-control" type="text" v-model="post.name" value="">
      <span v-if="allerrors.name" :class="['label label-danger']"><p style="color:red;">{{ allerrors.name[0]}}</p></span>

    </div>
    <div :class="['form-group',allerrors.phone ? 'has-error' : '']">
      <label for="">Phone number</label>
  <input type="text" class="form-control" v-model="post.phone" value="">
  <span v-if="allerrors.phone" :class="['label label-danger']"><p style="color:red;">{{ allerrors.phone[0]}}</p></span>

   </div>

    <div class="form-group">
      <label for="">Email(optional.)</label>
      <input type="email" class="form-control" v-model="post.email" value="">

    </div>

    <input type="submit"  class="btn btn-success" value="Save">
  </form>


</template>

<script>
export default {

    data() {
        return {
            post: {
                name:'',
                phone:'',
                email:''
            },
            allerrors:[]
        }
    },
    methods: {
        add: function() {


            let self = this;
            form = new FormData();
            form.append('name', self.post.name);
            form.append('phone', self.post.phone);
            form.append('email', self.post.email);
            //let params = Object.assign({}, self.post);

            axios.post('/api/waiter', form)
                .then((response) => {
                    self.allerrors = [];
                    self.post.name = '';
                    self.post.phone = '';
                    self.post.email = '';
                    toast.fire({
                        type: 'success',
                        title: 'Waiter added Succesfully'
                    })
                    //flash('category added Succesfully','success');

                })

                .catch((error) => {
                    self.allerrors = error.response.data.errors;

                });
            return;
        }

    }
  }
</script>
<style lang="css" scoped>
</style>
`
