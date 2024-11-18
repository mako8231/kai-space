<script setup>
</script>

<template>
    <div class="container">
        <form action="">
            <div class="row form-login-register">
                <div class="form-group col-lg-6">
                    <label for="userEmail"><span class="bold-text">E-mail</span></label>
                    <input type="email" class="form-control" id="userEmail" placeholder="Email">
                </div>
                <div class="form-group col-lg-6">
                    <label for="userName"><span class="bold-text">Username</span></label>
                    <input type="text" class="form-control" id="userName" placeholder="Username">
                </div>
                <div class="form-group col-lg-12">
                    <label for="userPassword"><span class="bold-text">Password</span></label>
                    <input type="password" class="form-control" id="userPassword" placeholder="Password">
                </div>
                <div class="form-group col-lg-12">
                    <label for="userPasswordConfirm"><span class="bold-text">Confirm Password</span></label>
                    <input type="password" class="form-control" id="userPasswordConfirm" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <button class="form-button btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</template>