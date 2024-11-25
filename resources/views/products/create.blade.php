<!DOCTYPE html>
    <html lang="fr">
    <head>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
        <h1>Ajouter un Utilisateur</h1>
        <div class="row">
        <div class="col-lg-8">
        <form action="{{ route('users.store') }}" method="POST">
        @csrf <!-- Token CSRF pour la sécurité des formulaires -->
        <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </form>
        </div>
        </div>
        <!-- Bootstrap JS and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
