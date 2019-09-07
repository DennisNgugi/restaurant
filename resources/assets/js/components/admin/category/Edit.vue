<template lang="html">


  <form @submit.prevent="update">
    <div class="form-group">
      <label for="">Category</label>
      <input class="form-control" type="text" v-model="post.category" >

    </div>


    <input type="submit"  class="btn btn-success" value="Save">
  </form>

</template>


<script>
export default {

    data() {
        return {
            post: {}

        }
    },
    created() {
        let url = `/api/category/${this.$route.params.id}/edit`;
        this.axios.get(url)
            .then((response) => {
                this.post = response.data;
            });
    },
    methods: {
        update() {
          let url = `/api/category/${this.$route.params.id}`;
            this.axios.post(url, this.post)
                .then((response) => {
                    this.$router.push({
                        name: 'category'
                    });
                });
        }
    }
}
</script>
