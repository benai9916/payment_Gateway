    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
    
        <title>Thank You, Mojo</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </head>
    
      <body>
        <div class="container">
    
          <div class="page-header">
            <h1><a href="index.php">Donation</a></h1>
            <p class="lead">A test payment integration</p>
          </div>
    
          <h3 style="color:#6da552">Thank You, Payment successfull !!</h3>
          
      
    
     <?php
    
    include 'src/instamojo.php';
    
    $api = new Instamojo\Instamojo('test_8ae79c2bcfb47d64412cb43977a', 'test_117bc25cb7fcf75ab14b7f90697','https://test.instamojo.com/api/1.1/');
    
    
    $payid = $_GET["payment_request_id"];
    
    
    try {
        $response = $api->paymentRequestStatus($payid);
    
    
        echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
        echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
        echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
    
        ?>
    
    
        <?php
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
    
    
    
      ?>
    
    <small>please check your mail for more detail</small>
          
        </div> 
    
    
      </body>
    </html>