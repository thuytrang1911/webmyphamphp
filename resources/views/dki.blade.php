
<!doctype html> 
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">

<head>
	@include('includes.head')
	
  </head>

  <body id="authentication" class="lang-en country-us currency-usd layout-full-width page-authentication tax-display-disabled page-customer-account sub-page">

    
    <main>
      
              
      <!-- header           -->
	@include('includes.header1')
	        
        
<aside id="notifications">
  <div class="container">
    
    
    
      </div>
</aside>
      
      <div id="wrapper">
		<div class="container">
			<div class="breadcrumb-name">
								
									
			</div>
		</div>
        <div class="inner-wrapper container">
			<div class="row">
			  

			  
  <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
    

  <div id="main">

    
            @if(Session::has('thanhcong'))
				<div class="alert alert-success">{{Session::get('thanhcong')}} 
					@php
					Session::forget('thanhcong');
					@endphp
				</div>
			@endif
        <header class="page-header">
          <h1>
  Create an account
</h1>
        </header>
      
    

    
      <section id="content" class="page-content card card-block">
        
        
    
      
      <section class="register-form">
        <p>Already have an account? <a href="login">Log in instead!</a></p>
        

<form action="{{ url('/dki') }}" id="customer-form" class="js-customer-form" method="POST">
{{ csrf_field() }}
  <section>
    
              
          
  <input type="hidden" name="id_customer" value="">


        
              
          
  <!-- <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Social title
          </label>
    <div class="col-md-6 form-control-valign">

      
                  <label class="radio-inline">
            <span class="custom-radio">
              <input
                name="id_gender"
                type="radio"
                value="1"
                                              >
              <span></span>
            </span>
            Mr.
          </label>
                  <label class="radio-inline">
            <span class="custom-radio">
              <input
                name="id_gender"
                type="radio"
                value="2"
                                              >
              <span></span>
            </span>
            Mrs.
          </label>
        
      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div> -->


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Name
          </label>
    <div class="col-md-6">

      
        <input class="form-control" name="usersname" type="text" value=""  required        >
                              @if ($errors->has('usersname'))
                                <span class="text-danger">{{ $errors->first('usersname') }}</span>
                            @endif
      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Full name
          </label>
    <div class="col-md-6">

      
        <input class="form-control" name="fullname" type="text" value="" required        >
        @if ($errors->has('fullname'))
            <span class="text-danger">{{ $errors->first('fullname') }}</span>
        @endif
      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">

      
        <input class="form-control" name="email" type="email" value="" required        >
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Password
          </label>
    <div class="col-md-6">

      
        <div class="input-group js-parent-focus">
            <input class="form-control js-child-focus js-visible-password" name="password"  type="password" value="" pattern=".{5,}"  required          >
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <span class="input-group-btn">
            <button
              class="btn"
              type="button"
              data-action="show-password"
              data-text-show="Show"
              data-text-hide="Hide"
            >
              Show
            </button>
          </span>
        </div>
      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div>

  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Re_Password
          </label>
    <div class="col-md-6">

      
        <div class="input-group js-parent-focus">
          <input class="form-control js-child-focus js-visible-password" name="re_password" type="password" value="" pattern=".{5,}" required          >
            @if ($errors->has('re_password'))
                <span class="text-danger">{{ $errors->first('re_password') }}</span>
            @endif
            <span class="input-group-btn">
            <button
              class="btn"
              type="button"
              data-action="show-password"
              data-text-show="Show"
              data-text-hide="Hide"
            >
              Show
            </button>
          </span>
        </div>
      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div>
        
              
          
  <!-- <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Birthdate
          </label>
    <div class="col-md-6">

      
        <input
          class="form-control"
          name="birthday"
          type="text"
          value=""
          placeholder="MM/DD/YYYY"                            >
                  <span class="form-control-comment">
            (E.g.: 05/31/1970)
          </span>
        
      
      

    </div>

    <div class="col-md-3 form-control-comment">
             Optional
          </div>
  </div> -->


        
              
          
  <!-- <div class="form-group row ">
    <label class="col-md-3 form-control-label">
          </label>
    <div class="col-md-6">

      
        <span class="custom-checkbox">
          <input name="optin" type="checkbox" value="1"  >
          <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
          <label>Receive offers from our partners</label >
        </span>

      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
          </label>
    <div class="col-md-6">

      
        <span class="custom-checkbox">
          <input name="newsletter" type="checkbox" value="1"  >
          <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
          <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label >
        </span>

      
      

    </div>

    <div class="col-md-3 form-control-comment">
          </div>
  </div> -->


        
          
  </section>

  <footer class="form-footer clearfix">
    <input type="hidden" name="submitCreate" value="1">
    
      <button class="btn btn-primary form-control-submit pull-xs-right"  type="submit">
        Save
      </button>
      
  </footer>

</form>

      </section>
    

      </section>
    

    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </div>

  </div>


			  
			</div>
        </div>
      </div>
	  <!-- <div class="blockPosition4">
	  
	  </div> -->
      <!-- footer           -->
	@include('includes.footer1')

    </main>

    

    
	<div class="back-top"><a href= "#" class="back-top-button"><i class="fa-thin fa-angle-up"></i></a></div>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/sanphamcontroller.js"></script>
	<script src="/JS/dirPagination.js" type="text/javascript"></script>
  </body>
</html>