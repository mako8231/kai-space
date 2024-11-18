<script setup>
</script>

<template>
    <div class="container">
        <form action="">
            <div class="row form-login-register">
                <div class="form-group col-lg-6">
                    <label for="userEmail"><span class="bold-text">E-mail or Username</span></label>
                    <input type="text" class="form-control" id="userEmail" placeholder="Email or Username">
                </div>
                <div class="form-group col-lg-6">
                    <label for="userPassword"><span class="bold-text">Password</span></label>
                    <input type="password" class="form-control" id="userPassword" placeholder="Password">
                </div>
                <div class="form-group col-lg">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <button class="form-button btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
</template>