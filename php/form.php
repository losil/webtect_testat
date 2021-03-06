<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Silvan Loser">
    <meta name="publisher" content="Silvan Loser">
    <title>Kontaktanfrage</title>
</head>
 
<body>
 
    <header>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="form.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </header>
 
 
    <div class="kontakt-form " id="kontakt">
 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Kontaktanfrage erfolgreich übermittelt</h4>
            <p>Vieln Dank für Ihre Kontaktanfrage. Wir haben Ihre Daten empfangen:</p>
            <hr>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
            <p class="mb-0">
                <b>Anrede</b>
                <?php echo $_GET["anrede"]; ?><br />
                <b>Vorname:</b>
                <?php echo $_GET["vorname"]; ?><br />
                <b>Name:</b>
                <?php echo $_GET["name"]; ?><br />
                <b>E-Mail:</b>
                <?php echo $_GET["email"]; ?><br />
                <b>Text:</b>
                <?php echo $_GET["textArea"]; ?><br />
        </div>
 
        <button class="btn btn-outline-secondary btn-lg btn-block" type="submit" onclick="location.href = '/index.html';"> Zurück zu Startseite </button>
 
    </div>
</body>
 
</html>