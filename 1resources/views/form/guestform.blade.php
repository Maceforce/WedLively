<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planning Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Wedding Planning Form</h1>
        <form action="{{ route('your.route.here') }}" method="POST" class="mt-4">
            @csrf

            <!-- First Row: Name and Email -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <!-- Second Row: Getting Married and Wedding Date -->
            <div class="form-group row">
                <label for="getting_married" class="col-sm-2 col-form-label">Getting Married</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="getting_married" name="getting_married" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="wedding_date" class="col-sm-2 col-form-label">Wedding Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="wedding_date" name="wedding_date" required>
                </div>
            </div>

            <!-- Third Row: Number of Guests and Estimated Budget -->
            <div class="form-group row">
                <label for="number_of_guests" class="col-sm-2 col-form-label">Number of Guests</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="number_of_guests" name="number_of_guests" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="estimated_budget" class="col-sm-2 col-form-label">Estimated Budget</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="estimated_budget" name="estimated_budget" required>
                </div>
            </div>

            <!-- Fourth Row: City/Town -->
            <div class="form-group row">
                <label for="city_town" class="col-sm-2 col-form-label">City/Town</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="city_town" name="city_town" required>
                </div>
            </div>

            <!-- Wedding Vendors Needed -->
            <div class="form-group">
                <label class="col-form-label">Which wedding vendors do you still need?</label>
                <div>
                    @foreach (['Venue', 'Catering', 'Photography', 'Band', 'Invitations', 'Favors & Gifts', 'Flowers', 'Dress & Attire', 'Travel', 'Transportation', 'Lighting & Decor', 'Planning', 'Wedding Cake', 'Videography'] as $vendor)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="vendors[]" value="{{ $vendor }}" id="vendor_{{ strtolower(str_replace(' ', '_', $vendor)) }}">
                            <label class="form-check-label" for="vendor_{{ strtolower(str_replace(' ', '_', $vendor)) }}">{{ $vendor }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
