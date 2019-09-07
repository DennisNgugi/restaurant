<template lang="html">

  <div class="table-responsive">
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>#</th>

        <th>Category</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <tr v-for="(p,index) in posts" :key="index">
        <td>{{index+1}}</td>
        <td>{{p.category}}</td>

        <td>
        <router-link :to="{name: 'category_edit', params: { id: p.id }}" class="btn btn-primary btn-sm">Edit</router-link>
        </td>
  <td>

              <input type="submit" @click.prevent="disable(p.id)" class="btn btn-danger btn-sm" value="Delete">

        </td>
      </tr>
    </tbody>
  </table>
  </div>

</template>


<script>
export default {

    data() {
        return {
            posts: [],
            post: {}
        }
    },
    mounted: function() {
        this.fetchData();
    },


    methods: {

        fetchData: function() {
            console.log('Fetching data....');

            this.axios.get('/api/category').then((response) => {
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
                  let uri = `/api/category/${id}`;
                  this.axios.delete(uri).then(response => {
                      this.posts.splice(this.posts.indexOf(id), 1);
                      this.fetchData();
                  });
                    swal.fire(
                        'Deleted!',
                        'Category has been deleted.',
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
