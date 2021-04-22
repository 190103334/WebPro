<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<img class="wave" src="/assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="{{ route('saving') }} " method="post" enctype="multipart/form-data">
			 @csrf
				<img src="/assets/img/avatar.svg">
				<h2 class="title" style="color:#38d39f">{{__('lang.adver')}}</h2>
           		<div class="input-div one">
           		   <div class="i">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>{{__('lang.name')}}</h5>
           		   		<input type="text" class="input" name="name">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>{{__('lang.email')}}</h5>
           		    	<input type="email" class="input" name="email">
            	   </div>
            	</div>

                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="div">
                         <h5>{{__('lang.phone')}} {{__('lang.number')}}</h5>
                         <input type="tel" class="input" name="phone">
                 </div>
              </div>
              <br>
              <h5 style="color:#38d39f">{{__('lang.zip')}}</h5>

              <div class="input-div pass">
                <div class="i"> 
                    <i class="fa fa-file-archive-o" aria-hidden="true" accept=".zip,.rar,.7zip" ></i>
                </div>
                
                <div class="div">
                     <input type="file" name="doc_zip">
             </div>
          </div>
            	
            	<input type="submit" class="btn" value="Send" href="{{ route('sending') }}">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/assets/js/script.js') }}"></script>
</body>
</html>