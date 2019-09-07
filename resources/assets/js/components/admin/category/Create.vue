<template lang="html">


  <form @submit.prevent="add">
    <div :class="['form-group',allerrors.category ? 'has-error' : '']">
      <label for="">Category</label>
      <input class="form-control" type="text" v-model="post.category" value="">
      <span v-if="allerrors.category" :class="['label label-danger']"><p style="color:red;">{{ allerrors.category[0]}}</p></span>

    </div>


    <input type="submit"  class="btn btn-success" value="Save">
  </form>

</template>

<script>
export default {

    data() {
        return {
            post: {
                category:''
            },
            allerrors: [],
        }
    },
    methods: {
        add: function() {


            let self = this;
            form = new FormData();
            form.append('category', self.post.category);
            //let params = Object.assign({}, self.post);

            axios.post('/api/category', form)
                .then((response) => {
                    self.allerrors = [];
                    self.post.category = '';
                    toast.fire({
                        type: 'success',
                        title: 'Category added Succesfully'
                    })
              //      window.location.reload();
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
