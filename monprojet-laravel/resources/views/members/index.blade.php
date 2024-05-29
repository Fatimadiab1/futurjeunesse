<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
</head>
<body>
    {{-- Message de succes --}}
    <h1>Liste des membres</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
{{-- Liste des membres --}}
    @if ($members->isEmpty())
        <p>Aucun membre n'a été trouvé.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->nom }}</td>
                        <td>{{ $member->prenom }}</td>
                        <td>{{ $member->age }}</td>
                        <td>{{ $member->adresse }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->tel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('members.create') }}">Ajouter un nouveau membre</a>
</body>
</html>
