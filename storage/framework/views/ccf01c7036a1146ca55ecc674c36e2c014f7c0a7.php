<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login Sistem</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  
  <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="<?php echo e(asset('login-asset/css/bootstrap-login-form.min.css')); ?>" />
</head>

<body>
  <!-- Start your project here-->

  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #03943c;

      Chrome 10-25, Safari 5.1-6
      /* background: -webkit-linear-gradient(to left, #e7ee24, #36d882, #36dd73, #1d724a); */

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      /* background: linear-gradient(to left, #e7ee24, #36d882, #36dd73, #206f4a); */
    }
  </style>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                <img class="mb-3" src="<?php echo e(asset('login-asset/img/Logo.png')); ?>" style="width: 100px;" alt="logo">
                <h4 class="mt-1 mb-3 pb-1 text-muted" style="font-size: 19px">Login E-Tamu</h4>
                </div>

                <?php if($message = Session::get('error')): ?>
                <div class="alert alert-danger alert-bordered">
                    <span style="font-size: 15px"><strong>Sorry!</strong> <?php echo e($message); ?></span>
                </div>
                <?php endif; ?>
                <form id="login-form" action="<?php echo e(route('login')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <p class="text-muted" style="font-size: 12px">Please login to your account</p>

                    <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username"  placeholder="Username" value="<?php echo e(old('username')); ?>" autocomplete="username"/>
                    <label class="form-label" for="form2Example11">Username</label>
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password" placeholder="Password" autocomplete="current-password"/>
                    <label class="form-label" for="form2Example22">Password</label>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button>
                      <a class="btn btn-primary btn-block fa-lg mb-3" href="/" type="button">Kembali Ke Halaman Awal</a>
                      <h6 class="text-muted" style="font-size: 12px"> - - - Log In With - - - </h6>
                      <a class="btn btn-info mb-1 btn-block btn-danger" href="<?php echo e('/auth/redirect'); ?>"><i class="fa fa-brands fa-google-plus"></i></a>
                      <a class="text-muted" style="font-size: 12px" href="<?php echo e(route('password.request')); ?>">Forgot password?</a>
                    </div>

                    

                  </form>
                  <footer class="page-footer">
                    <div style="font-size:2.9mm" class="col-md-12 mb-2 mb-lg-0 text-center small text-dark">
                        2023 © <b>Bahrul U.</b> - All rights reserved.
                        <span class="px-1 text-muted">|</span>
                        Dibuat dengan ♥ untuk 🇮🇩
                    </div>
                </footer>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Hello!
                  </h4>
                  <p class="small mb-0">
                    E-Tamu merupakan aplikasi untuk pebukuan tamu yang membantu menyimpan semua informasi tamu yang diperlukan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="<?php echo e(asset('login-asset/js/mdb.min.js')); ?>"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html><?php /**PATH /Users/bahrululum/Documents/etamu/resources/views/auth/login.blade.php ENDPATH**/ ?>