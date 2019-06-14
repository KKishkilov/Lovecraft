<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <form action="saveArtist" method="post">
                <div class="form-group">
                    <label for="genres">genres</label>
                    <input type="text" class="form-control" id="genres_name" aria-describedby="emailHelp" placeholder="Enter genres" name="artist_name">
                    <small id="genres_name_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="information">information</label>
                    <input type="text" class="form-control" id="country" aria-describedby="emailHelp" placeholder="enter information" name="information">
                    <small id="information_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="styles">styles</label>
                    <input type="text" class="form-control" id="styles" aria-describedby="emailHelp" placeholder="Enter styles" name="styles">
                    <small id="styles_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="writings">writings</label>
                    <input type="text" class="form-control" id="writings" aria-describedby="emailHelp" placeholder="enter writings" name="writings">
                    <small id="writings_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>