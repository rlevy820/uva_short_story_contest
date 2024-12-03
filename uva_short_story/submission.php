<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>UVA Short Story Contest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: #F6E3CB">

    <nav style="margin-left: 25%;" class="navbar navbar-light text-center ">
        <a style="color:white;" class="navbar-brand btn btn-lg btn-primary" href="form.php">Home</a>
    </nav>

    <p style="margin-top: 2.5%;" class="text-center h1">Rewards</p>
    <div style="margin-left: 25%; margin-right: 25%; border-radius:20px;">
    <ul style="background-color: #EDC697" class="list-group text-left list-group-flush list-group-item">
        <li style="background-color: #EDC697" class="list-group-item"><strong>1st Place:</strong> $200 Cash Prize, Publication in a short story collection</li>
        <li style="background-color: #EDC697" class="list-group-item"><strong>2nd - 20th Place:</strong> Publication in a short story collection</li>
    </ul>
    </div>

    <br>

    <p class="text-center h1">Rules</p>
    <div style="margin-left: 25%; margin-right: 25%; border-radius:20px;">
    <ul style="background-color: #EDC697;" class=" list-group text-left list-group-flush list-group-item">
        <li style="background-color: #EDC697" class="list-group-item"><strong>1.</strong> Minimum word count: 1,000</li>
        <li style="background-color: #EDC697" class="list-group-item"><strong>2.</strong> Maximum word count: 5,000</li>
        <li style="background-color: #EDC697" class="list-group-item"><strong>3.</strong> Must be in PDF format</li>
        <li style="background-color: #EDC697" class="list-group-item"><strong>4.</strong> Cannot include anything deemed hateful, or actively discriminatory against any people or groups of people. Things of the sort will be struck down during judging, anyways</li>
        <li style="background-color: #EDC697" class="list-group-item"><strong>5.</strong> Must be a narrative, which includes non-fiction accounts and memoirs</li>
        <li style="background-color: #EDC697" class="list-group-item">Other than that, enjoy creative freedom!</li>
    </ul>
    </div>

    <br>

    <p class="text-center h1">Submission</p>

    <div style="margin-left: 25%; margin-right: 25%">
        <form action="includes/submission.inc.php" method="post" enctype="multipart/form-data">
            <!-- form data will be sent to file named includes/login.inc.php and it will be send 
            through the post method: ex. i can retrieve the name data under the with $_POST['name'] (this is becasue the name="" value in the name input is "name")  -->
        
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname" placeholder="First Name" required>
            </div>
            <br>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" placeholder="Last Name" required>
            </div>
            <br>
            <div class="form-group">
                <label for="email">UVA</label>
                <input type="email" pattern=".+@virginia\.edu" class="form-control" id="email" name="email" aria-describedby="email" placeholder="UVA Email" required>
                <small id="emailHelp" class="form-text text-muted">Please make sure the email ends with "virginia.edu"</small>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Short Story Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Title" required>
            </div>
            <br>
            <div class="form-group">
                <label for="pdf">Short Story</label>
                <input type="file" class="form-control-file" id="pdf" name="pdf" accept=".pdf" required><br>
                <small id="filehelp" class="form-text text-muted">File must be in PDF format</small>
            </div>
            <br>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="ToS" id="ToS" required>
                <label class="form-check-label" for="ToS">I Agree to the</label>

                    <button style="margin:0 !important;" type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Terms and Conditions</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Terms and Conditions</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Each entrant retains the copyright to their entry but grants to McCune Entertainment LLC. a non-exclusive, irrevocable, perpetual, transferable, sub-licensable, worldwide, royalty-free license to store, publish, edit, and otherwise use the entry on our website(s) and platform(s) to publish all or part of your entry and in all media now known or hereafter discovered at our discretion.

                            You agree that such use by McCune Entertainment LLC. may include editing and publishing your entry, including within a compilation together with others, into a book format (or any other format) which may be published and sold or provided free of charge at the discretion of McCune Entertainment LLC.
                            If your story is selected as Winner (and even if you are not selected as a Winner), you may still publish the story elsewhere.

                            By submitting an entry, you agree that McCune Entertainment LLC. may at its sole discretion edit, adapt, abridge, or translate the entry for the purposes listed in these terms and conditions.

                            You grant permission to McCune Entertainment LLC. to use your name and entry for promotional purposes without additional compensation and to publish all or part of your entry in all media now known or hereafter discovered, worldwide and on the Internet and the World Wide Web, without notice, review, or approval.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        </div>
                        </div>
                    </div>


            </div>
            <br>
            <br>
            <button style="padding: 5px 20px; margin-left: 40%; margin-right: 25%" type="submit" name="form_submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

