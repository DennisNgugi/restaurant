<template lang="html">

  <form class="" @submit.prevent="add"  enctype="multipart/form-data">

    <div :class="['form-group',allerrors.product_name ? 'has-error' : '']">
      <label for="">Product name</label>
      <input class="form-control" type="text" v-model="post.product_name" value="">
      <span v-if="allerrors.product_name" :class="['label label-danger']"><p style="color:red;">{{ allerrors.product_name[0]}}</p></span>

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
}
</script>

<style lang="css" scoped>
</style>
