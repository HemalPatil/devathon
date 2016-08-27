
 <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="login" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">CMS Login Portal</p>
          </div>
          <?php if($message){echo ' <p class="center login-form-text red">'.$message.'</p>'; }?>
           
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="identity" name="identity" type="email">
            <label for="identity" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox"  id="remember" name="remember"/>
              <label for="remember">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" name="action" class="btn waves-effect waves-light col s12 ">Sign In</button>     
          </div>
        </div>
        <div class="row">
          <!-- <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="http://demo.geekslabs.com/materialize/v2.1/layout01/page-register.html">Register Now!</a></p>
          </div> -->
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="<?php echo base_url('auth/forgot_password')?>">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>