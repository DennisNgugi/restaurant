<template lang="html">

  <div class="card">
      <div class="card-body">

          <h3 class="text-center m-0">
            Restaurant Login
              <!-- <a href="index.html" class="logo logo-admin"><img src="public/assets/images/logo.png" height="30" alt="logo"></a> -->
          </h3>

          <div class="col-md-12 text-center">
    <p v-if="errors.length">
        <b>Please correct the following error(s):</b>
        <ul class="list-group">
          <li v-for="error in errors" class="list-group-item list-group-item-danger">{{ error }}</li>
                  </ul>
              </p>
          </div>
          <!-- <div class="col-md-6" v-if="loginfalse = true">
          </div> -->

          <div class="p-3" v-if="loginfalse = true">
              <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
              <p class="text-muted text-center">Sign in to continue .</p>
              <form class="form-horizontal m-t-30" @submit.prevent="checkForm" id="createAdministrator">

                  <div class="form-group">
                      <label for="username">Email</label>
                      <input type="email" class="form-control" id="email" v-model="state.email" name="email" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                      <label for="userpassword">Password</label>
                      <input type="password" class="form-control" id="userpassword" v-model="state.password" placeholder="Enter password">
                  </div>

                  <div class="form-group row m-t-20">
                      <div class="col-6">
                          <!-- <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customControlInline">
                              <label class="custom-control-label" for="customControlInline">Remember me</label>
                          </div> -->
                      </div>
                      <div class="col-6 text-right">
                          <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                      </div>
                  </div>

                  <!-- <div class="form-group m-t-10 mb-0 row">
                      <div class="col-12 m-t-20">
                          <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                      </div>
                  </div> -->
              </form>
          </div>

      </div>
  </div>


</template>

<script>
export default {
  data(){
    return{
      errors: [],
      state:{
        email:'',
        password:''
      }
    }
  },
  methods: {
    checkForm :function(){
      this.errors = [];
      if(!this.state.email){
        this.errors.push("Username required")
      }
      if(!this.state.password){
        this.errors.push("Password required")
      }
      else{
        var formContents =
      jQuery("#createAdministrator").serialize();
      axios.post('/api/login',formContents).then(function(response,status,request){
        alert(response.data.user);
      },function(){
        console.log("Failed");
      });
      }
    }
  }
}
</script>

<style lang="css" scoped>
</style>
