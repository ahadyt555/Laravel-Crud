<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel 8 Ajax Post Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style type="text/css">
        /* Custom page CSS
        -------------------------------------------------- */
        /* Not required for template or sticky footer method. */

        main > .container {
          padding: 60px 15px 0;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fixed navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Laravel 8 Ajax Post Example by <a href="https://codeanddeploy.com" target="_blank">codeanddeploy.com</a></h1>

            <form class="update-form" action="{{ route('update.order', ['orderId' => $order->id]) }}" method="POST">
    <!-- Hidden input for the record ID -->
    <input type="hidden" name="id" value="{{ $order->id }}">
    
    <!-- Fields for updating data -->
    <div class="form-group">
        <label for="contact_person">Contact Person:</label>
        <input type="text" class="form-control" name="contact_person" value="{{ $order->contact_person }}">
    </div>
    
    <div class="form-group">
        <label for="school_address">School Name & Address:</label>
        <input type="text" class="form-control" name="school_address" value="{{ $order->school_address }}">
    </div>
    
    <div class="form-group">
        <label for="user_city">City:</label>
        <input type="text" class="form-control" name="user_city" value="{{ $order->user_city }}">
    </div>
    
    <div class="form-group">
        <label for="call_whatsapp">Contact No:</label>
        <input type="text" class="form-control" name="call_whatsapp" value="{{ $order->call_whatsapp }}">
    </div>
    
    <div class="form-group">
        <label for="alt_num">Alternative No:</label>
        <input type="text" class="form-control" name="alt_num" value="{{ $order->alt_num }}">
    </div>
    
    <div class="form-group">
        <label for="payment_method">Payment Method:</label>
        <input type="text" class="form-control" name="payment_method" value="{{ $order->payment_method }}">
    </div>
    
    <!-- Add other fields as needed -->
    
    <!-- "Update" button -->
    <button type="button" class="btn btn-primary update-button">Update</button>
</form>

        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/ajax-post.js') }}" defer></script>

</body>

</html>
