<template>
   <div class="auto-form-wrapper">
          <form id="FormLogin"
          @submit = "checkForm"
          
           >
                  <div class="form-group">
                    <label class="label"> Xin chào {{email}}</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username"
                      id="email"
                      v-model="email"
                      name="email"
                      >
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Password"
                      id="pass"
                      v-model="pass"
                      name="pass"
                      
                      >
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    
                       <input class="btn btn-primary submit-btn btn-block" type="submit" value="Submit">
                  
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                 
                 
                </form>
    </div>
</template>
<script >
export default {
    name : 'login',
    data() {
       return {
            email : null,
            pass : null,
            title : '',
           
       }
      
       
    },
   
     methods : {
        checkForm(e) {
          
          axios.post('/login',{email : this.email ,pass : this.pass})
                .then(response => {
                    console.log(response.data)
                })
                .catch(error => {
                    console.log(response)
                })
  e.preventDefault();
        }
       } 
    
}
</script>