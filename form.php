<?php include 'view.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
              	<div class="text-center">
                  <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.6435-9/105019232_3073399092735917_7720627430733562192_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeF5t-CXsGXcNvCzpVJYzQpnwg5iKf4CUrrCDmIp_gJSuvAF3w2ARpazl8ZB1g4YUqwZp9I2fXeyPnRLMmHgk0I5&_nc_ohc=2GZnnhE5nw4AX_bpTMY&_nc_ht=scontent.fceb2-1.fna&oh=be03038d6a7845776a5455d124b7747b&oe=61D043F7" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Team Lose</h4>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                	// Create a new cURL resource
                	$url = 'http://lending-loan.com/trainee/create';
 
					$curl = curl_init();

                	$fname = $_POST['f_name'];
                	$lname = $_POST['l_name'];
                	$email = $_POST['email'];

                	$data =array(
					  'first_name' => $fname,
					  'last_name' => $lname,
					  'email' => $email
					);
					 
					$fields_string = http_build_query($data);
 
					curl_setopt($curl, CURLOPT_URL, $url);
					curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
					
					
					
				}

				
					?>

                <form action="form.php" method="POST">

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="f_name" required />
                    <label class="form-label" for="form2Example11">First Name</label>

                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="l_name" required />
                    <label class="form-label" for="form2Example22">Last Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" class="form-control" name="email" required />
                    <label class="form-label" for="form2Example22">Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="submit" class="btn btn-primary form-control" name="submit" />
                    <a href="view.php?id=<?php $data = curl_exec($curl); ?>">View Your data</a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>