<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contact Us</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        
        hr {
            background-color: #0a58ca;
            height: 2px;
            border: none;
        }

        #logo {
            max-width: 100%;
            height: auto;
            border: 2px solid #0a58ca;
            border-radius: 8px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 22px;
            background: linear-gradient(to right, rgba(138, 43, 226, 0.7), rgba(75, 0, 130, 0.7));
            backdrop-filter: blur(10px);
            color: #fff;
            margin-top: 20px;
        }

        form {
            padding: 20px;
        }

        .form-outline {
            margin-bottom: 20px;
        }

        .btn-primary {
            background: linear-gradient(to right, #8a2be2, #4b0082);
            border-color: #fff;
            border-radius: 22px;
            color: #fff;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #4b0082, #8a2be2);
            border-color: #fff;
        }
    </style>
</head>
<body>

    <br><br>
    <div class="container">
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h2>Contact Us</h2>
                                    
                                    <p>Do you have any questions? Please do not hesitate to contact us directly.<br>
                                    </p>
                                </center>
                              <center>  <img src="/images/image.jpeg" alt="Image" class="img-thumbnail" id="logo" width="130" height="150">
    </center>       <form>
                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Your Name</label>
                         <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your name" />

                                    </div>

                                    <div class="form-outline mb-3">
                                    <label class="form-label" for="form3Example4">Your Email</label>

                                        <input type="email" id="form3Example4" class="form-control form-control-lg" placeholder="Enter your email" />
                                    </div>

                                    <div class="form-outline mb-3">
                                    <label class="form-label" for="form3Example5">Your Message</label>

                                        <textarea id="form3Example5" class="form-control form-control-lg" placeholder="Enter your message" rows="4"></textarea>
                                    </div>

                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <center>
                                            <button type="button" class="btn btn-primary btn-lg">Send</button>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><br><br><br>

</body>
</html>
