<template lang="html">

  <form class="" @submit.prevent="add" >

    <div class="form-group">
      <label for="">Waiter model</label>
      <input class="form-control" type="text" model="post.model" value="">
    </div>
    <div class="form-group">
      <label for="">Phone number</label>
  <input type="text" class="form-control" model="post.phone" value="">
   </div>

    <div class="form-group">
      <label for="">Email(optional.)</label>
      <input type="email" class="form-control" model="post.email" value="">
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
