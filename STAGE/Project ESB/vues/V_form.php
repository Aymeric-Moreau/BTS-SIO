<div class="row"></div>
<form action="index.php?uc=decouvert&action=form" method="post">
    <div class="col-sm-6">
        <label for="exampleInputEmail1" class="form-label">Adresse Mail*</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
        <div class="col-sm-6">
        <label for="nom" class="form-label">Nom*</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder=""  >
    </div>
    <div class="col-sm-6">
        <label for="prenom" class="form-label">Prénom*</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder=""  >
    </div>
    <div class="col-sm-6">
        <label for="Textarea" class="form-label">Contenue du message*</label>
        <textarea class="form-control" id="Textarea" name="Textarea" rows="3"></textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
