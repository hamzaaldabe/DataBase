<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container main-container">
    <div class="row justify-content-center">
        <div class="card" style="width: 40rem; margin-bottom: 70px">
            <div class="card-body">
                <div class="name">
                    <p class="h1" style="text-align: center">Dynometer Al-Dabe</p>
                    <p class="h3" style="text-align: center">09-2692444</p>
                </div>
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <form class="bg-white rounded shadow-5-strong p-5">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example1">PlateNO.</label>
                            <input type="text" id="form1Example1" class="form-control"/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example2">date</label>
                            <input type="date" id="form1Example2" class="form-control"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example4">Service Type</label>
                            <input type="text" id="form1Example4" class="form-control"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example5">Engine Type</label>
                            <input type="text" id="form1Example5" class="form-control"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example6">Test Pass</label>
                            <input type="text" id="form1Example6" class="form-control"/>
                        </div>
                        <!-- 2 column grid layout for inline styling -->
                        <!-- Submit button -->
                        <div class="d-grid gap-1 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Insert</button>
                        </div>
                        <br>
                        <div class="d-grid gap-1 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                        <br>
                        <div class="d-grid gap-1 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>