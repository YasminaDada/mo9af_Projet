@extends('Layouts/Layout')
<title>Bricolage Index</title>
@section('content')
<div class="form">
    <form action="{{ route('bricoloage.store') }}" method="POST"></form>
    <div class="form-style-5">
        <input type="text" name="CIN" placeholder="Votre CIN *">
        <input type="text" name="Nom_employe" placeholder="Votre nom *">
        <input type="text" name="Prenom_employe" placeholder="Votre Prenom *">
        <input type="text" name="Numero_Tel" placeholder="Votre numero *">
        <select id="job" name="categorie">
          <option value="" selected>Choisir une catégorie *</option>
          <option value="Electricien">Électricien</option>
          <option value="Plombier">Plombier</option>
          <option value="Amenagement">Service pour un aménagement intérieur</option>
          <option value="Macon">Maçon</option>
          <option value="Mecanicien">Mécanicien</option>
          <option value="Menuiserie">Menuiserie</option>
          <option value="Peintre">Peintre</option>
          <option value="Serrurier">Serrurier</option>
          <option value="Vitrier">Vitrier</option>
          <option value="Artisanat">Artisanat</option>
          <option value="jardinage">Jardinage</option>
          <option value="forgeron">Forgeron</option>
          <option value="Other">Other</option>
        </select>
        <select name="SousCategorie">
          <option value="" selected>Choisir une sous catégorie d'artisanat</option>
          <option value="Argile">Le travail de l'argile</option>
          <option value="Or">Le travail de l'or</option>
          <option value="Poterie">La poterie</option>
          <option value="Bois">Le travail du bois</option>
          <option value="Tapis">L'art du tapis</option>
          <option value="Metal">Le travail du métal</option>
          <option value="Textile">Le travail du textile</option>
          <option value="Vannerie">La vannerie</option>
          <option value="Broderie">La broderie</option>
          <option value="Beaute">Soin et Beauté</option>
        </select>
        <input type="text" name="Email" placeholder="Votre Email">
        <input type="text" name="Adresse" placeholder="Votre adresse *">
        <div class="mb-1">
            <label>Photo CIN *</label>
            <input type="file" name="photo" class="form-control" placeholder="Choisir une image de CIN" >
        </div>
        <div class="mb-1">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control" placeholder="Choisir une image" >
        </div>
        <input type="submit" value="Envoyer" />
        </form>
        </div>
  </div>
@endsection
