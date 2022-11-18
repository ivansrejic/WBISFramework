<div class="card card-plain mt-8">
    <div class="card-header pb-0 text-left bg-transparent">
        <h3 class="font-weight-bolder text-info text-gradient">Register</h3>
        <p class="mb-0">Enter your email and password to register</p>
    </div>
    <div class="card-body">
        <form action="/registrationProcess" method="post"  role="form">
            <label>Email</label>
            <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
            </div>
            <label>Password</label>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
            </div>
            <div class="form-check form-switch">

            </div>
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Register</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
        <p class="mb-4 text-sm mx-auto">
            Already have account??
            <a href="/login" class="text-info text-gradient font-weight-bold">Log in</a>
        </p>
    </div>
</div>